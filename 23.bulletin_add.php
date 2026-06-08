<?php

    // 關閉錯誤訊息顯示
    error_reporting(0);

    // 啟動 Session
    session_start();

    // 檢查是否已登入
    if (!$_SESSION["id"]) {

        // 未登入顯示訊息
        echo "please login first";

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

        // 組成 INSERT SQL 指令
        $sql="insert into bulletin
              (title, content, type, time)
              values
              (
                '{$_POST['title']}',
                '{$_POST['content']}',
                {$_POST['type']},
                '{$_POST['time']}'
              )";

        // 執行 SQL 指令
        if (!mysqli_query($conn, $sql)){

            // 新增失敗
            echo "新增命令錯誤";
        }
        else{

            // 新增成功
            echo "新增佈告成功，三秒鐘後回到網頁";

            // 3秒後回公告列表
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }

?>
