@extends('layouts.main')

@section('content')
<section class="contact">
    <h2>Hubungi Kami</h2>
    <p>Silakan hubungi kami melalui formulir di bawah ini untuk pertanyaan, kerja sama, atau konsultasi.</p>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <div class="contact-wrapper">
        <!-- Form Kontak -->
        <div class="contact-form">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" rows="5" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>

        <!-- Info Kontak -->
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p><strong>Alamat:</strong><br> Jl. HR. Rasuna Said Blok X-2 Kav.6. Jakarta 12950</p>
            <p><strong>Email:</strong><br> marketing@motul.co.id</p>
            <p><strong>Telepon:</strong><br> Fax: (+33) 1 48 33 28 79</p>
        </div>
    </div>
</section>
@endsection
