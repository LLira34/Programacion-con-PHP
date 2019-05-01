<?php 
	
	class CalendarDAO {

		protected $db_row;

		// Listing events
		public static function listing($connection){
			$db = Db::getConnect();
			$sql = 'SELECT * FROM eventos';
			
			try{
				$list = $db->prepare($sql);
				$list->execute();
				$db_array = array();
				$i = 0;
				while($db_row = $list -> fetch(PDO::FETCH_BOTH)) {
					$db_array[$i] = $db_row;
					$i++;
				}

				// We transform the data found in the BD to the JSON format
				echo json_encode(
					array(
						"success" => 1, 
						"result" => $db_array
					)
				);
			}catch(Exception $e){
				die ('Error' . $e -> GetMessage());
				echo "<div class='alert alert-danger' role='alert'>" . $e -> getLine() . "</div>";
			}
		}

		// Save events
		public static function save($connection){
			$db = Db::getConnect();
			$sql = ('INSERT INTO eventos (title, body, url, class, start, end, start_normal, end_normal, id_terapeuta) 
			VALUES (:title, :body, :url, :class, :start, :end, :start_normal, :end_normal, :id_terapeuta)');
			$inicio = strtotime(substr($_POST["start"], 6, 4) . "-" . substr($_POST["start"], 3, 2) . "-" . substr($_POST["start"], 0, 2) . " "  . substr($_POST["start"], 10, 6)) * 1000;
			$final  = strtotime(substr($_POST["end"], 6, 4)."-" . substr($_POST["end"], 3, 2) . "-" . substr($_POST["end"], 0, 2) . " " . substr($_POST["end"], 10, 6)) * 1000;
			$link = __LOCALHOST__ . "/event_details.php";
			
			try{
				$select = $db->prepare($sql);
				$select -> bindValue(":title", $_POST['title']);
				$select -> bindValue(":body", $_POST["body"]);
				$select -> bindValue(":url", $link);
				$select -> bindValue(":class", $_POST["class"]);
				$select -> bindValue(":start", $inicio);
				$select -> bindValue(":end", $final);
				$select -> bindValue(":start_normal", $_POST["start"]);
				$select -> bindValue(":end_normal", $_POST["end"]);
				$select -> bindValue(":id_terapeuta", $_POST["id_terapeuta"]);
				$select -> execute();
				
				$sql2 = "SELECT MAX(id) AS id FROM eventos";
				$select = $db -> prepare($sql2);
				$select -> execute();

				$db_file = $select -> fetch(PDO::FETCH_ASSOC);
				$id_event = $db_file['id'];

				$link = __LOCALHOST__ . "/event_details.php?id=$id_event";

				$sql3 = "UPDATE eventos SET url = '$link' WHERE id = '$id_event'";
				$select = $db -> prepare($sql3);
				$select -> execute();
				
				header("location:index.php?save=ok");
			}catch(Exception $e){
				die ('Error' . $e -> GetMessage());
				echo "<div class='alert alert-danger' role='alert'>" . $e -> getLine() . "</div>";
			}
		}

		// Delete events
		public static function delete($connection) {
			$db = Db::getConnect();
			$sql = 'DELETE FROM eventos WHERE id = :id';
			try{
				$delete = $db->prepare($sql);
				$delete->bindValue('id', $_GET['id']);
				$delete->execute();
				$delete -> CloseCursor();
				header("location:index.php?delete=ok");
			}catch(Exception $e){
				die ('Error' . $e->GetMessage());
				echo "<div class='alert alert-danger' role='alert'>" . $e -> getLine() . "</div>";
			}
		}
		
		// List events
		public static function all(){
			$db = Db::getConnect();
			include 'models/Calendar.php';

			$listCitas = [];
			$select = $db->query('SELECT * FROM eventos ORDER BY title');
			foreach ($select->fetchAll() as $calendar) {
				$listCitas[] = new Calendar($calendar['id'], $calendar['title'], $calendar['body'], 
				$calendar['url'], $calendar['class'], $calendar['start'], $calendar['end'], $calendar['start_normal'],
				$calendar['end_normal'], $calendar['id_terapeuta']); 
			}
			
			return $listCitas;
		}
		
	} // End class