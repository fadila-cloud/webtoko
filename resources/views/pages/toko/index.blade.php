<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Toko') }}
      </h2>
    </x-slot>
    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
          <div class="row pb-2">
            <div class="col">
              <h2 class="fs-2 fw-bold">Anda telah membuat toko</h2>
            </div>
            <div class="col text-end">
              <a class="btn btn-info" href="{{ route('toko.create') }}">Buat Toko</a>
            </div>
          </div>
          <table class="table table-bordered">
            <thead class="text-center">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Toko</th>
              <th scope="col">Lokasi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($datas as $data)
              <tr>
                <th class="text-center">
                  <a href="{{ route('toko.show',$data['id']) }}">
                    <p>
                      {{ $data['id'] }}
                    </p>
                  </a>
                </th>
                <th>
                  <p>
                    {{ $data['nama_toko'] }}
                  </p>
                </th>
                <td>
                  <p>
                    {{ $data['lokasi'] }}
                  </p>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </x-app-layout>