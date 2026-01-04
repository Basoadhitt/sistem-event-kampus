<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('tanggal_event', 'desc')->paginate(5);
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_event' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'tanggal_event' => 'required|date',
        'lokasi' => 'required|string|max:255',
    ]);

    Event::create([
        'nama_event' => $request->nama_event,
        'deskripsi' => $request->deskripsi,
        'tanggal_event' => $request->tanggal_event,
        'lokasi' => $request->lokasi,
    ]);

    return redirect()->route('events.index')
        ->with('success', 'Event berhasil ditambahkan');
}


    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'nama_event' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'tanggal_event' => 'required|date',
        'lokasi' => 'required|string|max:255',
    ]);

    $event = Event::findOrFail($id);
    $event->update([
        'nama_event' => $request->nama_event,
        'deskripsi' => $request->deskripsi,
        'tanggal_event' => $request->tanggal_event,
        'lokasi' => $request->lokasi,
    ]);

    return redirect()->route('events.index')
        ->with('success', 'Event berhasil diperbarui');
}

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect()->route('events.index')
            ->with('success', 'Event berhasil dihapus');
    }
}
