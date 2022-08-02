@extends('layouts.main')

@section('isi')
    <h1 class="text-2xl mt-4 ml-4 font-semibold"> Daftar Wisata Aceh Tengah </h1>
    <form class="flex justify-end" action="/daftar">
        <div class="absolute border-2 w-1/4 rounded-btn mt-1">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="search" id="search" name="search"
                class="block p-4 pl-10 w-full items-end text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                placeholder="Search" required value="{{ request('search') }}">
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
        </div>
    </form>
    <div class="mt-20 ">
        <table class="min-w-full m-2 mt-6 bg-green-500">
            <thead class="w-full">
                <tr>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-100  tracking-wider">
                        Nama Objek Wisata</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-100  tracking-wider">
                        Kecamatan</th>
                    <th
                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-100  tracking-wider">
                        Desa</th>
                    <th
                        class="pl-3  py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-100  tracking-wider">
                        Kategori Wisata</th>
                    <th
                        class="pl-3  py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-100  tracking-wider">
                        Action</th>
                </tr>
            </thead>
            <tbody class="bg-white w-full">
                @foreach ($daftar as $d)
                    <tr class="w-full">
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-black-900"> {{ $d->nama }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5">
                            {{ $d->kecamatan }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5">
                            {{ $d->desa }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5">
                            <button class="btn btn-xs btn-info">{{ $d->kategori }}</button>
                        </td>
                        <td
                            class="pl-2 pr-2 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5">
                            <button class="btn btn-sm btn-primary btn-outline"><a
                                    href="/detail/{{ $d->id }}">Show</a></button>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-10 mb-10 ml-6 pr-6">
        {{ $daftar->links() }}
    </div>
@endsection
