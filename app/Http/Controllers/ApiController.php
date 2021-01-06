<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Dossier;
use App\Evolution;
use Illuminate\Http\Request;
use App\Patient ;
use App\Aliment;
use App\Category ;
use App\Rapport ;
use App\Retios ;
use Dingo\Api\Routing\Helpers;
use PDF;
use App\Http\Controllers\Controller;
use Mail;

class ApiController extends Controller{

    public function getEvolution(){
        return Evolution::all();
    }

    public function getUsers(){
	return Patient::all();
	}

    public function getAliments(){
        return Aliment::all();
        }

    public function getCategories(){
        return Category::all();
        }

	public function getUsersByPass($pass){
	 return Patient::where('clef',$pass)->get();
	}

    public function getAlimentsByCategory($category_id){
        return Aliment::where('category_id',$category_id)->get() ;
    }

    public function getAlimentByName($name)
    {
        return Aliment::where('name', $name)->get();
    }
    public function getAlimentsById($id){
        return Aliment::where('id',$id)->get();

    }


    public function postAlimentAndroid($name , $category_id , $quantite, $glucide){
        $aliment = new Aliment();
        $aliment->name = $name;
        $aliment->category_id = $category_id;
        $aliment->quantite= $quantite;
        $aliment->glucide= $glucide;

        $aliment->save();

        return Aliment::where('name',$name)->get();
    }

    public function postRapportAndroid($id , $r1 , $r2 , $r3 , $r4 , $r5 , $r6 , $r7 , $r8 , $r9 , $r10 , $r11 , $r12 , $r13 , $r14 , $r15 , $r16){
        $rapport = new Rapport();

        $rapport->dossier_id= $id ;

        $rapport->glucoAvPetitDej = $r3 ;
        $rapport->glucoAfPetitDej = $r1 ;
        $rapport->insPetitDej = $r2;
        $rapport->insAPetitDej = $r4 ;

        $rapport->glucoAvDej = $r7 ;
        $rapport->glucoAfDej = $r5 ;
        $rapport->insDej = $r6 ;
        $rapport->insADej = $r8 ;

        $rapport->glucoAvColl = $r11 ;
        $rapport->glucoAfColl = $r9 ;
        $rapport->insColl = $r10 ;
        $rapport->insAColl = $r12 ;

        $rapport->glucoAvDin = $r15 ;
        $rapport->glucoAfDin = $r13 ;
        $rapport->insDin = $r14 ;
        $rapport->insADin = $r16 ;

        $rapport->save();
		
		return response()->json(['status' => http_response_code()]);

    }

    public function showPDF(Request $request){
      // $users = UserDetail::all();
      return view('pdfIndex',compact('request'));
    }
    public function generateReport(Request $request){
      return view('mail',compact('request'));
    }

    public function updateRatiosAndroid (Request $request)
    {

        $id = $request->query("id");
        $rp = $request->query("rp");
        $rd = $request->query("rd");
        $rc = $request->query("rc");
        $rdi = $request->query("rdi");
        $com = $request->query("com");
            //return $id ."  ". $rp ."  ". $rd ."  ". $rc ."  ". $rdi ."  ". $com;

        if ($id ==null){
            return "id not found !!!";
        }
        elseif ($rp==null && $rd==null && $rc==null && $rdi==null && $com==null){
            return "requette vide !!!";
        }


        $user = Patient::find($id);
        $user->ratioPetitDej = $rp!=null?$rp:$user->ratioPetitDej;
        $user->ratioDej = $rd!=null?$rd:$user->ratioDej;
        $user->ratioColl = $rc!=null?$rc:$user->ratioColl;
        $user->ratioDinnez = $rdi!=null?$rdi:$user->ratioDinnez;

        $user->save();

        $dossier= Dossier::find($id);

        if ($dossier->patient_id!=$id){
            return "error: id de patient != id de dossier";
        }

        if ($rp==null || $rd!=null || $rc!=null || $rdi!=null){
            $ratio = new Retios();
            $ratio->dateChanges=date('y-m-d' );
            $ratio->timeChanges=date('g:i' );
            $ratio->ratioPetitDej= $rp!=null?$rp:$user->ratioPetitDej;
            $ratio->ratioDej=$rd!=null?$rd:$user->ratioDej;
            $ratio->ratioColl=$rc!=null?$rc:$user->ratioColl;
            $ratio->ratioDinnez=$rdi!=null?$rdi:$user->ratioDinnez;
            $ratio->dosier_id=$id;
            $ratio->save();
        }


        if ($com !=null){
            $commentaire=new Commentaire();
            $commentaire->patient_id=$id;
            //$commentaire->envoie=;
            //$commentaire->reception=;
            //$commentaire->lecture=;
            $commentaire->contenue=$com;
            $commentaire->save();
        }



        return response()->json(['status' => http_response_code()]);
    }




    public function sendReport(Request $request){
      // $email = $request->get('email');
      // $email = 'alienali@gmatch.org';
      // $path = 'C:\Users\aaaa\Desktop\\';
      // $name = 'rapport.pdf';
      // $pdf = PDF::loadView('pdfIndex',compact('request'));
      // $pdf
      // ->setOptions(['dpi' => 150, 'defaultFont' => 'Times New Roman'])
      // ->setPaper('a4', 'portrait')
      // ->save($path.$name);
      // return $pdf->stream($name);
      // return $pdf->download('invoice.pdf');
      // $data = $request->only('name', 'email', 'phone');
      // $data['messageLines'] = explode("\n", $request->get('message'));

      Mail::send('mail', ['request'=>$request], function ($message) use ($request) {
        $message->subject('Ra<oumrazane@yahoo.fr>pport du patient : '
          .$request->get('fName').' '.$request->get('lName'))
                ->to($request->get('email'));
      });

      return response()->json(['status' => http_response_code()]);
    }
    public function sendComments($id){
        return Patient::find($id)->commentaire;
    }

}
