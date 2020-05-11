<?php
interface Buah {
    public function makan();
    public function setWarna($warna);
}


class Apel implements Buah {
    protected $warna;
    public function makan(){
        //kunyah
        //sampai bagian tengah
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
}

?>