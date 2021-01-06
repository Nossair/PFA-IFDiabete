<?php

namespace App\Http\Controllers;

use App\Aliment ;
use App\Evolution;
use DB;
use App\Retios;
use App\Category ;
use App\Dossier ;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\ValidationException;
use Excel;
use Khill\Lavacharts\DataTables\Formats\DateFormat;
use Khill\Lavacharts\DataTables\Formats\Format;
use PDF;
use App\Patient ;
use Hash;
use Intervention\Image\ImageManagerStatic as Image;
use App\Image as im;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;
use stdClass;
use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all() ;
        $aliments = Aliment::orderBy('id')->get();
        return view('home',['aliments'=>$aliments , 'categories' => $categories] );
    }

    public function addPatient(){
        return view('addDossier');
    }
    public function ajoutPatient(Request $request){

        $errors =  $request->session()->get('errors');
        $dossier = $request->session()->get("dossier")['attributes'];
        $patient = $request->session()->get("patient")['attributes'];


        // dump($patient);
        //dd($dossier);
        if($dossier !=null   && $patient!=null )

            return view('ajouterPatient',["errors"=>$errors,'dossier'=>(object)$dossier,'patient'=>(object)$patient]);
        else
            return view('ajouterPatient',["errors"=>$errors]);


    }
    public function editerDossier($id){
        $patient = Patient::find($id);

        if($patient!=null){
            $dossier = $patient->Dossier;
            return view('editDossierView',compact('patient','dossier'));
        }
        return redirect()->route("getDossier");
    }

    public function addEvolution(){
        return view('suivip');
    }

    public function addAliment()
    {
        $categories = Category::all() ;
        return view( 'addAliment' , ['categories' => $categories ]);
    }

    public function getAliments($id = null)
    {
        $header = array (
            'Content-Type' => 'application/json; charset=UTF-8',
            'charset' => 'utf-8'
        );

        if ($id == null) {
            $aliments = Aliment::all(array('id','name' , 'category_id' , 'quantite', 'glucide'));
        } else {
            $aliments = Aliment::find($id, array('id','name' , 'category_id', 'quantite', 'glucide'));
        }
        return response()->json(array(
            'error' => false,
            'aliment' => $aliments,
            'status_code' => 200
        ),200 ,$header,JSON_UNESCAPED_UNICODE);
    }

    public function getCategories($id = null)
    {
        $header = array (
            'Content-Type' => 'application/json; charset=UTF-8',
            'charset' => 'utf-8'
        );

        if ($id == null) {
            $categories = Category::all(array('id', 'name', 'image'));
        } else {
            $categories = Category::find($id, array('id', 'name', 'image'));
        }
        return response()->json(array(
            'error' => false,
            'user' => $categories,
            'status_code' => 200
        ),200 ,$header,JSON_UNESCAPED_UNICODE);
    }

    public function afficherAliments(Request $request){

        $categories = Category::paginate(1);
        // where ($search is null or  id = $search);
        if( $searchKey=$request->get("searchKey") ==null) $searchKey=null;
        else
            $searchKey=$request->get("searchKey");
        if($request->get("page")==null)
            $categoryId=$categories->currentPage();
        else  $categoryId=$request->get("page");


        $aliments=Aliment::where("category_id",$categoryId)
            ->where('name', 'LIKE', '%' . $searchKey. '%')->get();

        $cats = Category::all();
        $cat_names=Category::all('name');
        //$aliments = Aliment::orderBy('id')->get() ;
        return view('afficherAliments',['cat_names'=>$cat_names,'categories' => $categories ,"cats"=>$cats,"aliments"=>$aliments] );
    }
    public function searchAliment(Request $request){
        $searchKey=$request->get("searchKey");
        $categoryId=$request->get("page");

        $category=Category::find($categoryId);

    }

    public function postAliment(Request $request){

        $file=$request->file('image');
        $image = new im();
        $aliment = new Aliment();
        $aliment->name = $request['name'];
        $aliment->quantite = $request['quantite'];
        $aliment->glucide = $request['glucide'];
        $id = DB::table('categories')->where('name' , $request['list'])->value('id') ;
        $aliment->category_id = $id;
        $aliment->save() ;

        //$file->move(base_path().'/public/images/'.$aliment->id.'.jpg');
        $image->aliment_id = $aliment->id ;
        $image->path = '/images/'.$aliment->id.'.jpg';
        $image->save() ;

        $aliments = Aliment::all() ;
        $images = im::all() ;
        return redirect()->route('afficherAliments' ,['aliments' => $aliments , 'images' => $images] ) ;
    }

    public function postEvolution(Request $request){
        $evolution = new Evolution();
        $evolution->dateConsult=$request['dateConsult'];
        $evolution->timeConsult=$request['timeConsult'];
        $evolution->poids=$request['poids'];
        $evolution->imc=$request['imc'];
        $evolution->tdt=$request['tdt'];
        $evolution->coma=$request['Coma'];
        $evolution->HbA1c=$request['HbA1c'];
        $evolution->nbEpHmi=$request['nbEpHmi'];
        $evolution->nbreHMaj=$request['nbreHMaj'];
        $evolution->ratioPetitDej=$request['petit'];
        $evolution->ratioDej=$request['dejeuner'];
        $evolution->ratioColl=$request['coll'];
        $evolution->ratioDinnez=$request['diner'];
        $evolution->IndiceSensibilite= $request['is'];
        $evolution->resucrage= $request['Resucrage'];
        $evolution->ressentie=$request['ressentie'];
        $evolution->chPBHmi=$request['chPBHmi'];
        $evolution->resucrf=$request['resucrf'];
        $evolution->resucrC=$request['resucrC'];
        $evolution->resucrI=$request['resucrI'];
        $evolution->conduite=$request['conduite'];


        $id = DB::table('dossiers')->where('ip',$request['nomPatient'])->value('id');
        $evolution->dossier_id=$id;
        $dossier = Dossier::find($id);


        $evolution->save();
        return redirect()->route('getDossiersById',['id' => $id , 'dossier' => $dossier]);
    }

    public function postRatio(Request $request){

        $ratio = new Retios();
        $ratio->dateChanges=$request['date'];
        $ratio->timeChanges=$request['time'];
        $ratio->ratioPetitDej=$request['petit'];
        $ratio->ratioDej=$request['dejeuner'];
        $ratio->ratioColl=$request['coll'];
        $ratio->ratioDinnez=$request['diner'];

        // $id = DB::table('dossiers')->where('nom',$request['nomPatient'])->value('id');
        $id = DB::table('dossiers')->where('ip',$request['IPPatient'])->value('id');
        $patient = Patient::find($id);
        $dossier = Patient::find($id)->dossier;


        $ratio = new Retios();
        $ratio->dateChanges=$request['date'];
        $ratio->timeChanges=$request['time'];
        $ratio->ratioPetitDej=$request['petit']!=''?$request['petit']:$patient->ratioPetitDej;
        $ratio->ratioDej=$request['dejeuner']!=''?$request['dejeuner']:$patient->ratioDej;
        $ratio->ratioColl=$request['coll']!=''?$request['coll']:$patient->ratioColl;
        $ratio->ratioDinnez=$request['diner']!=''?$request['diner']:$patient->ratioDinnez;
        $ratio->dosier_id=$id;

        // $dossier = Dossier::find($id, array('id','dateC','timeC','ip','ed','tel','nom','prenom','age','sexe','addresse','milieuVie','niveauSc','etab','sitMar','fraterie','ressourcesFinancieres','mutualiste','organisme','debutDiabete','dureeDiabete','anciennete','poids','taille','imc','tdt','lypodystrophie','avatar','created_at','updated_at','ratioPetitDej','ratioDej','ratioColl','ratioDinnez'));
        // $dossier = Dossier::find($id);

        $ratio->save();

        $patient->ratioPetitDej = $ratio->ratioPetitDej;
        $patient->ratioDej = $ratio->ratioDej;
        $patient->ratioColl = $ratio->ratioColl;
        $patient->ratioDinnez = $ratio->ratioDinnez;


        $patient->update();

        $ratio = Retios::orderBy('id')->get();
        $evolutions = Evolution::orderBy('id')->get();
        return redirect()->route('getDossiersById',['id'=>$id,'dossier'=>$dossier]);
    }
    public function postPatient(Request $request){


        $patient = new Patient();
        $dossier = new Dossier();

        $clef = unique_random('patients','clef',8);
        $poids = $request['poids'];
        $taille = (pow($request['taille']/100,2));
        $patient->clef=$clef ;
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
        if($taille==0){
            $taille=1;
        }
        $dossier->imc=number_format(($poids / $taille), 2, '.', '');
        if($taille==0){
            $taille=1;
        }
        $dossier->imc=($poids / $taille);
        $dossier->tdt=$request['tdt'];
        $dossier->lypodystrophie=$request->input('lypody');
        $dossier->sensibilite5g=$request['ss5'];
        $dossier->sensibilite10g=$request['ss10'];
        $dossier->sensibilite15g=$request['ss15'];
        $dossier->nbrepisode=$request['episode'];
        $dossier->episodechiffreBas=$request['chifrebas'];
        $dossier->ressenti=$request['ressentie'];
        $dossier->pourquoiresenti=$request['pourquoi'];
        $dossier->resucrageFait=$request['resucrageF'];
        $dossier->resucrageC=$request['resucrageC'];
        $dossier->resucrageInc=$request['resucrageI'];
        $dossier->coma=$request['comaH'];
        $dossier->resucrageGInt=$request['resucrageGInt'];
        $dossier->Decompensations=$request['affichage'];
        $dossier->episodeDerbierAnne=$request['epda'];
        $dossier->infection=$request['infection'];
        $dossier->arretTrai=$request['arretTrai'];
        $dossier->autre=$request['autre'];
        $dossier->retinopathie=$request['retionophie'];
        $dossier->stadeNeph=$request['stadeneph'];
        $dossier->stadeRe=$request['stadeRe'];
        $dossier->neuropathie=$request['neuropathie'];
        $dossier->nephropathie=$request['nephropathie'];
        $dossier->stabilise=$request['stabilise'];
        $dossier->HTA=$request['HTA'];
        $dossier->ttt=$request['ttt'];
        $dossier->stabilise=$request['stabilise'];
        $dossier->coronaropathie=$request['coronaropathie'];
        $dossier->LDL=$request['LDL'];
        $dossier->HDL=$request['HDL'];
        $dossier->TG=$request['TG'];
        $dossier->chotlt=$request['CholT'];
        $dossier->ACurique=$request['ACurique'];
        $dossier->vitD=$request['vitD'];
        $dossier->modeVie=$request['modeVie'];
        $dossier->comment=$request['comment'];
        $dossier->autre=$request['autre'];
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('images/' . $filename ) );
            $dossier->avatar = $filename;
        }
        $patient->ratioPetitDej=$request['petit'];
        $patient->ratioDej=$request['dejeuner'];
        $patient->ratioColl=$request['coll'];
        $patient->ratioDinnez=$request['diner'];
        $patient->IndiceSensibilite= $request['is'];
        $patient->archived = false;


        try {
            $this->validate($request, [
                'age'    => 'required|numeric|max:100',
                'prenom' =>'required',
                'tel'    =>'phone:MA,FR',
                'name'    => 'required',
                'sexe'   => 'required',
                'ip'     => 'required|numeric',
                'obj'    => 'required|numeric',
                'is'    => 'required|numeric',
                'petit'  => 'required|numeric',
            ]);
        }
        catch (ValidationException $e){
            //return view('ajouterPatient',['dossier' => $dossier ,'patient'=>$patient]);
            return redirect()->back()->with(['dossier' => $dossier ,'patient'=>$patient]);

        }




        $patient->save();
        $dossier->patient_id =$patient->id;
        $dossier->save();


        $ratio = new Retios();
        $ratio->dateChanges=date('y-m-d' );
        $ratio->timeChanges=date('g:i' );
        $ratio->ratioPetitDej=$request['petit'];
        $ratio->ratioDej=$request['dejeuner'];
        $ratio->ratioColl=$request['coll'];
        $ratio->ratioDinnez=$request['diner'];



        $ratio->dosier_id=$dossier->id;

        $ratio->save();




        $dossiers = Dossier::all() ;
        $patients = Patient::all();
        return redirect()->route('getDossier' ,['dossiers' => $dossiers,'patients'=>$patients]) ;
    }

    /**
     *
     * @param  $request
     * @param   $id
     * @return Response
     */

    public function updateDossier(Request $request,$id){

        try {
            $this->validate($request, [
                'age'    => 'required|numeric|max:100',
                'prenom' =>'required',
                'tel'    =>'phone:MA,FR',
                'name'    => 'required',
                'sexe'   => 'required',
                'ip'     => 'required|numeric',
                'obj'    => 'numeric',
                'is'    => 'required|numeric',
                'petit'  => 'required|numeric',
            ]);
        }
        catch (ValidationException $e){
            return \redirect()->route('editerDossier',['id'=>$id]);
        }

        //error possible si l'id n'exist pas
        $patient = Patient::find($id);
        $dossier = $patient->dossier;

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


        $ratio = new Retios();
        $ratio->dateChanges=$request['datech']!=''?$request['datech']:date('y-m-d' );
        $ratio->timeChanges=$request['timech']!=''?$request['timech']:date('g:i' );
        $ratio->ratioPetitDej=$request['petit'];
        $ratio->ratioDej=$request['dejeuner'];
        $ratio->ratioColl=$request['coll'];
        $ratio->ratioDinnez=$request['diner'];



        $ratio->dosier_id=$dossier->id;

        $ratio->save();


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

    public function datatable(){
        return view ('datatable');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function getDossiers(Request $request)
    {  $link=$request->fullUrl();


        $searchKey = $request->get("search");

        $patients = Patient::join("dossiers", "dossiers.id", "=", "patients.id")
            ->where(function ($query){
                $query->where("archived","=",0);
            })->where(function($query) use ($searchKey){
                $query->where("nom", "like", $searchKey . "%")
                    ->orWhere("prenom", "like", $searchKey . "%")
                    ->orWhere("dossiers.ip", "like", $searchKey . "%");

            })->paginate(1);


        //$patients->appends($request->query("search"));
        //$message="nulllll";

        if($request->get("res")=="true" ){
            //   if($patients->isEmpty()) $message="Il n'existe aucun patient qui correspond a votre recherche.";

            return  response()->json(['result'=>$patients]);

        }


        // if($patients->isEmpty()) $message="Il n'existe aucun patient qui correspond a votre recherche.";

        // else $message="nullllll";


        return view('datatable' , ['patients' => $patients ,"searchKey"=>$searchKey,"path"=>$link,"archived"=>"false"]);

    }

    public function getArchive(Request $request)
    {
        $link=$request->fullUrl();


        $searchKey = $request->get("search");

        //old code
        /*$patients = Patient::join("dossiers", "dossiers.id", "=", "patients.id")
            ->where("archived","=",1)
            ->where("nom", "like", $searchKey . "%")
            ->orWhere("prenom", "like", $searchKey . "%")
            ->orWhere("dossiers.ip", "like", $searchKey . "%")->paginate(1);*/
        // new code refactored
        $patients = Patient::join("dossiers", "dossiers.id", "=", "patients.id")
            ->where(function ($query){
                $query->where("archived","=",1);
            })->where(function($query) use ($searchKey){
                $query->where("nom", "like", $searchKey . "%")
                    ->orWhere("prenom", "like", $searchKey . "%")
                    ->orWhere("dossiers.ip", "like", $searchKey . "%");

            })->paginate(1);


        return view('datatable' , ['patients' => $patients ,"searchKey"=>$searchKey,
            "path"=>$link,"archived"=>"true"]);
    }
    public function getDossiersById($id){
        $patient = Patient::find($id);
        $dossier = Patient::find($id)->dossier;
        $evolutions = Evolution::orderBY('id')->get();

        //Statistiques des ratios
        //$format= DateFormat::create('d-m-y');
        $ratios = Lava::DataTable();
        $ratios->addDateColumn('Date')
            ->addNumberColumn('Ratio PD')
            ->addNumberColumn('Ratio Dej')
            ->addNumberColumn('Ratio Coll')
            ->addNumberColumn('Ratio Din');
        foreach ($dossier->retios as $ratio){
            $ratios->addRow([$ratio->dateChanges,  $ratio->ratioPetitDej, $ratio->ratioDej, $ratio->ratioColl ,$ratio->ratioDinnez]);
        }


        $chart= Lava::LineChart('Temps', $ratios, [
            'title' => 'Statistiques des ratios','width'=>'900','height'=>'300'
        ]);
      /*  foreach ($dossier->retios as $ratio){
            echo $ratio->dateChanges."  ".  $ratio->ratioPetitDej."  ". $ratio->ratioDej ."  ".$ratio->ratioColl."  ".$ratio->ratioDinnez;
        }*/
       /* $temperatures = Lava::DataTable();

        $temperatures->addDateColumn('Date')
            ->addNumberColumn('Max Temp')
            ->addNumberColumn('Mean Temp')
            ->addNumberColumn('Min Temp')
            ->addRow(['2014-10-25',  67.55, 65, 62])
            ->addRow(['2014-10-2',  68, 65, 61])
            ->addRow(['2014-10-3',  68, 62, 55])
            ->addRow(['2014-10-4',  72, 62, 52]);
        $chart= Lava::LineChart('Temps', $temperatures, [
            'title' => 'Weather in October','width'=>'800'
        ]);*/
        return view('p' , ['id'=>$id, 'dossier' => $dossier , 'evolutions' => $evolutions,'patient'=>$patient,'chart'=>$chart]);
    }
    public function suivip($id){
        $patient = Patient::find($id);
        $dossier = Patient::find($id)->dossier;

        return view('suivip' , ['dossier' => $dossier ,'patient'=>$patient]);
    }
    public function update($id, Request $request)
    {
        // store
        $aliment = Aliment::find($id);
        $aliment->name   = $request['name'];
        $aliment->quantite   = $request['quantite'];
        $aliment->glucide   = $request['glucide'];
        $aliment->save();
        // redirect
        return redirect('/afficherAliments?page='.$aliment->category_id);
    }

    public function destroy($id)
    {
        $aliment = Aliment::find($id);
        $aliment->delete();
        $categories = Category::all();
        $aliments = Aliment::orderBy('id')->get() ;
        return redirect('/afficherAliments');
     //   return view('afficherAliments',['aliments'=>$aliments , 'categories' => $categories ]);
        

    }

    public function conEvolutionToExcel($id){

        $patient = Patient::find($id);
        $dossier = Patient::find($id)->dossier;
        $evolutions = DB::table('evolutions')->where('dossier_id',$id)->get();
        $data1= json_decode( json_encode($evolutions), true);
        Excel::create($patient->nom.'_'.$patient->prenom, function($excel) use($data1){
            $excel->sheet('feuille 1', function($sheet) use($data1){
                $sheet->fromArray($data1);
            });
        })->export('xls');
    }
    public function conDossierToPdf($id,Request $request){


        $patient = Patient::find($id);
        $dossier = Patient::find($id)->dossier;

        view()->share(compact('dossier','patient'));

        if ($request->has('download')){
            $pdf = PDF::loadView('pdf.dossierPDF');
            return $pdf->download('dossier_medicale.pdf');
        }
        return view('pdf.dossierPDF');
    }

    public function archiverDossier(Request $request,$id){

        $archive = ($request->get("archive")=="false")?false : true;

        try{

            $patient = Patient::find($id);
            $patient->archived = $archive;



            $patient->update();


        }catch (SQLiteException $e){

        }
        return redirect()->route("getDossier");
    }

}
