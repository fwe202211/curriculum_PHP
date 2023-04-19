<style>
    html {
        height: 100%;
    }

    body {
        height: 100%;
        background-color: gray;
        color: white;
    }

    .answer {
        text-align: center;
    }

    #hello {
        padding-top: 100px;
    }
</style>
<div class="answer">
    <?php
    //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $q1 = $_POST["q1"];
    $a1 = $_POST["a1"];
    $q2 = $_POST["q2"];
    $a2 = $_POST["a2"];
    $q3 = $_POST["q3"];
    $a3 = $_POST["a3"];
    $my_name = $_POST["my_name"];
    //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function checkResult1($a, $b)
    {
        if ($a == $b) {
            return "正解!";
        } else {
            return "残念・・・";
        }
    }
    ?>
    <p id="hello"><!--POST通信で送られてきた名前を表示--><?php echo $my_name ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php echo checkResult1($q1, $a1); ?>
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php echo checkResult1($q2, $a2); ?>
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php echo checkResult1($q3, $a3); ?>
</div>