require('./style.css');

{


  window.onscroll = function () { headerScroll(), logoScale(); };

  // menu scroll
  const header = document.getElementById('menu-two');
  const sticky = header.offsetTop;

  function headerScroll() {
    if (window.pageYOffset > sticky) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  }


  // menu scale logo
  const logo = document.getElementById('logo-svg');

  function logoScale() {
    if (window.pageYOffset > sticky) {
      logo.classList.add('logo-fixed');
    } else {
      logo.classList.remove('logo-fixed');
    }
  }


}
