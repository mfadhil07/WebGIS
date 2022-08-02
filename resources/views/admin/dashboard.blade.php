@extends('layouts.main')

@section('isi')
    <div class=" grid grid-cols-2 mr-2">
        <div class=" mt-10 ml-6">
            <h1 class="text-7xl font-bold font-fantasy text-green-700 text-left mt-8"> WEBGIS <span class="text-black">Objek
                    Wisata</span> Kabupaten </h1>
            <h1 class="text-7xl font-bold font-fantasy text-green-700 text-left"> Aceh Tengah</h1>
            <p class="text-bold font-sans mt-4 text-justify text-lg"> Beberapa objek wisata di Kabupaten Aceh Tengah adalah
                Danau Laut Tawar, Pantan Terong (atraksi pemandangan), dan Krueng Peusangan arum jeram.</p>
            <div class="mt-10 ml-4">
                <button class="btn btn-outline"> <a href="/a_daftar">Objek Wisata</a> </button>
                <button class="ml-3 btn btn-outline btn-secondary "> <a
                        href="https://id.wikipedia.org/wiki/Kabupaten_Aceh_Tengah">Kab. Aceh Tengah </a> </button>
            </div>
        </div>

        <div class="">
            <img class="ml-4 mt-4 mr-2 h-cover" src="/img/5.png">
        </div>
    </div>


    {{-- Card --}}
    <h1 class="ml-80 text-3xl font-semibold text-black mt-8"> Objek Wisata Disarankan</h1>
    <div class="grid grid-cols-3 gap-3 mt-3 ml-2 ">
        @foreach ($daftar as $item)
            <div class="flex justify-center ">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg hover:scale-110 transition duration-300 ease-in-out"
                            src="{{ $item->img }}" alt="" />
                    </a>
                    <div class="p-2">
                        <h5 class="text-black text-xl font-bold mb-2 ml-2">{{ $item->nama }}</h5>
                        <p class="text-black text-sm ml-1">
                            Alamat : Kec. {{ $item->kecamatan }}, Desa {{ $item->desa }}
                        </p>

                        <div class="flex items-start">
                            </svg> <span class="ml-1 text-sm text-black text-center"> Jam Buka - Tutup :
                                {{ $item->jam }}</span>
                        </div>
                        <div class="flex items-start">
                            </svg> <span class="ml-1 text-sm text-black text-center">Tiket Masuk :
                                {{ $item->tiket }}</span>
                        </div>
                        <div class="ml-1">
                            <p class="text-gray-900 font-semibold text-2sm "> Fasilitas Wisata : </p>
                            @foreach ($item->fasilitas as $fas)
                                <label class="inlie-flex items-center ml-2">
                                    <input disabled type="checkbox" class="form-checkbox h-4 w-4 text-green-600"
                                        checked><span class="ml-2 text-sm text-black">{{ $fas }}</span>
                                </label>
                            @endforeach
                            {{-- <div>
                                <p class="text-bold text-xl"> Total Pengunjung : {{ $pengunjung }}</p>
                            </div> --}}
                            <div class="ml-1">
                                <p class="text-sm"> Kategori Wisata :
                                    <button class="btn btn-sm text-xs btn-info mt-1">{{ $item->kategori }} </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Objek Wisata Air --}}
    <section class="w-full bg-gradient-to-br pl-2">
        <h1 class="mt-2 ml-4 mb-4 font-semibold text-3xl text-center"> Rekomendasi Objek Wisata <span
                class="text-green-500">Air / Bahari</span> </h1>
        <p class="max-w-2xl mx-auto my-6 text-center text-black dark:text-gray-300">
            Wisata bahari atau yang lebih dikenal dengan tirta secara sederhana dapat diartikan sebagai kegiatan wisata
            yang erat kaitannya air atau laut. Sehingga banyak sekali contoh pulau dan laut yang dikembangkan menjadi
            objek wisata bahari atau tirta di Indonesia.
        </p>

        <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
            <!-- Card 1 -->
            @foreach ($bahari as $item)
                <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                    <img class="h-56 lg:h-60 w-full object-cover" src="{{ $item->img }}" alt="" />
                    <div class="p-2">
                        <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                            {{ $item->nama }}
                        </h3>
                        <p class="paragraph-normal text-gray-600">
                            {{ $item->desa }}, {{ $item->kecamatan }}
                        </p>
                        <a class="mt-3 block" href="/detail/{{ $item->id }}"> Show </a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <section class="w-full bg-gradient-to-br pl-2">
        <h1 class="mt-2 ml-4 mb-4 font-semibold text-3xl text-center"> Rekomendasi Objek Wisata <span
                class="text-green-500">Pemandangan</span> </h1>
        <p class="max-w-2xl mx-auto my-6 text-center text-black dark:text-gray-300">
            Pemandangan alam merupakan keindahan alam yang dapat dipersepsikan melalui komponen mata dalam pancaindra
            manusia. Sketsa pemandangan alam dalam seni lukis biasanya terdiri dari komponen-komponen seperti pepohonan,
            semak-semak, daratan, bukit, lembah, air ataupun sejumlah benda buatan manusia contohnya rumah, jembatan, mobil
            dll
        </p>

        <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
            <!-- Card 1 -->
            @foreach ($pemandangan as $item)
                <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                    <img class="h-56 lg:h-60 w-full object-cover" src="{{ $item->img }}" alt="" />
                    <div class="p-2">
                        <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                            {{ $item->nama }}
                        </h3>
                        <p class="paragraph-normal text-gray-600">
                            {{ $item->desa }}, {{ $item->kecamatan }}
                        </p>
                        <a class="mt-3 block" href="/detail/{{ $item->id }}"> Show </a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <footer class="text-center bg-green-600 text-white">
        <div class="container px-6 pt-6">
            <div class="flex justify-center mb-6">
                <a href="#!" type="button"
                    class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                        class="w-2 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg>
                </a>

                <a href="#!" type="button"
                    class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                        class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                        </path>
                    </svg>
                </a>

                <a href="#!" type="button"
                    class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                        class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 488 512">
                        <path fill="currentColor"
                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                        </path>
                    </svg>
                </a>

                <a href="#!" type="button"
                    class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                        class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-whitehite" href="#">Objek Wisata Kabupaten Aceh Tengah</a>
        </div>
    </footer>
@endsection
