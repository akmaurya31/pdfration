<?php require_once("header.php");
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
}else{
  header("Location: dashboard.php");
  exit();
}
?>

<div class="container bg-light mb-4">
    <h3 class="text-center underline">All User List</h3>
    <button>Date <input type="date" id="edate" class="text-dark" /></button>
    <table class="table" id="ttble">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Name</th>
                <th scope="col">Password</th>
                <th scope="col">Plan Status</th>
                <th scope="col">Transaction ID /UTR</th>
                <th scope="col">Current Balance</th>
                <th scope="col">-</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php
            require_once("dbConnection.php");
            
            $sql = "SELECT * FROM users";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $rs=getCurWallet($mysqli,$row['id']);
                    // $rs->current_balance = isset($rs->current_balance) ? $rs->current_balance : 0;
                    // $rs->current_balance = isset($rs) && isset($rs->current_balance) ? $rs->current_balance : 0;
                    // $rs->current_balance = $rs && isset($rs->current_balance) ? $rs->current_balance : 0;
                    $rscurr=0;
                    if(isset($rs->current_balance)){
                        if($rs->current_balance>0){
                            $rscurr=$rs->current_balance;
                        }else{
                            $rscurr=0;
                        }
                    }
            ?>
                    <tr>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['id']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['name']; ?><br/><?php echo $row['janpad']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['username']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['email']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['contact_number']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['password']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['pay']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['transaction_id']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $rscurr; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap"><?php echo $row['pay_date']; ?></td>
                        <td class="px-6 py-2 pb-0 whitespace-nowrap">
                            <button class="neditButton btn btn-success py-1 text-white" data-toggle="modal" data-target="#myModal" data-userid="<?php echo $row['id']; ?>">Profile Edit</button>

                            <button class="planedit btn btn-success py-1 text-white" data-toggle="modal" data-target="#myModal_plan" data-userid="<?php echo $row['id']; ?>">Purchase Plan</button>

                            <button class="rechargeedit btn btn-success py-1 text-white" data-toggle="modal" data-target="#myModal_recharge" data-userid="<?php echo $row['id']; ?>">Recharge</button>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='9' class='px-6 py-4 text-center'>No users found</td></tr>";
            }
            $mysqli->close();
            ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Update User</h4> -->
            </div>
            <div class="modal-body">
                <form id="userForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="nname" name="name" />
                                <input type="hidden" class="form-control" id="nuid" name="uid" />
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="nemail" name="email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contactDetail">Contact Detail</label>
                                    <input type="text" class="form-control" id="ncontactDetail" name="contactDetail" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" />
                                </div>
                                
                            </div>
                           
                    </div>
                    <button type="submit" name="s1" id="s1" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal_plan" role="dialog">
    <div class="modal-dialog modal-lg"> <!-- Added modal-lg for larger modal size -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Plan</h4> <!-- Uncommented and renamed the modal title -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="pform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pdetail">User Detail</label> <!-- Added label for user detail -->
                                <input type="text" class="form-control" id="puid" name="puid" readonly> <!-- Changed to text input and set readonly -->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="plan">Choose Plan</label>
                                <select class="form-control" id="plan" name="plan">
                                    <option value="" selected>Select plan</option> <!-- Added selected attribute to the default option -->
                                    <option value="400">400</option>
                                    <!-- Uncommented and added other plan options -->
                                    <!-- <option value="850">850 for 2 months</option>
                                    <option value="1500">1500 for 3 months</option>
                                    <option value="2500">2500 for 4 months</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="transaction_id">Transaction ID/UTR</label>
                                <input type="text" class="form-control" id="transaction_id" name="transaction_id">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pay_date">Payment Date</label>
                                <input type="date" class="form-control" id="pay_date" name="pay_date">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="s1" id="s1" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal_recharge" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Recharge Details</h4> -->
            </div>
            <div class="modal-body">
                <form id="rform">
                    <div class="row">
                        <input type="hidden" class="form-control" id="r_id" name="r_id" />
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" class="form-control" id="r_amount" name="r_amount" />
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="transaction_id">Transaction ID/ UTR</label>
                                <input type="text" class="form-control" id="r_transaction_id" name="r_transaction_id" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="pay_date">Date</label>
                                <input type="date" class="form-control" id="r_pay_date" name="r_pay_date" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="s1" id="s1" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



 
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="">QR Code</h4>
        </div>
        <div class="modal-body">
          <img src="images/payment.jpeg" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script>
    $('.neditButton').click(function() {
        var userId = $(this).data('userid');
            $.ajax({
                url: 'getUser.php',
                method: 'POST',
                data: { uid: userId },
                success: function(response1) {
                    var response = JSON.parse(response1);
                    $('#nname').val(response.name);
                    $('#nuid').val(userId);
                    $('#username').val(response.username);
                    $('#password').val(response.password);
                    $('#nemail').val(response.email);
                    $('#ncontactDetail').val(response.contact_number);
                    $('#pay_date').val(response.pay_date);
                    var status = response.pay;
                    $('#status').val(status);
                    $('#contactDetail').val(response.contactDetail);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch userId from the server:', error);
                }
            });
        });
    $(document).ready(function() {
        $('#userForm').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'jqeditUser.php',
                data: formData,
                success: function(response) {
                    console.log('API Response:', response);
                    swal("Success!", "Your request was successful.", "success");
                },
                            error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>



<script>
    $('.planedit').click(function() {
        var userId = $(this).data('userid');
            $.ajax({
                url: 'getUser.php',
                method: 'POST',
                data: { uid: userId },
                success: function(response1) {
                    var response = JSON.parse(response1);
                    $('#puid').val(userId);
                    $('#pay_date').val(response.pay_date);
                    var status = response.pay;
                    $('#status').val(status);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch userId from the server:', error);
                }
            });
        });
    $(document).ready(function() {
        $('#pform').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'jqeditPlan.php',
                data: formData,
                success: function(response) {
                    console.log('API Response:', response);
                    swal("Success!", "Your request was successful.", "success");
                },
                            error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>




<script>
    $('.rechargeedit').click(function() {
        var userId = $(this).data('userid');
            $.ajax({
                url: 'getUser.php',
                method: 'POST',
                data: { uid: userId },
                success: function(response1) {
                    var response = JSON.parse(response1);
                    $('#r_id').val(userId);
                    $('#pay_date').val(response.pay_date);
                    var status = response.pay;
                    $('#status').val(status);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch userId from the server:', error);
                }
            });
        });
    $(document).ready(function() {
        $('#rform').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'jqeditRecharge.php',
                data: formData,
                success: function(response) {
                    console.log('API Response:', response);
                    swal("Success!", "Your request was successful.", "success");
                },
                            error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('#ttble').DataTable();
    });
</script>

  <?php require_once("footer.php");  ?>