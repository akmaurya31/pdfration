<?php require_once("header.php"); ?>
 
<div class="container max-w-[1200px] mx-auto py-12">
    <h2 class="text-3xl text-blue-600 font-bold text-center mb-8">🌟 Ration Card Print Portal Recharge Plans 🌟 </h2>
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Basic Plan -->
        <div class="bg-white border border-blue-500 rounded-lg shadow-lg p-6 text-center">
            <h2 class="text-2xl text-blue-600 font-semibold mb-3">Basic</h2>
            <hr class="w-1/4 border-blue-500 mx-auto mb-4">
            <h3 class="text-xl text-blue-600 font-semibold mb-4">₹ 400/-</h3>
            <ul class="text-gray-600 mb-4">
                <li class="text-lg mb-2">Wallet Balance ₹400</li>
                <li class="text-sm">Payment Transaction ID Screenshot, WhatsApp 7518869428. Your ID will be activated in 1 to 2 hours. Thanks!</li>
            </ul>
            <button type="button" class="bg-blue-500 text-white rounded-full px-4 py-2" data-toggle="modal" data-target="#myModal" onclick="document.getElementById('exampleModal').classList.remove('hidden');">Pay Now</button>
        </div>
        
        <!-- Standard Plan -->
        <div class="bg-white border border-yellow-500 rounded-lg shadow-lg p-6 text-center">
            <h2 class="text-2xl text-yellow-500 font-semibold mb-3">Standard*</h2>
            <hr class="w-1/4 border-yellow-500 mx-auto mb-4">
            <h3 class="text-xl text-yellow-500 font-semibold mb-4">₹ 1000/-</h3>
            <ul class="text-gray-600 mb-4">
                <li class="text-lg mb-2">Wallet Balance ₹1100</li>
                <li class="text-sm">Payment Transaction ID Screenshot, WhatsApp 7518869428. Your ID will be activated in 1 to 2 hours. Thanks!</li>
            </ul>
            <button type="button" class="bg-yellow-500 text-gray-800 rounded-full px-4 py-2" data-toggle="modal" data-target="#myModal" onclick="document.getElementById('exampleModal').classList.remove('hidden');">Pay Now</button>
        </div>
        
        <!-- Premium Plan 1 -->
        <div class="bg-white border border-red-500 rounded-lg shadow-lg p-6 text-center">
            <h2 class="text-2xl text-red-500 font-semibold mb-3">Premium*</h2>
            <hr class="w-1/4 border-red-500 mx-auto mb-4">
            <h3 class="text-xl text-red-500 font-semibold mb-4">₹ 1700/-</h3>
            <ul class="text-gray-600 mb-4">
                <li class="text-lg mb-2">Wallet Balance ₹2000</li>
                <li class="text-sm">Payment Transaction ID Screenshot, WhatsApp 7518869428. Your ID will be activated in 1 to 2 hours. Thanks!</li>
            </ul>
            <button type="button" class="bg-red-500 text-white rounded-full px-4 py-2" data-toggle="modal" data-target="#myModal" onclick="document.getElementById('exampleModal').classList.remove('hidden');">Pay Now</button>
        </div>
        
        <!-- Golden Plan -->
        <div class="bg-white border border-green-500 rounded-lg shadow-lg p-6 text-center">
            <h2 class="text-2xl text-green-500 font-semibold mb-3">Golden</h2>
            <hr class="w-1/4 border-green-500 mx-auto mb-4">
            <h3 class="text-xl text-green-500 font-semibold mb-4">₹ 5000/-</h3>
            <ul class="text-gray-600 mb-4">
                <li class="text-lg mb-2">Wallet Balance ₹6000</li>
                <li class="text-sm">Payment Transaction ID Screenshot, WhatsApp 7518869428. Your ID will be activated in 1 to 2 hours. Thanks!</li>
            </ul>
            <button type="button" class="bg-green-500 text-white rounded-full px-4 py-2" data-toggle="modal" data-target="#myModal" onclick="document.getElementById('exampleModal').classList.remove('hidden');">Pay Now</button>
        </div>
    </div>
</div>

<div id="message" class="fixed bottom-0 left-0 w-full bg-green-500 text-white text-center py-3 hidden" role="alert">
    Plan purchased successfully!
</div>

<!-- Modal -->
<div
  class="fixed inset-0 z-[1055] hidden h-full w-full overflow-y-auto bg-black bg-opacity-50"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="relative flex items-center justify-center min-h-screen p-4">
    <div class="relative w-full max-w-lg transform overflow-hidden rounded-lg bg-white shadow-xl transition-all">
      <!-- Modal Header -->
      <div class="flex items-center justify-between p-4 border-b border-gray-300">
        <h5 class="text-xl font-medium text-gray-800" id="exampleModalLabel">
          Pay Now
        </h5>
        <button
          type="button"
          class="text-gray-500 hover:text-gray-800 focus:outline-none"
          aria-label="Close"
          onclick="document.getElementById('exampleModal').classList.add('hidden');">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Modal Body -->
      <div class="p-4">
        <!-- Your image or content here -->
        <img src="images/payment.jpeg" class="w-full" alt="Payment Screenshot" />
      </div>

      <!-- Modal Footer -->
      <div class="flex justify-end p-4 border-t border-gray-300">
        <button
          type="button"
          class="mr-2 px-6 py-2 bg-red-500 text-white text-xs font-medium uppercase rounded hover:bg-red-600 focus:bg-red-600 focus:outline-none"
          onclick="document.getElementById('exampleModal').classList.add('hidden');">
          Close
        </button>
        <button
          type="button"
          class="px-6 py-2 bg-blue-500 text-white text-xs font-medium uppercase rounded hover:bg-blue-600 focus:bg-blue-600 focus:outline-none">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Trigger Button -->
<!-- <div class="container mx-auto text-center mt-10">
  <button
    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none"
    onclick="document.getElementById('exampleModal').classList.remove('hidden');">
    Open Modal
  </button>
</div> -->

<h1 class="text-center text-2xl font-semibold mt-8">
  रिचार्ज करने के बाद <a href="https://wa.me/7518869428" class="text-blue-500 underline" target="_blank">7518869428</a> पर स्क्रीनशॉट व्हाट्सएप पर भेजे! 📲
</h1>
<?php require_once("footer.php");?>