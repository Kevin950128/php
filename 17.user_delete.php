<?php

    // 關閉錯誤訊息顯示
    error_reporting(0);

    // 啟動 Session
    session_start();

    // 檢查是否已登入
    if (!$_SESSION["id"]) {

        // 未登入顯示提示訊息
        echo "請登入帳號";

        // 3秒後跳轉到登入頁面
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

        // SQL刪除指令
        // 根據網址傳來的 id 刪除指定使用者
        $sql="delete from user where id='{$_GET["id"]}'";

        // 除錯時可查看 SQL 指令
        // echo $sql;

        // 執行 SQL 指令
        if (!mysqli_query($conn,$sql)){

            // 刪除失敗
            echo "使用者刪除錯誤";

        }else{

            // 刪除成功
            echo "使用者刪除成功";
        }

        // 3秒後回到使用者管理頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
