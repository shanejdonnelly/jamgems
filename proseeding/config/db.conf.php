<?php
//
// TREEMS DATABASE CONFIG OPTIONS
//
// Site Name: PRO Seeding Site (PRO Ambassadors)
// Site URL: http://ambassadors.timberlandpro.com
// Revision: Fall 2013
//
//

$dbConf  = 	array(	"dbtype" => "mysql",			// Valid options include: mysql, pgsql, mssql, sqlite, sqlite2
					"dbhost" => "localhost",		// Usually localhost, may be an IP address
					"dbuser" => "root",
					"dbpass" => "Jamgems!my",
					"dbname" => "proseeding",
					
					"dbftch" => PDO::FETCH_ASSOC 	// PDO fetch_style (http://php.net/manual/en/pdostatement.fetch.php)
				 );
