<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задать вопрос");
?> 
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
	"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	"OK_TEXT" => "Спасибо, ваш вопрос принят. В ближайшее время мы с вами свяжемся по указанному E-Mail адресу.",	// Сообщение, выводимое пользователю после отправки
	"EMAIL_TO" => "#SITE_EMAIL#",	// E-mail, на который будет отправлено письмо
	"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
		0 => "NAME",
		1 => "EMAIL",
		2 => "MESSAGE",
	),
	"EVENT_MESSAGE_ID" => array(0=>"7",),	// Почтовые шаблоны для отправки письма
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>