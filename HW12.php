<?php 
// $file = @fopen('data.txt', 'r'); 
// if (!$file)
// echo "Mở file không thành công"; 
// else { 
// while (!feof($file)) {//feof trả về true nếu ở vị trí cuối cùng của file
//  echo fgetc($file); // đọc ra từng ký tự trong file 
// } 
// }


$file = file_exists("data.txt");
if (!$file) 
echo "file không tồn tại";
else echo "file có tồn tại";

$file = "data.txt";
if(is_writable($file)) {
  echo ("$file is writable");
} else {
  echo ("$file is not writable");
}

$file = @fopen('data.txt', 'r'); 
if (!$file)
echo "Mở file không thành công"; 
else { 
while (!feof($file)) {//feof trả về true nếu ở vị trí cuối cùng của file
 echo fgets($file); // đọc ra từng dòng
} 
}

$file = @fopen('data.txt', 'w');
if (!$file)
    echo "Mở file không thành công";
else {
    $data = 'xin chào';
    fwrite($file, $data);
    fclose($file);
}

unlink("data.txt");
?>