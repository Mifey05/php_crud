<?php
include "connector.php";
$sql = "SELECT * FROM MHS";
$result = mysqli_query($conn, $sql);

$mhs = [];
if ($result){
    $mhs = mysqli_fetch_all ($result, MYSQLI_ASSOC);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body { background-color: gray; }
        p {color:white}
        h1 {color:white}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le database</title>
</head>
<body>
    <h1>Le Daftar Mahasiswa</h1>
    <h2><a href="form.php">Want to add another data?</a></h2>
    <?php if (count($mhs) > 0) :?>
    <table border=1 cellpadding=4>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php $i = 1;?>
<?php foreach ($mhs as $row):?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['Nama']?></td>
        <td><?php echo $row['NIM']?></td>
        <td><?php echo $row['Jurusan']?></td>
        <td><?php echo $row['Email']?></td>
        <td><img src="img/<?php echo $row['foto']?>"></td>
        <td>
            <a href="update.php?NIM=<?php echo $row['NIM']; ?>">Edit</a> |
            <a href="rusure.php?NIM=<?php echo $row['NIM']; ?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
        </td>
    </tr>
    <?php $i++;?>
<?php endforeach;?>
        </tbody>
    </table>
<?php else:?>
    <p>Data not found</p>
<?php endif;?>
</body>
</html>