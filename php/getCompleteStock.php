<?php

include 'connection.php';

$series1 = array();
$series1['name'] = 'Whole Blood';
$series1['data'] = array();

$series2 = array();
$series2['name'] = 'PCV';
$series2['data'] = array();

$series3 = array();
$series3['name'] = 'FFP';
$series3['data'] = array();

$series4 = array();
$series4['name'] = 'RDP';
$series4['data'] = array();


/*whole blood*/

$query=mysqli_query($con,"select SUM(wb_a_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_a_pos= $row['SUM(wb_a_pos)'];

$query=mysqli_query($con,"select SUM(wb_a_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_a_neg= $row['SUM(wb_a_neg)'];


$query=mysqli_query($con,"select SUM(wb_b_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_b_pos= $row['SUM(wb_b_pos)'];

$query=mysqli_query($con,"select SUM(wb_b_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_b_neg= $row['SUM(wb_b_neg)'];

$query=mysqli_query($con,"select SUM(wb_o_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_o_pos= $row['SUM(wb_o_pos)'];

$query=mysqli_query($con,"select SUM(wb_o_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_o_neg= $row['SUM(wb_o_neg)'];

$query=mysqli_query($con,"select SUM(wb_ab_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_ab_pos= $row['SUM(wb_ab_pos)'];

$query=mysqli_query($con,"select SUM(wb_ab_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$wb_ab_neg= $row['SUM(wb_ab_neg)'];

array_push($series1['data'], $wb_a_pos);
array_push($series1['data'], $wb_b_pos);
array_push($series1['data'], $wb_o_pos);
array_push($series1['data'], $wb_ab_pos);
array_push($series1['data'], $wb_a_neg);
array_push($series1['data'], $wb_b_neg);
array_push($series1['data'], $wb_o_neg);
array_push($series1['data'], $wb_ab_neg);


              /*pcv*/
$query=mysqli_query($con,"select SUM(pcv_a_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_a_pos= $row['SUM(pcv_a_pos)'];

$query=mysqli_query($con,"select SUM(pcv_a_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_a_neg= $row['SUM(pcv_a_neg)'];

$query=mysqli_query($con,"select SUM(pcv_b_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_b_pos= $row['SUM(pcv_b_pos)'];

$query=mysqli_query($con,"select SUM(pcv_b_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_b_neg= $row['SUM(pcv_b_neg)'];

$query=mysqli_query($con,"select SUM(pcv_o_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_o_pos= $row['SUM(pcv_o_pos)'];

$query=mysqli_query($con,"select SUM(pcv_o_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_o_neg= $row['SUM(pcv_o_neg)'];

$query=mysqli_query($con,"select SUM(pcv_ab_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_ab_pos= $row['SUM(pcv_ab_pos)'];

$query=mysqli_query($con,"select SUM(pcv_ab_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$pcv_ab_neg= $row['SUM(pcv_ab_neg)'];

array_push($series2['data'], $pcv_a_pos);
array_push($series2['data'], $pcv_b_pos);
array_push($series2['data'], $pcv_o_pos);
array_push($series2['data'], $pcv_ab_pos);
array_push($series2['data'], $pcv_a_neg);
array_push($series2['data'], $pcv_b_neg);
array_push($series2['data'], $pcv_o_neg);
array_push($series2['data'], $pcv_ab_neg);

/*rdp*/
$query=mysqli_query($con,"select SUM(rdp_a_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_a_pos= $row['SUM(rdp_a_pos)'];

$query=mysqli_query($con,"select SUM(rdp_a_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_a_neg= $row['SUM(rdp_a_neg)'];

$query=mysqli_query($con,"select SUM(rdp_b_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_b_pos= $row['SUM(rdp_b_pos)'];

$query=mysqli_query($con,"select SUM(rdp_b_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_b_neg= $row['SUM(rdp_b_neg)'];

$query=mysqli_query($con,"select SUM(rdp_o_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_o_pos= $row['SUM(rdp_o_pos)'];

$query=mysqli_query($con,"select SUM(rdp_o_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_o_neg= $row['SUM(rdp_o_neg)'];

$query=mysqli_query($con,"select SUM(rdp_ab_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_ab_pos= $row['SUM(rdp_ab_pos)'];

$query=mysqli_query($con,"select SUM(rdp_ab_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$rdp_ab_neg= $row['SUM(rdp_ab_neg)'];

array_push($series3['data'], $rdp_a_pos);
array_push($series3['data'], $rdp_b_pos);
array_push($series3['data'], $rdp_o_pos);
array_push($series3['data'], $rdp_ab_pos);
array_push($series3['data'], $rdp_a_neg);
array_push($series3['data'], $rdp_b_neg);
array_push($series3['data'], $rdp_o_neg);
array_push($series3['data'], $rdp_ab_neg);

/*ffp*/
$query=mysqli_query($con,"select SUM(ffp_a_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_a_pos= $row['SUM(ffp_a_pos)'];

$query=mysqli_query($con,"select SUM(ffp_a_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_a_neg= $row['SUM(ffp_a_neg)'];

$query=mysqli_query($con,"select SUM(ffp_b_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_b_pos= $row['SUM(ffp_b_pos)'];

$query=mysqli_query($con,"select SUM(ffp_b_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_b_neg= $row['SUM(ffp_b_neg)'];

$query=mysqli_query($con,"select SUM(ffp_o_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_o_pos= $row['SUM(ffp_o_pos)'];

$query=mysqli_query($con,"select SUM(ffp_o_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_o_neg= $row['SUM(ffp_o_neg)'];

$query=mysqli_query($con,"select SUM(ffp_ab_pos) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_ab_pos= $row['SUM(ffp_ab_pos)'];


$query=mysqli_query($con,"select SUM(ffp_ab_neg) from bb_dailystock_curr ");
$row=mysqli_fetch_array($query);
$ffp_ab_neg= $row['SUM(ffp_ab_neg)'];

array_push($series4['data'], $ffp_a_pos);
array_push($series4['data'], $ffp_b_pos);
array_push($series4['data'], $ffp_o_pos);
array_push($series4['data'], $ffp_ab_pos);
array_push($series4['data'], $ffp_a_neg);
array_push($series4['data'], $ffp_b_neg);
array_push($series4['data'], $ffp_o_neg);
array_push($series4['data'], $ffp_ab_neg);

$response = array();
array_push($response, $series1);
array_push($response, $series2);
array_push($response, $series3);
array_push($response, $series4);

print json_encode($response,JSON_NUMERIC_CHECK);

?>