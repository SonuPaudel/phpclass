<?php
include 'db_conn.php';

$qry = "SELECT * FROM `students`";
$results = mysqli_query($conn, $qry);
// while ($row = mysqli_fetch_assoc($results)) {
//     echo
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h2 class="text-center my-3 font-bold text-3xl">Our Students</h2>
    <div class="px-36 grid grid-cols-4 gap-8">

        <?php
        while ($row = mysqli_fetch_assoc($results)) {

        ?>
            <div class="mt-2 bg-gray-200 p-5 rounded-lg shadow">
                <p>ID: <?php echo $row['id'] ?></p>
                <p>Name: <?php echo $row['name'] ?></p>
                <p>Phone: <?php echo $row['phone'] ?></p>
                <p>Address: <?php echo $row['address'] ?></p>
                <p>Email: <?php echo $row['email'] ?></p>
                <p>Faculty: <?php echo $row['faculty'] ?></p>


            </div>
        <?php } ?>
    </div>

</body>

</html>