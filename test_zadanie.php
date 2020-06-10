<?php
//На диске лежит файл image.png, размер 20000 на 20000 точек. Вывести картинку как баннер размером 200 на 100 пикселей.
//Подозреваю,что на PHP задача трудновыполнима,гораздо проще и быстрее она решается на CSS и HTML
//Вариант 1
$html='<style>
  img{
  object-fit: contain;
  width: 200px;
  height: 100px;
  }
</style>
<img src="image.png">
';
echo $html;
//Вариант 2
$html_2='<style>
img{
max-height: 100px;
max-width: 200px;
}
</style>
<img src="image.png">
';
echo $html_2;
//Вариант 3,если изображение не является элементом разметки и будет как фоновое
$html_3='<style>
div{
  height: 100px;
  width: 200px;
  background-image: url("image.png");
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;  
}
</style>
<div></div>';
echo $html_3;