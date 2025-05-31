<!-- resources/views/blog-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Blog-Detail Page')

@section('content')

@include('includes.navbar')


<!-- Hero Start -->
<section class="py-28 w-full table relative bg-top bg-no-repeat" style="background-image: url('{{ asset('assets/images/pengumuman-detail/pengumuman detail.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/80"></div>

    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 font-medium leading-normal text-3xl mt-10 text-white">
                {{ $pengumuman->judul }}
            </h3>

            <ul class="list-none mt-6">
                <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Tanggan Publish :</span> <span class="block">{{ $pengumuman->tanggal_publish ?? 'Tidak diketahui'}}</span></li>
                <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Penulis :</span> <span class="block">{{ $pengumuman->admin->name ?? 'Tidak diketahui' }}</span></li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <nav class="text-sm" aria-label="Breadcrumb">
            <ol class="list-reset flex text-gray-600 dark:text-gray-400">
                <li>
                    <a href="{{ url('/') }}" class="hover:text-orange-600 dark:hover:text-orange-500">Beranda</a>
                </li>
                <li><span class="mx-2">/</span></li>
                <li>
                    <a href="{{ url('/#pengumuman') }}" class="hover:text-orange-600 dark:hover:text-orange-500">Pengumuman</a>
                </li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 dark:text-white" aria-current="page">
                    Detail
                </li>
            </ol>
        </nav>
            <div class="lg:col-span-12 md:col-span-12">
                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800">

                    <img src="{{ env('APP_DASHBOARD_URL') . '/cover/' . basename($pengumuman->cover) }}" class="rounded-md w-full h-auto" alt="{{ $pengumuman->judul }}">

                    <div class="mt-6">
                        <p class="text-slate-400">{!! $pengumuman->isi !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End -->

@endsection