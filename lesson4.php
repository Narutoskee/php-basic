<?php

$pages =[
  [
      'name'=>'Статья 1',
      'content'=>'Текст статьи',
  ],[
        'name'=>'Статья 2',
        'content'=>'Текст статьи',
    ],
    [
        'name'=>'Статья 3',
        'content'=>'Текст статьи',
    ],
    [
    'name'=>'Статья 4',
    'content'=>'Текст статьи',
]
];

$arr4 = [1,2,3,4,5,6,7,8,9,10];
$arr5 =[];
echo "<pre>";
foreach ($arr4 as $key=>$chet){
    if ($chet%2==0){
          $arr5[]=$key;
    }
}

foreach ($arr5 as $item){
    print_r($item . "<br>");
}

echo "</pre>";
echo "<br>";

echo "<pre>";
foreach ($pages as $key=>$page) {
    print_r($page);
}
echo "</pre>";

echo "<br>";

//Цикл while

$i = 0;
$a = count($pages);
while ($i<$a){
    echo $pages[$i]['name']."<br>";
    echo $pages[$i]['content']."<br>";
    $i++;
}


$i = 0;
$x = 0;

while ($i<=100){
    $x+= $i;
    $i++;
}
echo $x;

echo "<br>";

//Цикл do

$i=11;
$x=10;

do{
    echo $i;
    echo $i++;
}while($i<$x);

echo "<br>";

//Цикл for

for ($i=0; $i<=100; $i++){
    $sum+=$i;
}

echo "<br>";

//Выыод минимального и максимального значения

$arr7 = [1,2,3,4,5];
$min = $arr7[0];
$max = $arr7[0];

for ($a = 0; $a< count($arr7); $a++){
    if ($arr7[$a]<$min){
        $min=$arr7[$a];
    }

    if ($arr7[$a]>$max){
        $max=$arr7[$a];
    }
}
echo $min;
echo "<br>";
echo $max;
echo "<br>";
echo "<br>";

//Выыод суммы четных и нечетных

$arr7 = [1,2,3,4,5];
$chet = 0;
$nechet = 0;

for ($a = 0; $a < count($arr7); $a++){
    if($arr7[$a]%2==0){
        $chet+= $arr7[$a];
    }else{
        $nechet += $arr7[$a];
    }
}
echo $chet;
echo "<br>";
echo $nechet;

echo "<br>";
echo "<br>";

//Сумма чисел от 1 до 100



//for ($num=1; $num <=100; $num++){
//    $sum2 +=$num;
//}

$sum2=0;
$num=1;

while ($num <=100){
    $num++;
    $sum2 +=$num;
}

echo "Сумма чисел от 1 до 100 равна $sum2";


