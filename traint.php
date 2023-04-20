<?php
trait getName{
    public function getFullName(){
        return 'hoang duong';
    }
}

class inName{
    use getName;

    public function printName(){
        $name = 'duong'. $this->getFullName();
        return $name;
    }
}
$inRa = new inName();
echo $inRa->printName();