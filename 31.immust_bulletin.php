<html>
    <head>

```
<!-- 網頁標題 -->
<title>明新科技大學資訊管理系</title>

<!-- 設定網頁編碼為 UTF-8，避免中文亂碼 -->
<meta charset="utf-8">

<!-- 引入 Flexslider 輪播套件 CSS -->
<link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">

<!-- 引入 jQuery 函式庫 -->
<script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>

<!-- 引入 Flexslider 輪播套件 JS -->
<script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>

<script>

    /* 當網頁全部載入完成後執行 */
    $(window).load(function() {

        /* 啟動 Flexslider */
        $('.flexslider').flexslider({

            /* 輪播方式：slide(滑動) */
            animation: "slide",

            /* 由右往左輪播 */
            rtl: true

        });
    });

</script>

<style>

    /* ========================= */
    /* 全域設定 */
    /* ========================= */

    *{
        margin:0;                 /* 移除所有元素外距 */
        color:gray;               /* 預設文字顏色 */
        text-align:center;        /* 文字置中 */
    }

    /* ========================= */
    /* Top 區域 */
    /* ========================= */

    .top{
         background-color: white; /* 頂部背景白色 */
    }

    .top .container{

        /* 使用 Flex 排版 */
        display: flex;

        /* 垂直置中 */
        align-items: center;

        /* 左右平均分配 */
        justify-content: space-between;

        /* 內距 */
        padding:10px;
    }

    .top .logo{

        /* LOGO文字大小 */
        font-size: 35px;

        /* 粗體 */
        font-weight: bold;
    }

    .top .logo img{

        /* LOGO圖片寬度 */
        width: 100px;

        /* 垂直對齊 */
        vertical-align: middle;
    }

    .top .top-nav{

        /* 導覽列文字大小 */
        font-size: 25px;

        /* 粗體 */
        font-weight: bold;
    }

    .top .top-nav a{

        /* 移除底線 */
        text-decoration: none;
    }

    /* ========================= */
    /* 主選單區域 */
    /* ========================= */

    .nav {

        /* 深灰背景 */
        background-color:#333;

        /* Flex排版 */
        display: flex;

        /* 水平置中 */
        justify-content: center;
    }

    .nav ul {

        /* 移除項目符號 */
        list-style-type: none;

        /* 清除外距 */
        margin: 0;

        /* 清除內距 */
        padding: 0;

        /* 超出隱藏 */
        overflow: hidden;

        /* 背景色 */
        background-color: #333;
    }

    .nav li {

        /* 水平排列 */
        float: left;
    }

    .nav li a {

        /* 區塊顯示 */
        display: block;

        /* 白色文字 */
        color: white;

        /* 文字置中 */
        text-align: center;

        /* 內距 */
        padding: 14px 16px;

        /* 移除底線 */
        text-decoration: none;
    }

    /* 滑鼠移入效果 */
    .nav li a:hover {

        background-color: #111;
    }

    /* ========================= */
    /* 下拉式選單 */
    /* ========================= */

    /* 滑鼠移到 dropdown 顯示內容 */
    .dropdown:hover .dropdown-content {

        display: block;
    }

    /* 滑鼠移入主選單 */
    li.dropdown:hover{

        background-color: #333;
    }

    /* 下拉內容區 */
    .dropdown-content {

        /* 預設隱藏 */
        display: none;

        /* 絕對定位 */
        position: absolute;

        /* 背景色 */
        background-color: #333;

        /* 最小寬度 */
        min-width: 160px;

        /* 顯示層級 */
        z-index: 1;
    }

    /* 下拉連結 */
    .dropdown-content a {

        color: black;

        padding: 12px 16px;

        text-decoration: none;

        display: block;

        text-align: left;
    }

    /* ========================= */
    /* 輪播區 */
    /* ========================= */

    .slider{

        background-color: black;
    }

    /* ========================= */
    /* Banner區 */
    /* ========================= */

    .banner{

        /* 漸層背景 */
        background-image: linear-gradient(#ABDCFF,#0396FF);

        padding:30px;
    }

    .banner h1{

        padding: 20px;
    }

    /* ========================= */
    /* 師資介紹區 */
    /* ========================= */

    .faculty {

        display: block;

        justify-content: center;

        background-color:white;

        padding:40px;
    }

    .faculty h2 {

        font-size: 25px;

        color: rgb(50,51,52);

        padding-bottom:40px;
    }

    .faculty .container {

        display: flex;

        justify-content: space-around;

        align-items: center;
    }

    .faculty .teacher {

        display:block;

        text-decoration: none;
    }

    .faculty .teacher img{

        height: 200px;

        width: 200px;
    }

    .faculty .teacher h3{

        color: White;

        background-color: rgba(39,40,34,.500);

        text-align: center;
    }
```html
/* ========================= */
/* 相關資訊 contact 區 */
/* ========================= */

.contact {

    display: block;

    justify-content: center;

    margin-top: 30px;

    margin-bottom: 30px;
}

.contact h2{

    color: rgb(54, 82, 110);   /* 標題顏色 */

    font-size: 25px;           /* 標題大小 */
}

.contact .infos{

    display:flex;             /* 左右排版 */

    margin-top: 30px;

    justify-content: center;
}

.contact .infos .left{

    display:block;

    text-align: left;

    margin-right: 30px;
}

.contact .infos .left b{

    display:block;

    text-align: left;

    margin-top: 10px;

    text-decoration: bold;

    color: Gray;

    font-size: 18px;

    line-height: 18px;
}

.contact .infos .left span{

    display:block;

    text-align: left;

    margin-top: 10px;

    color: rgba(39,40,34,0.5);

    font-size: 16px;

    padding-left: 27px;
}

.contact .infos .right{

    height: 200px;
}

.contact .infos .right iframe{

    width: 100%;               /* 地圖寬度滿版 */

    height: 100%;              /* 地圖高度滿版 */

    border: 1px solid rgba(39,40,34,0.50);
}

/* ========================= */
/* footer 區 */
/* ========================= */

.footer{

    display: flex;

    justify-content: center;

    background-color: rgb(25,26,30);

    padding: 30px 0;
}

/* ========================= */
/* 登入視窗 modal */
/* ========================= */

.modal {

    display: none; /* 預設隱藏 */

    position: fixed; /* 固定在畫面 */

    z-index: 1; /* 最上層 */

    right: 50;

    top: 50;

    width: 20%; /* 寬度 */

    height: 20%; /* 高度 */

    overflow: auto; /* 可捲動 */

    background-color: rgba(255,255,255,0.9); /* 半透明背景 */

    padding-top: 50px;
}

/* ========================= */
/* 佈告欄 bulletin */
/* ========================= */

.bulletin{

    display: block;

    justify-content: center;

    background-color: rgb(255,204,153);

    padding: 30px 0;
}

.bulletin h1{

    padding:10px;
}

.bulletin table{

    border-collapse:collapse;

    font-family: 微軟正黑體;

    font-size:16px;

    border:1px solid #000;
}

.bulletin table th{

    background-color: #abdcff;

    color: #ffffff;
}

.bulletin table td{

    background-color: #ffffff;

    color: #0396ff;
}

/* ========================= */
/* body 開始 */
/* ========================= */

</style>
</head>

<body>

<!-- ========================= -->
<!-- top 區塊（網站標頭） -->
<!-- ========================= -->

<div class="top">
    <div class="container">

        <!-- LOGO + 系名 -->
        <div class="logo">

            <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">

            明新科技大學資訊管理系

        </div>

        <!-- 右上角連結 + 登入 -->
        <div class="top-nav">

            <a href=>明新科大</a>

            <a href=>明新管理學院</a>

            <!-- 點擊顯示登入視窗 -->
            <label onclick="document.getElementById('login').style.display='block'">登入</label>

            <!-- 登入視窗 -->
            <div id="login" class="modal">

                <span onclick="document.getElementById('login').style.display='none'">

                    &times; 管理系統登入

                </span>

                <!-- 登入表單 -->
                <form method=post action="10.login.php">

                    帳號：<input type=text name="id"><br />

                    密碼：<input type=password name="pwd"><p></p>

                    <input type=submit value="登入">

                    <input type=reset value="清除">

                </form>

            </div>

        </div>

    </div>
</div>

<!-- ========================= -->
<!-- 主選單 nav -->
<!-- ========================= -->

<div class="nav">

    <ul>

        <li><a href="#home">首頁</a></li>

        <li><a href="#introduction">系所簡介</a></li>

        <li class="dropdown">

            <a href="#faculty">成員簡介</a>

            <div class="dropdown-content">

                <a href="#faculty">黃老師</a>

                <a href="#faculty">李老師</a>

                <a href="#faculty">應老師</a>

            </div>

        </li>

        <li><a href="#about">相關資訊</a></li>

    </ul>

</div>

<!-- ========================= -->
<!-- slider 輪播區 -->
<!-- ========================= -->

<div class="slider">

    <div class="flexslider">

        <ul class="slides">

            <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>

            <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>

            <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>

        </ul>

    </div>

</div>
```html id="p3k8aa"

<!-- ========================= -->
<!-- 佈告欄 bulletin（PHP動態資料） -->
<!-- ========================= -->

<div class="bulletin">

    <h1>最新公告</h1>

    <?php

        /* 建立資料庫連線 */
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

        /* 從 bulletin 資料表抓取所有資料 */
        $result=mysqli_query($conn, "select * from bulletin");

        /* 建立表格標題列 */
        echo "<table border=2>
                <tr>
                    <th>佈告編號</th>
                    <th>佈告類別</th>
                    <th>標題</th>
                    <th>佈告內容</th>
                    <th>發佈時間</th>
                </tr>";

        /* 逐筆讀取資料庫資料 */
        while ($row=mysqli_fetch_array($result)){

            echo "<tr><td>";

            /* 佈告ID */
            echo $row["bid"];

            echo "</td><td>";

            /* 依 type 顯示公告類別 */
            if ($row["type"]==1) echo "系上公告";
            if ($row["type"]==2) echo "獲獎資訊";
            if ($row["type"]==3) echo "徵才資訊";

            echo "</td><td>";

            /* 標題 */
            echo $row["title"];

            echo "</td><td>";

            /* 內容 */
            echo $row["content"];

            echo "</td><td>";

            /* 發佈時間 */
            echo $row["time"];

            echo "</td></tr>";
        }

        /* 關閉表格 */
        echo "</table>";

    ?>

</div>

<!-- ========================= -->
<!-- 系所簡介 banner -->
<!-- ========================= -->

<div class="banner" id="introduction">

    <h1>系所簡介</h1>

    <h1>歷年教育部評鑑皆榮獲一等</h1>

    <h1>明新科技大學資訊管理系</h1>

    <h1>全國私立科大第一資管系</h1>

</div>

<!-- ========================= -->
<!-- 師資介紹 faculty -->
<!-- ========================= -->

<div class="faculty" id="faculty">

    <h2>師資介紹</h2>

    <div class="container">

        <a class="teacher" href="">

            <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />

            <h3>黃老師</h3>

        </a>

        <a class="teacher" href="">

            <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />

            <h3>李老師</h3>

        </a>

        <a class="teacher" href="">

            <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />

            <h3>應老師</h3>

        </a>

    </div>

</div>
``````html id="lastpart01"

<!-- ========================= -->
<!-- 相關資訊 contact 區 -->
<!-- ========================= -->

<div class="contact" id="about">

    <h2>相關資訊</h2>

    <div class="infos">

        <!-- 左側資訊 -->
        <div class="left">

            <b>明新科技大學管理學院大樓二樓</b>

            <span>304新竹縣新豐鄉新興路1號</span>

            <b> 電話:03-5593142</b>

            <span>分機:3431、3432、3433</span>

            <b> 傳真:03-5593142</b>

            <span>分機:3440</span>

        </div>

        <!-- 右側 Google 地圖 -->
        <div class="right">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954"
                frameborder="0"
                style="border:0"
                allowfullscreen>

            </iframe>

        </div>

    </div>

</div>

<!-- ========================= -->
<!-- footer 區 -->
<!-- ========================= -->

<div class="footer">

    &copy;Copyright 2022 Department of Information Management, MUST.
    All rights reserved.
    維護者 Tony SHHuang

</div>

<!-- ========================= -->
<!-- HTML 結尾 -->
<!-- ========================= -->

</body>
</html>

