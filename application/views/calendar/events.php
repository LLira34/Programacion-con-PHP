<?php 

	require "../../data/Connection.php"; 
	$db = Db::getConnect();
	
	$eventos = new CalendarDAO();
	$eventos -> listing($db);