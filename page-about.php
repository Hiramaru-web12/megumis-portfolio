<?php get_header(); ?>

<div class="l-breadcrub p-breadcrub l-inner">
  <?php bcn_display(); ?>
</div>

<section class="l-lower-about">
  <div class="l-lower-about__inner l-inner">
    <h2 class="c-section__title wow fadeInUp">私について</h2>
    <div class="p-lower-about__container l-section__container">
      <div class="p-about__img wow fadeInLeft delay-2s">
        <img src="<?php echo get_template_directory_uri( ) ?>/img/my-icon.png" alt="プロフィール画像" height="380"
          width="380" />
      </div>
      <div class="p-about__text wow fadeInUP">
        <p class="p-about__myname">OHIRA MEGUMI <span>- Web Corder -</span></p>
        <div class="p-about__desc">
          <p class="p-lower-about__title">経歴：</p>
          <p class="p-lower-about__desc">総合病院で臨床検査技師として5年間勤務。<br>
            採血や心電図など様々な検査業務に従事し、新入社員の教育やサポートを個々に合わせて行ってきました。<br>
            マルチタスクが強いられるなか、状況を見ながら協力して業務ができるようコミュニケーションをとってきました。</p><br>
          <p class="p-lower-about__title">WEB製作を始めたきっかけ :</p>
          <p class="p-lower-about__desc">
            幼少期から絵を描くことや工作が好きで、作ったもので喜んでもらえる仕事を探していました。<br>パソコンがあれば製作ができるプログラミングに興味があったこと、Webデザイナーという仕事をたまたま見つけたことからコーディングの勉強を始め、現在に至ります。
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
          <img src="<?php echo get_template_directory_uri( ) ?>/img/skill-1.png" alt="html/css">
          <p class="p-skill__name">HTML/ CSS(Sass）</p>
          <p class="p-skill__desc">
            適切なタグ、FLOCSS-BEMを用いたマークアップやレスポンシブ対応が可能です。
          </p>
        </li>
        <li class="p-skill__card wow fadeInUp">
          <img src="<?php echo get_template_directory_uri( ) ?>/img/skill-2.png" alt="js/jquery">
          <p class="p-skill__name">JavaScript/JQuery</p>
          <p class="p-skill__desc">
            ドロワーやスムーススクロールなど、サイトでよく使われるアニメーションが実装可能です。
          </p>
        </li>
        <li class="p-skill__card wow fadeInUp">
          <img src="<?php echo get_template_directory_uri( ) ?>/img/skill-3.png" alt="figma/xd/Photoshop">
          <p class="p-skill__name">Figma/XD/Photoshop</p>
          <p class="p-skill__desc">
            画像の書き出し、デザインカンプからのコーディングが可能です。
          </p>
        </li>
        <li class="p-skill__card">
          <img src="<?php echo get_template_directory_uri( ) ?>/img/skill-4.png" alt="wordpress">
          <p class="p-skill__name">WordPress</p>
          <p class="p-skill__desc">既存のサイトをWordPress化し、カスタム投稿やカスタムフィールドの追加が可能です。</p>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>