<?php
   # mysqli_connect() 建立資料庫連結
   // 連到資料庫：主機IP、帳號、密碼、資料庫名稱
   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   // 執行 SQL 指令：抓出 user 資料表的所有資料
   $result=mysqli_query($conn, "select * from user");

   # mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   // 設定一個變數 login，預設為 FALSE（尚未登入成功）
   $login=FALSE;

   // 用 while 迴圈，一筆一筆讀取資料庫中的使用者資料
   while ($row=mysqli_fetch_array($result)) {

     // 檢查：使用者輸入的 id 和 pwd
     // 是否和資料庫中的某一筆資料相同
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {

       // 如果有符合，就代表登入成功
       $login=TRUE;
     }
   } 

   // 如果 login 為 TRUE（代表有找到符合的帳密）
   if ($login==TRUE) {

    // 啟動 session（用來記住使用者登入狀態）
    session_start();

    // 把使用者的 id 存進 session
    $_SESSION["id"]=$_POST["id"];

    // 顯示登入成功訊息
    echo "登入成功";

    // 3 秒後自動跳轉到 bulletin 頁面
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

   // 如果沒有任何一筆符合（登入失敗）
   else{

    // 顯示錯誤訊息
    echo "帳號/密碼 錯誤";

    // 3 秒後跳回登入頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
   }
?>
