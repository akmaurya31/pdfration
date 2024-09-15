<?php include('headerFront.php'); ?>


<h1 class="text-center text-2xl font-bold my-4 "> 🛒Ration Card Print Portal</h1>



    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <form action="addNewUser.php" method="post" name="add" class="p-4 border rounded shadow-lg">
                <h4 class="text-center text-red-600 font-bold text-lg mb-4">📝User Signup Form</h4>
                
                <div class="mb-3">
                    <label for="name" class="block font-semibold text-gray-700 mb-1">Name :</label>
                    <input type="text" name="name" class="w-full px-3 py-2 border rounded" id="name" placeholder="Enter name">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="block font-semibold text-gray-700 mb-1">Email :</label>
                    <input type="email" name="email" class="w-full px-3 py-2 border rounded" id="email" placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <label for="contact_number" class="block font-semibold text-gray-700 mb-1">Contact Number :</label>
                    <input type="number" name="contact_number" class="w-full px-3 py-2 border rounded" id="contact_number" placeholder="Enter contact number">
                </div>

                <div class="mb-3">
                    <label for="password" class="block font-semibold text-gray-700 mb-1">Password :</label>
                    <input type="password" name="password" class="w-full px-3 py-2 border rounded" id="password" placeholder="Enter password">
                </div>

                <div class="mb-3 flex items-center">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" id="remember">
                    <label class="ml-2 font-semibold text-gray-700" for="remember">Remember</label>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">📝 Signup</button>
                
                <div class="text-right mt-3">
                    <a href="login.php" class="text-blue-600 hover:underline">🔐Login</a>
                </div>
            </form>
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
            हम आपकी मदद के लिए यहाँ हैं! 🙌
        </h3>
    </div>
</div>

<?php include('footer.php'); ?>