<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

				<div class="share-block">
					<div>
						<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
						<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter"></div>
					</div>
				</div>

			</div>
		</section>
	</div>

	<footer>
		<div>
<?$APPLICATION->IncludeComponent("bitrix:menu", "footer", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
	"MENU_CACHE_TYPE" => "Y",	// Тип кеширования
	"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	"MAX_LEVEL" => "1",	// Уровень вложенности меню
	"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
	"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	"DELAY" => "N",	// Откладывать выполнение шаблона меню
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
			
			<div id="copy">
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/copyrights.php",
					Array(),
					Array("MODE"=>"html")
				);?>
			</div>
			<div id="fc">
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/copyrights2.php",
					Array(),
					Array("MODE"=>"html")
				);?>
			</div>
			
			<ul id="footer-counters">
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/counters.php",
					Array(),
					Array("MODE"=>"html")
				);?>			
			</ul>
		</div>
	</footer>
</div>

</body>
</html>