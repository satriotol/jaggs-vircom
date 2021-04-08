<?php

namespace App\Http\Controllers;

use App\Companys;
use App\Http\Requests\UpdateCompanySosialMediaRequest;
use App\Http\Requests\UpdateCompanyBerandaRequest;
use App\Http\Requests\UpdateCompanyMenuRequest;
use App\Http\Requests\UpdateCompanyTentangRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function editmenu(Companys $company)
    {
        return view('admin.company.menu_utama')->with('company', $company);
    }

    public function updatemenu(UpdateCompanyMenuRequest $request, Companys $company)
    {
        $data = $request->only(['name', 'email', 'address', 'phone_number']);
        $company->update($data);
        session()->flash('success', 'Company Updated Successfully');
        return redirect(route('company.menu', 1));
    }
    public function editberanda(Companys $company)
    {
        return view('admin.company.menu_beranda')->with('company', $company);
    }
    public function updateberanda(UpdateCompanyBerandaRequest $request, Companys $company)
    {
        $data = $request->only(['description_beranda', 'video_profile']);
        $company->update($data);
        session()->flash('success', 'Company Updated Successfully');
        return redirect(route('company.beranda', 1));
    }
    public function edittentang(Companys $company)
    {
        return view('admin.company.menu_tentang')->with('company', $company);
    }
    public function updatetentang(UpdateCompanyTentangRequest $request, Companys $company)
    {
        $data = $request->only(['description', 'apa_kata_mereka', 'vision', 'mission']);
        $company->update($data);
        session()->flash('success', 'Company Updated Successfully');
        return redirect(route('company.tentang', 1));
    }
    public function editsosialmedia(Companys $company)
    {
        return view('admin.company.menu_sosialmedia')->with('company', $company);
    }
    public function updatesosialmedia(UpdateCompanySosialMediaRequest $request, Companys $company)
    {
        $data = $request->only(['instagram', 'youtube']);
        $company->update($data);
        session()->flash('success', 'Company Updated Successfully');
        return redirect(route('company.sosialmedia', 1));
    }
}
