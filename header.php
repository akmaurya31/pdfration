<?php
$databaseHost = 'mydb.cj2aycaoyu63.us-west-1.rds.amazonaws.com';
$databaseName = 'cardration';
$databaseUsername = 'admin';
$databasePassword = 'Luxyaragroup';

// Open a new connection to the MySQL server
$mysqlii = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


session_start();
if (!isset($_SESSION['is_login'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}

function getUserDataById($mysqli,$userId) {
    $sql = "SELECT * FROM users WHERE id='" . $userId . "'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $userDataObj = new stdClass();
      $userDataObj->id = $row['id'];
      $userDataObj->current_balance = $row['current_balance'];
      $userDataObj->email = $row['email'];
      return $userDataObj;
  } else {
      return null; // Return null if no user found
  }
}


function getCurWallet($mysqli,$userId) {
  $sql = "SELECT * FROM wallet WHERE user_id='" . $userId . "' order by id desc limit 0,1";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $userDataObj = new stdClass();
      $userDataObj->id = $row['id'];
      $userDataObj->current_balance = $row['current_balance'];
      return $userDataObj;
  } else {
      return null; // Return null if no user found
  }
}





?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        /* Style for navbar links */
        .navbar-nav .nav-link {
            color: white !important; /* Set text color to white */
        }
    </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php $dd='bg-primary'; if($_SESSION['role']=='admin'){ $dd='bg-danger'; }  ?>
    
    
    <nav class="navbar navbar-expand-lg navbar-light <?php echo $dd ?> ">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">#</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php"> 🎥 Demo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rationCard.php">📩 Send Request</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="information.php">Fill Details</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="rationList.php">⬇️Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pay.php">💰Recharge</a>
                    </li>
                    <?php if($_SESSION['role']=='admin'){ ?>

                    <li class="nav-item">
                        <a class="nav-link" href="userList.php">📋User List</a>
                    </li>
                    <?php } ?>

                   
                </ul>
            </div>
            <!-- Right side of the navbar -->
            <div class="ml-auto">
                <ul class="navbar-nav">

                   <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $_SESSION['contact_number'] ?> - <?php echo $_SESSION['username'] ?></a>
                    </li>

                    <li class="nav-item">
                      <?php
                       $ro=getCurWallet($mysqlii,$_SESSION['idd']);
                       $roinc=0;
                       if(isset($ro->current_balance) && $ro->current_balance>0){
                        $roinc=$ro->current_balance;
                       }
                      ?>
                        <a class="nav-link" href="wallet.php"> <b>₹</b> <?php echo $roinc  ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- <li><a class="dropdown-item" href="#">Edit Profile</a></li> -->
                            <!-- <li><a class="dropdown-item" href="#">Change Password</a></li> -->
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>