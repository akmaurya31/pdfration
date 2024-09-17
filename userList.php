<?php require_once("header.php");
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
} else {
    header("Location: dashboard.php");
    exit();
}
?>

<div class="container mb-4 mx-auto max-w-[1350px] pt-5">
    <h3 class="text-center text-2xl font-bold py-2">🧑All User List🧑</h3>
    
    <div class="overflow-x-auto">
        <table id="userTable" class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-100 text-black">
                <tr>
                    <th class="px-6 py-3">No.</th>
                    <th class="px-6 py-3">Name/Email</th>
                    <th class="px-6 py-3">Address</th>
                    <th class="px-6 py-3">Contact Name </th>
                    <th class="px-6 py-3">Plan Status</th>
                    <th class="px-6 py-3">Transaction ID / UTR</th>
                    <th class="px-6 py-3">Current Balance</th>
                    <th class="px-6 py-3">Pay Date</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php
                require_once("dbConnection.php");
                $sql = "SELECT * FROM users";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $rs = getCurWallet($mysqli, $row['id']);
                        $rscurr = isset($rs->current_balance) && $rs->current_balance > 0 ? $rs->current_balance : 0;
                ?>
                        <tr>
                            <td class="px-6 py-4 font-bold"><?php echo $row['id']; ?></td>
                            <td class="px-6 py-4 font-bold"><?php echo $row['name']; ?><br /><?php echo $row['email']; ?></td>
                            <td class="px-6 py-4 font-bold"><?php echo $row['address']; ?></td>
                            <td class="px-6 py-4 font-bold text-green-700"><?php echo $row['contact_number']; ?><br/><?php echo $row['password']; ?></td>
                            <td class="px-6 py-4 font-bold text-color-red"><?php echo $row['pay']; ?></td>
                            <td class="px-6 py-4 font-bold"><?php echo $row['transaction_id']; ?></td>
                            <td class="px-6 py-4 font-bold"><?php echo $rscurr; ?></td>
                            <td class="px-6 py-4 font-bold"><?php echo $row['pay_date']; ?></td>
                            <td class="px-6 py-4 flex flex-col space-y-2">
                                <button class="neditButton bg-green-500 text-white py-1 px-2 rounded" data-toggle="modal" data-target="#myModal" data-userid="<?php echo $row['id']; ?>">ProfileEdit</button>
                                <button class="rechargeedit bg-purple-500 text-white py-1 px-2 rounded" data-toggle="modal" data-target="#myModal_recharge" data-userid="<?php echo $row['id']; ?>">Recharge</button>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='11' class='text-center px-6 py-4'>No users found</td></tr>";
                }
                $mysqli->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

 


<?php require_once("footer.php"); ?>

<script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "pageLength": 10,
            "lengthMenu": [5, 10, 25, 50]
        });
    });
</script>
