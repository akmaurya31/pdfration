<?php
$databaseHost = 'localhost';
$databaseName = 'thelicensehub_pdf';
$databaseUsername = 'thelicensehub_pdf';
$databasePassword = 'thelicensehub_@2121';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


function getCurrentBal($mysqli,$user_id) {
    $current_balance = 0;
   $sql = "SELECT current_balance FROM wallet where user_id='$user_id' order by id desc limit 0,1";
  $result = $mysqli->query($sql);
  if ($result) {
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
               $current_balance = $row["current_balance"]; // Store the current_balance value
          }
      } else {
          // echo "No records found.";
      }
  } else {
      // echo "Error executing query: " . $mysqli->error;
  }
  return  $current_balance;
  }


  function ReqDownload($mysqli, $user_id, $ration_id) {
    $sql = "SELECT count(*) as cnt FROM ration_download WHERE user_id = '$user_id' AND ration_id = '$ration_id' ORDER BY id DESC LIMIT 1";
    $result = $mysqli->query($sql);
    $cnt=0;
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cnt = $row["cnt"];
        return $cnt;
    } else {
        return 0;  // Return null or any other value you prefer when no records are found
    }
}




function downloadAvl($mysqli, $user_id, $ration_id) {
    $sql = "SELECT count(*) as cnt FROM ration_download WHERE user_id = '$user_id' AND ration_id = '$ration_id' ORDER BY id DESC LIMIT 1";
    $result = $mysqli->query($sql);
    $cnt=0;
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cnt = $row["cnt"];
        return $cnt;
    } else {
        return 0;  // Return null or any other value you prefer when no records are found
    }
}


function getUserHeader($mysqli,$userId) {
    $sql = "SELECT * FROM users WHERE id='" . $userId . "'";
    $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $userDataObj = new stdClass();
      $userDataObj->id = $row['id'];
      $userDataObj->current_balance = $row['current_balance'];
      $userDataObj->email = $row['email'];
      $userDataObj->contact_number = $row['contact_number'];
      $userDataObj->username = $row['username'];
      return $userDataObj;
  } else {
      return null; // Return null if no user found
  }
}



function numberToWords($number) {
    $ones = array(
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine"
    );

    $tens = array(
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen",
        20 => "twenty",
        30 => "thirty",
        40 => "forty",
        50 => "fifty",
        60 => "sixty",
        70 => "seventy",
        80 => "eighty",
        90 => "ninety"
    );

    if ($number < 10) {
        return ucfirst($ones[$number]);
    } elseif ($number < 20) {
        return ucfirst($tens[$number]);
    } elseif ($number < 100) {
        $unit = $number % 10;
        $ten = $number - $unit;
        return ucfirst($tens[$ten] . ($unit ? "-" . $ones[$unit] : ""));
    } else {
        return "Number out of range";
    }
}

// // Test the function
// for ($i = 1; $i <= 99; $i++) {
//     echo $i . " => " . numberToWords($i) . "\n";
// }
