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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <!-- original -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header id="js-header" class="l-header p-header">
    <div class="l-header__inner">
      <div class="p-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <p>Megumi`s Portfolio.</p>
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
            <li><a href="<?php echo esc_url(home_url('/')); ?>about/">私について</a>
            </li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>works/">制作実績</a></li>

            <li>
              <a href="https://x.com/hrmr_crt96"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <rect width="36" height="36" fill="url(#pattern0_369_100)" fill-opacity="0.7" />
                  <defs>
                    <pattern id="pattern0_369_100" patternContentUnits="objectBoundingBox" width="1" height="1">
                      <use xlink:href="#image0_369_100" transform="scale(0.02)" />
                    </pattern>
                    <image id="image0_369_100" width="50" height="50"
                      xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC+klEQVR4nO2ZSWhUQRCGP424K24J7oiCOyoeBAUVPAQEEQlxuehBD4ogBD3pyZjcNOjJmwt6EEXwIgriRUGiYkxEQVDcUC+iMZt7kpaCP9CMSd6bl2ReT5wfipmp6aqpf17339XvQQEFFNAXlADVQD3QBrgcWxvwGKhSLYmwFWhJoXjXg1kt5UlIdAZQvMuwzmzIlAR2JVyGNQPFcYhUB1Csi7BjcYg0BFCoizATgEi0BlCoizCb+pFweWKR+K+IVETkOJdFQV+A+Yo7kGsiP4FlveQYC7yIkec3sEExG4E/aUytZ8BIYAhww/NvV541QHvE5rZLY5cATWmukeOKmQ58lu8rMFv+qhh7wTTgXVprxMk6vKmxxfPfAYYCw4D73cRd0ZUcBTxIQML1NxGzD8AkxZ71/Aflm5exNz0ERovotYQk3EAQMbuq2DHeIjdBWC7/PvneeO14TR9IuIEiYrZT8as99XkqQTBcABbp/d4+knADScRUZ45yHPX8JzPyl2Ypsy7XRMzuAkVa5LWezFrxhvEJZNalQcTssPLM9c41H4HJ8p/OFyJ/gFXKtcfzm0IhxXqeD0ScCrWCDZc9/275VgK/8oHIW09mp2hqOe0ntq8YjoROpBlYqlwT9Vrq3cyolRgUSRyCJNIObFKedcB7YKo+n/LGmTwbZgGNIRLZrxwLvQJvqq8aATzxBME2TtQBB0WkRvEmsy8zvrOdvKtd/yHfK2Cc/JdCIXJdc97akXvdfP8NWKD8hzz/GfkmJGjlI5EtiTo1izZ9LvYy7hEwXF3vbc+/zVtTHWkRMVmdGeMQ1WU2xjDDO4g1atEbTqRBxPaEFYrZEfNesf3j6xVT5vlveYLQkEsiJrObNX6tzh5x/4DXah57wmLge66I2G2brsbwU4J1dT6ihopcr5E0LRKDhkhLAEW6GP1cJOoDKNT1x2OFOPtB2lY5GB69NemMEwvlAT8MLYtLwifTHNiVKCMhinWzuS6lR3Kt+u3KbKZTAQUUwD/4C68XAvRNax0sAAAAAElFTkSuQmCC" />
                  </defs>
                </svg></a>
            </li>
            <li>
              <a href="https://github.com/Hiramaru-web12"><svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <rect width="30" height="30" fill="url(#pattern0_369_169)" fill-opacity="0.7" />
                  <defs>
                    <pattern id="pattern0_369_169" patternContentUnits="objectBoundingBox" width="1" height="1">
                      <use xlink:href="#image0_369_169" transform="scale(0.0208333)" />
                    </pattern>
                    <image id="image0_369_169" width="48" height="48"
                      xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADTElEQVR4nNWZSWgVQRCGP3dxwQU1UaIYIohCPIgeBBUxICghh+TiRU+SiEoQcUtQBEEjQRQ8iAmCInqIiLm4HIKglyBGIcQNxIMo0YMmasDELY5U7AfD8Lqnp2fGzPuh4PHmddX/93RXV9eDf1gI3AAGAC/jNgC0A0vxke/LADEvovUr7iMz7xWoXadAlo2nsa9kgIQX00adgJdFAbLBuoFOZfL5c5YF9AEXgGqgCD2KgRqgJcHMR5zBz4BtwESiQ8ZsB16MhgDZ/XuAccTHeKA+RjaMPKALKCN5LAGepC3gFjCF9DAVuJ2WgA5gEuljAnAnaQE9Kc98ENOA50kJGPRXfj6cAd4ArcAqomMdcBl4BxzJ83w5MJSEgAYNgVe+3/wBrgErgSrgmMr1Umy1qTNCSFYCq4GbgRidmhhH4wp4D0zWOP/ukDF09lYTQ2L3xhGwz7AEviQo4LUhzn5XAT+AOQbH9xMU0G6IMw/46SLgrsHpmhCnUe0bUG6I1+Ei4IDBYVeC5D1lQlKHwy4CKjTOVqRA3lO2SBNzk4sAnbMdKQqo0cRc7CJATsN8OJiigDpNzOkuAqTMzYe6FAVsNdRHkQVI+sqH6hQFbNTELHIRILVIPixQpUPS5H8BMzQxy10EbEEPl4tHmN0zxKt0EdBkcFiVgoD1hnjNLgIeYkZLguSbQmI9chHwGyg1OB0LHI9ZUgyqYs0EuX8PuwgQO+1zJFnpElCr0po/QHOE9siwanSJ+BLCcTbEn/GhdNNm+pztVjP+QHM/ngVcNfhrNRyQ+TDbomwPnTFZ637Uqu/llhXEfLX0dL6GQkr0IC5a8LN65XJ/zWEM8Fg9O6/ahag3dcrCnxyENthged5Yrdve3L8hCpvz1PO2G3eXBflS4IOlP+vAPYGTcq+6tXkRTVqSYev+ZQR/kYJ3B8rsEjWjJ4BGdTUM8yGJQIeyCP0gJwGeerVrNQQaYyyhCuCjA5/IAzy1ua4AcwMkGizG7gyMKVa+XAtEp0E561OZJ3din7QYc0j9dhlwTrXq43CINTh4utpsammIPU2wJMcrcKPgBQxkgITnaFInWeXurFobqvffnwEyXkT75C/Hpc6RXn7clPY/TDjKzI+Q/wvKRsoJ531g0wAAAABJRU5ErkJggg==" />
                  </defs>
                </svg></a>
            </li>
          </ul>
          </nav>
        </div>
        <div class="p-drawer__copyright">
          <p class="c-copyright">
            <small lang="en">Megumi`s Portfolio.</small>
          </p>
        </div>
      </div>
      <div class="l-drawer__bg"></div>

      <ul class="p-header__nav">
        <li><a href="<?php echo esc_url(home_url('/')); ?>" <?php if(is_front_page())echo ' class="current"'; ?>>ホーム</a>
        </li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>about/"
            <?php if(is_page('about')) echo ' class="current"'; ?>>私について</a>
        </li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>works/"
            <?php if(is_post_type_archive('works') || is_singular('works') ) echo ' class="current"'; ?>>制作実績</a>
        </li>
        <li>
          <a href="https://x.com/hrmr_crt96">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="36" height="36" fill="url(#pattern0_369_67)" fill-opacity="0.7" />
              <defs>
                <pattern id="pattern0_369_67" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_369_67" transform="scale(0.02)" />
                </pattern>
                <image id="image0_369_67" width="50" height="50"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC+klEQVR4nO2ZSWhUQRCGP424K24J7oiCOyoeBAUVPAQEEQlxuehBD4ogBD3pyZjcNOjJmwt6EEXwIgriRUGiYkxEQVDcUC+iMZt7kpaCP9CMSd6bl2ReT5wfipmp6aqpf17339XvQQEFFNAXlADVQD3QBrgcWxvwGKhSLYmwFWhJoXjXg1kt5UlIdAZQvMuwzmzIlAR2JVyGNQPFcYhUB1Csi7BjcYg0BFCoizATgEi0BlCoizCb+pFweWKR+K+IVETkOJdFQV+A+Yo7kGsiP4FlveQYC7yIkec3sEExG4E/aUytZ8BIYAhww/NvV541QHvE5rZLY5cATWmukeOKmQ58lu8rMFv+qhh7wTTgXVprxMk6vKmxxfPfAYYCw4D73cRd0ZUcBTxIQML1NxGzD8AkxZ71/Aflm5exNz0ERovotYQk3EAQMbuq2DHeIjdBWC7/PvneeO14TR9IuIEiYrZT8as99XkqQTBcABbp/d4+knADScRUZ45yHPX8JzPyl2Ypsy7XRMzuAkVa5LWezFrxhvEJZNalQcTssPLM9c41H4HJ8p/OFyJ/gFXKtcfzm0IhxXqeD0ScCrWCDZc9/275VgK/8oHIW09mp2hqOe0ntq8YjoROpBlYqlwT9Vrq3cyolRgUSRyCJNIObFKedcB7YKo+n/LGmTwbZgGNIRLZrxwLvQJvqq8aATzxBME2TtQBB0WkRvEmsy8zvrOdvKtd/yHfK2Cc/JdCIXJdc97akXvdfP8NWKD8hzz/GfkmJGjlI5EtiTo1izZ9LvYy7hEwXF3vbc+/zVtTHWkRMVmdGeMQ1WU2xjDDO4g1atEbTqRBxPaEFYrZEfNesf3j6xVT5vlveYLQkEsiJrObNX6tzh5x/4DXah57wmLge66I2G2brsbwU4J1dT6ihopcr5E0LRKDhkhLAEW6GP1cJOoDKNT1x2OFOPtB2lY5GB69NemMEwvlAT8MLYtLwifTHNiVKCMhinWzuS6lR3Kt+u3KbKZTAQUUwD/4C68XAvRNax0sAAAAAElFTkSuQmCC" />
              </defs>
            </svg>

          </a>
        </li>
        <li>
          <a href="https://github.com/Hiramaru-web12">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="30" height="30" fill="url(#pattern0_365_50)" fill-opacity="0.7" />
              <defs>
                <pattern id="pattern0_365_50" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_365_50" transform="scale(0.0208333)" />
                </pattern>
                <image id="image0_365_50" width="48" height="48"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADTElEQVR4nNWZSWgVQRCGP3dxwQU1UaIYIohCPIgeBBUxICghh+TiRU+SiEoQcUtQBEEjQRQ8iAmCInqIiLm4HIKglyBGIcQNxIMo0YMmasDELY5U7AfD8Lqnp2fGzPuh4PHmddX/93RXV9eDf1gI3AAGAC/jNgC0A0vxke/LADEvovUr7iMz7xWoXadAlo2nsa9kgIQX00adgJdFAbLBuoFOZfL5c5YF9AEXgGqgCD2KgRqgJcHMR5zBz4BtwESiQ8ZsB16MhgDZ/XuAccTHeKA+RjaMPKALKCN5LAGepC3gFjCF9DAVuJ2WgA5gEuljAnAnaQE9Kc98ENOA50kJGPRXfj6cAd4ArcAqomMdcBl4BxzJ83w5MJSEgAYNgVe+3/wBrgErgSrgmMr1Umy1qTNCSFYCq4GbgRidmhhH4wp4D0zWOP/ukDF09lYTQ2L3xhGwz7AEviQo4LUhzn5XAT+AOQbH9xMU0G6IMw/46SLgrsHpmhCnUe0bUG6I1+Ei4IDBYVeC5D1lQlKHwy4CKjTOVqRA3lO2SBNzk4sAnbMdKQqo0cRc7CJATsN8OJiigDpNzOkuAqTMzYe6FAVsNdRHkQVI+sqH6hQFbNTELHIRILVIPixQpUPS5H8BMzQxy10EbEEPl4tHmN0zxKt0EdBkcFiVgoD1hnjNLgIeYkZLguSbQmI9chHwGyg1OB0LHI9ZUgyqYs0EuX8PuwgQO+1zJFnpElCr0po/QHOE9siwanSJ+BLCcTbEn/GhdNNm+pztVjP+QHM/ngVcNfhrNRyQ+TDbomwPnTFZ637Uqu/llhXEfLX0dL6GQkr0IC5a8LN65XJ/zWEM8Fg9O6/ahag3dcrCnxyENthged5Yrdve3L8hCpvz1PO2G3eXBflS4IOlP+vAPYGTcq+6tXkRTVqSYev+ZQR/kYJ3B8rsEjWjJ4BGdTUM8yGJQIeyCP0gJwGeerVrNQQaYyyhCuCjA5/IAzy1ua4AcwMkGizG7gyMKVa+XAtEp0E561OZJ3din7QYc0j9dhlwTrXq43CINTh4utpsammIPU2wJMcrcKPgBQxkgITnaFInWeXurFobqvffnwEyXkT75C/Hpc6RXn7clPY/TDjKzI+Q/wvKRsoJ531g0wAAAABJRU5ErkJggg==" />
              </defs>
            </svg>

          </a>
        </li>
      </ul>
    </div>
  </header>