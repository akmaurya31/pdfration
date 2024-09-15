<?php require_once("header.php"); ?>
<div class="container mx-auto my-5 px-4">
  <div class="flex justify-center">
    <div class="w-full max-w-md">
      <form action="addNewRationCard.php" method="post" name="add">
        <div class="p-4 bg-light rounded shadow-md">
          <div class="text-xl text-center font-bold text-red-500 mb-4">
          🛒 Request Ration Card
          </div>

          <div class="mb-3">
            <label for="name" class="block font-bold text-gray-700">👤 Candidate Name (मुखिया) :</label>
            <input
              id="name"
              name="name"
              class="form-input mt-1 block w-full bg-gray-200 text-black font-bold p-4 rounded"
              placeholder="Enter name"
              type="text"
              required
            />
          </div>

          <div class="mb-3 hidden">
            <label for="adhar" class="block font-bold text-gray-700">Aadhaar Card No. :</label>
            <input
              id="adhar"
              name="adhar"
              class="form-input mt-1 block w-full bg-gray-200 text-black font-bold p-4 rounded"
              placeholder="Enter adhar no."
              type="number"
            />
          </div>

          <div class="mb-3">
            <label for="ration" class="block font-bold text-gray-700">📜 Ration Card No. (राशन कार्ड संख्या) :</label>
            <input
              id="ration"
              name="ration"
              class="form-input mt-1 block w-full bg-gray-200 text-black font-bold p-4 rounded"
              placeholder="Enter ration"
              type="number"
              required
            />
          </div>

          <div class="mb-3">
            <label for="janpad" class="block font-bold text-gray-700">🏙️ District (जनपद):</label>
            <input
              id="janpad"
              name="janpad"
              class="form-input mt-1 block w-full bg-gray-200 text-black font-bold p-4 rounded"
              placeholder="Enter जनपद"
              type="text"
              required
            />
          </div>

          <button class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="p-6 bg-white rounded-lg shadow-lg text-center">
        <p class="text-lg mb-4">📋 You will get the ration card PDF on the portal in 15 to 20 minutes.</p>
        <p class="text-lg">Or contact us via WhatsApp: 
            <a href="https://wa.me/7518869428" class="text-blue-500 hover:underline">📱 7518869428</a>
        </p>
    </div>

<?php require_once("footer.php"); ?>