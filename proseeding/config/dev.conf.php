<?php
	
	//
	// DEV ENVIRONMENT CONFIGURATION FILE
	//

	$devConf  = 	array( 	// Server Environment Overrides for the Local Environment
							"server_local_root"					=> "/srv/www/",					// Root path to web server doc root (with trailing slash)
							"server_local_globals_url"			=> "http://shane3.com/tblcorp/treems-globals/",	// Globals URL on local server (with trailing slash)
							"server_local_globals_folder"		=> "shane3.com/public_html/tblcorp/treems-globals/",								// Relative path to globals root from the server root (with trailing slash)
 							"server_local_folder" 				=> "shane3.com/public_html/proseeding/",							// Relative path to site root from the server root (with trailing slash)

							// Debug Settings
							"debug"								=> "screen",	// Debug setting: accepts "screen", "silent", "log", "console", and false
							"debug_level"						=> 5	// Debug Level: accepts integer 1-5 (1 - Error; 2 - Warn; 3 - Notice; 4 - Info; 5 - Debug)
						 );
