<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NasikotakStoreRequest;
use App\Models\Nasikotak;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NasikotakController extends Controller
{
    public function index()
    {
        $nasikotaks = Nasikotak::latest()->get();
        return view('admin.nasikotak.index', compact('nasikotaks'));
    }

    public function create()
    {
        return view('admin.nasikotak.create');
    }

    public function store(NasikotakStoreRequest $request)
    {
        $gambar = $request->file('gambar')->store('assets/nasikotak', 'public');
        $slug = Str::slug($request->nama_nasi, '-');

        Nasikotak::create($request->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);

        return redirect()->route('nasikotak.create')->with([
            'message' => 'Data berhasil dibuat',
            'alert-type' => 'success'
        ]);
    }

    public function show(string $id)
    {
        // Implementasikan jika diperlukan
    }

    public function edit(Nasikotak $nasikotak)
    {
        return view('admin.nasikotak.edit', compact('nasikotak'));
    }

    public function update(NasikotakStoreRequest $request, Nasikotak $nasikotak)
    {
        $slug = Str::slug($request->nama_nasi, '-');
        $nasikotak->update($request->validated() + ['slug' => $slug]);

        return redirect()->route('admin.nasikotaks.index')->with([
            'message' => 'Data berhasil diedit',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Nasikotak $nasikotak)
    {
        if ($nasikotak->gambar) {
            $filePath = storage_path("app/public/" . $nasikotak->gambar);
            // Implementasikan logika penghapusan file jika diperlukan
        }

        $nasikotak->delete();

        return redirect()->back()->with([
            'message' => 'Data berhasil dihapus',
            'alert-type' => 'danger'
        ]);
    }
}
