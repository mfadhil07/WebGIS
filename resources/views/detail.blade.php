@extends('layouts.main')

@section('isi')
    <h1 class="mt-8 ml-10 text-3xl font-bold"> Detail Objek Wisata</h1>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="3071a3ad-db4a-4cbe-ac9a-47850b69e4b7" x="0" y="0" width=".135"
                                height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#3071a3ad-db4a-4cbe-ac9a-47850b69e4b7)" width="52" height="24"></rect>
                    </svg>
                </span>
                {{ $daftar->nama }}
            </h2>
            <p class="text-base text-gray-700 md:text-lg font-semibold">
                Alamat : Desa {{ $daftar->desa }} , Kec. {{ $daftar->kecamatan }}
            </p>
        </div>
        <div class="grid max-w-screen-lg gap-8 lg:grid-cols-2 sm:mx-auto">
            <div class="flex flex-col justify-center">
                <div class="flex">
                    <div class="ml-6 text-lg">
                        <h6 class="mb-2 font-semibold leading-5">
                            Jam Buka - Tutup : <span>
                                {{ $daftar->jam }}
                        </h6>
                        <hr class="w-full my-2 border-gray-300" />
                        <h6 class="mb-2 font-semibold leading-5">
                            Tiket Masuk : {{ $daftar->tiket }}
                        </h6>
                        <hr class="w-full my-2 border-gray-300" />

                        <h6 class="mb-2 font-semibold leading-5">
                            Kategori Wisata : <button class="btn btn-xs btn-info"> {{ $daftar->kategori }}</button>
                        </h6>
                        <hr class="w-full my-2 border-gray-300" />
                    </div>
                </div>
                <div class="flex">
                    <div class="ml-6 text-lg">

                        <h6 class="mb-2 font-semibold leading-5">Fasilitas Wisata :</h6>
                        <p class="text-sm text-gray-900">
                            @foreach ($daftar->fasilitas as $fas)
                                <label class="inlie-flex items-center ml-2">
                                    <input disabled type="checkbox" class="form-checkbox h-4 w-4 text-green-600"
                                        checked><span class="ml-2 text-sm text-black">{{ $fas }}</span>
                                </label>
                            @endforeach
                        </p>
                        <hr class="w-full my-4 border-gray-300" />
                    </div>
                </div>
                <div class="flex">
                    <div class="ml-6 text-lg">
                        <h6 class="mb-2 font-semibold leading-5">Deskripsi :</h6>
                        <p class="text-sm text-gray-900">
                            {{ $daftar->deskripsi }}
                        </p>
                        <hr class="w-full my-6 border-gray-300" />
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5">
                <img class="object-cover w-full h-56 col-span-2 rounded shadow-lg" src="/{{ $daftar->img }}"
                    alt="" />
                @foreach ($daftar->image as $daf)
                    <img class="object-cover w-full h-48 rounded shadow-lg" src="/{{ $daf->image }}" alt="" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
