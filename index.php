<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    <header>
        <nav id="navlist">
            <div class="logo">
                <p>BBB</p>
                <p>英会話スクール</p>
            </div>

            <div class="nav-options">
                <p><a href="#reason" target="_blank">BBBが選ばれる理由</a></p>
                <p><a href="#student-review" target="_blank">受験生の声</a></p>
                <p><a href="#school" target="_blank">スクールの概要</a></p>

                <a href="" class="apply">無料体験を申し込む</a>
            </div>

           <div class="toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>  
        </nav>
          
    </header>

    <section id="main">
        <div class="mainimage">
            <img src="<?php echo get_template_directory_uri(); ?>/logo/blackboard.jpg" alt="blackboard">
        </div>
        <div class="mainphrase">
            <p>話して学ぼう！</p>
            <p>BBB英会話スクール</p>
            <a href="">無料体験はこちら</a>
        </div>
    </section>

    <section id="reason">
        <div class="subtitle">
            <h2>BBBが選ばれる理由</h2>
            <hr>
        </div>
        
        <div class="service">
            <div class="service1">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/logo/pc.png" alt="laptop">
                </div>
                <div>
                    <p>オンライン対応</p>
                    <p>24時間いつでも受講できる!</p>
                </div>
            </div>
    
            <div class="service2">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/logo/human.png" alt="human">
                </div>
                <div>
                    <p>講師はネイティブ</p>
                    <p>お気に入りの講師が自由に選べる！</p>
                </div>
            </div> 
        </div>
    </section>

    <section id="student-review">
        <div class="subtitle">
            <h2>受験生の声</h2>
            <hr>
        </div>

        <div class="studentA">
            <div class="profile">
                <div class="face">
                    <img src="<?php echo get_template_directory_uri(); ?>/logo/personA.png" alt="personA">
                </div>
                <div class="background">
                    <p>○○○さん</p>
                    <p>大学生</p>
                </div>
            </div>
            <p class="textA">
                テキストテキストテキストテキストテキストテキストテキス 
                トテキストテキスト テキストテキストテキストテキストテキストテキストテキス 
                トテキストテキスト
            </p>
        </div>
        <div class="studentB">
            <div class="profile">
                <div class="face">
                    <img src="<?php echo get_template_directory_uri(); ?>/logo/personB.png" alt="personA">
                </div>
                <div class="background">
                    <p>○○○さん</p>
                    <p>会社員</p>
                </div>
            </div>
            <p class="textB">
                テキストテキストテキストテキストテキストテキストテキス 
                トテキストテキスト テキストテキストテキストテキストテキストテキストテキス 
                トテキストテキスト
            </p>
        </div>
        <div class="studentC">
            <div class="profile">
                <div class="face">
                    <img src="<?php echo get_template_directory_uri(); ?>/logo/personC.png" alt="personA">
                </div>
                <div class="background">
                    <p>○○○さん</p>
                    <p>自営業</p>
                </div>
            </div>
            <p class="textC">
                テキストテキストテキストテキストテキストテキストテキス 
                トテキストテキスト テキストテキストテキストテキストテキストテキストテキス 
                トテキストテキスト
            </p>
        </div>
    </section>

    <section id="school">
        <div class="subtitle">
            <h2>スクールの概要</h2>
            <hr>
        </div>

        <div class="first-row">
            <div class="lesson-content">
                <p>レッスン内容</p>
                <p>LESSON</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="price">
                <p>料金プラン</p>
                <p>PRICE</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </div>
        <div class="second-row">
            <div class="teacher-content">
                <p>レッスン内容</p>
                <p>LESSON</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="question">
                <p>BBBのQ&A</p>
                <p>Q&A</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </div>
    </section>

    <section id="application">
        <h1>まずは無料で、BBBの英会話を試してみませんか？</h1>
        <p>今なら初月のレッスンを特別価格で受講できる割引クーポンをプレゼント！</p>
        <a href="">無料体験に申し込む</a>
    </section>

    <footer>
        <div class="footer1">
            <div class="course">
                <p>コース一覧</p>
                <ul>
                    <li><a href="">スタンダードプラン</a></li>
                    <li><a href="">プレミアムプラン</a></li>
                    <li><a href="">短期集中プラン</a></li>
                    <li><a href="">日常英会話コース</a></li>
                    <li><a href="">ビジネス英会話コース</a></li>
                </ul>
            </div>
            <div class="teachers">
                <p>講師紹介</p>
                <ul>
                    <li><a href="">講師について</a></li>
                    <li><a href="">講師一覧</a></li>
                    <li><a href="">講師を探す</a></li>
                </ul>
            </div>
            <div class="company">
                <p>会社情報</p>
                <ul>
                    <li><a href="">会社概要</a></li>
                    <li><a href="">採用情報</a></li>
                </ul>
            </div>
            <div class="bbb">
                <p>BBBについて</p>
                <ul>
                    <li><a href="">よくあるご質問</a></li>
                    <li><a href="">ご利用規約</a></li>
                    <li><a href="">プライバシーポリシー</a></li>
                    <li><a href="">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    
        <div class="footer2">
            <p>&copy;BBB English School</p>
        </div>  
    </footer>

    <?php wp_footer(); ?>

    <!-- Javascript -->
    <script>
    let toggle = document.querySelector(".toggle-btn");
    let nav = document.querySelector("#navlist");

    toggle.addEventListener("click", () => {
        nav.classList.toggle("open");
    });
    </script>
</body>
</html>