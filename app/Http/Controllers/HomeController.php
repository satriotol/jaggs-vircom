<?php

namespace App\Http\Controllers;

use App\Companys;
use App\Faq;
use App\Http\Requests\SendEmailRequest;
use App\Jenjang;
use App\Kategori;
use App\Lomba;
use App\Teams;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $company;
    public function __construct()
    {
        $this->company = Companys::where('id', 1)->first();
        view()->share('company', $this->company);
    }
    public function index()
    {
        $lombas = Lomba::latest()->simplePaginate(1);
        $jenjangs = Jenjang::all();
        $kategoris = Kategori::all();
        return view('page.beranda')->with('lombas', $lombas)->with('jenjangs', $jenjangs)->with('kategoris', $kategoris);
    }
    public function infolomba()
    {
        $lombas = Lomba::latest()->get();
        $jenjangs = Jenjang::all();
        $categories = Kategori::whereNull('parent_id')->get();
        return view('page.infolomba')->with('categories', $categories)->with('jenjangs', $jenjangs)->with('lombas', $lombas);
    }
    public function kategori(Kategori $category)
    {
        $categories = Kategori::whereNull('parent_id')->get();
        $subcategories = Kategori::where('parent_id', $category->id)->get();
        $lombas = Lomba::where('kategori_id', $category->id)->get();
        return view('page.kategori')->with('category', $category)->with('categories', $categories)
            ->with('subcategories', $subcategories)->with('lombas', $lombas);
    }
    public function detail(Lomba $lomba)
    {
        $categories = Kategori::whereNull('parent_id')->get();
        $lombaOthers = Lomba::where('kategori_id', $lomba->kategori_id)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->whereNotIn('id', [$lomba->id])->latest()->paginate(3);
        return view('page.detail_lomba')->with('lomba', $lomba)->with('lombaOthers', $lombaOthers)->with('categories',$categories);
    }
    public function tentang()
    {
        $teams = Teams::all();
        $lomba = Lomba::all()->count();
        $kategori = Kategori::all()->count();
        $jenjang = Jenjang::all()->count();
        return view('page.tentang')->with('lomba', $lomba)->with('teams', $teams)->with('kategori', $kategori)->with('jenjang', $jenjang);
    }
    public function kontak()
    {
        return view('page.kontak');
    }
    public function faq()
    {
        $faqs = Faq::all();
        return view('page.faq')->with('faqs', $faqs);
    }
    public function sendemail(SendEmailRequest $request)
    {
        Mail::send(
            'email',
            [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'pesan' => $request->pesan
            ],
            function ($kirim) use ($request) {
                $kirim->from($request->email);
                $kirim->to('satriotol69@gmail.com');
                $kirim->subject($request->subject);
            }
        );
        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }
}
