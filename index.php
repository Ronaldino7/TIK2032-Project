<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Ronaldino Kaunang</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Selamat datang di Website Saya Ronaldino Kaunang 230211060103</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- HOME -->
        <section id="home">
            <h2>Halaman Utama</h2>
            <p>Ini adalah halaman pembuka website saya. Kami menyajikan konten tentang berbagai topik menarik.</p>
            <img src="gambar gallery/images5.jpeg" alt="Gambar Ilustrasi" class="gambar-ilustrasi">
        </section>

        <!-- GALLERY -->
        <section id="gallery">
            <h2>Gallery</h2>
            <img src="gambar gallery/What-is-Coding.jpg" alt="What is Coding?" width="300">
            <img src="gambar gallery/images.jpeg" alt="Code Image 1" width="300">
            <img src="gambar gallery/images 3.jpeg" alt="Code Image 2" width="300">
        </section>

        <!-- BLOG -->
        <section id="blog">
            <h2>Blog Teknik Informatika</h2>
            <?php
        $sql = "SELECT title, content FROM blog";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<article class="article fade-target">';
                echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
                echo '<p>' . htmlspecialchars($row['content']) . '</p>';
                echo '</article>';
            }
        } else {
            echo '<p>No posts available.</p>';
        }
        mysqli_close($conn);
        ?>
            
        </section>

        <!-- CONTACT -->
        <section id="contact">
            <h2>Hubungi Kami</h2>
            <p>Silakan isi formulir di bawah ini jika Anda ingin menghubungi kami atau menyampaikan keluhan.</p>
            <form action="#terkirim" method="GET">
                <label for="name">Nama Pengguna:</label>
                <input type="text" id="name" name="name" required placeholder="Masukkan nama Anda">
                
                <label for="complaint">Keluhan:</label>
                <textarea id="complaint" name="complaint" rows="4" required placeholder="Masukkan keluhan atau pertanyaan Anda"></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </section>

        <!-- Pesan setelah terkirim -->
        <section id="terkirim">
            <h2>Terima kasih!</h2>
            <p>Pesan Anda telah dikirim.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Website Ronaldino Kaunang. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
