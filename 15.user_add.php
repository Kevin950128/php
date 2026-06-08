<?php

// 關閉錯誤訊息顯示
error_reporting(0);

// 啟動 Session
session_start();

// 檢查是否已登入
if (!$_SESSION["id"]) {

    // 未登入顯示訊息
    echo "請登入帳號";

    // 3秒後跳回登入頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else {

   // 建立 MySQL 資料庫連線
   // 格式：
   // mysqli_connect(主機名稱, 帳號, 密碼, 資料庫名稱)
   $conn=mysqli_connect(
       "120.105.96.90",
       "immust",
       "immustimmust",
       "immust"
   );

   // SQL 新增指令
   // 將表單送來的 id 和 pwd 寫入 user 資料表
   $sql="insert into user(id,pwd)
         values('{$_POST['id']}',
                '{$_POST['pwd']}')";

   // 顯示 SQL 指令（除錯時可使用）
   // echo $sql;

   // 執行 SQL 指令
   if (!mysqli_query($conn, $sql)) {

     // 執行失敗
     echo "新增命令錯誤";

   }
   else{

     // 執行成功
     echo "新增使用者成功，三秒鐘後回到網頁";

     // 3秒後回到使用者管理頁面
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
