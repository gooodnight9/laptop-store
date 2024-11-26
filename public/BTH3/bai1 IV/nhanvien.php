<?php

class nhanvien
{
     private $manv;
     private $tennv;
     private $songay;
     private $luong;

     public function Gan($manv, $tennv, $songay, $luong){
         $this->manv = $manv;
         $this->tennv = $tennv;
         $this->songay = $songay;
         $this->luong = $luong;
    }

    public function tinhluong(){
         return $this->luong*$this->songay;
    }

    public function InNhanVien()
    {
        echo "Mã nhân viên: " . $this->manv . "<br>";
        echo "Tên nhân viên: " . $this->tennv . "<br>";
        echo "Lương của nhân viên: " . $this->tennv . " " . $this->tinhluong();
    }

}