
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <div class="container mx-auto mt-5 max-w-[1320px]"> -->
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
</head>
<?php session_start(); ?>


    <nav class="bg-white border-gray-200 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo1.png" class="h-10" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap ">CSC</span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="tel:7518869428" class="text-sm  text-gray-500  hover:underline"> 📞 (91)7518869428</a>
              
              <?php  //print_r($_SESSION); 
              if (isset($_SESSION['is_login'])) { ?>
                <a href="dashboard.php" class="text-sm  text-blue-600  hover:underline">Dashboard</a>
                <?php } else{ ?>
                <a href="login.php" class="text-sm  text-blue-600  hover:underline">Login</a>
                <?php } ?>
          
          
            </div>
        </div>
    </nav>
    <nav class="bg-gray-50">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    
                    <li>
                        <a href="otherservices.php" class="text-gray-900  hover:underline">🛠️OtherSerivces</a>
                    </li>
                    <li>
                        <a href="partnership.php" class="text-gray-900  hover:underline">🤝Partnership</a>
                    </li>
                    <li>
                        <a href="personalmeet.php" class="text-gray-900  hover:underline">🗣️ PersonalMeet</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
