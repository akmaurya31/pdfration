<?php include("headerk.php"); ?>
  <style>
    /* Custom animations */
    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0); }
    }

    .floating {
      animation: float 3s ease-in-out infinite;
    }
  </style>
 
<?php 
  
  
  $ro=getCurWallet($mysqlii,$_SESSION['idd']);
  $roinc=0;
  if(isset($ro->current_balance) && $ro->current_balance>0){
    $roinc=$ro->current_balance;
  }
 
  if($roinc<=0){

      echo '<div class="flex flex-col w-[1025px]" >
      <div class="bg-red-100 border   border-red-400 mt-5 text-red-700 px-4 py-3 rounded relative mx-auto" role="alert">
      <strong class="font-bold">!!</strong>
      <span class="block sm:inline">Please Contact to administrator.</span>
  </div><div>';

  echo '<div class="flex justify-center mt-4 space-x-2">
      <a href="pay.php" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          <span>🔄</span>
          <span class="ml-2">PayNow</span>
      </a>
      <a href="#" class="inline-flex items-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          <span>🔑</span>
          <span class="ml-2">Contact to Admin</span>
      </a>
  </div>';
    die("...");

  }
?>
<div class="bg-gray-100 font-sans mx-auto max-w-screen-xl px-4 z-10">
  <!-- Video Cards Section -->
  <section class="py-12 container mx-auto px-4">
    <div class="grid gap-8 lg:grid-cols-2">
      <!-- Video Card 1 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-500">
        <div class="relative">
          <img class="w-full  " src="./images/1a.jpeg" alt="Video Thumbnail">
          <div class="  bottom-0 left-0 bg-slate-900 w-full p-4 text-white">
            <h2 class="text-xl font-bold">Thrilled to share my mission in this 3-minute video! </h2>
            <p class="mt-2 text-sm">As a CEO Coach and Business Strategist, I'm dedicated to transforming businesses and guiding sales teams to surpass targets. 
                Join me as I empower Indian SMEs to expand globally. 
                Let's chart a path to unparalleled success together! 🚀💼</p>
          </div>
        </div>
        <div class="p-4">
          <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full border-2 border-indigo-500 floating" src="./images/1724738738665.jpeg    " alt="Author Photo">
            <div class="ml-4">
              <p class="text-sm text-gray-700 font-semibold">Keynoter: Dr Manav Ahuja</p>
              <p class="text-xs text-gray-500">Duration: 45 mins</p>
            </div>
          </div>
          <a href="videosingle?id=1" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">View Now</a>
        </div>
      </div>

      <!-- Video Card 2 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-500">
        <div class="relative">
          <img class="w-full   object-cover" src="./images/2a.jpeg" alt="Video Thumbnail">
          <div class="  bottom-0 left-0 bg-slate-900 w-full p-4 text-white">
            <h2 class="text-xl font-bold">Thrilled to share my mission in this 3-minute video! </h2>
            <p class="mt-2 text-sm">As a CEO Coach and Business Strategist, I'm dedicated to transforming businesses and guiding sales teams to surpass targets. 
                Join me as I empower Indian SMEs to expand globally. 
                Let's chart a path to unparalleled success together! 🚀💼</p>
          </div>
        </div>
        <div class="p-4">
          <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full border-2 border-indigo-500 floating" src="./images/1724738738665.jpeg    " alt="Author Photo">
            <div class="ml-4">
              <p class="text-sm text-gray-700 font-semibold">Keynoter: Dr Manav Ahuja</p>
              <p class="text-xs text-gray-500">Duration: 45 mins</p>
            </div>
          </div>
          <a href="videosingle?id=1" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">View Now</a>
        </div>
      </div>

      <!-- Video Card 3 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-500">
        <div class="relative">
          <img class="w-full   object-cover" src="./images/3a.jpeg" alt="Video Thumbnail">
          <div class="  bottom-0 left-0 bg-slate-900 w-full p-4 text-white">
            <h2 class="text-xl font-bold">Thrilled to share my mission in this 3-minute video! </h2>
            <p class="mt-2 text-sm">As a CEO Coach and Business Strategist, I'm dedicated to transforming businesses and guiding sales teams to surpass targets. 
                Join me as I empower Indian SMEs to expand globally. 
                Let's chart a path to unparalleled success together! 🚀💼</p>
          </div>
        </div>
        <div class="p-4">
          <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full border-2 border-indigo-500 floating" src="./images/1724738738665.jpeg" alt="Author Photo">
            <div class="ml-4">
              <p class="text-sm text-gray-700 font-semibold">Keynoter: Dr Manav Ahuja</p>
              <p class="text-xs text-gray-500">Duration: 45 mins</p>
            </div>
          </div>
          <a href="videosingle?id=1" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">View Now</a>
        </div>
      </div>

      <!-- Video Card 4 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-500">
        <div class="relative">
          <img class="w-full   object-cover" src="./images/4a.jpeg" alt="Video Thumbnail">
          <div class="  bottom-0 left-0 bg-slate-900 w-full p-4 text-white">
            <h2 class="text-xl font-bold">Thrilled to share my mission in this 3-minute video! </h2>
            <p class="mt-2 text-sm">As a CEO Coach and Business Strategist, I'm dedicated to transforming businesses and guiding sales teams to surpass targets. 
                Join me as I empower Indian SMEs to expand globally. 
                Let's chart a path to unparalleled success together! 🚀💼</p>
          </div>
        </div>
        <div class="p-4">
          <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full border-2 border-indigo-500 floating" src="./images/1724738738665.jpeg    " alt="Author Photo">
            <div class="ml-4">
              <p class="text-sm text-gray-700 font-semibold">Keynoter: Dr Manav Ahuja</p>
              <p class="text-xs text-gray-500">Duration: 45 mins</p>
            </div>
          </div>
          <a href="videosingle?id=1" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">View Now</a>
        </div>
      </div>
    </div>



    <!-- Video Card 4 -->
    <div class="bg-white mt-10 rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-500">
        <div class="relative">
          <img class="w-full   object-cover" src="./images/5a.jpeg" alt="Video Thumbnail">
          <div class="  bottom-0 left-0 bg-slate-900 w-full p-4 text-white">
            <h2 class="text-xl font-bold">Thrilled to share my mission in this 3-minute video! </h2>
            <p class="mt-2 text-sm">As a CEO Coach and Business Strategist, I'm dedicated to transforming businesses and guiding sales teams to surpass targets. 
                Join me as I empower Indian SMEs to expand globally. 
                Let's chart a path to unparalleled success together! 🚀💼</p>
          </div>
        </div>
        <div class="p-4">
          <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full border-2 border-indigo-500 floating" src="./images/1724738738665.jpeg    " alt="Author Photo">
            <div class="ml-4">
              <p class="text-sm text-gray-700 font-semibold">Keynoter: Dr Manav Ahuja</p>
              <p class="text-xs text-gray-500">Duration: 45 mins</p>
            </div>
          </div>
          <a href="videosingle?id=1" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">View Now</a>
        </div>
      </div>
    </div>
  </section>

</div>
</html>
