<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: https://ogp.me/ns#">
    <!-- ここからmetaタグの記述 -->
    <meta property="og:url" content="https://hiramaru.site/my-portfolio/" />
    <meta property="og:type" content="website or article" />
    <meta property="og:title" content="ページのタイトル" />
    <meta property="og:description" content="ページの説明文" />
    <meta property="og:site_name" content="my-portfolio" />
    <meta
      property="og:image"
      content="https://hiramaru.site/my-portfolio/img/ogp.png"
    />
    <!-- ここからTwitterカードの記述 -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@hrmr_crt96" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="./img/favicon.svg" sizes="any" type="img/svg+xml" />
    <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" />
    <!-- 180x180px -->
    <meta name="viewport" content="width=device-width, initiap-scale=1.0" />
    <meta name="robots" content="noindex , nofollow" />
    <title>My Portfolio</title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="./img/favicon.ico" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- animate -->
    <link rel="stylesheet" href="../css/animate.css" />
    <!-- original -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../js/script.js" />
  </head>
  <body>
    <!-- header -->
    <header id="js-header" class="l-header">
      <div class="l-header__inner">
        <div class="c-header__logo">
          <a href="#">
            <img src="../img/logo.png" alt="ロゴ" width="70" height="70" />
          </a>
        </div>
        <button class="c-drawer__icon">
          <div class="c-drawer__bars">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
        <div class="l-drawer">
          <div class="l-drawer__inner">
              <ul class="p-drawer__nav">
                <li><a href="">ホーム</a></li>
                <li><a href="/about">私について</a></li>
                <li><a href="/works">制作実績</a></li>
                <li>
                  <a href="https://x.com/hrmr_crt96">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 50 50"
                      width="50px"
                      height="50px"
                    >
                      <path
                        d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="p-drawer__copyright">
            <p class="c-copyright">
              <small lang="en">Mebumi`s Portfolio.</small>
            </p>
          </div>
        </div>
        <div class="l-drawer__bg"></div>

          <ul class="p-header__nav">
            <li><a href="">ホーム</a></li>
            <li><a href="/about">私について</a></li>
            <li><a href="/works">制作実績</a></li>
            <li>
              <a href="https://x.com/hrmr_crt96"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 50 50"
                  width="50px"
                  height="50px"
                >
                  <path
                    d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z"
                  />
                </svg>
              </a>
            </li>
          </ul>
      </div>
    </header>

    <section class="l-lower-about l-section">
        <div class="p-about__inner l-inner">
          <h2 class="c-section__title wow fadeInUp">私について</h2>
          <div class="p-about__container l-section__container">
            <div class="p-about__img wow fadeInLeft delay-2s">
              <img
                src="img/my-icon.png"
                alt="プロフィール画像"
                height="380"
                width="380"
              />
            </div>
            <div class="p-about__text wow fadeInRight delay-2s">
              <p class="p-about__myname">OHIRA MEGUMI  <span>- Web Corder -</span></p>
              <div class="p-about__desc">
                <p class="p-lower-about__title">経歴：</p>
                <p class="p-lower-about__desc">総合病院で臨床検査技師として5年間勤務。<br>
                  採血や心電図など様々な検査業務に従事し、新入社員の教育やサポートを個々に合わせて行ってきました。<br>
                  マルチタスクが強いられるなか、状況を見ながら協力して業務ができるようコミュニケーションをとってきました。</p><br>
                <p class="p-lower-about__title">WEB製作を始めたきっかけ :</p>
                <p class="p-lower-about__desc">幼少期から絵を描くことや工作が好きで、作ったもので喜んでもらえる仕事を探していました。<br>パソコンがあれば製作ができるプログラミングに興味があったこと、Webデザイナーという仕事をたまたま見つけたことからコーディングの勉強を始め、現在に至ります。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="l-skill l-section">
        <div class="l-skill__inner l-inner">
          <h2 class="c-section__title wow fadeInUp">スキル</h2>
          <div class="p-skill__container l-section__container">
            <ul>
              <li class="p-skill__card wow fadeInUp">
                <img src="./img/skill-1.png" alt="html/css">
                <p class="p-skill__name">HTML/ CSS(Sass）</p>
                <p class="p-skill__desc">
                  適切なタグ、FLOCSS-BEMを用いたマークアップやレスポンシブ対応が可能です。
                </p>
              </li>
              <li class="p-skill__card wow fadeInUp">
                <img src="./img/skill-2.png" alt="js/jquery">
                <p class="p-skill__name">JavaScript/JQuery</p>
                <p class="p-skill__desc">
                  ドロワーやスムーススクロールなど、サイトでよく使われるアニメーションが実装可能です。
                </p>
              </li>
              <li class="p-skill__card wow fadeInUp">
                <img src="./img/skill-3.png" alt="figma/xd/Photoshop">
                <p class="p-skill__name">Figma/XD/Photoshop</p>
                <p class="p-skill__desc">
                  画像の書き出し、デザインカンプからのコーディングが可能です。
                </p>
              </li>
              <li class="p-skill__card">
            <img src="./img/skill-4.png" alt="wordpress">
            <p class="p-skill__name">WordPress</p>
            <p class="p-skill__desc">既存のサイトをWordPress化し、カスタム投稿やカスタムフィールドの追加を実装させることができます。</p>
          </li>
            </ul>
          </div>
        </div>
      </section>

    <!-- footer -->
    <footer class="l-footer">
      <div class="l-footer__inner l-inner">
        <p class="c-copyright">
          <small lang="en">©Megumi's Portfolio.</small>
        </p>
      </div>
      <a class="c-pageTop" href="#">
        <div class="c-pageTop__arrow"></div>
      </a>
    </footer>

    <!-- jquery & iScroll -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- wow.js -->
    <script src="./js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- original -->
    <script src="./js/script.js"></script>
  </body>
</html>
