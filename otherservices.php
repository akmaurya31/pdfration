<?php include('headerFront.php'); ?>



<style>
    /* Animation for border */
    .animate-border {
      position: relative;
      padding: 1rem;
      transition: all 0.5s ease;
    }

    .animate-border::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      border-radius: 1rem;
      border: 2px solid transparent;
      /* background: linear-gradient(45deg, #FF5733, #FFC300, #DAF7A6, #FF33FF); */
      background-size: 300%;
      z-index: -1;
      transition: all 0.5s ease;
      border:2px solid #555;
    }

    .animate-border:hover::before {
      background-position: 100% 0;
    }
  </style>
 

<div class="container m-auto p-4">
 









   <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 ">
      <!-- First Col -->


     




      <div class="flex w-full flex-col space-y-4   md:w-1/3  rounded-lg">


      <div class="max-w-4xl mx-auto py-8 px-4">
    <h1 class="text-2xl font-bold text-center mb-10 text-blue-900">🎉 भारत डिजिटल सीएससी हब पोर्टल सेवाएँ 🎉</h1>

    <!-- खाना बनाने वाले (Cook/Chef) -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-yellow-600 mb-4">👨‍🍳 1. खाना बनाने वाले (Cook/Chef)</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>🏡 घरेलू कुक (घर में खाना बनाने वाले)</li>
        <li>🍽️ प्रोफेशनल शेफ (रेस्टोरेंट और होटलों के लिए)</li>
        <li>🎉 प्राइवेट कुक (घर में या पार्टी के लिए बुक किया जाने वाला कुक)</li>
        <li>🍔 फास्ट फूड कुक (बर्गर, पिज्जा, चाइनीज, आदि)</li>
        <li>🍝 कॉन्टिनेंटल शेफ (इटालियन, मैक्सिकन, थाई फूड)</li>
        <li>🍛 इंडियन कुक (दाल, चावल, सब्जी, रोटी, आदि)</li>
        <li>🍲 साउथ इंडियन कुक (डोसा, इडली, वड़ा, आदि)</li>
        <li>🍰 बेकरी शेफ (केक, पेस्ट्री, कुकीज़)</li>
        <li>🍬 मीठाई बनाने वाले कुक (हलवाई)</li>
      </ul>
    </section>

    <!-- भोजनों की सेवाएँ देने वाले (Catering Services) -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-red-600 mb-4">🍴 2. भोजनों की सेवाएँ देने वाले (Catering Services)</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>💒 शादी/फंक्शन कैटरर</li>
        <li>💼 इवेंट कैटरिंग (कॉर्पोरेट इवेंट, सेमिनार, कॉन्फ्रेंस)</li>
        <li>🏞️ आउटडोर कैटरिंग</li>
        <li>🍽️ बुफे सर्विस प्रोवाइडर</li>
        <li>🎊 छोटे फंक्शन कैटरिंग</li>
        <li>🥡 थाली सर्विस (दैनिक भोजन पैकेज)</li>
        <li>🥩 वेज और नॉन-वेज कैटरिंग</li>
      </ul>
    </section>

    <!-- पार्टी और फंक्शन सजावट करने वाले (Decoration Services) -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-green-600 mb-4">🎈 3. पार्टी और फंक्शन सजावट (Decoration Services)</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>💐 फूलों से सजावट (Floral Decorator)</li>
        <li>🎵 लाइट और साउंड डेकोरेशन (DJ सेटअप, पार्टी लाइट्स)</li>
        <li>🎤 स्टेज और बैकड्रॉप डेकोरेशन</li>
        <li>🎉 बलून और थीम डेकोरेशन</li>
        <li>🍽️ टेबल सेटअप और डाइनिंग डेकोरेशन</li>
        <li>📸 प्रॉप्स और फोटोग्राफी बैकड्रॉप्स</li>
        <li>🎶 मेहंदी और संगीत सजावट</li>
      </ul>
    </section>

    <!-- हलवाई (Sweet Maker) -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-purple-600 mb-4">🍭 4. हलवाई (Sweet Maker)</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>🍨 हलवाई (मिठाई और नाश्ता बनाने वाले)</li>
        <li>🌿 व्रत का खाना बनाने वाले हलवाई</li>
        <li>🍯 शादी और अन्य अवसरों पर मिठाई बनाने वाले</li>
        <li>🍡 बड़े आयोजनों के लिए हलवाई</li>
        <li>🥟 वेज स्नैक्स बनाने वाले हलवाई</li>
        <li>🍇 फ्रूट कटर और सर्विस प्रोवाइडर</li>
      </ul>
    </section>

    <!-- अन्य संबंधित सेवाएँ -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-pink-600 mb-4">🥂 5. अन्य संबंधित सेवाएँ</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>🍸 बारटेंडर/ड्रिंक सर्विस प्रोवाइडर</li>
        <li>🍽️ वेटर और सर्विस स्टाफ</li>
        <li>🍳 किचन इक्विपमेंट और कुकिंग स्टाफ</li>
      </ul>
    </section>
  </div>


      
         <div class="rounded-lg bg-red-500">
            <div class="bg-red-100 text-red-800 p-4 rounded-md shadow-md  mx-auto items-center justify-center">
               <h2 class="text-2xl font-bold mb-2">
                  🚫 आधार UCL Bypass ID के बारे में सावधान रहें! 🚫
               </h2>
               <p class="mb-4">
                  आधार UCL Bypass ID एक ऐसी आईडी है जो अज्ञात व्यक्तियों द्वारा डिज़ाइन की जाती है और इसका उपयोग करके आप किसी भी व्यक्ति का बायोमैट्रिक अपडेट नहीं कर सकते। इसके माध्यम से केवल वही काम किया जा सकता है जो गलत तरीके से आधार ऑपरेटर करते हैं, और यह भी 100% सही नहीं होता। इससे आपका समय और पैसा दोनों बर्बाद हो सकते हैं। ⏳💸
               </p>
               <p class="mb-4">
                  आधार UCL Bypass ID के जरिए किसी भी व्यक्ति का नंबर लिंक करने की कोशिश की जाती है, चाहे वह ग्राहक हो या नहीं। ये ऑपरेटर वेबसाइट डेवलपर के साथ मिलकर ये काम करते हैं। कुछ आधार ऑपरेटर बच्चों के आधार भी बनाते हैं, जिनकी उम्र 5 साल से कम होती है, और जन्मतिथि, नाम, पता इत्यादि को सही किए बिना ही आधार UCL पोर्टल के माध्यम से काम करते हैं। 👶📝
               </p>
               <p>
                  कुछ मामलों में यह तरीका सफल हो सकता है, लेकिन कई बार इसमें विफलता भी देखने को मिलती है। इसलिए, आधार UCL पोर्टल का उपयोग करने का कोई विशेष लाभ नहीं लगता है। आपके लिए सबसे अच्छा रहेगा कि आप सीधे किसी आधार कार्यालय या पोस्ट ऑफिस में जाकर अपनी सेवाएँ प्राप्त करें। 🌟📩
               </p>

               <div class="flex flex-col items-center justify-center  p-2">
                    <a href="https://bharatcschub.online/formcsc" class="text-white bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे जुड़े</span>
                    </a>
                </div>


            </div>
                 
         </div>
         <div class=" rounded-lg ">
            <div class="bg-gray-100 max-w-md mx-auto my-4 p-4 rounded-lg shadow-lg">
               <div class="bg-white p-4 rounded-lg shadow-sm">
                  <h2 class="text-lg font-semibold text-gray-800 mb-4">
                     आधार कार्ड के जरिए हमारी सेवाएं 💡
                  </h2>
                  <p class="text-gray-700 mb-4">
                     📊 आधार नंबर से आपको पैन नंबर मिल जाएगा! <br>
                     📝 आधार कार्ड नंबर से आपको राशन कार्ड नंबर मिल जाएगा! <br>
                     📄 और आधार कार्ड नंबर से आपको राशन कार्ड पीडीएफ भी मिल जाएगी! <br>
                     बस आधार कार्ड नंबर दर्ज करें और सभी जानकारी प्राप्त करें! 👍
                  </p>
                  <div class="bg-gray-200 p-4 rounded-lg">
                     <h4 class="text-lg font-semibold text-gray-800 mb-2">संपर्क करें:</h4>
                     <p class="text-gray-700 mb-2">📞 <strong>7518869428</strong> Don't just call, text me on WhatsApp too</p>
                     <h4 class="text-lg font-semibold text-gray-800 mb-2">हमारी वेबसाइट:</h4>
                     <p class="text-gray-700 mb-2"><a href="https://bharatcschub.online/formcsc" class="text-blue-600 hover:underline">Bharatcschub.online</a></p>
                     <h4 class="text-lg font-semibold text-gray-800 mb-2">पता:</h4>
                     <p class="text-gray-700">Amrish Digital Center, 295/5 Balda Shahgnaj Chowk, Lucknow</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="  rounded-lg bg-red-500">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
               <p class="font-bold">चाइल्ड एनरोलमेंट में समस्या! 🚨</p>
               <p class="text-gray-700 mt-2">सभी डेटा रिजेक्ट हो रहे हैं! अगर आधार कार्ड इस तरह से बनते हैं, तो समस्याएं उत्पन्न होना स्वाभाविक है। नकली दस्तावेज़ों की वजह से यह समस्या और गंभीर हो जाती है।</p>
               <p class="text-gray-700 mt-2">अगर आधार कार्ड इस तरह से बनते हैं, तो समस्या तो होगी ही! नकली दस्तावेज डॉक्यूमेंट की वजह से यह समस्या आ रही है।</p>
               <p class="font-semibold mt-2">कृपया ध्यान दें और समस्या का समाधान करें। 👍</p>

             <p class="text-black mt-2 text-center">  आप इस आधार कार्ड नंबर को चेक करना चाहते हैं, उसे केवल UIDAI की आधिकारिक वेबसाइट (https://uidai.gov.in) पर ही जांचा जा सकता है।  </p>

               <div class="flex flex-col items-center justify-center border shadow rounded-xl p-4">
                <img src="./images/adhar1.png" alt="Aadhaar Card" class="border shadow rounded-xl" width="325px" />
                <span class="text-black mt-2 text-center">आधार संख्या 438781703039 को आधार (नामांकन और अपडेट) विनियम, 2016 के विनियमन 27 के तहत रद्द कर दिया गया है।</span>
                </div>

                <div class="flex flex-col items-center justify-center  p-2">
                    <a href="https://bharatcschub.online/formcsc" class="text-white bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे जुड़े</span>
                    </a>
                </div>

            </div>
         </div>

         <div class=" rounded-lg bg-red-500">

         <div class="p-6 bg-gray-100">
  <!-- Digital Services -->
  <h2 class="text-xl font-bold">💻 डिजिटल सेवाएँ</h2>
  <ul class="list-disc list-inside ml-4">
    <li>📜 आधार सेवाएँ: आधार कार्ड जनरेशन, अपडेट और वेरिफिकेशन</li>
    <li>💳 पैन कार्ड सेवाएँ: पैन कार्ड आवेदन, अपडेट और वेरिफिकेशन</li>
    <li>💸 डिजिटल पेमेंट्स: UPI, भारत QR कोड, डेबिट/क्रेडिट कार्ड, नेट बैंकिंग</li>
    <li>📂 ई-गवर्नेंस सेवाएँ: डिजीलॉकर, ई-डिस्ट्रिक्ट पोर्टल, सीएससी पोर्टल</li>
    <li>📊 GST सेवाएँ: GST रजिस्ट्रेशन, GST फाइलिंग</li>
    <li>💻 आईटी सेवाएँ: वेबसाइट डेवेलपमेंट, सॉफ्टवेयर डेवलपमेंट, क्लाउड कंप्यूटिंग</li>
    <li>🏦 बैंकिंग सेवाएँ: डिजिटल बैंकिंग, मोबाइल बैंकिंग, इंटरनेट बैंकिंग</li>
    <li>🎓 ऑनलाइन ट्रेनिंग और शिक्षा: SWAYAM, NPTEL, Unacademy, Coursera, Byju's</li>
    <li>🛒 ई-कॉमर्स सेवाएँ: Amazon, Flipkart, Paytm Mall</li>
    <li>📡 टेलीकॉम सेवाएँ: 4G/5G नेटवर्क, ब्रॉडबैंड सेवाएँ</li>
  </ul>

  <!-- Government Services -->
  <h2 class="text-xl font-bold mt-6">🏛️ सरकारी सेवाएँ</h2>
  <ul class="list-disc list-inside ml-4">
    <li>📱 उमंग ऐप: सभी सरकारी सेवाएँ एक ही प्लेटफार्म पर</li>
    <li>💼 प्रधानमंत्री जन-धन योजना: बैंकिंग सेवाओं तक पहुँच</li>
    <li>👴 सामाजिक सुरक्षा योजनाएँ: अटल पेंशन योजना, जीवन ज्योति बीमा योजना</li>
    <li>📈 डिजिटल इंडिया मिशन: डिजिटलीकरण के लिए प्रयास</li>
    <li>🏦 राष्ट्रीय पेंशन योजना (NPS): पेंशन योजनाओं के लिए</li>
  </ul>

  <!-- Health & Wellness -->
  <h2 class="text-xl font-bold mt-6">💉 स्वास्थ्य और कल्याण सेवाएँ</h2>
  <ul class="list-disc list-inside ml-4">
    <li>🏥 आयुष्मान भारत योजना: स्वास्थ्य बीमा योजना</li>
    <li>👨‍⚕️ ई-संजीवनी: टेलीमेडिसिन सेवाएँ</li>
    <li>💉 कोविन पोर्टल: टीकाकरण रजिस्ट्रेशन और प्रमाणपत्र</li>
  </ul>

  <!-- Financial Services -->
  <h2 class="text-xl font-bold mt-6">💰 वित्तीय सेवाएँ</h2>
  <ul class="list-disc list-inside ml-4">
    <li>💵 डिजिटल लेंडिंग: Paytm, PhonePe, Google Pay से लोन सेवाएँ</li>
    <li>🛡️ इंश्योरेंस सेवाएँ: LIC, ICICI Prudential, HDFC Life</li>
    <li>📈 म्यूचुअल फंड्स और स्टॉक्स: Zerodha, Groww, Upstox</li>
  </ul>

  <!-- Transport Services -->
  <h2 class="text-xl font-bold mt-6">🚗 परिवहन सेवाएँ</h2>
  <ul class="list-disc list-inside ml-4">
    <li>🔋 ई-वाहन सेवाएँ: Ola Electric, Ather Energy</li>
    <li>🚖 ऑनलाइन ट्रांसपोर्ट बुकिंग: Uber, Ola</li>
    <li>🚆 परिवहन और यात्रा: IRCTC, MakeMyTrip, Yatra.com</li>
  </ul>

  <!-- Social & Entertainment Services -->
  <h2 class="text-xl font-bold mt-6">🎭 सामाजिक और मनोरंजन सेवाएँ</h2>
  <ul class="list-disc list-inside ml-4">
    <li>💬 सोशल मीडिया: Facebook, Twitter, Instagram, Koo</li>
    <li>📺 मनोरंजन प्लेटफॉर्म: Netflix, Amazon Prime Video, Hotstar</li>
    <li>🎮 गेमिंग सेवाएँ: MPL, Dream11, Paytm First Games</li>
  </ul>
</div>



<div class="p-6 ">
  <h1 class="text-2xl font-bold mb-4 text-center">Franchise Opportunities in India</h1>
  
  <div class="space-y-4">
    <!-- Telecommunications Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">📞 Telecommunications (Door-Sanchar) Udhyog Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>रिलायंस जियो (Reliance Jio)</strong>: Jio store ya service center ke liye franchise milti hai.</li>
        <li>🔹 <strong>भारती एयरटेल (Airtel)</strong>: मोबाइल और ब्रॉडबैंड सेवाओं के लिए फ्रेंचाइज़ी विकल्प प्रदान करता है। </li>
        <li>🔹 <strong>वोडाफोन आइडिया (Vodafone Idea)</strong>: मोबाइल नेटवर्क और इंटरनेट सेवाओं के लिए डीलरशिप।</li>
      </ul>
    </div>

    <!-- Energy Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">⚡ Energy (Urja) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>इंडियन ऑयल कॉर्पोरेशन (IOC)</strong>: पेट्रोल पंप और गैस एजेंसी के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>अदानी पावर (Adani Power)</strong>: CNG और गैस स्टेशनों के लिए डीलरशिप।</li>
        <li>🔹 <strong>टाटा पावर सोलर (Tata Power Solar)</strong>: सोलर एनर्जी उत्पादों के लिए डीलरशिप।</li>
      </ul>
    </div>

    <!-- Consumer Goods Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">🛒 Consumer Goods (Upbhokta Saman) Udhyog Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>हिंदुस्तान यूनिलीवर (Hindustan Unilever)</strong>: उपभोक्ता उत्पादों के लिए डीलरशिप।</li>
        <li>🔹 <strong>आईटीसी लिमिटेड (ITC Limited)</strong>: FMCG उत्पादों के लिए डीलरशिप।</li>
        <li>🔹 <strong>डाबर (Dabur)</strong>: हर्बल उत्पादों के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Chemical Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">🧪 Chemical (Rasayan) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>रिलायंस इंडस्ट्रीज (Reliance Industries)</strong>: पेट्रोकेमिकल्स के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>पिडिलाइट इंडस्ट्रीज (Pidilite Industries)</strong>: चिपकाने वाले उत्पादों के लिए डीलरशिप।</li>
        <li>🔹 <strong>टाटा केमिकल्स (Tata Chemicals)</strong>: औद्योगिक केमिकल उत्पादों के लिए डीलरशिप।</li>
      </ul>
    </div>

    <!-- Textile Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">👗 Textile (Vastra) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>अरविंद लिमिटेड (Arvind Limited)</strong>: कपड़ों के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>रेमंड (Raymond)</strong>: वस्त्र उत्पादों के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>वर्धमान टेक्सटाइल्स (Vardhman Textiles)</strong>: कपड़े और धागे के लिए डीलरशिप।</li>
      </ul>
    </div>

    <!-- IT Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">💻 IT (Soochna Praudyogiki) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>टाटा कंसल्टेंसी सर्विसेज (TCS)</strong>: सॉफ्टवेयर और IT समाधान सेवाओं के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>इन्फोसिस (Infosys)</strong>: विभिन्न IT समाधान में साझेदारी।</li>
        <li>🔹 <strong>विप्रो (Wipro)</strong>: IT और डिजिटल सेवाओं के लिए साझेदारी।</li>
      </ul>
    </div>

    <!-- Pharmaceutical Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">💊 Pharmaceutical (Aushadhi) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>सन फार्मा (Sun Pharma)</strong>: औषधीय उत्पादों के लिए डीलरशिप।</li>
        <li>🔹 <strong>सिप्ला (Cipla)</strong>: दवाओं के लिए डीलरशिप।</li>
        <li>🔹 <strong>डॉ. रेड्डीज लैब (Dr. Reddy's Lab)</strong>: फार्मास्यूटिकल डीलरशिप।</li>
      </ul>
    </div>

    <!-- Steel Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">🛠️ Steel (Ispat) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>टाटा स्टील (Tata Steel)</strong>: स्टील उत्पादों के लिए डीलरशिप।</li>
        <li>🔹 <strong>जेएसडब्ल्यू स्टील (JSW Steel)</strong>: स्टील उत्पादों के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>जिंदल स्टील (Jindal Steel)</strong>: स्टील के लिए डीलरशिप।</li>
      </ul>
    </div>

    <!-- Automobile Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">🚗 Automobile (Vaahan) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>मारुति सुजुकी (Maruti Suzuki)</strong>: डीलरशिप और सर्विस सेंटर फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>हीरो मोटोकॉर्प (Hero MotoCorp)</strong>: टू-व्हीलर वाहनों के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>महिंद्रा एंड महिंद्रा (Mahindra & Mahindra)</strong>: चार-पहिया वाहनों के लिए डीलरशिप।</li>
      </ul>
    </div>

    <!-- Hotel Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">🏨 Hotel Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>OYO Rooms</strong>: होटल व्यवसाय के लिए फ्रेंचाइज़ी विकल्प।</li>
        <li>🔹 <strong>Taj Hotels</strong>: लग्जरी होटल श्रृंखला के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Treebo Hotels</strong>: बजट होटल्स पर केंद्रित फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Car/Bike Tracker Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">🛰️ Car/Bike Tracker Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>MapmyIndia</strong>: वाहन ट्रैकिंग के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Autocop</strong>: सुरक्षा और ट्रैकिंग सिस्टम के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>TrackMyCar</strong>: GPS ट्रैकिंग सिस्टम के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Education Industry Franchise -->
    <div class="p-4 bg-white rounded-lg shadow">
      <h2 class="text-xl font-semibold">📚 Education (Shiksha) Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>K12 Techno Services</strong>: ऑनलाइन और ऑफलाइन शिक्षा के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>NIIT</strong>: विभिन्न तकनीकी पाठ्यक्रमों के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>BYJU'S</strong>: ऑनलाइन शिक्षण कार्यक्रमों के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>
  </div>
</div>




         </div>


      </div>
      <!-- Sec Col -->
      <div class="flex w-full flex-col space-y-4   md:w-1/3">



      

      <div class="max-w-4xl mx-auto py-8 px-4">
    <h1 class="text-4xl font-bold text-center mb-10 text-blue-900">🎉 सेवाएँ 🎉</h1>

    <!-- Banking and Financial Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-green-600 mb-4">🏦 बैंकिंग और वित्तीय सेवाएँ</h2>
    </section>

    <!-- Digital Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-red-600 mb-4">💻 डिजिटल सेवाएँ</h2>
    </section>

    <!-- Education and Training -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-purple-600 mb-4">🎓 शिक्षा और ट्रेनिंग</h2>
    </section>

    <!-- Health Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-orange-600 mb-4">🏥 स्वास्थ्य सेवाएँ</h2>

      <img src="./images/baharatcschub2.jpeg" class="rounded-xl " />
    </section>




    <!-- Telecom Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-blue-600 mb-4">📞 टेलीकॉम सेवाएँ</h2>
    </section>

    <!-- Professional Jobs -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-yellow-600 mb-4">💼 पेशेवर नौकरियाँ</h2>
    </section>

    <!-- Business -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-teal-600 mb-4">🏢 व्यवसाय/बिज़नेस</h2>
    </section>

    <!-- Work from Home/Freelance -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-pink-600 mb-4">🏡 घरेलू काम (वर्क फ्रॉम होम/फ़्रीलांस)</h2>
    </section>

    <!-- Skilled Labor -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-gray-600 mb-4">👷 श्रमिक और कुशल कार्य</h2>
    </section>

    <!-- Transport Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-indigo-600 mb-4">🚗 परिवहन सेवाएँ</h2>
    </section>

    <!-- Social and Entertainment Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-orange-700 mb-4">🎉 सामाजिक और मनोरंजन सेवाएँ</h2>
    </section>

    <!-- Electronics Related Jobs -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-red-700 mb-4">🔌 इलेक्ट्रॉनिक सामान से जुड़े काम</h2>
    </section>

    <!-- Mechanics -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-green-700 mb-4">🔧 मकैनिक (मैकेनिकल वर्कर्स)</h2>
    </section>

    <!-- Cleaning Workers -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-blue-700 mb-4">🧹 सफाई कर्मचारी (Cleaning Workers)</h2>
    </section>

    <!-- Construction Workers -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-purple-700 mb-4">🏗️ कंस्ट्रक्शन और बिल्डिंग वर्कर</h2>
      <img src="./images/baharatcschub1.jpeg" class="rounded-xl " />
    </section>

    <!-- Retailers and Sellers -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-pink-700 mb-4">🛒 बिक्रेता (Retailers and Sellers)</h2>
    </section>

    <!-- Plumbing Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-orange-800 mb-4">🚰 प्लंबर (Plumbing Services)</h2>
    </section>

    <!-- Interior Designing -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-teal-800 mb-4">🛋️ इंटीरियर डिजाइनिंग (Interior Designing)</h2>
    </section>

    <!-- Furniture Makers -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">🪑 ऑफिस फर्नीचर बनाने वाले (Furniture Makers)</h2>
    </section>

    <!-- Cooks/Chefs -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-red-600 mb-4">👨‍🍳 खाना बनाने वाले (Cook/Chef)</h2>
    </section>

    <!-- Catering Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-yellow-600 mb-4">🍽️ भोजनों की सेवाएँ देने वाले (Catering Services)</h2>
    </section>

    <!-- Decoration Services -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-green-600 mb-4">🎉 पार्टी और फंक्शन सजावट करने वाले (Decoration Services for Party/Function)</h2>
    </section>

    <!-- Sweet Maker -->
    <section class="animate-border bg-white shadow-lg rounded-lg p-6 mb-8 hover:shadow-xl transform hover:scale-105 transition duration-500">
      <h2 class="text-2xl font-semibold text-purple-600 mb-4">🍬 हलवाई (Sweet Maker)</h2>

      <img src="./images/baharatcschub.jpeg" class="rounded-xl " />
    </section>

  </div>




         <div class="rounded-lg ">
            <div class="bg-gray-100   mx-auto  rounded-lg shadow-lg">
               <div class="bg-white p-4 rounded-lg shadow-sm">
                  <div class="flex items-center mb-4">
                     <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 14H9v-2h6v2zm0-4H9V7h6v6z"></path>
                     </svg>
                     <h2 class="text-xl font-semibold text-gray-800">📢 नमस्ते!</h2>
                  </div>
                  <p class="text-gray-700 mb-4">
                     हमारी सेवाओं के बारे में जानकारी देने के लिए हम यहाँ हैं। यदि आपके पास किसी भी तरह का स्कैन डॉक्यूमेंट जैसे कि आधार कार्ड, पैन कार्ड, वोटर कार्ड, या कोई भी अन्य दस्तावेज़ (जैसे मार्कशीट, बिजली का बिल आदि) है, तो हम आपकी मदद कर सकते हैं।
                  </p>
                  <div class="bg-blue-100 p-3 rounded-lg mb-4">
                     <h3 class="text-lg font-semibold text-blue-700">🔹 हमारी सेवाएँ:</h3>
                     <ul class="list-disc pl-5 text-gray-700">
                        <li>आधार कार्ड, पैन कार्ड, और वोटर कार्ड की मैन्युअल प्रिंटिंग: आपके पास मौजूद स्कैन या फोटो के आधार पर हम आपके दस्तावेज़ को डिज़ाइन करके प्रिंट आउट प्रदान कर सकते हैं।</li>
                        <li>सही और सटीक दस्तावेज़: बिना OTP के भी हम आपके दस्तावेज़ की PDF तैयार करके दे सकते हैं।</li>
                        <li>लागत: ₹50/- से ₹100/- में आपके दस्तावेज़ की PDF हमारी वेबसाइट पर उपलब्ध हो जाएगी।</li>
                     </ul>
                  </div>
                  <h3 class="text-lg font-semibold text-gray-800 mb-2">कैसे प्राप्त करें:</h3>
                  <ul class="list-disc pl-5 text-gray-700 mb-4">
                     <li>स्कैन या फोटो के माध्यम से अपने दस्तावेज़ हमें भेजें।</li>
                     <li>हमारे ऑपरेटर आपके दस्तावेज़ की जांच करेंगे और सही PDF तैयार करेंगे。</li>
                  </ul>
                  <p class="text-gray-700 mb-4">
                     💬 आवश्यकता हो तो हमें संपर्क करें: हमारी सेवाओं का लाभ उठाने के लिए संपर्क करें और हम आपकी मदद के लिए यहाँ हैं।
                  </p>
                  <p class="text-gray-800 font-semibold">धन्यवाद! 😊</p>

                <div class="flex flex-col items-center justify-center  p-2">
                    <a href="https://bharatcschub.online/formcsc" class="text-white bg-green-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे जुड़े</span>
                    </a>
                </div>

               </div>
            </div>
         </div>
         <div class=" rounded-lg bg-blue-500">
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-900 px-6 py-4 rounded-lg shadow-md">
               <p class="text-xl font-bold mb-2">हम आपके सभी खास मौकों को यादगार बनाने के लिए प्रोफेशनल फोटोग्राफी और वीडियोग्राफी सेवाएं प्रदान करते हैं। 🎉</p>
               <p class="text-gray-800">चाहे वह बर्थडे पार्टी 🎂 हो, किसी फंक्शन 🎊 की शूटिंग हो, या शादी 👫 की खास यादों को कैद करना हो, हमारी टीम आपके हर पल को खूबसूरती से कैद करेगी।</p>
            </div>
         </div>
         <div class="  rounded-lg bg-blue-500"><div class="container mx-auto px-4 py-6">
  <!-- Professional Jobs -->
  <div class="bg-blue-50 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold text-blue-900 mb-4">1. पेशेवर नौकरियाँ 👩‍⚕️👨‍💻</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>डॉक्टर (General Practitioner, Specialist, Surgeon) 🩺</li>
      <li>इंजीनियर (सिविल, मैकेनिकल, इलेक्ट्रिकल, सॉफ्टवेयर इंजीनियर) 👷‍♂️</li>
      <li>अध्यापक/शिक्षक (स्कूल, कॉलेज, कोचिंग सेंटर) 📚</li>
      <li>वकील (एडवोकेट, लीगल एडवाइजर) ⚖️</li>
      <li>चार्टर्ड अकाउंटेंट (CA) 💼</li>
      <li>सॉफ्टवेयर डेवलपर (Web Developer, App Developer) 💻</li>
      <li>डिजाइनर (Graphic Designer, Fashion Designer) 🎨</li>
      <li>पत्रकार/रिपोर्टर (Print, Digital, TV Media) 📰</li>
      <li>मार्केटिंग प्रोफेशनल (Digital Marketing, Sales Manager) 📊</li>
      <li>फार्मासिस्ट (Medical Store, Hospital Pharmacist) 💊</li>
      <li>बैंक कर्मचारी (Clerk, Manager, Loan Officer) 🏦</li>
      <li>डाटा एनालिस्ट/साइंटिस्ट (Data Analyst, Data Scientist) 📈</li>
    </ul>
  </div>

  <!-- Business -->
  <div class="bg-green-50 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold text-green-900 mb-4">2. व्यवसाय/बिज़नेस 🏪</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>दुकानदार (General Store, किराना दुकान) 🛒</li>
      <li>रेस्टोरेंट/ढाबा (Food Business, Catering) 🍽️</li>
      <li>कपड़े का व्यापार (Garment Shop, Wholesale) 👗</li>
      <li>इलेक्ट्रॉनिक्स/मोबाइल दुकान (Mobile, Laptop, Electronics Sales) 📱</li>
      <li>ऑटोमोबाइल वर्कशॉप (Car/Bike Repair Shop) 🚗</li>
      <li>रियल एस्टेट एजेंट (Property Dealer) 🏘️</li>
      <li>ऑनलाइन ई-कॉमर्स बिज़नेस (Amazon, Flipkart, Meesho) 🛍️</li>
      <li>ट्रांसपोर्ट/लॉजिस्टिक्स (Goods Transport, Courier Service) 🚚</li>
      <li>ब्यूटी पार्लर/सैलून (Hairdresser, Beautician) 💇‍♀️</li>
    </ul>
  </div>

  <!-- Work from Home/Freelancing -->
  <div class="bg-yellow-50 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold text-yellow-900 mb-4">3. घरेलू काम (वर्क फ्रॉम होम/फ़्रीलांस) 🏡</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>घरेलू सहायिका (Housemaid, Cook, Nanny) 👩‍🍳</li>
      <li>बुनाई और सिलाई (Tailoring, Embroidery Work) 🧵</li>
      <li>ऑनलाइन ट्यूशन (Home Tutor, Online Classes) 🎓</li>
      <li>फ्रीलांस राइटिंग (Content Writer, Blogger) ✍️</li>
      <li>कला और शिल्प (Handicraft, DIY Products) 🖌️</li>
      <li>ऑनलाइन डाटा एंट्री (Data Entry Jobs) 💻</li>
      <li>होम बेकिंग (Cake Business, Bakery Items) 🍰</li>
    </ul>
  </div>

  <!-- Labor and Skilled Work -->
  <div class="bg-red-50 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold text-red-900 mb-4">4. श्रमिक और कुशल कार्य 🛠️</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>मज़दूर (Construction Worker, Daily Wage Laborer) 👷‍♂️</li>
      <li>प्लम्बर (Plumber) 🚰</li>
      <li>इलेक्ट्रीशियन (Electrician) 💡</li>
      <li>कारपेंटर/बढ़ई (Furniture Maker, Carpenter) 🪚</li>
      <li>ड्राइवर (Car, Truck, Taxi, Auto Driver) 🚖</li>
      <li>मिस्त्री (Mechanic - Bike/Car Repair) 🛠️</li>
      <li>वेल्डर (Welder) 🔧</li>
      <li>पेंटर (House Painter, Artist) 🎨</li>
    </ul>
  </div>

  <!-- Other Services -->
  <div class="bg-purple-50 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold text-purple-900 mb-4">5. अन्य कार्य और सेवाएँ 🌾</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>किसान (Agriculture, Farming) 🌾</li>
      <li>दूध सप्लायर (Milkman, Dairy Business) 🥛</li>
      <li>आंगनवाड़ी कार्यकर्ता (Anganwadi Worker) 👩‍👧</li>
      <li>सेक्योरिटी गार्ड (Security Services) 🚨</li>
      <li>डिलीवरी बॉय (Food Delivery, Parcel Delivery - Swiggy, Zomato, Amazon) 📦</li>
      <li>स्वास्थ्य सेवाएँ (Nurse, Health Worker) 🩺</li>
      <li>योग प्रशिक्षक (Yoga Instructor) 🧘‍♂️</li>
      <li>ट्रैवल एजेंट (Tour Guide, Travel Planner) 🛩️</li>
      <li>क्लीनर/सफाईकर्मी (Housekeeping, Cleaner) 🧹</li>
    </ul>
  </div>
</div>
</div>
      </div>
      <!-- Third Col -->
      <div class="flex w-full flex-col space-y-4  md:w-1/3">



      <div class="p-4 ">
  <h1 class="text-3xl font-bold text-center mb-6">🎉Franchise Opportunities in India</h1>
  
  <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">
    <!-- Retail Franchise -->
    <div class="p-6 bg-red-300 rounded-lg border-2 border-red-400 shadow-lg">
      <h2 class="text-xl font-semibold">🛍️ Retail (Vikray) Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>डोमिनोज़ पिज़्ज़ा</strong>: भारत में डोमिनोज़ पिज़्ज़ा के फूड आउटलेट्स के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>सबरवे</strong>: सबरवे के सैंडविच रेस्टोरेंट के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Baskin Robbins</strong>: बास्किन रॉबिंस के आइसक्रीम पार्लर के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Reebok</strong>: रीबॉक के स्पोर्ट्सवियर और फुटवियर के लिए रिटेल फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Education Franchise -->
    <div class="p-6 bg-blue-300 rounded-lg border-2 border-blue-400 shadow-lg">
      <h2 class="text-xl font-semibold">📚 Education (Shiksha) Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>किडजी</strong>: Kidzee प्रीस्कूल फ्रेंचाइज़ी का मौका।</li>
        <li>🔹 <strong>आकाश एजुकेशनल सर्विसेज</strong>: मेडिकल और इंजीनियरिंग कोचिंग के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>फ्रैंकलिन इंस्टीट्यूट</strong>: अंग्रेजी और पर्सनालिटी डेवलपमेंट के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Health & Wellness Franchise -->
    <div class="p-6 bg-green-300 rounded-lg border-2 border-green-400 shadow-lg">
      <h2 class="text-xl font-semibold">💪 Health & Wellness (Swasthya Aur Vellness) Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>पतंजलि आयुर्वेद</strong>: आयुर्वेदिक उत्पादों के लिए डीलरशिप और फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>डॉ. बत्रा</strong>: होम्योपैथिक क्लीनिक के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>VLCC</strong>: वजन घटाने और सौंदर्य सेवाओं के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- E-commerce & Logistics Franchise -->
    <div class="p-6 bg-yellow-300 rounded-lg border-2 border-yellow-400 shadow-lg">
      <h2 class="text-xl font-semibold">📦 E-commerce & Logistics Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>अमेज़न ईजी स्टोर</strong>: छोटे शहरों में "अमेज़न ईजी" स्टोर्स के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>DTDC Courier</strong>: कूरियर सेवा के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Delhivery</strong>: लॉजिस्टिक्स फ्रेंचाइज़ी के माध्यम से शिपिंग सेवाएँ।</li>
      </ul>
    </div>

    <!-- Beauty & Salon Franchise -->
    <div class="p-6 bg-purple-300 rounded-lg border-2 border-purple-400 shadow-lg">
      <h2 class="text-xl font-semibold">💄 Beauty & Salon Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>लक्ष्मी रतन ग्रुप</strong>: Lakme सैलून के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Naturals Salon</strong>: ब्यूटी सेवाओं का व्यापारिक अवसर।</li>
        <li>🔹 <strong>Jawed Habib</strong>: हेयर और ब्यूटी सैलून के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Fitness Industry Franchise -->
    <div class="p-6 bg-teal-300 rounded-lg border-2 border-teal-400 shadow-lg">
      <h2 class="text-xl font-semibold">🏋️ Fitness Industry Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>Gold’s Gym</strong>: इंटरनेशनल जिम के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Talwalkars Gym</strong>: फिटनेस चेन के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Cult.Fit</strong>: फिटनेस स्टूडियो और वेलनेस सेवाओं के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Clothing & Fashion Franchise -->
    <div class="p-6 bg-pink-300 rounded-lg border-2 border-pink-400 shadow-lg">
      <h2 class="text-xl font-semibold">👗 Clothing & Fashion Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>फैब इंडिया</strong>: कपड़ों के लिए रिटेल स्टोर फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Biba</strong>: महिलाओं के एथनिक परिधानों के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Manyavar</strong>: पारंपरिक परिधानों के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Jewelry Franchise -->
    <div class="p-6 bg-indigo-300 rounded-lg border-2 border-indigo-400 shadow-lg">
      <h2 class="text-xl font-semibold">💍 Jewelry (Abhushan) Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>तनिष्क</strong>: गोल्ड और डायमंड ज्वैलरी के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>कल्याण ज्वेलर्स</strong>: ज्वेलरी ब्रांड के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Real Estate Franchise -->
    <div class="p-6 bg-gray-300 rounded-lg border-2 border-gray-400 shadow-lg">
      <h2 class="text-xl font-semibold">🏠 Real Estate Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>RE/MAX India</strong>: प्रॉपर्टी डीलिंग के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Coldwell Banker</strong>: रियल एस्टेट सेवाओं के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Cleaning & Sanitization Franchise -->
    <div class="p-6 bg-orange-300 rounded-lg border-2 border-orange-400 shadow-lg">
      <h2 class="text-xl font-semibold">🧹 Cleaning & Sanitization Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>UrbanClap (Urban Company)</strong>: घरेलू सेवाओं के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>The Maids</strong>: क्लीनिंग सर्विसेज के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>

    <!-- Bakery Franchise -->
    <div class="p-6 bg-rose-300 rounded-lg border-2 border-rose-400 shadow-lg">
      <h2 class="text-xl font-semibold">🍰 Bakery Franchise</h2>
      <ul class="list-disc list-inside">
        <li>🔹 <strong>The Belgian Waffle Co.</strong>: वफ़ल और बेकरी प्रोडक्ट्स के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>Monginis</strong>: केक और बेकरी उत्पादों के लिए फ्रेंचाइज़ी।</li>
        <li>🔹 <strong>CakeZone</strong>: केक और डेसर्ट्स के लिए फ्रेंचाइज़ी।</li>
      </ul>
    </div>
  </div>
</div>


      <div class="p-6 bg-gray-100">
  <!-- Electronics Work -->
  <h2 class="text-xl font-bold">1. इलेक्ट्रॉनिक सामान से जुड़े काम</h2>
  <ul class="list-disc list-inside ml-4">
    <li>📺 इलेक्ट्रॉनिक्स विक्रेता (टीवी, फ्रिज, वाशिंग मशीन, एयर कंडीशनर)</li>
    <li>📱 मोबाइल रिपेयरिंग टेक्नीशियन</li>
    <li>💻 कंप्यूटर और लैपटॉप रिपेयर टेक्नीशियन</li>
    <li>📹 सीसीटीवी इंस्टॉलेशन और सर्विस प्रोवाइडर</li>
    <li>🔧 होम अप्लायंसेज रिपेयर मैकेनिक</li>
    <li>🔌 इलेक्ट्रॉनिक पार्ट्स विक्रेता</li>
    <li>☀️ सोलर पैनल इंस्टॉलेशन और मेंटेनेंस सर्विसेज</li>
  </ul>

  <!-- Mechanical Workers -->
  <h2 class="text-xl font-bold mt-6">2. मकैनिक (मैकेनिकल वर्कर्स)</h2>
  <ul class="list-disc list-inside ml-4">
    <li>🚗 ऑटोमोबाइल मैकेनिक (कार, बाइक, स्कूटर रिपेयर)</li>
    <li>❄️ एयर कंडीशनर और फ्रिज रिपेयर मैकेनिक</li>
    <li>⚡ इलेक्ट्रिकल उपकरणों के मैकेनिक (मोटर, जनरेटर रिपेयर)</li>
    <li>🛠️ वेल्डिंग वर्कर (वेल्डर, फैब्रिकेशन वर्क्स)</li>
    <li>🔋 टायर और बैटरी रिपेयर शॉप</li>
    <li>🏭 मशीन रिपेयरिंग टेक्नीशियन (फैक्ट्री और मैन्युफैक्चरिंग इक्विपमेंट)</li>
  </ul>

  <!-- Cleaning Workers -->
  <h2 class="text-xl font-bold mt-6">3. सफाई कर्मचारी (Cleaning Workers)</h2>
  <ul class="list-disc list-inside ml-4">
    <li>🏠 घरेलू सफाई कर्मचारी (Housekeeping)</li>
    <li>🛣️ सड़क और कॉलोनी सफाई कर्मचारी</li>
    <li>🧼 कारपेट और फर्नीचर क्लीनिंग सर्विसेज</li>
    <li>🏢 ऑफिस और कॉर्पोरेट क्लीनिंग सर्विस प्रोवाइडर</li>
    <li>🚽 सीवर और ड्रेनेज सिस्टम क्लीनिंग वर्कर</li>
    <li>🪟 ग्लास क्लीनिंग सर्विस प्रोवाइडर</li>
  </ul>

  <!-- Construction Workers -->
  <h2 class="text-xl font-bold mt-6">4. कंस्ट्रक्शन और बिल्डिंग वर्कर</h2>
  <ul class="list-disc list-inside ml-4">
    <li>👷 मजदूर (Construction Laborer)</li>
    <li>🔨 राजमिस्त्री (Mason)</li>
    <li>🎨 प्लास्टर और पेंटिंग वर्कर</li>
    <li>👷‍♂️ सिविल इंजीनियर और सुपरवाइजर</li>
    <li>🛠️ लोहे का काम (Steel Fixer, Welder)</li>
    <li>🏗️ स्ट्रक्चर और बिल्डिंग निर्माण करने वाले वर्कर</li>
    <li>📑 ठेकेदार (Contractor)</li>
  </ul>

  <!-- Retailers and Sellers -->
  <h2 class="text-xl font-bold mt-6">5. बिक्रेता (Retailers and Sellers)</h2>
  <ul class="list-disc list-inside ml-4">
    <li>📺 इलेक्ट्रॉनिक्स सामान विक्रेता (TV, मोबाइल, लैपटॉप)</li>
    <li>👗 कपड़े और फैशन विक्रेता</li>
    <li>🛋️ फर्नीचर विक्रेता (घर और ऑफिस के लिए)</li>
    <li>🏠 घरेलू सामान और अप्लायंसेज विक्रेता</li>
    <li>🛒 किराना और जनरल स्टोर</li>
    <li>🚗 ऑटोमोबाइल स्पेयर पार्ट्स विक्रेता</li>
    <li>🏗️ बिल्डिंग मटेरियल्स विक्रेता (ईंट, सीमेंट, सरिया)</li>
  </ul>

  <!-- Plumbing Services -->
  <h2 class="text-xl font-bold mt-6">6. प्लंबर (Plumbing Services)</h2>
  <ul class="list-disc list-inside ml-4">
    <li>🔧 घरेलू और कॉर्पोरेट प्लंबर</li>
    <li>🚰 पाइप फिटिंग और रिपेयरिंग वर्कर</li>
    <li>🔥 वॉटर हीटर और गीजर इंस्टॉलेशन टेक्नीशियन</li>
    <li>💧 वॉटर पंप रिपेयरिंग टेक्नीशियन</li>
    <li>🚽 सीवर और ड्रेनेज सिस्टम मैकेनिक</li>
    <li>🚿 बाथरूम फिटिंग इंस्टॉलेशन (टैप, शॉवर)</li>
  </ul>

  <!-- Interior Designing -->
  <h2 class="text-xl font-bold mt-6">7. इंटीरियर डिजाइनिंग (Interior Designing)</h2>
  <ul class="list-disc list-inside ml-4">
    <li>🛋️ इंटीरियर डिजाइनर (घर और ऑफिस इंटीरियर डिजाइनिंग)</li>
    <li>🪑 फर्नीचर डिजाइनर और मेकर</li>
    <li>🎨 वॉल पेंटिंग और डेकोरेशन वर्कर</li>
    <li>🔆 फॉल्स सीलिंग और लाइटिंग इंस्टॉलेशन</li>
    <li>🍳 किचन मॉड्यूलर और फर्नीचर इंस्टॉलेशन</li>
    <li>🏠 होम डेकोर कंसल्टेंट</li>
  </ul>

  <!-- Office Furniture Makers -->
  <h2 class="text-xl font-bold mt-6">8. ऑफिस फर्नीचर बनाने वाले (Furniture Makers)</h2>
  <ul class="list-disc list-inside ml-4">
    <li>🪑 लकड़ी के फर्नीचर निर्माता (कुर्सी, टेबल, अलमारी)</li>
    <li>🪑 प्लास्टिक फर्नीचर विक्रेता और निर्माता</li>
    <li>🪑 ऑफिस चेयर और टेबल मेकर</li>
    <li>🛠️ स्टील और लोहे का फर्नीचर निर्माता</li>
    <li>🛋️ मॉड्यूलर ऑफिस फर्नीचर निर्माता</li>
    <li>🛠️ कस्टमाइज़्ड फर्नीचर मेकर (डिजाइनर टेबल और कुर्सियाँ)</li>
  </ul>
</div>



         <div class=" rounded-lg bg-green-500">
            <div class="bg-blue-100 border border-blue-400 text-blue-800 px-6 py-4 rounded-lg shadow-lg">
               <p class="text-lg font-bold mb-2">यदि आप भारत में कहीं परिवार के साथ यात्रा की योजना बना रहे हैं...</p>
               <p class="text-gray-700">...लेकिन अकेलेपन का सामना कर रहे हैं या दोस्तों का साथ नहीं मिल रहा है, तो चिंता की कोई बात नहीं है! 😊 हमारे ग्रुप में शामिल होकर आप न केवल नए दोस्त बना सकते हैं, बल्कि अपनी यात्रा को और भी खास बना सकते हैं। 👫👨‍👩‍👧‍👦</p>
               <p class="text-gray-700 mt-2">हम भारत के प्रसिद्ध और खूबसूरत स्थलों 🌍 जैसे हिल स्टेशन 🏞️, ऐतिहासिक धरोहरें 🏰, और समुद्र तट 🏖️ की रोमांचक सैर कराने के लिए बेहतरीन टूर 🚗 की योजना बना रहे हैं। तो देर किस बात की? आइए, हमारे साथ जुड़ें और इस यात्रा को यादगार बनाएं!</p>
               <p class="text-lg font-semibold mt-4">हमारे पास कई ऐसी फैमिलीज और लोग हैं...</p>
               <p class="text-gray-700">जो घूमना तो चाहते हैं, लेकिन अकेलेपन की वजह से उन्हें मौका नहीं मिल पाता। अगर आप हमारे ग्रुप के साथ यात्रा करेंगे, तो न केवल आपका खर्च कम होगा, बल्कि आप नए अनुभव और कहानियाँ भी साझा कर सकेंगे। 🌟</p>
               <p class="text-gray-700 mt-2">रुकने के दौरान, साथी यात्रियों के अनुभव सुनना और अपने अनुभव बताना, यात्रा को और भी मजेदार और खास बना देगा। 💬 साथ ही, आपके खर्चे भी कम होंगे, जिससे यात्रा का आनंद दोगुना हो जाएगा।</p>
               <div class="flex flex-col items-center justify-center  p-2">
                    <a href="https://bharatcschub.online/formcsc" class="text-white bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे जुड़े</span>
                    </a>
                </div>
            </div>
         </div>
         <div class=" rounded-lg bg-green-500">
            <div class="bg-green-100 border border-green-400 text-green-800 px-6 py-4 rounded-lg shadow-md">
               <p class="text-xl font-bold mb-2">हम फ्लैट और प्लॉट खरीदने व बेचने में भी आपकी मदद करते हैं 🏠।</p>
               <p class="text-gray-700">अगर आप संपत्ति से जुड़ी किसी भी प्रकार की खरीद या बिक्री की सोच रहे हैं, तो  </p>
               <div class="flex flex-col items-center justify-center  p-2">
                    <a href="https://bharatcschub.online/formcsc" class="text-white bg-red-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे संपर्क करें।</span>
                    </a>
                </div>
            </div>
         </div>
         <div class="  rounded-lg bg-green-500">
            <div class="p-4 bg-blue-50 text-gray-900 rounded-lg shadow-md max-w-xl mx-auto">
               <h2 class="text-xl font-semibold text-blue-800 mb-2">
                  यदि आपको नया पैन कार्ड बनवाना है या पुराने पैन कार्ड में कोई अपडेट या सुधार कराना है, तो हम आपकी सहायता के लिए यहाँ हैं। 📝
               </h2>
               <p class="text-lg">
                  सिर्फ <span class="font-bold text-blue-600">2 घंटे</span> में पैन कार्ड बनवाएं! अगर आपको तुरंत नए पैन कार्ड की आवश्यकता है, तो हमारी तेज़ और विश्वसनीय सेवा का लाभ उठाएं। 
               </p>
               <p class="text-lg mt-4">
                  हम नए पैन कार्ड के आवेदन, पैन कार्ड अपडेट, और पैन कार्ड करेक्शन (जैसे नाम, जन्म तिथि, पता आदि) से जुड़े सभी कार्यों में आपकी मदद करते हैं। ✅ हमारी सेवाओं का लाभ उठाकर आप आसानी से और बिना किसी परेशानी के अपना पैन कार्ड सही करा सकते हैं।
               </p>
               <div class="mt-4 p-3 bg-green-100 border-l-4 border-green-500">
                  <p class="text-green-900">
                     <strong>यह सुविधा विशेष रूप से CSC सेंटर संचालकों और साइबर कैफे व्यवसायियों के लिए है</strong>, जो अपने ग्राहकों को त्वरित और विश्वसनीय पैन कार्ड सेवाएं प्रदान करना चाहते हैं।
                  </p>
               </div>
               <div class="flex flex-col items-center justify-center  p-2">
                    <a href="https://bharatcschub.online/formcsc" class="text-white bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे जुड़े</span>
                    </a>
                </div>
            </div>
         </div>


         <div class="container mx-auto px-4 py-6">
  <!-- Aadhar Card Services -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">1. आधार कार्ड सेवाएँ 🆔</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>आधार पंजीकरण 📝</li>
      <li>नाम, पता, मोबाइल अपडेट 🔄</li>
      <li>ई-आधार डाउनलोड ⬇️</li>
      <li>आधार वेरिफिकेशन ✅</li>
    </ul>
  </div>

  <!-- PAN Card Services -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">2. पैन कार्ड सेवाएँ 🧾</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>नया पैन कार्ड आवेदन 📄</li>
      <li>पैन कार्ड अपडेट/सुधार 🛠️</li>
      <li>ई-पैन डाउनलोड ⬇️</li>
    </ul>
  </div>

  <!-- Banking & Financial Services -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">3. बैंकिंग और वित्तीय सेवाएँ 🏦💰</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>जन-धन खाता खोलना 🏧</li>
      <li>पैसे जमा/निकासी (AePS) 💸</li>
      <li>मनी ट्रांसफर सेवाएँ 💳</li>
      <li>बीमा सेवाएँ (जीवन, स्वास्थ्य, वाहन) 🛡️</li>
      <li>अटल पेंशन योजना 📉</li>
      <li>प्रधानमंत्री जीवन ज्योति बीमा योजना 💡</li>
      <li>सुकन्या समृद्धि योजना 👧</li>
    </ul>
  </div>

  <!-- Government Schemes and Certificates -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">4. सरकारी योजनाएँ और प्रमाणपत्र 🏛️</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>आय, जाति, निवास प्रमाणपत्र 📑</li>
      <li>वृद्धावस्था पेंशन योजना 👵</li>
      <li>विधवा पेंशन योजना 👩‍🦳</li>
      <li>प्रधानमंत्री आवास योजना 🏠</li>
      <li>छात्रवृत्ति आवेदन 🎓</li>
      <li>राशन कार्ड आवेदन और अपडेट 🍚</li>
      <li>किसान सेवाएँ 👨‍🌾</li>
    </ul>
  </div>

  <!-- Professional Jobs -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">1. पेशेवर नौकरियाँ 👩‍⚕️👨‍💻</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>डॉक्टर (General Practitioner, Specialist) 🩺</li>
      <li>इंजीनियर (सिविल, सॉफ्टवेयर) 👷‍♂️</li>
      <li>शिक्षक/प्रोफेसर 📚</li>
      <li>वकील ⚖️</li>
      <li>सॉफ्टवेयर डेवलपर 💻</li>
      <li>मार्केटिंग प्रोफेशनल 📊</li>
      <li>बैंक कर्मचारी 🏦</li>
      <li>डाटा एनालिस्ट/साइंटिस्ट 📈</li>
    </ul>
  </div>

  <!-- Business -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">2. व्यवसाय/बिज़नेस 🏪</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>किराना दुकान 🛒</li>
      <li>रेस्टोरेंट/ढाबा 🍽️</li>
      <li>कपड़े का व्यापार 👚</li>
      <li>ऑटोमोबाइल वर्कशॉप 🚗</li>
      <li>रियल एस्टेट एजेंट 🏘️</li>
      <li>ऑनलाइन ई-कॉमर्स 🛍️</li>
    </ul>
  </div>

  <!-- Work from Home/Freelancing -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">3. घरेलू काम (वर्क फ्रॉम होम/फ्रीलांस) 🏡💼</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>घरेलू सहायिका 🧹</li>
      <li>सिलाई/कढ़ाई 🧵</li>
      <li>ऑनलाइन ट्यूशन 🎓</li>
      <li>फ्रीलांस राइटिंग ✍️</li>
      <li>होम बेकिंग 🎂</li>
    </ul>
  </div>

  <!-- Labor and Skilled Work -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">4. श्रमिक और कुशल कार्य 🛠️</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>मज़दूर 👷</li>
      <li>प्लम्बर 🚰</li>
      <li>इलेक्ट्रीशियन 💡</li>
      <li>बढ़ई 🪚</li>
      <li>ड्राइवर 🚖</li>
    </ul>
  </div>

  <!-- Other Services -->
  <div class="bg-gray-100 p-4 rounded-lg mb-6">
    <h2 class="text-xl font-bold mb-4">5. अन्य कार्य और सेवाएँ 🔑</h2>
    <ul class="list-disc list-inside space-y-2">
      <li>किसान 👨‍🌾</li>
      <li>दूध सप्लायर 🥛</li>
      <li>सेक्योरिटी गार्ड 🚨</li>
      <li>डिलीवरी बॉय 📦</li>
    </ul>
  </div>
</div>
      </div>
   </div>
</div>

<script>
        // Disable right-click
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Disable text selection
        document.addEventListener('selectstart', function(e) {
            e.preventDefault();
        });
    </script>
<?php include("footer.php");?>