<?php

    if(isset($_GET['bckupdbwpms'])){

		$get_all_table_query = "SHOW TABLES";
		$select_all_tbl 	 = mysqli_query($con, $get_all_table_query);

		$output = '';

		foreach($select_all_tbl as $table){

			$show_table_query 	= "SHOW CREATE TABLE " . $table["Tables_in_wpms"] . "";
			$show_all_tbl  		= mysqli_query($con, $show_table_query);

			foreach($show_all_tbl as $show_table_row){

				$output .="\n\n" . $show_table_row["Create Table"] . ";\n\n";
			}

			$select_query 	= "SELECT * FROM " . $table["Tables_in_wpms"] . "";
			$select_f_db 	= mysqli_query($con, $select_query);

			$total_row 		= mysqli_num_rows($select_f_db);

			for($count=0; $count<$total_row; $count++){

				$single_result = mysqli_fetch_assoc($select_f_db);
				$table_column_array = array_keys($single_result);
				$table_value_array = array_map('escape', array_values($single_result));

				$output.="\nINSERT INTO ". $table["Tables_in_wpms"] ." (";
				$output.="" . implode(", ", $table_column_array) . ") VALUES (";
				$output.="'" . implode("','", $table_value_array) . "');\n";
				
			}
		}

		$file_name = 'database_backup_on_' . date('m-d-y') . '_' . time('h:i A') . '.sql';
		$file_handle = fopen($file_name, 'w+');
		fwrite($file_handle, $output);
		fclose($file_handle);
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($file_name));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file_name));
		ob_clean();
		flush();
		readfile($file_name);
		unlink($file_name);

	}

?>