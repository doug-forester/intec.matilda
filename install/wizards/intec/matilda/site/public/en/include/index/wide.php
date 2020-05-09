<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use intec\core\helpers\Html;
use intec\core\collections\Arrays;
use intec\core\io\Path;

/**
 * @var Arrays $blocks
 * @var string $page
 * @var Closure $render($block, $data = [])
 * @var Path $path
 * @global CMain $APPLICATION
 */

$render($blocks->get('icons'));
$render($blocks->get('services'));

?>
<?= Html::beginTag('div', ['style' => [
    'padding-top' => '100px',
    'padding-bottom' => '100px',
    'background-color' => '#f8f9fb'
]]) ?>
    <?php $APPLICATION->IncludeComponent(
        "intec.constructor:block",
        ".default",
        array(
            "BLOCK_CATEGORY" => "advantages",
            "BLOCK_CODE" => "intec.advantages.1"
        ),
        false
    ); ?>
<?= Html::endTag('div') ?>
<?= Html::beginTag('div') ?>
    <?php $APPLICATION->IncludeComponent(
        "intec.constructor:block",
        ".default",
        array(
            "BLOCK_CATEGORY" => "about",
            "BLOCK_CODE" => "intec.company.5"
        ),
        false
    ); ?>
<?= Html::endTag('div') ?>
<?php

$render($blocks->get('stages'));
$render($blocks->get('categories'));
$render($blocks->get('advantages'));

?>
<?= Html::beginTag('div', ['style' => [
    'margin-top' => '100px'
]]) ?>
    <?php $APPLICATION->IncludeComponent(
        "intec.constructor:block",
        ".default",
        array(
            "BLOCK_CATEGORY" => "advantages",
            "BLOCK_CODE" => "intec.advantages.2"
        ),
        false
    ); ?>
<?= Html::endTag('div') ?>
<?= Html::beginTag('div') ?>
    <?php $APPLICATION->IncludeComponent(
        "intec.universe:main.form",
        "template.1",
        array(
            "ID" => "#FORMS_CALL_ID#",
            "NAME" => "Заказать звонок",
            "SETTINGS_USE" => "Y",
            "LAZYLOAD_USE" => "N",
            "CONSENT" => "#SITE_DIR#company/consent/",
            "TEMPLATE" => ".default",
            "TITLE" => "Узнайте, с чего начать строительство вашего дома",
            "DESCRIPTION_SHOW" => "Y",
            "DESCRIPTION_TEXT" => "Наши консультанта ответят на все ваши вопросы, дадут оценку и рекомендации вашему проекту",
            "BUTTON_TEXT" => "Заказать",
            "THEME" => "dark",
            "VIEW" => "left",
            "BACKGROUND_COLOR" => "#f4f4f4",
            "BACKGROUND_IMAGE_USE" => "Y",
            "BACKGROUND_IMAGE_PATH" => "#TEMPLATE_PATH#images/bg.png",
            "BACKGROUND_IMAGE_HORIZONTAL" => "center",
            "BACKGROUND_IMAGE_VERTICAL" => "center",
            "BACKGROUND_IMAGE_SIZE" => "cover",
            "BACKGROUND_IMAGE_PARALLAX_USE" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600000"
        ),
        false
    ); ?>
<?= Html::endTag('div') ?>
<?php

$render($blocks->get('gallery'));
$render($blocks->get('video'));

?>
<?= Html::beginTag('div', ['style' => [
    'margin-top' => '100px',
    'margin-bottom' => '100px'
]]) ?>
    <?php $APPLICATION->IncludeComponent(
        "intec.universe:main.advantages",
        "template.3",
        array(
            "IBLOCK_TYPE" => "#CONTENT_ADVANTAGES_2_IBLOCK_TYPE#",
            "IBLOCK_ID" => "#CONTENT_ADVANTAGES_2_IBLOCK_ID#",
            "SECTIONS_MODE" => "id",
            "SECTIONS" => array(),
            "ELEMENTS_COUNT" => "",
            "SETTINGS_USE" => "Y",
            "LAZYLOAD_USE" => "N",
            "HEADER_SHOW" => "Y",
            "HEADER_POSITION" => "center",
            "HEADER" => "Что вы получите?",
            "DESCRIPTION_SHOW" => "N",
            "BACKGROUND_SIZE" => "cover",
            "ARROW_SHOW" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600000",
            "SORT_BY" => "SORT",
            "ORDER_BY" => "ASC"
        ),
        false
    ); ?>
<?= Html::endTag('div') ?>
<?php

$render($blocks->get('projects'));
$render($blocks->get('rates'));
$render($blocks->get('staff'));
$render($blocks->get('reviews'));
$render($blocks->get('brands'));
$render($blocks->get('certificates'));

?>
<?= Html::beginTag('div') ?>
    <?php $APPLICATION->IncludeComponent(
        "intec.universe:main.widget",
        "form.1",
        array(
            "SETTINGS_USE" => "Y",
            "LAZYLOAD_USE" => "N",
            "WEB_FORM_ID" => "#FORMS_FEEDBACK_ID#",
            "WEB_FORM_TITLE_SHOW" => "Y",
            "WEB_FORM_DESCRIPTION_SHOW" => "Y",
            "WEB_FORM_BACKGROUND" => "theme",
            "WEB_FORM_BACKGROUND_OPACITY" => "",
            "WEB_FORM_TEXT_COLOR" => "light",
            "WEB_FORM_POSITION" => "right",
            "WEB_FORM_ADDITIONAL_PICTURE_SHOW" => "Y",
            "WEB_FORM_ADDITIONAL_PICTURE" => "#TEMPLATE_PATH#/images/picture.png",
            "WEB_FORM_ADDITIONAL_PICTURE_HORIZONTAL" => "center",
            "WEB_FORM_ADDITIONAL_PICTURE_VERTICAL" => "center",
            "WEB_FORM_ADDITIONAL_PICTURE_SIZE" => "contain",
            "BLOCK_BACKGROUND" => "#TEMPLATE_PATH#/images/bg.jpg",
            "BLOCK_BACKGROUND_PARALLAX_USE" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600000"
        ),
        false
    );?>
<?= Html::endTag('div') ?>
<?php

$render($blocks->get('faq'));
$render($blocks->get('shares'));
$render($blocks->get('articles'));
$render($blocks->get('news'));
$render($blocks->get('sections'));
$render($blocks->get('products'));
$render($blocks->get('about'));
$render($blocks->get('videos'));
$render($blocks->get('contacts'));

?>
