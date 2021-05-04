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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
  <?php foreach($goods as $item): ?>  
    <tr>
        <?php foreach($item as $k=>$val): ?>  
            <td>
                <?= $val?>
            </td>
        <?php endforeach; ?>  
    </tr>
  <?php endforeach; ?>  
  </table>
</body>
</html>