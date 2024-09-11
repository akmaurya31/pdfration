<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php 
require_once("header.php");
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    // echo "SFASDF";
} else {
    // Redirect to login page
    // header("Location: dashboard.php");
    // exit();
}
?>

<form action="addInformation.php" method="post" name="add">
  <div class="container my-4 shadow shadow-light" style="width:800px; border:1px solid gray; border-radius:10px">
    <div class="bg-light p-4 overflow-auto  flex flex-col mx-auto gap-y-5 h-800px w-650px">
      <div class="flex flex-row justify-center  p-4">
        <div class="text-xl font-bold text-center">
          Create New Form
        </div>
      </div>

      <div class="d-flex justify-content-around">

        <div class="form-group font-bold" style="width:50%">
          <label for="ration_no">Rashan Card No :</label>
          <input type="text" class="form-control" id="ration_no" name="ration_no" placeholder="Enter Your Rashan Card No.">
        </div>

        <div class="form-group ml-2 font-bold" style="width:50%">
          <label for="town">Town :</label>
          <input type="text" class="form-control" id="town" name="town" placeholder="Enter Your Home Town">
        </div>
      </div>

      <div class="d-flex justify-content-around">
          <div class="form-group font-bold" style="width:50%">
            <label for="mukhiya">Mukhiya</label>
            <input type="text" class="form-control" id="mukhiya" name="mukhiya" placeholder="Enter Your Mukhiya Name">
          </div>

          <div class="form-group  ml-2 font-bold" style="width:50%">
            <label for="father">Father/Husbend Name</label>
            <input type="text" class="form-control" id="father" name="father" placeholder="Enter Name">
          </div>
      </div>

      <div class="d-flex justify-content-around">

        <div class="form-group font-bold" style="width:50%">
          <label for="cast_certificate">Jati</label>
          <input type="text" class="form-control" id="cast_certificate" name="cast_certificate" placeholder="Enter Your Jati">
        </div>

        <div class="form-group ml-2 font-bold" style="width:50%">
          <label for="adhar">Adhar/Enrollment No.</label>
          <input type="text" class="form-control" id="adhar" name="adhar" placeholder="Enter Number">
        </div>
      </div>

      <div class="form-group font-bold">
        <label for="address">Full Address</label>
        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter Your Address"></textarea>
      </div>

      <div class="d-flex justify-content-around">

          <div class="form-group font-bold" style="width:50%">
            <label for="gas_connection_no" >Gas Family Connection No.</label>
            <input type="text" class="form-control" id="gas_connection_no" name="gas_connection_no" placeholder="Enter Number">
          </div>

          <div class="form-group ml-2 font-bold" style="width:50%">
            <label for="dukan_no">Dukan No.</label>
            <input type="text" class="form-control" id="dukan_no" name="dukan_no" placeholder="Enter Number">
          </div>
      </div>

      <div class="form-group font-bold">
        <label for="unit">Unit No.</label>
        <input type="number" class="form-control" id="unit" name="unit">
      </div>

      <div class="form-group mt-3">
        <button type="submit" class="btn btn-success btn-block">Save</button>
      </div>
    </div>
  </div>
</form>

<?php require_once("footer.php"); ?>

</body>
</html>
