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