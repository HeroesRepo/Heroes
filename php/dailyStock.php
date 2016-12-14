<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
include 'connection.php';
$data=json_decode(file_get_contents("php://input"));
$bloodgroup=mysqli_real_escape_string($con, $data->bloodGroup);
$component=mysqli_real_escape_string($con, $data->component);
$request=$component."_".$bloodgroup;

$query="select info.bb_regno , info.bb_name , info.bb_lat , info.bb_lon , curr.$request as stock, posting_time , cred.contact_no from `bb_dailystock_curr` curr LEFT JOIN bb_info info on curr.bb_regno = info.bb_regno LEFT JOIN bb_credentials cred on curr.bb_regno=cred.bb_regno";

$result=mysqli_query($con,$query);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
//echo result as json
echo json_encode($rows);
?>








