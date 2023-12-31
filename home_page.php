<!DOCTYPE html>
<html>
  <head>
    <title>GYM website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
      height: 100%;
      line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
      background-position: center;
      background-size: cover;
      background-image: url("img/gym.jpg");
      min-height: 100%;
    }

    .w3-bar .w3-button {
      padding: 16px;
    }
    </style>
  </head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">GYM website</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">Hakkımızda</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Takım</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Aletler</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> Abonelikler </a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Bize ulaşın </a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Kapat ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Hakkımızda</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">Takım</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">Aletlerimiz</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">Abonelikler</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Bize ulaşın</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">sizin için en büyük GYM website</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">sizin için en büyük GYM website</span><br>
    <span class="w3-large">Size ait olmayan gymlerle değerli zamanınızı boşa harcamayı bırakın.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"> haydi başlayın</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">Salonumuz hakkında</h3>
  <p class="w3-center w3-large">Salonumuzun temel özellikleri</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Duyarlı</p>
      <p>Katılımcıların durumu dikkate alınacak ve performansları değerlendirilecektir.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Beslenme bakımı</p>
      <p>Katılımcıların beslenme durumu dikkate alınacak ve en iyi seçenekler tarcih edilecektir.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Psikolojik yardım</p>
      <p>Katılımcıların durumu psikolojik olarak değerlendirilecek ve olası tüm engelleri aşmalarına yardımcı olunacaktır.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Destek</p>
      <p>Katılımcıların tüm hedeflerini ve hayallerini dikkate alacağız ve onlara ulaşmak için çaba göstereceğiz.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>sizi anlıyoruz.</h3>
      <p>Her katılımcı kendi hedefi için katılır, bu yüzden sizi o hedefe ulaştırmak için her zaman hazırız.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> ürünlerimize bakın..</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="img/gym3.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">Takımız</h3>
  <p class="w3-center w3-large">GYM websiteni yönetenler</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">gençlik koçu</p>
          <p>18-45 yaş arası gençleri yetiştiriyor.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Ulaşın</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team1.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Anja Doe</h3>
          <p class="w3-opacity">Kadınlık koçu</p>
          <p> hem kızlara hem de kadınlar yetiştiriyor.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Ulaşın</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Bebeklik koçu </p>
          <p>On yaşından küçük çocuklara fiziksel ve psikolojik olarak bakar.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Ulaşın</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team4.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Dan Star</h3>
          <p class="w3-opacity">çocukluk koçu</p>
          <p>On ve on sekiz arasında olan çocuklara fiziksel ve psikolojik olarak bakar.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Ulaşın</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">20+</span>
    <br>Ortaklar
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">250+</span>
    <br>Tamamlanan Hedefler
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">320+</span>
    <br>Mutlu müşteriler
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Toplantılar
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center"> Aletlerimiz </h3>
  <p class="w3-center w3-large"> sizin için ne Aletlerimiz var !</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="img/kettlebells.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/bike.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/treadmill2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/treadmill3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="img/pull-up.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/dumbbells.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/dumbbells2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/benchpress.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Becerilerimiz.</h3>
      <p>Salonumuz, tatmin edici ve hızlı sonuçlara ulaşmanıza<br>
	  yardımcı olacak en yeni araç ve tekniklerle donatılmıştır.</p>
      <p>Spor salonları alanında uzun yıllara dayanan deneyim,<br> 
	  her yerden daha iyi performansa yansımıştır.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Koçlarımız</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Uzmanlıklarımız</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa-solid fa-dumbbell w3-margin-right"></i>Aletlerimiz</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>Abonelikler</h3>
  <p class="w3-large">İhtiyaçlarınıza uygun bir fiyatlandırma planı seçin.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-green w3-xlarge w3-padding-32">Aylık abone</li>
        <li class="w3-padding-16"><b>3saat</b> Günde</li>
        <li class="w3-padding-16"><b>3Gün</b> Haftada</li>
        <li class="w3-padding-16"><b>1</b> koç</li>
        <li class="w3-padding-16"><b>sonsuz</b> Destek</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 15</h2>
          <span class="w3-opacity">Bir ay için</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
		  <a href="register.php" class="w3-button w3-black w3-padding-large">Abone ol</a>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Yıllık abone</li>
        <li class="w3-padding-16"><b>5saat</b> Günde</li>
        <li class="w3-padding-16"><b>5Gün</b> Haftada</li>
        <li class="w3-padding-16"><b>3</b> koç</li>
        <li class="w3-padding-16"><b>sonsuz</b> Destek</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 120</h2>
          <span class="w3-opacity">Bir yıl için</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="register.php" class="w3-button w3-black w3-padding-large">Abone ol</a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-green w3-xlarge w3-padding-32">Haftalık abone</li>
        <li class="w3-padding-16"><b>1saat</b> Günde </li>
        <li class="w3-padding-16"><b>2Gün</b> Haftada</li>
        <li class="w3-padding-16"><b>Yok</b> koç</li>
        <li class="w3-padding-16"><b>parçalı</b> Destek</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">iki hafta için</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
           <a href="register.php" class="w3-button w3-black w3-padding-large">Abone ol</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">Bize Ulaşın</h3>
  <p class="w3-center w3-large">Bize bir mesaj gönderin:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>Hatay ,turkiye</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +90 530 000 00 00</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-green" type="submit">
          <i class="fa fa-paper-plane"></i> Mesaj Gönderin
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="img/gym2.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-center w3-green w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Yukarı</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
 <p class="w3-small">Bu website Betül Nasif ve sara chkies tarafından yapılmış.</p>
</footer>

<?php
require 'config.php';
if(isset(_GET['id']))
{
	$id=_GET['id'];
$sql="SELECT * FROM `accounts` WHERE id=$id";
$result=mysqli_query($sql);
$row=mysql_fetch_assoc($result);
$firstname=$row['Ad'];
$family=$row['soyad'];

}
else
{
	header("location:login.php");
}
?>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
