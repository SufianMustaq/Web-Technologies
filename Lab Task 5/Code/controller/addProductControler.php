<?php 
require_once ('../model/model.php');

$tableName = 'product';

if(isset($_POST['submit'])) {
	$data['Name'] = $_POST['name'];
	$data['Buying Price'] = $_POST['bprice'];
	$data['SellingPrice'] = $_POST['sprice'];
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = $_POST['display'];
	}

  if (addProduct($tableName, $data)) {
  	echo '<p>Product Successfully added!!</p><br>';
  	echo "<a href='../display.php'>Display Product</a>";
  }
} 


?>