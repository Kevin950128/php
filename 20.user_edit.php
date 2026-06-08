<?php

    // 關閉錯誤訊息顯示
    error_reporting(0);

    // 啟動 Session
    session_start();

    // 檢查是否已登入
    if (!$_SESSION["id"]) {

        // 未登入顯示訊息
        echo "請登入帳號";

        // 3秒後跳回登入頁
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

        // 執行 UPDATE 指令
        if (!mysqli_query(
                $conn,
                "update user
                 set pwd='{$_POST['pwd']}'
                 where id='{$_POST['id']}'"
            )){

            // 修改失敗
            echo "修改錯誤";

            // 3秒後回到使用者管理頁面
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";

        }else{

            // 修改成功
            echo "修改成功，三秒鐘後回到網頁";

            // 3秒後回到使用者管理頁面
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
