## **AJARO INTERNSHIP TEST**
2019 (c) Program Pengelolaan Barang. Program pengelolaan barang yang dibuat dengan framework laravel. Program ini dibuat oleh [https://instagram.com/_reassn](Andreas Novyanto) sebagai bentuk persyaratan mengikuti program internship yang diadakan oleh **AJARO**. Untuk tampilan frontend menggunakan **Bootstrap v4**.

## **Struktur Database**

# **Barang**
| barangs                    |
| :------------------------- |
| id int (11) auto increment |
| kode varchar (8)           |
| nama varchar (50)          |
| deskripsi text             |
| stok numberic (5,2)        |
| harga numberic (12,2)      |
| berat numberic (5,2)       |
| timestamps                 |

## **Cara Menggunakan**
1. git clone pada andnov/ajaro-internship-test.
2. import *database\barangs.sql* pada database server anda.
3. edit file *.env* sesuaikan dengan yang anda miliki.
4. composer update
5. npm i
6. php artisan serve

## **Lisensi**
MIT License
