<?php
include_once 'class_mahasiswa.php';

$mahasiswa1 = new Mahasiswa(123,"Abdurrahman Al Aziz",2021,"Psikologi",4.0);
$mahasiswa2 = new Mahasiswa(132,"Rasyid Ammar Mujaddid",2021,"Sistem Informasi",3.0);
$mahasiswa3 = new Mahasiswa(213,"Zharfan Hamid",2021,"Seni Tari",2.0);
$mahasiswa4 = new Mahasiswa(231,"Thio Pratama",2021,"Pendidikan Agama Kristen",1.0);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Messages</a>
                    </li>
                    <li class="nav-item dropdown ml-md-auto">
                         <a class="nav-link dropdown-toggle" href="http://www.instagram.com/12_aziz" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                             <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider">
                            </div> <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">
                        Inilah Babu
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                        <div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Tahun Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $mahasiswa1->nim ?></td>
                <td><?php echo $mahasiswa1->nama ?></td>
                <td><?php echo $mahasiswa1->prodi ?></td>
                <td><?php echo $mahasiswa1->thn_angkatan ?></td>
                <td><?php echo $mahasiswa1->ipk ?></td>
                <td><?php echo $mahasiswa1->predikat_ipk() ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $mahasiswa2->nim ?></td>
                <td><?php echo $mahasiswa2->nama ?></td>
                <td><?php echo $mahasiswa2->prodi ?></td>
                <td><?php echo $mahasiswa2->thn_angkatan ?></td>
                <td><?php echo $mahasiswa2->ipk ?></td>
                <td><?php echo $mahasiswa2->predikat_ipk() ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $mahasiswa3->nim ?></td>
                <td><?php echo $mahasiswa3->nama ?></td>
                <td><?php echo $mahasiswa3->prodi ?></td>
                <td><?php echo $mahasiswa3->thn_angkatan ?></td>
                <td><?php echo $mahasiswa3->ipk ?></td>
                <td><?php echo $mahasiswa3->predikat_ipk() ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php echo $mahasiswa4->nim ?></td>
                <td><?php echo $mahasiswa4->nama ?></td>
                <td><?php echo $mahasiswa4->prodi ?></td>
                <td><?php echo $mahasiswa4->thn_angkatan ?></td>
                <td><?php echo $mahasiswa4->ipk ?></td>
                <td><?php echo $mahasiswa4->predikat_ipk() ?></td>
            </tr>
        </tbody>
    </table>
</div>
                        </p>
                    </div>
                    <div class="card-footer">
                        Hidup Untuk Mati
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>