<div class="max-w-screen-xl px-4 py-3 mx-auto overflow-x-auto ">
            <div class="flex items-center my-2">
                <ul class="flex flex-row font-medium mt-0 space-x-4 rtl:space-x-reverse text-sm">
                    <li>
                        <!-- <a href="formcsc.php"  class="text-gray-900 p-2 rounded bg-[#232343] hover:underline whitespace-nowrap border border-green-400  text-white ">🚀 Enquiry(हमसे जुड़े)</a> -->

                        <!-- <div class="flex flex-col items-center justify-center  p-2"> -->
                    <a href="formcsc.php" class="text-white -mt-2  p-2 bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span class="whitespace-nowrap">हमसे जुड़े</span>
                    </a>
                <!-- </div> -->

                    </li>

                    <li>
                        <a href="otherservices.php" class="text-gray-900 p-2 rounded hover:underline whitespace-nowrap border border-blue-400 ">🛠️OtherServices</a>
                    </li>

                    <li>
                        <a href="job.php" class="text-gray-900 p-2 rounded hover:underline whitespace-nowrap border border-blue-400 ">🏷️Job नौकरी </a>
                    </li>


                  
                    <!-- <li>
                        <a href="https://mart.bharatcschub.online" target="_blank" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-pink-400 bg-[#232343] text-white  hover:bg-blue-800 ">🌐 Hub</a>
                    </li> -->

                    <li>
                        <a href="partnership.php" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-red-400 ">🤝Partnership</a>
                    </li>
                    <li>
                        <a href="personalmeet.php" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-yellow-400 ">🗣️ PersonalMeet</a>
                    </li>

                  

                   


                </ul>
            </div>
        </div>



        <div class="flex flex-col items-center p-6 bg-blue-100">

        <?php
// Array of welcome messages
$messages = [
    "भारत की सबसे उत्कृष्ट वेबसाइट में आपका स्वागत है ! 🌟",
    "स्वागत है! आप पहुंचे हैं भारत की नंबर 1 वेबसाइट पर ",
    "भारत की नंबर - 1 वेबसाइट में आपका स्वागत है ! 🌟",
    "आपका स्वागत है! यहां है भारत की सर्वश्रेष्ठ वेबसाइट ! "
];

$backgroundColors = [
    " bg-green-800 ",
    " bg-green-800 ",
    " bg-yellow-500 ",
    " bg-yellow-500 ",
    " bg-blue-500 "
];

// Get a random message
$randomMessage = $messages[array_rand($messages)];
$randomBackgroundColor = $backgroundColors[array_rand($backgroundColors)];
?>


  <h1 class="text-2xl font-extrabold text-center mb-1 animate-bounce text-white <?php echo $randomBackgroundColor; ?>   p-2 rounded-lg shadow-lg">
  <?php echo $randomMessage; ?>
  </h1>
  <p class="text-2xl font-semibold text-center mb-2 text-green-600">
    4300+ <span class="font-extrabold text-black">जन सेवा केंद्र</span> और 6000+ <span class="font-extrabold text-black">छोटे-बड़े व्यवसायी</span> हमारे साथ हैं। 🚀
  </p>
  
  <p class="text-lg text-center text-gray-700">
    अगर आपने <strong class="text-blue-500">भारत CSC हब</strong> वेबसाइट पर रजिस्ट्रेशन किया है, तो कृपया <strong class="text-red-500">कॉल न करें। 📞</strong>
    हमारी टीम <strong class="font-bold">2-3 घंटे</strong> में आपसे संपर्क करेगी! ⏳ सिर्फ <strong class="text-green-500">व्हाट्सएप</strong> का उपयोग करें। धन्यवाद! 🙏✨
  </p>

  <!-- <div class="flex justify-center">
  <a href="job.php" class="text-white m-4 bg-red-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center blink-bg">
    <span class="mr-2 text-2xl">👉</span>
    <span class="text-2xl"><b>नौकरी / Job – Click Here 🖱️</b></span>
  </a>
</div> -->

</div>



 