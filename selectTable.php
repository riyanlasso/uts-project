<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Product</title>
</head>

<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Nama Product</td>
            <td>Harga</td>
        </tr>
        <?php
        include "koneksi.php";

        $query = "SELECT * FROM product";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["product_name"] ?></td>
                    <td><?php echo $row["harga"] ?></td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>

</html>