<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // メソッドを定義する
      public function show_price($price) {
        echo $this->price . '<br>';
      }

      // コンストラクタを定義する
      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // Animalクラスを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // メソッドを定義する
      public function show_height($height) {
        echo $this->height . '<br>';
      }

      // コンストラクタを定義する
      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化する
    $food = new Food('potato', '250');
    print_r($food);
    
    echo '<br>';

    $animal = new Animal('dog', '60', '5000');
    print_r($animal);
    
    echo '<br>';

    // メソッドにアクセスし実行する
    $food->show_price(250);
    $animal->show_height(60);
    ?>
  </p>
</body>

</html>
