<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::orderByDesc('id')->paginate(10);

        return view('admin.vacancy.index',[
            'vacancies' => $vacancies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'text_uz'=>'required',
            'text_ru'=>'required',
            'text_eng'=>'required',
        ]);

        $vacancy = new Vacancy();
        $vacancy->name_uz = $data['name_uz'];
        $vacancy->name_ru = $data['name_ru'];
        $vacancy->name_eng = $data['name_eng'];
        $vacancy->text_uz = $data['text_uz'];
        $vacancy->text_ru = $data['text_ru'];
        $vacancy->text_eng = $data['text_eng'];
        $vacancy->description = $request['description'];
        $vacancy->status = $request['status'];
        $vacancy->save();

        return redirect()->route('vacancies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('admin.vacancy.show',[
            'vacancy' => $vacancy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('admin.vacancy.update',[
            'vacancy' => $vacancy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'text_uz'=>'required',
            'text_ru'=>'required',
            'text_eng'=>'required',
        ]);

        $vacancy = Vacancy::findOrFail($id);
        $vacancy->name_uz = $data['name_uz'];
        $vacancy->name_ru = $data['name_ru'];
        $vacancy->name_eng = $data['name_eng'];
        $vacancy->text_uz = $data['text_uz'];
        $vacancy->text_ru = $data['text_ru'];
        $vacancy->text_eng = $data['text_eng'];
        $vacancy->description = $request['description'];
        $vacancy->status = $request['status'];
        $vacancy->update();

        return redirect()->route('vacancies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->route('vacancies.index');
    }

    public function status($id)
    {
        $vacancy = Vacancy::find($id);
        if($vacancy->status=='Faol'){
            $vacancy->status = 'Nofaol';
        }
        else{
            $vacancy->status = 'Faol';
        }
        $vacancy->update();

        return redirect()->route('vacancies.index');
    }

}
