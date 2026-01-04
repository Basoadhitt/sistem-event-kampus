<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registrasi;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    // TAMPILKAN DAFTAR EVENT
    public function index()
    {
        $events = Event::orderBy('tanggal_event', 'asc')->get();
        return view('peserta.events', compact('events'));
    }

    // TAMPILKAN FORM PENDAFTARAN
    public function create($id)
    {
        $event = Event::findOrFail($id);
        return view('peserta.daftar', compact('event'));
    }

    // SIMPAN PENDAFTARAN
    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_peserta' => 'required',
            'email' => 'required|email',
            'nomor_hp' => 'required',
        ]);

        Registrasi::create([
            'user_id' => auth()->id(),
            'event_id' => $id,
            'nama_peserta' => $validated['nama_peserta'],
            'email' => $validated['email'],
            'nomor_hp' => $validated['nomor_hp'],
            'status_registrasi' => 'terdaftar',
        ]);

        return redirect()
            ->route('peserta.events.index')
            ->with('success', 'Berhasil mendaftar event');
    }

    // BATALKAN PENDAFTARAN
    public function batal($id)
    {
        Registrasi::where('user_id', auth()->id())
            ->where('event_id', $id)
            ->update(['status_registrasi' => 'dibatalkan']);

        return back()->with('success', 'Pendaftaran dibatalkan');
    }
}
