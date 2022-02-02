<?php

namespace App\Http\Controllers;

use App\Models\Vac;
use App\Http\Requests\VacancyRequest;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function submit(VacancyRequest $req)
    {
        $vac = new Vac();
        $vac->post = $req->input('post');
        $vac->salary = $req->input('salary');
        $vac->amount = $req->input('amount');

        $vac->save();

        return redirect()->route('main')->with('success', 'Вакансия была добавлена');
    }

    public function allData()
    {
        return view('records', ['data' => DB::table('vacs')->Paginate(5)]);
    }

    public function allDataSorted($sort)
    {
        return view('records', ['data' => DB::table('vacs')->orderBy($sort, 'desc')->Paginate(5)]);
    }

    public function get($id)
    {
        $vac = new Vac();
        return view('record', ['data' => $vac->find($id)]);
    }

    public function change($id)
    {
        $vac = new Vac();
        return view('change', ['data' => $vac->find($id)]);
    }

    public function update($id, VacancyRequest $req)
    {
        $vac = Vac::find($id);
        $vac->post = $req->input('post');
        $vac->salary = $req->input('salary');
        $vac->amount = $req->input('amount');

        $vac->save();

        return redirect()->route('record', $id)->with('success', 'Вакансия была обновлена');
    }

    public function delete($id)
    {
        Vac::find($id)->delete();
        return redirect()->route('records')->with('success', 'Вакансия была удалена');
    }
}
