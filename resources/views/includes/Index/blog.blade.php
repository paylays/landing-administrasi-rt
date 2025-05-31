@forelse ($pengumumans as $item)
    <div class="blog relative rounded-md shadow-sm shadow-slate-200 dark:shadow-slate-800 overflow-hidden">
        <img src="{{ env('APP_DASHBOARD_URL') . '/cover/' . basename($item->cover) }}" class="w-full h-56 object-cover" alt="{{ $item->judul }}">

        <div class="content p-6">
            <a href="#" class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium">
                {{ $item->judul }}
            </a>
            <p class="text-slate-400 mt-3 line-clamp-3">
                {{ Str::limit(strip_tags($item->isi), 100, '...') }}
            </p>

            <div class="mt-5">
                <a href="{{ route('pengumuman.detail', $item->id) }}" class="btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500">
                    Selengkapnya <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
@empty
    <p class="text-center text-slate-400 col-span-3">Belum ada pengumuman yang tersedia.</p>
@endforelse
