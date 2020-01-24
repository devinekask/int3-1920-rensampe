{
  const slider = document.getElementById('slider');
  console.log(slider);
  slider.oninput = function () {
    giveValue();
    showInfo();
  };

  function giveValue() {
    const val = slider.value;
    document.getElementById('demo').innerHTML = val;
    console.log(val);
  }

  const showInfo = () => {
    const $infoFirst = document.querySelector(`.longread__writer__info-first`);
    const $infoSecond = document.querySelector(`.longread__writer__info-second`);
    const $infoThird = document.querySelector(`.longread__writer__info-third`);
    const $infoFourth = document.querySelector(`.longread__writer__info-fourth`);
    const $infoFifth = document.querySelector(`.longread__writer__info-fifth`);
    const $infoSixth = document.querySelector(`.longread__writer__info-sixth`);
    const $infoSeventh = document.querySelector(`.longread__writer__info-seventh`);


    const hoeveel = slider.value;
    if (hoeveel > 80 && hoeveel < 101) {
      $infoSeventh.innerHTML = `<p class="longread__writer__info-item">† 1982</p>`;
    } else if (hoeveel > 65 && hoeveel < 101) {
      $infoSixth.innerHTML = `<p class="longread__writer__info-item">8 verfilmde boeken</p>`;
    } else if (hoeveel > 50 && hoeveel < 101) {
      $infoFifth.innerHTML = `<p class="longread__writer__info-item">121 korte verhalen</p>`;
    } else if (hoeveel > 40 && hoeveel < 101) {
      $infoFourth.innerHTML = `<p class="longread__writer__info-item">science fiction</p>`;
    } else if (hoeveel > 30 && hoeveel < 101) {
      $infoThird.innerHTML = `<p class="longread__writer__info-item">californïe</p>`;
    } else if (hoeveel > 15 && hoeveel < 101) {
      $infoSecond.innerHTML = `
        <p class="longread__writer__info-quote">Er komt een tijd waar het niet meer</p>
        <p class="longread__writer__info-quote">'Ze bespioneren me via mijn telefoon' is.</p>
        <p class="longread__writer__info-quote">Uiteindelijk, zal het 'Mijn telefoon bespioneert mij' zijn.</p>`;
    } else {
      console.log(`tussen 1 en 101`);
      $infoFirst.innerHTML = `<img class="longread__writer__info-first-image" src="/assets/img/philip.svg" width="265" height="103">`;
    }
  };



}
