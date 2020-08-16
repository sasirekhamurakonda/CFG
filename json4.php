		<?php   
		   header('Content-Type: application/json');
           $connect = mysqli_connect("localhost", "root", "", "eggs");  
           $sql = "SELECT * from malfinal";  
           $result = mysqli_query($connect, $sql);  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }   
           echo json_encode($json_array);  
           ?>