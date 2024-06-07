<?php
session_start();
require 'config.php'; // Menghubungkan ke database

// Cek apakah user sudah login
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $conn->real_escape_string($_POST['judul']);
    
    $target_dir = "uploads/"; // Direktori penyimpanan gambar
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file gambar adalah gambar asli atau bukan
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        echo "<script>alert('File is not an image.'); window.location.href='admin.php';</script>";
        $uploadOk = 0;
    }

    // Cek jika file sudah ada
    if (file_exists($target_file)) {
        echo "<script>alert('Sorry, file already exists.'); window.location.href='admin.php';</script>";
        $uploadOk = 0;
    }

    // Batasi ukuran file (contoh: 5MB)
    if ($_FILES["foto"]["size"] > 5000000) {
        echo "<script>alert('Sorry, your file is too large.'); window.location.href='admin.php';</script>";
        $uploadOk = 0;
    }

    // Batasi format file yang diperbolehkan
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {

        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); window.location.href='admin.php';</script>";
        $uploadOk = 0;
    }

    // Cek jika $uploadOk adalah 0 karena kesalahan
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.'); window.location.href='admin.php';</script>";
        
    } else {
        // Jika semua oke, coba upload file
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            // Simpan data ke database
            $sql = "INSERT INTO tbl_destiantion (judul, foto) VALUES ('$judul', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Resep berhasil disimpan.'); window.location.href='admin.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
               
            }
        } else {
        
        }
    }
}
?>
