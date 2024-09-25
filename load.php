<?php
$conn = mysqli_connect("sql5.freesqldatabase.com","sql5733231","FnWURseTd3","sql5733231") or die("Connection Failed.");
@$block = $_GET['block'];
@$gp = $_GET['gp'];
if ($block != "" ) {
    if ($gp != "") {$sql = "SELECT * FROM demo WHERE Block_Name = '$block' and Nyay_Panchayat = '$gp' "; } 
    else {$sql = "SELECT * FROM smb_db WHERE Block_Name = '$block'";}; };

$result = mysqli_query($conn, $sql) or die("SQL Failed");
$output = [];
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
  }}else{$output['empty'] = ['empty'];}
mysqli_close($conn);
echo json_encode($output);
?>
