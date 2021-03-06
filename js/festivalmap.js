    var map;

      map = new GMaps({
        el: '#map-canvas',
	  	lat:25.782324, 
	  	lng:-50.2310801, 
		zoom:2
      });
 
	 
	  map.addMarker({
	  		title:'Bushwick Film Festival', 
	  		lat:40.694243,
	  		lng:-73.9214216, 
	  		infoWindow:{
	  			maxWidth: 500, content:'<h3> Bushwick Film Festival </h3>'+'<p> Discovers both domestic and international indie films and new media projects and shares them with a diverse audience of film lovers and industry professionals.'+
			'<br><strong>Time of year:</strong> October'+ 
	  		'<br><strong>Location:</strong> Brooklyn, New York'+
	  		'<br><a href="http://bushwickfilmfestival.com"target=_blank>bushwickfilmfestival.com </a></p>'
	  	}
	  });
	  
	  map.addMarker({
	  		title:' Defcon Hacking Conference', 
	  		lat:36.125,
	  		lng:-115.175,  
	  		infoWindow:{
	  			maxWidth: 500, content:'<h3> Defcon Hacking Conference </h3>'+'<p> One of the world’s largest annual hacker conventions.'+
	  		'<br><strong>Time of year:</strong> August'+ 
	  		'<br><strong>Location:</strong> Las Vegas, Nevada'+
	  		'<br><a href="https://www.defcon.org/index.html"target=_blank>defcon.org/index.html </a></p>'
	  	}
	  });
	  map.addMarker({ 
	  	title:'Eyeo Festival', 
	  	lat:44.970697,
	  	lng:-93.2614785,  
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Eyeo Festival </h3>'+'<p> Assembling an incredible set of creative coders, data designers and artists.'+
	  		'<br>	<strong>Time of year:</strong> June'+
	  		'<br>	<strong>Location:</strong> Minneapolis, Minnesota'+
	  		'<br><a href="http://eyeofestival.com"target=_blank> eyeofestival.com </a></p>' 
	  	}
	  });
	  	map.addMarker({
	  	title:'FCMM: Montreal International Festival of New Cinema and New Media', 
	  	lat:45.5601451,
	  	lng:-73.7120832, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> FCMM: Montreal International Festival of New Cinema and New Media </h3>'+'<p>Each year, the Festival seeks out new developments that move cinema forward, familiarizing audiences with 3D, VOD, a whole spectrum of different formats and thelatst creative findings.'+ 
	  		'<br> <strong>Time of year:</strong> October '+
	  		'<br> <strong>Location:</strong> Montreal, Canada'+
	  		'<br> <a href="http://www.nouveaucinema.ca"target=_blank>nouveaucinema.ca</a></p>'
	  	}
	  	});	
	  map.addMarker(	{ 
	  	title:'Filmgate Interactive', 
	  	lat:25.782324, 
	  	lng:-80.2310801, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Filmgate Interactive </h3>'+'<p> Bringing together cross-media’s leading international creators, thinkers and practitioners.'+
	  		'<br><strong>Time of year:</strong> February'+
	  		'<br><strong>Location:</strong> Miami, Florida'+
	  		'<br><a href="http://film-gate.org "target=_blank> film-gate.org </a></p>' 
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Hot Docs', 
	  	lat:43.7182713,
	  	lng:-79.3777061,  
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Hot Docs </h3>'+'<p> North America’s largest documentary festival, conference and market. '+
	  		'<br> <strong>Time of year:</strong> April-May '+
	  		'<br> <strong>Location:</strong> Toronto, Ontario, Canada'+
	  		'<br> <a href="http://www.hotdocs.ca/"target=_blank> hotdocs.ca</a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Independent Film Week', 
	  	lat:40.7056308,
	  	lng:-73.9780035, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Independent Film Week </h3>'+'<p>Hosted by IFP, Independent Film Week showcases independent films and guides filmmakers in the art, technology and business of independent filmmaking.'+ 
	  		'<br> <strong>Time of year:</strong> September'+
	  		'<br> <strong>Location:</strong> New York, New York'+
	  		'<br> <a href="http://www.ifp.org/programs/independent-film-week/#.VBc-oPldVjQ"target=_blank>ifp.org/programs/independent-film-week/</a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' INST-INT', 
	  	lat:44.970697,
	  	lng:-93.2614785, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> INST-INT </h3>'+'<p>This event brings together an international roster of acclaimed creators to explore the intersection of art, technology and interaction.'+ 
	  		'<br> <strong>Time of year:</strong> September'+ 
	  		'<br> <strong>Location:</strong> Minneapolis, Minnesota'+
	  		'<br> <a href="http://inst-int.com/"target=_blank>inst-int.com </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Mirage International Film Festival', 
	  	lat:36.125,
	  	lng:-115.175,  
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Mirage International Film Festival </h3>'+'<p> Mirage International Film Festival\u0027s New Media Marvels competitive program is designed to bring attention to the emerging world of new media.'+ 
	  		'<br> <strong>Time of year:</strong> August '+
	  		'<br> <strong>Location:</strong> Las Vegas, Nevada'+
			'<br> <a href="http://www.miragefilmfest.com/"target=_blank>miragefilmfest.com </a> </p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' NAMAC', 
	  	lat:40.002498,
	  	lng:-75.1180329, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> NAMAC </h3>'+'<p>A conference that brings together creators, thinkers, policy makers, administrators and funders to learn about the field’s future opportunities, to create a national latorm for the media arts and to strengthen networks.'+ 
	  		'<br> <strong>Time of year:</strong> August '+
	  		'<br> <strong>Location:</strong> Philadelphia, Pennsylvania'+
	  		'<br> <a href="http://www.namac.org/"target=_blank> namac.org</a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' New Media Art &amp; Sound Summit ', 
	  	lat:30.3077609, 
	  	lng:-97.7534014, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> New Media Art &amp; Sound Summit  </h3>'+'<p>A three-day festival of creative music, performance art, film, and installations.'+
	  		'<br> <strong>Time of year:</strong> June '+
	  		'<br> <strong>Location:</strong> Austin, Texas'+
	  		'<br> <a href="http://nmassfest.org/"target=_blank> nmassfest.org</a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' RIDM', 
	  	lat:45.5601451,
	  	lng:-73.7120832, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> RIDM </h3>'+'<p>Presents a selection of the year’s best documentaries from Canada and around the world for general and professional audiences.'+ 
	  		'<br> <strong>Time of year:</strong> November'+ 
	  		'<br> <strong>Location:</strong> Montreal, Quebec, Canada'+
	  		'<br> <a href="http://www.ridm.qc.ca/en"target=_blank> ridm.qc.ca/en </a></p>'

	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Sundance New Frontier Story Lab', 
	  	lat:40.648162,
	  	lng:-111.4999615, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Sundance New Frontier Story Lab </h3>'+'<p>Lab for artists working at the convergence of film, art, and new media technologies.'+
	  		'<br><strong>Time of year:</strong> October'+
	  		'<br><strong>Location:</strong> Park City, Utah'+
	  		'<br> <a href="http://sundance.org/programs/new-frontier-story-lab "target=_blank> sundance.org/programs/new-frontier-story-lab </a></p>' 
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' SXSW', 
	  	lat:30.3077609, 
	  	lng:-97.7534014,
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> SXSW </h3>'+'<p> Film and Interactive panels to inspire digital thinking.'+
	  		'<br><strong>Time of year:</strong> March'+
	  		'<br><strong>Location:</strong> Austin, Texas'+
	  		'<br><a href="http://sxsw.com "target=_blank> sxsw.com </a></p>' 
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Tribeca Film Festival', 
	  	lat:40.7056308,
	  	lng:-73.9780035, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Tribeca Film Festival </h3>'+'<p>Offering a transmedia section : Storyscapes.'+
	  		'<br>	<strong>Time of year:</strong> April'+
	  		'<br>	<strong>Location:</strong> New York, New York'+
	  		'<br><a href="http://tribecafilm.com/festival "target=_blank> tribecafilm.com/festival </a></p>' 
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'True/False Film Fest', 
	  	lat:38.955523, 
	  	lng:-92.234803,
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> True/False Film Fest </h3>'+'<p>Exhibits the best new nonfiction filmmaking. They strive to present a program that challenges viewers to think critically about both the content of the films and their own assumptions.'+ 
	  		'<br> <strong> Time of year:</strong> March'+ 
	  		'<br> <strong> Location:</strong> Columbia, Missouri'+
	  		'<br> <a href="http://truefalse.org/"target=_blank>truefalse.org</a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Woodstock Digital Media Festival', 
	  	lat:43.5972775, 
	  	lng:-72.5521905, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Woodstock Digital Media Festival </h3>'+'<p> An Innovative Exploration of Digital Media in the Public Interest.'+
	  		'<br> <strong>Time of year:</strong> November'+
	  		'<br> <strong>Location:</strong> Woodstock, Vermont'+
	  		'<br> <a href="http://www.woodstockdigital.com/"target=_blank> woodstockdigital.com </a></p>'
	  	}
	  	});		
		map.addMarker(
	  	{title:'Campus Party', 
	  	lat:-21.7351043,
	  	lng:-63.28125, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Campus Party </h3>'+'<p> Annual week long, 24-hours-a-day technology festival where thousands of “campuseros” (hackers, developers, gamers and geeks) equipped with laptops camp on-site and immerse themselves in a truly unique environment.'+				
	  		'<br> <strong>Time of year:</strong> Varies'+
	  		'<br> <strong>Location:</strong> Brazil, Colombia, El Salvador, Ecuador, Mexico, Peru'+ 
	  		'<br> <a href="http://www.campus-party.org/home-en.html"target=_blank>campus-party.org</a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Doc Montevideo Hackathon', 
	  	lat:-34.8198798,
	  	lng:-56.2303067, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Doc Montevideo Hackathon </h3>'+'<p>A workshop that leads to the production of interactive non-fiction prototypes geared to work in progress on documentary films or series, or projects exclusively made for web.'+
	  		'<br><strong>Time of year:</strong> July'+
	  		'<br><strong>Location:</strong> Montevideo, Uruguay'+
	  		'<br><a href="http://docmontevideo.com"target=_blank> docmontevideo.com </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' FILE – Electric Language International Festival', 
	  	lat:-23.6824124,
	  	lng:-46.5952992, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> FILE – Electric Language International Festival </h3>'+'<p>Festival serves as a lead indicator of the plurality of the work created in the interactive art field not only nationally but also internationally.'+
	  		'<br><strong>Time of year:</strong> June / July'+
	  		'<br><strong>Location:</strong> São Paulo, Rio de Janeiro and Porto Alegre, Brazil'+
	  		'<br><a href="http://file.org.br"target=_blank> file.org.br </a></p>'

	  	}
	  	});
	  	map.addMarker({ 
	  	title:' International Image Festival', 
	  	lat:5.074065,
	  	lng:-75.49767, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> International Image Festival </h3>'+'<p>A space for meeting and discussion on topics rlatd to visual design, electronic arts, digital audiovisual creation, digital sound, and electro-acoustic.'+
	  		'<br><strong>Time of year:</strong> April'+
	  		'<br><strong>Location:</strong> Manizales, Colombia'+
	  		'<br><a href="http://festivaldelaimagen.com/en"target=_blank> festivaldelaimagen.com </a></p>'
	  	}
	  	});	
	  map.addMarker({
		title:'Convergence', 
	  	lat:51.5286416,
	  	lng:-0.1015987, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Convergence </h3>'+'<p>A festival that takes place throughout East London that focuses on pioneers who use technology to innovate.'+ 
	  		'<br> <strong> Time of year:</strong> April'+ 
	  		'<br> <strong> Location:</strong> London, United Kingdom'+ 
	  		'<br> <a href="http://www.convergence-london.com/home/"target=_blank> convergence-london.com/home </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'CPH:DOX – SWIM', 
	  	lat:55.6712674,
	  	lng:12.5608388, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> CPH:DOX – SWIM </h3>'+'<p>A forum, a conference and a lab working to develop new and sustainable ways of thinking within media.'+
	  		'<br> <strong>Time of year:</strong> November'+
	  		'<br> <strong>Location:</strong> Copehnhagen, Denmark'+
	  		'<br> <a href="http://cphdox.dk/en "target=_blank> cphdox.dk/en </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Cross Video Days', 
	  	lat:48.8588589,
	  	lng:2.3470599, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Cross Video Days </h3>'+'<p> A european crossmedia content market.'+
	  		'<br><strong>Time of year:</strong> June'+
	  		'<br><strong>Location:</strong> Paris, France'+
	  		'<br><a href="http:// "target=_blank> crossvideodays.com </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'DEAF: Dutch Electronic Art Festiva ', 
	  	lat:51.9279723,
	  	lng:4.4904063, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> DEAF: Dutch Electronic Art Festival </h3>'+'<p>Festival with a thematic approach. Its aim is to harbour new and speclatve views about current developments and themes in our technological culture and society.'+
	  		'<br> <strong> Time of year:</strong> Bi-annual'+ 
	  		'<br> <strong> Location:</strong> Rotterdam, Netherlands'+
	  		'<br> <a href="http://v2.nl/events/deaf"target=_blank> v2.nl/events/deaf </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Dok Lepizig Netlab ', 
	  	lat:51.3417825,
	  	lng:12.3936349, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Dok Lepizig Netlab </h3>'+'<p> An inspirational conference lab on the current trends of new media providing access to new information, intense networking and individual support.'+
	  		'<br> <strong>Time of year:</strong> November'+
	  		'<br> <strong>Location:</strong> Leipzig, Germany'+
	  		'<br> <a href="http://dok-leipzig.de "target=_blank> dok-leipzig.de </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Echofluxx ', 
	  	lat:50.0596696,
	  	lng:14.4656239, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Echofluxx </h3>'+'<p> A free festival of New Media, Music and Art.'+
	  		'<br> <strong> Time of Year:</strong> May '+
	  		'<br> <strong> Location:</strong> Prague, Czech Republic'+
	  		'<br> <a href="http://echofluxx.org"target=_blank> echofluxx.org </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'FIPA', 
	  	lat:43.470981,
	  	lng:-1.5557543 , 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> FIPA </h3>'+'<p> The only international festival that showcases all creative genres: drama, series, documentary, reportage, performing arts and the Smart FIP@.'+ 
	  		'<br> <strong> Time of year:</strong> January'+ 
	  		'<br> <strong> Location:</strong> Biarritz, France'+
	  		'<br> <a href="http://www.fipa.tv/index.php "target=_blank> fipa.tv/index.php </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Geneva International Film Festival', 
	  	lat:46.2050295,
	  	lng:6.1440885, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Geneva International Film Festival </h3>'+'<p>Explores the rlatonship between cinema, television and new forms of digital creation.'+
	  		'<br> <strong> Time of year:</strong> November'+ 
	  		'<br> <strong> Location:</strong> Geneva, Switzerland'+  
	  		'<br> <a href="http://www.tous-ecrans.com/"target=_blank>tous-ecrans.com</a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' i-Docs', 
	  	lat:51.468489,
	  	lng:-2.5907094, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> i-Docs </h3>'+'<p>Symposium and website dedicated to interactive documentary.'+
	  		'<br>	<strong>Time of year:</strong> March'+
	  		'<br>	<strong>Location:</strong> Bristol, United Kingdoms'+ 
	  		'<br>	<a href="http://i-docs.org "target=_blank> i-docs.org </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' IDFA DocLab', 
	  	lat:52.3747158,
	  	lng:4.8986166, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> IDFA DocLab </h3>'+'<p>Showcasing new and unexpected forms of digital documentary storytelling.'+
	  		'<br> <strong>Time of year:</strong> November'+
	  		'<br> <strong>Location:</strong> Amsterdam, Netherlands'+ 
	  		'<br> <a href="http://doclab.org "target=_blank> doclab.org </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' InterDocsBarcelona', 
	  	lat:41.39479,
	  	lng:2.1487679, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> InterDocsBarcelona </h3>'+'<p>The InterDocsBarcelona is a professional meeting to disseminate, create and finance the interactive documentary.'+ 
	  		'<br> <strong> Time of year:</strong> May'+  
	  		'<br> <strong> Location:</strong> Barcelona, Spain'+
	  		'<br> <a href="http://www.docsbarcelona.com/en/index.php"target=_blank> docsbarcelona.com/en/index.php </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' MediMed ', 
	  	lat:41.2358882,
	  	lng:1.8063239, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> MediMed </h3>'+'<p>Exhibits an exclusive selection of documentary projects and ready made programmes, aiming to enhance the professional and creative exchange between the 12 MEDA countries and the 28 EU countries.'+ 
	  		'<br> <strong> Time of year:</strong> October'+ 
	  		'<br> <strong> Location:</strong> Sitges, Catalonia, Spain'+
	  		'<br> <a href="http://www.medimed.org/home.html"target=_blank> medimed.org/home.html </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' MozFest ', 
	  	lat:51.5286416,
	  	lng:-0.1015987, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> MozFest </h3>'+'<p> A festival dedicated to finding, energizing and creating a community of people working with technology to build participation, understanding and control into Internet life.'+
	  		'<br> <strong> Time of year:</strong> October'+ 
	  		'<br> <strong> Location:</strong> London, United Kingdom'+ 
	  		'<br> <a href="http://2014.mozillafestival.org/"target=_blank> 2014.mozillafestival.org </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Power to the Pixels Cross-Media Forum', 
	  	lat:51.5286416,
	  	lng:-0.1015987,  
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Power to the Pixels Cross-Media Forum </h3>'+'<p>Conference, pitching forum and market for interactive projects.'+
	  		'<br>	<strong>Time of year:</strong> October'+
	  		'<br>	<strong>Location:</strong> London, UK'+
	  		'<br><a href="http://powertothepixel.com "target=_blank> powertothepixel.com </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Resonate ', 
	  	lat:44.8152453,
	  	lng:20.4203223, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Resonate </h3>'+'<p>Resonate is a latorm for networking, knowledge sharing and education. It brings together artists, designers and educators to participate in a forward-looking debate on the position of technology in art and culture.'+
	  		'<br> <strong> Time of Year:</strong> April '+ 
	  		'<br> <strong> Location:</strong> Belgrade, Serbia'+
	  		'<br> <a href="http://resonate.io/2014/about"target=_blank> resonate.io/2014/about </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Sheffield Doc/Fest', 
	  	lat:53.3957166, 
	  	lng:-1.4994561, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Sheffield Doc/Fest </h3>'+'<p>Interactive panels (including a full-day dedicated to interactive) and a Cross-media section for projects.'+
	  		'<br> <strong>Time of year:</strong> June'+
	  		'<br> <strong>Location:</strong> Sheffield, UK'+
	  		'<br> <a href="https://sheffdocfest.com/ "target=_blank> sheffdocfest.com </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Sonar: International Festival of Advanced Music and New Media Art ', 
	  	lat:41.39479,
	  	lng:2.1487679,
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Sonar: International Festival of Advanced Music and New Media Art </h3>'+'<p>Sónar+D selects the most outstanding projects by creative laboratories, universities and companies to showcase new forms of creation, production and marketing. Sounds in 3D, interaction repertoires and robotic experiments.'+
	  		'<br> <strong> Time of year:</strong> June'+
	  		'<br> <strong> Location:</strong> Barcelona, Spain'+
	  		'<br> <a href="http://sonar.es/en/2014/ "target=_blank> sonar.es/en/2014 </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Sunny Side of the Doc ', 
	  	lat:46.1620559,
	  	lng:-1.176261, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Sunny Side of the Doc </h3>'+'<p>Sunny Side hosts international television markets focusing on specialist factual and documentary programming, to promote co-production and sales rlatonships between production companies and broadcasters.'+
	  		'<br> <strong> Time of year:</strong> June'+ 
	  		'<br> <strong> Location:</strong> La Rochelle, France'+ 
	  		'<br> <a href="http://www.sunnysideofthedoc.com/"target=_blank>sunnysideofthedoc.com </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Transmediale', 
	  	lat:52.5075419, 
	  	lng:13.4261419,
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Transmediale </h3>'+'<p>A festival and year-round project that draws out new connections between art, culture and technology.'+
	  		'<br> <strong>Time of year:</strong> February'+
	  		'<br> <strong>Location:</strong> Berlin, Germany'+
	  		'<br> <a href="http://transmediale.de "target=_blank> transmediale.de </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'IDFA Cross-media Forum', 
	  	lat:52.3747158,
	  	lng:4.8986166,
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> IDFA Cross-media Forum </h3>'+'<p> Forum to pitch cross-media projects.'+
	  		'<br>	<strong>Time of year:</strong> November'+
	  		'<br>	<strong>Location:</strong> Amsterdam, Netherlands'+
	  		'<br>	<a href="http://idfa.nl/nl.aspx "target=_blank> idfa.nl/nl.aspx </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'XO Lab', 
	  	lat:53.3957166, 
	  	lng:-1.4994561,
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> XO Lab </h3>'+'<p>Helping people understand interactive storytelling and cross-latorm development through labs.'+
	  		'<br><strong>Location:</strong> Sheffield, UK'+
	  		'<br><a href="http://xolabs.co.uk "target=_blank> xolabs.co.uk </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:'Japan Media Arts Festival', 
	  	lat:35.673343,
	  	lng:139.710388 , 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Japan Media Arts Festival </h3>'+'<p>Honoring outstanding works from a diverse range of media- from animation and comics to media art and games.'+
	  		'<br> <strong>Time of year:</strong> February'+
	  		'<br> <strong>Location:</strong> Tokyo, Japan'+
	  		'<br><a href="http://j-mediaarts.jp/?locale=en "target=_blank> j-mediaarts.jp </a></p>'
	  	}
	  	});
	  	map.addMarker({ 
	  	title:' Microwave International New Media Arts Festival', 
	  	lat:22.3700556,
	  	lng:114.1535941, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Microwave International New Media Arts Festival </h3>'+'<p>Festival brings cutting-edge works to provoke the thought in the technological hub that Hong Kong is.'+
	  		'<br> <strong>Time of year:</strong> November'+
	  		'<br> <strong>Location:</strong> Hong Kong, China'+
	  		'<br><a href="http://www.microwavefest.net"target=_blank> microwavefest.net </a></p>'
	  	}
	  	});
	  map.addMarker({ 
	  	title:' Seoul International NewMedia Festival', 
	  	lat:37.5651,
	  	lng:126.98955, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Seoul International NewMedia Festival </h3>'+'<p>Korea’s first and leading art festival of alternative videos, display diverse ways that new forms of media can be used and sustained in modern society.'+
	  		'<br><strong>Time of year:</strong> October'+
	  		'<br><strong>Location:</strong> Seoul, South Korea'+
	  		'<br><a href="http://nemaf.net"target=_blank> nemaf.net  </a></p>'

	  	}
	  	});	
	  map.addMarker({
		title:'Antenna', 
	  	lat:-33.7969235, 
	  	lng:150.9224326, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Antenna </h3>'+'<p>International film festival that screens feature length documentaries.'+
	  		'<br> <strong> Time of year:</strong> October '+
	  		'<br> <strong> Location:</strong> Sydney, Australia '+
	  		' <br><a href="http://antennafestival.org/"target=_blank>antennafestival.org </a></p>' 
	  	}
	  });
	  map.addMarker({
		title:' Documentary Edge Festival', 
	  	lat:-36.8630231,
	  	lng:174.8654693, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Documentary Edge Festival </h3>'+'<p>New Zealand’s only international documentary film festival held annually.'+ 
	  		'<br> <strong> Time of year:</strong> May-June '+
	  		'<br> <strong> Location:</strong> Auckland & Wellington, New Zealand'+
	  		'<br> <a href="http://documentaryedge.org.nz/"target=_blank>documentaryedge.org.nz </a></p>'
	  	}
	  });  
	  map.addMarker({ 
	  	title:' Durban Film Festival ', 
	  	lat:-29.8483794, 
	  	lng:30.9924624, 
	  	infoWindow:{
	  		maxWidth: 500, content:'<h3> Durban Film Festival </h3>'+'<p>The festival also offers filmmaker workshops, industry seminars, discussion forums, and outreach activities.'+
	  		'<br> <strong>Time of year:</strong> July'+
	  		'<br> <strong>Location:</strong> Durban, South Africa'+
	  		'<br> <a href="http://durbanfilmfest.co.za"target=_blank> durbanfilmfest.co.za </a></p>'
	  	}
	  });
  
	  

	  
	 
	  