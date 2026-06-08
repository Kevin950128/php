<html>
<head>

<!-- ========================= -->
<!-- 網頁基本資訊 -->
<!-- ========================= -->

<title>明新科技大學資訊管理系</title>
<meta charset="utf-8">

<!-- 輪播套件 CSS -->
<link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>

<!-- 輪播套件 JS -->
<script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>

<script>
/* 頁面載入完成後啟動輪播 */
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        rtl: true
    });
});
</script>

<style>

/* ========================= */
/* 全域設定 */
/* ========================= */

*{
    margin:0;
    color:gray;
    text-align:center;
}

/* ========================= */
/* 上方標題區 */
/* ========================= */

.top{
    background-color:white;
}

.top .container{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:10px;
}

.top .logo{
    font-size:35px;
    font-weight:bold;
}

.top .logo img{
    width:100px;
    vertical-align:middle;
}

.top .top-nav{
    font-size:25px;
    font-weight:bold;
}

.top .top-nav a{
    text-decoration:none;
}

/* ========================= */
/* 主選單 */
/* ========================= */

.nav{
    background-color:#333;
    display:flex;
    justify-content:center;
}

.nav ul{
    list-style:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background:#333;
}

.nav li{
    float:left;
}

.nav li a{
    display:block;
    color:white;
    padding:14px 16px;
    text-decoration:none;
}

.nav li a:hover{
    background:#111;
}

/* 下拉選單效果 */
.dropdown:hover .dropdown-content{
    display:block;
}

.dropdown-content{
    display:none;
    position:absolute;
    background:#333;
    min-width:160px;
}

.dropdown-content a{
    color:black;
    display:block;
    padding:12px 16px;
    text-align:left;
}

/* ========================= */
/* 輪播區 */
/* ========================= */

.slider{
    background:black;
}

/* ========================= */
/* 系所簡介區 */
/* ========================= */

.banner{
    background:linear-gradient(#ABDCFF,#0396FF);
    padding:30px;
}

.banner h1{
    padding:20px;
}

/* ========================= */
/* 師資介紹 */
/* ========================= */

.faculty{
    background:white;
    padding:40px;
}

.faculty h2{
    font-size:25px;
}

.faculty .container{
    display:flex;
    justify-content:space-around;
}

.faculty .teacher{
    display:block;
    text-decoration:none;
}

.faculty .teacher img{
    width:200px;
    height:200px;
}

.faculty .teacher h3{
    background:rgba(39,40,34,0.5);
    color:white;
}

/* ========================= */
/* 相關資訊 */
/* ========================= */

.contact{
    margin:30px 0;
}

.contact h2{
    color:rgb(54,82,110);
    font-size:25px;
}

.contact .infos{
    display:flex;
    justify-content:center;
    margin-top:30px;
}

.contact .infos .left{
    text-align:left;
    margin-right:30px;
}

.contact .infos .left b{
    display:block;
    margin-top:10px;
    font-size:18px;
}

.contact .infos .left span{
    display:block;
    margin-top:10px;
    font-size:16px;
    color:rgba(39,40,34,0.5);
}

.contact .infos .right{
    height:200px;
}

.contact .infos .right iframe{
    width:100%;
    height:100%;
    border:1px solid rgba(39,40,34,0.5);
}

/* ========================= */
/* 頁尾 */
/* ========================= */

.footer{
    display:flex;
    justify-content:center;
    background:#191a1e;
    padding:30px 0;
}

/* ========================= */
/* 登入視窗 */
/* ========================= */

.modal{
    display:none;
    position:fixed;
    right:50px;
    top:50px;
    width:20%;
    height:20%;
    background:rgba(255,255,255,0.9);
    padding-top:50px;
}

/* ========================= */
/* 公告欄 */
/* ========================= */

.bulletin{
    background:rgb(255,204,153);
    padding:30px 0;
}

.bulletin table{
    border-collapse:collapse;
    font-size:16px;
}

.bulletin table th{
    background:#abdcff;
    color:white;
}

.bulletin table td{
    background:white;
    color:#0396ff;
}

</style>

</head>

<body>

<!-- ========================= -->
<!-- 上方LOGO區 -->
<!-- ========================= -->

<div class="top">
    <div class="container">

        <div class="logo">
            <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
            明新科技大學資訊管理系
        </div>

        <div class="top-nav">

            <a>明新科大</a>
            <a>明新管理學院</a>

            <!-- 登入按鈕 -->
            <label onclick="document.getElementById('login').style.display='block'">
                登入
            </label>

            <!-- 登入視窗 -->
            <div id="login" class="modal">

                <span onclick="document.getElementById('login').style.display='none'">
                    × 管理系統登入
                </span>

                <form method="post" action="10.login.php">
                    帳號：<input type="text" name="id"><br>
                    密碼：<input type="password" name="pwd"><br>
                    <input type="submit" value="登入">
                    <input type="reset" value="清除">
                </form>

            </div>

        </div>
    </div>
</div>

<!-- ========================= -->
<!-- 主選單 -->
<!-- ========================= -->

<div class="nav">
<ul>
    <li><a href="#home">首頁</a></li>
    <li><a href="#introduction">系所簡介</a></li>

    <li class="dropdown">
        <a href="#faculty">成員簡介</a>

        <div class="dropdown-content">
            <a>黃老師</a>
            <a>李老師</a>
            <a>應老師</a>
        </div>

    </li>

    <li><a href="#about">相關資訊</a></li>
</ul>
</div>
<!-- ========================= -->
<!-- 輪播區（slider） -->
<!-- ========================= -->

<div class="slider">
<div class="flexslider">
<ul class="slides">

    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG"></li>
    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG"></li>
    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG"></li>

</ul>
</div>
</div>

<!-- ========================= -->
<!-- 最新公告（bulletin） -->
<!-- ========================= -->

<div class="bulletin">

<h1>最新公告</h1>

<?php
$conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");
$result=mysqli_query($conn,"select * from bulletin");

/* 建立公告表格 */
echo "<table border=2>
<tr>
<th>編號</th>
<th>類別</th>
<th>標題</th>
<th>內容</th>
<th>時間</th>
</tr>";

/* 逐筆輸出資料 */
while($row=mysqli_fetch_array($result)){

    echo "<tr><td>".$row["bid"]."</td><td>";

    /* 判斷公告類別 */
    if($row["type"]==1) echo "系上公告";
    if($row["type"]==2) echo "獲獎資訊";
    if($row["type"]==3) echo "徵才資訊";

    echo "</td><td>"
        .$row["title"].
        "</td><td>"
        .$row["content"].
        "</td><td>"
        .$row["time"].
        "</td></tr>";
}

/* 結束表格 */
echo "</table>";
?>

</div>

<!-- ========================= -->
<!-- 系所簡介（banner） -->
<!-- ========================= -->

<div class="banner" id="introduction">

<h1>系所簡介</h1>
<h1>歷年評鑑一等</h1>
<h1>全國第一資管系</h1>

</div>

<!-- ========================= -->
<!-- 師資介紹（faculty） -->
<!-- ========================= -->

<div class="faculty" id="faculty">

<h2>師資介紹</h2>

<div class="container">

    <a>
        <img src="faculty1.jpg">
        <h3>黃老師</h3>
    </a>

    <a>
        <img src="faculty2.jpg">
        <h3>李老師</h3>
    </a>

    <a>
        <img src="faculty3.jpg">
        <h3>應老師</h3>
    </a>

</div>

</div>

<!-- ========================= -->
<!-- 相關資訊區（contact） -->
<!-- ========================= -->

<div class="contact" id="about">

    <!-- 標題 -->
    <h2>相關資訊</h2>

    <!-- 左右資訊容器 -->
    <div class="infos">

        <!-- 左側：聯絡資訊 -->
        <div class="left">

            <!-- 地址標題 -->
            <b>明新科技大學管理學院大樓二樓</b>

            <!-- 地址內容 -->
            <span>304新竹縣新豐鄉新興路1號</span>

            <!-- 電話 -->
            <b> 電話:03-5593142</b>
            <span>分機:3431、3432、3433</span>

            <!-- 傳真 -->
            <b> 傳真:03-5593142</b>
            <span>分機:3440</span>

        </div>

        <!-- 右側：Google 地圖 -->
        <div class="right">

            <!-- 嵌入 Google Maps -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954"
                frameborder="0"
                style="border:0"
                allowfullscreen>
            </iframe>

        </div>

    </div>

</div>

<!-- ========================= -->
<!-- 頁尾區（footer） -->
<!-- ========================= -->

<div class="footer">

    <!-- 版權宣告 -->
    &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved.

    <!-- 維護者資訊 -->
    維護者 Tony SHHuang

</div>
</body>
</html>
