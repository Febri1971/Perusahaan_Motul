@extends('layouts.main')

@section('content')
<section class="gallery">
    <h2>Galeri Perusahaan Motul</h2>

    <p>Berikut adalah beberapa hasil acara dan event dari Motul.</p>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="{{ asset('images/galeri1.jpg') }}" alt="Desain Meja Makan">
            <p></p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/galeri5.jpg') }}" alt="Interior Kantor Elegan">
            <p></p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/galeri4.jpg') }}" alt="Kamar Tidur Nyaman">
            <p></p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/galeri6.jpg') }}" alt="Dapur Mewah">
            <p></p>
        </div>
    </div>
</section>
@endsection
