<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anamneses;
use DB;

class AnamneseController extends Controller
{
    public function index(){
        $anamneses = Anamneses::with('answer')->get();
        return view('anamnese', compact('anamneses'));
    }

    public function createAnamnese(){
        return view('createAnamnese');
    }

    public function storeAnamnese(Request $request)
    {

        $anamnese = new Anamneses();
        $anamnese->anamnese = $request->get('anamnese_name');
        $anamnese->answers_id = ($request->answer == "on") ? 1 : 2;
        $anamnese->save();
        $anamneses = Anamneses::all();
        return redirect()->route('listAnamnese');
    }

    public function viewAnamnese(Request $request){
        $anamneses = Anamneses::find($request->id);
        return view('toViewAnamnese', compact('anamneses'));
    }

    public function editAnamnese(Anamneses $anamnese){
        return view('editAnamnese', compact('anamnese'));
    }

    public function updateAnamnese(Anamneses $anamnese, Request $request){

        $anamnese->update([
            'anamnese' => $request->anamnese_name,
            'answers_id'=> ($request->answer == "on") ? 1 : 2,
        ]);
        return redirect()->route('listAnamnese');
    }

    public function delete(Anamneses $anamnese)
    {
        $anamnese->delete();
        return redirect()->route('listAnamnese');
    }
}
