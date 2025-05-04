@extends('layouts.main')

@section('content')
<section class="profile" style="padding: 40px 20px; max-width: 1000px; margin: auto;">
    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 20px;">Profil Perusahaan</h2>

    <div style="text-align: center; margin-bottom: 30px;">
        <p style="font-size: 1.1rem; color: #555;">
            <strong>MOTUL</strong> adalah perusahaan global asal Prancis yang didirikan pada tahun 1853 dan mengkhususkan diri dalam formulasi, produksi, dan distribusi pelumas berkinerja tinggi untuk berbagai jenis mesin, termasuk sepeda motor, mobil, kendaraan berat, dan industri
        </p>
        <p style="font-size: 1.1rem; color: #555;">
            Kami berusaha untuk mencapai kinerja dan perlindungan yang luar biasa bagi pelanggan kami di lebih dari 160 negara. Pada tahun 1971, kami meluncurkan pelumas multigrade sintetik murni pertama yg mengintegrasikan teknologi Ester Core, melalui "produk andalan" kita: Motul 300V. Kami memproduksi pelumas acuan untuk segala jenis mesin dan aktif berinovasi untuk mengembangkan fluida baru.
        </p>
    </div>

    <div style="background: #f9f9f9; padding: 25px; border-radius: 10px; margin-bottom: 30px;">
        <h3 style="color: #007BFF; margin-bottom: 15px;">Layanan Unggulan Kami</h3>
        <ul style="list-style: none; padding-left: 0; font-size: 1.05rem; color: #444;">
            <li style="margin-bottom: 10px;">✔️ Pelumas Berkualitas Tinggi</li>
            <li style="margin-bottom: 10px;">✔️ Produk Khusus Motorsport</li>
            <li style="margin-bottom: 10px;">✔️ Produk Perawatan Kendaraan</li>
            <li style="margin-bottom: 10px;">✔️ Asuransi Motul</li>
        </ul>
    </div>

    <p style="font-size: 1.1rem; color: #555; text-align: center;">
        Layanan unggulan Motul meliputi beragam pelumas berkualitas tinggi untuk berbagai jenis kendaraan, dari oli mesin, cairan rem, hingga oli transmisi. Motul juga menawarkan berbagai produk khusus untuk motorsport dan balap, serta berbagai produk perawatan kendaraan.
    </p>

    <div style="text-align: center; margin-top: 30px;">
        <img src="{{ asset('images/galeri0.jpg') }}" alt="Desain Interior Kami"
             style="width: 100%; max-width: 700px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    </div>
</section>
@endsection
