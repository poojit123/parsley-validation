<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_GET['email']==='jitu@gmail.com'){
  $a=array('status'=>0);
}else{
  $a=array('status'=>1);	
}
echo json_encode($a);
?>