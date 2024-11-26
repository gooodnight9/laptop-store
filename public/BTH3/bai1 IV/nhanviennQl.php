<?php
require_once 'nhanvien.php';
class nhanvienQL extends nhanvien
{
    private $phucap = 2000;

    public function InNhanVien()
    {
        parent::InNhanVien();
    }

    public  function tinhluong()
    {
        return parent::tinhluong() + $this->phucap;
    }
}