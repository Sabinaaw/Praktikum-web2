<?php
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// Jika tombol submit diklik, proses nilai
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai_input = $_POST["nilai"];
    $hasil = tentukan_nilai($nilai_input);
} else {
    $nilai_input = "";
    $hasil = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
</head>
<body>
    <h2>Form Nilai</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nilai">Masukkan Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" value="<?php echo $nilai_input; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Hasil: " . $hasil;
    }
    ?>
</body>
</html>
