<?php
// $databaseHost = 'mydb.cj2aycaoyu63.us-west-1.rds.amazonaws.com';
// $databaseName = 'cardration';
// $databaseUsername = 'admin';
// $databasePassword = 'Luxyaragroup';

$databaseHost = 'localhost';
$databaseName = 'cardration';
$databaseUsername = 'root';
$databasePassword = 'root@123';


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
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <?php $dd=''; // $dd='bg-primary'; if($_SESSION['role']=='admin'){ $dd='bg-danger'; }  ?>


    

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="login.php" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="images/logo1.png" class="h-8" alt="">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">.</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="dashboard.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">  🎥 Demo</a>
      </li>
      <li>
        <a href="rationCard.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">  📩 Send Request</a>
      </li>
      <li>
        <a href="rationList.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">⬇️Download</a>
      </li>
      <li>
        <a href="pay.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">  💰Recharge</a>
      </li>

      <li>
        <a href="userList.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">  📋User List</a>
      </li>

      
      <li>
        <a href="wallet.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">  👛Wallet</a>
      </li>

      <li>
        <a href="logout.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">  🚪 Logout</a>
      </li>


    </ul>
  </div>
  </div>
</nav>

<div class="max-w-screen-xl flex flex-wrap items-center justify-center pt-20 mx-auto">
    <?php // include('headerFront.php'); ?>
    <div class="inline-flex rounded-md shadow-sm" role="group">
    <a href="other.php" 
     class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
    🎥 Services
    </a>
    <a href="partnership.php" 
   class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
    📩 Partnership
</a>
<a href="personalmeet.php" 
   class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
    📋 PersonalMeet
</a>
    </div> 
</div> 

    
    <!-- <nav class="bg-white  shadow-lg <?php echo $dd; ?> ">
        <div class="container mx-auto flex justify-between items-center px-4 py-3">
            <div class="flex items-center">
                <button class="text-gray-700 focus:outline-none lg:hidden" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden lg:flex lg:items-center" id="navbarNav">
                <ul class="flex space-x-6">
                    <li>
                        <a class="text-gray-700 hover:text-blue-600" href="dashboard.php">🎥 Demo</a>
                    </li>
                    <li>
                        <a class="text-gray-700 hover:text-blue-600" href="rationCard.php">📩 Send Request</a>
                    </li>
                    <li>
                        <a class="text-gray-700 hover:text-blue-600" href="rationList.php">⬇️Download</a>
                    </li>
                    <li>
                        <a class="text-gray-700 hover:text-blue-600" href="pay.php">💰Recharge</a>
                    </li>
                    <?php if($_SESSION['role']=='admin'){ ?>
                    <li>
                        <a class="text-gray-700 hover:text-blue-600" href="userList.php">📋User List</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

          
            <div class="flex items-center space-x-6">
                <ul class="flex items-center space-x-4">
                    <li>
                        <span class="text-gray-700"><?php echo $_SESSION['contact_number'] ?> - <?php echo $_SESSION['username'] ?></span>
                    </li>

                    <li>
                        <?php
                        $ro=getCurWallet($mysqlii,$_SESSION['idd']);
                        $roinc=0;
                        if(isset($ro->current_balance) && $ro->current_balance>0){
                            $roinc=$ro->current_balance;
                        }
                        ?>
                        <a class="text-gray-700 hover:text-blue-600" href="wallet.php"><b>₹</b> <?php echo $roinc ?></a>
                    </li>

                    <li class="relative">
                        <button class="text-gray-700 hover:text-blue-600 focus:outline-none" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </button>
                        <ul class="absolute right-0 mt-2 w-48 bg-white shadow-lg py-2 z-50">
                            <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
