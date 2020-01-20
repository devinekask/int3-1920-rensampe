require('./style.css');

{
  window.onscroll = function () { logoScale(), headerScroll(); };

  // menu scroll
  const header = document.getElementById('menu-two');
  const main = document.getElementById('main');
  const filter = document.getElementById('filter');
  const sticky = header.offsetTop;

  function headerScroll() {
    if (window.pageYOffset > sticky) {
      header.classList.add('sticky');
      main.classList.add('main-fixed');
      filter.classList.add('filter-fixed', 'sticky');
    } else {
      header.classList.remove('sticky');
      main.classList.remove('main-fixed');
      filter.classList.remove('filter-fixed', 'sticky');
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

  // filter


}
