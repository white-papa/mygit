<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guestbook</title>
<style>
    /* CSS for making the table responsive */
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    @media only screen and (max-width: 600px) {
        /* Adjustments for smaller screens */
        th, td {
            font-size: 12px;
        }
    }
</style>
</head>
<body>
<h3>Comment from guests </h3> 
<table>
    <?php
    // Connect to server and select database.
    include("config.php");

    $sql = "SELECT * FROM guestbook";
    $objQuery = mysqli_query($objCon, $sql);
    ?>

    <?php while ($rows = mysqli_fetch_array($objQuery)) { ?>
        <tr>
            <td><?php echo $rows['comment']; ?>
                <br></br>
                <?php echo $rows['name']; ?> 
                <?php echo date('d/m/y', strtotime($rows['datetime'])); ?>
            </td>
        </tr>
    <?php } ?>

</table>

<?php mysqli_close($objCon); ?>

</body>
</html>