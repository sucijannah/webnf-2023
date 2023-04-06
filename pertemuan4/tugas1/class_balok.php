<?php
    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
        const p = 29;
        const l = 16;
        const t = 7;
    
        public function __construct($p, $l, $t) {
		    $this->panjang = p;
		    $this->lebar = l;
		    $this->tinggi = t;
        }
    
        public function getLuas() {
			$luas = (self::p * self::l *self::t) ;
            return $luas;
				}
    
        public function getKeliling() {
            $luas = (self::p * self::l * self::t) ;
            return $keliling;
        }
    
        public function getVolume() {
            $volume = 2 * ((self::p * self::l) + (self::l * self::t) + (self::p * self::t));
            return $volume; 
        }
    }
?>