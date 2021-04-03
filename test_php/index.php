<?php


echo(123);
echo('<br>');

echo('こんにちは');
echo('<br>');

echo("こんばんは");
echo('<br>');

echo('こちらPHPです');

//変数

//int ・・・・数字
//string・・文字

echo('<br>');
$test_1 = 123;
$test_2 = 456;

$test_3 = $test_1 . $test_2;

// 先頭は英文字かアンダーバー
$test = 'テストです';

var_dump($test_3);

//echo $test;－－－

//定数　変わらない数・文字
//constant

echo('<br>');
const MAX = 10;
echo MAX;

//配列
echo('<br>');

$array_1 = ['あいう',2,3];

$array_2 = [
  ['赤','青','黄色'],
  ['オレンジ','紫','緑']
];

//echo $array[1];

echo '<pre>';
var_dump($array_2);
echo '</pre>';

echo $array_2[1][1];


//連想配列
echo('<br>');

$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['name'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
];

echo $array_member_2['香川']['height'];

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

$array_member_3 = [
  '１組' => [
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ],
    '香川' => [
      'height' => 165,
      'hobby' => 'サッカー'
    ]

  ],
  '２組' => [
    '長友' => [
      'height' => 160,
      'hobby' => 'サッカー'
    ],
    '乾' => [
      'height' => 180,
      'hobby' => 'サッカー'
    ]
  ]
];

echo $array_member_3['２組']['長友']['height'];

echo('<br>');
// if(条件){
//   条件が真なら実行
// }

// // if (条件) {
//   条件が真なら実行
// } else {
//   条件が偽なら実行
// }

// == 一致
// === 型も一致

$height = 91;

// if ($height === 91){
//   echo '身長は' . $height . 'cmです';
// }else {
//   echo '身長は' . $height . 'cmではありません';
// }

echo('<br>');

if ($height !== 90){
  echo '身長は９０cmではありません';
};

echo('<br>');

$signal = 'blue';

if ($signal === 'red'){
  echo '止まれ';
} else if($signal === 'yellow'){
  echo '一旦停止';
} else {
  echo '進む';
};

$speed = 80;

if($signal === 'blue') {
  if ($speed >= 80) {
    echo 'スピード違反';
  }
}

echo('<br>');
//データが入っているかどうか
//isset empty is_null

$test = '1';

if (!empty($test)){
  echo '変数は空ではありません';
};

echo('<br>');
//ANDとOR

$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
  echo '赤と青です';
}

echo('<br>');
// 三項演算子
// //if else
//  条件　？真　：偽

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';
echo $comment;

echo('<br>');
// 複数の値　foreach

$members = [
  'name' => '本田',
  'height' => '170',
  'hobby' => 'サッカー'
];

//バリューのみ表示
foreach($members as $member){
  echo $member;
}

echo('<br>');
//キーとバリューそれぞれ表示
foreach($members as $key => $value){
  echo $key . 'は' . $value . 'です';
 };


 $members_2 = [
   '本田' => [
  'height' => '170',
  'hobby' => 'サッカー'
   ],
   '香川' => [
    'height' => '165',
    'hobby' => 'サッカー'
     ],
    ];

    echo('<br>');

    foreach($members_2 as $member_1){
      foreach($member_1 as $member){
        echo $member;
      }
    }

    echo('<br>');
//for 繰り返す値が決まっていたら
//while　繰り返す数が決まっていなかったら。

//continue break

for($i = 0; $i < 10; $i++){
  
  if($i === 5){
    //break;
    continue;
  }
  echo $i;
}

echo('<br>');

$j = 0;
while($j < 5){
  echo $j;
  $j++;
}

echo '<pre>';
var_dump();
echo '</pre>';
?>
