<?php
    // 啟動 session
    session_start();

    // 刪除 session 中的 id（代表登出）
    unset($_SESSION["id"]);

    // 顯示訊息
    echo "登出成功....";

    // 3秒後跳回登入頁
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
