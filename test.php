<?php require './blog/wp-blog-header.php'; ?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-gawesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="static/css/style.css?ver=2.1.1"" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/lukehaas/Scrollify/01cca204/jquery.scrollify.min.js"></script>
    <title>AMI TANAKA(田中 亜彌)|原宿で活動中のフリーランス美容師</title>
    <meta name="description" content="美容師歴11年。あなたのキレイをお手伝いさせていただきます。ライフスタイルに合わせたお手入れが・セットしやすい・女性ならではの大人かわいいヘアデザイン髪型をお作りいたします。">
    <meta property="og:title" content="AMI TANAKA(田中 亜彌)|原宿で活動中のフリーランス美容師">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://ami-tanaka.com/static/img/ogp.jpg">
    <meta property="og:site_name" content="AMI TANAKA(田中 亜彌)|原宿で活動中のフリーランス美容師">
    <meta property="og:title" content="AMI TANAKA(田中 亜彌)|原宿で活動中のフリーランス美容師">
    <meta property="description" content="美容師歴12年。あなたのキレイをお手伝いさせていただきます。ライフスタイルに合わせたお手入れが・セットしやすい・女性ならではの大人かわいいヘアデザイン髪型をお作りいたします。">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="http://ami-tanaka.com">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--スクロールに応じて.scrollに.fadein/classを付与-->
    <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                $('.c-blackmask').each(function() {
                    var elemPos = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    if (scroll > elemPos - windowHeight - 100) {
                        $(this).addClass('scroll-black');
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                $('.c-moved').each(function() {
                    var elemPos = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    if (scroll > elemPos - windowHeight - 100) {
                        $(this).addClass('scroll-move');
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                $('.trigger-button').each(function() {
                    var elemPos = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    if (scroll > elemPos - windowHeight - 100) {
                        $(this).addClass('p-kobaken-web-button');
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                $('.c-moved').each(function() {
                    var elemPos = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    if (scroll > elemPos - windowHeight - 100) {
                        $(this).addClass('scroll-move');
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('.hover').hover(
                function() {
                    $(this).addClass('on_hover');
                },
                function() {
                    $(this).removeClass('on_hover');
                }
            );
        });
    </script>
    <!--GA-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-55828435-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        var option = {
            section: '.js-section', // 対象を指定
            easing: "swing", // イージングをしてい(jQueryのanimation)
            scrollSpeed: 600, // スクロール時の速度
            scrollbars: true, // スクロールバーを表示するか
            setHeights: false,
        };

        $(function() {
            $.scrollify(option); // scrollifyの実行
        });
    </script>
</head>

<body>
    <header>
        <div class="flex-center fadein"> <img src="static/img/logo.svg" alt=""></div>
        <div class="flex-bottom bounce fadein"> <img src="static/img/scrolldown.svg" alt=""></div>
    </header>
    <!--01welcome-->
    <div class="p-section-welcome p-section-basic">
        <div class="p-section-welcome-menu"><a href="http://ami-tanaka.hatenablog.com/" target="_blank"> ブログ</a> | <a href="#menu">メニュー</a> | <a href="#profile">プロフィール</a> | <a href="#access">アクセス</a></div>
        <div class="p-section-welcome-column">
            <div class="c-button-ami-brown"><a href="https://line.me/R/ti/p/%40kwm0570z"> 予約する</a></div>
            <div class="c-button-ami-brown"><a href="https://line.me/R/ti/p/%40kwm0570z"> 相談する</a></div>
        </div>
        <div class="p-section-welcome-title">
            <h2>WELCOME!</h2>
            <div class="p-section-dot"><img src="static/img/dot-first.svg" alt=""></div>
            <p class="p-section-welcome-title-sub">あなたのキレイを<br>一緒につくります！</p>
        </div>
        <div class="p-section-welcome-title-description">こんにちわ！田中亜彌です。<br>
            <nr></nr>ライフスタイルや髪質に合わせた、お手入れしやすい『大人かわいい』ヘアデザインを、女性ならではの視点でお作りいたします！<br><br>時代の流行にとらわれず、【あなただけ】のオーダーメイドなヘアスタイルを。<br><br>来店から仕上がりまでのすべてを１人で担当する《完全マンツーマン》。<br><br>《LINEカウンセリング》で、来店前の髪型やお悩みのご相談、退店後のアフターフォローもお任せください！！</div>
    </div>
    <!--02hairstye-->
    <div class="p-section-hairstyle p-section-basic">
        <!--dot-->
        <div class="p-section-dot-full"><img src="static/img/dotblue.jpg" alt=""></div>
        <div class="p-section-common-title">
            <div class="p-section-common-title-img"><img src="static/img/icn-ttl-menu.svg" alt=""></div>
        </div>

        <?php
        $args = array(
        'posts_per_page' => 3 // 表示件数の指定
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ): // ループの開始
        setup_postdata( $post ); // 記事データの取得
        ?>





            <a href="<?php the_permalink(); ?>">
                <div class="blog">

                    <div class="blog-image">
                        <div class="blog-text">
                            <p><?php the_date("Y.n.j"); ?></p>
                        </div>
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="blog-title">
                        <?php the_title(); ?>
                    </div>
                </div>
            </a>
            <?php
    endforeach; // ループの終了
    wp_reset_postdata(); // 直前のクエリを復元する
    ?>

 <div class="c-button-ami-outline"><a href="http://ami-tanaka.com/blog"> ブログを見る</a></div>

                <div class="p-section-common-title">
                    <div class="p-section-common-title-img"><img src="static/img/icn-ttl-insta.svg" alt=""></div>
                </div>
                <!-- InstaWidget-->
                <div class="p-section-hairstyle-insta"><a href="https://instawidget.net/v/user/ami_tanaka1231" id="link-8e687da745d9cc576a2ac00861254b2fbe41707d028d7bc364ed6844422bbbb7">@ami_tanaka1231</a>
                    <script src="https://instawidget.net/js/instawidget.js?u=8e687da745d9cc576a2ac00861254b2fbe41707d028d7bc364ed6844422bbbb7&width=500px"></script>
                </div>
                <div class="c-button-ami-outline"><a href="https://www.instagram.com/ami_tanaka1231/"> 写真を見る</a></div>
    </div>
    <!--03menu-->
    <div class="p-section-menu p-section-basic" id="menu">
        <div class="p-section-dot-full"><img src="static/img/dotorange.png" alt=""></div>
        <div class="p-section-common-title">
            <div class="p-section-common-title-img"><img src="static/img/icn-ttl-menu.svg" alt=""></div>
            <h2>メニュー </h2>
        </div>
      
        <?php 
	$page_info = get_page_by_path('201');
	$page = get_post($page_info);
	echo $page->post_content;
?>
    </div>
    <!--04profile-->
    <div class="p-section-profile p-section-basic" id="profile">
        <div class="p-section-common-title">
            <div class="p-section-common-title-img"><img src="static/img/icn-ttl-profile.svg" alt=""></div>
            <h2>プロフィール</h2>
        </div>
        <div class="p-section-profile-img"><img src="static/img/profile.jpg" alt=""></div>
        <div class="p-section-profile-name">田中亜彌</div>
        <div class="p-section-profile-description">美容師歴12年。<br>地域密着型のサロンで、幅広い年齢層のお客様を担当。<br>2018年1月より、フリーランス美容師に転向。<br><br>ショートカット、ボブ、メンズカットのシルエットをキレイに作るスタイルや、「明るく見せる白髪染め」を得意としています。</div>
        <!--04profile-sns-->
        <div class="p-section-profile-sns">
            <div class="p-section-profile-sns-column">
                <a href="https://www.facebook.com/amiiiiko" target="_blank"> <img src="static/img/facebook.svg" alt=""></a>
            </div>
            <div class="p-section-profile-sns-column">
                <a href="https://twitter.com/amiiiiko_T" target="_blank"> <img src="static/img/twitter.svg" alt=""></a>
            </div>
            <div class="p-section-profile-sns-column">
                <a href="https://www.instagram.com/p/BaEwYcKBQt8/?taken-by=ami_tanaka1231" target="_blank"> <img src="static/img/instagram.svg" alt=""></a>
            </div>
        </div>
        <div class="p-section-dot"><img src="static/img/dot-second.svg" alt=""></div>
        <div class="p-section-profile-button">
            <div class="c-button-ami-brown"><a href="https://line.me/R/ti/p/%40kwm0570z"> LINEで相談・予約する</a></div>
            <div class="c-button-ami-outline"><a href="mailto:a0.0mi444.net@gmail.com"> メールで相談・予約する</a></div>
            <div class="c-button-ami-outline"><a href="http://ami-tanaka.hatenablog.com/" target="_blank"> ブログを見る</a></div>
        </div>
    </div>
    <!--05access-->
    <div class="p-section-access p-section-basic" id="access">
        <div class="p-section-common-title">
            <div class="p-section-common-title-img"><img src="static/img/icn-ttl-reservation.svg" alt=""></div>
            <h2>ご予約・アクセス</h2>
        </div>
        <div class="p-section-access-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.258773238358!2d139.7019572652586!3d35.67062973019681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cbb295d389f%3A0x24783333ce6523db!2z5pel5pys44CB44CSMTUwLTAwMDEg5p2x5Lqs6YO95riL6LC35Yy656We5a6u5YmN77yR5LiB55uu77yR77yV4oiS77yR77yVIOOCv-OCrOODn-elnuWuruWJjeODk-ODqw!5e0!3m2!1sja!2sfr!4v1511190482847"
                width="600" height="270" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        <div class="p-section-profile-description">東京都渋谷区神宮前1-15-15 タガミ神宮前ビル1階<br>原宿駅竹下口から徒歩４分<br><a href="https://www.google.fr/maps/place/%E6%97%A5%E6%9C%AC%E3%80%81%E3%80%92150-0001+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%8B%E8%B0%B7%E5%8C%BA%E7%A5%9E%E5%AE%AE%E5%89%8D%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%91%EF%BC%95%E2%88%92%EF%BC%91%EF%BC%95+%E3%82%BF%E3%82%AC%E3%83%9F%E7%A5%9E%E5%AE%AE%E5%89%8D%E3%83%93%E3%83%AB/@35.6706297,139.7019573,17z/data=!3m1!4b1!4m5!3m4!1s0x60188cbb295d389f:0x24783333ce6523db!8m2!3d35.6706208!4d139.7041609">→google mapを見る</a><br><br>「お名前」「希望メニュー」「希望日時」を明記の上お問い合わせいただければと思います。
            ご予約だけではなく、ご相談だけのカウンセリング等も承っております♩
        </div>
        <div class="c-button-ami-brown"><a href="https://line.me/R/ti/p/%40kwm0570z"> LINEで相談・予約する</a></div>
        <div class="c-button-ami-outline"><a href="mailto:a0.0mi444.net@gmail.com"> メールで相談・予約する</a></div>
    </div>
    <!--06faq-->
    <div class="p-section-faq p-section-basic">
        <div class="p-section-common-title">
            <div class="p-section-common-title-img"><img src="static/img/icn-ttl-faq.svg" alt=""></div>
            <h2>よくある質問</h2>
        </div>
        <div class="p-section-faq-column">
            <p style="margin:0 0 30px;">24時間365日、いつでもコミュニケーション取らせていただきます。<br>気になった時にいつでもご質問・ご相談ください♪</p>
            <div class="c-button-ami-brown"><a href="https://line.me/R/ti/p/%40kwm0570z"> LINEで相談・予約する</a></div>
            <div class="c-button-ami-outline"><a href="mailto:a0.0mi444.net@gmail.com"> メールで相談・予約する</a></div>
        </div>
    </div>
    <footer>
        <p>© AMI TANAKA</p>
    </footer>
</body>

</html>