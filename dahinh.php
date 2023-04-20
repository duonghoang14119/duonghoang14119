<?php
// cho phép một đối tượng thực hiện cùng một phương thức hoặc thuộc tính với đối tượng khác nhưng lại có cách thực hiện khác nhau
//
class dahinh{
    public function cha(){
        echo 'duong';
    }

}
class con extends dahinh{
    public function cha()
    {
        echo 'lớp con';
    }

    public function inCon(){
        echo 'hoang';
    }
}
$in1 = new dahinh();
$in2 = new con();
$in1->cha();
$in2->inCon();
$in2->cha();