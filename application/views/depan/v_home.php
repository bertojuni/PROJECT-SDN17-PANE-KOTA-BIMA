<!DOCTYPE html>
<html lang="id">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Home</title>
  <!-- Stylesheet -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/sd.png' ?>">
  <link href="<?php echo base_url() . 'template/css/style.css' ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'template/css/ddsmoothmenu.css' ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'template/css/jquery.fancybox-1.3.4.css' ?>" media="screen" />
  <!-- Javascript -->
  <script src="<?php echo base_url() . 'template/js/jquery.min.js' ?>" type="text/javascript"></script>
  <script src="<?php echo base_url() . 'template/js/ddsmoothmenu.js' ?>" type="text/javascript"></script>
  <script src="<?php echo base_url() . 'template/js/contentslider.js' ?>" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/jcarousellite_1.0.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/jquery.easing.1.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/cufon-yui.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/DIN_500.font.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/menu.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/tabs.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/jquery.mousewheel-3.0.4.pack.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'template/js/jquery.fancybox-1.3.4.pack.js' ?>"></script>

  <?php
  function limit_words($string, $word_limit)
  {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
  }

  ?>
</head>

<body>
  <div id="bg">
    <!-- Wapper Sec -->
    <div id="wrapper_sec">
      <!-- masterhead -->
      <div id="masterhead">
        <!-- Logo -->
        <div class="logo"><a href="<?php echo base_url() . '' ?>"><img style="height: 47px; weight: 47px" src="<?php echo base_url() . 'assets/images/sdnpane.png' ?>" alt="" /></a></div>
        <!-- masterhead Right Section -->
        <div class="topright_sec">
          <!-- top navigation -->
          <div class="topnavigation">
            <ul>
              <li class="first">&nbsp;</li>
              <li><a href="#">Telp. (0751) 08439274</a></li>
              <li><a href="#">Email: sdn17panekobi@gmail.com</a></li>
              <li><a class="nobg" href="#">Jl. soekarno Hatta</a></li>
              <li class="last">&nbsp;</li>
            </ul>
          </div>
          <div class="clear"></div>
          <!-- top search -->
          <div class="top_search">
            <div class="advance_search"><a href="#"></a></div>
            <form action="<?php echo base_url() . 'berita/search' ?>" method="post">
              <ul>
                <li><input name="textcari" type="text" placeholder="Pencarian" /></li>
                <li><button class="search" type="submit">Search</button></li>
              </ul>
            </form>

          </div>
          <div class="clear"> </div>
        </div>
        <div class="clear"></div>
        <!-- Navigation -->
        <div class="navigation">
          <div id="smoothmenu1" class="ddsmoothmenu">
            <ul>
              <li class="first"><a class="selected" href="<?php echo base_url() . '' ?>">Home</a></li>
              <li><a href="#">Profil</a>
                <!-- Sub Menu level 1 -->
                <ul>
                  <li><a href="<?php echo base_url() . 'kata_sambutan' ?>">Kata Sambutan</a></li>
                  <li><a href="<?php echo base_url() . 'visi_misi' ?>">Visi Misi</a></li>

                </ul>
              </li>
              <li><a href="<?php echo base_url() . 'guru' ?>">Guru</a> </li>
              <li><a href="#">Kesiswaan</a>
                <ul>
                  <li><a href="<?php echo base_url() . 'siswa' ?>">Data Siswa</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url() . 'berita' ?>">Berita</a> </li>
              <li><a href="<?php echo base_url() . 'pengumuman' ?>">Pengumuman</a></li>
              <li><a href="<?php echo base_url() . 'agenda' ?>">Agenda</a></li>
              <li><a href="<?php echo base_url() . 'galeri' ?>">Gallery</a> </li>
              <li><a href="<?php echo base_url() . 'download' ?>">Download</a> </li>

              <li><a href="<?php echo base_url() . 'kontak' ?>" class="last">Hubungi Kami</a></li>

            </ul>
          </div>
          <!-- navigation ends -->
          <div class="clear"></div>
        </div>
      </div>
      <!-- Content Seciton -->
      <div id="content_section">
        <!-- News Updates -->

        <div class="clear"></div>
        <!-- Col1 -->
        <div class="col1">
          <!-- Banner -->
          <div id="banner">
            <div id="slider2">
              <?php
              foreach ($brt->result_array() as $br) {
                $berita_id = $br['tulisan_id'];
                $berita_judul = $br['tulisan_judul'];
                $berita_isi = $br['tulisan_isi'];
                $berita_kategori = $br['tulisan_kategori_nama'];
                $berita_gambar = $br['tulisan_gambar'];
                $berita_author = $br['tulisan_author'];

              ?>
                <div class="contentdiv">
                  <a href="#"><img src="<?php echo base_url() . 'assets/images/' . $berita_gambar; ?>" alt="" /></a>
                  <div class="banner_des">
                    <h4><?php echo $berita_judul; ?> </h4>
                    <?php echo limit_words($berita_isi, 15) . '...'; ?>
                  </div>
                </div>
              <?php } ?>


            </div>
            <div id="paginate-slider2" class="pagination">
            </div>
            <script type="text/javascript" src="<?php echo base_url() . 'template/js/slider.js' ?>"></script>

          </div>

          <!-- Content Heading -->
          <div class="content_heading">
            <div class="heading">
              <h2>Selamat Datang di Web Profil SDN 17 PANE KOTA BIMA</h2>
            </div>

          </div>
          <p class="text">
            Website ini adalah website yang dibangun untuk sekolah SDN 17 PANE KOTA BIMA untuk menunjang transparasi informasi dan promosi sekolah.
            <p>Kami Menyambut baik terbitnya Website SDN 17 KOTA BIMA yang baru , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. Sebaliknya orangtua dapat mengakses informasi tentang kegiatan akademik dan non akademik putra - puterinya di sekolah ini. Dengan fasilitas ini Siswa dapat mengakses berbagai informasi pembelajaran dan informasi akademik.</p>
          </p>

          <!-- Content Block -->


          <!-- Search Course -->




          <div class="clear"></div>
          <!-- col1 ends -->
        </div>
        <!-- Col2 -->
        <!--<div class="col2">
          <div class="ads">
            <a href="#"><img src="<?php echo base_url() . 'template/images/ads.png' ?>" alt="" /></a>
          </div>-->
        <!-- Blog guru dan Siswa Baru -->
        <div class="rtab">
          <div class="tab_navigation">
            <ul>
              <li class="active"><a href="#rtab1">Siswa Baru</a></li>
              <li><a href="#rtab2">Guru Baru</a> </li>
            </ul>
          </div>
          <div class="rtab_content" id="rtab1" style="display:none;">
            <ul>
              <?php
              $data_siswa = $this->db->query("SELECT * FROM tbl_siswa ORDER BY siswa_id DESC LIMIT 4");
              foreach ($data_siswa->result_array() as $i) :
                $siswa_nis = $i['siswa_nis'];
                $siswa_nama = $i['siswa_nama'];
                $siswa_photo = $i['siswa_photo'];
              ?>
                <li>
                  <?php if (empty($siswa_photo)) : ?>
                    <div class="thumb"><a href="#"><img width="40" height="40" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" alt="" /></a></div>
                  <?php else : ?>
                    <div class="thumb"><a href="#"><img width="40" height="40" src="<?php echo base_url() . 'assets/images/' . $siswa_photo; ?>" alt="" /></a></div>
                  <?php endif; ?>
                  <div class="description">
                    <h6><a href="#"><?php echo $siswa_nama; ?></a></h6>
                    <p><a href="#" class="gray"><?php echo $siswa_nis; ?></a></p>
                  </div>
                </li>
              <?php endforeach; ?>

            </ul>
            <div class="clear"></div>
          </div>

          <div class="rtab_content" id="rtab2" style="display:none;">
            <ul>
              <?php
              $data_siswa = $this->db->query("SELECT * FROM tbl_guru ORDER BY guru_id DESC LIMIT 4");
              foreach ($data_siswa->result_array() as $i) :
                $nip = $i['guru_nip'];
                $nama = $i['guru_nama'];
                $mapel = $i['guru_mapel'];
                $photo = $i['guru_photo'];
              ?>
                <li>
                  <?php if (empty($siswa_photo)) : ?>
                    <div class="thumb"><a href="#"><img width="40" height="40" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" alt="" /></a></div>
                  <?php else : ?>
                    <div class="thumb"><a href="#"><img width="40" height="40" src="<?php echo base_url() . 'assets/images/' . $photo; ?>" alt="" /></a></div>
                  <?php endif; ?>
                  <div class="description">
                    <h6><a href="#"><?php echo $nama; ?></a></h6>
                    <p><a href="#" class="gray"><?php echo $mapel; ?></a></p>
                  </div>
                </li>
              <?php endforeach; ?>

            </ul>
            <div class="clear"></div>
          </div>

        </div>
        <!-- Our College Gallery -->
        <div class="college_gallery">
          <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;">
            <h4 style="padding-top:5px;padding-left:9px;">Gallery Photo</h4>
          </div>
          <ul>
            <?php
            foreach ($galeri->result_array() as $g) {
              $galeri_id = $g['galeri_id'];
              $galeri_judul = $g['galeri_judul'];
              $galeri_tanggal = $g['tanggal'];
              $galeri_author = $g['galeri_author'];
              $galeri_gambar = $g['galeri_gambar'];
              $galeri_album_id = $g['galeri_album_id'];
              $galeri_album_nama = $g['album_nama'];

            ?>
              <li>
                <div class="thumb"><a href="<?php echo base_url() . 'galeri' ?>"><img width="40" height="40" src="<?php echo base_url() . 'assets/images/' . $galeri_gambar; ?>" alt="" /></a></div>
                <div class="description">
                  <h6><a href="<?php echo base_url() . 'galeri' ?>"><?php echo $galeri_judul; ?></a></h6>
                  <a class="gray" href="#"><em><?php echo 'Tanggal ' . $galeri_tanggal; ?></em></a>
                </div>
              </li>
            <?php } ?>

          </ul>
        </div>
        <div class="clear"></div>
        <!--col2 ends -->
      </div>
      <div class="clear"></div>
      <!-- Slder -->
      <!--  <div class="image_scroll">
          <a class="leftarrow" href="#"><img src="<?php echo base_url() . 'template/images/left_arrow.gif' ?>" alt="" /></a>
          <div class="slider1">
            <ul>
              <li><a href=""><img src="<?php echo base_url() . 'template/images/slider1.png' ?>" alt="" /></a></li>
              <li><a href=""><img src="<?php echo base_url() . 'template/images/slider2.png' ?>" alt="" /></a></li>
              <li><a href=""><img src="<?php echo base_url() . 'template/images/slider3.png' ?>" alt="" /></a></li>
              <li><a href=""><img src="<?php echo base_url() . 'template/images/slider4.png' ?>" alt="" /></a></li>
            
            </ul>
          </div>
          <a class="rightarrow" href="#"><img src="<?php echo base_url() . 'template/images/right_arrow.gif' ?>" alt="" /></a>
        </div>
      </div> -->
      <div class="clear"></div>
    </div>
  </div>

  <?php $this->load->view('depan/v_footer'); ?>

</body>

</html>