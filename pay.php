<?php require_once("header.php"); ?>
<body>
    <div class="container py-5">
        <h2 class="text-center text-primary mb-4">Ration Card Print Portal Recharge Plans</h2>
        
        
        <!-- -------------------------     -->
        
        <div class="row  row-cols-md-8 g-4">
            <div class="col">
                <div class="card h-100 border border-primary rounded p-4 text-center shadow-lg">
                    <h2 class="text-primary font-weight-bold mb-3">Basic</h2>
                    <hr class="w-25 border-primary mb-4">
                    <h3 class="text-primary font-weight-bold mb-4">₹ 400/-<span class="text-muted"></span></h3>
                    <ul class="text-muted mb-4">
                         <li> <h4>Wallet Balance ₹400</h4></li>
                        <li> Payment Transaction ID Screenshot, WhatsApp 7518869428 Your ID will be activated in 1 to 2 hours Thanks !
                        
                        </li>
                        

                    </ul>
                    <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#myModal">Pay Now</button>
                </div>
            </div>



            <div class="col">
                <div class="card h-100 border border-warning rounded p-4 text-center shadow-lg">
                    <h2 class="text-warning font-weight-bold mb-3">Standard*</h2>
                    <hr class="w-25 border-warning mb-4">
                    <h3 class="text-warning font-weight-bold mb-4">₹ 1000/-<span class="text-muted"> </span></h3>
                    <ul class="text-muted mb-4">
                        <li> <h4>Wallet Balance ₹1100</h4></li>
                        <li> Payment Transaction ID Screenshot, WhatsApp 7518869428 Your ID will be activated in 1 to 2 hours Thanks !
                        
                    </ul>
                    <button type="button" class="btn btn-warning text-primary rounded-pill" data-toggle="modal" data-target="#myModal">Pay Now</button>
                </div>
            </div>
            <!-- Premium 1 Plan -->
            <div class="col">
                <div class="card h-100 border border-danger rounded p-4 text-center shadow-lg">
                    <h2 class="text-danger font-weight-bold mb-3">Premium*</h2>
                    <hr class="w-25 border-danger mb-4">
                    <h3 class="text-danger font-weight-bold mb-4">₹ 1700/-<span class="text-muted">.</span></h3>
                    <ul class="text-muted mb-4">
                         <li> <h4>Wallet Balance ₹2000</h4></li>
                        <li> Payment Transaction ID Screenshot, WhatsApp 7518869428 Your ID will be activated in 1 to 2 hours Thanks !
                        
                    </ul>
                    <button type="button" class="btn btn-danger rounded-pill" data-toggle="modal" data-target="#myModal">Pay Now</button>
                </div>
            </div>
            <!-- Premium 2 Plan -->
            <div class="col">
                <div class="card h-100 border border-success rounded p-4 text-center shadow-lg">
                    <h2 class="text-success font-weight-bold mb-3">Golden</h2>
                    <hr class="w-25 border-success mb-4">
                    <h3 class="text-success font-weight-bold mb-4">₹ 5000/-<span class="text-muted"> </span></h3>
                    <ul class="text-muted mb-4">
                        <li> <h4>Wallet Balance ₹6000</h4></li>
                        <li> Payment Transaction ID Screenshot, WhatsApp 7518869428 Your ID will be activated in 1 to 2 hours Thanks !
                        
                    </ul>
                    <button type="button" class="btn btn-success rounded-pill" data-toggle="modal" data-target="#myModal">Pay Now</button>
                </div>
            </div>
        </div>
    </div>

    <div id="message" class="alert alert-success fixed-bottom w-100 text-center py-3 d-none" role="alert">
        Plan purchased successfully!
    </div>



	

<!-- Modal -->
<div
  data-twe-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div
    data-twe-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
        <h5
          class="text-xl font-medium leading-normal text-surface dark:text-white"
          id="exampleModalLabel">
          Modal title
        </h5>
        <button
          type="button"
          class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
          data-twe-modal-dismiss
          aria-label="Close">
          <span class="[&>svg]:h-6 [&>svg]:w-6">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </button>
      </div>

     

      <!-- Modal footer -->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400"
          data-twe-modal-dismiss
          data-twe-ripple-init
          data-twe-ripple-color="light">
          Close
        </button>
        <button
          type="button"
          class="ms-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
          data-twe-ripple-init
          data-twe-ripple-color="light">
          Save changes
        </button>
      </div>
    </div>
  </div>
</div> 
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="d-flex justify-between px-3 ">
          <h4 class=""></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <img src="images/payment.jpeg" width="460px" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger bg-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

 
<h1 style="text-align:center">रिचार्ज करने के बाद 7518869428 पर स्क्रीनशॉट व्हाट्सएप पर भेजे !</h1>
<?php require_once("footer.php");?>