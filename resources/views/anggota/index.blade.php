@extends('layouts.app')

@section('title', 'Anggota Perpustakaan')

@section('content')

<div class="container my-12 mx-auto px-4 ">
    <section class="mb-20 text-gray-800">
      @if(Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-300 dark:text-gray-800" role="alert">
          <span class="font-medium">Berhasil!</span> {{Session::get('success')}}
        </div>
      @endif
      <a href="{{route('anggota.create')}}">
        <button type="button" class="text-white bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-grey-800 dark:hover:bg-grey-700 focus:outline-none dark:focus:ring-gray-300">
          Tambah Anggota
        </button>
      </a>
      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">          
            <div class="inline-block min-w-full sm:px-6 lg:px-8 p-2">
              <div class="overflow-hidden">
                <table class="min-w-full mb-0">
                  <thead class="border-b rounded-t-lg text-left bg-gray-800">
                    <tr>
                      <th scope="col" class="text-white rounded-tl-lg text-sm font-medium px-6 py-4">NAMA</th>
                      <th scope="col" class="text-white text-sm font-medium px-6 py-4">EMAIL</th>
                      <th scope="col" class="text-white text-sm font-medium px-6 py-4">NO. HP</th>
                      <th scope="col" class="text-white text-sm font-medium px-6 py-4">ALAMAT</th>
                      <th scope="col" class="text-white rounded-tr-lg text-sm font-medium px-6 py-4"></th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- Data Anggota Perpustakaan --}}
                    @if ($anggotas->count()>0)
                        @foreach ($anggotas as $anggota)
                        <tr class="border-b">
                          <th class="text-sm font-medium px-6 py-4 whitespace-nowrap text-left" scope="row">{{$anggota->name}}</th>
                          <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left text-gray-500">{{$anggota->email}}</td>
                          <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left text-gray-500">{{$anggota->hp}}</td>
                          <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left text-gray-500">{{Str::limit($anggota->address, 15)}}</td>
                          <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-right">
                              <div class="inline-flex rounded-md shadow-sm">
                                  <a href="{{route('anggota.show', $anggota->id)}}" aria-current="page" class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                      Lihat
                                  </a>
                                  <a href="{{route('anggota.edit', $anggota->id)}}" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                      Edit
                                  </a>
                                  <form action="{{route('anggota.delete', $anggota->id)}}" method="POST" onsubmit="return confirm('Delete?')" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                      @csrf
                                      @method('DELETE')
                                      <button>Hapus</button>
                                  </form>
                                  
                              </div>
                          </td>
                      </tr>
                        @endforeach
                    @else
                        <tr>
                          <td class="px-6 py-4 text-center" colspan="5">Anggota tidak ada</td>
                        </tr>
                    @endif
                        
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-5">
        {{$anggotas->onEachSide(1)->links()}}
      </div>
    </section>
  </div>
@endsection