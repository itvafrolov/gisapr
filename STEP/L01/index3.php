<?php
$goods = [[
      'title' => 'Nokia',
      'price' => 100,
      'description' => 'Description'
    ],[
      'title' => 'iPad',
      'price' => 200,
      'description' => 'Description'
    ]
  ];
foreach($goods as $item)
{
//     echo "<pre>";    
//     print_r($item);
//     echo "</pre>";
    foreach($item as $k=>$val)
    {
        // echo "<pre>";    
        // print_r($subitem);
        // echo "</pre>";
        //--------------
        // echo $k. " : ".$val."<br>";
        echo "$k : $val <br>";
    }
    echo "<hr>";
}
?>