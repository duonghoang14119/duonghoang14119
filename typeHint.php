<?php
// Type hinting trong PHP là một tính năng cho phép bạn chỉ định kiểu dữ liệu mong đợi cho tham số đầu vào của một hàm hoặc phương thức,
// cũng như kiểu dữ liệu trả về của hàm hoặc phương thức đó

function number(int $a): int {
  return $a;
}
echo number(23);