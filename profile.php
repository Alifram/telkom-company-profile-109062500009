<?php
$pageTitle = 'Profil - Telkom University';
require 'includes/header.php';
?>

<section class="section">
    <div class="container article-body">
        <span class="eyebrow">Profil</span>
        <h1>Tentang proyek simulasi Telkom University</h1>
        <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer bersama.</p>

        <h2>Visi pembelajaran</h2>
        <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.</p>

        <h2>Tujuan proyek</h2>
        <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p>

        <div class="alert alert-success">Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.</div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Fokus Pembelajaran</span>
            <h2>Tiga fokus utama praktikum</h2>
        </div>

        <div class="grid-3">
            <article class="card">
                <h3>PHP Native</h3>
                <p>
                    Memahami logika server-side dan pengolahan data
                    menggunakan PHP native.
                </p>
            </article>

            <article class="card">
                <h3>Database</h3>
                <p>
                    Menghubungkan aplikasi dengan MySQL/MariaDB
                    untuk menyimpan dan mengambil data.
                </p>
            </article>

            <article class="card">
                <h3>Git & GitHub</h3>
                <p>
                    Mempraktikkan version control melalui commit,
                    branch, merge, dan repository remote.
                </p>
            </article>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>