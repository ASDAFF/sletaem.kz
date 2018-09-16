<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("MENU_SHOW_ELEMENTS", "Y");
$APPLICATION->SetTitle("О компании");
?><img width="225" alt="sletaem.jpeg" src="/upload/medialibrary/86b/86b1b22ad05ba23289af72484db4a76c.jpeg" height="195" title="sletaem.jpeg"><br>
 <br>
 <b><span style="font-size: 14pt;">Команда, технологии, опыт&nbsp;</span></b>- это все составляющие нашего туристического портала. Мы любим наше дело, мы любим путешествовать. Мы хотим предложить всем лучшие предложения для вашего отдыха. Наш многолетний опыт в туризме и новейшие технологии, дадут вам эту возможность.&nbsp;<br>
 <br>
 Компания "Слетаем.кз" реализует совместные проекты:&nbsp;<br>
 <br>
<!--noindex--><a rel="nofollow" target="_blank" href="https://tours.tengritravel.kz/"><img width="297" alt="Tengri travel.png" src="/upload/medialibrary/40e/40e5b9842f77dda7801daa0435cf2a52.png" height="43" title="Tengri travel.png"></a><!--/noindex--><br>
 <br>
<p>
	 Совместный проект с новостным порталом #1 в Казахстане Tengri News<br>
	 Подробней о портале <b>Tengri Travel</b><b>&nbsp; 
	<!--noindex--><a rel="nofollow" href="https://tours.tengritravel.kz/" target="_blank">тут</a><!--/noindex--></b>
</p>
<p>
	<!--noindex--><a rel="nofollow" target="_blank" href="https://iliketravel.kz/"><img width="220" alt="Туристическая компания в Алматы iLike Travel.jpg" src="/upload/medialibrary/434/434408a1938982ef8b843f1640dbae1e.jpg" height="44" title="Туристическая компания в Алматы iLike Travel.jpg"></a><!--/noindex--><br>
</p>
<p>
	 Туристический бренд&nbsp;&nbsp;
	<!--noindex--><a rel="nofollow" target="_blank" href="https://iliketravel.kz/"><b>iLike Travel</b></a><!--/noindex--><b> </b>- Индивидуальные туры на все курорты мира!<br>
</p>
<p>
	 Слетай с нами!&nbsp;<br>
</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"inline",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_URL" => "result_edit.php",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "result_list.php",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
		"WEB_FORM_ID" => "2"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>