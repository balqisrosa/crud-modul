<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <a href="index.php">Kembali Ke Beranda</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        // Show message when user added
        echo "Tambah Data Berhasil. <a href='index.php'>Lihat Data</a>";
    }
    ?>
</body>

</html>