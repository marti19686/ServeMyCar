<?php

namespace App\Http\Controllers;

use Request;
use App\Work;
use App\Http\Requests;
use App\Http\Requests\CreateWorkRequest;
use Auth;
use Session;

class WorksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only'=>'create']);
    }

    /**
     * Pobieramy listę zadan
     */
    public function index()
    {
        $works = Work::latest()->get();
        return view('works.index')->with('works', $works);
    }

    /**
     * Jedno zadanie
    */
    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('works.show')->with('work', $work);
    }

     /**
     * Wyświetlnie zlecen
     */
    public function userShow()
    {
        $id = Auth::User()->id;
        $works = Work::latest()
                        ->where('user_id',$id)
                        ->get();

        return view('works.userShow')->with('works', $works);
    }

    /**
     * Wyświetla formularz dodania zlecenia
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Zapisuje zlecenie do bazy
     */
    public function store(CreateWorkRequest $request)
    {
        $work = new Work($request->all());
        Auth::user()->works()->save($work);
        Session::flash('work_created', 'Zlecenie zostało utworzone');
        return redirect('userShow');
    }

    /**
     * Formularz edycji zlecenia
     */
    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('works.edit')->with('work',$work);
    }

    /**
     * Zakończenie zlecenia
     */
    public function delete($id)
    {
        $work = Work::where('id', '=', $id)->delete();

        Session::flash('work_deleted','Zlecenie zostało zakończone');
        
        return redirect('userShow');
    }

    /**
     * Aktualizacja zlecenia
     */
    public function update($id, CreateWorkRequest $request)
    {
        $work = Work::findOrFail($id);
        $work->update($request->all());
        Session::flash('work_edited','Zlecenie zostało edytowane');
        return redirect('userShow');
    }
}
