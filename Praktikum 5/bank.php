<?php

use BankAccount as GlobalBankAccount;

class Account{
    public $nomor;
    public $saldo;
    public $total;

    public function __construct($no,$saldo){
        $this->nomor = $no;
        $this->saldo = $saldo;

    }

    public function deposit($depo){
        global $total;
        $deposit = $depo + $this->saldo;
        $total = $deposit;
        echo "
        Saldo anda  : Rp.$this->saldo <br>
        Menabung sebesar : Rp.$depo <br>
        Saldo sekarang   : Rp.$deposit <br>
        ";
        $this->saldo = $total;
        return $total;
    }
    
    public function withdraw($wd){
        global $total;
        $wdr = $this->saldo - $wd;
        $total = $wdr;
        if ($this->saldo >= $wd) {
            echo "
            Saldo anda  : Rp.$this->saldo <br> 
            Mengambil sebesar : Rp.$wd <br> 
            Saldo sekarang    : Rp.$wdr <br>
            ";
            $this->saldo = $total;
            return $total;
        } else {
            echo 'Maaf saldo anda tidak cukup';
        }
    }

    public function cetak(){
        global $total;
        echo'<br>';
        echo "
        Nomor :  $this->nomor <br>
        Saldo :  Rp.$total <br>
        ";
    }
}

class BankAccount extends Account{
    public $customer;
    function __construct($no,$saldo,$cust)
    {
        parent::__construct($no,$saldo);
        $this->customer = $cust;

    }
    
    public function deposit($depo){
        global $total;
        $deposit = $depo + $this->saldo;
        $total = $deposit;
        echo "<br>
        Saldo $this->customer  : Rp.$this->saldo <br>
        Menabung sebesar : Rp.$depo <br>
        Saldo sekarang   : Rp.$deposit <br>
        ";
        $this->saldo = $total;
        return $total;
    }

    public function withdraw($wd){
        global $total;
        $wdr = $this->saldo - $wd;
        $total = $wdr;
        if ($this->saldo >= $wd) {
            echo "<br>
            Saldo $this->customer  : Rp.$this->saldo <br> 
            Saldo berkurang sebesar : Rp.$wd <br> 
            Saldo sekarang    : Rp.$wdr <br>
            ";
            $this->saldo = $total;
            return $total;
        } else {
            echo 'Maaf saldo anda tidak cukup';
        }
    }

    public function cetak(){
        global $total;
        echo'<br>';
        echo "
        Nomor :  $this->nomor <br>
        Pemilik  : $this->customer <br>
        Saldo :  Rp.$total <br>
        ";
    }

    public function transfer($tujuan_tf,$uang){
        echo "<br>
        $this->customer Transfer sebesar $tujuan_tf->deposit($uang)";
        $this->withdraw($uang);
    }
}

$bank1 = new BankAccount("C001",6000000,"Ahmad");
$bank2 = new BankAccount("C002",5350000,"Budi");
$bank3 = new BankAccount("C003",2500000,"Kurniawan");
$ar_bank = [$bank1,$bank2,$bank3];








// $bank = new BankAccount('C001',500000,"Ahmad");
// $bank->deposit(40000);
// $bank->withdraw(500000);
// $bank->cetak();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>No.Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach ($ar_bank as $bank) {
                    echo '<tr>'.'<td>'.$i.'</td>'.
                    '<td>'.$bank->nomor.'</td>'.
                    '<td>'.$bank->customer.'</td>'.
                    '<td>'.$bank->saldo.'</td>';
                $i++;       
                }
            ?>
        </tbody>
    </table>    
</body>
</html>

<?php
//mengakses yang diatas
$bank1->deposit(1000000);
$bank1->transfer($bank3,1500000);
$bank1->transfer($bank2,500000);
?>