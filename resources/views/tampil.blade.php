<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SMK N 2 KARANGANYAR</title>

    <!-- CSS  -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style1.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="shortcut icon" href="http://sekolahfadilah.sch.id/wp-content/uploads/2016/10/Logo-Fadilah-Transfarent-copy.png" title="Favicon" />

    <style>
      .navbar-fixed {
        position: absolute;
        z-index: 999999999;
      }
    </style>
    <script>
      function animationClick(element, animation) {
        element = $(element);
        element.hover(
          function () {
            element.addClass("animated " + animation);
          },
          function () {
            //wait for animation to finish before removing classes
            window.setTimeout(function () {
              element.removeClass("animated " + animation);
            }, 2000);
          }
        );
      }
    </script>
  </head>

  <body>
    <!--
	<nav class="transparent" role="navigation">
		<div class="nav-fixed container transparent">
			<img src="logo.png" style="width: 50px;height: 50px;margin-top:5px; "   alt="Unsplashed background img 1"><a id="logo-container" href="#" class="brand-logo">SMK FADILAH</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#">Telp (021) 74863089</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#">Telp (021) 74863089</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>
-->

    <div class="navbar-fixed">
      <nav class="transparent z-depth-0">
        <div class="nav-wrapper">
          <div class="row">
            <div class="col s12">
              <img class="brand hide-on-small-only" src="img/jurusan/smk2.png"  /><a href="#" class="brand-logo white-text" target="_blank"
                >&nbsp;&nbsp;<span class="brand-text" style="text-align: center">SMK NEGERI <span class="blue-text">2 KARANGANYAR</span></span></a
              >
              <ul class="right hide-on-med-and-down">
                <li><a href="#profil">PROFIL</a></li>
                <li><a href="#jurusan">JURUSAN</a></li>
                <li><a href="/login">LOGIN</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/kegiatan/9.jpg" />
          <!-- random image -->
          <div class="caption center-align">
            <h3 class="light"><b>SMK NGERI 2 KARANGANYAR</b></h3>
          </div>
        </li>
      </ul>
    </div>

    <div class="container" id="profil">
      <div class="section">
        <!--   Icon Section   -->

        <div class="row">
          <div class="col s12">
            <div class="row center">
              <h4 class="light">MISI, VISI DAN TUJUAN SMKN 2 KARANGANYAR</h4>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
              <h5 class="center">VISI</h5>

              <p class="light">Menjadi Lembaga Pendidikan dan Pelatihan Yang Unggul Dalam Bidang Iptek dan Imtak serta berwawasan lingkungan</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
              <h5 class="center">MISI</h5>
              <ol class="light">
                <li>Memiliki sarana yang sesuai dengan perkembangan teknologi dan informasi</li>
                <li>Memiliki SDM yang unggul dalam bidang IPTEK</li>

                <li>Menciptakan suasana yang Religius, tertib serta santun</li>
              </ol>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
              <h5 class="center">TUJUAN</h5>
              <ol class="light">
                <li>Mempersiapkan peserta didik agar menjadi manusia produktif, mampu bekerja mandiri, dan memiliki kompetensi sesuai program keahlian pilihannya</li>
                <li>Membekali peserta didik agar mampu memilih karir, ulet dan gigih dalam berkompetensi, beradaptasi dilingkungan kerja dan mengembangkan sikap profesional dalam bidang keahlian yang diminatinya</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="row" id="jurusan">
          <div class="row center">
            <h4 class="light">KOMPETENSI KEAHLIAN</h4>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <div class="row center">
                <img src="img/jurusan/tkj.png" class="e" onmousemove="animationClick('.e','jackInTheBox')" width="100px" height="100px" />
              </div>
              <div class="center">
                <p class="light">REKAYASA PERANGKAT LUNAK</p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <div class="row center">
                <img src="img/jurusan/mesin.png" class="t" onmousemove="animationClick('.t','wobble')" on width="100px" height="100px" />
              </div>
              <div class="center">
                <p class="light">PERMESINAN</p>
              </div>
            </div>
          </div>

          <!-- <div class="col s12 m4">
            <div class="icon-block">
              <div class="row center">
                <img src="img/jurusan/tkj.png" class="z" onmousemove="animationClick('.z','wobble')" width="100px" height="100px" />
              </div>
              <div class="center">
                <p class="light">TEKNIK KOMPUTER JARINGAN</p>
              </div>
            </div>
          </div> -->
          <div class="col s12 m4">
            <div class="icon-block">
              <div class="row center">
                <img src="img/jurusan/tkr.png" class="q" onmousemove="animationClick('.q','lightSpeedIn')" width="100px" height="100px" />
              </div>
              <div class="center">
                <p class="light">OTOTRONIK</p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <div class="row center">
                <img src="img/jurusan/kain.png" class="p" onmousemove="animationClick('.p','rotateInDownLeft')" width="100px" height="100px" />
              </div>
              <div class="center">
                <p class="light">TEKNIK PEMBUATAN KAIN</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.849924451783!2d106.69284131406859!3d-6.283450663252082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fae9ed426cb3%3A0xd633605be781a330!2sSMK+Fadilah!5e0!3m2!1sid!2sid!4v1486714521273" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->

    <div class="parallax-container valign-wrapper" style="height: 200px">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h5 class="header col s12 light">
              <blockquote>
                <p class="right-align"></p>
              </blockquote>
            </h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="img/kegiatan/22.jpg" alt="Unsplashed background img 2" /></div>
    </div>

    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4 class="light">LOKASI SEKOLAH KAMI</h4>
            <p class="left-align light">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a
              sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio,
              condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col s6 left-align"></div>
          <div class="col s6"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="row center">
          <h3 class="light">KONTAK KAMI</h3>
        </div>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="first_name" type="text" class="validate" />
              <label for="first_name">Nama anda</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" />
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" />
              <label for="email">Pesan anda</label>
            </div>
          </div>
          <a class="waves-effect waves-light btn">kirim</a>
        </form>
      </div>
    </div>
    <br />
    <br />

    <footer class="page-footer teal">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Alamat sekolah</h5>
            <p class="grey-text text-lighten-4">Jl. Yos Sudarso, Jengglong, Bejen, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716</p>
          </div>
        
        </div>
      </div>
    </footer>

    <!--  Scripts-->

    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>
