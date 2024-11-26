<?php
class Ngay {
    public $ngay;

    public function __construct($ngay) {
        $this->ngay = new DateTime($ngay);
    }


    public function tinhkhoangCach($ngaykhac){
        $DateInterval = $this->ngay->diff($ngaykhac->ngay);

        return $DateInterval->days;
    }

    
}
?>