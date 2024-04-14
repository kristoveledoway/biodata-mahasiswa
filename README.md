# Laravel 11 - Biodata Mahasiswa

Halo semuanya, selamat datang di Project Laravel 11 - Biodata Mahasiswa. Di mana teman-teman bisa mengggunakankan nya.
Project ini adalah hasil yang didapat dari [playlist yang ada di YouTube Saya](https://youtube.com/playlist?list=PL22C6RtPW_Mfib91wodEkgu-LUBJwcxdS&si=Sehi_iZGahU3kvAL)

Daftar Isi

- [Kebutuhan](#kebutuhan)
- [Langkah Menjalankan](#menjalankan)

## Development

### Kebutuhan

Beberapa hal yang diperlukan untuk menjalankan project ini di lokal teman-teman:

- PHP
- SQLite
- Composer

### Menjalankan

Silakan **fork** dulu project ini di **REPOSITORY yang teman-teman punya** 
Clone project dari repo yang teman-teman punya

```
git clone https://github.com/{username github teman-teman}/laravel-portfolio-project.git
cd laravel-portfolio-project
```

Jalan terminal dengan perintah:

```
composer install && composer update
```

Lanjut copy file <code>.env.example</code> dengan nama <code>.env</code>. Kemudian edit beberapa di file berikut ini:

Terkait database:

```
DB_CONNECTION=sqlite
DB_HOST=xxx
DB_PORT=xxx
DB_DATABASE=xxx
DB_USERNAME=xxx
DB_PASSWORD=xxx
```

Lanjut lakukan proses migrate melalui terminal

```
php artisan migrate
```

Lanjut, generate key

```
php artisan key:generate
```

Jalankan project dengan perintah

```
php artisan serve
```

Silakan dibuka di <code>http://127.0.0.1:8000</code>

Link :

```
1. Laravel 11 Doc : https://laravel.com/docs/11.x
2. Visual Studio Code Download : https://code.visualstudio.com/Download
3. Composer Download : https://getcomposer.org/download/
4. Gitbash Download : https://git-scm.com/downloads
```

Terima kasih.
