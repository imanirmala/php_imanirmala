<?php include("database.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOBI</title>
</head>

<body>
    <div align="center">
        <h1>DAFTAR HOBI</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hobi</th>
            </tr>
            <?php
            $query_mysql = mysqli_query($con, "SELECT hobi.hobi, person.nama, person.alamat  FROM hobi INNER JOIN person ON hobi.person_id = person.id");

            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['hobi']; ?></td>
                </tr>
            <?PHP } ?>
        </table>
    </div>
</body>

</html>