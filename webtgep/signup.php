 <?php include("header.php"); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
  <!-- Container for the form -->
  <div class="container mx-auto mt-5 max-w-[500px] p-6 bg-white rounded-lg shadow-lg">
    <h3 class="text-2xl font-semibold text-gray-900 dark:text-white text-center mb-6">📝 Sign Up for Our Platform</h3>

    <form class="space-y-4" action="addAction" method="post" name="add">
      <!-- Name Field -->
      <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">👤 Name *</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your name" required />
      </div>

      <!-- Mobile Field -->
      <div>
        <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900">📱 Mobile *</label>
        <input type="text" name="mobile" id="mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your mobile number" required />
      </div>

      <!-- Email Field -->
      <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">📧 Email Address *</label>
        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your email" required />
      </div>

      <!-- City Field -->
      <div>
        <label for="city" class="block mb-2 text-sm font-medium text-gray-900">🏙️ City *</label>
        <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your city" required />
      </div>

      <!-- State Field -->
      <div>
        <label for="state" class="block mb-2 text-sm font-medium text-gray-900">🌍 State *</label>
        <input type="text" name="state" id="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your state" required />
      </div>

      <!-- Business Field -->
      <div>
        <label for="business" class="block mb-2 text-sm font-medium text-gray-900">💼 What is Your Business? *</label>
        <input type="text" name="business" id="business" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your business type" required />
      </div>

      <!-- Password Field -->
      <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">🔒 Password *</label>
        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Create a password" required />
      </div>

      <!-- Signup Button -->
      <button type="submit" name="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">✍️ Sign Up</button>

      <!-- Already Registered -->
      <div class="text-sm font-medium text-gray-500 text-center">
        Already registered? <a href="login" class="text-blue-700 hover:underline">Login here</a>
      </div>
    </form>
  </div>
</body>
</html>


  
