<?php
require('connection.inc.php');
require('functions.inc.php');

$categories_id='';
$categories_id=get_safe_value($con,$_POST['categories_id']);
$res=mysqli_query($con,"select * from sub_categories where 
categories_id='$categories_id' and status='1'");
if(mysqli_num_rows($res)>0){
	$html='';
	while($row=mysqli_fetch_assoc($res)){
		$html="<option value=".$row['id'].">".$row['sub_categories']."</optoin>";
	}
	echo $html;
}else{
	echo"<option value=''> No Sub Categories</option>";
}

?>