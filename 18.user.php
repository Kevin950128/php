<html>
    <head>
        <title>使用者管理</title>
    </head>
    <body>

    <?php
        // 關閉錯誤顯示
        error_reporting(0);

        // 啟動 session
        session_start();

        // 如果沒登入
        if (!$_SESSION["id"]) {

            // 提示訊息
            echo "請登入帳號";

            // 跳轉回登入頁
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            // 顯示標題與功能
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] 
                [<a href=11.bulletin.php>回佈告欄列表</a>]<br>

                <!-- 表格開始 -->
                <table border=1>
                    <tr>
                        <td></td>
                        <td>帳號</td>
                        <td>密碼</td>
                    </tr>";
            
            // 連接資料庫
            $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

            // 查詢 user 資料表
            $result=mysqli_query($conn, "select * from user");

            // 一筆一筆顯示
            while ($row=mysqli_fetch_array($result)){

                // 每個使用者一列
                echo "<tr>

                <!-- 修改 / 刪除 -->
                <td>
                    <a href=19.user_edit_form.php?id={$row['id']}>修改</a>
                    ||
                    <a href=17.user_delete.php?id={$row['id']}>刪除</a>
                </td>

                <!-- 帳號 -->
                <td>{$row['id']}</td>

                <!-- 密碼（⚠️ 明文顯示，很不安全） -->
                <td>{$row['pwd']}</td>

                </tr>";
            }

            // 結束表格
            echo "</table>";
        }
    ?> 
    </body>
</html>
