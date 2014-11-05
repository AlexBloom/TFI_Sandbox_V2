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
	
	public function get_hacks(){
		if($this->db->connect_errno) return false;

		$this->get_channel_fields(array('Events'));
		$sql = '
			SELECT
				exp_channel_titles.*,
				exp_channel_titles.title,
				exp_categories.cat_name,
				';
				foreach($this->channel_fields['Events'] as $f => $fid){
					$sql .= 'field_id_'.$fid.' AS `'.$f."`,\n";
				}
				$sql .= '
				parent_cat.cat_name AS parent_name,
				group_name
			FROM exp_category_posts
				LEFT JOIN exp_categories      USING (cat_id)
				LEFT JOIN exp_categories AS parent_cat ON (exp_categories.parent_id = parent_cat.cat_id)
				LEFT JOIN exp_category_groups ON (exp_category_groups.group_id = exp_categories.group_id)
				LEFT JOIN exp_channel_titles  USING (entry_id)
				LEFT JOIN exp_channel_data    ON (exp_channel_titles.entry_id = exp_channel_data.entry_id)
				LEFT JOIN exp_channels        ON (exp_channels.channel_id = exp_channel_titles.channel_id)
			WHERE
				exp_categories.cat_name = "Tribeca Hacks"
				AND group_name = "Programs"
				AND parent_cat.cat_name = "Artist Programs"
				AND channel_name = "events" 
				AND exp_channel_titles.status = "open"
			ORDER BY entry_date DESC
				
		';
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		$events = array();
		while ($row = $res->fetch_assoc()) {
			$row = $this->clean_up_utf8($row);
			$events[] = $row;
		}
		$res->free();		
		//echo '<pre>'; print_r($events); echo '</pre>'; exit;
		return $events;
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
				channel_name = "films" 
				AND exp_channel_titles.status = "open" 
				AND group_name = "Supported" 
				AND parent_cat.cat_name = "TFI New Media Fund" 
				AND exp_categories.cat_name = "'.$year.'"				
			ORDER BY title
		';
		//echo $sql; return 1;
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		$projects = array();
		$project_ids = array();
		while ($row = $res->fetch_assoc()) {
			$row = $this->clean_up_utf8($row);
			$projects[] = $row;
			$project_ids[] = $row['entry_id'];
		}
		$res->free();
		//print_r($project_ids);
		if(!empty($project_ids)){
			$filmmakers = $this->get_filmmakers_by_project_id($project_ids);
			foreach($projects as $k => $pro){
				if(isset($filmmakers[$pro['entry_id']])) $projects[$k]['filmmakers'] = $filmmakers[$pro['entry_id']];
			}
			$links = $this->get_links_by_project_id($project_ids);
			foreach($projects as $k => $pro){
				if(isset($links[$pro['entry_id']][0])) $projects[$k]['project_website'] = $links[$pro['entry_id']][0];
			}
		}
		//print_r($filmmakers);
		
		//print_r($projects);
		return $projects;
	}
	
	private function clean_up_utf8($input){
		$search = array(
			chr(145), 
			chr(146), 
			chr(147), 
			chr(148), 
			chr(151)
		); 

		$replace = array(
			"‘", 
			"’", 
			'“', 
			'”', 
			'-'
		); 
		
		$cp1252_map = array(
			"\xc2\x80" => "\xe2\x82\xac", /* EURO SIGN */
			"\xc2\x82" => "\xe2\x80\x9a", /* SINGLE LOW-9 QUOTATION MARK */
			"\xc2\x83" => "\xc6\x92",     /* LATIN SMALL LETTER F WITH HOOK */
			"\xc2\x84" => "\xe2\x80\x9e", /* DOUBLE LOW-9 QUOTATION MARK */
			"\xc2\x85" => "\xe2\x80\xa6", /* HORIZONTAL ELLIPSIS */
			"\xc2\x86" => "\xe2\x80\xa0", /* DAGGER */
			"\xc2\x87" => "\xe2\x80\xa1", /* DOUBLE DAGGER */
			"\xc2\x88" => "\xcb\x86",     /* MODIFIER LETTER CIRCUMFLEX ACCENT */
			"\xc2\x89" => "\xe2\x80\xb0", /* PER MILLE SIGN */
			"\xc2\x8a" => "\xc5\xa0",     /* LATIN CAPITAL LETTER S WITH CARON */
			"\xc2\x8b" => "\xe2\x80\xb9", /* SINGLE LEFT-POINTING ANGLE QUOTATION */
			"\xc2\x8c" => "\xc5\x92",     /* LATIN CAPITAL LIGATURE OE */
			"\xc2\x8e" => "\xc5\xbd",     /* LATIN CAPITAL LETTER Z WITH CARON */
			"\xc2\x91" => "\xe2\x80\x98", /* LEFT SINGLE QUOTATION MARK */
			"\xc2\x92" => "\xe2\x80\x99", /* RIGHT SINGLE QUOTATION MARK */
			"\xc2\x93" => "\xe2\x80\x9c", /* LEFT DOUBLE QUOTATION MARK */
			"\xc2\x94" => "\xe2\x80\x9d", /* RIGHT DOUBLE QUOTATION MARK */
			"\xc2\x95" => "\xe2\x80\xa2", /* BULLET */
			"\xc2\x96" => "\xe2\x80\x93", /* EN DASH */
			"\xc2\x97" => "\xe2\x80\x94", /* EM DASH */

			"\xc2\x98" => "\xcb\x9c",     /* SMALL TILDE */
			"\xc2\x99" => "\xe2\x84\xa2", /* TRADE MARK SIGN */
			"\xc2\x9a" => "\xc5\xa1",     /* LATIN SMALL LETTER S WITH CARON */
			"\xc2\x9b" => "\xe2\x80\xba", /* SINGLE RIGHT-POINTING ANGLE QUOTATION*/
			"\xc2\x9c" => "\xc5\x93",     /* LATIN SMALL LIGATURE OE */
			"\xc2\x9e" => "\xc5\xbe",     /* LATIN SMALL LETTER Z WITH CARON */
			"\xc2\x9f" => "\xc5\xb8"      /* LATIN CAPITAL LETTER Y WITH DIAERESIS*/
		);
		
		if(is_array($input)){
			foreach($input as $k => $v){
				$input[$k] = strtr(utf8_encode($input[$k]), $cp1252_map);
				//$input[$k] = utf8_encode($input[$k]);
				//$input[$k] = str_replace($search, $replace, $input[$k]);
				//$input[$k] = mb_convert_encoding($v, 'UTF-8', 'ISO-8859-1');
			}
		} else if(is_string($input)){
				$input = strtr(utf8_encode($input), $cp1252_map);
				//$input = str_replace($search, $replace, $input);
				//$input = utf8_encode($input);
		}
		return $input;
	
	}
	
	private function get_links_by_project_id($project_ids){
		$matrix_field_id = $this->channel_fields['Films']['film_links'];
		//echo '<pre>'; print_r($matrix_field_id);echo '</pre>'; exit;
		$this->get_matrix_fields($matrix_field_id);
		//echo '<pre>'; print_r($this->matrix_fields);echo '</pre>'; exit;
		$sql = '
			SELECT
				exp_matrix_data.row_order,
				';
				foreach($this->matrix_fields[$matrix_field_id] as $mf => $mid){
					$sql.= 'col_id_'.$mid.' AS mx_'.$mf.",\n";
				}
				$sql.= '
				exp_matrix_data.entry_id
			FROM exp_matrix_data			
			WHERE exp_matrix_data.field_id = '.$matrix_field_id.'
				AND exp_matrix_data.entry_id IN ('.implode(', ',$project_ids).') 
				AND col_id_'.$this->matrix_fields[$matrix_field_id]['film_link_type'].' = "Website"
			ORDER BY exp_matrix_data.row_order
			LIMIT 100
		';
		//echo '<pre>'; print_r($sql);echo '</pre>'; exit;
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		$links = array();
		while ($row = $res->fetch_assoc()) {
			//print_r($row);
			$row = $this->clean_up_utf8($row);
			$links[$row['entry_id']][] = $row;
		}
		$res->free();
		//echo '<pre>'; print_r($links);echo '</pre>'; exit;
		return $links;
	}
	
	private function get_filmmakers_by_project_id($project_ids){
		$matrix_field_id = $this->channel_fields['Films']['film_filmmakers'];
		$this->get_matrix_fields($matrix_field_id);
		//print_r($this->matrix_fields); return 0;
		//load filmmakers
		$sql = '
			SELECT
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
				LEFT JOIN exp_playa_relationships ON (exp_playa_relationships.parent_row_id = exp_matrix_data.row_id)
				LEFT JOIN exp_channel_titles      AS filmmaker      ON (exp_playa_relationships.child_entry_id = filmmaker.entry_id)
				LEFT JOIN exp_channel_data        AS filmmaker_data ON (exp_playa_relationships.child_entry_id = filmmaker_data.entry_id)
			WHERE parent_field_id = '.$matrix_field_id.' 
				AND exp_matrix_data.entry_id IN ('.implode(', ',$project_ids).') 
				AND filmmaker.status = "open"
			ORDER BY exp_matrix_data.row_order
			LIMIT 100
		';
		//echo $sql; exit;
		$res = $this->db->query($sql);
		if(!$res) printf("Errormessage: %s\n", $this->db->error);
		$filmmakers = array();
		while ($row = $res->fetch_assoc()) {
			//print_r($row);
			$row = $this->clean_up_utf8($row);
			$filmmakers[$row['entry_id']][] = $row;
		}
		$res->free();
		return $filmmakers;
	}
	
	private function get_channel_fields($channels){
		if($this->db->connect_errno) return false;
		
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