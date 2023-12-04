<img src="https://i.ibb.co/cCKK9JZ/logo-black.png">

# About
Script payment gateway crypto ini menggunakan Api dari <code>https://coinremitter.com/</code> untuk menggunakan api ini kamu harus membuat akun dan membuat wallet . dan gunakan API yang terdapat pada wallet sebagai credetial. hanya 2 hal yang dibutuhkan Api_key & password. silahkan buat 2 wallet (wallet seller & wallet buyer) anda bisa menggunakan coin TCN untuk melakukan debuging yang telah disediakan oleh coinremitter.com

# Flow script
<ul>
    <li>User melakukan checkout</li>
    <li>User melakukan pembayaran melalui link yang di hasilkan dari api</li>
    <li>user membuka halaman billing/daftar transaksi dan menggklik cek transaksi</li>
</ul>

# Note 
Perlu di pahami transaksi cyrpto tidak seperti transaksi perbankan atau emoney yang bisa dengan cepat di konfirmasi oleh sistem, crypto terkadang membutuhkan waktu yang cukup lama untuk mengkonfirmasi sebuah transaksi antar wallet. maka dari itu sebuah payment gateway dengan crypto menurut saya diberikan sebuah button untuk mengecek pembayaran secara berkala.

# Proses Checkout.
<img src="https://i.ibb.co/nssd24q/Shop-with-cyrpto.gif">
ketika user malakukan checkout sistem mengembalikan respon yang di dalam nya terdapat link payment anda bisa melakukan pembayaran di link tsb. namun setelah payment dilakukan jangan harap transaksi di konfirmasi dengan cepat, ini membutuhkan waktu , dan saya menyediakan button untuk melakukan cek secara berkala,

# Respon ketika Checkout
<img src="https://i.ibb.co/fHz7dMk/res-cehckout.png">


# User melakukan cek pembayaran
karena hanya sebagai contoh disini kita memasukan id transaksi manual pada link <code> http://127.0.0.1:8000/billing </code>, untuk kasus nyata hendak nya ini adalah halaman list transaksi user yang dimana harus login terlebih dahulu untuk mengecek nya. misal saya memasukan invoice_id BTC004 dan Api akan mengembalikan respon kembali.

# konfigurasi 
<img src="https://i.ibb.co/WkSkNWg/cong.png">

