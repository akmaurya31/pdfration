<?php include("headerk.php"); 



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

    .highlight {
      background: linear-gradient(90deg, rgba(255,183,77,1) 0%, rgba(255,255,255,1) 50%, rgba(255,183,77,1) 100%);
      background-size: 200% 100%;
      animation: shine 3s linear infinite;
    }

    @keyframes shine {
      0% { background-position: 0% 0%; }
      50% { background-position: 100% 0%; }
      100% { background-position: 0% 0%; }
    }
  </style>
 
 

 
  <!-- Main Content Section -->
  <section class="py-12 w-[900px]  mx-auto grid   gap-2">
    <!-- Video and About the Lesson -->
    <div class="lg:col-span-2">
      <!-- Video Section -->
       <h1 class="text-xl"> Title: Lesson: Understanding Key Concepts of Web Development tag/F822342342/ Date:33/28/429.</h1>
      <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
        <video id="mainVideo" class=" h-[500px]" controls>
          <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="p-4 highlight">
          <h2 class="text-2xl font-bold text-indigo-600 mb-2">Lesson: Understanding Key Concepts of Web Development</h2>
          <p class="text-gray-700">
            This lesson covers the fundamental principles of web development, providing hands-on examples and interactive sessions to guide you through the learning process.
          </p>
        </div>
      </div>

      <!-- Meet the Coach Section -->
      <div class="bg-white shadow-lg rounded-lg p-6 highlight">
        <h2 class="text-xl font-bold text-indigo-600 mb-4">Meet the Coach</h2>
        <div class="flex items-center">
          <img class="w-16 h-16 rounded-full border-4 border-indigo-500 floating" src="./images/1724738738665.jpeg" alt="Coach Photo">
          <div class="ml-4">
            <p class="text-lg font-bold text-gray-900">Coach: John Doe</p>
            <p class="text-sm text-gray-500">Expert in Web Development</p>
          </div>
        </div>
        <p class="mt-4 text-gray-700">
          John Doe is a seasoned developer with over 10 years of experience in the field. He has mentored hundreds of students, helping them master web technologies.
        </p>
      </div>
    </div>

   
  </section>

  <!-- JavaScript to Change Videos -->
  <script>
    function changeVideo(src) {
      const video = document.getElementById('mainVideo');
      video.src = src;
      video.play();
    }
  </script>

</body>
</html>
