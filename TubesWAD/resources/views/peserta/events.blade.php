@extends('layouts.peserta')

@section('title','Daftar Event')

@section('content')

<h2>Daftar Event</h2>

@if (session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<div class="grid">

@foreach ($events as $event)

    @php
        $registrasi = \App\Models\Registrasi::where('user_id', auth()->id())
            ->where('event_id', $event->id)
            ->first();
    @endphp

    <div class="card">
        <h3>{{ $event->nama_event }}</h3>
        <p><strong>Tanggal:</strong> {{ $event->tanggal_event }}</p>
        <p><strong>Lokasi:</strong> {{ $event->lokasi }}</p>

        @if (!$registrasi)
            <a href="{{ route('peserta.events.create',$event->id) }}"
               class="btn btn-primary">
                Daftar
            </a>

        @elseif ($registrasi->status_registrasi === 'terdaftar')
            <span class="badge">Sudah Daftar</span>

            <form method="POST"
                  action="{{ route('peserta.events.batal',$event->id) }}"
                  style="margin-top:10px">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Batal</button>
            </form>

        @else
            <em>Pendaftaran dibatalkan</em>
        @endif
    </div>

@endforeach

</div>

@endsection
