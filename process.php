<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$name 		= $_POST['name'];
	$phonenumber	= $_POST['phonenumber'];
	$email 			= $_POST['email'];
	$branch = $_POST['branch'];
	$year=$_POST['year'];
	$post=$_POST['post'];
	$mentor=$_POST['mentor'];
	$intern=$_POST['intern'];
	
	

		$sql = "INSERT INTO hiring (name, phonenumber, email, branch, year, post, mentor, intern) VALUES(?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $phonenumber, $email, $branch, $year, $post, $mentor, $intern]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}