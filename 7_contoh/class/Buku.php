<?php

include "Koneksi.php";

class Buku extends Koneksi{

    public function tampilSemua(){
        $query="SELECT * FROM buku";
        $sql=mysqli_query($this->koneksi,$query);

        while($data=mysqli_fetch_array($sql)){
            $datas[]=$data;
        }
        if (isset($datas)){
            return $datas;
        }else{
            return 0;
        }
    }

    public function tambahData($judul,$pengarang,$penerbit){
        $query="INSERT INTO buku SET judul='{$judul}', pengarang='$pengarang', penerbit='{$penerbit}'";
        mysqli_query($this->koneksi,$query);
    }

    public function ubahData($id,$judul,$pengarang,$penerbit){
        $query="UPDATE buku SET judul='{$judul}', pengarang='$pengarang', penerbit='{$penerbit}' WHERE id='{$id}'";
        mysqli_query($this->koneksi,$query);
    }
    public function hapusData($id){
        $query="DELETE FROM buku WHERE id='{$id}'";
        mysqli_query($this->koneksi,$query);
    }
    public function cariDataById($id){
        $query="SELECT * FROM buku WHERE id='{$id}'";
        $sql=mysqli_query($this->koneksi,$query);
        $data=mysqli_fetch_assoc($sql);
        return $data;
    }


}