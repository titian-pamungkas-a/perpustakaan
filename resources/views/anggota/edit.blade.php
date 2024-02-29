@extends('layouts.app')

@section('title', 'Edit Anggota Perpustakaan')

@section('content')
<div class="container my-12 mx-auto px-4 ">
    

    @if($errors->any())
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-300 dark:text-gray-800" role="alert">
          <span class="font-medium">{{$errors}}</span>
        </div>
      @endif
    <form class="max-w-sm" action="{{route('anggota.update', $anggota->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama Lengkap</label>
            <input type="text" id="name"  name="name" class="bg-white border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-gray-900 dark:focus:border-gray-900" value="{{$anggota->name}}" placeholder="Budi Tabuti" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Email</label>
            <input type="email" id="email" name="email" class="bg-white border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-gray-900 dark:focus:border-gray-900" value="{{$anggota->email}}"  placeholder="buditabuti@gmail.com" required/>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">No. HP</label>
            <input type="tel" pattern="[0-9]{10,13}" id="hp" name="hp" class="bg-white border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-gray-900 dark:focus:border-gray-900" value="{{$anggota->hp}}"  placeholder="082456909909" required/>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Alamat</label>
            <input type="text" id="address" name="address" class="bg-white border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-gray-900 dark:focus:border-gray-900" value="{{$anggota->address}}" placeholder="Jalan Keputih Barat 24, Jakarta" required/>
        </div>
        {{-- <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Your password</label>
            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div> --}}
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-300">Edit</button>
    </form>
  
</div>
@endsection
