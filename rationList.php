<?php
include('header.php'); 
$rlok = 'd-none';
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $rlok = '';
}
require_once("dbConnection.php");

// Number of records per page
$records_per_page = 10;

// Get the current page number from the URL, default to 1
$page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting record for the current page
$start_from = ($page_number - 1) * $records_per_page;

// Get the search term from the GET request
$search = isset($_GET['search']) ? $mysqli->real_escape_string($_GET['search']) : '';

// Determine the total number of records with or without search
if (!empty($search)) {
    if ($_SESSION['role'] == 'admin') {
        $sql = "SELECT COUNT(*) FROM ration_req WHERE 
                (name LIKE '%$search%' OR ration LIKE '%$search%' OR user_id IN (SELECT id FROM users WHERE contact_number LIKE '%$search%')) ORDER BY id ASC";
    } else {
        $sql = "SELECT COUNT(*) FROM ration_req WHERE user_id='" . $_SESSION['idd'] . "' AND 
                (name LIKE '%$search%' OR ration LIKE '%$search%') ORDER BY id ASC";
    }
} else {
    // Original query without search
    if ($_SESSION['role'] == 'admin') {
        $sql = "SELECT COUNT(*) FROM ration_req";
    } else {
        $sql = "SELECT COUNT(*) FROM ration_req WHERE user_id='" . $_SESSION['idd'] . "'";
    }
}

$result = $mysqli->query($sql);
$row = $result->fetch_row();
$total_records = $row[0];

// Calculate the total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Fetch records with or without search
if (!empty($search)) {
    if ($_SESSION['role'] == 'admin') {
        $sql = "SELECT * FROM ration_req WHERE 
                (name LIKE '%$search%' OR ration LIKE '%$search%' OR user_id IN (SELECT id FROM users WHERE contact_number LIKE '%$search%')) 
                ORDER BY id DESC LIMIT $start_from, $records_per_page";
    } else {
        $sql = "SELECT * FROM ration_req WHERE user_id='" . $_SESSION['idd'] . "' AND 
                (name LIKE '%$search%' OR ration LIKE '%$search%') 
                ORDER BY id DESC LIMIT $start_from, $records_per_page";
    }
} else {
    // Original query without search
    if ($_SESSION['role'] == 'admin') {
        $sql = "SELECT * FROM ration_req ORDER BY id DESC LIMIT $start_from, $records_per_page";
    } else {
        $sql = "SELECT * FROM ration_req WHERE user_id='" . $_SESSION['idd'] . "' ORDER BY id DESC LIMIT $start_from, $records_per_page";
    }
}

$result = $mysqli->query($sql);
?>

<div class="container my-4 mx-auto">
    <h4 class="text-xl text-center bg-blue-500 text-white py-2 my-4 rounded font-bold mx-auto w-[30%]">🧑All Ration List🛒</h4>

    <div class="max-w-[1350px] mx-auto text-center py-2">
    <!-- Search form -->
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search by Mobile, Name or Ration Card" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" class="border p-2 w-[50%]" />
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Search</button>
        </form>
    </div>

    <div class="max-w-[1350px] mx-auto">
        <table id="requestTable" class="w-full text-sm text-left rtl:text-right text-black-500 ">
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

                    echo $cnt >= 1 ? "<tr class='bg-yellow-200'>" : "<tr class='bg-white-500'>";
                    ?>
                    <td class="px-6 py-3 font-bold"><?php echo $m . '00' . $row['id']; $m++; ?></td>
                    <td class="<?php echo $rlok; ?> px-6 py-3 text-md font-bold">
                        <?php
                        $yyh = getUserHeader($mysqli, $row['user_id']);
                        echo $yyh->contact_number . '<br/>Balance-' . $bbal;
                        ?>
                    </td>
                    <td class="px-6 py-3 text-md font-bold"><?php echo $row['name'] ?></td>
                    <td class="px-6 py-3 text-sm font-bold"><?php echo $row['janpad'] . '<br/>' . $row['edate']; ?></td>
                    <td class="px-6 py-3 text-md font-bold"><?php echo $row['ration'] . '<br/>'; ?>
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
                            <button class="neditButton bg-green-500 text-white py-1 px-2 rounded" data-toggle="modal" data-target="#myModal" data-idd="<?php echo $row['id']; ?>" 
                            data-modal-target="popup-modal" data-modal-toggle="popup-modal">Check Detail</button>
                        <?php } ?>
                    </td>
                    <td class="px-6 py-3">
                        <?php
                        if ($_SESSION['role'] == 'admin' && isset($bal->current_balance) && $bal->current_balance >= 65 && $cnt < 1) {
                            ?>
                            <button class="ndownload bg-green-500 text-white py-1 px-2 rounded" data-toggle="modal" data-target="#myModal2" data-idd="<?php echo $row['id']; ?>"
                            data-modal-target="popup-modal1" data-modal-toggle="popup-modal1">Download Req</button>
                            <?php
                        }
                        if ($cnt >= 1) {
                            ?>
                            <a class="text-blue-500 border-[3px] p-3 font-bold hover:underline" target="_blank" href='<?php echo $row['pdf_path']; ?>'>Download PDF</a>
                            <?php
                        }
                        ?>
                    </td>
                    <?php
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='text-center px-6 py-3'>No users found</td></tr>";
            }
            $mysqli->close();
            ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-4 mx-auto">
            <div>
                <span class="text-gray-600">Page <?php echo $page_number; ?> of <?php echo $total_pages; ?></span>
            </div>
            <div>
                <?php if ($page_number > 1) { ?>
                    <a href="?page=<?php echo $page_number - 1; ?>&search=<?php echo $search; ?>" class="bg-blue-500 text-white py-1 px-4 rounded">Previous</a>
                <?php } ?>
                <?php if ($page_number < $total_pages) { ?>
                    <a href="?page=<?php echo $page_number + 1; ?>&search=<?php echo $search; ?>" class="bg-blue-500 text-white py-1 px-4 rounded">Next</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

 
 

    
            <!-- Modal Download Req -->
    <div id="popup-modal1" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
 
       
             
            <div class="modal-body p-4">
                <form action="" method="post" id="downloadReq" name="downloadReq">
                    <div class="container mx-auto bg-white shadow-lg border border-gray-300 rounded-lg p-6">
                        <div class="text-xl font-bold text-center mb-4">
                            Download Req Form
                        </div>
                        <div class="flex flex-wrap -mx-2 mb-4">
                            <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                                <label for="d_user_id" class="block text-gray-700 font-bold mb-2">User ID:</label>
                                <input type="text" class="form-control bg-gray-100 border border-gray-300 rounded-lg p-2 w-full" readonly id="d_user_id" name="d_user_id">
                            </div>
                            <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                                <label for="ration_no" class="block text-gray-700 font-bold mb-2">Ration Card No:</label>
                                <input type="text" class="form-control bg-gray-100 border border-gray-300 rounded-lg p-2 w-full" readonly id="ration_no" name="ration_no">
                            </div>
                            <div class="w-full md:w-1/2 px-2">
                                <label for="rid" class="block text-gray-700 font-bold mb-2">Ration ID:</label>
                                <input type="text" class="form-control bg-gray-100 border border-gray-300 rounded-lg p-2 w-full" readonly id="rid" name="rid">
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">Save 2</button>
                        </div>
                    </div>
                </form>
            </div>
             
        
    </div>
 




            <!-- Modal Check Detail -->

    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

            
            <div class="modal-body p-4">
                <form action="" method="post" id="rationForm" name="rationForm" enctype="multipart/form-data">
                    <div class="container mx-auto bg-white shadow-lg border border-gray-300 rounded-lg p-6">
                        <!-- Row 1 -->
                        <div class="flex flex-wrap -mx-2 mb-4">
                            <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                                <label for="dration_no" class="block text-gray-700 font-bold mb-2">Rashan Card No:</label>
                                <input type="text" class="form-control bg-gray-100 border border-gray-300 rounded-lg p-2 w-full" id="dration_no" name="ration_no" placeholder="Enter Your Rashan Card No.">
                                <input type="hidden" id="frid" name="rid">
                            </div>

                            <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                                <label for="mukhiya" class="block text-gray-700 font-bold mb-2">Mukhiya Name:</label>
                                <input type="text" class="form-control bg-gray-100 border border-gray-300 rounded-lg p-2 w-full" id="mukhiya" name="mukhiya" placeholder="Enter Your Mukhiya Name">
                            </div>
                          
                            <div class="w-full md:w-1/3 px-2">
                                <label for="Janpad" class="block text-gray-700 font-bold mb-2">जनपद:</label>
                                <input type="text" class="form-control bg-gray-100 border border-gray-300 rounded-lg p-2 w-full" id="Janpad" name="Janpad" placeholder="Enter Your Janpad Name">
                            </div>
                        </div>


                <div class="w-full md:w-1/3 px-2 mb-4 md:mb-0">
                    <label for="DrivePath" class="block text-gray-700 font-bold mb-2">DrivePath File:</label>
                    <input type="text" class="form-control-file border border-gray-300 rounded-lg p-2 w-full" id="DrivePath" name="DrivePath" placeholder="Enter or view the drive path">
                    <a class="kpdf text-blue-500 hover:underline mt-2 block" href="https://drive.google.com/path/to/your/file" target="_blank">View DrivePath File</a>
                </div>

 
                        </div>

                      
                        <!-- Submit Button -->
                        <div class="form-group mt-4">
                            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">Save</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>



  <script>    $('.neditButton').click(function() {
        var idd = $(this).data('idd');
        // console.log(idd,"ffffffffffidd");
        $('#frid').val(idd);
            $.ajax({
                url: 'getRation',
                method: 'POST',
                data: { idd: idd },
                success: function(response1) {
                    var response = JSON.parse(response1);
                    $('#dration_no').val(response.ration);
                    $('#mukhiya').val(response.mukhiya);
                    $('#DrivePath').val(response.pdf_path);
                    $('#Janpad').val(response.janpad);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch userId from the server:', error);
                }
            });
        });


 $(document).ready(function() {
        
 $('#rationForm').submit(function(event) {
    event.preventDefault();
    var formData = new FormData();
    $(this).find('input, textarea, select').each(function() {
        var field = $(this);
        var fieldName = field.attr('name');
        var fieldValue = field.val();
        formData.append(fieldName, fieldValue);
    });
  
    $.ajax({
        type: 'POST',
        url: 'jqeditRation',
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
        
    $('.ndownload').click(function() {
        var idd = $(this).data('idd');
        $('#rid').val(idd);
            $.ajax({
                url: 'getRation',
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
                url: 'jqdownloadRation',
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