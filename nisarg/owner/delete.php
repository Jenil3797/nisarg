<?php 
$property_id='';
include("../config/config.php");

	global $db,$property_id;

  $property_id = mysqli_real_escape_string($db,$_GET['ID']);

$sql="DELETE from property_photo where property_id='$property_id'";
$query=mysqli_query($db,$sql);

if($query){
	$sql2="DELETE from review where property_id='$property_id'";
$query2=mysqli_query($db,$sql2);

$sql3="DELETE from add_property where property_id='$property_id'";
$query3=mysqli_query($db,$sql3);
if($query3){
			
?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	alert('Property Deleted Successfully');
  document.location='owner-index.php';
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Product has been deleted.</strong></center>
</div></div>


<?php
//echo "<script type='text/javascript'>alert('Property Deleted Successfully');document.location='owner-index.php'</script>";


}
}


 ?>