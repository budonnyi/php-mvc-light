<?php

//define rootes to array
return array(
	'index.php' 			=> 'main/index', 		// actionIndex at TaskController
	'index' 				=> 'main/index', 		// actionIndex at TaskController
	'' 						=> 'main/index/$1', 	// actionIndex at TaskController
	'([a-zA-Z0-9-]+)'		=> 'main/index',  		// any key/string
);