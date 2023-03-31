<?php
//function test(array $data): array
//{
//    return $data;
//}
//// gọi phương thức test với một mảng đầu vào
//$result = test(['foo', 'bar']);
//print_r($result);
class Math
{
    private $number1 = '124332';

//__construct là phương thức được gọi khi một đối tượng mới được tạo,
// và được sử dụng để khởi tạo các thuộc tính và các giá trị khác cho đối tượng đó. Nó có thể nhận các tham số để truyền vào khi tạo đối tượng,
// .giúp thiết lập các thuộc tính ban đầu cho đối tượng đó.


    // phương thức này sẽ tự động được chạy khi hủy một đối tượng nào đó
    public function __destruct()
    {
        echo 'đã hủy đối tượng gọi tới';
    }


    // tự động chạy nhương thức __get trong trường hợp truy cập vào phương thức không được phép
    public function __get($name)
    {
        return $this->$name;
    }

    //phương thức này sẽ tự động được gọi khi kiểm tra một thuộc tính không được phép truy cập của một đối tượng,
    // hay kiểm tra một thuộc tính không tồn tại trong đối tượng đó
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    // dùng để gán dữ liệu cho cac thuộc tính không cho phép truy cập
    public function __set($name, $value)
    {
        return $this->$name = $value;
    }


    // phương thức này được gọi khi gọi tới một đối tượng không tồn tại trong đối tượng
    public function __call($name, $arguments)
    {
        echo 'phương thức' . $name . "<br>không tồn tại<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo 'phương thức' . $name . "không tồn tại";
        if (!empty($arguments)) {
            echo 'các tham số nhận được là' . implode(', ', $arguments);
        }
    }


    public function getSelectNumber()
    {
        return $this->number1;
    }

    public function setNumber($value)
    {
        $this->number1 = $value;
    }
}

$math = new Math();
//echo $math->getSelectNumber();
echo $math->number1;


$math->setNumber('9999999999');

$math->number1 = '333333';
echo $math->number1;
$math->meThod();
Math::meThod('3', '5');

echo '<br>';
unset($math);