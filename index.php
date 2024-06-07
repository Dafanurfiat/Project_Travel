<?php
session_start();
if ($_SESSION['role'] != 0) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <title>trasul</title>
</head>

<body>
  <div id="scroll-top-btn"><i class="fa-solid fa-arrow-up"></i></div>
  <header>
    <div class="container">
      <div class="logo" id="top">
        <div><a href="index.html">trasul</a></div>
      </div>
      <ul id="click-menu">
        <li><a href="">home</a></li>
        <li><a href="#category">Destination</a></li>
        <li><a href="#new">update</a></li>
        <li><a href="#page">article</a></li>
        <li><a href="#archive">archive</a></li>
        <li><a href="#about us">about us</a></li>
      </ul>
      <div class="bar">
        <div></div>
      </div>
    </div>
  </header>
  <!-- end header -->
  <!-- start hero -->
  <div class="hero">
    <div class="container">
      <h4>welcome trasul</h4>
      <h1>find what you want in Sulawesi</h1>
      <p>Find the place you’ve always wanted to visit. Whether you’re looking for relaxation or excitement, 
        our platform offers a wealth of helpful information for trasul. Explore stunning destinations, 
        experience local culture, and create unforgettable memories. Let us guide you on your journey to the perfect vacation, 
        making sure every moment is exactly as you imagined. Enjoy the journey and find your dream vacation with us.</p>
    </div>
  </div>
  <!-- end hero -->
  <!-- start category -->
  <div class="category" id="category">
    <h2 class="shape">Destination</h2>
    <div class="container">
      <div class="card">
        <div class="imgs">
          <img src="images/post-1.png" alt="new_place">
        </div>
        <div class="detalis">
          <span>Taman Nasional Bunaken (Sulawesi Utara)</span>
          <p>Taman Nasional Bunaken terkenal dengan keindahan bawah lautnya yang mempesona. 
            Tempat ini adalah surga bagi para penyelam dengan terumbu karang yang spektakuler dan keanekaragaman biota laut yang luar biasa. 
            Selain menyelam, pengunjung juga bisa menikmati snorkeling, berenang, atau sekadar bersantai di pantai yang indah.</p>
          <div class="btns">
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgs">
          <img src="images/post-2.jpg" alt="new_place">
        </div>
        <div class="detalis">
          <span>Tana Toraja (Sulawesi Selatan)</span>
          <p>Tana Toraja terkenal dengan budaya unik dan tradisi pemakaman yang khas. Desa-desa adat seperti Kete Kesu menawarkan 
            pemandangan rumah adat Tongkonan yang megah. Pengunjung bisa menyaksikan upacara Rambu Solo (pemakaman) yang merupakan 
            atraksi budaya yang menarik dan belajar tentang tradisi serta kehidupan masyarakat Toraja.</p>
          <div class="btns">
          </div>

        </div>
      </div>
      <div class="card">
        <div class="imgs">
          <img src="images/post-3.jpg" alt="new_place">
        </div>
        <div class="detalis">
          <span>Danau Tondano (Sulawesi Utara)</span>
          <p>Danau Tondano merupakan danau vulkanik terbesar di Sulawesi Utara. Dikelilingi oleh pegunungan yang hijau, 
            danau ini menawarkan pemandangan alam yang menenangkan dan udara yang segar. Di sekitar danau, terdapat banyak 
            restoran yang menyajikan ikan segar, dan pengunjung juga bisa menikmati kegiatan memancing atau naik perahu.</p>
          <div class="btns">
          </div>

        </div>
      </div>
      <div class="card">
        <div class="imgs">
          <img src="images/post-4.jpg" alt="new_place">
        </div>
        <div class="detalis">
          <span>Wakatobi (Sulawesi Tenggara)</span>
          <p>Wakatobi adalah kepulauan yang terdiri dari empat pulau utama: Wangi-Wangi, Kaledupa, Tomia, dan Binongko. 
            Tempat ini adalah destinasi menyelam kelas dunia dengan terumbu karang yang sehat dan keanekaragaman hayati laut yang tinggi. 
            Selain menyelam, pengunjung juga bisa menjelajahi keindahan pulau-pulau, pantai pasir putih, dan hutan mangrove.</p>
          <div class="btns">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end category -->
  <!-- start update -->
  <div class="update" id="new">
    <h2 class="shape">update</h2>
    <div class="container">
        <img src="images/Background-image.png" alt="new-place">
      <div class="detalis">
        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates suscipit illum ex quos rerum aut,
          incidunt itaque aperiam pariatur facilis adipisci tenetur porro quia blanditiis id mollitia, facere ut
          excepturi odit ratione? Omnis nobis odio voluptatem consectetur officia, esse molestiae soluta veritatis
          aliquam architecto minus, vero quia reiciendis excepturi commodi?</span>
      </div>
    </div>
  </div>
  <!-- end update -->
  <div class="page" id="page">
    <h2 class="shape">article</h2>
    <div class="container">
      <div class="container-card">
        <div class="card">
          <div class="imgs">
            <img src="images/m-blog-1.jpg" alt="background-image">
          </div>
          <h2>TAMAN NASIONAL BUNAKEN: SURGA BAWAH LAUT DENGAN PESONA TERUMBU KARANG</h2>
          <p>Taman Nasional Bunaken di Sulawesi Utara adalah surga menyelam dunia dengan lebih dari 390 jenis terumbu karang dan 2.000 spesies ikan,
             termasuk pari, hiu, dan kerapu. Destinasi ini menawarkan berbagai lokasi menyelam untuk semua tingkat keahlian, serta snorkeling, 
             perjalanan perahu kaca, dan pantai indah. Sebagai Taman Nasional, Bunaken berkomitmen pada konservasi ekosistem lautnya, 
             menjadikannya tempat yang wajib dikunjungi oleh pecinta alam dan penyelam.</p>
          <button><a href="https://digitani.ipb.ac.id/taman-nasional-bunaken-surga-bawah-laut-dengan-pesona-terumbu-karang/" >Read More</a></button>
        </div>
        <div class="card">
          <div class="imgs">
            <img src="images/m-blog-2.jpg" alt="background-image">
          </div>
          <h2>Menjelajahi Keindahan Bawah Laut Pulau Siladen, Surga Tersembunyi di Sulawesi Utara</h2>
          <p>Pulau Siladen di Sulawesi Utara adalah destinasi tersembunyi yang menawarkan keindahan alam bawah laut dan pantai eksotis. 
            Terletak di sebelah timur Pulau Bunaken, pulau ini dapat dicapai dengan perahu dari Pelabuhan Manado dalam 30-40 menit. 
            Pulau Siladen menyuguhkan air jernih, pasir putih lembut, dan terumbu karang alami dengan berbagai spesies ikan cantik. 
            Pengunjung dapat menikmati snorkeling, diving, serta bersantai di pantai yang tenang. Tersedia berbagai akomodasi mulai dari resort mewah hingga homestay sederhana. 
            Pulau ini juga terkenal dengan matahari terbenam yang menakjubkan, menjadikannya destinasi sempurna untuk liburan dan bersantai.</p>
            <button><a href="https://manadopost.jawapos.com/kapol/28613602/menjelajahi-keindahan-bawah-laut-pulau-siladen-surga-tersembunyi-di-sulawesi-utara" >Read More</a></button>
        </div>
        <div class="card">
          <div class="imgs">
            <img src="images/m-blog-3.jpg" alt="background-image">
          </div>
          <h2>Danau Tondano, Terluas di Sulawesi Utara</h2>
          <p>Inilah danau terluas di Sulawesi Utara. Danau ini berada di wilayah Tondano. 
            Menuju ke danau ini membutuhkan waktu 50 menit dengan jarak tempuh mencapai 40 km dari Kota Manado.</p>
            <button><a href="https://indonesiakaya.com/pustaka-indonesia/danau-tondano-terluas-di-sulawesi-utara/" >Read More</a></button>
        </div>
        <div class="card">
          <div class="imgs">
            <img src="images/m-blog-4.png" alt="background-image">
          </div>
          <h2>Air Terjun Tumimperas, Surga Tersembunyi Nan Eksotis di Tomohon</h2>
          <p>Air Terjun Tumimperas menjadi tempat berlibur wajib bagi wisatawan yang berada di Sulawesi Utara. 
            Kondisi sekitar air terjun masih sangat terjaga keasriannya, hal ini bisa dilihat dari jernihnya air yang mengalir, 
            bersihnya udara di sekitar air terjun dan lingkungan yang bersih tentunya.</p>
            <button><a href="https://www.celebes.co/air-terjun-tumimperas-tomohon" >Read More</a></button>
        </div>
      </div>
      <div class="container-side">
        <div class="sort-by">
          <div class="logo-side">
        </div>
        <div class="container-side-card">
          <h2 id="archive">archive</h2>
          <div class="card">
            <a href="">
              <img src="./images/side-1.png" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
          <div class="card">
            <a href="">
              <img src="./images/side-2.jpg" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
          <div class="card">
            <a href="">
              <img src="./images/side-3.png" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
          <div class="card">
            <a href="">
              <img src="./images/side-4.jpg" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
          <div class="card">
            <a href="">
              <img src="./images/side-3.png" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
          <div class="card">
            <a href="">
              <img src="./images/side-3.png" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
          <div class="card">
            <a href="">
              <img src="./images/side-3.png" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
          <div class="card">
            <a href="">
              <img src="./images/side-3.png" alt="place">
              <p>south sinai</p>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora voluptatum facilis
                totam. Perferendis omnis ad maiores tempora deserunt sunt.</span>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!-- start page -->
  <!-- start about us -->
  <div class="about-us" id="about us">
    <h2 class="shape">about us</h2>
    <div class="blog-content">
      <div class="card-container">
        <div class="card">
          <div class="imgs">
            <img src="images/Fotodaffa_nobackground.png" alt="new_place">
          </div>
          <div class="detalis">
            <h2>Daffa Nur Fiat</h2>
            <article>Haii, namaku Daffa, seorang mahasiswa informatika yang sehari-hari bergelut dengan kode dan algoritma. 
              Meski terlihat sibuk, jangan salah, aku ini bucin berat. Tiap kali bertemu kamu, 
              aku merasa seperti menemukan bug yang selama ini kucari—sebab dengan memilikimu, 
              hidupku jadi sempurna tanpa perlu debug lagi.</article>
            <div class="btns">
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgs">
            <img src="images/echaa.png" alt="new_place">
          </div>
          <div class="detalis">
            <h2>Reza Michelly Cantika Mawara</h2>
            <article>Haii, nama panggilanku Echa, seorang mahasiswa informatika yang sering kali tenggelam dalam dunia kode dan algoritma. 
              Saking sibuknya, kadang aku sampai lupa makan. Tapi anehnya, tiap kali melihat senyummu, aku merasa kenyang seketika, 
              seolah-olah cinta darimu adalah sumber energi terbaik yang pernah ada.</article>
            <div class="btns">
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgs">
            <img src="images/selvi .png" alt="new_place">
          </div>
          <div class="detalis">
            <h2>Selviana Wulandari</h2>
            <article>Halo, aku biasa dipanggil Selvi, seorang mahasiswa informatika yang sehari-harinya sibuk 
              mengutak-atik kode dan mengejar deadline tugas. Di tengah hiruk-pikuk algoritma dan struktur data, 
              ada satu hal yang selalu menjadi variabel konstan dalam hidupku, yaitu kekagumanku pada senyummu 
              yang bisa membuat dunia seakan berhenti sejenak.</article>
            <div class="btns">
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgs">
            <img src="images/flowrence.png" alt="new_place">
          </div>
          <div class="detalis">
            <h2>Florence Lowing</h2>
            <article>Halo, aku Florence, seorang mahasiswa informatika yang lebih sering berinteraksi dengan komputer daripada manusia. 
              Tapi meski sibuk dengan kode dan tugas, pacarku selalu jadi prioritas utama dan selalu ada di depan. Karena bagiku, 
              seperti program yang tak akan berjalan tanpa sintaks yang benar, hidupku juga tak akan sempurna tanpa kehadiranmu yang 
              selalu membuat hatiku berfungsi sempurna.</article>
            <div class="btns">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end about us -->
  
  <footer>
    <div class="footer-container">
      <div class="card">
        <div class="title">trasul</div>
        <p>Find the place you’ve always wanted to visit. Whether you’re looking for relaxation or excitement, 
          our platform offers a wealth of helpful information for trasul. Explore stunning destinations, 
          experience local culture, and create unforgettable memories. Let us guide you on your journey to the perfect vacation, 
          making sure every moment is exactly as you imagined. Enjoy the journey and find your dream vacation with us.</p>
      </div>
      <div class="card">
        <div class="title">Menu</div>
        <ul>
          <li><a href="">home</a></li>
          <li><a href="#category">Destination</a></li>
          <li><a href="#new">update</a></li>
          <li><a href="#page">article</a></li>
          <li><a href="#archive">archive</a></li>
          <li><a href="#about us">about us</a></li>
        </ul>
      </div>
      <div class="card">
        <div class="title">About us</div>
        <ul>
          <li><a href=""><i class="fa-solid fa-calendar-days"></i> made in, 2024</a></li>
          <li><a href="#"><i class="fa-solid fa-globe"></i> Indonesia</a></li>
          <li><a href="#"><i class="fa-solid fa-city"></i> Sulawesi Utara, Manado</a></li>
          <li><a href="#"><i class="fa-solid fa-phone"></i> +62895802929397</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>