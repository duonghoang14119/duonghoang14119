<?php

//public function test(array $data): array
//{
//    // sth code
//}

// tính trừu tượng đóng vai trò là một class cha đại diện cho các class con có cùng bản chất,
// một class con không thể kế thừa cùng một lúc được nhiều abstract class
abstract class ElectronicDevice {
    protected $manufacturer;

    public function __construct($manufacturer) {
        $this->manufacturer = $manufacturer;
    }

    abstract public function turnOn();
}

// tính đa hình là một khuân mẫu tạo bộ khung cho một hoặc nhiều đối tượng (có thể giống hoặc khác nhau về bản chất)
// một class có thể kế thừa cùng một lúc được nhiều interface
interface Connectable {
    public function connectToInternet();
}

interface Captureable {
    public function capturePhoto();
}

class Smartphone extends ElectronicDevice implements Connectable, Captureable {
    public function __construct($manufacturer) {
        parent::__construct($manufacturer);
    }

    public function connectToInternet() {
        //code kết nối mạng
        echo "Đã kết nối mạng\n";
    }

    public function capturePhoto() {
        //code chụp ảnh
        echo "Đã chụp ảnh\n";
    }

    public function turnOn() {
        //code bật máy
        echo "Đã bật điện thoại {$this->manufacturer}\n";
    }
}

$smartphone = new Smartphone("Apple");
$smartphone->turnOn();
$smartphone->connectToInternet();
$smartphone->capturePhoto();

// composer.json : để khai báo các thư viện
// composer.lock : chứa các thông tin chi tiết về các phiên bản của các package và các dependency mà ứng dụng của bạn đang sử dụng.
// các thư viện sau khi được cài đặt sẽ nằm trong file vendor
