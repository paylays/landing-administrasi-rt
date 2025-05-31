<!-- resources/views/index-seven.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Seven Page')

@section('content')

@include('includes.navbar')

<section class="py-36 md:h-screen h-auto items-center flex relative" id="beranda" style="background-image: url('{{ asset('assets/images/hero/hero-rt.jpeg') }}');">
    <div class="absolute inset-0 bg-slate-900/90"></div>
    <div class="container relative">
        <div class="grid grid-cols-1">
            <h4 class="text-white lg:text-5xl text-4xl lg:leading-normal leading-normal font-medium mb-7 position-relative">Selamat Datang di Website RT 36 <br>Kelurahan Gunung Samarinda <br><span class="typewrite relative text-type-element" data-period="2000" data-type='[ "Kecamatan", "Balikpapan", "Selatan", "76125" ]'></span></h4>
        
            <p class="text-white opacity-50 mb-0 max-w-2xl text-lg">Portal informasi dan pelayanan untuk warga RT 05. Dapatkan update kegiatan, ajukan surat, dan berpartisipasi membangun lingkungan yang harmonis.</p>
        
            <div class="relative mt-10">
                <a href="#tentang-kami" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md">Tentang Kami</a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="tentang-kami">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 gap-10 items-center">
           
            <!-- includes/Index/about.blade.php -->
            @include('includes.Index.about')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-24 w-full table relative bg-center bg-cover" style="background-image: url('{{ asset('assets/images/cta/cta-rt.jpeg') }}');">
    <div class="absolute inset-0 bg-slate-900/80"></div>
    <div class="container relative">
        
        <!-- includes/Index/cta.blade.php -->
        @include('includes.Index.cta')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="pengurus">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Struktur Pengurus</h6>
            <h3 class="mb-4 md:text-2xl text-xl font-medium text-slate-900 dark:text-white">Pengurus RT.36</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Berikut adalah susunan pengurus RT 36 Kelurahan Gunung Samarinda Baru yang bertugas membantu warga dalam urusan administrasi dan kegiatan kemasyarakatan.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 mt-8">
                        
            <!-- includes/Index/team.blade.php -->
            @include('includes.Index.team')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16" id="pengumuman">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Pengumuman RT 36</h6>
            <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">Berita dan Informasi Terbaru</h3>

            <p class="text-slate-400 max-w-xl mx-auto">
                Temukan informasi terbaru seputar kegiatan, pemberitahuan penting, dan agenda rutin di lingkungan RT Anda. Semua pengumuman resmi ditampilkan di sini untuk memastikan transparansi dan kemudahan akses bagi seluruh warga.
            </p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6 mt-8">
                
            <!-- includes/Index/blog.blade.php -->
            @include('includes.Index.blog')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="hubungi-kami">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Hubungi Kami</h6>
            <h3 class="mb-4 md:text-2xl text-xl font-medium text-slate-900 dark:text-white">Get In Touch !</h3>

            <p class="text-slate-400 max-w-xl mx-auto"> 
                Jika Anda memiliki pertanyaan, membutuhkan bantuan pengajuan surat, atau ingin menyampaikan aspirasi terkait lingkungan RT 36 Kelurahan Gunung Samarinda Baru,
                jangan ragu untuk menghubungi kami. Kami siap membantu dan melayani Anda dengan sepenuh hati.
                Silakan gunakan kontak di bawah ini atau kirim pesan melalui formulir yang tersedia.
            </p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 mt-8 items-center gap-6">
                
            <!-- includes/Index/contact.blade.php -->
            @include('includes.Index.contact')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endsection