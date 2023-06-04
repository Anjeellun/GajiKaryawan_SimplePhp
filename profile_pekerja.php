<?php
$conn = mysqli_connect("localhost","root","","Data_Karyawan_Pt_Jel");
$result = mysqli_query($conn,"SELECT * from profile_pekerja");
$rows = [];
while($ambil = mysqli_fetch_array($result)){
    $rows[] = $ambil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan PT Jel</title>
</head>
<body>
    <table border ="1" cellpadding = "10" cellspacing = "0">
       <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
       </tr>
       <?php foreach($rows as $row):  $no = 1; ?>
       <tr> 
       <td><?php echo $no++; ?></td>
        <td><?= $row["NIP"] ?></td>
        <td><?= $row["Nama"] ?></td>
        <td><?= $row["Jenis Kelamin"] ?></td>
        <td><?= $row["Umur"] ?></td>
        <td><?= $row["Tanggal Lahir"] ?></td>
        <td><?= $row["Alamat"] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>

</body>
</html>