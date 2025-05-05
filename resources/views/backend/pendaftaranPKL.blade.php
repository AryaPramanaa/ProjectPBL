@extends('layouts.dashboardBE')
{{-- @section('navPenPKL', 'active') --}}

@section('content')
    <h1 class="text-xl font-semibold text-center mb-5">PENDAFTARAN PKL</h1>
    <a href="/C_PendaftaranPKL" class="border-2 border-gray-950 py-2 px-4 rounded-lg bg-slate-950 text-slate-50 hover:bg-slate-800">Daftar</a>
   
    <div class="overflow-auto rounded-xl shadow-lg mt-5">
        <table class="w-full ">
            <!-- head -->
            <thead class="bg-gray-200 border-b-2 border-gray-200" >
                <tr>
                    <th class="px-6 py-4 text-center text-xs font-bold text-gray-900 uppercase tracking-wider whitespace-nowrap ">NO</th>
                    <th class="px-6 py-4 text-center text-xs font-bold text-gray-900 uppercase tracking-wider whitespace-nowrap">NAMA</th>
                    <th class="px-6 py-4 text-center text-xs font-bold text-gray-900 uppercase tracking-wider whitespace-nowrap">PERUSAHAAN PKL</th>
                    <th class="px-6 py-4 text-center text-xs font-bold text-gray-900 uppercase tracking-wider whitespace-nowrap">STATUS</th>
                    <th class="px-6 py-4 text-center text-xs font-bold text-gray-900 uppercase tracking-wider whitespace-nowrap">AKSI</th>
                </tr>
            </thead>
            <tbody  class=" divide-y divide-gray-200" >
                <!-- row 1 -->
                @foreach ($mahasiswas as $student)
                    <tr class="{{ $loop->odd ? 'bg-white':'bg-gray-50' }}">
                        <td class="px-6 py-5 whitespace-nowrap text-sm font-semibold text-gray-500 text-center">{{ $loop->index+1   }}</td>
                        <td class="px-6 py-5 whitespace-nowrap text-sm font-semibold text-gray-500 text-center">{{ $student->nama}}</td>
                        <td class="px-6 py-5 whitespace-nowrap text-sm font-semibold text-gray-500 text-center">PT.SETIA</td>
                        <td class="px-6 py-5 whitespace-nowrap text-sm font-semibold text-gray-500 text-center">
                            <span class="p-2 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Success</span>
                        </td>
                        <td class="px-6 py-5 whitespace-nowrap text-sm font-semibold text-gray-500 text-center">
                            <a href="" class="border-2 border-yellow-300 py-2 px-4 rounded-lg bg-yellow-300 text-slate-950 hover:bg-yellow-400 hover:border-yellow-400">Update</a>
                            <a href="" class="border-2 border-red-600 py-2 px-4 ml-1 rounded-lg bg-red-600 text-slate-950 hover:bg-red-700 hover:border-red-700">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
 