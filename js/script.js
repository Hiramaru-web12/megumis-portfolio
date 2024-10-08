new WOW().init();

document.addEventListener('DOMContentLoaded', function() {
  // ドロワー開閉
  const drawerIcon = document.querySelector('.c-drawer__icon');
  const drawer = document.querySelector('.l-drawer');
  const drawerBg = document.querySelector('.l-drawer__bg');

  drawerIcon.addEventListener('click', function(e) {
    e.preventDefault();
    drawerIcon.classList.toggle('is-active');
    drawer.classList.toggle('is-active');
    drawerBg.classList.toggle('is-active');
    return false;
  });

  const drawerLinks = document.querySelectorAll('.l-drawer__link a[href^="#"]');
  drawerLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      drawerIcon.classList.remove('is-active');
      drawer.classList.remove('is-active');
      drawerBg.classList.remove('is-active');
      return false;
    });
  });
});


