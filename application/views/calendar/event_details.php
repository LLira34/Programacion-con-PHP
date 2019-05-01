<?php
	require "../../data/Connection.php"; 
	$db = Db::getConnect();
	
	if (isset($_GET["delete"]) && ($_GET["delete"]=="ok")): ?>
		<div class="alert alert-success" role="alert">
			<p><span class="glyphicon glyphicon-info-sign"></span> El evento ha sido eliminado con éxito.</p>
		</div>

<?php 
	else:
		$sql = "SELECT es.*, ter.nombre_completo 
					 FROM eventos as es 
					 INNER JOIN terapeuta as ter 
					 ON es.id_terapeuta = ter.id_terapeuta 
					 WHERE id = :id";

		try {
			$select = $db -> prepare($sql);
			$select -> bindValue("id", $_GET["id"]);
			$select -> execute();

			include "show.php";
			
			$select->CloseCursor();

		} catch(Exception $e) {
			die ('Error' . $e -> GetMessage());
			echo "<div class='alert alert-danger' role='alert'>" . $e -> getLine() . "</div>";
		} 
	endif;
	
	$db = null; 	
?>