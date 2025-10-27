<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function search() {
        return "search ";
}

    public function detail() {
        return "detail laporan mahasiswa";
}

    public function index(laporan $laporan) {
        $laporans = Laporan::all();
        return view('laporan.index', compact('laporans'));
        return view('laporan.index');
}

    public function show(Laporan $laporan)
{
        return view('laporan.show', compact('laporan'));
}

    public function edit(Laporan $laporan)
{
        return view('laporan.edit', ['laporan' => $laporan]);
}
}
