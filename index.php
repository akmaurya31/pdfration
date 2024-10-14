<?php include('headerFront.php'); ?>




<div class="flex flex-col items-center justify-center  gap-6 p-4">
  <div class="text-center">
    <h1 class="text-2xl font-bold my-4"> 🛒 Ration Card Print Portal </h1>

     
  </div>
</div>




<div class="flex flex-col lg:flex-row justify-center gap-6 p-4">
  <!-- Signup Form -->
  <div class="w-full max-w-md bg-white border border-gray-300 rounded-lg shadow-lg p-6">
    <form action="addNewUser" method="post" name="add">
      <h4 class="text-center text-red-600 font-bold text-lg mb-4">📝 Ration Card Print Portal Form</h4>
      
      <div class="mb-4">
        <label for="name" class="block font-semibold text-gray-700 mb-1">Name :</label>
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
        <label for="dpincode" class="block font-semibold text-gray-700 mb-1">District / Pincode :</label>
        <input type="text" name="dpincode" required class="w-full px-3 py-2 border rounded" id="dpincode" placeholder="Enter District or pincode">
      </div>

      <div class="mb-4">
        <label for="password" class="block font-semibold text-gray-700 mb-1">Password :</label>
        <input type="password" name="password" required class="w-full px-3 py-2 border rounded" id="password" placeholder="Enter password">
      </div>

      <div class="mb-4 flex items-center">
        <input type="checkbox" class="h-4 w-4 text-blue-600" id="remember">
        <label class="ml-2 font-semibold text-gray-700" for="remember">Remember</label>
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">📝 Signup</button>
      
      <div class="text-right mt-4">
        <a href="login.php" class="text-blue-600 hover:underline">🔐 Login</a>
      </div>
      <a href="job.php" target="_blank" class="flex flex-col text-blue-400 hover:text-blue-300 inline-flex items-center">
      <img src="./images/bharatjob.jpeg" class="rounded-xl mt-4 "   />
    </a>
    </form>
  </div>

  <!-- Services Section -->
  <div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-lg border border-gray-300">
    <h1 class="text-2xl font-bold text-gray-900 mb-4">🚀 भारत CSC Hub: 500+ सेवाएँ, एक ही मंच पर! :</h1>
    <!-- <ul class="list-disc pl-5 space-y-2 text-gray-700">
      <li><span class="text-xl">🏷️</span> राशन कार्ड प्रिंट पोर्टल</li>
      <li><span class="text-xl">🆔</span> आधार, पैन कार्ड, और वोटर कार्ड पीडीएफ मैन्युअल</li>
      <li><span class="text-xl">🛒</span> प्रोडक्ट्स की खरीद और बिक्री</li>
      <li><span class="text-xl">📊</span> GST रजिस्ट्रेशन</li>
      <li><span class="text-xl">📁</span> ITR फ़ाइल</li>
      <li><span class="text-xl">🧾</span> आयकर रिटर्न</li>
      <li><span class="text-xl">✍️</span> एफ़ीडेविट</li>
      <li><span class="text-xl">📝</span> रेंट एग्रीमेंट</li>
      <li><span class="text-xl">📑</span> ई-स्टांप</li>
      <li><span class="text-xl">🌐</span> Website Mobile App Development</li>
      <li><span class="text-xl">🌐</span> विवाह केंद्र (Marriage Bureau)</li>
      
    </ul> -->

    <ul class="list-none ml-4">
  <li>✔️ 🏦 बैंकिंग और वित्तीय सेवाएँ (Banking & Financial Services)</li>
  <li>✔️ 💻 डिजिटल सेवाएँ (Digital Services) <img src="./images/rrr1.jpeg" class="rounded-xl  w-[55%]" /></li>
  <li>✔️ 🎓 शिक्षा और ट्रेनिंग (Education & Training)</li>
  <li>✔️ 🏥 स्वास्थ्य सेवाएँ (Healthcare Services)</li>
  <li>✔️ 📞 टेलीकॉम सेवाएँ (Telecom Services)</li>
  <li>✔️ 💼 पेशेवर नौकरियाँ (Professional Jobs)</li>
  <li>✔️ 💡 व्यवसाय/बिज़नेस (Business/Entrepreneurship)</li>
  <li>✔️ 🏡 घरेलू काम (वर्क फ्रॉम होम/फ़्रीलांस) (Work from Home/Freelance)</li>
  <li>✔️ 🛠️ श्रमिक और कुशल कार्य (Labor & Skilled Workers)</li>
  <li>✔️ 🚚 परिवहन सेवाएँ (Transportation Services)</li>
  <li>✔️ 🎭 सामाजिक और मनोरंजन सेवाएँ (Social & Entertainment Services)</li>
  <li>✔️ 🔧 इलेक्ट्रॉनिक सामान से जुड़े काम (Electronics Repair & Services)</li>
  <li>✔️ ⚙️ मकैनिक (मैकेनिकल वर्कर्स) (Mechanical Workers)</li>
  <li>✔️ 🧹 सफाई कर्मचारी (Cleaning Workers)</li>
  <li>✔️ 🏗️ कंस्ट्रक्शन और बिल्डिंग वर्कर (Construction & Building Workers)</li>
  <li>✔️ 🛒 बिक्रेता (Retailers & Sellers)</li>
  <li>✔️ 🚰 प्लंबर (Plumbing Services)</li>
  <li>✔️ 🛋️ इंटीरियर डिजाइनिंग (Interior Designing)</li>
  <li>✔️ 🪑 ऑफिस फर्नीचर बनाने वाले (Furniture Makers)</li>
  <li>✔️ 👨‍🍳 खाना बनाने वाले (Cook/Chef)</li>
  <li>✔️ 🍽️ भोजनों की सेवाएँ देने वाले (Catering Services)</li>
  <li>✔️ 🎉 पार्टी और फंक्शन सजावट करने वाले (Party/Function Decoration Services)</li>
  <li>✔️ 🍬 हलवाई (Sweet Maker)</li>
  <li>
  <div class="flex flex-col items-center justify-center  p-2">
                    <a href="https://bharatcschub.online/formcsc" class="text-white bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे जुड़े</span>
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