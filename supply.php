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
    $item7 = mysqli_real_escape_string($connect, $data[7]);
	$item8 = mysqli_real_escape_string($connect, $data[8]);  
    $item9 = mysqli_real_escape_string($connect, $data[9]);
	    $item10 = mysqli_real_escape_string($connect, $data[10]);
    $item11 = mysqli_real_escape_string($connect, $data[11]);
	    $item12 = mysqli_real_escape_string($connect, $data[12]);
		    $item13 = mysqli_real_escape_string($connect, $data[13]);
	

                $query = "INSERT into supply(domaincode, domain, areacode , area, elementcode, element, itemcode, item, yearcode, year, unit, value , flag, flagdescription) 
				values('$item0','$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13')";
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
  <title>Webslesson Tutorial</title>
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