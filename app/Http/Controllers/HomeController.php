<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Nasikotak;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $nasikotaks = Nasikotak::latest()->get();

        return view('frontend.homepage', compact('nasikotaks'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required'
        ]);

        Message::create($data);

        return redirect()->back()->with([
            'message' => 'pesan anda berhasil dikirim',
            'alert-type' => 'success'
        ]);
    }
    public function detail()
    {
        return view('frontend.detail');
    }
}
