<h1>Edit Event</h1>

<form action="{{ route('events.update', $event->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_event" value="{{ $event->nama_event }}"><br>
    <textarea name="deskripsi">{{ $event->deskripsi }}</textarea><br>
    <input type="date" name="tanggal_event" value="{{ $event->tanggal_event }}"><br>
    <input type="text" name="lokasi" value="{{ $event->lokasi }}"><br>

    <button type="submit">Update</button>
</form>
