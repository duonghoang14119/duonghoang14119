<?php
//require
//require_once
// Nó cho phép giới hạn truy cập vào các thành phần của một đối tượng
// và giữ chúng riêng biệt, giúp đảm bảo tính toàn vẹn dữ liệu và giảm thiểu rủi ro
class People
{
    private function hello(): string
    {
        return 'Hello world';
    }

    public function getSth()
    {
        $data = $this->hello();
        return $data;
    }
}
//$in = new People();
//echo $in->getSth();
class People1
{
    protected function hello(): string
    {
        return 'Hello world so 2';
    }
}

class AsianPeople extends People1
{
    public function getSth()
    {
        $data = $this->hello();
        return $data;
    }
}
//$in2 = new AsianPeople();
//echo $in2->getSth();

class dog{
    public function thuocTinh(){
        echo 'hello duong';
    }
}
class cat{
     function inThuocTinh(){
        $dog = new Dog();
        return $dog->thuocTinh();
    }
}