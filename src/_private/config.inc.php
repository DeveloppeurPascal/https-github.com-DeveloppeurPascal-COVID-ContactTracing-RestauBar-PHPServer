<?php
	if (! (defined("CCTRB") && (CCTRB == "D870DCC7-2666-46C5-A1ED-CDA9E7D6F71B"))) {
		http_response_code(404);
		exit;
	}

	define("DB_HOST","localhost");
	define("DB_NAME","cctrb");
	define("DB_USER","root");
	define("DB_PWD","");

	define("CCTRBPrivateKey","{E70E731F-FB79-490A-98E5-912BFA5778E3}");
