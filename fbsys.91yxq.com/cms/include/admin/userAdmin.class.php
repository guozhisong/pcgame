<?php
if ( PHP_VERSION_5 )
{
				include_once( dirname( __FILE__ )."/userAdmin.class.php5.php" );
}
else
{
				include_once( dirname( __FILE__ )."/userAdmin.class.php4.php" );
}
?>
