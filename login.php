<?php include('headerFront.php'); ?>

<div class="container mx-auto mt-5 max-w-[1320px]">
  <div class="flex justify-center">
    <div class="w-full max-w-md">
      <div class="bg-white shadow-lg rounded-lg">
        <div class="p-6">
          <h5 class="text-center text-red-600 font-bold text-lg mb-4">🔐 User Login Form</h5>
          <form action="addLogin" method="post" name="add">
            <div class="mb-4">
              <label for="username" class="block font-bold text-gray-700 mb-1">User ID :</label>
              <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded" id="username" name="username" placeholder="Enter User ID" onchange="trimInput(this)">
            </div>
            <div class="mb-4">
              <label for="password" class="block font-bold text-gray-700 mb-1">Password :</label>
              <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded" id="password" name="password" placeholder="Enter Password" onchange="trimInput(this)">
            </div>
            <div class="mb-4 flex items-center">
              <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded mr-2" id="remember">
              <label class="text-gray-700 font-bold" for="remember">Remember</label>
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded font-bold hover:bg-green-700">🔐 Login</button>
          </form>
          <div class="text-right mt-4">
            <a href="index.php" class="text-blue-600 hover:underline">📝Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="justify-center pb-6">
        <h1 class="text-center text-xl font-bold mt-6">Amrish Digital CSC Center - 📞 7518869428</h1>
        <h2 class="text-center text-lg mt-2">📍 Address: 295/5, Deen Dayal Road, Asharfabad, Lucknow, Uttar Pradesh 226003</h2>

        <h3 class="text-center mt-4">
            अगर आप अपना यूजरनेम या पासवर्ड भूल गए हैं, तो चिंता मत करें! 😊<br/>
            कृपया हमें तुरंत WhatsApp करें: 📱 
            <a href="https://wa.me/917518869428" target="_blank" class="text-blue-600 hover:underline">
                +91 7518869428 📞
            </a>
            Don't just call, text me on WhatsApp too हम आपकी मदद के लिए यहाँ हैं! 🙌
        </h3>
    </div>
</div>
<?php include('footer.php'); ?>
 
