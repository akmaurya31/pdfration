
<!DOCTYPE html>
<html>
<head>
    <?php include('meta.php');?>
    <script src="https://cdn.tailwindcss.com"></script>
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
         <div class="max-w-screen-xl px-4 py-3 mx-auto overflow-x-auto ">
            <div class="flex items-center my-2">
                <ul class="flex flex-row font-medium mt-0 space-x-4 rtl:space-x-reverse text-sm">
                    
                    <li>
                        <a href="otherservices.php" class="text-gray-900 p-2 rounded hover:underline whitespace-nowrap border border-blue-400 ">🛠️OtherSerivces</a>
                    </li>

                    <li>
                        <a href="https://mart.bharatcschub.online" target="_blank" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-pink-400 bg-[#232343] text-white  hover:bg-blue-800 ">🌐 Hub</a>
                    </li>

                    <li>
                        <a href="partnership.php" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-red-400 ">🤝Partnership</a>
                    </li>
                    <li>
                        <a href="personalmeet.php" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-yellow-400 ">🗣️ PersonalMeet</a>
                    </li>

                    <li>
                        <a href="formcsc.php" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-green-400 ">🚀 Enquiry</a>
                    </li>

                   

                    <li>
                    <a type="button" href="festivaloffer.php" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center whitespace-nowrap">🎉Festival Offer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
