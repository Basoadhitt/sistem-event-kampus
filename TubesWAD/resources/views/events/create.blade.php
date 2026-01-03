<h1>Tambah Event</h1>

<form action="{{ route('events.store') }}" method="POST">
    @csrf

    <input type="text" name="nama_event" placeholder="Nama Event"><br>
    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br>
    <input type="date" name="tanggal_event"><br>
    <input type="text" name="lokasi" placeholder="Lokasi"><br>

    <button type="submit">Simpan</button>
</form>
