<html>
    <head>
        <title>新增使用者</title>   <!-- 網頁標題 -->
    </head>

    <body>

<?php
    // 關閉錯誤訊息顯示
    error_reporting(0);

    // 啟動 Session，才能使用 $_SESSION
    session_start();

    // 檢查是否已登入
    // 如果 Session 中沒有 id，表示尚未登入
    if (!$_SESSION["id"]) {

        // 顯示提示訊息
        echo "請登入帳號";

        // 3秒後自動跳轉到登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {

        // 已登入才顯示新增使用者表單
        echo "
            <form action=15.user_add.php method=post>

                帳號：
                <input type=text name=id><br>

                密碼：
                <input type=text name=pwd><p></p>

                <input type=submit value=新增>
                <input type=reset value=清除>

            </form>
        ";
    }
?>
    </body>
</html>
