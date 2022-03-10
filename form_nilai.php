<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Nilai Siswa</li>
      </ol>
    </nav>
<div class="container">
    <div class="container-fluid">
    <form action="form_nilai.php" method="POST" class="form-horizontal">
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="name" name="name" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="DDP">Dasar Dasar Pemrograman</option>
            <option value="BDI">Basis Data</option>
            <option value="WEB1">Pemrograman Web</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
        </div>
    </div>
    </form>
</div>
<!-- Menangkap data user -->
<?php
$proses = $_POST['proses'];
$name = $_POST['name'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

echo 'Proses: '. $proses;
echo '<br/>Nama: '. $name;
echo '<br/>Mata Kuliah: '. $matkul;
echo '<br/>Nilai UTS: '. $nilai_uts;
echo '<br/>Nilai UAS: '. $nilai_uas;
echo '<br/>Nilai Tugas: '. $nilai_tugas;

# IF Else Mandiri no.1
$total_nilai = ($nilai_uts*30/100) + ($nilai_uas*35/100) + ($nilai_tugas*30/100);
if ($total_nilai > 55) {
    echo '<br/>Siswa Dinyatakan: Lulus';
} else {
    echo '<br/>Siswa Dinyatakan: Tidak Lulus';
}

# IF Else Mandiri no.2
if ($total_nilai >= 85 && $total_nilai <= 100){
    echo "<br/>Nilai: A";
} elseif ($total_nilai >= 70 && $total_nilai <= 84){
    echo "<br/>Nilai: B";
} elseif ($total_nilai >= 56 && $total_nilai <= 69){
    echo "<br/>Nilai: C";
} elseif ($total_nilai >= 36 && $total_nilai <= 55){
    echo "<br/>Nilai: D";
} elseif ($total_nilai >= 0 && $total_nilai <= 54){
    echo "<br/>Nilai: E";
} else {
    echo "Nilai: I";
}

# IF Else Mandiri no.3
switch ($total_nilai) {
    case $total_nilai >= 85 && $total_nilai <= 100:
        echo "<br/>Predikat: Sangat Memuaskan";
        break;
    case $total_nilai >= 70 && $total_nilai <= 84:
        echo "<br/>Predikat: Memuaskan";
        break;
    case $total_nilai >= 56 && $total_nilai <= 69:
        echo "<br/>Predikat: Cukup";
        break;
    case $total_nilai >= 36 && $total_nilai <= 55:
        echo "<br/>Predikat: Kurang";
        break;
    case $total_nilai >= 0 && $total_nilai <= 54:
        echo "<br/>Predikat: Sangat Kurang";
        break;
    default:
        echo "<br/>Predikat: Tidak ada";
        break;
    }
?>
</body>
</html>