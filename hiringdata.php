<?php
require_once('configure.php');

if($conn)
{
	
}
else
{
	die("fail because".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hiring Data</title>
 
</head>
<body>

<h1 style="text-align:center;">Hiring Data</h1>

<div class="container">
<table border="2">
	
<tr>
	<th>S.No</th>
	<th>Name</th>
	<th>Phone No.</th>
	<th>Email</th>
    <th>Branch</th>
    <th>Year</th>
    <th>Post</th>
    <th>Mentor</th>
    <th>Intern</th>
</tr>





<?php

$sql = "SELECT * FROM `hiring`";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);




if($num> 0){
  

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);


        echo "
        <tr>

         <td>".$row['S.No']."</td>
         <td>".$row['name']."</td>
         <td>".$row['phonenumber']."</td>
         <td>".$row['email']."</td>
         <td>".$row['branch']."</td>
           <td>".$row['year']."</td>
             <td>".$row['post']."</td>
               <td>".$row['mentor']."</td>
                 <td>".$row['intern']."</td>
      
      </tr>
         "

        ;
    }


}

?>

</table>
</div>
<?php
echo "<h3>Total No. of records:" .$num;
"</h3>"
?>
</body>
</html>

