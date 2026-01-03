<!DOCTYPE html>
<html>
<head>
    <title>Daftar Event</title>
</head>
<body>

<h1>Daftar Event</h1>

<a href="{{ route('events.create') }}">Tambah Event</a>

<table border="1">
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
            <a href="{{ route('events.edit', $event->id) }}">Edit</a>

            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
