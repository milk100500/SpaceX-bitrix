<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <?use Bitrix\Main\Page\Asset;?>
    <title><?php $APPLICATION->ShowTitle();?></title>

    <?$APPLICATION->ShowHead();?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?Asset::getInstance()->addJs("https://code.jquery.com/jquery-3.6.0.min.js");
    Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/template.js");
    


    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/normalize.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/template.css");
    
    Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.googleapis.com'>");
    Asset::getInstance()->addString("<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'
    integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>");
    Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>");
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;700&family=Lato:wght@100;300;400;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap'
    rel='stylesheet'>");    
    ?>


</head>
<body>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="wrapper">

    <!-- BEGIN BACKGROUND -->
    

    <!-- END BACKGROUND -->

    <!--—BEGIN HEADER -->

    <header class="header">
        <div class="header_container container">
            <div class="header_logo">
                <img class="logo_img" src="<?echo SITE_TEMPLATE_PATH?>/assets/content/images/logo.png" srcset="<?echo SITE_TEMPLATE_PATH?>/assets/content/images/logo@2x.png 2x"
                     alt="logo">
            </div>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="header_nav">

                <?$APPLICATION->IncludeComponent("bitrix:menu", "template1", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
                    <!--<ul class="nav_list row">
                    <li class="nav_item col">
                        <a href="javascript:void(0)" class="nav_link">
                            Главная
                        </a>
                    </li>
                    <li class="nav_item col">
                        <a href="javascript:void(0)" class="nav_link">
                            Технология
                        </a>
                    </li>
                    <li class="nav_item col">
                        <a href="javascript:void(0)" class="nav_link">
                            График полетов
                        </a>
                    </li>
                    <li class="nav_item col">
                        <a href="javascript:void(0)" class="nav_link">
                            Гарантии
                        </a>
                    </li>
                    <li class="nav_item col">
                        <a href="javascript:void(0)" class="nav_link">
                            О компании
                        </a>
                    </li>
                    <li class="nav_item col">
                        <a href="javascript:void(0)" class="nav_link">
                            Контакты
                        </a>
                    </li>
                </ul> -->
            </nav>
        </div>
    </header>
    <?if ($APPLICATION->GetCurPage() != "/"):?>
        <main class="main">
            <div class="page page_contacts">
                <div class="page_header">
                    <div class="page_header-title">
                        <h1><?$APPLICATION->ShowTitle(false);?></h1>
                        <div style="color: white; display: flex; align-items: center;" id="navigation">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	".default", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>   
                    </div>
		            </div>
	            </div>
            </div>
    <?endif;?>


	<!--—END HEADER -->