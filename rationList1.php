<?php 
include('header.php'); 

$rlok = 'd-none';
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $rlok = '';
} 

require_once("dbConnection.php");

// Determine the query based on user role
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $sql = "SELECT * FROM ration_req ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM ration_req WHERE user_id='" . $_SESSION['idd'] . "' ORDER BY id DESC";
}

$result = $mysqli->query($sql);
?>

<div class="container my-4 mx-auto">
    <h4 class="text-xl text-center bg-blue-500 text-white py-2 my-4 rounded font-bold mx-auto w-[30%]">🧑All Ration List🛒</h4>
    
    <div class="max-w-[1350px] mx-auto">
        <table id="requestTable" class="w-full text-sm text-left rtl:text-right text-black-500">
            <thead class="bg-gray-100 border-b border-gray-200">
                <tr class="text-left">
                    <th class="px-6 py-3 font-bold text-gray-700">Sn</th>
                    <th class="<?php echo $rlok; ?> px-6 py-3 font-bold text-gray-700">User ID</th>
                    <th class="px-6 py-3 font-bold text-gray-700">Candidate Name</th>
                    <th class="px-6 py-3 font-bold text-gray-700">Janpad</th>
                    <th class="px-6 py-3 font-bold text-gray-700">Ration Card No.</th>
                    <th class="px-6 py-3 font-bold text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $m = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $cnt = ReqDownload($mysqli, $row['user_id'], $row['id']);
                    $bal = getCurWallet($mysqli, $row['user_id']);
                    $bbal = isset($bal->current_balance) && $bal->current_balance > 0 ? $bal->current_balance : 0;
                    $rs = getUserDataById($mysqli, $row['user_id']);

                    // Highlight if the request is downloaded
                    echo $cnt >= 1 ? "<tr class='bg-yellow-200'>" : "<tr class='bg-white-500'>";
                    ?>
                    <td class="px-6 py-3 font-bold"><?php echo $m . '00' . $row['id']; $m++; ?></td>
                    <td class="<?php echo $rlok; ?> px-6 py-3 text-md font-bold">
                        <?php
                        $yyh = getUserHeader($mysqli, $row['user_id']);
                        echo $yyh->contact_number . '<br/>Balance-' . $bbal;
                        ?>
                    </td>
                    <td class="px-6 py-3 text-md font-bold"><?php echo $row['name']; ?></td>
                    <td class="px-6 py-3 text-sm font-bold"><?php echo $row['janpad'] . '<br/>' . $row['edate']; ?></td>
                    <td class="px-6 py-3 text-md font-bold"><?php echo $row['ration']; ?></td>
                    <td class="px-6 py-3">
                        <?php if ($_SESSION['role'] == 'admin' && isset($bal->current_balance) && $bal->current_balance >= 65 && $cnt < 1) { ?>
                            <button class="ndownload bg-green-500 text-white py-1 px-2 rounded" data-toggle="modal" data-target="#myModal2" data-idd="<?php echo $row['id']; ?>" data-modal-target="popup-modal1" data-modal-toggle="popup-modal1">Download Req</button>
                        <?php } ?>
                        <?php if ($cnt >= 1) { ?>
                            <a class="text-blue-500 border-[3px] p-3 font-bold hover:underline" target="_blank" href='<?php echo $row['pdf_path']; ?>'>Download PDF</a>
                        <?php } ?>
                    </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6' class='text-center px-6 py-3'>No users found</td></tr>";
            }
            $mysqli->close();
            ?>
            </tbody>
        </table>

        <!-- DataTables handles pagination, so no manual pagination is needed -->
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#requestTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "pageLength": 10
        });
    });
</script>
