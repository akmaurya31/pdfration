<?php require_once("headerk.php"); ?>
<div class="container w-[80%] mx-auto py-12">
    <div class="flex flex-row mx-auto px-4 py-8 gap-4">
        <!-- <div class="w-[35%]">
            <img src="./images/1727852895931.jpeg" class="h-[250px] rounded-lg shadow-lg" alt="International Business Expansion Summit" />
        </div> -->
        <div class="bg-white border border-red-500 rounded-lg shadow-lg p-6 text-center mb-8 w-[65%] mx-auto">
            <h2 class="text-2xl text-red-600 font-semibold mb-3">
                International Business Expansion Summit
            </h2>

            <h3 class="text-2xl text-red-600 font-semibold mb-3">
                Master Class @ Rs. 499.00
            </h3>

            <hr class="w-1/4 border-red-500 mx-auto mb-4">
            <form action="./stripe/public/checkout" method="POST">
                <button type="submit" id="checkout-button" class="bg-red-500 text-white rounded-full px-4 py-2 mt-4 hover:bg-blue-600">
                    Pay Now
                </button>

                <button type="button" class="bg-green-500 text-white rounded-full px-4 py-2 mt-4 hover:bg-blue-600" onclick="document.getElementById('exampleModal').classList.remove('hidden');">
                    Via UPI QR
                </button>
            </form>
        </div>
    </div>
</div>


<div
  class="fixed border inset-0 z-[11055] hidden h-full w-full overflow-y-auto  bg-opacity-50"
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
        <img src="images/payment.jpeg" class="w-[75%] h-[50%]" alt="Payment Screenshot" />
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

<?php require_once("footer.php");?>
