<?php
include "connector.php";

if (isset($_GET['NIM'])) {
    $nim = $_GET['NIM'];
    // Get photo filename to delete the file as well
    $result = mysqli_query($conn, "SELECT foto FROM mhs WHERE NIM='$nim'");
    $data = mysqli_fetch_assoc($result);
    $foto = $data['foto'];

    // Delete from database
    $sql = "DELETE FROM mhs WHERE NIM='$nim'";
    if (mysqli_query($conn, $sql)) {
        // Optionally delete the photo file
        if ($foto && file_exists("img/$foto")) {
            unlink("img/$foto");
        }
        header("Location: display.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No NIM specified.";
}
?>