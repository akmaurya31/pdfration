<?php include("headerk.php"); 

$id = $_REQUEST['id'];

$international_vyapaar_topics = [
    1 => [
        "title" => "Why To Do International Vyapaar",
        "description" => "Learn the benefits of expanding your business globally, including access to larger markets, increased profits, and opportunities to grow your brand internationally."
    ],
    2 => [
        "title" => "How To Do International Vyapaar",
        "description" => "Get step-by-step guidance on establishing your international business, from finding buyers to setting up supply chains and handling logistics efficiently."
    ],
    3 => [
        "title" => "International Vyapaar - Government Rules and Compliances",
        "description" => "Understand the essential export-import regulations, compliance requirements, and legal frameworks to ensure smooth international trading."
    ],
    4 => [
        "title" => "How TPEG Helps You in Doing International Vyapaar",
        "description" => "Explore how TPEG provides tailored support for Indian SMEs through buyer connections, market access, and end-to-end trade solutions."
    ],
    5 => [
        "title" => "How to Start International Vyapaar in Dubai – UAE",
        "description" => "Unlock the potential of Dubai as a global business hub, and learn the specific steps to establish your presence in the UAE’s thriving international trade market."
    ]
];

 



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
       <!-- <h1 class="text-xl">  <?php echo $international_vyapaar_topics[$id]['title']; ?></h1> -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
        <video id="mainVideo" class=" h-[500px]" controls>
          <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="p-4 highlight">
          <h2 class="text-2xl font-bold text-indigo-600 mb-2"><?php echo $international_vyapaar_topics[$id]['title']; ?></h2>
          <p class="text-gray-700">
          <?php echo $international_vyapaar_topics[$id]['description']; ?>
          </p>
        </div>
      </div>
 
<div class="bg-white shadow-lg rounded-lg p-6 highlight">
  <h2 class="text-xl font-bold text-indigo-600 mb-4">Meet the Coach</h2>
  <div class="flex items-center">
    <img class="w-16 h-16 rounded-full border-4 border-indigo-500 floating" src="./images/1724738738665.jpeg" alt="Coach Photo">
    <div class="ml-4">
      <p class="text-lg font-bold text-gray-900">Coach: Dr. Manav Ahuja</p>
      <p class="text-sm text-gray-500">Expert in Business Consulting & International Expansion</p>
    </div>
  </div>
  <p class="mt-4 text-gray-700">
    Dr. Manav Ahuja is the founder of TPEG International LLC, Dubai, guiding entrepreneurs across the UAE, GCC, and Asia.   
  </p>
  <p class="mt-4 text-indigo-600 font-bold">Key Highlights:</p>
  <ul class="list-disc ml-6 text-gray-700">
    <li>Founder of TPEG International LLC, Dubai, guiding entrepreneurs across the UAE, GCC, and Asia.</li>
    <li>25+ years of expertise in business consulting, offering strategic solutions for growth and global expansion.</li>
    <li>Mentored 100+ global entrepreneurs and trained over 10,000 candidates in sales, business, and international trade.</li>
    <li>Board member of leading universities, contributing to academia and business education.</li>
    <li>Honored with a Doctorate in Human Psychology for his contribution to leadership and mentoring.</li>
    <li>On a Mission: Empower 10,000 Indian brands to thrive internationally by connecting SMEs to global buyers.</li>
    <li>Regularly conducts seminars in international markets to raise awareness and support international business growth.</li>
  </ul>
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
