<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action='soal2c.php' method='POST'>
        <?php


        // $umur = $_POST['umur'];
        // $hobi = $_POST['hobi'];

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            echo "
                <table>
                    <tr>
                        <td>Umur Anda : </td>
                        <td>
                            <input type='text' name='umur'>
                            <input type='hidden' name='nama' value='$nama'>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type='submit' name='submit' value='SUBMIT'></td>
                    </tr>
                </table>
            ";
        }

        ?>
    </form>
</body>

</html>