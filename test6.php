<?php
require_once dahinh::class;
class buyBuy {
    protected function name(){
        return 'hello';
    }

}
class  buyTest extends buyBuy {
    public function colect(){
        echo $this->name();
    }
}
$name = new buyTest();
$name->colect();