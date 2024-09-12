<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
            <?php
            //関数
            function sort2way ($array,$order){
            
            if($order){
                //昇順
                echo '昇順にソートします<br>';
                sort ($array);

                foreach($array as $num){
                    echo $num.'<br>';
                }
            }
            else{
                //降順
                echo '降順にソートします<br>';
                rsort($array);

                foreach($array as $num){
                    echo $num.'<br>';
                }
            }
            }
            //配列
            $nums =[15,4,18,23,10];


            echo sort2way($nums,TRUE);
            echo sort2way($nums,FALSE);
            ?>
        </p>
    </body>
</html>