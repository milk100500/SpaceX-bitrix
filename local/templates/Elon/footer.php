<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!-- BEGIN FOOTER-->

<footer class="footer">
    <div class="footer__container container">
        <h4 class="footer__button">
            Обратная связь
        </h4>
    </div>
</footer>

<!-- END FOOTER-->

</div>

<!--BEGIN MODAL WINDOWS-->

<div class="modal__window">

    <h3 class="modal__title">
        Обратная связь
    </h3>


    <?$APPLICATION->IncludeComponent("bitrix:form", "formFeedback", Array(
	"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"EDIT_ADDITIONAL" => "N",	// Выводить на редактирование дополнительные поля
		"EDIT_STATUS" => "N",	// Выводить форму смены статуса
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"NAME_TEMPLATE" => "",
		"NOT_SHOW_FILTER" => array(	// Коды полей, которые нельзя показывать в фильтре
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(	// Коды полей, которые нельзя показывать в таблице
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST[RESULT_ID],	// ID результата
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SHOW_ADDITIONAL" => "N",	// Показать дополнительные поля веб-формы
		"SHOW_ANSWER_VALUE" => "N",	// Показать значение параметра ANSWER_VALUE
		"SHOW_EDIT_PAGE" => "N",	// Показывать страницу редактирования результата
		"SHOW_LIST_PAGE" => "N",	// Показывать страницу со списком результатов
		"SHOW_STATUS" => "N",	// Показать текущий статус результата
		"SHOW_VIEW_PAGE" => "N",	// Показывать страницу просмотра результата
		"START_PAGE" => "new",	// Начальная страница
		"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
		"USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
		"WEB_FORM_ID" => "2",	// ID веб-формы
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>

    <button class="modal__button button-form">
        Заполнить форму
    </button>

</div>
<!--
<form class="modal__form">
    <div class="modal__form-error">
        Не похоже на телефон или Email
    </div>
    <div class="modal__form-item">
        <label class="form__form-name" for="username">Имя</label>
        <input id="username" type="text" placeholder="Имя">
    </div>
    <div class="modal__form-item">
        <label class="form__form-surname" for="surname">Фамилия</label>
        <input id="surname" type="text" placeholder="Фамилия">
    </div>
    <div class="modal__form-item">
        <label class="form__form-contact" for="contact">Телефон/Email</label>
        <input id="contact" type="text" placeholder="Телефон/Email">
    </div>
    <div class="modal__form-item">
        <label>Сообщение</label>
        <textarea class="form__form-message" id="message" placeholder="Сообщение"></textarea>
    </div>
</form>
<div class="modal__form-buttons">
    <button class="modal__button button-form" type="button">
        Заполнить формуь
    </button>
    <button class="modal__button button-send" type="button">
        Отправить
    </button>
</div>
-->

<!--END MODAL WINDOWS-->

<!-- BEGIN SCRIPTS -->


<!-- END SCRIPTS -->


</body>
</html>