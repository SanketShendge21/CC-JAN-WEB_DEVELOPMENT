<?php
include('config.php');
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
</head>

<body>
<div class="shead">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">

                <h2 class="title text-white">Notice Board</h2>

            </div>
        </div>
    </div>
    <div class="notice-body ">
        <!-- <h1>body</h1> -->
        <table id="notice-desc" class="table table-striped table-schedule">
            <thead>
                <tr>
                    <th width="15%" class="text-black  mt-10">Sr.No</th>
                    <th width="15%" class="text-black  mt-10">Date</th>
                    <th width="30%" class="text-black  mt-10">Title</th>
                    <th width="40%" class="text-black  mt-10">Description</th>
                </tr>
            </thead>
            <?php
            $i = 0;
            $sql = "SELECT * FROM notice order by date desc";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    echo '
            <tbody>
                <tr>
                    <th scope="row">' . ++$i . '</th>
                    <td>' . $rows['date'] . '</td>
                    <td>' . $rows['title'] . '</td>
                    <td>' . $rows['description'] . '</td>
                </tr>
               
            </tbody>';
                }
            }
            ?>
        </table>
    </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <script src="script/script.js"></script>
            <?php
            include('includes/footer.php');
            ?>
</body>

</html>