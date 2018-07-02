<?php

require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

define('ARTICLES_PER_PAGE',5);

//TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';

switch ($page) {
    case 'home': homepage_action(); break;
    case 'news': news_action(); break;
    case 'contact': contact_action(); break;
    case 'cms': cms_action(); break;
    default: page_not_found_action(); break;
}

