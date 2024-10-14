<?php include('headerFront.php'); ?>


<h1 class="text-center text-2xl font-bold my-4 "> यदि आपने भारत CSC हब पोर्टल पर नौकरी के लिए पंजीकरण किया है, तो हम आपका धन्यवाद करते हैं! <br/>🙏 कृपया अपना रिज़्यूमे हमारे आधिकारिक व्हाट्सएप नंबर 9454966752 पर भेजें।</h1>



<div class="flex flex-col lg:flex-row justify-center gap-6 p-4">
  <!-- Signup Form -->
  <div class="w-full max-w-md bg-white border border-gray-300 rounded-lg shadow-lg p-6">
    <form action="addJob" method="post" name="add">
      <h4 class="text-center text-red-600 font-bold text-lg mb-4">📝 Job Form</h4>
      
      <div class="mb-4">
        <label for="name" class="block font-semibold text-gray-700 mb-1">Candidate Name :</label>
        <input type="text" name="name" required class="w-full px-3 py-2 border rounded" id="name" placeholder="Enter name">
      </div>
      
      <div class="mb-4">
        <label for="email" class="block font-semibold text-gray-700 mb-1">Email :</label>
        <input type="email" name="email" required class="w-full px-3 py-2 border rounded" id="email" placeholder="Enter email">
      </div>

      <div class="mb-4">
        <label for="contact_number" class="block font-semibold text-gray-700 mb-1">Contact Number :</label>
        <input type="number" name="contact_number" required class="w-full px-3 py-2 border rounded" id="contact_number" placeholder="Enter contact number">
      </div>   

      <div class="mb-4">
        <label for="qualification" class="block font-semibold text-gray-700 mb-1">Qualification :</label>
        <input type="text" name="qualification" required class="w-full px-3 py-2 border rounded" id="qualification" placeholder="Enter qualification">
      </div>

      <div class="mb-4">
        <label for="exprience" class="block font-semibold text-gray-700 mb-1">Year of Exprience :</label>
        <input type="number" name="nexprience" required class="w-full px-3 py-2 border rounded" id="nexprience" placeholder="Enter Exprience">
      </div>


      <!-- <div class="mb-4">
        <label for="password" class="block font-semibold text-gray-700 mb-1">Password :</label>
        <input type="password" name="password" required class="w-full px-3 py-2 border rounded" id="password" placeholder="Enter password">
      </div> -->

      <!-- <div class="mb-4 flex items-center">
        <input type="checkbox" class="h-4 w-4 text-blue-600" id="remember">
        <label class="ml-2 font-semibold text-gray-700" for="remember">Remember</label>
      </div> -->

      <div class="mb-4">
        <label for="dpincode" class="block font-semibold text-gray-700 mb-1">District / Pincode :</label>
        <input type="text" name="dpincode" required class="w-full px-3 py-2 border rounded" id="dpincode" placeholder="Enter District or pincode">
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">📝 Signup</button>
      
      <!-- <div class="text-right mt-4">
        <a href="login.php" class="text-blue-600 hover:underline">🔐 Login</a>
      </div> -->
    </form>
  </div>

  <!-- Services Section -->
  <div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-lg border border-gray-300">
  
<ul class="list-none space-y-8 text-gray-900">
  
  <li class="pl-6">
    <p class="mb-6 text-xl">
      <span class="font-extrabold text-red-700 ml-12 underline">भारत CSC हब</span> में, हम आपको बेहतरीन व्यावसायिक सेवाएं और <span class="text-green-700 font-bold">रोज़गार के सुनहरे अवसर</span> प्रदान करते हैं। अगर आप एक नई नौकरी की तलाश कर रहे हैं या हमारी सेवाओं का लाभ उठाना चाहते हैं, तो हमारे <span class="font-extrabold text-blue-700">Other Services Form</span> के ज़रिए रजिस्ट्रेशन कर सकते हैं। <span class="text-indigo-600 font-bold">भारत CSC हब</span> के साथ जुड़कर अपने भविष्य की नई राहें खोलें!
    </p>
    <p class="text-xl leading-relaxed">
      <span class="font-extrabold text-green-700">रजिस्ट्रेशन</span> करने के बाद, आपको विभिन्न भर्ती के अवसर प्राप्त होंगे। साक्षात्कार <span class="font-semibold">चारबाग रेलवे स्टेशन</span>, लखनऊ से 15 किमी के भीतर आयोजित किया जाएगा, और नियुक्ति भी आपके स्थान से 15-20 किमी के भीतर होगी।
    </p>
    <p class="mt-6 font-bold text-indigo-600">– भारत CSC हब टीम<br/>Admin: Rishi Pal</p>
    <p class="mt-4 italic text-xl text-gray-700">पहले रजिस्ट्रेशन करें, फिर साक्षात्कार की जानकारी प्राप्त करें।</p>
  </li>

  <li class="pl-6">
    <p class="text-2xl font-bold text-blue-600">Dear Candidate,</p>
    <p class="mt-4 mb-6 text-lg">We are delighted to announce the opening of our new branches in Lucknow and nearby districts in UP. We have open positions for the following roles:</p>
    
    <ul class="list-disc ml-8 space-y-5 text-lg">
      <li><span class="font-extrabold text-purple-700">Business Development Officer (B.D.O)</span><br/>Qualification: Post Graduate<br/>Salary: ₹25,000 + Incentives + Bonuses</li>
      <li><span class="font-extrabold text-purple-700">Area Manager</span><br/>Qualification: Graduate<br/>Salary: ₹20,000 + Incentives + Bonuses</li>
      <li><span class="font-extrabold text-purple-700">Marketing Manager</span><br/>Qualification: 10+2<br/>Salary: ₹10,000 – ₹12,000 + Incentives + Bonuses</li>
      <li><span class="font-extrabold text-purple-700">Tally Caller</span><br/>Qualification: 10+2<br/>Salary: ₹10,000 + Incentives + Bonuses</li>
      <li><span class="font-extrabold text-purple-700">Supervisor</span><br/>Qualification: 10+2<br/>Salary: ₹15,000</li>
    </ul>

    <p class="mt-6 text-xl font-bold">Qualification Requirements for All Roles:</p>
    <ul class="list-disc ml-8 space-y-4 text-lg">
      <li>Post Graduate for specific roles</li>
      <li>Strong communication skills in Hindi and English</li>
      <li>Proficiency in written Hindi and English</li>
      <li>Leadership and motivational skills</li>
    </ul>

    <p class="mt-6 text-xl font-bold text-indigo-600">Interview Timings: 10:00 AM to 4:00 PM (Open to both Fresher and Experienced candidates)</p>
    
    <h2 class="mt-4 text-xl font-bold">Please carry the following documents:</h2>
    <ul class="list-disc ml-8 space-y-3 text-lg">
      <li>Updated CV</li>
      <li>Photocopies of High School, 10+2, Graduation & Other Certificates</li>
      <li>Address/ID Proof Xerox</li>
    </ul>
  </li>
</ul>

<div class="mt-10 p-6 bg-yellow-100 border-l-4 border-red-600 rounded-md shadow-md">
  <p class="text-lg font-bold text-gray-900 leading-relaxed">
    📞 <span class="text-red-600">Important Note:</span> No need to call. Our team will contact you within the next 2-3 hours ⏳<br/>
    👉 <span class="text-blue-600">Please use WhatsApp only</span> for quicker processing of your information.<br/>
    ✨ We wish you a bright future ahead!<br/>
    <span class="block mt-4 font-semibold">– भारत CSC हब टीम</span>
  </p>
 

</div>



  <div class="flex flex-col items-center justify-center  p-2">
                    <a href="index" class="text-white bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="text-2xl mr-2">👉</span> 
                    <span class="text-2xl">Bharat CSC Hub – Click Here 🖱️</span>
                    </a>
                </div>
  </li>
</ul>


  </div>
</div>

<!-- Contact Information -->
<div class="text-center p-4">
  <h1 class="text-xl font-bold mt-6">Amrish Digital CSC Center - 📞 7518869428 Don't just call, text me on WhatsApp too</h1>
  <!-- <h2 class="text-lg mt-2">📍 Address: 295/5, Deen Dayal Road, Asharfabad, Lucknow, Uttar Pradesh 226003</h2> -->

  <h3 class="mt-4 text-gray-700">
    अगर आप अपना यूजरनेम या पासवर्ड भूल गए हैं, तो चिंता मत करें! 😊<br>
    कृपया हमें तुरंत WhatsApp करें: 📱 
    <a href="https://wa.me/917518869428" target="_blank" class="text-blue-600 hover:underline">
      +91 7518869428 📞
    </a>  
    Don't just call, text me on WhatsApp too हम आपकी मदद के लिए यहाँ हैं! 🙌
  </h3>
</div>


</div>

<?php include('footer.php'); ?>