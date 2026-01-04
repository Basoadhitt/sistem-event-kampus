@extends('layouts.peserta')

@section('title','Daftar Event')

@section('content')

<div class="card" style="max-width:500px;margin:auto">
    <h2>Form Pendaftaran Event</h2>

    <p><strong>Event:</strong> {{ $event->nama_event }}</p>
    <p><strong>Tanggal:</strong> {{ $event->tanggal_event }}</p>
    <p><strong>Lokasi:</strong> {{ $event->lokasi }}</p>

    <hr>

    <form method="POST" action="{{ route('peserta.events.store',$event->id) }}">
        @csrf

        <label>Nama Peserta</label>
        <input type="text" name="nama_peserta" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Nomor HP</label>
        <input type="text" name="nomor_hp" required>

        <button class="btn btn-primary">Daftar Event</button>
    </form>

    <br>
    <a href="{{ route('peserta.events.index') }}">⬅ Kembali</a>
</div>

@endsection
