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
					 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
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
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Library</a>
					</li>
					<li class="breadcrumb-item active">
						Data
					</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
        <form method="POST" action="form_nilaiUjian.php" class="m-5">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih matkul</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Data Warehouse">Data Warehouse</option>
        <option value="Rumah Aziz">Rumah Aziz</option>
        <option value="Rumah Ocid">Rumah Ocid</option>
        <option value="Rumah Thio">Rumah Thio</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="submit" class="btn btn-success">
    </div>
  </div>
</form>
		</div>
		<div class="col-md-4">
            <div class='m-5'>
        <?php
require_once 'class_nilaiMahasiswa.php';
if (isset($_POST['submit'])) {
    $n = new NilaiMahasiswa($_POST['matkul'],$_POST['nilai'],$_POST['nim']);
    $nilai = $_POST['nilai'];
    $grade = $n->grade($nilai); //langsung saja $n->grade($nilai)
    $hasil = $n->hasil($nilai); //langsung saja $n->hasil($nilai)
    echo 'NIM: '.$n->nim;
    echo '<br>';
    echo 'Matkul: '.$n->matkul;
    echo '<br>';
    echo 'Nilai: '.$nilai;
    echo '<br>';
    echo 'Grade: '.$grade;
    echo '<br>';
    echo 'Hasil: '.$hasil;
    echo '<br>';
}
?>
</div>
		</div>
	</div>
</div>









</body>
</html>