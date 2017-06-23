<?php
include_once(dirname(__FILE__) . '/../debug.php');
//include_once(dirname(__FILE__) . '/checkConfigDataRequest.php');
//include_once(dirname(__FILE__) . '/checkLoginDataRequest.php');
require_once(dirname(__FILE__) .'/../php-i18n-master/i18n.class.php');
?>
<?php
$i18nc = new i18n(dirname(__FILE__) .'/../lang/config_lang_{LANGUAGE}.ini',dirname(__FILE__) .'/../langcache','en');
if (isset($_SESSION['lang'])) {
	$i18nc->setForcedLang($_SESSION['lang']);
}
$i18nc->init();
//$login_data = getLogged();
//debug_to_console($login_data);
//if (isset($login_data['loginMode']) && isset($login_data['loginID']) && !empty($login_data['loginMode']) && !empty($login_data['loginID'])) {
	include_once(dirname(__FILE__) . '/../view/memento.php');
/*}
else {
	include_once(dirname(__FILE__) . '/../view/login.php');
}*/
?>