<?php 
 
 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $id  = $_GET['id'];
 
 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM cap WHERE id='".$id."'";
 
 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
 "id"=>$res['id'],
 "name"=>$res['name'],
 "college"=>$res['college'],
 "course"=>$res['course'],
 "intern"=>$res['intern'],
 "startdate"=>$res['startdate'],
 "enddate"=>$res['enddate'],
 "duration"=>$res['duration'],
 )
 );
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);
 
 }