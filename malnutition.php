<?php  
$connect = mysqli_connect("localhost", "root", "", "eggs");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['name'], "r");
   while($data = fgetcsv($handle))
   {
    $item0 = mysqli_real_escape_string($connect, $data[0]);  
    $item1 = mysqli_real_escape_string($connect, $data[1]);
	    $item2 = mysqli_real_escape_string($connect, $data[2]);
    $item3 = mysqli_real_escape_string($connect, $data[3]);
	$item4 = mysqli_real_escape_string($connect, $data[4]);  
    $item5 = mysqli_real_escape_string($connect, $data[5]);
	    $item6 = mysqli_real_escape_string($connect, $data[6]);
	

                $query = "INSERT into mal_final (country, year, severewasting , wasting, overweight,stunting,underweight)
				values('$item0','$item1','$item2','$item3','$item4','$item5','$item6')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 </head>  
 <body>  
  <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
 </body>  
</html>