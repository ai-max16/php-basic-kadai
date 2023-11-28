<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数を定義する
        function sort_2way($order) {
          // ソートする配列を宣言
          $nums = [15, 4, 18, 23, 10 ];
          
          // TRUEの場合、昇順にソートする
          if ($order == TRUE) {
            echo '昇順にソートします。<br>';
            sort($nums);
            foreach ($nums as $array) {
              echo $array . '<br>';
            }

          // FALSEの場合、降順にソートする
          } else {
            echo '降順にソートします。<br>';
            rsort($nums);
            foreach ($nums as $array) {
              echo $array . '<br>';
            }
          }
        }
        
        // ソート関数を呼び出す（昇順）
        sort_2way(TRUE);

        // ソート関数を呼び出す（降順）
        sort_2way(FALSE);
        ?>
    </p>
</body>

</html>
