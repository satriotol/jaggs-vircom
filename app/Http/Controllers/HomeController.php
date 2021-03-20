<?php

namespace App\Http\Controllers;

use App\Companys;
use App\Http\Requests\SendEmailRequest;
use App\Jenjang;
use App\Kategori;
use App\Lomba;
use App\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $company;
    public function __construct()
    {
        $this->company = Companys::where('id',1)->first();
        view()->share('company', $this->company);
    }
    public function index()
    {
        $lombas = Lomba::latest()->simplePaginate(1);
        $jenjangs = Jenjang::all();
        $kategoris = Kategori::all();
        return view('page.home')->with('lombas',$lombas)->with('jenjangs',$jenjangs)->with('kategoris',$kategoris);
    }
    public function detail(Lomba $lomba)
    {
        return view('page.detail_lomba')->with('lomba',$lomba);
    }
    public function tentang()
    {
        $teams = Teams::all();
        $lomba = Lomba::all()->count();
        $kategori = Kategori::all()->count();
        $jenjang = Jenjang::all()->count();
        return view('page.tentang')->with('lomba',$lomba)->with('teams',$teams)->with('kategori',$kategori)->with('jenjang',$jenjang);
    }
    public function kontak()
    {
        return view('page.kontak');
    }
    public function sendemail(SendEmailRequest $request)
    {
        Mail::send('email',[
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'pesan' => $request->pesan
        ],
        function ($kirim) use ($request) {
            $kirim->from($request->email);
            $kirim->to('satriotol69@gmail.com');
            $kirim->subject($request->subject);
        });
        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }

}
