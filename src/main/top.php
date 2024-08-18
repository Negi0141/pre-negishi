<!-- トップページ -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
    <link rel="stylesheet" href="../assets/css/top.css">
    <link rel="stylesheet" href="">
</head>

<body>
    <main>
        <?php include_once '../includes/header.php' ?>
        <!-- メインビジュアル -->
        <section class="mainvisual">
            <figure>
                <img class="mainvisual-img" src="../assets//img/2b822a2758575b3fbe5c6114d8f25b21.jpg" alt="">
            </figure>
        </section>
        <section class="logout">
            <div class="login-content"><a href="../auth/login.php">ログイン</a></div>
        </section>
        <!-- インフォメーション -->
        <section class="information">
            <div class="information-title">
                INFORMATION <br>インフォメーション
            </div>
            <div class="information-content">
                <div class="business-hours">
                    <div class="business-img">
                        <img src="../assets/img/info-icon01.svg" alt="">
                    </div>
                    <div class="business-text">
                        10:00-22:00
                        最終入館は21:00
                    </div>
                </div>
                <div class="ticket">
                    <div class="ticket-img">
                        <img src="../assets/img/info-icon02.svg" alt="">
                    </div>
                    <div class="ticket-text">
                        <div class="ticket-adult">
                            大人（高校生・16歳以上）
                            ¥2,200/¥2,000
                            時期によって料金が変動します
                        </div>
                        <div class="ticket-children">
                            子ども（小中学生）
                            ¥1,100/¥1,000
                            時期によって料金が変動します
                        </div>
                        <div class="ticket-baby">
                            幼児（3歳以上）
                            ¥200
                        </div>
                    </div>
                </div>
                <div class="access">
                    <div class="access-img">
                        <img src="../assets/img/info-icon03.svg" alt="">
                    </div>
                    <div class="access-text">
                        埼玉県
                        南2条西3丁目20
                    </div>
                </div>
            </div>
        </section>
        <!-- コンテンツ -->
        <section class="content">
            <div class="pickUp"></div>
            <div class="recommend"></div>
            <div class="news"></div>
        </section>
    </main>
</body>

</html>