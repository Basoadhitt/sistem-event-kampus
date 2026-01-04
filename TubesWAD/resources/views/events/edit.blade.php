@extends('layouts.admin')

@section('title','Edit Event')

@section('content')

<div class="card">
    <h2>Edit Event</h2>

    <form method="POST" action="{{ route('events.update',$event->id) }}">
        @csrf
        @method('PUT')

        <label>Nama Event</label>
        <input type="text" name="nama_event" value="{{ $event->nama_event }}" required>

        <label>Tanggal Event</label>
        <input type="date" name="tanggal_event" value="{{ $event->tanggal_event }}" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" value="{{ $event->lokasi }}" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi">{{ $event->deskripsi }}</textarea>

        <button class="btn btn-edit">Update</button>
    </form>
</div>

@endsection
