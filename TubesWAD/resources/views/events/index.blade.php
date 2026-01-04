@extends('layouts.admin')

@section('title','Manage Event')

@section('content')

<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:15px;">
        <h2>Daftar Event</h2>

        <a href="{{ route('events.create') }}" class="btn btn-add">
            + Tambah Event
        </a>
    </div>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>Nama Event</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>

        @foreach ($events as $event)
        <tr>
            <td>{{ $event->nama_event }}</td>
            <td>{{ $event->tanggal_event }}</td>
            <td>{{ $event->lokasi }}</td>
            <td>
                <a href="{{ route('events.edit',$event->id) }}" class="btn btn-edit">Edit</a>

                <form action="{{ route('events.destroy',$event->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete"
                        onclick="return confirm('Yakin hapus event?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
