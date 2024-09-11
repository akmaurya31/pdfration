<?php 
require_once("dbConnection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pay_date = $_POST['pay_date'];
    $amount =$_POST['plan'];
    $user_id = $_POST['puid'];
    $transaction_id = $_POST['transaction_id'];
    $sql = "UPDATE users SET pay='$amount',pay_date='$pay_date',transaction_id='$transaction_id' WHERE id=$user_id";
    if ($mysqli->query($sql) === TRUE) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information: " . $mysqli->error;
    }
}

$prev_balance=getCurrentBal($mysqli,$user_id);
$service = 'Purchase Plan';
$amt_type = 'cr';
$details = '';
$current_balance=getCurrentBal($mysqli,$user_id);
$recharge_actual_amt=$amount;
if($amount==400){
    $Tcurrent_balance=300;
    $recharge=300;
    $used=100;
}

// else if($amount==850){
//     $Tcurrent_balance=325;
//     $recharge=325;
//     $used=525;
// }else if($amount==1500){
//     $Tcurrent_balance=650;
//     $recharge=650;
//     $used=850;
// }
// else if($amount==2500){
//     $Tcurrent_balance=1300;
//     $recharge=1300;
//     $used=1200;
// }

$sql = "INSERT INTO wallet (user_id, used, service, amt_type, details,prev_balance,current_balance,recharge,	recharge_actual_amt,transaction) VALUES ('$user_id', '$used', '$service', '$amt_type', '$details','$prev_balance','$Tcurrent_balance','$recharge','$recharge_actual_amt','$transaction_id')";

if ($mysqli->query($sql) === TRUE) {
    echo "User information inserted successfully.";
} else {
    echo "Error inserting record: " . $mysqli->error;
}
$mysqli->close();
?>