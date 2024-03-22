<?php

class Nilai_Siswa{

    public $nama;
    public $nim;
    public $prodi;
    public $nilai;
    public $matakuliah;
    
// method
    public function __construct ($nama,$nim,$prodi,$nilai,$matakuliah){
        $this-> nama = $nama;
        $this-> nim = $nim;
        $this-> prodi = $prodi;
        $this-> nilai = $nilai;
        $this-> matakuliah = $matakuliah;
    }
    // method
    public function get_hasil(){
        if ($this->nilai >55) 
        return "lulus";
        else return "Tidak Lulus";
    }
    // method
    public function grade(){
        if ($this->nilai >=85)
        return "A";
        else if ($this->nilai >=70)
        return "B";
        else if ($this->nilai >=56)
        return "C";
        else if ($this->nilai >=36)
        return "D";
        else 
        return "E";
    }
}
    // $ns1 = new Nilai_Siswa ();
    // $ns1-> nama = "angga";
    // $ns1-> nilai = 50;
    // $ns1-> matakuliah = "PSD";
// objek
//     $ns1 = new Nilai_Siswa("angga","Teknik Informatika","011022",80,"PSO");
//     $ns2 = new Nilai_Siswa ("Luluk","Sistem Informasi","011022",90,"WEB");

// echo "Nama Mahasiswa: ".$ns1->nama."<br/>";
// echo "Prodi: ".$ns1->nim."<br/>";
// echo "NIM: ".$ns1->prodi."<br/>";
// echo "Nilai: ".$ns1->nilai."<br>";
// echo "Mata kuliah: ".$ns1->matakuliah."<br/>";
// echo "Grade: ". $ns1->grade()."<br>";
// echo   "Status: ".$ns1->get_hasil()."<br>";

// echo "Nama Mahasiswa: ".$ns2->nama."<br/>";
// echo "Prodi: ".$ns2->nim."<br/>";
// echo "NIM: ".$ns2->prodi."<br/>";
// echo "Nilai: ".$ns2->nilai."<br>";
// echo "Mata kuliah: ".$ns2->matakuliah."<br/>";
// echo "Grade: ". $ns2->grade()."<br>";
// echo   "Status: ".$ns2->get_hasil();