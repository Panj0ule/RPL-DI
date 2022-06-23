<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Notes;
use App\Models\Balita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ortuController extends Controller
{
    function parentView()
    {
        return view("ortuView.parentPage",[
            "balitas" => Balita::all(),
        ]);
    }

    function formDataBayi()
    {
        return view("ortuView.addData");
    }

    function addBayi(Request $request)
    {
        $balita = new Balita;
        $balita -> nama_balita = $request->nama_balita;
        $balita -> jenis_kelamin = $request->jenis_kelamin;
        $balita -> tinggi_balita = $request->tinggi_balita;
        $balita -> berat_balita = $request->berat_balita;
        $balita -> tgl_lahir = $request->tgl_lahir;
        $balita -> umur_balita = Carbon::parse($request->tgl_lahir)->diff(Carbon::now())->y;
        $balita -> id_user = Auth::user()->id;
        $balita->save();
        return redirect("/parentView")->with('status', 'Balita Data Has Been inserted');
    }

    function notesView()
    {
        return view("ortuView.notesPage",[
            "notes" => Notes::all(),
        ]);
    }

    function notesAdd(Request $request)
    {
        $note = new Notes;
        $note -> title = $request->title;
        $note -> desc = $request->desc;
        $note -> category = $request->category;
        $note -> tgl_note = Carbon::now();
        $note -> id_user = Auth::user()->id;
        $note->save();
        return redirect("/notesView")->with('status', 'Notes Berhasil ditambahkan');
    }
}
