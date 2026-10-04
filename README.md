## Penyelesaian Merge Conflict

Pada praktikum BAB 12, dilakukan simulasi merge conflict pada file
`includes/header.php`.

Conflict dibuat dengan mengubah label menu `Profil` menjadi nilai yang
berbeda pada dua branch:

- Branch `main`: `Tentang Kampus`
- Branch `conflict-navbar`: `Tentang Kami`

Saat branch `conflict-navbar` di-merge ke `main`, Git menghasilkan
conflict karena kedua branch mengubah bagian yang sama pada file
`includes/header.php`.

Conflict diselesaikan dengan memilih teks `Tentang Kampus` dan
menghapus conflict marker Git (`<<<<<<<`, `=======`, `>>>>>>>`).

Commit penyelesaian conflict:

`5535519 fix: selesaikan conflict pada label profil`

Riwayat conflict dapat diperiksa dengan:

git log --oneline --graph --decorate --all
Praktikum diuji melalui dua folder kerja untuk mensimulasikan kolaborasi Git.
## Riwayat Praktikum Git

Output `git log --oneline --graph --decorate --all`:

    * 44a4a26 (HEAD -> main, origin/main, origin/HEAD) docs: tambahkan catatan simulasi dua folder
    * 9aaf32c docs: dokumentasikan penyelesaian merge conflict
    *   5535519 fix: selesaikan conflict pada label profil
    |\
    | * 2a597ca (conflict-navbar) feat: ubah label profil pada branch conflict
    * | cc54539 style: ubah label profil pada main
    |/
    * 8d4f752 (feature-campus-info) feat: tambahkan informasi fokus pembelajaran
    * cef8e32 feat: tambahkan form admin lokal untuk berita
    * ef88dae feat: simpan pesan kontak ke database
    * 78521b6 feat: tambahkan daftar dan detail berita
    * 27d649c feat: hubungkan database dan tampilkan program studi
    * ec7d5f7 feat: tambahkan layout dasar dan stylesheet
    * 3b193e6 chore: inisialisasi project dan dokumentasi awal
