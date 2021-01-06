<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aliment ;
use App\Evolution;
use DB;
use App\Retios;
use App\Category ;
use App\Dossier ;
use Illuminate\Validation\ValidationException;
use Excel;
use PDF;
use App\Patient ;
use Hash;
use Intervention\Image\ImageManagerStatic as Image;
use App\Image as im;
use Illuminate\Support\Facades\Redirect;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'age'=>   'required',
            'prenom'=>'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $dossier = Patient::find($id)->dossier;
        $patient = Patient::find($id);

        $poids = $request['poids'];
        $taille = (pow($request['taille']/100,2));
        $dossier->dateC=date('Y-m-d',strtotime($request['dateC']));
        $dossier->timeC=$request['timeC'];
        $dossier->ip=$request['ip'];
        $dossier->ed=$request['ed'];
        $dossier->tel=$request['tel'];
        $patient->nom=$request['name'];
        $patient->prenom=$request['prenom'];
        $dossier->age=$request['age'];
        $dossier->sexe=$request->input('sexe');
        $dossier->addresse=$request['addresse'];
        $dossier->milieuVie=$request->input('milieu');
        $dossier->niveauSc=$request->input('nc');
        $dossier->etab=$request['etab'];
        $dossier->coma=$request['comaH'];
        $dossier->sensibilite5g=$request['ss5'];
        $dossier->sensibilite10g=$request['ss10'];
        $dossier->sensibilite15g=$request['ss15'];
        $dossier->nbrepisode=$request['episode'];
        $dossier->ressucagemajeur=$request['ressucraMa'];
        $dossier->ressenti=$request['ressentie'];
        $dossier->pourquoiresenti=$request['pourquoi'];
        $dossier->episodechiffreBas=$request['chifrebas'];
        $dossier->resucrageFait=$request['resucrageF'];
        $dossier->resucrageC=$request['resucrageC'];
        $dossier->resucrageInc=$request['resucrageI'];
        $dossier->sitMar=$request->input('sm');
        $dossier->fraterie=$request['fraterie'];
        $dossier->ressourcesFinancieres=$request->input('rf');
        $dossier->mutualiste=$request->input('mutuel');
        $dossier->organisme=$request['organisme'];
        $dossier->debutDiabete=$request->input('debut');
        $dossier->dureeDiabete=$request->input('duree');
        $dossier->anciennete=$request->input('anciennete');
        $dossier->poids=$request['poids'];
        $dossier->taille=$request['taille'];
        $dossier->lypodystrophie=$request->input('lypody');
        $dossier->episodeDerbierAnne=$request['epda'];
        $dossier->infection=$request['infection'];
        $dossier->arretTrai=$request['arretTrai'];
        $dossier->autre=$request['autre'];

        if($taille==0){

            $taille=1;
        }
        $dossier->imc=number_format(($poids / $taille), 2, '.', '');
        $dossier->tdt=$request['tdt'];
        $dossier->lypodystrophie=$request->input('lypody');
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar->getRealPath())->resize(300, 300)->save( public_path('images/' . $filename ) );

            $dossier->avatar = $filename;
        }

        $patient->ratioPetitDej=$request['petit'];
        $patient->ratioDej=$request['dejeuner'];
        $patient->ratioColl=$request['coll'];
        $patient->ratioDinnez=$request['diner'];
        $patient->IndiceSensibilite= $request['is'];

        $patient->update();
        $dossier->update();
        $patient = Patient::find($id);
        $dossier = Patient::find($id)->dossier;
        $evolutions = Evolution::orderBY('id')->get();
        return view('p' , ['id'=>$id, 'dossier' => $dossier , 'evolutions' => $evolutions,'patient'=>$patient]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
