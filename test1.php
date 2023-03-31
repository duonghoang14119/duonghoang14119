<?php
class Preson {
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name() {
        return $this->name;
    }
}
$name = new Preson('duong');
echo $name->name();


// tính đóng gói nhằm cho việc có sử dụng tới đối tượng đã tạo nhưng không tác động trực tiếp tới nó nhằm đảm bảo sự toàn vẹn của biến đó