<?php
class NilaiMahasiswa {
    var $mataKuliah;
    var $nilai;
    var $nim;

    function __construct($matkul, $nilai, $nim) {
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade($nilai){
        if ($nilai >= 0 && $nilai <= 35) return 'E';
        elseif ($nilai >= 36 && $nilai <= 55) return 'D';
        elseif ($nilai >= 56 && $nilai <= 69) return 'C';
        elseif ($nilai >= 70 && $nilai <= 84) return 'B';
        elseif ($nilai >= 85 && $nilai <= 100) return 'A';
    }

    function hasil($nilai){
        if ($nilai <= 56) return "TIDAK LULUS";
        else return "LULUS";
    }
}
?>