<footer class="bg-gray-900 text-white py-6 mt-9 ">
    <div class="container max-w-[1350px] mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Left section: Google Map -->
            <div class="mb-4 md:mb-0">
                <h5 class="text-lg font-semibold mb-2">Find Us</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14237.812400895653!2d80.9028749!3d26.8573419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdd6848c682b%3A0x49fb17f07b432f18!2sAMRISH%20DIGITAL%20CSC%20CENTER%20JAN%20SEVA%20KENDRA!5e0!3m2!1sen!2sin!4v1726378678458!5m2!1sen!2sin" width="300" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <a href="https://www.google.com/maps" target="_blank" class="text-blue-400 hover:text-blue-300">
                    <svg class="w-6 h-6 inline mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2c-5.5 0-10 4.5-10 10s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-.5-13h-1v3h1V7zm0 4h-1v6h1v-6zm2.5 4h-1v-6h1v6z"></path>
                    </svg>
                    Google Maps
                </a>
            </div>

            <!-- Center section: eCommerce Website -->
            <div class="mb-4 md:mb-0">
                <h5 class="text-lg font-semibold mb-2">Shop With Us</h5>
                <a href="#" target="_blank" class="text-blue-400 hover:text-blue-300">
                    <svg class="w-6 h-6 inline mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 7h-2.3l-1.8-5H7.1L5.3 7H3c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-7 11h-2v-2h2v2zm0-4h-2V7h2v7z"></path>
                    </svg>
                    eCommerce Website
                </a>
            </div>

            <!-- Right section: Government Website -->
            <div>
                <h5 class="text-lg font-semibold mb-2">Government Portal</h5>
                <a href="#" target="_blank" class="text-blue-400 hover:text-blue-300">
                    <svg class="w-6 h-6 inline mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 12l-10 10-10-10 10-10 10 10z"></path>
                    </svg>
                    Digital Seva Portal - CSC
                </a>
            </div>
        </div>
        
        <!-- Bottom section: Footer Note -->
        <div class="text-center mt-6">
            <p class="text-sm">&copy; 2024 Amrish Digital Center. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function() {
        $('#requestTable').DataTable({
            "paging": true,         // Enable pagination
            "searching": true,      // Enable search
            "ordering": true,       // Enable column ordering
            "pageLength": 10        // Number of rows per page
        });
    });
</script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>