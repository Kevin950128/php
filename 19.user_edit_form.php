<html>
    <head>
        <title>修改使用者</title>
    </head>

    <body>

    <?php

    // 關閉錯誤訊息
    error_reporting(0);

    // 啟動 Session
    session_start();

    // 檢查是否登入
    if (!$_SESSION["id"]) {

        // 未登入顯示訊息
        echo "請登入帳號";

        // 3秒後回登入頁
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{

        // 建立資料庫連線
        $conn=mysqli_connect(
            "120.105.96.90",
            "immust",
            "immustimmust",
            "immust"
        );

        // 查詢指定使用者資料
        $result=mysqli_query(
            $conn,
            "select * from user where id='{$_GET['id']}'"
        );

        // 取出查詢結果
        $row=mysqli_fetch_array($result);

        // 顯示修改表單
        echo "
        <form method=post action=20.user_edit.php>

            <input type=hidden name=id value={$row['id']}>

            帳號：{$row['id']}<br>

            密碼：
            <input type=text
                   name=pwd
                   value={$row['pwd']}>

            <p></p>

            <input type=submit value=修改>

        </form>
        ";
    }

    ?>

    </body>
</html>
