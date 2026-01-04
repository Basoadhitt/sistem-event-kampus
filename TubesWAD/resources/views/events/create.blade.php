@extends('layouts.admin')

@section('title','Tambah Event')

@section('content')

<div class="card">
    <h2>Tambah Event</h2>

    <form method="POST" action="{{ route('events.store') }}">
        @csrf

        <label>Nama Event</label>
        <input type="text" name="nama_event" required>

        <label>Tanggal Event</label>
        <input type="date" name="tanggal_event" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi"></textarea>

        <button class="btn btn-add">Simpan</button>
    </form>
</div>

@endsection
