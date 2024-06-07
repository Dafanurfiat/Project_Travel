<?php
session_start();
include('config.php');
if ($_SESSION['role'] != 0) {
    header("Location: login.php");
    exit();
}
$query1 = "SELECT * FROM tbl_destination";
$result1= $conn->query($query1);
$query = "SELECT * FROM tbl_artikel";
$result = $conn->query($query);

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
    <?php while ($row1= $result1->fetch_assoc()): ?>
      <div class="card">
        <div class="imgs">
          <img src="images/<?php echo $row1['foto']; ?>" alt="new_place">
        </div>
        
        <div class="detalis">
          <span><?php echo $row1['judul']; ?></span>
          <p>T<?php echo $row1['artikel']; ?></p>
          <div class="btns">
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      
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
        
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="card">
          <div class="imgs">
            <img src="images/<?php echo $row['foto']; ?>" alt="background-image">
          </div>
          <h2><?php echo $row['judul']; ?></h2>
          <p><?php echo $row['artikel']; ?></p>
            <button><a href="<?php echo $row['link']; ?>" >Read More</a></button>
        </div>
        <?php endwhile; ?>
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