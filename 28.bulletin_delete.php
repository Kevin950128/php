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

        // 組成 DELETE SQL 指令
        $sql="delete from bulletin
              where bid='{$_GET['bid']}'";

        // 除錯時可查看 SQL
        // echo $sql;

        // 執行刪除指令
        if (!mysqli_query($conn,$sql)){

            // 刪除失敗
            echo "佈告刪除錯誤";

        }else{

            // 刪除成功
            echo "佈告刪除成功";
        }

        // 3秒後回公告列表
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }

?>
