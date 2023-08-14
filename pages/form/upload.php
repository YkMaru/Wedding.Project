<?php
if(isset($_POST['submit'])) {

   echo 'cek nama file --> '. $_FILES['file']['file_foto_pria']; die;

    $uploadDir = 'uploads/'; // Direktori tujuan penyimpanan file
    $uploadedFile = $uploadDir . basename($_FILES['file']['name']);
    
    // Cek apakah file gambar yang diunggah adalah gambar
    $imageFileType = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION));
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    
    if(in_array($imageFileType, $allowedExtensions)) {
        // Pindahkan file ke direktori penyimpanan
        if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    } else {
        echo "Hanya file gambar (JPG, JPEG, PNG, GIF) yang diizinkan.";
    }
}
?>
