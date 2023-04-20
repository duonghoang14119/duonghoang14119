<?php
abstract class Xe{
    abstract function banhXe();

}
class xeMay extends Xe {
    public function banhXe()
    {
        return '1111';
    }
}
$xeMay = new xeMay();
echo $xeMay->banhXe();