<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Etudiants;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class etudiantsController extends Controller
{
    public function formulaire(){

    	return view('user');
    }

    public function traitement(){

    	request()->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            'classe'=>['required'],
            'ddn'=>['required'],
            'ldn'=>['required'],
        ]);

        
        $etudiant=new Etudiants(); 
        $etudiant->nom=request('nom');
        $etudiant->prenom=request('prenom');
        $etudiant->classe=request('classe');
        $etudiant->date_naiss=request('ddn');
        $etudiant->lieu_naiss=request('ldn');
        
       $etudiant->save();
       
$notification='<div class="card-header">
        <h5 class="tim-icons icon-check-2"style="color:#cc6bbd;font-size:30px;">Ajout Reussi!</h5>
        </div>';
        if($etudiant){ 
            echo $notification;
            return view('user');
}else{
echo abort(404);
}

}
public function voir(){
    $etudiants=Etudiants::all();
            return view('listeEtudiant')->with('all_etudiants',$etudiants);
    }
public function suppression($id){
    
    // $sup=DB::table('etudiants')
            // ->where('id',$id) 
            // ->delete();
    $sup=Etudiants::where('id',$id)->delete();
$notification='<div class="card-header">
        <h5 class="tim-icons icon-check-2"style="color:#cc6bbd;font-size:30px;">Ajout Reussi!</h5>
        </div>';
        if($sup){ 
            echo $notification;
            return back();
}else{
echo abort(404);
}
}
public function impression(Request $request)
{ 
     if( $value=$request->has('imprimer')) {
         
        $check= new checkbox();
        
         return view('imprimer',[
             'value'=>$value,
         ]);
        
    }
}

public function formulaireUpdate(){
    return view('updateUser');
}
}