<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="text">masukan text</label>
        <input type="text" id="text" name="text">
        <button type="submit">Submit</button>
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["text"];

    if (preg_match_all('/[0-9]/', $string, $matches)) {
        echo "Teks : $string";
        echo "<br>";
        echo "teks mengandung angka: " . implode(", ", $matches[0]);
    } else {
        echo "Teks : $string";
        echo "<br>";
        echo "teks tidak mengandung angka.";
    }
}
?>
</body>
</html>