<?php 
require_once ('config.php');
echo "third  update";

require_once ( __DIR__ . '/inc/class.crud.php');
//require_once ( __DIR__ . '/inc/class.city.php');
require_once ( __DIR__ . '/inc/class.utility.php');


require_once ( __DIR__ . '/inc/class.ledger.php');



require_once ( __DIR__ . '/inc/header.php');


Tools::loadFile($templatePath);


require_once ( __DIR__ . '/inc/footer.php');
