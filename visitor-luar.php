
<!DOCTYPE html>
<html lang="id">
<head>
  <link rel="preconnect" href="https://cookie-cdn.cookiepro.com">
  <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-domain-script="3e289405-63e1-457f-a2b4-3d54a927583c"></script>

<script>
  function OptanonWrapper() {
    const userAge = window.localStorage.getItem('userAge');
    if ((document.documentElement.lang === 'nl' || (document.documentElement.lang === 'en' && window.site && kids_version_urls[window.site.theme])) && userAge === null) {
      let consent = document.getElementById('onetrust-consent-sdk'),
        ageGate = document.getElementsByClassName('confirm-age')[0];

      if (typeof consent === 'undefined' || consent === null || typeof ageGate === 'undefined' || ageGate === null) {
        // Safe call to optanon_wrapper with error handling
        setTimeout(() => {
          try {
            if (window.PORTALJS && window.PORTALJS.GDPR && typeof window.PORTALJS.GDPR.optanon_wrapper === 'function') {
              window.PORTALJS.GDPR.optanon_wrapper();
            } else {
              console.warn('[OptanonWrapper] GDPR optanon_wrapper function not available, calling OptanonWrapper directly');
              OptanonWrapper();
            }
          } catch (error) {
            console.error('[OptanonWrapper] Error calling optanon_wrapper:', error);
          }
        }, 500);
        return;
      }

      consent.style.display = 'none';
      ageGate.style.display = 'block';
      consent.classList.add('age-confirmed');
    }
function replacedAgreeButton() {
  const allowAllButton= document.querySelector("#accept-recommended-btn-handler");
  const actionButtonContainers = document.querySelector(".ot-btn-container");
  actionButtonContainers.appendChild(allowAllButton);
}
    setTimeout(replacedAgreeButton, 600)

    // Safe call to checkGDPRConsent with error handling
    try {
      if (window.PORTALJS && window.PORTALJS.GDPR && typeof window.PORTALJS.GDPR.checkGDPRConsent === 'function') {
        window.PORTALJS.GDPR.checkGDPRConsent();
      } else {
        console.warn('[OptanonWrapper] GDPR checkGDPRConsent function not available yet, will retry');
        // Retry after a short delay to allow scripts to load
        setTimeout(() => {
          if (window.PORTALJS && window.PORTALJS.GDPR && typeof window.PORTALJS.GDPR.checkGDPRConsent === 'function') {
            window.PORTALJS.GDPR.checkGDPRConsent();
          } else {
            console.error('[OptanonWrapper] GDPR checkGDPRConsent function still not available after retry');
          }
        }, 1000);
      }
    } catch (error) {
      console.error('[OptanonWrapper] Error calling checkGDPRConsent:', error);
    }

  }
</script>

  <title>Permainan - Bermain game online gratis di permainan.co.id</title>
    <meta name="description" content="Ini merupakan zonamu untuk bermain game online gratis! Bermain game termasuk game Friv, game olahraga, game aksi, dan lebih banyak lagi di permainan.co.id."/>
  <link rel="canonical" href="https://www.permainan.co.id/"/>
  <meta property="og:title" content="Permainan - Bermain game online gratis di permainan.co.id"/>
  <meta property="og:description" content="Ini merupakan zonamu untuk bermain game online gratis! Bermain game termasuk game Friv, game olahraga, game aksi, dan lebih banyak lagi di permainan.co.id."/>
  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="permainan.co.id"/>
  <meta property="og:url" content="https://www.permainan.co.id/"/>
  <meta property="og:image" content="https://gamesgamescdn.com/assets/gamesgames/og_image-0235b0fe01a7cbbdb475e459c467139fb9a948918b40f59f13d461cbd4b4ab76.jpg">

  <meta http-equiv="Content-Security-Policy" content="frame-src *;">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta property="sg:type" content="portal">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="Jur55cEBUR+tWUFgwxRym5r3f4r09sDXRm4p3xDXMkd09RCRoy3Q7Gx7v2DFFaEPfP6qN+9LxMD7+oqoggzM4g==" />
  <meta name="google-site-verification" content="eNAryMogwYSfa4U6hg4gChlj-V8FmWc6yo5dChPtgDg">
  <meta name="apple-mobile-web-app-title" content="permainan.co.id">
  <meta name="application-name" content="permainan.co.id">
  <meta name="turbolinks-cache-control" content="no-cache">
  <meta name="acid" content="39c6f0dd-0ace-42db-aa86-b9dd1907764a">

  <link href="https://gamesgamescdn.com/" rel="preconnect" crossorigin="">
  <link rel="stylesheet" media="screen" href="https://gamesgamescdn.com/assets/gamesgames/homepage-38040325644e6f8cd96781efcd92c471d19bc4912ef93f7e1a7eaac6d04244e0.css" />

  <link rel="stylesheet" media="screen" href="https://gamesgamescdn.com/assets/spil/homepage-17d796cf659e5ccf56c42f9e563aa77cda27b84548e868ef0254b218969e285e.css" />

  

  <script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Organization",
    "@id": "https://azerion.com/#Organization",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Beechavenue 182",
        "addressLocality": "Schiphol-Rijk",
        "addressRegion": "Noord-Holland",
        "postalCode": "1119 PX",
        "addressCountry": "The Netherlands",
        "email": "info@azerion.com",
        "telephone": "+31 (0) 20 760 2040"
    },
    "logo": {
        "type": "ImageObject",
        "url": "https://images.cdn.spilcloud.com/azerion-logo/1589895396_azerion_logo.png",
        "width": 222,
        "height": 181
    },
    "name": "Azerion",
    "url": "https://azerion.com/",
    "sameAs": [
        "https://www.facebook.com/WeAreAzerion/",
        "https://www.linkedin.com/company/azerion/",
        "https://twitter.com/weareazerion",
        "https://www.youtube.com/channel/UCJ6LErg7E2QNs4dftBVwNdA/",
        "https://de.wikipedia.org/wiki/Azerion"
        ],
    "brand": [
        {
            "@type": "WebSite",
            "name": "Agame",
            "url": "https://www.agame.com"
        },
        {
            "@type": "WebSite",
            "name": "Plinga",
            "url": "https://www.plinga.com"
        },
        {
            "@type": "WebSite",
            "name": "GameDistribution",
            "url": "https://gamedistribution.com"
        },
        {
            "@type": "WebSite",
            "name": "Sulake",
            "url": "https://www.sulake.com"
        },
        {
            "@type": "WebSite",
            "name": "Voidu",
            "url": "https://www.voidu.com/en"
        },
        {
            "@type": "WebSite",
            "name": "Kizi",
            "url": "https://kizi.com"
        },
        {
            "@type": "WebSite",
            "name": "A10",
            "url": "https://www.a10.com"
        },
        {
            "@type": "WebSite",
            "name": "Flashgames",
            "url": "https://www.flashgames.ru"
        },
        {
            "@type": "WebSite",
            "name": "Games",
            "url": "https://www.games.co.id"
        },
        {
            "@type": "WebSite",
            "name": "Games",
            "url": "https://www.games.co.uk"
        },
        {
            "@type": "WebSite",
            "name": "Gamesgames",
            "url": "https://www.gamesgames.com"
        },
        {
            "@type": "WebSite",
            "name": "Giochi",
            "url": "https://www.giochi.it"
        },
        {
            "@type": "WebSite",
            "name": "Gioco",
            "url": "https://www.gioco.it"
        },
        {
            "@type": "WebSite",
            "name": "Girlsgogames",
            "url": "https://www.girlsgogames.co.id"
        },
        {
            "@type": "WebSite",
            "name": "Girlsgogames",
            "url": "https://www.girlsgogames.co.uk"
        },
        {
            "@type": "WebSite",
            "name": "Girlsgogames",
            "url": "https://www.girlsgogames.com"
        },
        {
            "@type": "WebSite",
            "name": "Girlsgogames",
            "url": "https://www.girlsgogames.de"
        },
        {
            "@type": "WebSite",
            "name": "Girlsgogames",
            "url": "https://www.girlsgogames.fr"
        },
        {
            "@type": "WebSite",
            "name": "Girlsgogames",
            "url": "https://www.girlsgogames.it"
        },
        {
            "@type": "WebSite",
            "name": "Girlsgogames",
            "url": "https://www.girlsgogames.ru"
        },
        {
            "@type": "WebSite",
            "name": "Gry",
            "url": "https://www.gry.pl"
        },
        {
            "@type": "WebSite",
            "name": "Jetztspielen",
            "url": "https://www.jetztspielen.de"
        },
        {
            "@type": "WebSite",
            "name": "Jeu",
            "url": "https://www.jeu.fr"
        },
        {
            "@type": "WebSite",
            "name": "Jeux",
            "url": "https://www.jeux.fr"
        },
        {
            "@type": "WebSite",
            "name": "Juegos",
            "url": "https://www.juegos.com"
        },
        {
            "@type": "WebSite",
            "name": "Juegosdechicas",
            "url": "https://www.juegosdechicas.com"
        },
        {
            "@type": "WebSite",
            "name": "Mousebreaker",
            "url": "https://www.mousebreaker.com"
        },
        {
            "@type": "WebSite",
            "name": "Ojogos",
            "url": "https://www.ojogos.com.br"
        },
        {
            "@type": "WebSite",
            "name": "Ourgames",
            "url": "https://www.ourgames.ru"
        },
        {
            "@type": "WebSite",
            "name": "Oyunskor",
            "url": "https://www.oyunskor.com"
        },
        {
            "@type": "WebSite",
            "name": "Permainan",
            "url": "https://www.permainan.co.id"
        },
        {
            "@type": "WebSite",
            "name": "Spel",
            "url": "https://www.spel.nl"
        },
        {
            "@type": "WebSite",
            "name": "Spela",
            "url": "https://www.spela.se"
        },
        {
            "@type": "WebSite",
            "name": "Spelletjes",
            "url": "https://www.spelletjes.nl"
        },
        {
            "@type": "WebSite",
            "name": "Spielen",
            "url": "https://www.spielen.com"
        }
    ]
}




  </script>
  <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Permainan.co.id",
    "url": "https://www.permainan.co.id/",
    "@id": "#WebSite",
    "inLanguage": "id",
    "image": "https://gamesgamescdn.com/assets/gamesgames/logos/default/gamesgames.id.desktop-08c63e77f31b1ddf6f1077c1a66dd2b41985bd88a6a4f052548d262d234348ff.webp",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://www.permainan.co.id/telusur?term=%7Bsearch_term_string%7D",
      "query-input": "required name=search_term_string"
    },
    "publisher": {
        "@id": "https://azerion.com/#Organization"
    }
}




  </script>

    <link rel="alternate" hreflang="x-default" href="https://www.gamesgames.com/">

  
    <link rel="alternate" hreflang="en" href="https://www.gamesgames.com/">
    <link rel="alternate" hreflang="en-GB" href="https://www.games.co.uk/">
    <link rel="alternate" hreflang="de" href="https://www.jetztspielen.de/">
    <link rel="alternate" hreflang="ru" href="https://www.ourgames.ru/">
    <link rel="alternate" hreflang="id" href="https://www.permainan.co.id/">
    <link rel="alternate" hreflang="it" href="https://www.gioco.it/">
    <link rel="alternate" hreflang="fr" href="https://www.jeux.fr/">
    <link rel="alternate" hreflang="pl" href="https://www.gry.pl/">
    <link rel="alternate" hreflang="es" href="https://www.juegos.com/">
    <link rel="alternate" hreflang="pt-BR" href="https://www.ojogos.com.br/">
    <link rel="alternate" hreflang="tr" href="https://www.oyunskor.com/">
    <link rel="alternate" hreflang="sv" href="https://www.spela.se/">
    <link rel="alternate" hreflang="nl" href="https://www.spelletjes.nl/">


  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

  <script>

    window.search_url = 'https://www.permainan.co.id/telusur';
    window.autocomplete_url = window.search_url + '.json';
    window.site = {
      environment: 'live',
      is_mobile: 'desktop',
      spil_channel_name: 'family',
      theme: 'gamesgames',
      token: 'BAHb0krfWeIAjAEA',
    }
    window.gtm_id = 'GTM-NNTPC7';
    window.account_deleted_notification = 'Akun Anda dan semua data terkait akan dihapus dalam 5 menit.';
    document.display_deleted_notification = false;
    kids_version_urls = {
      agame: 'https://kids.agame.com',
    }
  </script>

  <script src="https://gamesgamescdn.com/assets/gamesgames/gamesgames-29cd8e0511b90c7e1d70b29243c1c3b027cb05749fd554f415665fd0e25b934d.js"></script>

  

	</head>

	<body class="desktop class_homepage" data-controller="homepage" data-action="show" data-namespace-name="PORTALJS">

<div class="confirm-age">
  <div class="main">
    <h3>Please enter your year of birth</h3>
    <div class="content-container">
      <p>Before you can continue you must enter your year of birth</p>
      <div class="btn-group d-lg-inline-block" role="group">
        <select id="birthdate" name="yeardata" autocomplete="off" class="age-input" required>
          <option value="" selected disabled hidden>Choose here</option>
        </select>
        <button class="age-button btn-default" id="age-submit">
          submit
        </button>
      </div>
    </div>
  </div>
  <div class="overlay">
  </div>
</div>
<style>
  .age-input {
    border-radius: .4em;
    border: 1px solid var(--form-border);
    min-height: 1.75em;
    padding: 1em;
    position: relative;
    z-index: 1;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: bold;
    display: block;
    margin: 20px 0 0 0;
    background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc);
    background-position: calc(100% - 16px) calc(1em + 8px), calc(100% - 11px) calc(1em + 8px), calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 1px 2.5em;
    background-repeat: no-repeat;
    -webkit-appearance: none;
    -moz-appearance: none;
  }

  .confirm-age {
    z-index: 2147483645;
    top: 23%;
    position: fixed;
    right: 0;
    width: 75%;
    max-width: 570px;
    border-radius: 5px;
    left: 0;
    margin: 0 auto;
    font-size: 14px;
    max-height: 90%;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
    color: #1e1e1e;
    display: none;
  }

  .confirm-age.show {
    display: block;
  }

  .confirm-age h3 {
    font-size: 21px;
    line-height: 32px;
    text-transform: none;
    text-align: center;
    max-width: 480px;
  }


  #onetrust-consent-sdk.age-confirmed #onetrust-policy-title::after {
    content: "2/2";
    font-size: 14px;
    line-height: 21px;
    position: absolute;
    right: 20px;
    top: 20px;
  }

  .confirm-age p {
    font-size: 13px;
    text-align: center;
  }

  #onetrust-close-btn-container {
    display: none !important;
  }

  .age-button {
    display: inline-block;
    padding: 10px 25px;
    font-size: 14px;
    text-align: center;
    font-weight: 700;
    color: #0355ff;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.16);
    border-radius: 5px;
    border: 1px solid #0355ff;
    margin-top: 20px;
    text-transform: uppercase;
  }

  .age-button:hover {
    cursor: pointer;
    background-color: #e1e6ee;
  }

  .age-button.older {
    background-color: #0355ff;
    color: white;
    margin-left: 9px;
  }

  .age-button.older:hover {
    background-color: #0040c4;
  }

  .content-container {
    max-width: 480px;
    text-align: center;
    display: block;

  }

  .age-drago {
    position: absolute;
    right: -3px;
    bottom: 8px;
  }

  @media only screen and (max-width: 650px) {
    .age-drago {
      display: none;
    }

    .content-container {
      max-width: 100%;
    }
  }

  @media only screen and (max-width: 450px) {
    .content-container {
      display: flex;
      flex-direction: column;
    }

    .content-container p {
      order: 1;
    }

    .age-button.older {
      order: 2;
      margin-left: 0;
    }

    .age-button {
      order: 3;
    }

    .confirm-age h3 {
      font-size: 17px;
      line-height: 24px;
    }
  }

  @media screen and (max-width: 560px) {
    .btn-group {
      grid-template-columns: 1fr !important;
    }
  }

  .btn-group {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 0 2em;
    order: 1;
    width: 95%;
    margin: auto;
  }
</style>
<script>
  window.addEventListener('turbolinks:load', () => {
    landOnAgeGatePage ()
  });
function landOnAgeGatePage () {

  (function () {
    window.onpageshow = function(event) {
      if (event.persisted) {
        window.location.reload();
      }
    };
  })();
    const urlPath = window.location.search;
    const urlParams = new URLSearchParams(urlPath);
    if(urlParams.has('ageGate')) {
      localStorage.removeItem("userAge");
    }


  handleAgeEntry = (userAge) => {
    if (userAge == "1" ){
      redirect_to_kids();
    }
    else if(userAge == "2"){
      showConsent();
    }
  }

  function showConsent() {
    let consent = document.getElementById('onetrust-consent-sdk'),
      ageGate = document.getElementsByClassName('confirm-age')[0];

    const overlay = document.getElementsByClassName('overlay')[0];

    consent.style.display = 'block';
    ageGate.style.display = 'none';
    overlay.style.display = 'none';
  }

  redirect_to_kids = () => {
    window.location = kids_version_urls[window.site.theme];
  }

  function ageGateForm() {
    const submitButton = document.querySelector('#age-submit');
    const min = new Date().getFullYear(),
      max = min - 100,
      select = document.getElementById('birthdate');
    lastOpt = document.querySelector('#birthdate').lastChild;
    for (let i = min; i >= max; i--) {
      const opt = document.createElement('option');
      opt.value = i;
      opt.text = i;
      select.add(opt);
    }

    const ageCalc = () => {
      let ageVal = document.querySelector('#birthdate').value;
      if (!ageVal) return;
      const currentYear = new Date().getFullYear();
      let ageResult = currentYear - ageVal;

      const between = (ageResult, minAge, maxAge) => {
        return ageResult >= minAge && ageResult <= maxAge;
      };

      const userAge = between(ageResult, 0, 13) ? "1" : "2"
      window.localStorage.setItem('userAge', userAge);

      handleAgeEntry(userAge);
    };

    submitButton.addEventListener('click', ageCalc);
  }

  const checkAge = () => {
    const userAge = window.localStorage.getItem('userAge');
    if(userAge == "1"){
      redirect_to_kids()
    }
  }

  ageGateForm();
  checkAge();



}

</script>


<div class="outer container" id="page_content">
  <div class="inner container">
    <header id="wdg_header" data-widget="header" class="wdg_header">
  <span class="menu-container-toggle menu-container-openbutton"></span>
  <div class="header-home-container">
    <div class="header-home">
      <a class="wdg_header_logo wdg_header_logo--90" id="wdg_header_logo" href="https://www.permainan.co.id/">
        <picture>
          <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/assets/gamesgames/logos/default/gamesgames.id.desktop-08c63e77f31b1ddf6f1077c1a66dd2b41985bd88a6a4f052548d262d234348ff.webp" type="image/webp" alt="Zona anda untuk bermain permainan online gratis">
          <img width="100%" height="100%" class="lazy logo" data-src="https://gamesgamescdn.com/assets/gamesgames/logos/default/gamesgames.id.desktop-4195d920fda16144a75e174d7ecbd21b61bbab1e995b2b87193d409c8adc5270.png" alt="Zona anda untuk bermain permainan online gratis"/>
        </picture>
</a>    </div>
  </div>
  <div class="header-menu-container " id="">
    <div class="menu-container">
      <div class="menu-header">
          <div id="wdg_user_status" class="wdg_user_status dropdown-container">
  <a data-turbolinks="false" href="/users/auth/gamesgamesconnect">
    <div id="login-button-nav" class="sign-in">
      <span class="sp-i__user"></span>
    </div>
</a></div>




        <span class="menu-container-toggle menu-container-closebutton"></span>
        <picture>
          <source width="100%" height="100%" srcset="https://gamesgamescdn.com/assets/gamesgames/logos/default/gamesgames.id.mobile-094f5aeef30cfc2fc662bb2c31fe68aa28452a1e21a1ff5d51d4225a2a1f595e.webp" type="image/webp" alt="Zona anda untuk bermain permainan online gratis">
          <img width="100%" height="100%" class="lazy logo" data-src="https://gamesgamescdn.com/assets/gamesgames/logos/default/gamesgames.id.mobile-71bc381576c8a86e381a141fab64f2a9c910143d8046ae74c3a37167cecea8f6.png" alt="Zona anda untuk bermain permainan online gratis"/>
        </picture>
      </div>
      <nav id="wdg_menu" class="wdg_menu nav ready">
        <ul id="menu-items_list" class="menu__items_list promotions clearfix">
          <li class="menu-item" data-menu-id="new">
            <div class="menu-item-button-container menu-item-button-container--new-games">
              <a class="icon-wrapper new-games" href="https://www.permainan.co.id/game/baru">
                <p class="menu-title">Baru</p>
</a>            </div>
          </li>
          

              <li class="menu-item menu-item-category" data-menu-id="944">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/teka-teki">
      <p class="menu-title">Puzzle</p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/cari-gambar">
    <i class="c-i__hidden-objects"></i>
    <div class="tile-title ellipsis">Game Tebak Gambar</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-hp">
    <i class="c-i__smartphone-games"></i>
    <div class="tile-title ellipsis">Game Mobile</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/permainan-kata">
    <i class="c-i__word"></i>
    <div class="tile-title ellipsis">Tebak kata</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/teka-teki-silang">
    <i class="c-i__crossword"></i>
    <div class="tile-title ellipsis">Teka Teki Silang</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/bubble-shooter">
    <i class="c-i__bubble-shooter"></i>
    <div class="tile-title ellipsis">Game Bubble Shooter</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-asah-otak">
    <i class="c-i__brain"></i>
    <div class="tile-title ellipsis">Game asah Otak</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/mahjongg">
    <i class="c-i__mahjongg"></i>
    <div class="tile-title ellipsis">Game Mahjong Online Gratis</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-balon">
    <i class="c-i__balloon-games"></i>
    <div class="tile-title ellipsis">Game Balon</div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Permainan Teka-Teki" class="all_category_labels-link" href="https://www.permainan.co.id/game/teka-teki">Semua Permainan Permainan Teka-Teki</a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Dream Pet Link" data-index="0" href="https://www.permainan.co.id/permainan/dream-pet-link">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/webp_1464611715_dream-pet-link200x120.webp?1692363911" type="image/webp" alt="Dream Pet Link" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/original_1464611715_dream-pet-link200x120.jpg?1692363911" type="image/webp" alt="Dream Pet Link" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280262801" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/jpeg_1464611715_dream-pet-link200x120.jpg?1692363911" alt="Dream Pet Link">
    </picture>

</div>
<div class="tile-title" data-index="0">Dream Pet Link</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="My Parking Lot" data-index="1" href="https://www.permainan.co.id/permainan/my-parking-lot">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/webp_my-parking-lot_200x120.webp?1727865729" type="image/webp" alt="My Parking Lot" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/original_my-parking-lot_200x120.png?1727865729" type="image/webp" alt="My Parking Lot" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13446" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/jpeg_my-parking-lot_200x120.jpg?1727865729" alt="My Parking Lot">
    </picture>

</div>
<div class="tile-title" data-index="1">My Parking Lot</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Ono Card Game" data-index="2" href="https://www.permainan.co.id/permainan/ono-card-game">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/webp_200X120_173100_1536005750.webp?1692369711" type="image/webp" alt="Ono Card Game" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/original_200X120_173100_1536005750.png?1692369711" type="image/webp" alt="Ono Card Game" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307244" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/jpeg_200X120_173100_1536005750.jpg?1692369711" alt="Ono Card Game">
    </picture>

</div>
<div class="tile-title" data-index="2">Ono Card Game</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Free Hoops" data-index="3" href="https://www.permainan.co.id/permainan/free-hoops">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/webp_free-hops_200x120.webp?1768910246" type="image/webp" alt="Free Hoops" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/original_free-hops_200x120.png?1768910246" type="image/webp" alt="Free Hoops" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14212" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/jpeg_free-hops_200x120.jpg?1768910246" alt="Free Hoops">
    </picture>

</div>
<div class="tile-title" data-index="3">Free Hoops</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Master Chess Multiplayer" data-index="4" href="https://www.permainan.co.id/permainan/master-chess-multiplayer">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/webp_1550132657_Master-Chess-Multiplayer-200x120.webp?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/original_1550132657_Master-Chess-Multiplayer-200x120.png?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306986" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/jpeg_1550132657_Master-Chess-Multiplayer-200x120.jpg?1692369670" alt="Master Chess Multiplayer">
    </picture>

</div>
<div class="tile-title" data-index="4">Master Chess Multiplayer</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Harvest Honors Classic" data-index="5" href="https://www.permainan.co.id/permainan/harvest-honors-classic">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/webp_1550130898_Harvest-Honors-200x120.webp?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/original_1550130898_Harvest-Honors-200x120.png?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284592" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/jpeg_1550130898_Harvest-Honors-200x120.jpg?1692364771" alt="Harvest Honors Classic">
    </picture>

</div>
<div class="tile-title" data-index="5">Harvest Honors Classic</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Mahjong Link" data-index="6" href="https://www.permainan.co.id/permainan/sambungan-mahjong">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/webp_1441882100_576742227280284432_large.webp?1692364709" type="image/webp" alt="Mahjong Link" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/original_1441882100_576742227280284432_large.jpg?1692364709" type="image/webp" alt="Mahjong Link" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284432" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/jpeg_1441882100_576742227280284432_large.jpg?1692364709" alt="Mahjong Link">
    </picture>

</div>
<div class="tile-title" data-index="6">Mahjong Link</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Solitaire Collection" data-index="7" href="https://www.permainan.co.id/permainan/solitaire-collection">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25213/webp_200X120_177855_1622795733.webp?1692370770" type="image/webp" alt="Solitaire Collection" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25213/original_200X120_177855_1622795733.png?1692370770" type="image/webp" alt="Solitaire Collection" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311999" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25213/jpeg_200X120_177855_1622795733.jpg?1692370770" alt="Solitaire Collection">
    </picture>

</div>
<div class="tile-title" data-index="7">Solitaire Collection</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Jewel Pets Match" data-index="8" href="https://www.permainan.co.id/permainan/jewel-pets-match">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24739/webp_200X120_177164_1574775403.webp?1692370435" type="image/webp" alt="Jewel Pets Match" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24739/original_200X120_177164_1574775403.png?1692370435" type="image/webp" alt="Jewel Pets Match" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311308" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24739/jpeg_200X120_177164_1574775403.jpg?1692370435" alt="Jewel Pets Match">
    </picture>

</div>
<div class="tile-title" data-index="8">Jewel Pets Match</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Dimensi Mahyong: 900 Detik" data-index="9" href="https://www.permainan.co.id/permainan/dimensi-mahyong-900-detik">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/webp_200X120_173955_1544104605.webp?1692369873" type="image/webp" alt="Dimensi Mahyong: 900 Detik" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/original_200X120_173955_1544104605.png?1692369873" type="image/webp" alt="Dimensi Mahyong: 900 Detik" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308099" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/jpeg_200X120_173955_1544104605.jpg?1692369873" alt="Dimensi Mahyong: 900 Detik">
    </picture>

</div>
<div class="tile-title" data-index="9">Dimensi Mahyong: 900 Detik</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Wood Block Puzzle 3" data-index="10" href="https://www.permainan.co.id/permainan/wood-block-puzzle-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98694/webp_wood-block-puzzle-3_200x120.webp?1769515868" type="image/webp" alt="Wood Block Puzzle 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98694/original_wood-block-puzzle-3_200x120.png?1769515868" type="image/webp" alt="Wood Block Puzzle 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14242" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98694/jpeg_wood-block-puzzle-3_200x120.jpg?1769515868" alt="Wood Block Puzzle 3">
    </picture>

</div>
<div class="tile-title" data-index="10">Wood Block Puzzle 3</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Thread Match 2" data-index="11" href="https://www.permainan.co.id/permainan/thread-match-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/webp_thread-match-2_200x120.webp?1770719496" type="image/webp" alt="Thread Match 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/original_thread-match-2_200x120.png?1770719496" type="image/webp" alt="Thread Match 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14232" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/jpeg_thread-match-2_200x120.jpg?1770719496" alt="Thread Match 2">
    </picture>

</div>
<div class="tile-title" data-index="11">Thread Match 2</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Plant Merge: Zombie War" data-index="12" href="https://www.permainan.co.id/permainan/plant-merge-zombie-war">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98365/webp_plant-merge-zombie-war_200x120.webp?1766492611" type="image/webp" alt="Plant Merge: Zombie War" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98365/original_plant-merge-zombie-war_200x120.png?1766492611" type="image/webp" alt="Plant Merge: Zombie War" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14196" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98365/jpeg_plant-merge-zombie-war_200x120.jpg?1766492611" alt="Plant Merge: Zombie War">
    </picture>

</div>
<div class="tile-title" data-index="12">Plant Merge: Zombie War</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Bubble Shooter" data-index="13" href="https://www.permainan.co.id/permainan/bubble-shooter">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/14464/webp_200X120_11638_1487769913.webp?1692363390" type="image/webp" alt="Bubble Shooter" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/14464/original_200X120_11638_1487769913.gif?1692363390" type="image/webp" alt="Bubble Shooter" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280145782" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/14464/jpeg_200X120_11638_1487769913.jpg?1692363390" alt="Bubble Shooter">
    </picture>

</div>
<div class="tile-title" data-index="13">Bubble Shooter</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>

  <li class="menu-item menu-item-category" data-menu-id="636">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/aksi">
      <p class="menu-title">Action</p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-anak-laki-laki">
    <i class="c-i__boy-games"></i>
    <div class="tile-title ellipsis">Game Anak Laki-laki</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/seru">
    <i class="c-i__fun"></i>
    <div class="tile-title ellipsis">Permainan Seru</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/html5">
    <i class="c-i__html5"></i>
    <div class="tile-title ellipsis">Game HTML5</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/kizi">
    <i class="c-i__kizi"></i>
    <div class="tile-title ellipsis">Permainan Kizi</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/3d">
    <i class="c-i__3d"></i>
    <div class="tile-title ellipsis">Game 3D</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/y8">
    <i class="c-i__y8"></i>
    <div class="tile-title ellipsis">Permainan Y8</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-arkade">
    <i class="c-i__arcade-games"></i>
    <div class="tile-title ellipsis">Game Arkade</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/stickman">
    <i class="c-i__stickman"></i>
    <div class="tile-title ellipsis">Game Stickman</div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Game Action" class="all_category_labels-link" href="https://www.permainan.co.id/game/aksi">Semua Permainan Game Action</a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Obby Rainbow Tower" data-index="0" href="https://www.permainan.co.id/permainan/obby-rainbow-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/webp_obby-rainbow-tower_200x120.webp?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/original_obby-rainbow-tower_200x120.png?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14164" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/jpeg_obby-rainbow-tower_200x120.jpg?1765356904" alt="Obby Rainbow Tower">
    </picture>

</div>
<div class="tile-title" data-index="0">Obby Rainbow Tower</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Commando Force 2" data-index="1" href="https://www.permainan.co.id/permainan/commando-force-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/webp_commando-force-2_200x120.webp?1751452308" type="image/webp" alt="Commando Force 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/original_commando-force-2_200x120.png?1751452308" type="image/webp" alt="Commando Force 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13827" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/jpeg_commando-force-2_200x120.jpg?1751452308" alt="Commando Force 2">
    </picture>

</div>
<div class="tile-title" data-index="1">Commando Force 2</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Contract Deer Hunter" data-index="2" href="https://www.permainan.co.id/permainan/contract-deer-hunter">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/webp_contract-deer-hunter_200x120.webp?1745576502" type="image/webp" alt="Contract Deer Hunter" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/original_contract-deer-hunter_200x120.png?1745576502" type="image/webp" alt="Contract Deer Hunter" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13710" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/jpeg_contract-deer-hunter_200x120.jpg?1745576502" alt="Contract Deer Hunter">
    </picture>

</div>
<div class="tile-title" data-index="2">Contract Deer Hunter</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Escape School Duel" data-index="3" href="https://www.permainan.co.id/permainan/escape-school-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/webp_escape-school-duel_200x120.webp?1771337926" type="image/webp" alt="Escape School Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/original_escape-school-duel_200x120.png?1771337926" type="image/webp" alt="Escape School Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14298" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/jpeg_escape-school-duel_200x120.jpg?1771337926" alt="Escape School Duel">
    </picture>

</div>
<div class="tile-title" data-index="3">Escape School Duel</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Falling Dummy" data-index="4" href="https://www.permainan.co.id/permainan/falling-dummy">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/webp_falling-dummy_200x120.webp?1769514546" type="image/webp" alt="Falling Dummy" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/original_falling-dummy_200x120.png?1769514546" type="image/webp" alt="Falling Dummy" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14240" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/jpeg_falling-dummy_200x120.jpg?1769514546" alt="Falling Dummy">
    </picture>

</div>
<div class="tile-title" data-index="4">Falling Dummy</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Geometry Vibes 3D" data-index="5" href="https://www.permainan.co.id/permainan/geometry-vibes-3d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/webp_geometry-vibes-3d_200x120.webp?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/original_geometry-vibes-3d_200x120.png?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13844" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/jpeg_geometry-vibes-3d_200x120.jpg?1752242615" alt="Geometry Vibes 3D">
    </picture>

</div>
<div class="tile-title" data-index="5">Geometry Vibes 3D</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Imposter Among Us: Escape From Prison" data-index="6" href="https://www.permainan.co.id/permainan/imposter-among-us-escape-from-prison">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98337/webp_imposter-among-us-escape-from-prison_200x120.webp?1766062449" type="image/webp" alt="Imposter Among Us: Escape From Prison" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98337/original_imposter-among-us-escape-from-prison_200x120.png?1766062449" type="image/webp" alt="Imposter Among Us: Escape From Prison" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14193" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98337/jpeg_imposter-among-us-escape-from-prison_200x120.jpg?1766062449" alt="Imposter Among Us: Escape From Prison">
    </picture>

</div>
<div class="tile-title" data-index="6">Imposter Among Us: Escape From Prison</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Steal Brainrot Duel" data-index="7" href="https://www.permainan.co.id/permainan/steal-brainrot-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/webp_steal-brainrot-duel_200x120.webp?1762867775" type="image/webp" alt="Steal Brainrot Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/original_steal-brainrot-duel_200x120.png?1762867775" type="image/webp" alt="Steal Brainrot Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14099" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/jpeg_steal-brainrot-duel_200x120.jpg?1762867775" alt="Steal Brainrot Duel">
    </picture>

</div>
<div class="tile-title" data-index="7">Steal Brainrot Duel</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Plant Merge: Zombie War" data-index="8" href="https://www.permainan.co.id/permainan/plant-merge-zombie-war">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98365/webp_plant-merge-zombie-war_200x120.webp?1766492611" type="image/webp" alt="Plant Merge: Zombie War" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98365/original_plant-merge-zombie-war_200x120.png?1766492611" type="image/webp" alt="Plant Merge: Zombie War" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14196" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98365/jpeg_plant-merge-zombie-war_200x120.jpg?1766492611" alt="Plant Merge: Zombie War">
    </picture>

</div>
<div class="tile-title" data-index="8">Plant Merge: Zombie War</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Dinosaur Rampage" data-index="9" href="https://www.permainan.co.id/permainan/dinosaur-rampage">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/webp_dinosaur-rampage_200x120.webp?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/original_dinosaur-rampage_200x120.png?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14256" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/jpeg_dinosaur-rampage_200x120.jpg?1769773814" alt="Dinosaur Rampage">
    </picture>

</div>
<div class="tile-title" data-index="9">Dinosaur Rampage</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Car Eats Car: Arctic Adventure" data-index="10" href="https://www.permainan.co.id/permainan/car-eats-car-arctic-adventure">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/webp_car-eats-car-arctic-adventure_200x120.webp?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/original_car-eats-car-arctic-adventure_200x120.png?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14304" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/jpeg_car-eats-car-arctic-adventure_200x120.jpg?1771504932" alt="Car Eats Car: Arctic Adventure">
    </picture>

</div>
<div class="tile-title" data-index="10">Car Eats Car: Arctic Adventure</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Wormate.io" data-index="11" href="https://www.permainan.co.id/permainan/wormate-io">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/webp_1550131531_wormate-io-200x2120.webp?1692368357" type="image/webp" alt="Wormate.io" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/original_1550131531_wormate-io-200x2120.png?1692368357" type="image/webp" alt="Wormate.io" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280302022" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/jpeg_1550131531_wormate-io-200x2120.jpg?1692368357" alt="Wormate.io">
    </picture>

</div>
<div class="tile-title" data-index="11">Wormate.io</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="GTA: Grand Vegas Crime" data-index="12" href="https://www.permainan.co.id/permainan/gta-grand-vegas-crime">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94795/webp_gta-grand-vegas-crime_200x120.webp?1743600583" type="image/webp" alt="GTA: Grand Vegas Crime" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94795/original_gta-grand-vegas-crime_200x120.png?1743600583" type="image/webp" alt="GTA: Grand Vegas Crime" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13687" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94795/jpeg_gta-grand-vegas-crime_200x120.jpg?1743600583" alt="GTA: Grand Vegas Crime">
    </picture>

</div>
<div class="tile-title" data-index="12">GTA: Grand Vegas Crime</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Epic Racing Descent on Cars" data-index="13" href="https://www.permainan.co.id/permainan/epic-racing-descent-on-cars">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98013/webp_epic-racing-descend-on-cars_200x120.webp?1764595007" type="image/webp" alt="Epic Racing Descent on Cars" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98013/original_epic-racing-descend-on-cars_200x120.png?1764595007" type="image/webp" alt="Epic Racing Descent on Cars" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14144" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98013/jpeg_epic-racing-descend-on-cars_200x120.jpg?1764595007" alt="Epic Racing Descent on Cars">
    </picture>

</div>
<div class="tile-title" data-index="13">Epic Racing Descent on Cars</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>

  <li class="menu-item menu-item-category" data-menu-id="895">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/multipemain">
      <p class="menu-title">Multi Pemain</p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/2-pemain">
    <i class="c-i__2-player"></i>
    <div class="tile-title ellipsis">Game 2 Pemain</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-io">
    <i class="c-i__io-games"></i>
    <div class="tile-title ellipsis">Games .io</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/casual-multiplayer">
    <i class="c-i__multiplayer-casual"></i>
    <div class="tile-title ellipsis">Game Casual Multiplayer</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/mmo">
    <i class="c-i__mmo"></i>
    <div class="tile-title ellipsis">Game MMO</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/perang-multiplayer">
    <i class="c-i__multiplayer-war"></i>
    <div class="tile-title ellipsis">Game Perang Multiplayer</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/social-games">
    <i class="c-i__social-games"></i>
    <div class="tile-title ellipsis">Game Sosial</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/simulasi-multiplayer">
    <i class="c-i__multiplayer-simulation"></i>
    <div class="tile-title ellipsis">Game Simulasi Multiplayer</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/qplay-games">
    <i class="c-i__qplay-games"></i>
    <div class="tile-title ellipsis">Qplay Games </div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Multi Pemain" class="all_category_labels-link" href="https://www.permainan.co.id/game/multipemain">Semua Permainan Multi Pemain</a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Worms.Zone" data-index="0" href="https://www.permainan.co.id/permainan/wormszone">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/webp_worms-zone-a-slithety-snake_200x120.webp?1739174012" type="image/webp" alt="Worms.Zone" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/original_worms-zone-a-slithety-snake_200x120.jpg?1739174012" type="image/webp" alt="Worms.Zone" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307086" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/jpeg_worms-zone-a-slithety-snake_200x120.jpg?1739174012" alt="Worms.Zone">
    </picture>

</div>
<div class="tile-title" data-index="0">Worms.Zone</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Farm Merge Valley" data-index="1" href="https://www.permainan.co.id/permainan/farm-merge-valley">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/webp_farm-merge-valley-winter-2025_200x120.webp?1764765594" type="image/webp" alt="Farm Merge Valley" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/original_farm-merge-valley-winter-2025_200x120.png?1764765594" type="image/webp" alt="Farm Merge Valley" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13273" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/jpeg_farm-merge-valley-winter-2025_200x120.jpg?1764765594" alt="Farm Merge Valley">
    </picture>

</div>
<div class="tile-title" data-index="1">Farm Merge Valley</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Ono Card Game" data-index="2" href="https://www.permainan.co.id/permainan/ono-card-game">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/webp_200X120_173100_1536005750.webp?1692369711" type="image/webp" alt="Ono Card Game" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/original_200X120_173100_1536005750.png?1692369711" type="image/webp" alt="Ono Card Game" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307244" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/jpeg_200X120_173100_1536005750.jpg?1692369711" alt="Ono Card Game">
    </picture>

</div>
<div class="tile-title" data-index="2">Ono Card Game</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Obby Rainbow Tower" data-index="3" href="https://www.permainan.co.id/permainan/obby-rainbow-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/webp_obby-rainbow-tower_200x120.webp?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/original_obby-rainbow-tower_200x120.png?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14164" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/jpeg_obby-rainbow-tower_200x120.jpg?1765356904" alt="Obby Rainbow Tower">
    </picture>

</div>
<div class="tile-title" data-index="3">Obby Rainbow Tower</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Commando Force 2" data-index="4" href="https://www.permainan.co.id/permainan/commando-force-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/webp_commando-force-2_200x120.webp?1751452308" type="image/webp" alt="Commando Force 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/original_commando-force-2_200x120.png?1751452308" type="image/webp" alt="Commando Force 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13827" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/jpeg_commando-force-2_200x120.jpg?1751452308" alt="Commando Force 2">
    </picture>

</div>
<div class="tile-title" data-index="4">Commando Force 2</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Master Chess Multiplayer" data-index="5" href="https://www.permainan.co.id/permainan/master-chess-multiplayer">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/webp_1550132657_Master-Chess-Multiplayer-200x120.webp?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/original_1550132657_Master-Chess-Multiplayer-200x120.png?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306986" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/jpeg_1550132657_Master-Chess-Multiplayer-200x120.jpg?1692369670" alt="Master Chess Multiplayer">
    </picture>

</div>
<div class="tile-title" data-index="5">Master Chess Multiplayer</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Harvest Honors Classic" data-index="6" href="https://www.permainan.co.id/permainan/harvest-honors-classic">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/webp_1550130898_Harvest-Honors-200x120.webp?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/original_1550130898_Harvest-Honors-200x120.png?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284592" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/jpeg_1550130898_Harvest-Honors-200x120.jpg?1692364771" alt="Harvest Honors Classic">
    </picture>

</div>
<div class="tile-title" data-index="6">Harvest Honors Classic</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Geometry Vibes X-Arrow" data-index="7" href="https://www.permainan.co.id/permainan/geometry-vibes-x-arrow">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/webp_geometry-vibes-x-arrow_200x120.webp?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/original_geometry-vibes-x-arrow_200x120.png?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14159" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/jpeg_geometry-vibes-x-arrow_200x120.jpg?1764938067" alt="Geometry Vibes X-Arrow">
    </picture>

</div>
<div class="tile-title" data-index="7">Geometry Vibes X-Arrow</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Steal Brainrot Duel" data-index="8" href="https://www.permainan.co.id/permainan/steal-brainrot-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/webp_steal-brainrot-duel_200x120.webp?1762867775" type="image/webp" alt="Steal Brainrot Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/original_steal-brainrot-duel_200x120.png?1762867775" type="image/webp" alt="Steal Brainrot Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14099" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/jpeg_steal-brainrot-duel_200x120.jpg?1762867775" alt="Steal Brainrot Duel">
    </picture>

</div>
<div class="tile-title" data-index="8">Steal Brainrot Duel</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Fireboy and Watergirl: Kuil Hutan" data-index="9" href="https://www.permainan.co.id/permainan/fireboy-dan-watergirl-kuil-hutan">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17235/webp_1609756524_Fireboy-and-Watergirl-The-Forest-Temple-200x120.webp?1692365266" type="image/webp" alt="Fireboy and Watergirl: Kuil Hutan" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17235/original_1609756524_Fireboy-and-Watergirl-The-Forest-Temple-200x120.png?1692365266" type="image/webp" alt="Fireboy and Watergirl: Kuil Hutan" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280286916" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17235/jpeg_1609756524_Fireboy-and-Watergirl-The-Forest-Temple-200x120.jpg?1692365266" alt="Fireboy and Watergirl: Kuil Hutan">
    </picture>

</div>
<div class="tile-title" data-index="9">Fireboy and Watergirl: Kuil Hutan</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Let&#39;s Fish!" data-index="10" href="https://www.permainan.co.id/permainan/lets-fish">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/webp_original_1531734105_LF_200x120.webp?1771230454" type="image/webp" alt="Let&#39;s Fish!" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/original_original_1531734105_LF_200x120.jpg?1771230454" type="image/webp" alt="Let&#39;s Fish!" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280287872" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/jpeg_original_1531734105_LF_200x120.jpg?1771230454" alt="Let&#39;s Fish!">
    </picture>

</div>
<div class="tile-title" data-index="10">Let&#39;s Fish!</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Math Obby" data-index="11" href="https://www.permainan.co.id/permainan/math-obby">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96596/webp_math-obby_200x120.webp?1757338909" type="image/webp" alt="Math Obby" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96596/original_math-obby_200x120.png?1757338909" type="image/webp" alt="Math Obby" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13934" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96596/jpeg_math-obby_200x120.jpg?1757338909" alt="Math Obby">
    </picture>

</div>
<div class="tile-title" data-index="11">Math Obby</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Dinosaur Rampage" data-index="12" href="https://www.permainan.co.id/permainan/dinosaur-rampage">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/webp_dinosaur-rampage_200x120.webp?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/original_dinosaur-rampage_200x120.png?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14256" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/jpeg_dinosaur-rampage_200x120.jpg?1769773814" alt="Dinosaur Rampage">
    </picture>

</div>
<div class="tile-title" data-index="12">Dinosaur Rampage</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Wormate.io" data-index="13" href="https://www.permainan.co.id/permainan/wormate-io">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/webp_1550131531_wormate-io-200x2120.webp?1692368357" type="image/webp" alt="Wormate.io" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/original_1550131531_wormate-io-200x2120.png?1692368357" type="image/webp" alt="Wormate.io" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280302022" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/jpeg_1550131531_wormate-io-200x2120.jpg?1692368357" alt="Wormate.io">
    </picture>

</div>
<div class="tile-title" data-index="13">Wormate.io</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>

  <li class="menu-item menu-item-category" data-menu-id="821">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/putri">
      <p class="menu-title">Permainan Perempuan </p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/berpakaian">
    <i class="c-i__dress-up"></i>
    <div class="tile-title ellipsis">Permainan Berdandan</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-kue">
    <i class="c-i__cake"></i>
    <div class="tile-title ellipsis">Game Memasak Kue</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-anak-kecil">
    <i class="c-i__kids-games"></i>
    <div class="tile-title ellipsis">Game Anak</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-anak-anak">
    <i class="c-i__children-games"></i>
    <div class="tile-title ellipsis">Game Anak-anak</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-fashion">
    <i class="c-i__fashion-games"></i>
    <div class="tile-title ellipsis">Game Fashion</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/beauty">
    <i class="c-i__beauty"></i>
    <div class="tile-title ellipsis">Game Salon Kecantikan</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/mengubah_penampilan">
    <i class="c-i__makeover"></i>
    <div class="tile-title ellipsis">Permainan Berdandan</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/berdandan">
    <i class="c-i__make-up"></i>
    <div class="tile-title ellipsis">Game Berdandan</div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Permainan Perempuan" class="all_category_labels-link" href="https://www.permainan.co.id/game/putri">Semua Permainan Permainan Perempuan</a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Idol Livestream: Doll Dress Up" data-index="0" href="https://www.permainan.co.id/permainan/idol-livestream-doll-dress-up">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/webp_idol-livestream-doll-dress-up_200x120.webp?1751462244" type="image/webp" alt="Idol Livestream: Doll Dress Up" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/original_idol-livestream-doll-dress-up_200x120.png?1751462244" type="image/webp" alt="Idol Livestream: Doll Dress Up" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13833" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/jpeg_idol-livestream-doll-dress-up_200x120.jpg?1751462244" alt="Idol Livestream: Doll Dress Up">
    </picture>

</div>
<div class="tile-title" data-index="0">Idol Livestream: Doll Dress Up</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Kelas Memasak Sara: Ayam Kung Pao" data-index="1" href="https://www.permainan.co.id/permainan/ayam-kung-pao-kelas-memasak-sara">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/webp_SaraKungPao_200x120.webp?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/original_SaraKungPao_200x120.png?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289599" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/jpeg_SaraKungPao_200x120.jpg?1770910663" alt="Kelas Memasak Sara: Ayam Kung Pao">
    </picture>

</div>
<div class="tile-title" data-index="1">Kelas Memasak Sara: Ayam Kung Pao</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="ASMR Beauty Superstar" data-index="2" href="https://www.permainan.co.id/permainan/asmr-beauty-superstar">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/webp_asmr-beauty-superstar_200x120.webp?1754391603" type="image/webp" alt="ASMR Beauty Superstar" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/original_asmr-beauty-superstar_200x120.png?1754391603" type="image/webp" alt="ASMR Beauty Superstar" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13863" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/jpeg_asmr-beauty-superstar_200x120.jpg?1754391603" alt="ASMR Beauty Superstar">
    </picture>

</div>
<div class="tile-title" data-index="2">ASMR Beauty Superstar</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Baby Hazel Goes Sick" data-index="3" href="https://www.permainan.co.id/permainan/baby-hazel-goes-sick">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/webp_200X120_162483_1554896099.webp?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/original_200X120_162483_1554896099.png?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280296627" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/jpeg_200X120_162483_1554896099.jpg?1692367406" alt="Baby Hazel Goes Sick">
    </picture>

</div>
<div class="tile-title" data-index="3">Baby Hazel Goes Sick</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Kelas Memasak Sara: Pentol Swedia" data-index="4" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-pentol-swedia">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/webp_SaraMeatball_200x120.webp?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/original_SaraMeatball_200x120.png?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280285482" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/jpeg_SaraMeatball_200x120.jpg?1770718260" alt="Kelas Memasak Sara: Pentol Swedia">
    </picture>

</div>
<div class="tile-title" data-index="4">Kelas Memasak Sara: Pentol Swedia</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Ella: Bedah Pinggul" data-index="5" href="https://www.permainan.co.id/permainan/ella-bedah-pinggul">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/webp_200X120_174965_1551960382.webp?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/original_200X120_174965_1551960382.png?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280309109" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/jpeg_200X120_174965_1551960382.jpg?1692370055" alt="Ella: Bedah Pinggul">
    </picture>

</div>
<div class="tile-title" data-index="5">Ella: Bedah Pinggul</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Tes Cinta 3" data-index="6" href="https://www.permainan.co.id/permainan/tes-cinta-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/webp_200X120_168992_1487606903.webp?1692368701" type="image/webp" alt="Tes Cinta 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/original_200X120_168992_1487606903.png?1692368701" type="image/webp" alt="Tes Cinta 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280303136" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/jpeg_200X120_168992_1487606903.jpg?1692368701" alt="Tes Cinta 3">
    </picture>

</div>
<div class="tile-title" data-index="6">Tes Cinta 3</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Koki Burger: Cerita Memasak" data-index="7" href="https://www.permainan.co.id/permainan/koki-burger-cerita-memasak">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/webp_200X120_174423_1547806774.webp?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/original_200X120_174423_1547806774.png?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308567" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/jpeg_200X120_174423_1547806774.jpg?1692369958" alt="Koki Burger: Cerita Memasak">
    </picture>

</div>
<div class="tile-title" data-index="7">Koki Burger: Cerita Memasak</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Kelas Memasak Sara: Parmesan Ayam" data-index="8" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-parmesan-ayam">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98858/webp_sara_parmesan_%281%29.webp?1770127523" type="image/webp" alt="Kelas Memasak Sara: Parmesan Ayam" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98858/original_sara_parmesan_%281%29.jpg?1770127523" type="image/webp" alt="Kelas Memasak Sara: Parmesan Ayam" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14267" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98858/jpeg_sara_parmesan_%281%29.jpg?1770127523" alt="Kelas Memasak Sara: Parmesan Ayam">
    </picture>

</div>
<div class="tile-title" data-index="8">Kelas Memasak Sara: Parmesan Ayam</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Buku Mewarnai Kerajaan Es" data-index="9" href="https://www.permainan.co.id/permainan/buku-mewarnai-kerajaan-es">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21720/webp_200X120_167670.webp?1692368297" type="image/webp" alt="Buku Mewarnai Kerajaan Es" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21720/original_200X120_167670.jpg?1692368297" type="image/webp" alt="Buku Mewarnai Kerajaan Es" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280301814" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21720/jpeg_200X120_167670.jpg?1692368297" alt="Buku Mewarnai Kerajaan Es">
    </picture>

</div>
<div class="tile-title" data-index="9">Buku Mewarnai Kerajaan Es</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Persiapan Pernikahan Gadis Pirang" data-index="10" href="https://www.permainan.co.id/permainan/persiapan-pernikahan-gadis-pirang">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22668/webp_200X120_170039_1498464195.webp?1692368970" type="image/webp" alt="Persiapan Pernikahan Gadis Pirang" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22668/original_200X120_170039_1498464195.png?1692368970" type="image/webp" alt="Persiapan Pernikahan Gadis Pirang" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280304183" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22668/jpeg_200X120_170039_1498464195.jpg?1692368970" alt="Persiapan Pernikahan Gadis Pirang">
    </picture>

</div>
<div class="tile-title" data-index="10">Persiapan Pernikahan Gadis Pirang</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Fashion Princess - Dress Up for Girls" data-index="11" href="https://www.permainan.co.id/permainan/fashion-princess-dress-up-for-girls">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95565/webp_fashion-princess-dress-up-for-girls_200x120.webp?1749819489" type="image/webp" alt="Fashion Princess - Dress Up for Girls" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95565/original_fashion-princess-dress-up-for-girls_200x120.png?1749819489" type="image/webp" alt="Fashion Princess - Dress Up for Girls" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13797" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95565/jpeg_fashion-princess-dress-up-for-girls_200x120.jpg?1749819489" alt="Fashion Princess - Dress Up for Girls">
    </picture>

</div>
<div class="tile-title" data-index="11">Fashion Princess - Dress Up for Girls</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Cooking Fast 4: Steak" data-index="12" href="https://www.permainan.co.id/permainan/cooking-fast-4-steak">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24782/webp_200X120_177270_1579079190.webp?1692370465" type="image/webp" alt="Cooking Fast 4: Steak" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24782/original_200X120_177270_1579079190.png?1692370465" type="image/webp" alt="Cooking Fast 4: Steak" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311414" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24782/jpeg_200X120_177270_1579079190.jpg?1692370465" alt="Cooking Fast 4: Steak">
    </picture>

</div>
<div class="tile-title" data-index="12">Cooking Fast 4: Steak</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="K-Pop Hunter Fashion" data-index="13" href="https://www.permainan.co.id/permainan/k-pop-hunter-fashion">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97596/webp_k-pop-hunter-fashion_200x120.webp?1762343010" type="image/webp" alt="K-Pop Hunter Fashion" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97596/original_k-pop-hunter-fashion_200x120.png?1762343010" type="image/webp" alt="K-Pop Hunter Fashion" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14083" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97596/jpeg_k-pop-hunter-fashion_200x120.jpg?1762343010" alt="K-Pop Hunter Fashion">
    </picture>

</div>
<div class="tile-title" data-index="13">K-Pop Hunter Fashion</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>

  <li class="menu-item menu-item-category" data-menu-id="983">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/simulasi">
      <p class="menu-title">Permainan Simulasi</p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-bedah">
    <i class="c-i__surgery-games"></i>
    <div class="tile-title ellipsis">Games Оperasi</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/restoran">
    <i class="c-i__restaurant"></i>
    <div class="tile-title ellipsis">Game Restoran</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-kelas-memasak-sara">
    <i class="c-i__saras-cooking-class-games"></i>
    <div class="tile-title ellipsis">Game Kelas Memasak Sara</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/memancing">
    <i class="c-i__fishing"></i>
    <div class="tile-title ellipsis">Game Memancing</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/memasak">
    <i class="c-i__cooking"></i>
    <div class="tile-title ellipsis">Permainan Memasak</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/pertanian">
    <i class="c-i__farming"></i>
    <div class="tile-title ellipsis">Game Pertanian</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/permainan-bertani">
    <i class="c-i__farm-games"></i>
    <div class="tile-title ellipsis">Permainan Bertani</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/dokter">
    <i class="c-i__doctor"></i>
    <div class="tile-title ellipsis">Dokter</div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Permainan Simulasi " class="all_category_labels-link" href="https://www.permainan.co.id/game/simulasi">Semua Permainan Permainan Simulasi </a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Farm Merge Valley" data-index="0" href="https://www.permainan.co.id/permainan/farm-merge-valley">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/webp_farm-merge-valley-winter-2025_200x120.webp?1764765594" type="image/webp" alt="Farm Merge Valley" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/original_farm-merge-valley-winter-2025_200x120.png?1764765594" type="image/webp" alt="Farm Merge Valley" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13273" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/jpeg_farm-merge-valley-winter-2025_200x120.jpg?1764765594" alt="Farm Merge Valley">
    </picture>

</div>
<div class="tile-title" data-index="0">Farm Merge Valley</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Baby Hazel Goes Sick" data-index="1" href="https://www.permainan.co.id/permainan/baby-hazel-goes-sick">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/webp_200X120_162483_1554896099.webp?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/original_200X120_162483_1554896099.png?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280296627" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/jpeg_200X120_162483_1554896099.jpg?1692367406" alt="Baby Hazel Goes Sick">
    </picture>

</div>
<div class="tile-title" data-index="1">Baby Hazel Goes Sick</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Kelas Memasak Sara: Pentol Swedia" data-index="2" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-pentol-swedia">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/webp_SaraMeatball_200x120.webp?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/original_SaraMeatball_200x120.png?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280285482" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/jpeg_SaraMeatball_200x120.jpg?1770718260" alt="Kelas Memasak Sara: Pentol Swedia">
    </picture>

</div>
<div class="tile-title" data-index="2">Kelas Memasak Sara: Pentol Swedia</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Ella: Bedah Pinggul" data-index="3" href="https://www.permainan.co.id/permainan/ella-bedah-pinggul">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/webp_200X120_174965_1551960382.webp?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/original_200X120_174965_1551960382.png?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280309109" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/jpeg_200X120_174965_1551960382.jpg?1692370055" alt="Ella: Bedah Pinggul">
    </picture>

</div>
<div class="tile-title" data-index="3">Ella: Bedah Pinggul</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Pou" data-index="4" href="https://www.permainan.co.id/permainan/pou">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61362/webp_200X120_178219_1637078872.webp?1692371023" type="image/webp" alt="Pou" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61362/original_200X120_178219_1637078872.png?1692371023" type="image/webp" alt="Pou" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312363" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61362/jpeg_200X120_178219_1637078872.jpg?1692371023" alt="Pou">
    </picture>

</div>
<div class="tile-title" data-index="4">Pou</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Koki Burger: Cerita Memasak" data-index="5" href="https://www.permainan.co.id/permainan/koki-burger-cerita-memasak">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/webp_200X120_174423_1547806774.webp?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/original_200X120_174423_1547806774.png?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308567" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/jpeg_200X120_174423_1547806774.jpg?1692369958" alt="Koki Burger: Cerita Memasak">
    </picture>

</div>
<div class="tile-title" data-index="5">Koki Burger: Cerita Memasak</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Gas Station: Junkyard Tycoon" data-index="6" href="https://www.permainan.co.id/permainan/gas-station-junkyard-tycoon">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98940/webp_gas-station-junkyard-tycoon_200x120.webp?1770295227" type="image/webp" alt="Gas Station: Junkyard Tycoon" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98940/original_gas-station-junkyard-tycoon_200x120.png?1770295227" type="image/webp" alt="Gas Station: Junkyard Tycoon" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14280" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98940/jpeg_gas-station-junkyard-tycoon_200x120.jpg?1770295227" alt="Gas Station: Junkyard Tycoon">
    </picture>

</div>
<div class="tile-title" data-index="6">Gas Station: Junkyard Tycoon</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Dinosaur Rampage" data-index="7" href="https://www.permainan.co.id/permainan/dinosaur-rampage">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/webp_dinosaur-rampage_200x120.webp?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/original_dinosaur-rampage_200x120.png?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14256" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/jpeg_dinosaur-rampage_200x120.jpg?1769773814" alt="Dinosaur Rampage">
    </picture>

</div>
<div class="tile-title" data-index="7">Dinosaur Rampage</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Lumber Factory Simulator" data-index="8" href="https://www.permainan.co.id/permainan/lumber-factory-simulator">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/93925/webp_lumber-factory-simulator_200x120.webp?1736339330" type="image/webp" alt="Lumber Factory Simulator" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/93925/original_lumber-factory-simulator_200x120.png?1736339330" type="image/webp" alt="Lumber Factory Simulator" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13568" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/93925/jpeg_lumber-factory-simulator_200x120.jpg?1736339330" alt="Lumber Factory Simulator">
    </picture>

</div>
<div class="tile-title" data-index="8">Lumber Factory Simulator</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Ice Cream Inc." data-index="9" href="https://www.permainan.co.id/permainan/ice-cream-inc">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98664/webp_ice-cream-inc_200x120.webp?1769504017" type="image/webp" alt="Ice Cream Inc." media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98664/original_ice-cream-inc_200x120.png?1769504017" type="image/webp" alt="Ice Cream Inc." media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14237" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98664/jpeg_ice-cream-inc_200x120.jpg?1769504017" alt="Ice Cream Inc.">
    </picture>

</div>
<div class="tile-title" data-index="9">Ice Cream Inc.</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Obby Toilet Line" data-index="10" href="https://www.permainan.co.id/permainan/obby-toilet-line">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98554/webp_obby-toilet-line_200x120.webp?1769007567" type="image/webp" alt="Obby Toilet Line" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98554/original_obby-toilet-line_200x120.png?1769007567" type="image/webp" alt="Obby Toilet Line" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14220" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98554/jpeg_obby-toilet-line_200x120.jpg?1769007567" alt="Obby Toilet Line">
    </picture>

</div>
<div class="tile-title" data-index="10">Obby Toilet Line</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Kelas Memasak Sara: Parmesan Ayam" data-index="11" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-parmesan-ayam">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98858/webp_sara_parmesan_%281%29.webp?1770127523" type="image/webp" alt="Kelas Memasak Sara: Parmesan Ayam" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98858/original_sara_parmesan_%281%29.jpg?1770127523" type="image/webp" alt="Kelas Memasak Sara: Parmesan Ayam" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14267" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98858/jpeg_sara_parmesan_%281%29.jpg?1770127523" alt="Kelas Memasak Sara: Parmesan Ayam">
    </picture>

</div>
<div class="tile-title" data-index="11">Kelas Memasak Sara: Parmesan Ayam</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Buku Mewarnai Kerajaan Es" data-index="12" href="https://www.permainan.co.id/permainan/buku-mewarnai-kerajaan-es">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21720/webp_200X120_167670.webp?1692368297" type="image/webp" alt="Buku Mewarnai Kerajaan Es" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21720/original_200X120_167670.jpg?1692368297" type="image/webp" alt="Buku Mewarnai Kerajaan Es" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280301814" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21720/jpeg_200X120_167670.jpg?1692368297" alt="Buku Mewarnai Kerajaan Es">
    </picture>

</div>
<div class="tile-title" data-index="12">Buku Mewarnai Kerajaan Es</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Fashion Princess - Dress Up for Girls" data-index="13" href="https://www.permainan.co.id/permainan/fashion-princess-dress-up-for-girls">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95565/webp_fashion-princess-dress-up-for-girls_200x120.webp?1749819489" type="image/webp" alt="Fashion Princess - Dress Up for Girls" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95565/original_fashion-princess-dress-up-for-girls_200x120.png?1749819489" type="image/webp" alt="Fashion Princess - Dress Up for Girls" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13797" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95565/jpeg_fashion-princess-dress-up-for-girls_200x120.jpg?1749819489" alt="Fashion Princess - Dress Up for Girls">
    </picture>

</div>
<div class="tile-title" data-index="13">Fashion Princess - Dress Up for Girls</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>

  <li class="menu-item menu-item-category" data-menu-id="986">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/keahlian">
      <p class="menu-title">Ketangkasan</p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/pendidikan">
    <i class="c-i__educational"></i>
    <div class="tile-title ellipsis">Game Pendidikan</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/hitungan">
    <i class="c-i__math"></i>
    <div class="tile-title ellipsis">Game Matematika</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/konsentrasi">
    <i class="c-i__concentration"></i>
    <div class="tile-title ellipsis">Game Konsentrasi</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-logika">
    <i class="c-i__logic-games"></i>
    <div class="tile-title ellipsis">Game Logika</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/daya-ingat">
    <i class="c-i__memo"></i>
    <div class="tile-title ellipsis">Game Daya Ingat</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/dsadasdesaeas">
    <i class="c-i__quiz"></i>
    <div class="tile-title ellipsis">dasdsadas</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-angka">
    <i class="c-i__number-games"></i>
    <div class="tile-title ellipsis">Game Angka</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/flip">
    <i class="c-i__flip"></i>
    <div class="tile-title ellipsis">Games Flip</div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Game Ketangkasan " class="all_category_labels-link" href="https://www.permainan.co.id/game/keahlian">Semua Permainan Game Ketangkasan </a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Magic Piano Tiles" data-index="0" href="https://www.permainan.co.id/permainan/tuts-piano-ajaib">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/webp_200X120_172327_1528274776.webp?1692369585" type="image/webp" alt="Magic Piano Tiles" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/original_200X120_172327_1528274776.png?1692369585" type="image/webp" alt="Magic Piano Tiles" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306471" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/jpeg_200X120_172327_1528274776.jpg?1692369585" alt="Magic Piano Tiles">
    </picture>

</div>
<div class="tile-title" data-index="0">Magic Piano Tiles</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Geometry Vibes" data-index="1" href="https://www.permainan.co.id/permainan/geometry-vibes">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/webp_geometry-vibes_200x120.webp?1738580822" type="image/webp" alt="Geometry Vibes" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/original_geometry-vibes_200x120.png?1738580822" type="image/webp" alt="Geometry Vibes" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13608" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/jpeg_geometry-vibes_200x120.jpg?1738580822" alt="Geometry Vibes">
    </picture>

</div>
<div class="tile-title" data-index="1">Geometry Vibes</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Obby Rainbow Tower" data-index="2" href="https://www.permainan.co.id/permainan/obby-rainbow-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/webp_obby-rainbow-tower_200x120.webp?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/original_obby-rainbow-tower_200x120.png?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14164" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/jpeg_obby-rainbow-tower_200x120.jpg?1765356904" alt="Obby Rainbow Tower">
    </picture>

</div>
<div class="tile-title" data-index="2">Obby Rainbow Tower</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Free Hoops" data-index="3" href="https://www.permainan.co.id/permainan/free-hoops">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/webp_free-hops_200x120.webp?1768910246" type="image/webp" alt="Free Hoops" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/original_free-hops_200x120.png?1768910246" type="image/webp" alt="Free Hoops" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14212" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/jpeg_free-hops_200x120.jpg?1768910246" alt="Free Hoops">
    </picture>

</div>
<div class="tile-title" data-index="3">Free Hoops</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Harvest Honors Classic" data-index="4" href="https://www.permainan.co.id/permainan/harvest-honors-classic">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/webp_1550130898_Harvest-Honors-200x120.webp?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/original_1550130898_Harvest-Honors-200x120.png?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284592" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/jpeg_1550130898_Harvest-Honors-200x120.jpg?1692364771" alt="Harvest Honors Classic">
    </picture>

</div>
<div class="tile-title" data-index="4">Harvest Honors Classic</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Geometry Vibes X-Arrow" data-index="5" href="https://www.permainan.co.id/permainan/geometry-vibes-x-arrow">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/webp_geometry-vibes-x-arrow_200x120.webp?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/original_geometry-vibes-x-arrow_200x120.png?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14159" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/jpeg_geometry-vibes-x-arrow_200x120.jpg?1764938067" alt="Geometry Vibes X-Arrow">
    </picture>

</div>
<div class="tile-title" data-index="5">Geometry Vibes X-Arrow</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Geometry Vibes 3D" data-index="6" href="https://www.permainan.co.id/permainan/geometry-vibes-3d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/webp_geometry-vibes-3d_200x120.webp?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/original_geometry-vibes-3d_200x120.png?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13844" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/jpeg_geometry-vibes-3d_200x120.jpg?1752242615" alt="Geometry Vibes 3D">
    </picture>

</div>
<div class="tile-title" data-index="6">Geometry Vibes 3D</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Tes Cinta 3" data-index="7" href="https://www.permainan.co.id/permainan/tes-cinta-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/webp_200X120_168992_1487606903.webp?1692368701" type="image/webp" alt="Tes Cinta 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/original_200X120_168992_1487606903.png?1692368701" type="image/webp" alt="Tes Cinta 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280303136" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/jpeg_200X120_168992_1487606903.jpg?1692368701" alt="Tes Cinta 3">
    </picture>

</div>
<div class="tile-title" data-index="7">Tes Cinta 3</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Neon Tower" data-index="8" href="https://www.permainan.co.id/permainan/neon-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97812/webp_neon-tower_200x120.webp?1763042536" type="image/webp" alt="Neon Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97812/original_neon-tower_200x120.png?1763042536" type="image/webp" alt="Neon Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14115" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97812/jpeg_neon-tower_200x120.jpg?1763042536" alt="Neon Tower">
    </picture>

</div>
<div class="tile-title" data-index="8">Neon Tower</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Magic Tiles 3" data-index="9" href="https://www.permainan.co.id/permainan/magic-tiles-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22937/webp_magic-tiles-3_200x120.webp?1760612010" type="image/webp" alt="Magic Tiles 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22937/original_magic-tiles-3_200x120.png?1760612010" type="image/webp" alt="Magic Tiles 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280304803" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22937/jpeg_magic-tiles-3_200x120.jpg?1760612010" alt="Magic Tiles 3">
    </picture>

</div>
<div class="tile-title" data-index="9">Magic Tiles 3</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Geometry Rush 4D" data-index="10" href="https://www.permainan.co.id/permainan/geometry-rush-4d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/93041/webp_geometry-rush-4d_200x120.webp?1728903926" type="image/webp" alt="Geometry Rush 4D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/93041/original_geometry-rush-4d_200x120.png?1728903926" type="image/webp" alt="Geometry Rush 4D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13462" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/93041/jpeg_geometry-rush-4d_200x120.jpg?1728903926" alt="Geometry Rush 4D">
    </picture>

</div>
<div class="tile-title" data-index="10">Geometry Rush 4D</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Wormate.io" data-index="11" href="https://www.permainan.co.id/permainan/wormate-io">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/webp_1550131531_wormate-io-200x2120.webp?1692368357" type="image/webp" alt="Wormate.io" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/original_1550131531_wormate-io-200x2120.png?1692368357" type="image/webp" alt="Wormate.io" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280302022" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21806/jpeg_1550131531_wormate-io-200x2120.jpg?1692368357" alt="Wormate.io">
    </picture>

</div>
<div class="tile-title" data-index="11">Wormate.io</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Juara Balok" data-index="12" href="https://www.permainan.co.id/permainan/juara-balok">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24557/webp_200X120_176333_1563886827.webp?1692370306" type="image/webp" alt="Juara Balok" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24557/original_200X120_176333_1563886827.png?1692370306" type="image/webp" alt="Juara Balok" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280310477" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24557/jpeg_200X120_176333_1563886827.jpg?1692370306" alt="Juara Balok">
    </picture>

</div>
<div class="tile-title" data-index="12">Juara Balok</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Dino Game" data-index="13" href="https://www.permainan.co.id/permainan/dino-game">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97704/webp_dino-game_200x120.webp?1762867130" type="image/webp" alt="Dino Game" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97704/original_dino-game_200x120.png?1762867130" type="image/webp" alt="Dino Game" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14098" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97704/jpeg_dino-game_200x120.jpg?1762867130" alt="Dino Game">
    </picture>

</div>
<div class="tile-title" data-index="13">Dino Game</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>

  <li class="menu-item menu-item-category" data-menu-id="1004">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/olahraga">
      <p class="menu-title">Permainan Olahraga</p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/biliar">
    <i class="c-i__billiards"></i>
    <div class="tile-title ellipsis">Game Biliar</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/sepak-bola">
    <i class="c-i__soccer"></i>
    <div class="tile-title ellipsis">Game Sepak Bola</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/tinju">
    <i class="c-i__boxing"></i>
    <div class="tile-title ellipsis">Game Tinju</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/permainan-hoki">
    <i class="c-i__hockey"></i>
    <div class="tile-title ellipsis">Game Hoki</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/atletik">
    <i class="c-i__athletics"></i>
    <div class="tile-title ellipsis">Game Atletik</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/permainan-bola">
    <i class="c-i__ball"></i>
    <div class="tile-title ellipsis">permainan Bola</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/bola-basket">
    <i class="c-i__basketball"></i>
    <div class="tile-title ellipsis">Game Bola Basket</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/game-anak-panah">
    <i class="c-i__darts-games"></i>
    <div class="tile-title ellipsis">Game Anak Panah</div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Permainan Olahraga" class="all_category_labels-link" href="https://www.permainan.co.id/game/olahraga">Semua Permainan Permainan Olahraga</a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Champions FC" data-index="0" href="https://www.permainan.co.id/permainan/champions-fc">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98548/webp_champions-fc_200x120.webp?1769003199" type="image/webp" alt="Champions FC" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98548/original_champions-fc_200x120.png?1769003199" type="image/webp" alt="Champions FC" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14219" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98548/jpeg_champions-fc_200x120.jpg?1769003199" alt="Champions FC">
    </picture>

</div>
<div class="tile-title" data-index="0">Champions FC</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Moto X3m 3" data-index="1" href="https://www.permainan.co.id/permainan/moto-x3m-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21625/webp_200X120_167463.webp?1692368230" type="image/webp" alt="Moto X3m 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21625/original_200X120_167463.jpg?1692368230" type="image/webp" alt="Moto X3m 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280301607" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21625/jpeg_200X120_167463.jpg?1692368230" alt="Moto X3m 3">
    </picture>

</div>
<div class="tile-title" data-index="1">Moto X3m 3</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="8 Ball Pro" data-index="2" href="https://www.permainan.co.id/permainan/8-ball-pro">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61171/webp_200X120_178185_1635174271.webp?1692370999" type="image/webp" alt="8 Ball Pro" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61171/original_200X120_178185_1635174271.png?1692370999" type="image/webp" alt="8 Ball Pro" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312329" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61171/jpeg_200X120_178185_1635174271.jpg?1692370999" alt="8 Ball Pro">
    </picture>

</div>
<div class="tile-title" data-index="2">8 Ball Pro</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Penalty Shooter 3" data-index="3" href="https://www.permainan.co.id/permainan/penalty-shooter-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/88195/webp_Penalty-Shooter-3-200x120.webp?1697550019" type="image/webp" alt="Penalty Shooter 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/88195/original_Penalty-Shooter-3-200x120.png?1697550019" type="image/webp" alt="Penalty Shooter 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="12834" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/88195/jpeg_Penalty-Shooter-3-200x120.jpg?1697550019" alt="Penalty Shooter 3">
    </picture>

</div>
<div class="tile-title" data-index="3">Penalty Shooter 3</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Xcross Madness" data-index="4" href="https://www.permainan.co.id/permainan/xcross-madness">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22265/webp_200X120_168928_1486977608.webp?1692368682" type="image/webp" alt="Xcross Madness" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22265/original_200X120_168928_1486977608.png?1692368682" type="image/webp" alt="Xcross Madness" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280303072" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22265/jpeg_200X120_168928_1486977608.jpg?1692368682" alt="Xcross Madness">
    </picture>

</div>
<div class="tile-title" data-index="4">Xcross Madness</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Permainan Biliar: 8 Bola Biliar" data-index="5" href="https://www.permainan.co.id/permainan/permainan-biliar-8-bola-biliar">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24275/webp_200X120_175231_1554794651.webp?1692370110" type="image/webp" alt="Permainan Biliar: 8 Bola Biliar" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24275/original_200X120_175231_1554794651.png?1692370110" type="image/webp" alt="Permainan Biliar: 8 Bola Biliar" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280309375" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24275/jpeg_200X120_175231_1554794651.jpg?1692370110" alt="Permainan Biliar: 8 Bola Biliar">
    </picture>

</div>
<div class="tile-title" data-index="5">Permainan Biliar: 8 Bola Biliar</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Pemburu 3D" data-index="6" href="https://www.permainan.co.id/permainan/pemburu-3d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23649/webp_200X120_172825_1536002436.webp?1692369669" type="image/webp" alt="Pemburu 3D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23649/original_200X120_172825_1536002436.png?1692369669" type="image/webp" alt="Pemburu 3D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306969" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23649/jpeg_200X120_172825_1536002436.jpg?1692369669" alt="Pemburu 3D">
    </picture>

</div>
<div class="tile-title" data-index="6">Pemburu 3D</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Drag Racing Rivals" data-index="7" href="https://www.permainan.co.id/permainan/drag-racing-rivals">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24931/webp_200X120_177511_1591358531.webp?1692370569" type="image/webp" alt="Drag Racing Rivals" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24931/original_200X120_177511_1591358531.png?1692370569" type="image/webp" alt="Drag Racing Rivals" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311655" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24931/jpeg_200X120_177511_1591358531.jpg?1692370569" alt="Drag Racing Rivals">
    </picture>

</div>
<div class="tile-title" data-index="7">Drag Racing Rivals</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Football Legends: 2021" data-index="8" href="https://www.permainan.co.id/permainan/football-legends-2021">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25267/webp_200X120_177910_1624369120.webp?1692370809" type="image/webp" alt="Football Legends: 2021" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25267/original_200X120_177910_1624369120.png?1692370809" type="image/webp" alt="Football Legends: 2021" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312054" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25267/jpeg_200X120_177910_1624369120.jpg?1692370809" alt="Football Legends: 2021">
    </picture>

</div>
<div class="tile-title" data-index="8">Football Legends: 2021</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Ski King" data-index="9" href="https://www.permainan.co.id/permainan/ski-king">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25172/webp_200X120_177805_1618391716.webp?1692370741" type="image/webp" alt="Ski King" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25172/original_200X120_177805_1618391716.png?1692370741" type="image/webp" alt="Ski King" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311949" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25172/jpeg_200X120_177805_1618391716.jpg?1692370741" alt="Ski King">
    </picture>

</div>
<div class="tile-title" data-index="9">Ski King</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Moto X3M 4: Winter" data-index="10" href="https://www.permainan.co.id/permainan/moto-x3m-4-winter">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23282/webp_200X120_171517_1513932390.webp?1692369407" type="image/webp" alt="Moto X3M 4: Winter" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23282/original_200X120_171517_1513932390.png?1692369407" type="image/webp" alt="Moto X3M 4: Winter" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280305661" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23282/jpeg_200X120_171517_1513932390.jpg?1692369407" alt="Moto X3M 4: Winter">
    </picture>

</div>
<div class="tile-title" data-index="10">Moto X3M 4: Winter</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Catur 3D" data-index="11" href="https://www.permainan.co.id/permainan/catur-3d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20593/webp_1447065054_L.webp?1692367506" type="image/webp" alt="Catur 3D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20593/original_1447065054_L.gif?1692367506" type="image/webp" alt="Catur 3D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280297397" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20593/jpeg_1447065054_L.jpg?1692367506" alt="Catur 3D">
    </picture>

</div>
<div class="tile-title" data-index="11">Catur 3D</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="8 Ball Pool" data-index="12" href="https://www.permainan.co.id/permainan/8-ball-pool">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21804/webp_1550132518_8-Ball-200x120.webp?1692368356" type="image/webp" alt="8 Ball Pool" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21804/original_1550132518_8-Ball-200x120.png?1692368356" type="image/webp" alt="8 Ball Pool" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280302018" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21804/jpeg_1550132518_8-Ball-200x120.jpg?1692368356" alt="8 Ball Pool">
    </picture>

</div>
<div class="tile-title" data-index="12">8 Ball Pool</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Real Football" data-index="13" href="https://www.permainan.co.id/permainan/real-football">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/73818/webp_Real-Football-200x120.webp?1692371518" type="image/webp" alt="Real Football" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/73818/original_Real-Football-200x120.png?1692371518" type="image/webp" alt="Real Football" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="12532" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/73818/jpeg_Real-Football-200x120.jpg?1692371518" alt="Real Football">
    </picture>

</div>
<div class="tile-title" data-index="13">Real Football</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>

  <li class="menu-item menu-item-category" data-menu-id="883">
  <div class="menu-item-button-container">
    <a class="icon-wrapper" href="https://www.permainan.co.id/game/mmo">
      <p class="menu-title">MMO</p>
    </a> <span class="arrow"></span>
  </div>

  <div class="menu-item__dropdown menu-item__dropdown-list">
    <div class="categories dropdown">
      <div class="grid-col col-l-2-9 top-categories">
        <header class="box-header">
          <h3 class="box-title ellipsis">Kategori Populer</h3>
        </header>

        <ul class="category grid-row col-2 col-s-3 col-m-4 col-l-2">
            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/pertanian">
    <i class="c-i__farming"></i>
    <div class="tile-title ellipsis">Game Pertanian</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/permainan-bertani">
    <i class="c-i__farm-games"></i>
    <div class="tile-title ellipsis">Permainan Bertani</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/casual-multiplayer">
    <i class="c-i__multiplayer-casual"></i>
    <div class="tile-title ellipsis">Game Casual Multiplayer</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/perang-multiplayer">
    <i class="c-i__multiplayer-war"></i>
    <div class="tile-title ellipsis">Game Perang Multiplayer</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/social-games">
    <i class="c-i__social-games"></i>
    <div class="tile-title ellipsis">Game Sosial</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/simulasi-multiplayer">
    <i class="c-i__multiplayer-simulation"></i>
    <div class="tile-title ellipsis">Game Simulasi Multiplayer</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/strategi-multiplayer">
    <i class="c-i__multiplayer-strategy"></i>
    <div class="tile-title ellipsis">Game Strategi Multiplayer</div>
</a></li>

            <li class="grid-col">
  <a class="ellipsis" href="https://www.permainan.co.id/game/bertani-multiplayer">
    <i class="c-i__multiplayer-farming"></i>
    <div class="tile-title ellipsis">Game Bertani Multiplayer</div>
</a></li>

        </ul>

        <div class="all_category_labels-link-wrapper">
            <a title="Game MMO" class="all_category_labels-link" href="https://www.permainan.co.id/game/mmo">Semua Permainan Game MMO</a>

        </div>
      </div>
      <div class="grid-col col-l-7-9 best-games" data-widget="menu" data-label="best-games">
        <header class="box-header">
          <h3 class="box-title ellipsis">Game Terbaik</h3>
        </header>

        <ul class="grid-row  col-l-7">
            <li class="grid-col">
              <a class="tile" title="Farm Merge Valley" data-index="0" href="https://www.permainan.co.id/permainan/farm-merge-valley">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/webp_farm-merge-valley-winter-2025_200x120.webp?1764765594" type="image/webp" alt="Farm Merge Valley" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/original_farm-merge-valley-winter-2025_200x120.png?1764765594" type="image/webp" alt="Farm Merge Valley" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13273" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/jpeg_farm-merge-valley-winter-2025_200x120.jpg?1764765594" alt="Farm Merge Valley">
    </picture>

</div>
<div class="tile-title" data-index="0">Farm Merge Valley</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Harvest Honors Classic" data-index="1" href="https://www.permainan.co.id/permainan/harvest-honors-classic">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/webp_1550130898_Harvest-Honors-200x120.webp?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/original_1550130898_Harvest-Honors-200x120.png?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284592" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/jpeg_1550130898_Harvest-Honors-200x120.jpg?1692364771" alt="Harvest Honors Classic">
    </picture>

</div>
<div class="tile-title" data-index="1">Harvest Honors Classic</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Let&#39;s Fish!" data-index="2" href="https://www.permainan.co.id/permainan/lets-fish">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/webp_original_1531734105_LF_200x120.webp?1771230454" type="image/webp" alt="Let&#39;s Fish!" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/original_original_1531734105_LF_200x120.jpg?1771230454" type="image/webp" alt="Let&#39;s Fish!" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280287872" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/jpeg_original_1531734105_LF_200x120.jpg?1771230454" alt="Let&#39;s Fish!">
    </picture>

</div>
<div class="tile-title" data-index="2">Let&#39;s Fish!</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Goodgame Empire" data-index="3" href="https://www.permainan.co.id/permainan/goodgame-empire-online">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70730/webp_200x120.webp?1765179772" type="image/webp" alt="Goodgame Empire" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70730/original_200x120.jpg?1765179772" type="image/webp" alt="Goodgame Empire" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312553" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70730/jpeg_200x120.jpg?1765179772" alt="Goodgame Empire">
    </picture>

</div>
<div class="tile-title" data-index="3">Goodgame Empire</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Forge of Empires" data-index="4" href="https://www.permainan.co.id/permainan/forge-of-empires">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/webp_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.webp?1692365901" type="image/webp" alt="Forge of Empires" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/original_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" type="image/webp" alt="Forge of Empires" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289575" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/jpeg_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" alt="Forge of Empires">
    </picture>

</div>
<div class="tile-title" data-index="4">Forge of Empires</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="World of Warships" data-index="5" href="https://www.permainan.co.id/permainan/world-of-warships">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/webp_world-of-warships1_200x120.webp?1727432719" type="image/webp" alt="World of Warships" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/original_world-of-warships1_200x120.png?1727432719" type="image/webp" alt="World of Warships" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280300748" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/jpeg_world-of-warships1_200x120.jpg?1727432719" alt="World of Warships">
    </picture>

</div>
<div class="tile-title" data-index="5">World of Warships</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Solitaire Social" data-index="6" href="https://www.permainan.co.id/permainan/solitaire-social">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95479/webp_social-solitaire-autumn-2025_200x120.webp?1764765378" type="image/webp" alt="Solitaire Social" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95479/original_social-solitaire-autumn-2025_200x120.jpg?1764765378" type="image/webp" alt="Solitaire Social" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13784" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95479/jpeg_social-solitaire-autumn-2025_200x120.jpg?1764765378" alt="Solitaire Social">
    </picture>

</div>
<div class="tile-title" data-index="6">Solitaire Social</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Jackpot" data-index="7" href="https://www.permainan.co.id/permainan/jackpot">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20353/webp_jackpot-new-2026_200x120.webp?1770380260" type="image/webp" alt="Jackpot" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20353/original_jackpot-new-2026_200x120.jpg?1770380260" type="image/webp" alt="Jackpot" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280296093" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20353/jpeg_jackpot-new-2026_200x120.jpg?1770380260" alt="Jackpot">
    </picture>

</div>
<div class="tile-title" data-index="7">Jackpot</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Charm Farm" data-index="8" href="https://www.permainan.co.id/permainan/charm-farm">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20679/webp_original_200x120.webp?1744184372" type="image/webp" alt="Charm Farm" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20679/original_original_200x120.jpg?1744184372" type="image/webp" alt="Charm Farm" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280297806" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20679/jpeg_original_200x120.jpg?1744184372" alt="Charm Farm">
    </picture>

</div>
<div class="tile-title" data-index="8">Charm Farm</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Goodgame Big Farm" data-index="9" href="https://www.permainan.co.id/permainan/goodgame-big-farm-online">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70758/webp_gg-bigfarm_regular_200x120.webp?1770037317" type="image/webp" alt="Goodgame Big Farm" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70758/original_gg-bigfarm_regular_200x120.jpg?1770037317" type="image/webp" alt="Goodgame Big Farm" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312555" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70758/jpeg_gg-bigfarm_regular_200x120.jpg?1770037317" alt="Goodgame Big Farm">
    </picture>

</div>
<div class="tile-title" data-index="9">Goodgame Big Farm</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Rummy World" data-index="10" href="https://www.permainan.co.id/permainan/rummy-world">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16925/webp_200X120_151185_1490883691.webp?1692365047" type="image/webp" alt="Rummy World" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16925/original_200X120_151185_1490883691.jpg?1692365047" type="image/webp" alt="Rummy World" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280285329" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16925/jpeg_200X120_151185_1490883691.jpg?1692365047" alt="Rummy World">
    </picture>

</div>
<div class="tile-title" data-index="10">Rummy World</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Family Relics" data-index="11" href="https://www.permainan.co.id/permainan/family-relics">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24893/webp_200X120_177451_1587464646.webp?1692370543" type="image/webp" alt="Family Relics" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24893/original_200X120_177451_1587464646.jpg?1692370543" type="image/webp" alt="Family Relics" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311595" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24893/jpeg_200X120_177451_1587464646.jpg?1692370543" alt="Family Relics">
    </picture>

</div>
<div class="tile-title" data-index="11">Family Relics</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Elvenar" data-index="12" href="https://www.permainan.co.id/permainan/elvenar">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21431/webp_elvenar-regular-200x120.webp?1692368094" type="image/webp" alt="Elvenar" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21431/original_elvenar-regular-200x120.jpg?1692368094" type="image/webp" alt="Elvenar" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280300957" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21431/jpeg_elvenar-regular-200x120.jpg?1692368094" alt="Elvenar">
    </picture>

</div>
<div class="tile-title" data-index="12">Elvenar</div>
</a>
            </li>
            <li class="grid-col">
              <a class="tile" title="Royal Story" data-index="13" href="https://www.permainan.co.id/permainan/kisah-kerajaan">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17736/webp_royal-story-regular-200x120.webp?1744184422" type="image/webp" alt="Royal Story" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17736/original_royal-story-regular-200x120.jpg?1744184422" type="image/webp" alt="Royal Story" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280288087" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17736/jpeg_royal-story-regular-200x120.jpg?1744184422" alt="Royal Story">
    </picture>

</div>
<div class="tile-title" data-index="13">Royal Story</div>
</a>
            </li>
        </ul>

      </div>
    </div>
  </div>
</li>


<li id="menu-more_games_tab" class="menu-item more_games_tab hidden">
  <div class="menu-item-button-container">
    <button type="button" class="icon-wrapper" data-widget="menu" data-label="parent" data-path="for-you">
      <p class="menu-title">Lainnya</p>
    </button>
    <span class="arrow"></span>
  </div>
  <div class="menu-item__dropdown more_games-dropdown menu-item__dropdown--more-games" data-menu-id="more">
    <div class="categories dropdown">
      <ul class="dropdown-wrapper clearfix more_games-dropdown">
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="944">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/teka-teki">
              <p class="menu-title">Puzzle</p>
</a>          </li>
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="636">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/aksi">
              <p class="menu-title">Action</p>
</a>          </li>
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="895">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/multipemain">
              <p class="menu-title">Multi Pemain</p>
</a>          </li>
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="821">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/putri">
              <p class="menu-title">Permainan Perempuan </p>
</a>          </li>
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="983">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/simulasi">
              <p class="menu-title">Permainan Simulasi</p>
</a>          </li>
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="986">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/keahlian">
              <p class="menu-title">Ketangkasan</p>
</a>          </li>
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="1004">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/olahraga">
              <p class="menu-title">Permainan Olahraga</p>
</a>          </li>
          <li class="more_games-dropdown_item hidden-menu-item" data-menu-id="883">
            <a class="icon-wrapper" href="https://www.permainan.co.id/game/mmo">
              <p class="menu-title">MMO</p>
</a>          </li>
      </ul>
    </div>
  </div>
</li>


          <li class="menu-item for_you" data-menu-id="for-you">
            <div class="menu-item-button-container menu-item-button-container--for-you">
              <button class="icon-wrapper" data-widget="menu" data-label="parent" data-path="for-you">
                <p class="menu-title">Untukmu</p>
              </button>
              <span class="arrow"></span>
            </div>

            <div class="menu-item__dropdown menu-item__dropdown-for_you" data-menu-id="more">
              <div class="categories dropdown">
                <ul class="dropdown-wrapper clearfix">
                  <li class="menu-dropdown-item" data-menu-id="for-you">
                    <div class="categories dropdown">
                        <div class="grid-col col-m-1-2 col-l-1-3 for-you">
                          <section id="wdg_segmentation_recommendations_menu" class="wdg_segmentation_recommendations_menu" data-widget="segmentation_recommendations_menu" data-label="menu">
                            <header class="box-header">
                              <h3 class="box-title">Untukmu</h3>
                            </header>

                            <ul class="box-content grid-row col-3">
                                <li class="grid-col">
                                  <a class="tile" title="Blocky Snakes io" data-index="0" href="https://www.permainan.co.id/permainan/blocky-snakes-io">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24411/webp_200X120_175777_1560498514.webp?1692370204" type="image/webp" alt="Blocky Snakes io" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24411/original_200X120_175777_1560498514.png?1692370204" type="image/webp" alt="Blocky Snakes io" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280309921" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24411/jpeg_200X120_175777_1560498514.jpg?1692370204" alt="Blocky Snakes io">
    </picture>

</div>
<div class="tile-title" data-index="0">Blocky Snakes io</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Blob Giant 3D" data-index="1" href="https://www.permainan.co.id/permainan/blob-giant-3d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25293/webp_200X120_177942_1624970580.webp?1692370827" type="image/webp" alt="Blob Giant 3D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25293/original_200X120_177942_1624970580.png?1692370827" type="image/webp" alt="Blob Giant 3D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312086" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25293/jpeg_200X120_177942_1624970580.jpg?1692370827" alt="Blob Giant 3D">
    </picture>

</div>
<div class="tile-title" data-index="1">Blob Giant 3D</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Stacky Run" data-index="2" href="https://www.permainan.co.id/permainan/stacky-run">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25114/webp_200X120_177736_1613760637.webp?1692370700" type="image/webp" alt="Stacky Run" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25114/original_200X120_177736_1613760637.png?1692370700" type="image/webp" alt="Stacky Run" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311880" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25114/jpeg_200X120_177736_1613760637.jpg?1692370700" alt="Stacky Run">
    </picture>

</div>
<div class="tile-title" data-index="2">Stacky Run</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Arrow Challenge" data-index="3" href="https://www.permainan.co.id/permainan/arrow-challenge">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61132/webp_200X120_178182_1635261816.webp?1692370994" type="image/webp" alt="Arrow Challenge" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61132/original_200X120_178182_1635261816.png?1692370994" type="image/webp" alt="Arrow Challenge" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312326" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61132/jpeg_200X120_178182_1635261816.jpg?1692370994" alt="Arrow Challenge">
    </picture>

</div>
<div class="tile-title" data-index="3">Arrow Challenge</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Royal Story" data-index="4" href="https://www.permainan.co.id/permainan/kisah-kerajaan">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17736/webp_royal-story-regular-200x120.webp?1744184422" type="image/webp" alt="Royal Story" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17736/original_royal-story-regular-200x120.jpg?1744184422" type="image/webp" alt="Royal Story" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280288087" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17736/jpeg_royal-story-regular-200x120.jpg?1744184422" alt="Royal Story">
    </picture>

</div>
<div class="tile-title" data-index="4">Royal Story</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Let&#39;s Fish!" data-index="5" href="https://www.permainan.co.id/permainan/lets-fish">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/webp_original_1531734105_LF_200x120.webp?1771230454" type="image/webp" alt="Let&#39;s Fish!" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/original_original_1531734105_LF_200x120.jpg?1771230454" type="image/webp" alt="Let&#39;s Fish!" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280287872" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17665/jpeg_original_1531734105_LF_200x120.jpg?1771230454" alt="Let&#39;s Fish!">
    </picture>

</div>
<div class="tile-title" data-index="5">Let&#39;s Fish!</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Forge of Empires" data-index="6" href="https://www.permainan.co.id/permainan/forge-of-empires">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/webp_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.webp?1692365901" type="image/webp" alt="Forge of Empires" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/original_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" type="image/webp" alt="Forge of Empires" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289575" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/jpeg_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" alt="Forge of Empires">
    </picture>

</div>
<div class="tile-title" data-index="6">Forge of Empires</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Free Hoops" data-index="7" href="https://www.permainan.co.id/permainan/free-hoops">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/webp_free-hops_200x120.webp?1768910246" type="image/webp" alt="Free Hoops" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/original_free-hops_200x120.png?1768910246" type="image/webp" alt="Free Hoops" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14212" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/jpeg_free-hops_200x120.jpg?1768910246" alt="Free Hoops">
    </picture>

</div>
<div class="tile-title" data-index="7">Free Hoops</div>
</a>
                                </li>
                            </ul>
                          </section>
                        </div>

                      <div class="grid-col col-m-1-2 col-l-1-3 for-you">
                        <section id="wdg_recent_played_games_menu" class="wdg_recent_played_games_menu not-empty" data-widget="recent_played_games_menu" data-label="last_played_games_menu">
                          <header class="box-header">
                            <h3 class="box-title">
                                Game yang Direkomendasikan
                            </h3>
                          </header>

                          <div class="box-content">
                            <ul class="grid-row col-3">
                                <li class="grid-col">
                                  <a class="tile" title="Kelas Memasak Sara: Ayam Kung Pao" data-index="0" href="https://www.permainan.co.id/permainan/ayam-kung-pao-kelas-memasak-sara">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/webp_SaraKungPao_200x120.webp?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/original_SaraKungPao_200x120.png?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289599" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/jpeg_SaraKungPao_200x120.jpg?1770910663" alt="Kelas Memasak Sara: Ayam Kung Pao">
    </picture>

</div>
<div class="tile-title" data-index="0">Kelas Memasak Sara: Ayam Kung Pao</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Farm Blast" data-index="1" href="https://www.permainan.co.id/permainan/farm-blast">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98640/webp_farm-blast_200x120.webp?1771576242" type="image/webp" alt="Farm Blast" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98640/original_farm-blast_200x120.png?1771576242" type="image/webp" alt="Farm Blast" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14233" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98640/jpeg_farm-blast_200x120.jpg?1771576242" alt="Farm Blast">
    </picture>

</div>
<div class="tile-title" data-index="1">Farm Blast</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Thread Match 2" data-index="2" href="https://www.permainan.co.id/permainan/thread-match-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/webp_thread-match-2_200x120.webp?1770719496" type="image/webp" alt="Thread Match 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/original_thread-match-2_200x120.png?1770719496" type="image/webp" alt="Thread Match 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14232" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/jpeg_thread-match-2_200x120.jpg?1770719496" alt="Thread Match 2">
    </picture>

</div>
<div class="tile-title" data-index="2">Thread Match 2</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Jewels Blitz Legends" data-index="3" href="https://www.permainan.co.id/permainan/jewels-blitz-legends">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98876/webp_jewels-blitz-legends_200x120.webp?1770128145" type="image/webp" alt="Jewels Blitz Legends" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98876/original_jewels-blitz-legends_200x120.png?1770128145" type="image/webp" alt="Jewels Blitz Legends" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14270" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98876/jpeg_jewels-blitz-legends_200x120.jpg?1770128145" alt="Jewels Blitz Legends">
    </picture>

</div>
<div class="tile-title" data-index="3">Jewels Blitz Legends</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Car Eats Car: Arctic Adventure" data-index="4" href="https://www.permainan.co.id/permainan/car-eats-car-arctic-adventure">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/webp_car-eats-car-arctic-adventure_200x120.webp?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/original_car-eats-car-arctic-adventure_200x120.png?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14304" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/jpeg_car-eats-car-arctic-adventure_200x120.jpg?1771504932" alt="Car Eats Car: Arctic Adventure">
    </picture>

</div>
<div class="tile-title" data-index="4">Car Eats Car: Arctic Adventure</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Escape School Duel" data-index="5" href="https://www.permainan.co.id/permainan/escape-school-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/webp_escape-school-duel_200x120.webp?1771337926" type="image/webp" alt="Escape School Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/original_escape-school-duel_200x120.png?1771337926" type="image/webp" alt="Escape School Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14298" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/jpeg_escape-school-duel_200x120.jpg?1771337926" alt="Escape School Duel">
    </picture>

</div>
<div class="tile-title" data-index="5">Escape School Duel</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="World of Warships" data-index="6" href="https://www.permainan.co.id/permainan/world-of-warships">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/webp_world-of-warships1_200x120.webp?1727432719" type="image/webp" alt="World of Warships" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/original_world-of-warships1_200x120.png?1727432719" type="image/webp" alt="World of Warships" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280300748" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/jpeg_world-of-warships1_200x120.jpg?1727432719" alt="World of Warships">
    </picture>

</div>
<div class="tile-title" data-index="6">World of Warships</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Forge of Empires" data-index="7" href="https://www.permainan.co.id/permainan/forge-of-empires">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/webp_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.webp?1692365901" type="image/webp" alt="Forge of Empires" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/original_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" type="image/webp" alt="Forge of Empires" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289575" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/jpeg_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" alt="Forge of Empires">
    </picture>

</div>
<div class="tile-title" data-index="7">Forge of Empires</div>
</a>
                                </li>
                                <li class="grid-col">
                                  <a class="tile" title="Solitaire Home Story" data-index="8" href="https://www.permainan.co.id/permainan/solitaire-home-story">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91273/webp_solitaire-home-story-soho-vacation_landscape_image_200x120.webp?1748591426" type="image/webp" alt="Solitaire Home Story" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91273/original_solitaire-home-story-soho-vacation_landscape_image_200x120.jpg?1748591426" type="image/webp" alt="Solitaire Home Story" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13242" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91273/jpeg_solitaire-home-story-soho-vacation_landscape_image_200x120.jpg?1748591426" alt="Solitaire Home Story">
    </picture>

</div>
<div class="tile-title" data-index="8">Solitaire Home Story</div>
</a>
                                </li>
                            </ul>
                          </div>
                        </section>
                      </div>

                      <div class="grid-col col-l-1-3 for-you">
                        <section id="wdg_favourite_menu" class="wdg_favourite_menu" data-widget="favourite_menu" data-label="menu">
  <header class="box-header">
    <h3 class="box-title ellipsis">GAME FAVORIT</h3>
    
  </header>
      <div class="register-for-fav">
        <p>
          Anda pengguna lama? Masuk untuk melihat game favorit Anda di sini!<br/>Belum punya akun? Pastikan untuk mendaftar menggunakan fitur ini.
        </p>
        <a class="button" href="/users/auth/gamesgamesconnect">Gabung Gratis</a>
      </div>
</section>

                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="menu-item all-categories" data-menu-id="all-categories" >
            <a class="icon-wrapper new-games" href="https://www.permainan.co.id/semuakategori">
              <p class="menu-title">
                Semua Kategori
              </p>
</a>          </li>
        </ul>
      </nav>

    </div>

    <span id="showSearch" class=" wdg_search_bar__open-icon sp-i__search"></span>
    <div id="wdg_search_bar" class="wdg_search_bar dropdown-container gamesgames ">
      <div class="search-open">
        <span id="hideSearch" class="search-open__left-arrow sp-i__arrow-left"></span>
        <div class="input-group flex-nowrap">
          <form role="search">
            <input type="text" id="searchText" autocomplete="off" class="form-control" placeholder="Telusur Game..."
                   aria-labelledby="allResultsURL" name="search" spellcheck="false"></form>
        </div>
        <div class="icon" id="goto_details">
          <span class="sp-i__search"></span>
        </div>
      </div>
      <div id="search-bar-overlay" class="wdg_search_bar__overlay"></div>
      <div class="search-suggestions dropdown-box">
        <iframe class="ie-zframe" frameborder="0" tabindex="-1" src="about:blank"></iframe>
        <div class="labels">
          <div class="dropdown-title">Kategori</div>
          <ul></ul>
        </div>
        <div class="games">
          <div class="dropdown-title">Game</div>
          <ul></ul>
        </div>
        <div class="dropdown-footer">
          <button>Tampilkan hasil lain</button>
        </div>
      </div>
    </div>

    <div id="searchContainer">
      <div id="searchResults" data-widget="search_results">
        <h3 class="game-title collection-header">Kategori</h3>
        <div class="search-results-game-list" id="collectionsFoundInSearch"></div>
        <h3 class="game-title game-header">game</h3>
        <div class="summary">
          <span id="gamesResult" class="font-weight-bold">Tidak ada game yang ditemukan.</span>
        </div>
        <div class="search-results-game-list" id="gamesFoundInSearch"></div>
        <div id="viewAllResults">
          <div class="col-lg p-0 align-items-center d-flex">
            <a href="#" id="allResultsURL" class="all-results">
              <span class="text font-weight-bold">Tampilkan hasil lain</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>



    





<main id="wdg_page_home" data-widget="page_home" data-pagetype="home" data-pagetype-detail="index" class="wdg_page_home page">
  <div class="grid">
    <div class="grid-row">
      <div class="grid-col col-m-1-2 col-l-1-3">
  <section id="wdg_recent_played_games" data-widget="recent_played_games" class="data-widget wdg_recent_played_games box not-empty" data-label="last_played_games">
    <header class="box-header">
      <h2 class="box-title ellipsis">Game yang Direkomendasikan</h2>
    </header>
    <div class="box-content">
        <div class="box-content">
  <ul class="grid-row col-2 col-s-3 col-m-3 col-l-3 tile-container">
      <li class="grid-col">
        <a class="tile" title="Kelas Memasak Sara: Ayam Kung Pao" data-index="0" href="https://www.permainan.co.id/permainan/ayam-kung-pao-kelas-memasak-sara">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/webp_SaraKungPao_200x120.webp?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/original_SaraKungPao_200x120.png?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289599" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/jpeg_SaraKungPao_200x120.jpg?1770910663" alt="Kelas Memasak Sara: Ayam Kung Pao">
    </picture>

</div>
<div class="tile-title" data-index="0">Kelas Memasak Sara: Ayam Kung Pao</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="Farm Blast" data-index="1" href="https://www.permainan.co.id/permainan/farm-blast">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98640/webp_farm-blast_200x120.webp?1771576242" type="image/webp" alt="Farm Blast" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98640/original_farm-blast_200x120.png?1771576242" type="image/webp" alt="Farm Blast" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14233" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98640/jpeg_farm-blast_200x120.jpg?1771576242" alt="Farm Blast">
    </picture>

</div>
<div class="tile-title" data-index="1">Farm Blast</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="Thread Match 2" data-index="2" href="https://www.permainan.co.id/permainan/thread-match-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/webp_thread-match-2_200x120.webp?1770719496" type="image/webp" alt="Thread Match 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/original_thread-match-2_200x120.png?1770719496" type="image/webp" alt="Thread Match 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14232" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/jpeg_thread-match-2_200x120.jpg?1770719496" alt="Thread Match 2">
    </picture>

</div>
<div class="tile-title" data-index="2">Thread Match 2</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="Jewels Blitz Legends" data-index="3" href="https://www.permainan.co.id/permainan/jewels-blitz-legends">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98876/webp_jewels-blitz-legends_200x120.webp?1770128145" type="image/webp" alt="Jewels Blitz Legends" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98876/original_jewels-blitz-legends_200x120.png?1770128145" type="image/webp" alt="Jewels Blitz Legends" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14270" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98876/jpeg_jewels-blitz-legends_200x120.jpg?1770128145" alt="Jewels Blitz Legends">
    </picture>

</div>
<div class="tile-title" data-index="3">Jewels Blitz Legends</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="Car Eats Car: Arctic Adventure" data-index="4" href="https://www.permainan.co.id/permainan/car-eats-car-arctic-adventure">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/webp_car-eats-car-arctic-adventure_200x120.webp?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/original_car-eats-car-arctic-adventure_200x120.png?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14304" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/jpeg_car-eats-car-arctic-adventure_200x120.jpg?1771504932" alt="Car Eats Car: Arctic Adventure">
    </picture>

</div>
<div class="tile-title" data-index="4">Car Eats Car: Arctic Adventure</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="Escape School Duel" data-index="5" href="https://www.permainan.co.id/permainan/escape-school-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/webp_escape-school-duel_200x120.webp?1771337926" type="image/webp" alt="Escape School Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/original_escape-school-duel_200x120.png?1771337926" type="image/webp" alt="Escape School Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14298" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/jpeg_escape-school-duel_200x120.jpg?1771337926" alt="Escape School Duel">
    </picture>

</div>
<div class="tile-title" data-index="5">Escape School Duel</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="World of Warships" data-index="6" href="https://www.permainan.co.id/permainan/world-of-warships">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/webp_world-of-warships1_200x120.webp?1727432719" type="image/webp" alt="World of Warships" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/original_world-of-warships1_200x120.png?1727432719" type="image/webp" alt="World of Warships" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280300748" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21386/jpeg_world-of-warships1_200x120.jpg?1727432719" alt="World of Warships">
    </picture>

</div>
<div class="tile-title" data-index="6">World of Warships</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="Forge of Empires" data-index="7" href="https://www.permainan.co.id/permainan/forge-of-empires">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/webp_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.webp?1692365901" type="image/webp" alt="Forge of Empires" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/original_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" type="image/webp" alt="Forge of Empires" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289575" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18179/jpeg_1546245840_1541068354_1531734180_foe_elvenar_casual_200x120.jpg?1692365901" alt="Forge of Empires">
    </picture>

</div>
<div class="tile-title" data-index="7">Forge of Empires</div>
</a>
      </li>
      <li class="grid-col">
        <a class="tile" title="Solitaire Home Story" data-index="8" href="https://www.permainan.co.id/permainan/solitaire-home-story">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91273/webp_solitaire-home-story-soho-vacation_landscape_image_200x120.webp?1748591426" type="image/webp" alt="Solitaire Home Story" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91273/original_solitaire-home-story-soho-vacation_landscape_image_200x120.jpg?1748591426" type="image/webp" alt="Solitaire Home Story" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13242" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91273/jpeg_solitaire-home-story-soho-vacation_landscape_image_200x120.jpg?1748591426" alt="Solitaire Home Story">
    </picture>

</div>
<div class="tile-title" data-index="8">Solitaire Home Story</div>
</a>
      </li>
  </ul>
</div>

    </div>
  </section>
</div>


        <div class="grid-col col-m-1-2 col-l-1-3 col-s col-xs home-widget-2">
    <section id="wdg_featured_games" data-widget="featured_games" data-label="featured_games" class="wdg_featured_games box">
        <header class="box-header">
            <h2 class="box-title">Pilihan Editor</h2>
        </header>
        <div class="box-content">
            <div id="sliders" class="container-fluid">
                <div id="mega_slider">
                    <div class="main-slide-container" data-widget-name="featured_games">
                        <div class="controls">
                            <div class="control-container goleft sp-i__angle-right-o" id="next_slide"></div>
                            <div class="control-container goright sp-i__angle-left-o" id="prev_slide"></div>
                        </div>
                        <div class="main-slide">
                            <div class="main-slide-item">
                                <div class="d-flex bd-highlight game-info align-items-center pl-3 pr-3 pb-4 overflow-hidden keep">
                                    <div class="info p-2 w-100 bd-highlight d-flex keep">
                                        <div class="game-title d-flex align-items-left pl-3 flex-column justify-content-center overflow-hidden keep">
                                            <div id="game_title" class="name w-100 keep">
                                                <div class="game-header">
                                                    <span class="game-title ellipsis">Falling Dummy</span>
                                                                            <a class="small more button play-button game-slide-link" href="https://www.permainan.co.id/permainan/falling-dummy">Mainkan sekarang</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="big-tile-thumbnail">
                                       <a title="Falling Dummy" class="game-slide-link" data-game-name="Falling Dummy" data-game-id="98682" data-slide-index="0" href="https://www.permainan.co.id/permainan/falling-dummy">
                                    <picture>
                                        <img data-id="top_game_image" width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/slider_image/98682/original_EP-Falling-Dummy.jpg?1769514547" data-label="sublist" data-appid="14240" data-path="Falling Dummy" data-index="0" class="lazy" alt="Source of Falling Dummy Game Image" />
                                    </picture>

                                    <video muted loop data-role="video_player" preload="none" >
                                        <source data-src="https://gamesgamescdn.com/system/static/thumbs/thumbnail_video/98682/Falling-Dummy-Ep-Video.mp4?1772018997" type="video/mp4" data-id="top_video_thumbnail">
                                        Your browser does not support the video tag.
                                    </video>
</a>                                </div>
                            </div>
                            <div class="main-slide-item">
                                <div class="d-flex bd-highlight game-info align-items-center pl-3 pr-3 pb-4 overflow-hidden keep">
                                    <div class="info p-2 w-100 bd-highlight d-flex keep">
                                        <div class="game-title d-flex align-items-left pl-3 flex-column justify-content-center overflow-hidden keep">
                                            <div id="game_title" class="name w-100 keep">
                                                <div class="game-header">
                                                    <span class="game-title ellipsis">Arrow Out and Linker</span>
                                                                            <a class="small more button play-button game-slide-link" href="https://www.permainan.co.id/permainan/arrow-out-and-linker">Mainkan sekarang</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="big-tile-thumbnail">
                                       <a title="Arrow Out and Linker" class="game-slide-link" data-game-name="Arrow Out and Linker" data-game-id="98734" data-slide-index="1" href="https://www.permainan.co.id/permainan/arrow-out-and-linker">
                                    <picture>
                                        <img data-id="top_game_image" width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/slider_image/98734/original_EP-Arrow-Out-and-Linker.jpg?1769690256" data-label="sublist" data-appid="14248" data-path="Arrow Out and Linker" data-index="1" class="lazy" alt="Source of Arrow Out and Linker Game Image" />
                                    </picture>

                                    <video muted loop data-role="video_player" preload="none" >
                                        <source data-src="https://gamesgamescdn.com/system/static/thumbs/thumbnail_video/98734/Arrow-And-Link-Ep.mp4?1772019647" type="video/mp4" data-id="top_video_thumbnail">
                                        Your browser does not support the video tag.
                                    </video>
</a>                                </div>
                            </div>
                            <div class="main-slide-item">
                                <div class="d-flex bd-highlight game-info align-items-center pl-3 pr-3 pb-4 overflow-hidden keep">
                                    <div class="info p-2 w-100 bd-highlight d-flex keep">
                                        <div class="game-title d-flex align-items-left pl-3 flex-column justify-content-center overflow-hidden keep">
                                            <div id="game_title" class="name w-100 keep">
                                                <div class="game-header">
                                                    <span class="game-title ellipsis">Neon Tower</span>
                                                                            <a class="small more button play-button game-slide-link" href="https://www.permainan.co.id/permainan/neon-tower">Mainkan sekarang</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="big-tile-thumbnail">
                                       <a title="Neon Tower" class="game-slide-link" data-game-name="Neon Tower" data-game-id="97812" data-slide-index="2" href="https://www.permainan.co.id/permainan/neon-tower">
                                    <picture>
                                        <img data-id="top_game_image" width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/slider_image/97812/original_EP-Neon-Tower.jpg?1771594439" data-label="sublist" data-appid="14115" data-path="Neon Tower" data-index="2" class="lazy" alt="Source of Neon Tower Game Image" />
                                    </picture>
</a>                                </div>
                            </div>
                            <div class="main-slide-item">
                                <div class="d-flex bd-highlight game-info align-items-center pl-3 pr-3 pb-4 overflow-hidden keep">
                                    <div class="info p-2 w-100 bd-highlight d-flex keep">
                                        <div class="game-title d-flex align-items-left pl-3 flex-column justify-content-center overflow-hidden keep">
                                            <div id="game_title" class="name w-100 keep">
                                                <div class="game-header">
                                                    <span class="game-title ellipsis">Farm Merge Valley</span>
                                                                            <a class="small more button play-button game-slide-link" href="https://www.permainan.co.id/permainan/farm-merge-valley">Mainkan sekarang</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="big-tile-thumbnail">
                                       <a title="Farm Merge Valley" class="game-slide-link" data-game-name="Farm Merge Valley" data-game-id="91531" data-slide-index="3" href="https://www.permainan.co.id/permainan/farm-merge-valley">
                                    <picture>
                                        <img data-id="top_game_image" width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/slider_image/91531/original_EP-Farm_Merge_Valley_Winter_Assets_2025.png?1764765594" data-label="sublist" data-appid="13273" data-path="Farm Merge Valley" data-index="3" class="lazy" alt="Source of Farm Merge Valley Game Image" />
                                    </picture>
</a>                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="games-container">
                        <ul class="games wdg_recent_played_games grid-row col-3">
                            <li class="p-0 game align-items-center grid-col">
                                <a class="tile" data-game-id="98682" data-game-name="Falling Dummy"  href="https://www.permainan.co.id/permainan/falling-dummy" title="Falling Dummy">
                                    <div class="tile-thumbnail">
                                        <picture>
                                            <img width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/original_falling-dummy_200x120.png?1769514546" data-label="sublist" data-appid="14240" data-path="Falling Dummy" data-index="1" class="w-100 lazy" alt="Source of Falling Dummy Game Image" />
                                        </picture>
                                    </div>
                                    <div class="tile-title">Falling Dummy</div>
                                </a>
                            </li>
                            <li class="p-0 game align-items-center grid-col">
                                <a class="tile" data-game-id="98734" data-game-name="Arrow Out and Linker"  href="https://www.permainan.co.id/permainan/arrow-out-and-linker" title="Arrow Out and Linker">
                                    <div class="tile-thumbnail">
                                        <picture>
                                            <img width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98734/original_arrow-out-and-linker_200x120.png?1769690255" data-label="sublist" data-appid="14248" data-path="Arrow Out and Linker" data-index="2" class="w-100 lazy" alt="Source of Arrow Out and Linker Game Image" />
                                        </picture>
                                    </div>
                                    <div class="tile-title">Arrow Out and Linker</div>
                                </a>
                            </li>
                            <li class="p-0 game align-items-center grid-col">
                                <a class="tile" data-game-id="97812" data-game-name="Neon Tower"  href="https://www.permainan.co.id/permainan/neon-tower" title="Neon Tower">
                                    <div class="tile-thumbnail">
                                        <picture>
                                            <img width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97812/original_neon-tower_200x120.png?1763042536" data-label="sublist" data-appid="14115" data-path="Neon Tower" data-index="3" class="w-100 lazy" alt="Source of Neon Tower Game Image" />
                                        </picture>
                                    </div>
                                    <div class="tile-title">Neon Tower</div>
                                </a>
                            </li>
                            <li class="p-0 game align-items-center grid-col">
                                <a class="tile" data-game-id="91531" data-game-name="Farm Merge Valley"  href="https://www.permainan.co.id/permainan/farm-merge-valley" title="Farm Merge Valley">
                                    <div class="tile-thumbnail">
                                        <picture>
                                            <img width="100%" height="100%" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/original_farm-merge-valley-winter-2025_200x120.png?1764765594" data-label="sublist" data-appid="13273" data-path="Farm Merge Valley" data-index="4" class="w-100 lazy" alt="Source of Farm Merge Valley Game Image" />
                                        </picture>
                                    </div>
                                    <div class="tile-title">Farm Merge Valley</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

        <div class="grid-col col-m-1 col-l-1-3 home-widget-3">
  <section id="wdg_hot_games" class="wdg_hot_games box" data-widget-name="hot-games" data-widget="hot_games" data-label="hot_games">
    <header class="box-header">
      <h2 class="box-title ellipsis">Kumpulan Game Spotlight/Terpopuler</h2>
    </header>
    <ul class=" hot-games box-content grid-row col-2 col-s-3 col-m-6 col-l-3">
        <li class="grid-col">
          <a class="tile" title="Free Hoops" data-index="0" href="https://www.permainan.co.id/permainan/free-hoops">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/webp_free-hops_200x120.webp?1768910246" type="image/webp" alt="Free Hoops" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/original_free-hops_200x120.png?1768910246" type="image/webp" alt="Free Hoops" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14212" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/jpeg_free-hops_200x120.jpg?1768910246" alt="Free Hoops">
    </picture>

</div>
<div class="tile-title" data-index="0">Free Hoops</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Kelas Memasak Sara: Pentol Swedia" data-index="1" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-pentol-swedia">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/webp_SaraMeatball_200x120.webp?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/original_SaraMeatball_200x120.png?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280285482" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/jpeg_SaraMeatball_200x120.jpg?1770718260" alt="Kelas Memasak Sara: Pentol Swedia">
    </picture>

</div>
<div class="tile-title" data-index="1">Kelas Memasak Sara: Pentol Swedia</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Dinosaur Rampage" data-index="2" href="https://www.permainan.co.id/permainan/dinosaur-rampage">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/webp_dinosaur-rampage_200x120.webp?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/original_dinosaur-rampage_200x120.png?1769773814" type="image/webp" alt="Dinosaur Rampage" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14256" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98784/jpeg_dinosaur-rampage_200x120.jpg?1769773814" alt="Dinosaur Rampage">
    </picture>

</div>
<div class="tile-title" data-index="2">Dinosaur Rampage</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Snow Rider Obby Parkour" data-index="3" href="https://www.permainan.co.id/permainan/snow-rider-obby-parkour">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98994/webp_snow-rider-obby-parkour_200x120.webp?1770901261" type="image/webp" alt="Snow Rider Obby Parkour" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98994/original_snow-rider-obby-parkour_200x120.png?1770901261" type="image/webp" alt="Snow Rider Obby Parkour" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14287" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98994/jpeg_snow-rider-obby-parkour_200x120.jpg?1770901261" alt="Snow Rider Obby Parkour">
    </picture>

</div>
<div class="tile-title" data-index="3">Snow Rider Obby Parkour</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Element Blocks" data-index="4" href="https://www.permainan.co.id/permainan/element-blocks">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97887/webp_element-blocks_200x120.webp?1763726071" type="image/webp" alt="Element Blocks" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97887/original_element-blocks_200x120.png?1763726071" type="image/webp" alt="Element Blocks" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14126" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97887/jpeg_element-blocks_200x120.jpg?1763726071" alt="Element Blocks">
    </picture>

</div>
<div class="tile-title" data-index="4">Element Blocks</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Avenger Guard" data-index="5" href="https://www.permainan.co.id/permainan/avenger-guard">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99030/webp_avenger-guard_200x120.webp?1770910803" type="image/webp" alt="Avenger Guard" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99030/original_avenger-guard_200x120.png?1770910803" type="image/webp" alt="Avenger Guard" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14293" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99030/jpeg_avenger-guard_200x120.jpg?1770910803" alt="Avenger Guard">
    </picture>

</div>
<div class="tile-title" data-index="5">Avenger Guard</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Star Stable" data-index="6" href="https://www.permainan.co.id/permainan/star-stable">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25246/webp_star-stable-winter-2024_200x120.webp?1765185716" type="image/webp" alt="Star Stable" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25246/original_star-stable-winter-2024_200x120.png?1765185716" type="image/webp" alt="Star Stable" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312033" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25246/jpeg_star-stable-winter-2024_200x120.jpg?1765185716" alt="Star Stable">
    </picture>

</div>
<div class="tile-title" data-index="6">Star Stable</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Goodgame Empire" data-index="7" href="https://www.permainan.co.id/permainan/goodgame-empire-online">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70730/webp_200x120.webp?1765179772" type="image/webp" alt="Goodgame Empire" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70730/original_200x120.jpg?1765179772" type="image/webp" alt="Goodgame Empire" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312553" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/70730/jpeg_200x120.jpg?1765179772" alt="Goodgame Empire">
    </picture>

</div>
<div class="tile-title" data-index="7">Goodgame Empire</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Farmerama" data-index="8" href="https://www.permainan.co.id/permainan/farmerama">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15735/webp_farmerama-teaser-200x120.webp?1770276013" type="image/webp" alt="Farmerama" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15735/original_farmerama-teaser-200x120.jpg?1770276013" type="image/webp" alt="Farmerama" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280282170" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15735/jpeg_farmerama-teaser-200x120.jpg?1770276013" alt="Farmerama">
    </picture>

</div>
<div class="tile-title" data-index="8">Farmerama</div>
</a>
        </li>
    </ul>
  </section>
</div>



        <div class="grid-col col-m-1 col-l-2-3" data-widget="custom_labels" data-label="free-games">
  <section class="box">
    <header class="box-header">
      <h2 class="box-title ellipsis">
        <a href="https://www.permainan.co.id/game/try-now-gd">
          Coba Sekarang!<span class="animated-fw-arrows"><span></span></span>
</a>      </h2>
    </header>

    <ul class="box-content grid-row col-2 col-s-3 col-m-6 col-l-6">
        <li class="grid-col">
          <a class="tile" title="Worms.Zone" data-index="0" href="https://www.permainan.co.id/permainan/wormszone">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/webp_worms-zone-a-slithety-snake_200x120.webp?1739174012" type="image/webp" alt="Worms.Zone" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/original_worms-zone-a-slithety-snake_200x120.jpg?1739174012" type="image/webp" alt="Worms.Zone" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307086" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/jpeg_worms-zone-a-slithety-snake_200x120.jpg?1739174012" alt="Worms.Zone">
    </picture>

</div>
<div class="tile-title" data-index="0">Worms.Zone</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Dream Pet Link" data-index="1" href="https://www.permainan.co.id/permainan/dream-pet-link">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/webp_1464611715_dream-pet-link200x120.webp?1692363911" type="image/webp" alt="Dream Pet Link" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/original_1464611715_dream-pet-link200x120.jpg?1692363911" type="image/webp" alt="Dream Pet Link" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280262801" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/jpeg_1464611715_dream-pet-link200x120.jpg?1692363911" alt="Dream Pet Link">
    </picture>

</div>
<div class="tile-title" data-index="1">Dream Pet Link</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Farm Merge Valley" data-index="2" href="https://www.permainan.co.id/permainan/farm-merge-valley">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/webp_farm-merge-valley-winter-2025_200x120.webp?1764765594" type="image/webp" alt="Farm Merge Valley" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/original_farm-merge-valley-winter-2025_200x120.png?1764765594" type="image/webp" alt="Farm Merge Valley" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13273" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/jpeg_farm-merge-valley-winter-2025_200x120.jpg?1764765594" alt="Farm Merge Valley">
    </picture>

</div>
<div class="tile-title" data-index="2">Farm Merge Valley</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="My Parking Lot" data-index="3" href="https://www.permainan.co.id/permainan/my-parking-lot">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/webp_my-parking-lot_200x120.webp?1727865729" type="image/webp" alt="My Parking Lot" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/original_my-parking-lot_200x120.png?1727865729" type="image/webp" alt="My Parking Lot" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13446" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/jpeg_my-parking-lot_200x120.jpg?1727865729" alt="My Parking Lot">
    </picture>

</div>
<div class="tile-title" data-index="3">My Parking Lot</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Magic Piano Tiles" data-index="4" href="https://www.permainan.co.id/permainan/tuts-piano-ajaib">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/webp_200X120_172327_1528274776.webp?1692369585" type="image/webp" alt="Magic Piano Tiles" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/original_200X120_172327_1528274776.png?1692369585" type="image/webp" alt="Magic Piano Tiles" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306471" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/jpeg_200X120_172327_1528274776.jpg?1692369585" alt="Magic Piano Tiles">
    </picture>

</div>
<div class="tile-title" data-index="4">Magic Piano Tiles</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Ono Card Game" data-index="5" href="https://www.permainan.co.id/permainan/ono-card-game">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/webp_200X120_173100_1536005750.webp?1692369711" type="image/webp" alt="Ono Card Game" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/original_200X120_173100_1536005750.png?1692369711" type="image/webp" alt="Ono Card Game" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307244" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/jpeg_200X120_173100_1536005750.jpg?1692369711" alt="Ono Card Game">
    </picture>

</div>
<div class="tile-title" data-index="5">Ono Card Game</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Idol Livestream: Doll Dress Up" data-index="6" href="https://www.permainan.co.id/permainan/idol-livestream-doll-dress-up">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/webp_idol-livestream-doll-dress-up_200x120.webp?1751462244" type="image/webp" alt="Idol Livestream: Doll Dress Up" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/original_idol-livestream-doll-dress-up_200x120.png?1751462244" type="image/webp" alt="Idol Livestream: Doll Dress Up" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13833" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/jpeg_idol-livestream-doll-dress-up_200x120.jpg?1751462244" alt="Idol Livestream: Doll Dress Up">
    </picture>

</div>
<div class="tile-title" data-index="6">Idol Livestream: Doll Dress Up</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Kelas Memasak Sara: Ayam Kung Pao" data-index="7" href="https://www.permainan.co.id/permainan/ayam-kung-pao-kelas-memasak-sara">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/webp_SaraKungPao_200x120.webp?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/original_SaraKungPao_200x120.png?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289599" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/jpeg_SaraKungPao_200x120.jpg?1770910663" alt="Kelas Memasak Sara: Ayam Kung Pao">
    </picture>

</div>
<div class="tile-title" data-index="7">Kelas Memasak Sara: Ayam Kung Pao</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="ASMR Beauty Superstar" data-index="8" href="https://www.permainan.co.id/permainan/asmr-beauty-superstar">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/webp_asmr-beauty-superstar_200x120.webp?1754391603" type="image/webp" alt="ASMR Beauty Superstar" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/original_asmr-beauty-superstar_200x120.png?1754391603" type="image/webp" alt="ASMR Beauty Superstar" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13863" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/jpeg_asmr-beauty-superstar_200x120.jpg?1754391603" alt="ASMR Beauty Superstar">
    </picture>

</div>
<div class="tile-title" data-index="8">ASMR Beauty Superstar</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Baby Hazel Goes Sick" data-index="9" href="https://www.permainan.co.id/permainan/baby-hazel-goes-sick">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/webp_200X120_162483_1554896099.webp?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/original_200X120_162483_1554896099.png?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280296627" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/jpeg_200X120_162483_1554896099.jpg?1692367406" alt="Baby Hazel Goes Sick">
    </picture>

</div>
<div class="tile-title" data-index="9">Baby Hazel Goes Sick</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Geometry Vibes" data-index="10" href="https://www.permainan.co.id/permainan/geometry-vibes">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/webp_geometry-vibes_200x120.webp?1738580822" type="image/webp" alt="Geometry Vibes" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/original_geometry-vibes_200x120.png?1738580822" type="image/webp" alt="Geometry Vibes" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13608" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/jpeg_geometry-vibes_200x120.jpg?1738580822" alt="Geometry Vibes">
    </picture>

</div>
<div class="tile-title" data-index="10">Geometry Vibes</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Obby Rainbow Tower" data-index="11" href="https://www.permainan.co.id/permainan/obby-rainbow-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/webp_obby-rainbow-tower_200x120.webp?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/original_obby-rainbow-tower_200x120.png?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14164" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/jpeg_obby-rainbow-tower_200x120.jpg?1765356904" alt="Obby Rainbow Tower">
    </picture>

</div>
<div class="tile-title" data-index="11">Obby Rainbow Tower</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Commando Force 2" data-index="12" href="https://www.permainan.co.id/permainan/commando-force-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/webp_commando-force-2_200x120.webp?1751452308" type="image/webp" alt="Commando Force 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/original_commando-force-2_200x120.png?1751452308" type="image/webp" alt="Commando Force 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13827" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/jpeg_commando-force-2_200x120.jpg?1751452308" alt="Commando Force 2">
    </picture>

</div>
<div class="tile-title" data-index="12">Commando Force 2</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Free Hoops" data-index="13" href="https://www.permainan.co.id/permainan/free-hoops">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/webp_free-hops_200x120.webp?1768910246" type="image/webp" alt="Free Hoops" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/original_free-hops_200x120.png?1768910246" type="image/webp" alt="Free Hoops" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14212" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/jpeg_free-hops_200x120.jpg?1768910246" alt="Free Hoops">
    </picture>

</div>
<div class="tile-title" data-index="13">Free Hoops</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Master Chess Multiplayer" data-index="14" href="https://www.permainan.co.id/permainan/master-chess-multiplayer">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/webp_1550132657_Master-Chess-Multiplayer-200x120.webp?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/original_1550132657_Master-Chess-Multiplayer-200x120.png?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306986" data-index="15" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/jpeg_1550132657_Master-Chess-Multiplayer-200x120.jpg?1692369670" alt="Master Chess Multiplayer">
    </picture>

</div>
<div class="tile-title" data-index="14">Master Chess Multiplayer</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Kelas Memasak Sara: Pentol Swedia" data-index="15" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-pentol-swedia">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/webp_SaraMeatball_200x120.webp?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/original_SaraMeatball_200x120.png?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280285482" data-index="16" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/jpeg_SaraMeatball_200x120.jpg?1770718260" alt="Kelas Memasak Sara: Pentol Swedia">
    </picture>

</div>
<div class="tile-title" data-index="15">Kelas Memasak Sara: Pentol Swedia</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Contract Deer Hunter" data-index="16" href="https://www.permainan.co.id/permainan/contract-deer-hunter">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/webp_contract-deer-hunter_200x120.webp?1745576502" type="image/webp" alt="Contract Deer Hunter" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/original_contract-deer-hunter_200x120.png?1745576502" type="image/webp" alt="Contract Deer Hunter" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13710" data-index="17" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/jpeg_contract-deer-hunter_200x120.jpg?1745576502" alt="Contract Deer Hunter">
    </picture>

</div>
<div class="tile-title" data-index="16">Contract Deer Hunter</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Mahjong Link" data-index="17" href="https://www.permainan.co.id/permainan/sambungan-mahjong">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/webp_1441882100_576742227280284432_large.webp?1692364709" type="image/webp" alt="Mahjong Link" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/original_1441882100_576742227280284432_large.jpg?1692364709" type="image/webp" alt="Mahjong Link" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284432" data-index="18" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/jpeg_1441882100_576742227280284432_large.jpg?1692364709" alt="Mahjong Link">
    </picture>

</div>
<div class="tile-title" data-index="17">Mahjong Link</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Ella: Bedah Pinggul" data-index="18" href="https://www.permainan.co.id/permainan/ella-bedah-pinggul">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/webp_200X120_174965_1551960382.webp?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/original_200X120_174965_1551960382.png?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280309109" data-index="19" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/jpeg_200X120_174965_1551960382.jpg?1692370055" alt="Ella: Bedah Pinggul">
    </picture>

</div>
<div class="tile-title" data-index="18">Ella: Bedah Pinggul</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Escape School Duel" data-index="19" href="https://www.permainan.co.id/permainan/escape-school-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/webp_escape-school-duel_200x120.webp?1771337926" type="image/webp" alt="Escape School Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/original_escape-school-duel_200x120.png?1771337926" type="image/webp" alt="Escape School Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14298" data-index="20" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/jpeg_escape-school-duel_200x120.jpg?1771337926" alt="Escape School Duel">
    </picture>

</div>
<div class="tile-title" data-index="19">Escape School Duel</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Solitaire Collection" data-index="20" href="https://www.permainan.co.id/permainan/solitaire-collection">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25213/webp_200X120_177855_1622795733.webp?1692370770" type="image/webp" alt="Solitaire Collection" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25213/original_200X120_177855_1622795733.png?1692370770" type="image/webp" alt="Solitaire Collection" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311999" data-index="21" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25213/jpeg_200X120_177855_1622795733.jpg?1692370770" alt="Solitaire Collection">
    </picture>

</div>
<div class="tile-title" data-index="20">Solitaire Collection</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Falling Dummy" data-index="21" href="https://www.permainan.co.id/permainan/falling-dummy">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/webp_falling-dummy_200x120.webp?1769514546" type="image/webp" alt="Falling Dummy" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/original_falling-dummy_200x120.png?1769514546" type="image/webp" alt="Falling Dummy" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14240" data-index="22" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/jpeg_falling-dummy_200x120.jpg?1769514546" alt="Falling Dummy">
    </picture>

</div>
<div class="tile-title" data-index="21">Falling Dummy</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Geometry Vibes X-Arrow" data-index="22" href="https://www.permainan.co.id/permainan/geometry-vibes-x-arrow">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/webp_geometry-vibes-x-arrow_200x120.webp?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/original_geometry-vibes-x-arrow_200x120.png?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14159" data-index="23" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/jpeg_geometry-vibes-x-arrow_200x120.jpg?1764938067" alt="Geometry Vibes X-Arrow">
    </picture>

</div>
<div class="tile-title" data-index="22">Geometry Vibes X-Arrow</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Geometry Vibes 3D" data-index="23" href="https://www.permainan.co.id/permainan/geometry-vibes-3d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/webp_geometry-vibes-3d_200x120.webp?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/original_geometry-vibes-3d_200x120.png?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13844" data-index="24" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/jpeg_geometry-vibes-3d_200x120.jpg?1752242615" alt="Geometry Vibes 3D">
    </picture>

</div>
<div class="tile-title" data-index="23">Geometry Vibes 3D</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Dimensi Mahyong: 900 Detik" data-index="24" href="https://www.permainan.co.id/permainan/dimensi-mahyong-900-detik">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/webp_200X120_173955_1544104605.webp?1692369873" type="image/webp" alt="Dimensi Mahyong: 900 Detik" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/original_200X120_173955_1544104605.png?1692369873" type="image/webp" alt="Dimensi Mahyong: 900 Detik" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308099" data-index="25" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/jpeg_200X120_173955_1544104605.jpg?1692369873" alt="Dimensi Mahyong: 900 Detik">
    </picture>

</div>
<div class="tile-title" data-index="24">Dimensi Mahyong: 900 Detik</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Onet Connect Classic" data-index="25" href="https://www.permainan.co.id/permainan/onet-connect-classic">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25896/webp_200X120_169784_1494587196.webp?1692370949" type="image/webp" alt="Onet Connect Classic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25896/original_200X120_169784_1494587196.png?1692370949" type="image/webp" alt="Onet Connect Classic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280303928" data-index="26" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25896/jpeg_200X120_169784_1494587196.jpg?1692370949" alt="Onet Connect Classic">
    </picture>

</div>
<div class="tile-title" data-index="25">Onet Connect Classic</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Imposter Among Us: Escape From Prison" data-index="26" href="https://www.permainan.co.id/permainan/imposter-among-us-escape-from-prison">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98337/webp_imposter-among-us-escape-from-prison_200x120.webp?1766062449" type="image/webp" alt="Imposter Among Us: Escape From Prison" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98337/original_imposter-among-us-escape-from-prison_200x120.png?1766062449" type="image/webp" alt="Imposter Among Us: Escape From Prison" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14193" data-index="27" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98337/jpeg_imposter-among-us-escape-from-prison_200x120.jpg?1766062449" alt="Imposter Among Us: Escape From Prison">
    </picture>

</div>
<div class="tile-title" data-index="26">Imposter Among Us: Escape From Prison</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Tes Cinta 3" data-index="27" href="https://www.permainan.co.id/permainan/tes-cinta-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/webp_200X120_168992_1487606903.webp?1692368701" type="image/webp" alt="Tes Cinta 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/original_200X120_168992_1487606903.png?1692368701" type="image/webp" alt="Tes Cinta 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280303136" data-index="28" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22291/jpeg_200X120_168992_1487606903.jpg?1692368701" alt="Tes Cinta 3">
    </picture>

</div>
<div class="tile-title" data-index="27">Tes Cinta 3</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Koki Burger: Cerita Memasak" data-index="28" href="https://www.permainan.co.id/permainan/koki-burger-cerita-memasak">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/webp_200X120_174423_1547806774.webp?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/original_200X120_174423_1547806774.png?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308567" data-index="29" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/jpeg_200X120_174423_1547806774.jpg?1692369958" alt="Koki Burger: Cerita Memasak">
    </picture>

</div>
<div class="tile-title" data-index="28">Koki Burger: Cerita Memasak</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Wood Block Puzzle 3" data-index="29" href="https://www.permainan.co.id/permainan/wood-block-puzzle-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98694/webp_wood-block-puzzle-3_200x120.webp?1769515868" type="image/webp" alt="Wood Block Puzzle 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98694/original_wood-block-puzzle-3_200x120.png?1769515868" type="image/webp" alt="Wood Block Puzzle 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14242" data-index="30" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98694/jpeg_wood-block-puzzle-3_200x120.jpg?1769515868" alt="Wood Block Puzzle 3">
    </picture>

</div>
<div class="tile-title" data-index="29">Wood Block Puzzle 3</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Thread Match 2" data-index="30" href="https://www.permainan.co.id/permainan/thread-match-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/webp_thread-match-2_200x120.webp?1770719496" type="image/webp" alt="Thread Match 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/original_thread-match-2_200x120.png?1770719496" type="image/webp" alt="Thread Match 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14232" data-index="31" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98634/jpeg_thread-match-2_200x120.jpg?1770719496" alt="Thread Match 2">
    </picture>

</div>
<div class="tile-title" data-index="30">Thread Match 2</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Steal Brainrot Duel" data-index="31" href="https://www.permainan.co.id/permainan/steal-brainrot-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/webp_steal-brainrot-duel_200x120.webp?1762867775" type="image/webp" alt="Steal Brainrot Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/original_steal-brainrot-duel_200x120.png?1762867775" type="image/webp" alt="Steal Brainrot Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14099" data-index="32" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97710/jpeg_steal-brainrot-duel_200x120.jpg?1762867775" alt="Steal Brainrot Duel">
    </picture>

</div>
<div class="tile-title" data-index="31">Steal Brainrot Duel</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Gas Station: Junkyard Tycoon" data-index="32" href="https://www.permainan.co.id/permainan/gas-station-junkyard-tycoon">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98940/webp_gas-station-junkyard-tycoon_200x120.webp?1770295227" type="image/webp" alt="Gas Station: Junkyard Tycoon" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98940/original_gas-station-junkyard-tycoon_200x120.png?1770295227" type="image/webp" alt="Gas Station: Junkyard Tycoon" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14280" data-index="33" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98940/jpeg_gas-station-junkyard-tycoon_200x120.jpg?1770295227" alt="Gas Station: Junkyard Tycoon">
    </picture>

</div>
<div class="tile-title" data-index="32">Gas Station: Junkyard Tycoon</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Neon Tower" data-index="33" href="https://www.permainan.co.id/permainan/neon-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97812/webp_neon-tower_200x120.webp?1763042536" type="image/webp" alt="Neon Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97812/original_neon-tower_200x120.png?1763042536" type="image/webp" alt="Neon Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14115" data-index="34" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97812/jpeg_neon-tower_200x120.jpg?1763042536" alt="Neon Tower">
    </picture>

</div>
<div class="tile-title" data-index="33">Neon Tower</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Magic Tiles 3" data-index="34" href="https://www.permainan.co.id/permainan/magic-tiles-3">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22937/webp_magic-tiles-3_200x120.webp?1760612010" type="image/webp" alt="Magic Tiles 3" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22937/original_magic-tiles-3_200x120.png?1760612010" type="image/webp" alt="Magic Tiles 3" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280304803" data-index="35" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/22937/jpeg_magic-tiles-3_200x120.jpg?1760612010" alt="Magic Tiles 3">
    </picture>

</div>
<div class="tile-title" data-index="34">Magic Tiles 3</div>
</a>
        </li>
        <li class="grid-col">
          <a class="tile" title="Fireboy and Watergirl: Kuil Hutan" data-index="35" href="https://www.permainan.co.id/permainan/fireboy-dan-watergirl-kuil-hutan">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17235/webp_1609756524_Fireboy-and-Watergirl-The-Forest-Temple-200x120.webp?1692365266" type="image/webp" alt="Fireboy and Watergirl: Kuil Hutan" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17235/original_1609756524_Fireboy-and-Watergirl-The-Forest-Temple-200x120.png?1692365266" type="image/webp" alt="Fireboy and Watergirl: Kuil Hutan" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280286916" data-index="36" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17235/jpeg_1609756524_Fireboy-and-Watergirl-The-Forest-Temple-200x120.jpg?1692365266" alt="Fireboy and Watergirl: Kuil Hutan">
    </picture>

</div>
<div class="tile-title" data-index="35">Fireboy and Watergirl: Kuil Hutan</div>
</a>
        </li>
    </ul>
  </section>
</div>


<div class="grid-col col-m-1 col-l-1-3" data-widget="custom_labels" data-label="new_list">
  <section class="box">
    <header class="box-header">
      <h2 class="box-title ellipsis">
        <a href="https://www.permainan.co.id/game/baru">
          Game Baru<span class="animated-fw-arrows"><span></span></span>
</a>      </h2>
    </header>


      <ul class="box-content grid-row col-2 col-s-3 col-m-6 col-l-3">
          <li class="grid-col">
            <a class="tile" title="Polygon Space" data-index="0" href="https://www.permainan.co.id/permainan/polygon-space">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98802/webp_polygon-space_200x120.webp?1769779990" type="image/webp" alt="Polygon Space" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98802/original_polygon-space_200x120.png?1769779990" type="image/webp" alt="Polygon Space" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14259" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98802/jpeg_polygon-space_200x120.jpg?1769779990" alt="Polygon Space">
    </picture>

</div>
<div class="tile-title" data-index="0">Polygon Space</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Obby Yard Sale" data-index="1" href="https://www.permainan.co.id/permainan/obby-yard-sale">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98864/webp_obby-yard-sale_200x120.webp?1770126934" type="image/webp" alt="Obby Yard Sale" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98864/original_obby-yard-sale_200x120.png?1770126934" type="image/webp" alt="Obby Yard Sale" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14268" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98864/jpeg_obby-yard-sale_200x120.jpg?1770126934" alt="Obby Yard Sale">
    </picture>

</div>
<div class="tile-title" data-index="1">Obby Yard Sale</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Guns vs Magic" data-index="2" href="https://www.permainan.co.id/permainan/guns-vs-magic">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99116/webp_guns-vs-magic_200x120.webp?1771577157" type="image/webp" alt="Guns vs Magic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99116/original_guns-vs-magic_200x120.png?1771577157" type="image/webp" alt="Guns vs Magic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14305" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99116/jpeg_guns-vs-magic_200x120.jpg?1771577157" alt="Guns vs Magic">
    </picture>

</div>
<div class="tile-title" data-index="2">Guns vs Magic</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Xytrian Runner" data-index="3" href="https://www.permainan.co.id/permainan/xytrian-runner">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98946/webp_xytrian-runner_200x120.webp?1770295539" type="image/webp" alt="Xytrian Runner" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98946/original_xytrian-runner_200x120.png?1770295539" type="image/webp" alt="Xytrian Runner" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14281" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98946/jpeg_xytrian-runner_200x120.jpg?1770295539" alt="Xytrian Runner">
    </picture>

</div>
<div class="tile-title" data-index="3">Xytrian Runner</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Idle Pinball - Merge Clicker" data-index="4" href="https://www.permainan.co.id/permainan/idle-pinball-merge-clicker">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98852/webp_idle-pinball-merge-clicker_200x120.webp?1770126523" type="image/webp" alt="Idle Pinball - Merge Clicker" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98852/original_idle-pinball-merge-clicker_200x120.png?1770126523" type="image/webp" alt="Idle Pinball - Merge Clicker" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14266" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98852/jpeg_idle-pinball-merge-clicker_200x120.jpg?1770126523" alt="Idle Pinball - Merge Clicker">
    </picture>

</div>
<div class="tile-title" data-index="4">Idle Pinball - Merge Clicker</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Slinky Color Sort" data-index="5" href="https://www.permainan.co.id/permainan/slinky-color-sort">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99066/webp_slinky-color-sort_200x120.webp?1771337528" type="image/webp" alt="Slinky Color Sort" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99066/original_slinky-color-sort_200x120.png?1771337528" type="image/webp" alt="Slinky Color Sort" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14297" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99066/jpeg_slinky-color-sort_200x120.jpg?1771337528" alt="Slinky Color Sort">
    </picture>

</div>
<div class="tile-title" data-index="5">Slinky Color Sort</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Italian Animal Alchemy - Brainrot" data-index="6" href="https://www.permainan.co.id/permainan/italian-animal-alchemy-brainrot">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98970/webp_italian-animal-alchemy-brainrot_200x120.webp?1770635076" type="image/webp" alt="Italian Animal Alchemy - Brainrot" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98970/original_italian-animal-alchemy-brainrot_200x120.png?1770635076" type="image/webp" alt="Italian Animal Alchemy - Brainrot" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14284" data-index="7" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98970/jpeg_italian-animal-alchemy-brainrot_200x120.jpg?1770635076" alt="Italian Animal Alchemy - Brainrot">
    </picture>

</div>
<div class="tile-title" data-index="6">Italian Animal Alchemy - Brainrot</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Two Stunt Supercars" data-index="7" href="https://www.permainan.co.id/permainan/two-stunt-supercars">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98658/webp_two-stunt-supercars_200x120.webp?1769503420" type="image/webp" alt="Two Stunt Supercars" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98658/original_two-stunt-supercars_200x120.png?1769503420" type="image/webp" alt="Two Stunt Supercars" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14236" data-index="8" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98658/jpeg_two-stunt-supercars_200x120.jpg?1769503420" alt="Two Stunt Supercars">
    </picture>

</div>
<div class="tile-title" data-index="7">Two Stunt Supercars</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Color Nuts" data-index="8" href="https://www.permainan.co.id/permainan/color-nuts">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98628/webp_color-nuts_200x120.webp?1771499382" type="image/webp" alt="Color Nuts" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98628/original_color-nuts_200x120.png?1771499382" type="image/webp" alt="Color Nuts" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14231" data-index="9" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98628/jpeg_color-nuts_200x120.jpg?1771499382" alt="Color Nuts">
    </picture>

</div>
<div class="tile-title" data-index="8">Color Nuts</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Emergency Surgery" data-index="9" href="https://www.permainan.co.id/permainan/emergency-surgery">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97881/webp_emergency-surgery_200x120.webp?1763725001" type="image/webp" alt="Emergency Surgery" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97881/original_emergency-surgery_200x120.png?1763725001" type="image/webp" alt="Emergency Surgery" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14125" data-index="10" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/97881/jpeg_emergency-surgery_200x120.jpg?1763725001" alt="Emergency Surgery">
    </picture>

</div>
<div class="tile-title" data-index="9">Emergency Surgery</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Car Eats Car: Arctic Adventure" data-index="10" href="https://www.permainan.co.id/permainan/car-eats-car-arctic-adventure">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/webp_car-eats-car-arctic-adventure_200x120.webp?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/original_car-eats-car-arctic-adventure_200x120.png?1771504932" type="image/webp" alt="Car Eats Car: Arctic Adventure" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14304" data-index="11" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99110/jpeg_car-eats-car-arctic-adventure_200x120.jpg?1771504932" alt="Car Eats Car: Arctic Adventure">
    </picture>

</div>
<div class="tile-title" data-index="10">Car Eats Car: Arctic Adventure</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="TapKO" data-index="11" href="https://www.permainan.co.id/permainan/tapko">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98882/webp_tapko_200x120.webp?1770128360" type="image/webp" alt="TapKO" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98882/original_tapko_200x120.png?1770128360" type="image/webp" alt="TapKO" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14271" data-index="12" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98882/jpeg_tapko_200x120.jpg?1770128360" alt="TapKO">
    </picture>

</div>
<div class="tile-title" data-index="11">TapKO</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Sudoku Brain Blocks" data-index="12" href="https://www.permainan.co.id/permainan/sudoku-brain-blocks">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98838/webp_sudoku-brain-blocks_200x120.webp?1770044608" type="image/webp" alt="Sudoku Brain Blocks" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98838/original_sudoku-brain-blocks_200x120.png?1770044608" type="image/webp" alt="Sudoku Brain Blocks" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14264" data-index="13" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98838/jpeg_sudoku-brain-blocks_200x120.jpg?1770044608" alt="Sudoku Brain Blocks">
    </picture>

</div>
<div class="tile-title" data-index="12">Sudoku Brain Blocks</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Penguin Farm - Ice Merge" data-index="13" href="https://www.permainan.co.id/permainan/penguin-farm-ice-merge">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98832/webp_penguin-farm-ice-merge_200x120.webp?1770044091" type="image/webp" alt="Penguin Farm - Ice Merge" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98832/original_penguin-farm-ice-merge_200x120.png?1770044091" type="image/webp" alt="Penguin Farm - Ice Merge" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14263" data-index="14" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98832/jpeg_penguin-farm-ice-merge_200x120.jpg?1770044091" alt="Penguin Farm - Ice Merge">
    </picture>

</div>
<div class="tile-title" data-index="13">Penguin Farm - Ice Merge</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Glass Break" data-index="14" href="https://www.permainan.co.id/permainan/glass-break">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98572/webp_glass-break_200x120.webp?1769082604" type="image/webp" alt="Glass Break" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98572/original_glass-break_200x120.png?1769082604" type="image/webp" alt="Glass Break" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14223" data-index="15" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98572/jpeg_glass-break_200x120.jpg?1769082604" alt="Glass Break">
    </picture>

</div>
<div class="tile-title" data-index="14">Glass Break</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Escape School Duel" data-index="15" href="https://www.permainan.co.id/permainan/escape-school-duel">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/webp_escape-school-duel_200x120.webp?1771337926" type="image/webp" alt="Escape School Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/original_escape-school-duel_200x120.png?1771337926" type="image/webp" alt="Escape School Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14298" data-index="16" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/jpeg_escape-school-duel_200x120.jpg?1771337926" alt="Escape School Duel">
    </picture>

</div>
<div class="tile-title" data-index="15">Escape School Duel</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Daily Match" data-index="16" href="https://www.permainan.co.id/permainan/daily-match">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98826/webp_daily-match_200x120.webp?1770043545" type="image/webp" alt="Daily Match" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98826/original_daily-match_200x120.png?1770043545" type="image/webp" alt="Daily Match" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14262" data-index="17" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98826/jpeg_daily-match_200x120.jpg?1770043545" alt="Daily Match">
    </picture>

</div>
<div class="tile-title" data-index="16">Daily Match</div>
</a>
          </li>
          <li class="grid-col">
            <a class="tile" title="Clicker Hero" data-index="17" href="https://www.permainan.co.id/permainan/clicker-hero">
<div class="tile-thumbnail ">

    <span class="tile-new">Baru</span>

    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98790/webp_clicker-hero_200x120.webp?1769775022" type="image/webp" alt="Clicker Hero" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98790/original_clicker-hero_200x120.png?1769775022" type="image/webp" alt="Clicker Hero" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14257" data-index="18" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98790/jpeg_clicker-hero_200x120.jpg?1769775022" alt="Clicker Hero">
    </picture>

</div>
<div class="tile-title" data-index="17">Clicker Hero</div>
</a>
          </li>
      </ul>
  </section>
</div>


        <div class="grid-col">
  <section id="wdg_label_overview" data-widget="label_overview" class="wdg_label_overview box">
    <header class="box-header">
      <h2 class="box-title">
        <a href="https://www.permainan.co.id/permainan">Game Populer</a>
      </h2>
    </header>

    <ul class="box-content grid-row col-m-2 col-l-3">
        <li class="box grid-col" data-widget="label_overview" data-label="dynamons">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/dynamons">
                Dynamons
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Dynamons Connect" data-index="0" href="https://www.permainan.co.id/permainan/dynamons-connect">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94459/webp_dynamons-connect_200x120.webp?1741702352" type="image/webp" alt="Dynamons Connect" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94459/original_dynamons-connect_200x120.png?1741702352" type="image/webp" alt="Dynamons Connect" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13637" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94459/jpeg_dynamons-connect_200x120.jpg?1741702352" alt="Dynamons Connect">
    </picture>

</div>
<div class="tile-title" data-index="0">Dynamons Connect</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Dynamons 6" data-index="1" href="https://www.permainan.co.id/permainan/dynamons-6">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/88470/webp_Dynamons-6-200x120.webp?1699445772" type="image/webp" alt="Dynamons 6" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/88470/original_Dynamons-6-200x120.png?1699445772" type="image/webp" alt="Dynamons 6" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="12881" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/88470/jpeg_Dynamons-6-200x120.jpg?1699445772" alt="Dynamons 6">
    </picture>

</div>
<div class="tile-title" data-index="1">Dynamons 6</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Dynamons 12" data-index="2" href="https://www.permainan.co.id/permainan/dynamons-12">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96199/webp_dynamons-12_200x120.webp?1754653125" type="image/webp" alt="Dynamons 12" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96199/original_dynamons-12_200x120.png?1754653125" type="image/webp" alt="Dynamons 12" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13876" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96199/jpeg_dynamons-12_200x120.jpg?1754653125" alt="Dynamons 12">
    </picture>

</div>
<div class="tile-title" data-index="2">Dynamons 12</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Dynamons 5" data-index="3" href="https://www.permainan.co.id/permainan/dynamons-5">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/74898/webp_Dynamons-5-200x120.webp?1692371646" type="image/webp" alt="Dynamons 5" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/74898/original_Dynamons-5-200x120.png?1692371646" type="image/webp" alt="Dynamons 5" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="12717" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/74898/jpeg_Dynamons-5-200x120.jpg?1692371646" alt="Dynamons 5">
    </picture>

</div>
<div class="tile-title" data-index="3">Dynamons 5</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Dynamons 11" data-index="4" href="https://www.permainan.co.id/permainan/dynamons-11">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94820/webp_dynamons-11_200x120.webp?1744110936" type="image/webp" alt="Dynamons 11" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94820/original_dynamons-11_200x120.png?1744110936" type="image/webp" alt="Dynamons 11" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13690" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94820/jpeg_dynamons-11_200x120.jpg?1744110936" alt="Dynamons 11">
    </picture>

</div>
<div class="tile-title" data-index="4">Dynamons 11</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Dynamons 10" data-index="5" href="https://www.permainan.co.id/permainan/dynamons-10">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94023/webp_dynamons-10_200x120.webp?1736938390" type="image/webp" alt="Dynamons 10" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94023/original_dynamons-10_200x120.png?1736938390" type="image/webp" alt="Dynamons 10" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13582" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94023/jpeg_dynamons-10_200x120.jpg?1736938390" alt="Dynamons 10">
    </picture>

</div>
<div class="tile-title" data-index="5">Dynamons 10</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="teka-teki">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/teka-teki">
                Permainan Teka-Teki
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Dream Pet Link" data-index="0" href="https://www.permainan.co.id/permainan/dream-pet-link">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/webp_1464611715_dream-pet-link200x120.webp?1692363911" type="image/webp" alt="Dream Pet Link" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/original_1464611715_dream-pet-link200x120.jpg?1692363911" type="image/webp" alt="Dream Pet Link" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280262801" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/jpeg_1464611715_dream-pet-link200x120.jpg?1692363911" alt="Dream Pet Link">
    </picture>

</div>
<div class="tile-title" data-index="0">Dream Pet Link</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="My Parking Lot" data-index="1" href="https://www.permainan.co.id/permainan/my-parking-lot">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/webp_my-parking-lot_200x120.webp?1727865729" type="image/webp" alt="My Parking Lot" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/original_my-parking-lot_200x120.png?1727865729" type="image/webp" alt="My Parking Lot" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13446" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/92905/jpeg_my-parking-lot_200x120.jpg?1727865729" alt="My Parking Lot">
    </picture>

</div>
<div class="tile-title" data-index="1">My Parking Lot</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Ono Card Game" data-index="2" href="https://www.permainan.co.id/permainan/ono-card-game">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/webp_200X120_173100_1536005750.webp?1692369711" type="image/webp" alt="Ono Card Game" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/original_200X120_173100_1536005750.png?1692369711" type="image/webp" alt="Ono Card Game" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307244" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/jpeg_200X120_173100_1536005750.jpg?1692369711" alt="Ono Card Game">
    </picture>

</div>
<div class="tile-title" data-index="2">Ono Card Game</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Free Hoops" data-index="3" href="https://www.permainan.co.id/permainan/free-hoops">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/webp_free-hops_200x120.webp?1768910246" type="image/webp" alt="Free Hoops" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/original_free-hops_200x120.png?1768910246" type="image/webp" alt="Free Hoops" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14212" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/jpeg_free-hops_200x120.jpg?1768910246" alt="Free Hoops">
    </picture>

</div>
<div class="tile-title" data-index="3">Free Hoops</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Master Chess Multiplayer" data-index="4" href="https://www.permainan.co.id/permainan/master-chess-multiplayer">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/webp_1550132657_Master-Chess-Multiplayer-200x120.webp?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/original_1550132657_Master-Chess-Multiplayer-200x120.png?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306986" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/jpeg_1550132657_Master-Chess-Multiplayer-200x120.jpg?1692369670" alt="Master Chess Multiplayer">
    </picture>

</div>
<div class="tile-title" data-index="4">Master Chess Multiplayer</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Harvest Honors Classic" data-index="5" href="https://www.permainan.co.id/permainan/harvest-honors-classic">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/webp_1550130898_Harvest-Honors-200x120.webp?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/original_1550130898_Harvest-Honors-200x120.png?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284592" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/jpeg_1550130898_Harvest-Honors-200x120.jpg?1692364771" alt="Harvest Honors Classic">
    </picture>

</div>
<div class="tile-title" data-index="5">Harvest Honors Classic</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="putri">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/putri">
                Permainan Perempuan
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Idol Livestream: Doll Dress Up" data-index="0" href="https://www.permainan.co.id/permainan/idol-livestream-doll-dress-up">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/webp_idol-livestream-doll-dress-up_200x120.webp?1751462244" type="image/webp" alt="Idol Livestream: Doll Dress Up" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/original_idol-livestream-doll-dress-up_200x120.png?1751462244" type="image/webp" alt="Idol Livestream: Doll Dress Up" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13833" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95809/jpeg_idol-livestream-doll-dress-up_200x120.jpg?1751462244" alt="Idol Livestream: Doll Dress Up">
    </picture>

</div>
<div class="tile-title" data-index="0">Idol Livestream: Doll Dress Up</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Kelas Memasak Sara: Ayam Kung Pao" data-index="1" href="https://www.permainan.co.id/permainan/ayam-kung-pao-kelas-memasak-sara">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/webp_SaraKungPao_200x120.webp?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/original_SaraKungPao_200x120.png?1770910663" type="image/webp" alt="Kelas Memasak Sara: Ayam Kung Pao" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280289599" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/18191/jpeg_SaraKungPao_200x120.jpg?1770910663" alt="Kelas Memasak Sara: Ayam Kung Pao">
    </picture>

</div>
<div class="tile-title" data-index="1">Kelas Memasak Sara: Ayam Kung Pao</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="ASMR Beauty Superstar" data-index="2" href="https://www.permainan.co.id/permainan/asmr-beauty-superstar">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/webp_asmr-beauty-superstar_200x120.webp?1754391603" type="image/webp" alt="ASMR Beauty Superstar" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/original_asmr-beauty-superstar_200x120.png?1754391603" type="image/webp" alt="ASMR Beauty Superstar" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13863" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/96119/jpeg_asmr-beauty-superstar_200x120.jpg?1754391603" alt="ASMR Beauty Superstar">
    </picture>

</div>
<div class="tile-title" data-index="2">ASMR Beauty Superstar</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Baby Hazel Goes Sick" data-index="3" href="https://www.permainan.co.id/permainan/baby-hazel-goes-sick">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/webp_200X120_162483_1554896099.webp?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/original_200X120_162483_1554896099.png?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280296627" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/jpeg_200X120_162483_1554896099.jpg?1692367406" alt="Baby Hazel Goes Sick">
    </picture>

</div>
<div class="tile-title" data-index="3">Baby Hazel Goes Sick</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Kelas Memasak Sara: Pentol Swedia" data-index="4" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-pentol-swedia">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/webp_SaraMeatball_200x120.webp?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/original_SaraMeatball_200x120.png?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280285482" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/jpeg_SaraMeatball_200x120.jpg?1770718260" alt="Kelas Memasak Sara: Pentol Swedia">
    </picture>

</div>
<div class="tile-title" data-index="4">Kelas Memasak Sara: Pentol Swedia</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Ella: Bedah Pinggul" data-index="5" href="https://www.permainan.co.id/permainan/ella-bedah-pinggul">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/webp_200X120_174965_1551960382.webp?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/original_200X120_174965_1551960382.png?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280309109" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/jpeg_200X120_174965_1551960382.jpg?1692370055" alt="Ella: Bedah Pinggul">
    </picture>

</div>
<div class="tile-title" data-index="5">Ella: Bedah Pinggul</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="aksi">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/aksi">
                Game Action
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Obby Rainbow Tower" data-index="0" href="https://www.permainan.co.id/permainan/obby-rainbow-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/webp_obby-rainbow-tower_200x120.webp?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/original_obby-rainbow-tower_200x120.png?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14164" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/jpeg_obby-rainbow-tower_200x120.jpg?1765356904" alt="Obby Rainbow Tower">
    </picture>

</div>
<div class="tile-title" data-index="0">Obby Rainbow Tower</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Commando Force 2" data-index="1" href="https://www.permainan.co.id/permainan/commando-force-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/webp_commando-force-2_200x120.webp?1751452308" type="image/webp" alt="Commando Force 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/original_commando-force-2_200x120.png?1751452308" type="image/webp" alt="Commando Force 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13827" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/jpeg_commando-force-2_200x120.jpg?1751452308" alt="Commando Force 2">
    </picture>

</div>
<div class="tile-title" data-index="1">Commando Force 2</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Contract Deer Hunter" data-index="2" href="https://www.permainan.co.id/permainan/contract-deer-hunter">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/webp_contract-deer-hunter_200x120.webp?1745576502" type="image/webp" alt="Contract Deer Hunter" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/original_contract-deer-hunter_200x120.png?1745576502" type="image/webp" alt="Contract Deer Hunter" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13710" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94970/jpeg_contract-deer-hunter_200x120.jpg?1745576502" alt="Contract Deer Hunter">
    </picture>

</div>
<div class="tile-title" data-index="2">Contract Deer Hunter</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Escape School Duel" data-index="3" href="https://www.permainan.co.id/permainan/escape-school-duel">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/webp_escape-school-duel_200x120.webp?1771337926" type="image/webp" alt="Escape School Duel" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/original_escape-school-duel_200x120.png?1771337926" type="image/webp" alt="Escape School Duel" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14298" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/99072/jpeg_escape-school-duel_200x120.jpg?1771337926" alt="Escape School Duel">
    </picture>

</div>
<div class="tile-title" data-index="3">Escape School Duel</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Falling Dummy" data-index="4" href="https://www.permainan.co.id/permainan/falling-dummy">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/webp_falling-dummy_200x120.webp?1769514546" type="image/webp" alt="Falling Dummy" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/original_falling-dummy_200x120.png?1769514546" type="image/webp" alt="Falling Dummy" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14240" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98682/jpeg_falling-dummy_200x120.jpg?1769514546" alt="Falling Dummy">
    </picture>

</div>
<div class="tile-title" data-index="4">Falling Dummy</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Geometry Vibes 3D" data-index="5" href="https://www.permainan.co.id/permainan/geometry-vibes-3d">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/webp_geometry-vibes-3d_200x120.webp?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/original_geometry-vibes-3d_200x120.png?1752242615" type="image/webp" alt="Geometry Vibes 3D" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13844" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95896/jpeg_geometry-vibes-3d_200x120.jpg?1752242615" alt="Geometry Vibes 3D">
    </picture>

</div>
<div class="tile-title" data-index="5">Geometry Vibes 3D</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="simulasi">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/simulasi">
                Permainan Simulasi 
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Farm Merge Valley" data-index="0" href="https://www.permainan.co.id/permainan/farm-merge-valley">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/webp_farm-merge-valley-winter-2025_200x120.webp?1764765594" type="image/webp" alt="Farm Merge Valley" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/original_farm-merge-valley-winter-2025_200x120.png?1764765594" type="image/webp" alt="Farm Merge Valley" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13273" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/jpeg_farm-merge-valley-winter-2025_200x120.jpg?1764765594" alt="Farm Merge Valley">
    </picture>

</div>
<div class="tile-title" data-index="0">Farm Merge Valley</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Baby Hazel Goes Sick" data-index="1" href="https://www.permainan.co.id/permainan/baby-hazel-goes-sick">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/webp_200X120_162483_1554896099.webp?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/original_200X120_162483_1554896099.png?1692367406" type="image/webp" alt="Baby Hazel Goes Sick" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280296627" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/20453/jpeg_200X120_162483_1554896099.jpg?1692367406" alt="Baby Hazel Goes Sick">
    </picture>

</div>
<div class="tile-title" data-index="1">Baby Hazel Goes Sick</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Kelas Memasak Sara: Pentol Swedia" data-index="2" href="https://www.permainan.co.id/permainan/kelas-memasak-sara-pentol-swedia">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/webp_SaraMeatball_200x120.webp?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/original_SaraMeatball_200x120.png?1770718260" type="image/webp" alt="Kelas Memasak Sara: Pentol Swedia" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280285482" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/17015/jpeg_SaraMeatball_200x120.jpg?1770718260" alt="Kelas Memasak Sara: Pentol Swedia">
    </picture>

</div>
<div class="tile-title" data-index="2">Kelas Memasak Sara: Pentol Swedia</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Ella: Bedah Pinggul" data-index="3" href="https://www.permainan.co.id/permainan/ella-bedah-pinggul">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/webp_200X120_174965_1551960382.webp?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/original_200X120_174965_1551960382.png?1692370055" type="image/webp" alt="Ella: Bedah Pinggul" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280309109" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24195/jpeg_200X120_174965_1551960382.jpg?1692370055" alt="Ella: Bedah Pinggul">
    </picture>

</div>
<div class="tile-title" data-index="3">Ella: Bedah Pinggul</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Pou" data-index="4" href="https://www.permainan.co.id/permainan/pou">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61362/webp_200X120_178219_1637078872.webp?1692371023" type="image/webp" alt="Pou" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61362/original_200X120_178219_1637078872.png?1692371023" type="image/webp" alt="Pou" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312363" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/61362/jpeg_200X120_178219_1637078872.jpg?1692371023" alt="Pou">
    </picture>

</div>
<div class="tile-title" data-index="4">Pou</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Koki Burger: Cerita Memasak" data-index="5" href="https://www.permainan.co.id/permainan/koki-burger-cerita-memasak">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/webp_200X120_174423_1547806774.webp?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/original_200X120_174423_1547806774.png?1692369958" type="image/webp" alt="Koki Burger: Cerita Memasak" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308567" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24058/jpeg_200X120_174423_1547806774.jpg?1692369958" alt="Koki Burger: Cerita Memasak">
    </picture>

</div>
<div class="tile-title" data-index="5">Koki Burger: Cerita Memasak</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="multipemain">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/multipemain">
                Multi Pemain
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Worms.Zone" data-index="0" href="https://www.permainan.co.id/permainan/wormszone">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/webp_worms-zone-a-slithety-snake_200x120.webp?1739174012" type="image/webp" alt="Worms.Zone" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/original_worms-zone-a-slithety-snake_200x120.jpg?1739174012" type="image/webp" alt="Worms.Zone" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307086" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23679/jpeg_worms-zone-a-slithety-snake_200x120.jpg?1739174012" alt="Worms.Zone">
    </picture>

</div>
<div class="tile-title" data-index="0">Worms.Zone</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Farm Merge Valley" data-index="1" href="https://www.permainan.co.id/permainan/farm-merge-valley">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/webp_farm-merge-valley-winter-2025_200x120.webp?1764765594" type="image/webp" alt="Farm Merge Valley" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/original_farm-merge-valley-winter-2025_200x120.png?1764765594" type="image/webp" alt="Farm Merge Valley" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13273" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/91531/jpeg_farm-merge-valley-winter-2025_200x120.jpg?1764765594" alt="Farm Merge Valley">
    </picture>

</div>
<div class="tile-title" data-index="1">Farm Merge Valley</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Ono Card Game" data-index="2" href="https://www.permainan.co.id/permainan/ono-card-game">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/webp_200X120_173100_1536005750.webp?1692369711" type="image/webp" alt="Ono Card Game" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/original_200X120_173100_1536005750.png?1692369711" type="image/webp" alt="Ono Card Game" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280307244" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23711/jpeg_200X120_173100_1536005750.jpg?1692369711" alt="Ono Card Game">
    </picture>

</div>
<div class="tile-title" data-index="2">Ono Card Game</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Obby Rainbow Tower" data-index="3" href="https://www.permainan.co.id/permainan/obby-rainbow-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/webp_obby-rainbow-tower_200x120.webp?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/original_obby-rainbow-tower_200x120.png?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14164" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/jpeg_obby-rainbow-tower_200x120.jpg?1765356904" alt="Obby Rainbow Tower">
    </picture>

</div>
<div class="tile-title" data-index="3">Obby Rainbow Tower</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Commando Force 2" data-index="4" href="https://www.permainan.co.id/permainan/commando-force-2">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/webp_commando-force-2_200x120.webp?1751452308" type="image/webp" alt="Commando Force 2" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/original_commando-force-2_200x120.png?1751452308" type="image/webp" alt="Commando Force 2" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13827" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/95773/jpeg_commando-force-2_200x120.jpg?1751452308" alt="Commando Force 2">
    </picture>

</div>
<div class="tile-title" data-index="4">Commando Force 2</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Master Chess Multiplayer" data-index="5" href="https://www.permainan.co.id/permainan/master-chess-multiplayer">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/webp_1550132657_Master-Chess-Multiplayer-200x120.webp?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/original_1550132657_Master-Chess-Multiplayer-200x120.png?1692369670" type="image/webp" alt="Master Chess Multiplayer" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306986" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23651/jpeg_1550132657_Master-Chess-Multiplayer-200x120.jpg?1692369670" alt="Master Chess Multiplayer">
    </picture>

</div>
<div class="tile-title" data-index="5">Master Chess Multiplayer</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="keahlian">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/keahlian">
                Game Ketangkasan 
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Magic Piano Tiles" data-index="0" href="https://www.permainan.co.id/permainan/tuts-piano-ajaib">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/webp_200X120_172327_1528274776.webp?1692369585" type="image/webp" alt="Magic Piano Tiles" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/original_200X120_172327_1528274776.png?1692369585" type="image/webp" alt="Magic Piano Tiles" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280306471" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23529/jpeg_200X120_172327_1528274776.jpg?1692369585" alt="Magic Piano Tiles">
    </picture>

</div>
<div class="tile-title" data-index="0">Magic Piano Tiles</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Geometry Vibes" data-index="1" href="https://www.permainan.co.id/permainan/geometry-vibes">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/webp_geometry-vibes_200x120.webp?1738580822" type="image/webp" alt="Geometry Vibes" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/original_geometry-vibes_200x120.png?1738580822" type="image/webp" alt="Geometry Vibes" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="13608" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/94217/jpeg_geometry-vibes_200x120.jpg?1738580822" alt="Geometry Vibes">
    </picture>

</div>
<div class="tile-title" data-index="1">Geometry Vibes</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Obby Rainbow Tower" data-index="2" href="https://www.permainan.co.id/permainan/obby-rainbow-tower">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/webp_obby-rainbow-tower_200x120.webp?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/original_obby-rainbow-tower_200x120.png?1765356904" type="image/webp" alt="Obby Rainbow Tower" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14164" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98149/jpeg_obby-rainbow-tower_200x120.jpg?1765356904" alt="Obby Rainbow Tower">
    </picture>

</div>
<div class="tile-title" data-index="2">Obby Rainbow Tower</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Free Hoops" data-index="3" href="https://www.permainan.co.id/permainan/free-hoops">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/webp_free-hops_200x120.webp?1768910246" type="image/webp" alt="Free Hoops" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/original_free-hops_200x120.png?1768910246" type="image/webp" alt="Free Hoops" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14212" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98502/jpeg_free-hops_200x120.jpg?1768910246" alt="Free Hoops">
    </picture>

</div>
<div class="tile-title" data-index="3">Free Hoops</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Harvest Honors Classic" data-index="4" href="https://www.permainan.co.id/permainan/harvest-honors-classic">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/webp_1550130898_Harvest-Honors-200x120.webp?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/original_1550130898_Harvest-Honors-200x120.png?1692364771" type="image/webp" alt="Harvest Honors Classic" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284592" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16520/jpeg_1550130898_Harvest-Honors-200x120.jpg?1692364771" alt="Harvest Honors Classic">
    </picture>

</div>
<div class="tile-title" data-index="4">Harvest Honors Classic</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Geometry Vibes X-Arrow" data-index="5" href="https://www.permainan.co.id/permainan/geometry-vibes-x-arrow">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/webp_geometry-vibes-x-arrow_200x120.webp?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/original_geometry-vibes-x-arrow_200x120.png?1764938067" type="image/webp" alt="Geometry Vibes X-Arrow" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="14159" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/98109/jpeg_geometry-vibes-x-arrow_200x120.jpg?1764938067" alt="Geometry Vibes X-Arrow">
    </picture>

</div>
<div class="tile-title" data-index="5">Geometry Vibes X-Arrow</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="mahjongg">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/mahjongg">
                Game Mahjong Online Gratis
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Dream Pet Link" data-index="0" href="https://www.permainan.co.id/permainan/dream-pet-link">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/webp_1464611715_dream-pet-link200x120.webp?1692363911" type="image/webp" alt="Dream Pet Link" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/original_1464611715_dream-pet-link200x120.jpg?1692363911" type="image/webp" alt="Dream Pet Link" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280262801" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/15221/jpeg_1464611715_dream-pet-link200x120.jpg?1692363911" alt="Dream Pet Link">
    </picture>

</div>
<div class="tile-title" data-index="0">Dream Pet Link</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Mahjong Link" data-index="1" href="https://www.permainan.co.id/permainan/sambungan-mahjong">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/webp_1441882100_576742227280284432_large.webp?1692364709" type="image/webp" alt="Mahjong Link" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/original_1441882100_576742227280284432_large.jpg?1692364709" type="image/webp" alt="Mahjong Link" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280284432" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/16426/jpeg_1441882100_576742227280284432_large.jpg?1692364709" alt="Mahjong Link">
    </picture>

</div>
<div class="tile-title" data-index="1">Mahjong Link</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Dimensi Mahyong: 900 Detik" data-index="2" href="https://www.permainan.co.id/permainan/dimensi-mahyong-900-detik">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/webp_200X120_173955_1544104605.webp?1692369873" type="image/webp" alt="Dimensi Mahyong: 900 Detik" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/original_200X120_173955_1544104605.png?1692369873" type="image/webp" alt="Dimensi Mahyong: 900 Detik" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308099" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23938/jpeg_200X120_173955_1544104605.jpg?1692369873" alt="Dimensi Mahyong: 900 Detik">
    </picture>

</div>
<div class="tile-title" data-index="2">Dimensi Mahyong: 900 Detik</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Mahjong Mahjong" data-index="3" href="https://www.permainan.co.id/permainan/mahjong-mahjong">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21571/webp_200X120_167331.webp?1692368193" type="image/webp" alt="Mahjong Mahjong" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21571/original_200X120_167331.jpg?1692368193" type="image/webp" alt="Mahjong Mahjong" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280301475" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/21571/jpeg_200X120_167331.jpg?1692368193" alt="Mahjong Mahjong">
    </picture>

</div>
<div class="tile-title" data-index="3">Mahjong Mahjong</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Raja Mahyong" data-index="4" href="https://www.permainan.co.id/permainan/raja-mahyong">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24141/webp_200X120_174766_1550829778.webp?1692370017" type="image/webp" alt="Raja Mahyong" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24141/original_200X120_174766_1550829778.png?1692370017" type="image/webp" alt="Raja Mahyong" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280308910" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24141/jpeg_200X120_174766_1550829778.jpg?1692370017" alt="Raja Mahyong">
    </picture>

</div>
<div class="tile-title" data-index="4">Raja Mahyong</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Mahjong Shanghai" data-index="5" href="https://www.permainan.co.id/permainan/mahjong-shanghai">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/14475/webp_1441812355_576742227280146378_large.webp?1692363398" type="image/webp" alt="Mahjong Shanghai" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/14475/original_1441812355_576742227280146378_large.gif?1692363398" type="image/webp" alt="Mahjong Shanghai" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280146378" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/14475/jpeg_1441812355_576742227280146378_large.jpg?1692363398" alt="Mahjong Shanghai">
    </picture>

</div>
<div class="tile-title" data-index="5">Mahjong Shanghai</div>
</a>
              </li>
          </ul>
        </li>
        <li class="box grid-col" data-widget="label_overview" data-label="cari-gambar">
          <header class="box-header">
            <h3 class="box-title ellipsis">
              <a href="https://www.permainan.co.id/game/cari-gambar">
                Game Tebak Gambar
                <span class="animated-fw-arrows"><span></span></span>
</a>            </h3>
          </header>
          <ul class="box-content grid-row col-2 col-s-3 col-m-3 col-l-3">
              <li class="grid-col">
                <a class="tile" title="Hidden Magic OG" data-index="0" href="https://www.permainan.co.id/permainan/hidden-magic-og">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/73493/webp_Hidden-Magic-OG-200x120.webp?1692371475" type="image/webp" alt="Hidden Magic OG" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/73493/original_Hidden-Magic-OG-200x120.png?1692371475" type="image/webp" alt="Hidden Magic OG" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="12473" data-index="1" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/73493/jpeg_Hidden-Magic-OG-200x120.jpg?1692371475" alt="Hidden Magic OG">
    </picture>

</div>
<div class="tile-title" data-index="0">Hidden Magic OG</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Temukan Perbedaannya: Bayi Kecil Lucu" data-index="1" href="https://www.permainan.co.id/permainan/temukan-perbedaannya-bayi-kecil-lucu">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24461/webp_200X120_175946_1560948337.webp?1692370239" type="image/webp" alt="Temukan Perbedaannya: Bayi Kecil Lucu" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24461/original_200X120_175946_1560948337.png?1692370239" type="image/webp" alt="Temukan Perbedaannya: Bayi Kecil Lucu" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280310090" data-index="2" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/24461/jpeg_200X120_175946_1560948337.jpg?1692370239" alt="Temukan Perbedaannya: Bayi Kecil Lucu">
    </picture>

</div>
<div class="tile-title" data-index="1">Temukan Perbedaannya: Bayi Kecil Lucu</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Mystery Venue Hidden Object" data-index="2" href="https://www.permainan.co.id/permainan/mystery-venue-hidden-object">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/57128/webp_200X120_178175_1634801621.webp?1692370986" type="image/webp" alt="Mystery Venue Hidden Object" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/57128/original_200X120_178175_1634801621.png?1692370986" type="image/webp" alt="Mystery Venue Hidden Object" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280312319" data-index="3" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/57128/jpeg_200X120_178175_1634801621.jpg?1692370986" alt="Mystery Venue Hidden Object">
    </picture>

</div>
<div class="tile-title" data-index="2">Mystery Venue Hidden Object</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Rachel Holmes: Find Differences" data-index="3" href="https://www.permainan.co.id/permainan/rachel-holmes-find-differences">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25117/webp_200X120_177740_1614606969.webp?1692370702" type="image/webp" alt="Rachel Holmes: Find Differences" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25117/original_200X120_177740_1614606969.png?1692370702" type="image/webp" alt="Rachel Holmes: Find Differences" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311884" data-index="4" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25117/jpeg_200X120_177740_1614606969.jpg?1692370702" alt="Rachel Holmes: Find Differences">
    </picture>

</div>
<div class="tile-title" data-index="3">Rachel Holmes: Find Differences</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Spring Differences" data-index="4" href="https://www.permainan.co.id/permainan/spring-differences">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25211/webp_200X120_177853_1623932162.webp?1692370768" type="image/webp" alt="Spring Differences" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25211/original_200X120_177853_1623932162.png?1692370768" type="image/webp" alt="Spring Differences" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280311997" data-index="5" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/25211/jpeg_200X120_177853_1623932162.jpg?1692370768" alt="Spring Differences">
    </picture>

</div>
<div class="tile-title" data-index="4">Spring Differences</div>
</a>
              </li>
              <li class="grid-col">
                <a class="tile" title="Kue Roti Lapis Es Krim" data-index="5" href="https://www.permainan.co.id/permainan/kue-roti-lapis-es-krim">
<div class="tile-thumbnail ">


    <picture>
        <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23180/webp_200X120_171262_1510668526.webp?1692369337" type="image/webp" alt="Kue Roti Lapis Es Krim" media="(min-width: 481px)">
        <source data-srcset="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23180/original_200X120_171262_1510668526.png?1692369337" type="image/webp" alt="Kue Roti Lapis Es Krim" media="(max-width: 481px)" />
        <img width="100%" height="100%" class="lazy" data-appid="576742227280305406" data-index="6" data-src="https://gamesgamescdn.com/system/static/thumbs/spil_thumb_big/23180/jpeg_200X120_171262_1510668526.jpg?1692369337" alt="Kue Roti Lapis Es Krim">
    </picture>

</div>
<div class="tile-title" data-index="5">Kue Roti Lapis Es Krim</div>
</a>
              </li>
          </ul>
        </li>
    </ul>
  </section>
</div>

    </div>
  </div>

  <section class="seo-content">
    <h1 class="header">Bermain game online di permainan.co.id</h1>
<div class="text">
  <p>Permainan.co.id memiliki banyak koleksi <span>game gratis</span>. Setiap hari ditambahkan game yg benar-benar baru,
    dan ada lebih dari 20,000 game online gratis utk kamu mainkan. Di Permainan.co.id, kamu bisa coba apa saja dari
    <a href="https://www.permainan.co.id/game/game-anak-anak">game anak-anak</a> hingga game online dgn beberapa pemain
    yg menantang meskipun pemain terbaik sekali pun.</p>
  <p>Ada game aksi , game perjalanan dan game petualangan untuk para gamer pemberani dan hebat beserta game memasak utk
    para ahli pencicip makanan. Fashionista akan menyukai koleksi game berdandan & desain kami. Keluarga akan
    menikmati game lain seperti Game House, Hamster Ball, dan Gaple Online.</p>
  <p>Kamu juga bisa bermain game seperti
    <a href="https://www.permainan.co.id/game/fireboy-and-watergirl">Fireboy &amp; Watergirl</a>. Faktanya, ini
    merupakan seluruh rangkaian game petualangan hebat yg akan benar-benar menguji kemampuanmu. Kamu bisa bergabung dlm
    tim dgn 2 pahlawan super sementara mereka mengendalikan elemen api &amp; air utk keluar dari semua situasi gila.</p>
  <p>Game dgn 2 pemain juga fantastis jika kamu ingin menantang teman game pertempuran hebat. Kamu bisa bermain game di
    kategori game, mencakup: game multiplayer, game io, game balap, game ilmu pasti, dan lebih banyak lagi! Dikarekan
    kami telah mendapatkan salah satu dari koleksi terbesar dunia utk game online gratis, kamu akan selalu menemukan yg
    terbaik utk dimainkan sendiri atau dgn teman &amp; keluargamu. Jadi, kapan saja ingin mulai beberapa game online,
    cukup kunjungi permainan.co.id!</p>
</div>

  </section>
</main>





    

    <footer id="wdg_footer" data-widget="footer" class="wdg_footer wdg_footer_has-locales">
  <div class="wdg_footer--text-container">
    <div class="wdg_footer--misc">
      <div class="wdg_footer--misc--logo">
        <picture>
          <source width="175" height="41" data-srcset="https://gamesgamescdn.com/assets/gamesgames/spilgames-logo-690c1f36acc76b88072b4cda33d5d8370ccd5a8c06f14ad71d99c7de72b7e208.webp" type="image/webp" alt="Spilgames">
          <img width="175" height="41" class="lazy logo" data-src="https://gamesgamescdn.com/assets/gamesgames/spilgames-logo-28ce7c3ac49f8770e7c6e1d6ad470ec44b4054b01ba50724074ef33094fb294b.png" alt="Spilgames"/>
        </picture>
      </div>
      <div class="wdg_footer--misc--soc-links"></div>
    </div>

    <div class="wdg_footer--text-columns">

      <div class="wdg_footer--text-column">
  <input type="checkbox" value="val" class="footer-toggle-input" id="company-check">
  <label class="wdg_footer--text-column__title footer-toggle-label" for="company-check">
    <span class="h6">INFO BISNIS</span>
    <span class="arrow"></span>
  </label>
  <ul class="footer-toggle-content">
    <li class="wdg_footer--text-column__item">
      <a title="Syarat-Syarat Pemakaian" href="https://www.permainan.co.id/peringatan">Syarat-Syarat Pemakaian</a>
    </li>

    <li class="wdg_footer--text-column__item">
      <a title="Kebijaksanaan Pribadi Kami" href="https://www.permainan.co.id/kebijaksanaan_polis">Kebijaksanaan Pribadi Kami</a>
    </li>

    <li class="wdg_footer--text-column__item">
      <a title="Cookies" href="https://www.permainan.co.id/cookies-policy">Cookies</a>
    </li>

    <li class="wdg_footer--text-column__item">
      <a title="Izin Cookie" class="manage_cookies_button" href="#">Izin Cookie</a>
    </li>
  </ul>
</div>
<div id="cookie-turbolink-permanent" data-turbolinks-permanent></div>



      <div class="wdg_footer--text-column">
        <input type="checkbox" value="val" class="footer-toggle-input" id="support-check">
        <label class="wdg_footer--text-column__title footer-toggle-label" for="support-check">
          <span class="h6">DUKUNGAN</span>
          <span class="arrow"></span>
        </label>
        <ul class="footer-toggle-content">
          <li class="wdg_footer--text-column__item">
            <a href="https://support.spilgames.com/hc/id?site_id=140" id="zendesk" rel="noopener" target="_blank" title="Bantuan" data-rel="noopener">Bantuan</a>
          </li>
        </ul>
      </div>

      <div class="wdg_footer--text-column wdg_footer--text-column--locales">
  <input type="checkbox" value="val" class="footer-toggle-input" id="language-check">
  <label class="wdg_footer--text-column__title footer-toggle-label" for="language-check">
    <span class="h6">BAHASA</span>
    <span class="arrow"></span>
  </label>
  <ul class="footer-toggle-content">
          <li class="wdg_footer--text-column__item">
            <a href="https://www.gamesgames.com/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">English</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.games.co.uk/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">British
              English</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.jetztspielen.de/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Deutsch</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.ourgames.ru/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Русский</a>
          </li>


























          <li class="wdg_footer--text-column__item">
            <a href="https://www.gioco.it/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Italiano</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.jeux.fr/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Français</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.gry.pl/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Polski</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.juegos.com/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Español</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.ojogos.com.br/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Português</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.oyunskor.com/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Türkçe</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.spela.se/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Svenska</a>
          </li>













          <li class="wdg_footer--text-column__item">
            <a href="https://www.spelletjes.nl/" title="" data-widget="interlanguage_links" rel="external" data-rel="external">Nederlands</a>
          </li>
  </ul>
</div>

    </div>
    <picture>
      <source width="100%" height="100%" data-srcset="https://gamesgamescdn.com/assets/gamesgames/footer-mascot-1ee337155313918251f78c57cf563d13924163032c78eb37b41fdfb6d5883057.png" type="image/webp" alt="Spilgames">
      <img width="100%" height="100%" class="lazy wdg_footer--mascot" data-src="https://gamesgamescdn.com/assets/gamesgames/footer-mascot-1ee337155313918251f78c57cf563d13924163032c78eb37b41fdfb6d5883057.png" alt="Spilgames"/>
    </picture>

    <button id="backtotop-gamepage" class="button small totop" aria-label="Scroll to top">
      <div class="sp-i__double-up-angle"></div>
    </button>
  </div>
  <p class="wdg_footer--copyright">Copyright © 2026 SPIL GAMES Semua hak terlindungi.</p>
</footer>


  </div>
</div>
</body>
</html>
