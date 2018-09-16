<?if(!check_bitrix_sessid()) return;?>
<?
echo CAdminMessage::ShowNote(GetMessage("MOD_INST_OK"));
?>
<h2><?php echo GetMessage("PAYBOX_INSTALL_TITLE") ?></h2>

<p><b><?php echo GetMessage("PAYBOX_INSTALL_FIRST_TITLE") ?></b></p>
<p>
	<ul>
		<li><b><?php echo GetMessage("PAYBOX_INSTALL_FIRST_SETTING_A") ?></b></li>
		<?php echo GetMessage("PAYBOX_INSTALL_FIRST_SETTING_A_DESCR") ?><br>
		<li><b><?php echo GetMessage("PAYBOX_INSTALL_FIRST_SETTING_B") ?></b></li>
		<?php echo GetMessage("PAYBOX_INSTALL_FIRST_SETTING_B_DESCR") ?><br>
	</ul>
</p>
<p><b><?php echo GetMessage("PAYBOX_INSTALL_SECOND_TITLE") ?></b></p>
<p>
	<ul>
		<li><b><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_A") ?></b></li>
		<?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_A_DESCR") ?><br>
		<ul style="font-size: 10px"><b><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B") ?></b>
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_A") ?></li>		
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_B") ?></li>
			<b><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_C") ?></b>
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_D") ?></li>
			
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_E") ?></li>
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_F") ?></li>		
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_G") ?></li>	
			
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_H") ?></li>
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_I") ?></li>		
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_J") ?></li>
			
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_K") ?></li>
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_L") ?></li>
			
			<li><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_M") ?></li>	

			<b><?php echo GetMessage("PAYBOX_INSTALL_SECOND_SETTING_B_DESCR_O") ?></b>
		</ul>
	</ul>
</p><br>
<form action="<?echo $APPLICATION->GetCurPage()?>">
	<input type="hidden" name="lang" value="<?echo LANG?>">
	<input type="submit" name="" value="<?echo GetMessage("MOD_BACK")?>">
<form>