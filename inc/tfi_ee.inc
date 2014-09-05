<?php
require_once 'inc/database.inc';

class tfi_ee {
	
	public $db;
	public $channel_fields;
	public $matrix_fields;
	
	function __construct(){
		global $database;
		
		$this->db = new mysqli($database['host'], $database['user'], $database['password'], $database['database']);
		if ($this->db->connect_errno) {
			echo "Failed to connect to MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error;
		}
	}
	
	public function get_project_by_year($year){
		$this->get_channel_fields(array('Films', 'Filmmakers'));
		//print_r($this->channel_fields); return 1;
		//load project
		$sql = '
			SELECT
				exp_channel_titles.entry_id,
				exp_channel_titles.title,
				exp_channel_titles.url_title,
				';
				foreach($this->channel_fields['Films'] as $f => $fid){
					$sql .= 'field_id_'.$fid.' AS '.$f.",\n";
				}
				$sql .= '
				exp_categories.cat_name,
				parent_cat.cat_name AS parent_name
			FROM exp_category_posts
				LEFT JOIN exp_categories      USING (cat_id)
				LEFT JOIN exp_categories AS parent_cat ON (exp_categories.parent_id = parent_cat.cat_id)
				LEFT JOIN exp_category_groups ON (exp_category_groups.group_id = exp_categories.group_id)
				LEFT JOIN exp_channel_titles  USING (entry_id)
				LEFT JOIN exp_channel_data    ON (exp_channel_titles.entry_id = exp_channel_data.entry_id)
				LEFT JOIN exp_channels        ON (exp_channels.channel_id = exp_channel_titles.channel_id)
			WHERE
				channel_name = "films" AND 
				group_name = "Supported" AND 
				parent_cat.cat_name = "TFI New Media Fund" AND
				exp_categories.cat_name = "'.$year.'"
			ORDER BY title
		';
		//echo $sql; return 1;
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		$projects = array();
		$project_ids = array();
		while ($row = $res->fetch_assoc()) {
			$projects[] = $row;
			$project_ids[] = $row['entry_id'];
		}
		$res->free();
		
		$filmmakers = $this->get_filmmakers($project_ids);
		print_r($filmmakers);
		
		//print_r($projects);
		return $projects;
	}
	
	private function get_filmmakers($project_ids){
		$matrix_field_id = $this->channel_fields['Films']['film_filmmakers'];
		$this->get_matrix_fields($matrix_field_id);
		//print_r($this->matrix_fields); return 0;
		//load filmmakers
		$sql = '
			SELECT
				exp_playa_relationships.*,
				exp_matrix_data.entry_id,
				exp_matrix_data.row_order,
				';
				foreach($this->matrix_fields[$matrix_field_id] as $mf => $mid){
					$sql.= 'col_id_'.$mid.' AS mx_'.$mf.",\n";
				}
				foreach($this->channel_fields['Filmmakers'] as $f => $fid){
					$sql .= 'filmmaker_data.field_id_'.$fid.' AS ch_'.$f.",\n";
				}
				$sql.= '
				filmmaker.entry_id AS filmmaker_entry_id,
				filmmaker.title AS filmmaker_title
			FROM exp_matrix_data
				LEFT JOIN exp_playa_relationships ON (exp_playa_relationships.parent_entry_id = exp_matrix_data.entry_id)
				LEFT JOIN exp_channel_titles      AS filmmaker      ON (exp_playa_relationships.child_entry_id = filmmaker.entry_id)
				LEFT JOIN exp_channel_data        AS filmmaker_data ON (exp_playa_relationships.child_entry_id = filmmaker_data.entry_id)
			WHERE parent_field_id = '.$matrix_field_id.' AND exp_matrix_data.entry_id IN ('.implode(', ',$project_ids).')
			ORDER BY filmmaker.title
			LIMIT 100
		';
		//echo $sql; exit;
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		$filmmakers = array();
		while ($row = $res->fetch_assoc()) {
			print_r($row);
			//$filmmakers[$row['entry_id']][$row['filmmaker_entry_id']] = $row;
		}
		$res->free();
		return $filmmakers;
	}
	
	private function get_channel_fields($channels){
		foreach($channels as $k => $v){
			$channels[$k] = 'group_name = "'.$v.'"';
		}
		$sql = '
			SELECT
				group_name,
				field_name,
				field_id
			FROM exp_channel_fields
				LEFT JOIN exp_field_groups USING (group_id)
			WHERE
				'.implode(' OR ', $channels).'
		';
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		while ($row = $res->fetch_assoc()) {
			$this->channel_fields[$row['group_name']][$row['field_name']] = $row['field_id'];
		}
		$res->free();
	}
	
	private function get_matrix_fields($field_id){
		$sql = '
			SELECT
				col_id, 
				col_name 
			FROM exp_matrix_cols 
			WHERE field_id = '.$field_id.'
		';
		//echo $sql;
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		$this->matrix_fields[$field_id] = array();
		while ($row = $res->fetch_assoc()) {
			//print_r($row);
			$this->matrix_fields[$field_id][$row['col_name']] = $row['col_id'];
		}
		$res->free();
	}


}
?>