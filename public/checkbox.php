<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox.php</title>
</head>

<body>
    <h4>0J03013 下川晶万</h4>
    <p>チェックボックス</p>
    <?php
    echo '<p>あなたの好きな果物は、';
    foreach ($_POST['fruits'] as $fruit) {
        echo $fruit . ' ';
    }
    echo 'ですね。</php>';
    ?>
    <a href='checkbox.html'>戻る</a>
</body>
</html>