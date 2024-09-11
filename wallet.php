<?php require_once("header.php");  
require_once("dbConnection.php");     ?>

<div class="">
   
</div>
<div class="container bg-gray-300 mx-auto">
    <div class="flex flex-row justify-between d-none">
        <!-- <h1 class="text-2xl text-center font-bold p-2 pt-4 rounded-lg m-3">Wallet History</h1> -->
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
            <button type="button" 
                    class="btn btn-primary"
                    data-toggle="modal" data-target="#myModal2">Recharge Admin</button>
        <?php endif; ?>
    </div>

    <div class="flex flex-row justify-between">
        <button type="button" 
                class="btn btn-primary"
                data-toggle="modal" data-target="#myModal">Recharge</button>
    </div>

    <h4 class="text-2xl text-center bg-info text-white py-2 rounded font-bold">Wallet History</h4>
    <table id="walletTable" class="table table-striped table-bordered">
        <thead class="bg-gray-50">
    <!-- <table id="walletTable" class="min-w-full divide-y divide-gray-200"> -->
        <!-- <thead class="bg-gray-50"> -->
            <tr>
                <th scope="col" class="d-none px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    id
                </th>
                <th scope="col" class="d-none px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    user id
                </th>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    Date
                </th>
                <th scope="col" class="d-none px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    Paid Amount
                </th>
                <th scope="col" class="d-none px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    Pre Balance
                </th>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    Credit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    Debit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    Current Balance
                </th>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                    Transaction ID
                </th>


               
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                $sql = "SELECT * FROM wallet";
            } else {
                $sql = "SELECT * FROM wallet WHERE user_id='" . $_SESSION['idd'] . "'";
            }
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='d-none px-6 py-4 whitespace-nowrap'>" . $row['id'] . "</td>";
                    echo "<td class='d-none px-6 py-4 whitespace-nowrap'>" . $row['user_id'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['date'] . "</td>";
                    echo "<td class='d-none px-6 py-4 whitespace-nowrap'>" . $row['recharge_actual_amt'] . "</td>";
                    echo "<td class='d-none px-6 py-4 whitespace-nowrap'>" . $row['prev_balance'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['recharge'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['used'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['current_balance'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['transaction'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='px-6 py-4 text-center'>No records found</td></tr>";
            }
            $mysqli->close();
            ?>
        </tbody>
    </table>
</div>



    <?php require_once("footer.php"); 
  ?>
 
 

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="d-none">QR Code</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <img src="images/payment.jpeg" style="width:470px" />
        </div>
        <div class="modal-footer d-none">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- <script>
$(document).ready(function() {
    $('#walletTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true
    });
});
</script> -->


<script>
    $(document).ready(function() {
        $('#walletTable').DataTable();
    });
</script>
