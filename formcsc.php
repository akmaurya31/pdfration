<?php include('headerFront.php'); ?>


<h1 class="text-center text-2xl font-bold my-4 "> 🚀Contact Us</h1>


 
 

<div class="container m-auto p-4">
    <div class="flex flex-col lg:flex-row justify-center gap-6 p-4">
      <div class="flex justify-center items-center ">
        <form class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full" id="contactForm" method="post">
          <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">
            यदि आप हमसे जुड़ना चाहते हैं या पेज चलवाना चाहते हैं
          </h2>

          <!-- Name Field -->
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">
              🧑 Name
            </label>
            <input type="text" id="name" name="name" placeholder="Enter your name 🧑" class="mt-1 p-2 w-full border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <!-- Email Field -->
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">
              📧 Email
            </label>
            <input type="email" id="email" name="email" placeholder="Enter your email 📧" class="mt-1 p-2 w-full border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <!-- Mobile Field -->
          <div class="mb-4">
            <label for="mobile" class="block text-sm font-medium text-gray-700">
              📱 Mobile
            </label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number 📱" class="mt-1 p-2 w-full border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>

          <!-- Message Field -->
          <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">
              💬 Message
            </label>
            <textarea id="message" name="message" rows="4" placeholder="Enter your message 💬" class="mt-1 p-2 w-full border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
          </div>

          <!-- Submit Button -->
          <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
              Send Message
            </button>
          </div>
        </form>
      </div>
      <div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-lg border border-gray-300">
          <h1 class="text-2xl font-bold text-gray-900 mb-4">🚀 विशेष सेवाएँ:</h1>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
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
        </ul>
      </div>
    </div>
</div>


<script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Capture form data
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;
            var message = document.getElementById('message').value;

            // Prepare data for PHP script
            var formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('mobile', mobile);
            formData.append('message', message);

            // Send data to PHP script
            fetch('formcsc_submit', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log('Success:', data);
                alert('Form submitted successfully!');
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('Form submission failed!');
            });
        });
    </script>