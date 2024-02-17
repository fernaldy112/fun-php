<?php

class Nilai {
    private $mapel;
    private $nilai;

    function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }

    function getMapel(){
        return $this->mapel;
    }

    function getNilai(){
        return $this->nilai;
    }

    function setMapel($mapel){
        $this->mapel = $mapel;
    }

    function setNilai($nilai){
        $this->nilai = $nilai;
    }
}

class Siswa {
    private $nrp;
    private $nama;
    private $daftarNilai;

    function __construct($nrp, $nama, $daftarNilai) {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = $daftarNilai;
    }

    function getNrp() {
        return $this->nrp;
    }

    function getNama() {
        return $this->nama;
    }

    function getDaftarNilai() {
        return $this->daftarNilai;
    }

    function setNrp($nrp) {
        $this->nrp = $nrp;
    }

    function setNama($nama) {
        $this->nama = $nama;
    }

    function setDaftarNilai($daftarNilai) {
        $this->daftarNilai = $daftarNilai;
    }
}

// a
$daftarNilai = array();
for ($i = 0; $i < 3; $i++) {
    $daftarNilai[$i] = new Nilai("", 0); // mapel is initialized with "" and nilai with 0
}

// b
$siswa = new Siswa("", "", array_fill(0, 1, new Nilai("inggris", 100))); // nrp and name are initialized with ""

// c
$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$mapels = ["inggris", "indonesia", "jepang"];
$siswas = array();
for ($i=0; $i<10; $i++) {
    $nama = "";
    for ($j=0; $j<10; $j++) {
        $chars_idx = rand(0, strlen($chars) - 1);
        $nama .= $chars[$chars_idx];
    }
    $mapel_idx = rand(0, count($mapels) - 1);
    $nilai = rand(0, 100);
    array_push($siswas, new Siswa("", $nama, array_fill(0, 1, new Nilai($mapels[$mapel_idx], $nilai)))); // nrp is initialized with ""
}