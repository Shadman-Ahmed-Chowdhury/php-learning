<?php
include_once 'dbconnection.php';
$result = mysqli_query($conn, "SELECT * FROM employee");
?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- library bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="container-fluid ">

            <!-- table user all  -->
            <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["first_name"]; ?></td>
                            <td><?php echo $row["last_name"]; ?></td>
                            <td><?php echo $row["city_name"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <?php
                    // close connection database
                    mysqli_close($conn);
                    ?>

                </tbody>
            </table>
        </div>
    </div>


    <!-- js -->
    <script>
        // function data table
        $(document).ready(function() {
            $('#tableHorizontalWrapper').DataTable({
                "scrollX": true
            });

            $('.dataTables_length').addClass('bs-select');
        });
    </script>
</body>

</html>