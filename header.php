<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- ここからTwitterカードの記述 -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" href="./img/favicon.svg" sizes="any" type="img/svg+xml" />
  <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" />
  <!-- 180x180px -->
  <meta name="viewport" content="width=device-width, initiap-scale=1.0" />
  <meta name="robots" content="noindex , nofollow" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri( ) ?>/img/favicon.ico" />
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
  <!-- animate -->
  <link rel="stylesheet" href="../css/animate.css" />
  <!-- original -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header id="js-header" class="l-header">
    <div class="l-header__inner">
      <div class="c-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri( ) ?>/img/logo.png" alt="ロゴ" width="70" height="70" />
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
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>about/">私について</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>works/">制作実績</a></li>
            <li>
              <a href="https://x.com/hrmr_crt96">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                  <path
                    d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z" />
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
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>about/">私について</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>works/">制作実績</a></li>
        <li>
          <a href="https://x.com/hrmr_crt96"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px"
              height="50px">
              <path
                d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </header>