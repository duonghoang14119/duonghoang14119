<?php
abstract class fution {
    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }
    abstract public function getProduct() ;

}
class SanPham extends fution {
    private $sdw;
    public function __construct($product, $sdw)
    {
        parent::__construct($product);
        $this->sdw = $sdw;
    }

    public function getProduct() {
        return 3 * $this->sdw;
    }
}

class SanPhamCon extends fution {

    public $tenSp;
    public function __construct($product, $tenSp)
    {
        parent::__construct($product);
        $this->tenSp = $tenSp;
    }
    public function getProduct()
    {
        return $this->tenSp;
    }
}
$sp1 = new SanPham('34');
$sp2 = new SanPhamCon('so 1');
echo $sp1->getProduct();
echo $sp2->getProduct();