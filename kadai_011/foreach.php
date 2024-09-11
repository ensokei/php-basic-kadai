<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP基礎編_11章課題</title>
    </head>
    <body>
        <p>
            <?php
            //配列
            $items=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];

            foreach($items as $key => $value){
                echo "{$key}:{$value}<br>";
            }
            ?>
        </p>
    </body>
</html>