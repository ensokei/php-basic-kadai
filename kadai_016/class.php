<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP基礎編_16章課題</title>
    </head>
    <body>
        <p>
            <?php
            
            //クラス
            class Food{
                //プロパティ
                private $name;
                private $price;

                //メソッド
                public function show_price(){
                    echo $this->price.'<br>';
                }

                //コンストラクタ
                public function __construct(string $name,int $price){
                    $this->name=$name;
                    $this->price=$price;
                }
            }

            class Animal{
                //プロパティ
                private $name;
                private $height;
                private $weight;

                //メソッド
                public function show_heigth(){
                    echo $this->height.'<br>';
                }

                //コンストラクタ
                public function __construct(string $name, int $height, int $weight){
                    $this->name=$name;
                    $this->height=$height;
                    $this->weight=$weight;
                }
            }

            //インスタンス化
            $food=new Food('potato',250);

            $animal=new Animal('dog',60,5000);

            //出力する
            print_r($food);
            echo '<br>';

            print_r($animal);
            echo '<br>';

            $food->show_price();

            $animal->show_heigth();
            ?>
        </p>
    </body>
</html>