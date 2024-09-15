<?php require_once("header.php");  
require_once("dbConnection.php");     
// Number of results per page
$results_per_page = 10;

// Determine current page number from URL or set default to 1
$page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting limit for the query
$offset = ($page_number - 1) * $results_per_page;

// Determine the total number of rows for pagination
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $total_results_sql = "SELECT COUNT(*) as total FROM wallet";
} else {
    $total_results_sql = "SELECT COUNT(*) as total FROM wallet WHERE user_id='" . $_SESSION['idd'] . "'";
}
$total_results_result = $mysqli->query($total_results_sql);
$total_results = $total_results_result->fetch_assoc()['total'];
$total_pages = ceil($total_results / $results_per_page);

// Modify the main query to include LIMIT and OFFSET for pagination
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $sql = "SELECT * FROM wallet LIMIT $results_per_page OFFSET $offset";
} else {
    $sql = "SELECT * FROM wallet WHERE user_id='" . $_SESSION['idd'] . "' LIMIT $results_per_page OFFSET $offset";
}
$result = $mysqli->query($sql);
?>


<div class="container mx-auto   p-4 max-w-[1350px]">
        <div class="flex flex-row justify-between mb-4">
            <button type="button" 
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                   onclick="openModal()">
                Recharge
            </button>
        </div>

        <h4 class="text-2xl text-center bg-blue-600 text-white py-2 rounded font-bold mb-4">
            Wallet History
        </h4>

        <table id="walletTable" class="min-w-full bg-white divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="hidden px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="hidden px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        User ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Date
                    </th>
                    <th scope="col" class="hidden px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Paid Amount
                    </th>
                    <th scope="col" class="hidden px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Previous Balance
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
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='hidden px-6 py-4 whitespace-nowrap'>" . $row['id'] . "</td>";
                        echo "<td class='hidden px-6 py-4 whitespace-nowrap'>" . $row['user_id'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['date'] . "</td>";
                        echo "<td class='hidden px-6 py-4 whitespace-nowrap'>" . $row['recharge_actual_amt'] . "</td>";
                        echo "<td class='hidden px-6 py-4 whitespace-nowrap'>" . $row['prev_balance'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['recharge'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['used'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['current_balance'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['transaction'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' class='px-6 py-4 text-center'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Pagination Controls -->
        <div class="flex justify-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="inline-flex items-center -space-x-px">
                    <?php if ($page_number > 1): ?>
                        <li>
                            <a href="?page=<?php echo $page_number - 1; ?>" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l hover:bg-gray-100">
                                Previous
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li>
                            <a href="?page=<?php echo $i; ?>" class="<?php echo ($i == $page_number) ? 'px-3 py-2 text-sm font-medium text-white bg-blue-500 border border-blue-500' : 'px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300'; ?> rounded hover:bg-gray-100">
                                <?php echo $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($page_number < $total_pages): ?>
                        <li>
                            <a href="?page=<?php echo $page_number + 1; ?>" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r hover:bg-gray-100">
                                Next
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>

    <?php $mysqli->close(); ?>
</body>
</html>

    <?php require_once("footer.php"); 
  ?>
 
 

<!-- Modal -->
<div id="myModal" class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-75 flex items-center justify-center ">
  <div class="bg-white rounded-lg shadow-lg max-w-lg w-full">
    <div class="flex items-center justify-between p-4 border-b">
      <h4 class="text-lg font-semibold">QR Code</h4>
      <button type="button" id="closeModal" class="text-gray-500 hover:text-gray-700">
        &times;
      </button>
    </div>
    <div class="p-4">
      <img src="images/payment.jpeg" alt="Payment QR Code" class="w-full" />
    </div>
    <div class="flex justify-end p-4 border-t">
      <button type="button" id="closeModalFooter" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Close
      </button>
    </div>
  </div>
</div>

<!-- JavaScript to Handle Modal -->
<script>
  // Open Modal
  function openModal() {
    document.getElementById('myModal').classList.remove('hidden');
  }

  // Close Modal
  function closeModal() {
    document.getElementById('myModal').classList.add('hidden');
  }

  document.getElementById('closeModal').addEventListener('click', closeModal);
  document.getElementById('closeModalFooter').addEventListener('click', closeModal);
</script>

 

<script>
    $(document).ready(function() {
        $('#walletTable').DataTable();
    });
</script>
