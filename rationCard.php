<?php require_once("header.php"); ?>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="addNewRationCard.php" method="post" name="add">
          <div class="p-4 bg-light rounded shadow">
            <div class="h3 text-center font-bold text-danger mb-4">
              Request Ration Card
            </div>
            <div class="mb-3">
              <label for="name" class="form-label font-bold">Candidate Name (मुखिया) :</label>
              <input
                id="name"
                name="name"
                class="form-control"
                placeholder="Enter name"
                type="text"
                required
                style="background: #d8e2e8; color:balck; font-weight:bold;"
              />
            </div>

            <div class="mb-3 d-none">
              <label for="adhar" class="form-label font-bold">Adhar Card No. :</label>
              <input
                id="adhar"
                name="adhar"
                class="form-control placehoder:bg-info"
                placeholder="Enter adhar no."
                type="number"
                style="background: #d8e2e8; color:balck; font-weight:bold;"
               
              />
            </div>

            <div class="mb-3">
              <label for="ration" class="form-label font-bold">Ration Card No. :</label>
              <input
                id="ration"
                name="ration"
                class="form-control"
                placeholder="Enter ration"
                type="number"
                required
                style="background: #d8e2e8; color:balck; font-weight:bold;"
              />
            </div>

            <div class="mb-3">
              <label for="janpad" class="form-label font-bold"> जनपद :</label>
              <input
                id="janpad"
                name="janpad"
                class="form-control"
                placeholder="Enter जनपद"
                type="text"
                required
                style="background: #d8e2e8; color:balck; font-weight:bold;"
              />
            </div>
            <button class="btn btn-success w-100">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="center">
    <h3 style="text-align: center"> You will get the ration card PDF on the portal in 15 to 20 minutes or whatsapp 7518869428</h3>
    
  </div>
<?php require_once("footer.php"); ?>