<?php 
	require "../../data/Connection.php"; 
	

	$eventos = new CalendarDAO();
	$eventos -> listing($db_connect);