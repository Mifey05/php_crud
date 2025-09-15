<?php
include "connector.php";
if (isset($_POST['submit'])){
    $nama = $_POST['Nama'];
    $nim = $_POST['NIM'];
    $jurusan = $_POST['Jurusan'];
    $email = $_POST['Email'];

    $foto  = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $folder = "img/";

    if(move_uploaded_file($tmp, $folder.$foto)){
        $sql = "INSERT INTO mhs(Nama, NIM, Jurusan, Email, foto)
                VALUES ('$nama', '$nim', '$jurusan', '$email', '$foto')";
        if (mysqli_query($conn,$sql)){
            echo "New record created successfully";
            header("Location: display.php");
        } else {
            echo "Error: ". $sql ."<br>". mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body { background-color: gray; }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Add data</h2>
    <form method="POST" enctype="multipart/form-data">
        Nama: <input type="text" name="Nama" required><br><br>
        NIM: <input type="text" name="NIM" required><br><br>
        Jurusan: <input type="text" name="Jurusan" required><br><br>
        Email: <input type="email" name="Email" required><br><br>
        Foto: <input type="file" name="foto" required><br><br>
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>