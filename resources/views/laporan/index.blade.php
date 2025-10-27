@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-3">Daftar Laporan</h2>
<table class="w-full border-collapse border border-gray-300">
  <thead>
    <tr class="bg-gray-200">
      <th class="border px-4 py-2">No</th>
      <th class="border px-4 py-2">Judul</th>
      <th class="border px-4 py-2">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">1</td>
      <td class="border px-4 py-2">Masalah KRS</td>
      <td class="border px-4 py-2"><span class="bg-red-500 text-white px-2 py-1 rounded">Baru</span></td>
    </tr>
  </tbody>
</table>
<td class="px-4 py-2 border">
  <a href="{{ route('laporan.show', $laporan) }}" class="text-blue-700 hover:underline">Lihat</a>
  <a href="{{ route('laporan.edit', $laporan) }}" class="ml-3 text-yellow-600 hover:underline">Edit</a>
  
  <!-- Tombol Ubah Status Cepat -->
  <form action="{{ route('laporan.update', $laporan) }}" method="POST" class="inline-block ml-3">
    @csrf @method('PUT')
    <input type="hidden" name="judul" value="{{ $laporan->judul }}">
    <input type="hidden" name="deskripsi" value="{{ $laporan->deskripsi }}">
    <input type="hidden" name="mahasiswa_id" value="{{ $laporan->mahasiswa_id }}">
    <input type="hidden" name="status" value="{{ $laporan->status === 'baru' ? 'diproses' : 'selesai' }}">
    <button type="submit" class="text-green-600 hover:underline">
      {{ $laporan->status === 'baru' ? 'Proses' : ($laporan->status === 'diproses' ? 'Selesaikan' : '') }}
    </button>
  </form>

  <!-- Hapus -->
  <form action="{{ route('laporan.destroy', $laporan) }}" method="POST" class="inline-block ml-3" onsubmit="return confirm('Yakin hapus laporan?')">
    @csrf @method('DELETE')
    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
  </form>
@endsection