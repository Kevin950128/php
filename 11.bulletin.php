<?php
    // 關閉錯誤顯示（不建議正式環境使用）
    error_reporting(0);

    // 啟動 session（用來記住登入狀態）
    session_start();

    // 如果沒有登入（SESSION 裡沒有 id）
    if (!$_SESSION["id"]) {

        // 顯示提示
        echo "請先登入";

        // 3秒後跳回登入頁
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        // 顯示歡迎訊息 + 功能選單
        echo "歡迎, ".$_SESSION["id"]."
        [<a href=12.logout.php>登出</a>] 
        [<a href=18.user.php>管理使用者</a>] 
        [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 連接資料庫
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

        // 查詢 bulletin（佈告）資料表
        $result=mysqli_query($conn, "select * from bulletin");

        // 建立表格標題
        echo "<table border=2>
        <tr>
            <td></td>
            <td>佈告編號</td>
            <td>佈告類別</td>
            <td>標題</td>
            <td>佈告內容</td>
            <td>發佈時間</td>
        </tr>";

        // 一筆一筆讀取資料
        while ($row=mysqli_fetch_array($result)){

            // 每一列資料
            echo "<tr>

            <!-- 修改 / 刪除按鈕 -->
            <td>
                <a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
                <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a>
            </td><td>";

            // 顯示欄位資料
            echo $row["bid"];      // 編號
            echo "</td><td>";

            echo $row["type"];     // 類別
            echo "</td><td>"; 

            echo $row["title"];    // 標題
            echo "</td><td>";

            echo $row["content"];  // 內容
            echo "</td><td>";

            echo $row["time"];     // 時間
            echo "</td></tr>";
        }

        // 結束表格
        echo "</table>";
    }
?>
