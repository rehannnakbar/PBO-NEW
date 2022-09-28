<?php
  // buat class nama
  class nama{
    public $absen ="22";
    public $nis ="1234";

    public function __consctruct(){
        echo"ini berasal dari Constructor nama";
    }
    public function kerjakan_pr(){
        return"kerjakan pr $this->nis dari $this->absen";
    }
    public function __destruct(){
        echo"ini berasal dari Destructor nama";
    }
}
    // buat objek dari class nama (instansiasi)
$nama_22= new nama();

echo "<br />";
echo $nama_22->kerjakan_pr();
echo "<br ?>";
?>

  