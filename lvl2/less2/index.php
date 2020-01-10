<?php 

abstract class Goods {
    const PRICE = 250;
    abstract function getprice();

}

class DigitalGoods extends Goods{

    public function getprice(){
        return self::PRICE/2;
    }
}

class FizGoods extends Goods{
    public function getprice(){
        return self::PRICE;
    }
}

class WieghtedGoods extends Goods{
    public $weight;
    public function getprice(){
        return self::PRICE*$this->weight;
    }
}


$dg = new DigitalGoods;
echo $dg->getprice().'<br>';


$fg = new FizGoods;
echo $fg->getprice().'<br>';

$wg = new WieghtedGoods;
$wg->weight = 15;
echo $wg->getprice().'<br>';
