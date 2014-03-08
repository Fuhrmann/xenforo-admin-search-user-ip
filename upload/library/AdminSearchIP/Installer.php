<?php

class AdminSearchIP_Installer
{
	
	public static function install() {
		$db = XenForo_Application::get('db');
		$db->query("INSERT INTO  `xf_admin_search_type` (
								`search_type` ,
								`handler_class` ,
								`display_order`
								) VALUES (
								'usersIP',
								'AdminSearchIP_AdminSearchHandler_UserIP',
								'220')");
	}
	
	public static function uninstall() {
		$db = XenForo_Application::get('db');
		$db->query("DELETE FROM `xf_admin_search_type` WHERE `xf_admin_search_type`.`search_type` = 'usersIP';");
	}
}

	



