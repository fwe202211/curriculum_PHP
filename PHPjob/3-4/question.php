<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_GET["my_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = ["80", "22", "20", "21"];
$question2 = ["PHP", "Python", "JAVA", "HTML"];
$question3 = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>
<style>
    html {
        height: 100%;
    }

    body {
        height: 100%;
        background-color: gray;
        color: white;
    }

    .quiz {
        text-align: center;
    }

    #hello {
        padding-top: 100px;
    }
</style>
<div class="quiz">
    <form action="answer.php" method="POST">
        <p id="hello">お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name; ?>さん</p>
        <!--フォームの作成 通信はPOST通信で-->
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($question1 as $value) { ?>
            <input type="radio" name="q1" value="<?php echo $value ?>">
        <?php echo $value;
        } ?>
        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($question2 as $value) { ?>
            <input type="radio" name="q2" value="<?php echo $value ?>">
        <?php echo $value;
        } ?>
        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($question3 as $value) { ?>
            <input type="radio" name="q3" value="<?php echo $value ?>">
        <?php echo $value;
        } ?>
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <br>
        <input type="submit" value="回答する">
        <input type="hidden" name="a1" value="<?php echo $question1[0]?>">
        <input type="hidden" name="a2" value="<?php echo $question2[3]?>">
        <input type="hidden" name="a3" value="<?php echo $question3[1]?>">
        <input type="hidden" name="my_name" value="<?php echo $my_name?>">
    </form>
</div>