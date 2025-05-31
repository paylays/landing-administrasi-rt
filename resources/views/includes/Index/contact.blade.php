<div class="lg:col-span-8">
    <div class="p-6 rounded-md shadow-sm bg-white dark:bg-slate-900">
        <form method="POST" action="#" name="myForm" id="myForm">
            @csrf
            <p class="mb-0" id="error-msg"></p>
            <div id="simple-msg"></div>
            <div class="grid lg:grid-cols-12 lg:gap-6">
                <div class="lg:col-span-6 mb-5">
                    <input name="name" id="name" type="text" class="form-input w-full py-2 px-3 border bg-white text-slate-400 border-gray-200 dark:border-gray-800 focus:ring-0 focus:border-orange-600/50 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none" placeholder="Name :">
                </div>

                <div class="lg:col-span-6 mb-5">
                    <input name="email" id="email" type="email" class="form-input w-full py-2 px-3 border bg-white text-slate-400 border-gray-200 dark:border-gray-800 focus:ring-0 focus:border-orange-600/50 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none" placeholder="Email :">
                </div><!--end col-->
            </div>

            <div class="grid grid-cols-1">
                <div class="mb-5">
                    <input name="subject" id="subject" class="form-input w-full py-2 px-3 border bg-white text-slate-400 border-gray-200 dark:border-gray-800 focus:ring-0 focus:border-orange-600/50 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none" placeholder="Subject :">
                </div>

                <div class="mb-5">
                    <textarea name="comments" id="comments" class="form-input w-full py-2 px-3 border bg-white text-slate-400 border-gray-200 dark:border-gray-800 focus:ring-0 focus:border-orange-600/50 dark:bg-slate-900 dark:text-slate-200 rounded h-28 outline-none textarea" placeholder="Message :"></textarea>
                </div>
            </div>
            <button type="submit" id="submit" name="send" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md h-11 justify-center flex items-center">Send Message</button>
        </form>
    </div>
</div>

<div class="lg:col-span-4">
    <div class="lg:ms-8">
        <div class="flex">
            <div class="icons text-center mx-auto">
                <i class="uil uil-phone block rounded text-2xl text-slate-400 dark:text-white mb-0"></i>
            </div>

            <div class="flex-1 ms-6">
                <h5 class="text-lg text-slate-400 dark:text-white mb-2 font-medium">No. Whatsapp</h5>
                <a href="tel:081234567890" class="text-slate-400">081234567890</a>
            </div>
        </div>

        <div class="flex mt-4">
            <div class="icons text-center mx-auto">
                <i class="uil uil-envelope block rounded text-2xl text-slate-400 dark:text-white mb-0"></i>
            </div>

            <div class="flex-1 ms-6">
                <h5 class="text-lg text-slate-400 dark:text-white mb-2 font-medium">Email</h5>
                <a href="mailto:10221081@student.itk.ac.id" class="text-slate-400">10221081@student.itk.ac.id</a>
            </div>
        </div>

        <div class="flex mt-4">
            <div class="icons text-center mx-auto">
                <i class="uil uil-map-marker block rounded text-2xl text-slate-400 dark:text-white mb-0"></i>
            </div>

            <div class="flex-1 ms-6">
                <h5 class="text-lg text-slate-400 dark:text-white mb-2 font-medium">Lokasi</h5>
                <p class="text-slate-400 mb-2">Jl. Wonorejo No.10 RT.36</p>
            </div>
        </div>
    </div>
</div>