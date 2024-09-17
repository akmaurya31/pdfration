<?php include('header.php'); 
$rlok='d-none';
  if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $rlok='';
} 


?>
    <div class="container my-4 mx-auto">
    <h4 class="text-2xl text-center bg-info text-white py-2 rounded font-bold">All Request List</h4>
    <table id="requestTable" class="table table-striped table-bordered">
        <thead class="bg-gray-50">
            <tr>
                <th>Sn</th>
                <th class="<?php echo $rlok; ?>">User ID</th>
                <th>Canditate Name</th>
                <th>Janpad.</th>
                 <th>Ration Card No.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("dbConnection.php");
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                 $sql = "SELECT * FROM ration_req order by id desc";
            } else {
                 $sql = "SELECT * FROM ration_req WHERE user_id='" . $_SESSION['idd'] . "' order by id desc";
            }
            $result = $mysqli->query($sql);

  

                $m=1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                   $cnt=ReqDownload($mysqli, $row['user_id'], $row['id']);
                    $bal=getCurWallet($mysqli,$row['user_id']);
                    $bbal=0;
                    if(isset($bal->current_balance) && $bal->current_balance>0){
                        $bbal=$bal->current_balance;
                    } 
                    $rs=getUserDataById($mysqli,$row['user_id']);
                   
                     if($cnt>=1){
                    echo "<tr style='background-color:yellow'>";
                     }else{
                    echo "<tr>";
                         
                     }
                    
                    
                    ?>
                   <td><?php echo $m.'00'.$row['id'];  $m++; ?> </td>
                   <td class="<?php echo $rlok; ?>"> 
                   <?php 
                   //echo $row['id'];  echo "-";
                   $yyh=getUserHeader($mysqli,$row['user_id']);
                    echo $yyh->contact_number;
                    echo '-'.$yyh->username;
                    echo '<br/>Balance-'. $bbal ?>
                </td>
                   <?php 
                    echo "<td>" . $row['name'] .'<br/>'.$row['edate'] ."</td>";
                     echo "<td>" . $row['janpad'] . "</td>";
                    // echo "<td>" . $row['ration'] .' Balance-'. $rs->current_balance . "</td>";
?>

<td class="px-6 py-2 pb-0 whitespace-nowrap">
    <!-- <span class="badge badge-secondary">Adhar: <?php echo $row['adhar']; ?></span>
    <br/> -->
    <?php echo $row['ration']; ?> 
    <!-- <br/> -->

    <?php  if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
        
    <button class="neditButton btn btn-success py-1 text-white " data-toggle="modal" data-target="#myModal" data-idd="<?php echo $row['id']; ?>">Check Detail</button>



    <?php } ?>


</td>

                <td class="px-6 py-2 pb-0 whitespace-nowrap">

                <?php
                if($_SESSION['role']=='admin'){ 
                 if(isset($bal->current_balance) && $bal->current_balance>=65){ 
                    if($cnt<1){
                   ?>
                    <button class="ndownload btn btn-success py-1 text-white" data-toggle="modal" data-target="#myModal2" data-idd="<?php echo $row['id']; ?>">Download Req</button>
               
               <?php }  }
                } ?>


                <?php if($cnt>=1){ ?>
                    <a class="d-none" href='dashboard1.php?idd=<?php echo $row['id'] ?>'>Download</a>
                    
                     <a target="_blank" href='<?php echo $row['pdf_path'] ?>'>Download PDF</a>
                    <?php } ?>
                
                </td>
                    <?php
                     
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>No users found</td></tr>";
            }
            $mysqli->close();
            ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#requestTable').DataTable();
    });
</script>




<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="">QR Code</h4>
        </div>
        <div class="modal-body">
          
<form action="" method="post" id="downloadReq" name="downloadReq">
  <div class="container my-4 shadow shadow-light" style="width:800px; border:1px solid gray; border-radius:10px">
    <div class="bg-light p-4 overflow-auto  flex flex-col mx-auto gap-y-5 h-800px w-650px">
      <div class="flex flex-row justify-center  p-4">
        <div class="text-xl font-bold text-center">
          Download Req Form
        </div>
      </div>

      <div class="d-flex justify-content-around">

      <div class="form-group font-bold" style="width:50%">
          <label for="ration_no">User ID:</label>
          <input type="text" class="form-control" readonly id="d_user_id" name="d_user_id" >
        </div>


        <div class="form-group font-bold" style="width:50%">
          <label for="ration_no">Ration Card No :</label>
          <input type="text" class="form-control" readonly id="ration_no" name="ration_no" >
        </div>

        <div class="form-group ml-2 font-bold" style="width:50%">
          <label for="rid">Ration ID :</label>
          <input type="text" class="form-control" readonly id="rid" name="rid">
        </div>
      </div>

      <div class="form-group mt-3">
        <button type="submit" class="btn btn-success btn-block">Save 2</button>
      </div>
    </div>
  </div>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>





<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

        <form action="" method="post" id="rationForm" name="rationForm" enctype="multipart/form-data">
  <div class="container my-4 shadow shadow-light" style="width:800px; border:1px solid gray; border-radius:10px">
    <div class="bg-light p-4 overflow-auto flex flex-col mx-auto gap-y-5 h-800px w-650px">
      
      <!-- Row 1 -->
      <div class="row">
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="ration_no">Rashan Card No :</label>
            <input type="text" class="form-control" id="dration_no"   name="ration_no" placeholder="Enter Your Rashan Card No.">
            <input type="hidden" id="frid" name="rid" >
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="town">Town :</label>
            <input type="text" class="form-control" id="town" name="town"   placeholder="Enter Your Home Town">
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="Janpad">जनपद</label>
            <input type="text" class="form-control" id="Janpad" name="Janpad"   placeholder="Enter Your Janpad Name">
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row">
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="mukhiya">Mukhiya Name</label>
            <input type="text" class="form-control" id="mukhiya" name="mukhiya" placeholder="Enter Your Mukhiya Name">
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="father">Father/Husbend Name</label>
            <input type="text" class="form-control" id="father" name="father" placeholder="Enter Name">
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="cast_certificate">Jati</label>
            <input type="text" class="form-control" id="cast_certificate" name="cast_certificate" placeholder="Enter Your Jati">
          </div>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="row">
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="adhar">Adhar/Enrollment No.</label>
            <input type="text" class="form-control" id="adhar"   name="adhar" placeholder="Enter Number" value="xxxx xxxx">
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="dukan_no">Dukandaar Name</label>
            <input type="text" class="form-control" id="dukan_no"   name="dukan_no" placeholder="">
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="form-group font-bold">
            <label for="unit">Unit No.</label>
            <input type="number" class="form-control"   id="unit" name="unit">
          </div>
        </div>
      </div>

      <!-- Row 4 -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group font-bold">
            <label for="address">Full Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter Your Address"></textarea>
          </div>
        </div>
        
        
          <div class="col-md-3">
          <div class="form-group font-bold">
            <label for="photoUpload">PDF Upload1</label>
            <input type="file" class="form-control-file" id="pdfUpload" name="pdfUpload" >
             <!--<img class="kpdf" src="" width="100px" /> -->
             <a class="kpdf" href="" target="_blank">Download PDF</a>'
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group font-bold">
            <label for="photoUpload">Photo Upload</label>
            <input type="file" class="form-control-file" id="photoUpload" name="photoUpload" accept="image/*">
            <img class="kphoto" src="" width="100px" />

          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group font-bold">
            <label for="screenshotUpload">Screenshot Upload</label>
            <input type="file" class="form-control-file" id="screenshotUpload" name="screenshotUpload" accept="image/*">
            <img class="kpariwar" src="" width="100px"  />
          </div>
        </div>
      </div>

      <!-- Row 5 -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group font-bold">
            <label for="gas_connection_no" >Gas Family Connection No.</label>
            <input type="text" class="form-control" id="gas_connection_no" name="gas_connection_no" placeholder="Enter Number">
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group mt-3">
        <button type="submit" class="btn btn-success btn-block">Save</button>
      </div>
    </div>
  </div>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $('.neditButton').click(function() {
        var idd = $(this).data('idd');
        // console.log(idd,"ffffffffffidd");
        $('#frid').val(idd);
            $.ajax({
                url: 'getRation.php',
                method: 'POST',
                data: { idd: idd },
                success: function(response1) {
                    var response = JSON.parse(response1);
                    $('#adhar').val(response.adhar);
                    $('#dration_no').val(response.ration);
                    $('#town').val(response.town);
                    $('#mukhiya').val(response.mukhiya);
                    $('#father').val(response.father);
                    $('#cast_certificate').val(response.cast_certificate);
                    $('#address').val(response.address);
                    $('#gas_connection_no').val(response.gas_connection_no);
                    $('#unit').val(response.unit);
                    $('#dukan_no').val(response.dukan_no);
                    $('#Janpad').val(response.janpad);
                    $('.kphoto').attr('src', response.photo_path);
                    $('.kpariwar').attr('src', response.screenshot_path);
                    $('.kpdf').attr('href', response.pdf_path);
                    
                    

                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch userId from the server:', error);
                }
            });
        });


        $(document).ready(function() {
        
            $('#rationForm').submit(function(event) {
    event.preventDefault();
    // Create a new FormData object
    var formData = new FormData();
    // Add form fields to FormData object
    $(this).find('input, textarea, select').each(function() {
        var field = $(this);
        var fieldName = field.attr('name');
        var fieldValue = field.val();
        // Append to FormData
        formData.append(fieldName, fieldValue);
    });

    // Add file inputs to FormData object
     var pdfUpload = $('#pdfUpload')[0].files[0];
    if (pdfUpload) {
        formData.append('pdfUpload', pdfUpload);
    }
    
    
    
    var photoUpload = $('#photoUpload')[0].files[0];
    if (photoUpload) {
        formData.append('photoUpload', photoUpload);
    }

    var screenshotUpload = $('#screenshotUpload')[0].files[0];
    if (screenshotUpload) {
        formData.append('screenshotUpload', screenshotUpload);
    }

    $.ajax({
        type: 'POST',
        url: 'jqeditRation.php',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            console.log('API Response:', response);
            swal("Success!", "Your request was successful.", "success");
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            swal("Error!", "There was an error processing your request.", "error");
        }
    });
});



    });
        </script>



<script>
    $('.ndownload').click(function() {
        var idd = $(this).data('idd');
        $('#rid').val(idd);
            $.ajax({
                url: 'getRation.php',
                method: 'POST',
                data: { idd: idd },
                success: function(response1) {
                    var response = JSON.parse(response1);
                    $('#adhar').val(response.adhar);
                    $('#ration_no').val(response.ration);
                    $('#d_user_id').val(response.user_id);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch userId from the server:', error);
                }
            });
        });


        $(document).ready(function() {
        $('#downloadReq').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'jqdownloadRation.php',
                data: formData,
                success: function(response) {
                    // console.log('API Response:', response);
                    swal("Success!", "Your request was successful.", "success");
                },
                            error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
        </script>
        <?php include("footer.php");?>