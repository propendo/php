<?php
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];


foreach ($people as $num) {
    foreach($num as $property => $value) {
        if ($property ==="first_name") {
            echo $value;
        }elseif ($property ==="age") {
                echo "(" . $value . "歳)";
            }elseif ($property === "gender") {
                echo $value . "<br/>";
            }
        }
    }

    
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')';
  echo '';
}    