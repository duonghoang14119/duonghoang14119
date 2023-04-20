<?php
//là 1 class mô tả thuộc tính và phương thức trừu tượng, nó đại diện cho các class con có cùng bản chất
// trong lớp trừu tượng được định nghĩa các method abstract nhưng không được viết code xử lý bên trong
// không thể khởi tạo một lớp trừu tượng và vì thế nên các method chỉ được khai báo ở mức độ protected hoặc public
// các lớp kế thừa lại lớp trừu tượng thì cần phải định nghĩa lại các phương thức của nó
abstract class TruuTuong
{
    abstract function cha();
}

class Dog extends TruuTuong
{
    public function cha()
    {
        return 'Bow wow';
    }
}

class Cat extends TruuTuong
{
    public function cha()
    {
        return 'Meow meow';
    }
}
$in1 = new Dog();
$in2 = new Cat();
echo $in1->cha();
echo $in2->cha();