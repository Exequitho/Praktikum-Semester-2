<?php
class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function __construct($nama,$harga)
    {
        $this->namaMinuman = $nama;
        $this->hargaSegelas = $harga;
        $this->volumeGelas = 0;
        $this->galon = 19000;
    }

    public function isi($vol){
        $isiGelas = $this->volume = $vol;
        $isiGalon = $this->galon - $vol;
        if ($vol <= 250) {
            echo 'Gelas berisi '.$isiGelas.' ml <br>';
            echo 'Volume galon sekarang '. $isiGalon;
            return $isiGelas && $isiGalon;
        } else {
            echo "Maaf kepenuhan!";
        }
    }
    public function harga($harga){
        $this->hargaSegelas = $harga;
    }
    public function volumeGelas(){
        $this->volumeGelas = 250;
    }
    public function nama($nama){
        $this->namaMinuman = $nama;
    }
}

$minum = new Dispenser("Mizone",5000);
$minum->isi(250);

?>