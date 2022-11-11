<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $hobi = $_POST['hobi'];
            echo "
                    <table>
                        <tr>
                            <td>Nama : </td>
                            <td>$nama</td>
                        </tr>
                        <tr>
                            <td>Umur : </td>
                            <td>$umur</td>
                        </tr>
                        <tr>
                            <td>Hobi : </td>
                            <td>$hobi</td>
                        </tr>
                    </table>
                ";
        }
        ?>
</body>

</html>