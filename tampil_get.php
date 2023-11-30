<html>

<head>

<body>
    <h3>Tampilan Form Post PHP</h3>

    <?php
    // Define variables and set to empty values
    $namaErr = $emailErr = $genderErr = "";
    $nama = $email = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (empty($_GET["nama"])) {
            $namaErr = "*Nama wajib diisi";
        } else {
            $nama = $_GET["nama"];
        }

        if (empty($_GET["email"])) {
            $emailErr = "*Email wajib diisi";
        } else {
            $email = $_GET["email"];
        }

        if (empty($_GET["gender"])) {
            $genderErr = "*Jenis Kelamin wajib diisi";
        } else {
            $gender = $_GET["gender"];
        }
    }
    ?>

    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama">
        <span style="color: red;"><?php echo $namaErr; ?></span>
        <br><br>

        Email: <input type="text" name="email">
        <span style="color: red;"><?php echo $emailErr; ?></span>
        <br><br>

        Jenis Kelamin:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span style="color: red;"><?php echo $genderErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (!empty($nama) && !empty($email) && !empty($gender)) {
        echo '<h3>Data yang diinput:</h3>';
        echo 'Nama ' . $nama . '<br>';
        echo 'Email ' . $email . '<br>';
        echo 'Jenis Kelamin : ' . $gender . '<br>';
    }
    ?>

    <h3>Penjumlahan PHP</h3>

    <?php
    $a = isset($_GET["a"]) ? (int)$_GET["a"] : 0;
    $b = isset($_GET["b"]) ? (int)$_GET["b"] : 0;
    $c = $a + $b;
    ?>

    Nilai a = <?php echo $a; ?>
    <br>
    Nilai b = <?php echo $b; ?>
    <br>
    Jumlah a dan b adalah = <?php echo $c; ?>
</body>
</head>

</html>