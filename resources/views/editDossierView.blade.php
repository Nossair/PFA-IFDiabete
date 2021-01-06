@extends('adminlte::page')
@section('title','Modifier Patient')
@section('content_header')
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}"></script>
<script src="{{asset('js/formStep.js')}}"></script>
    <script src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js')}}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="styleshee')}}t">
<link rel="stylesheet" type="text/css" href="{{asset('css/formcss.css')}}">
<style media="screen">
  .container{
     width:100%;
  }
  .red{
	  color: #fa0000;
  }
  </style>
@stop
@section('content')
<div class="box-header with-border">
  <div class="box box-solid">
      <div class="box-header with-border">
        <h4 class="box-title fa fa-folder-o ">Modifier Patient </h4>
          <h3 class="box-title fa fa-folder-open"><b> IP Patient : </b><i>{{$patient ->dossier->ip}}</i> </h3>
          <h3 class="box-title" style="padding-left: 100px"><b style="padding-right: 10px"> Nom:</b>{{$patient -> nom}} </h3>
          <h3 class="box-title" style="padding-left: 100px"><b style="padding-right: 10px"> Prénom: </b>{{$patient -> prenom}} </h3>
      </div>
  </div>
</div>
<div class="container" style="width:100%;" >
	<div class="row form-group">
		<div class="col-xs-12">
			<ul class="nav nav-pills nav-justified thumbnail setup-panel">
				<li class="active">
          <a href="#step-1">
					    <h4 class="list-group-item-heading">Etape 1</h4>
					    <p class="list-group-item-text">Données sociodémographiques 1/2</p>
				  </a>
        </li>
				<li class="">
          <a href="#step-2">
					       <h4 class="list-group-item-heading">Etape 2</h4>
					     <p class="list-group-item-text">Données sociodémographiques 2/2</p>
				  </a>
        </li>
				<li class="">
          <a href="#step-3">
					       <h4 class="list-group-item-heading">Etape 3</h4>
					            <p class="list-group-item-text">Données médicales 1/2</p>
				  </a>
        </li>
				<li class="">
          <a href="#step-4">
					       <h4 class="list-group-item-heading">Etape 4</h4>
					     <p class="list-group-item-text">Données médicales 2/2</p>
				  </a>
			  </li>
			  <li class="">
          <a href="#step-5">
				    <h4 class="list-group-item-heading">Etape 5</h4>
				    <p class="list-group-item-text">Décompensations:</p>
			    </a>
		  </li>
	  </ul>
    </div>
  </div>
</div>

<form method="POST" enctype="multipart/form-data" id="myForm" name="myForm" action="{{ route('updateDossier',$patient->id) }}">


	@if ($errors->any())
		<div class="alert alert-danger" style="margin: 0px 15px 15px;">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{{ csrf_field()}}
	<input type="hidden" name="_method" value="PUT">
	<div class="container">
		<div class="row setup-content" id="step-1">
			<div class="col-xs-12">
				<div class="col-xs-12 well text-center">
					<h3> Données sociodémographiques 1/2</h3>
					<!-- <form> -->
						<div class="text-right">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Date :</label>
								<div class="col-sm-10 text-left">
									<input type="text"  onkeypress="refuserToucheEntree(event);" id="datepicker" value="{{ $patient->dossier->dateC}} "  name="dateC" class="form-control ">
								</div>
							</div>
							<div class="form-group row">
								<label  class="col-sm-2  col-form-label">Heure :</label>
								<div class="col-sm-10 text-left">

									<input type="text" onkeypress="refuserToucheEntree(event);" value="{{$patient->dossier->timeC}} " name="timeC" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label red" >Nom* :</label>
								<div class="col-sm-10 text-left">
									<input type="text" name="name" onkeypress="refuserToucheEntree(event);" value="{{$patient->nom}}" class="form-control"
									>
									{!!  $errors->first('name','<span class="help-block"> :message<span>') !!}
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label red">Prémon* :</label>
								<div class="col-sm-10 text-left">
									<input type="text" name="prenom" onkeypress="refuserToucheEntree(event);" value="{{$patient->prenom}} " class="form-control">
									{!!  $errors->first('prenom','<span class="help-block"> :message<span>') !!}
								</div>
							</div>
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label red">Age* :</label>
								<div class="col-sm-10 text-left">
									<input type="number"  onkeypress="refuserToucheEntree(event);" value="{{intval($dossier->age)}}"
									class="form-control" name="age" >
									{!!  $errors->first('age','<span class="help-block"> :message<span>') !!}
								</div>
							</div>
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label">Adresse :</label>
								<div class="col-sm-10 text-left">
									<input type="text" onkeypress="refuserToucheEntree(event);" value="{{$patient->dossier->addresse}} "  name="addresse" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label">Fratrie :</label>
								<div class="col-sm-10 text-left">
									<input type="number" min="0" onkeypress="refuserToucheEntree(event);" value="{{intval($dossier->fraterie)}}"  name="fraterie" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label">Telephone :</label>
								<div class="col-sm-10 text-left">
									<input type="text" onkeypress="refuserToucheEntree(event);" value="{{$patient->dossier->tel}} " name="tel" class="form-control">
								</div>
							</div>
							<fieldset>
								<label class="col-form-label col-sm-2 red">Genre* :</label>
								<div class="form-group col-sm-10 text-left">
									<div class="">
      							<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);"  name="sexe" value="homme"  {{ $patient->dossier->sexe == 'homme' ? 'checked' : '' }} > Homme </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sexe" value="femme"  {{ $patient->dossier->sexe == 'femme' ? 'checked' : '' }}> Femme </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sexe" value="autre"  {{ $patient->dossier->sexe == 'autre' ? 'checked' : '' }}> Autre </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2">Situation Matrimoniale :</label>
								<div class="form-group col-sm-10 text-left">
									<div class="">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="celibataire" {{ $patient->dossier->sitMar == 'celibataire' ? 'checked' : '' }}> Celibataire </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="marié" {{ $patient->dossier->sitMar == 'marié' ? 'checked' : '' }}> Marié </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="divorcé" {{ $patient->dossier->sitMar == 'divorcé' ? 'checked' : '' }}> Divorcé </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="veuf" {{ $patient->dossier->sitMar == 'veuf' ? 'checked' : '' }}> Veuf </label>
									</div>
								</div>
							</fieldset>
						</div>
						<!-- </form> -->
						<button id="activate-step-2" class="btn btn-success pull-right">Suivant</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="row setup-content" id="step-2">
				<div class="col-xs-12">
					<div class="col-md-12 well text-center">
						<h3 class="text-center"> Données sociodémographiques 2/2</h3>
						<div class="text-right">
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label red">IP* :</label>
								<div class="col-sm-10 text-left">
									<input type="text" onkeypress="refuserToucheEntree(event);" value="{{ $patient->dossier->ip}} " readonly name="ip" class="form-control"
									>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">ID :</label>
								<div class="col-sm-10 text-left">
									<input type="text" onkeypress="refuserToucheEntree(event);" value="{{ $patient->dossier->ed}} " class="form-control" name="ed" >
								</div>
							</div>
							<fieldset>
								<label class="col-form-label col-sm-2">Milieu de vie :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="milieu"  value="rurale"  {{ $patient->dossier->	milieuVie == 'rurale' ? 'checked' : '' }}> Rurale </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="milieu"  value="urbain" {{ $patient->dossier->	milieuVie == 'urbain' ? 'checked' : '' }}> Urbain </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2">Résource Financière :</label>
								<div class="form-group col-sm-10 text-left">
									<div class="">
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);" value="personnelle"  {{ $patient->dossier->ressourcesFinancieres == 'personnelle' ? 'checked' : '' }} > Personnelle </label>
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);" value="paternelle" {{ $patient->dossier->ressourcesFinancieres == 'paternelle' ? 'checked' : '' }} > Paternelle </label>
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);"  value="continue" {{ $patient->dossier->ressourcesFinancieres == 'continue' ? 'checked' : '' }} > Continue </label>
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);"  value="occasionnelle" {{ $patient->dossier->ressourcesFinancieres == 'occasionnelle' ? 'checked' : '' }} > Occasionnelle </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2 ">Niveau d'etude :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio"  name="nc"  onkeypress="refuserToucheEntree(event);" value="primaire"   {{ $patient->dossier->niveauSc == 'primaire' ? 'checked' : '' }}> Primaire </label>
										<label class="radio-inline"> <input type="radio" name="nc" onkeypress="refuserToucheEntree(event);"  value="secondaire"  {{ $patient->dossier->niveauSc == 'secondaire' ? 'checked' : '' }}> Secondaire </label>
										<label class="radio-inline"> <input type="radio" name="nc" onkeypress="refuserToucheEntree(event);"  value="lycée"  {{ $patient->dossier->niveauSc == 'lycée' ? 'checked' : '' }}> Lycée </label>
										<label class="radio-inline"> <input type="radio" name="nc" onkeypress="refuserToucheEntree(event);"  value="superieur"  {{ $patient->dossier->niveauSc == 'superieur' ? 'checked' : '' }}> Superieur </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<div class="form-group row">
								<label  class="col-form-label col-sm-2">Etablisement :</label>
								<div class="col-sm-10 text-left">
									<input type="text" class="form-control" name="etab" value="{{ $patient->dossier->etab}} " onkeypress="refuserToucheEntree(event);" placeholder="Preciser l'Etablisement">
								</div>
							</div>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2">Mutualisation :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label>
											<input name="mutuel" onkeypress="refuserToucheEntree(event);" type="radio" value="oui"  {{ $patient->dossier->mutualiste == 'oui' ? 'checked' : '' }}>
											oui
										</label>
										<label>
											<input name="mutuel" onkeypress="refuserToucheEntree(event);" type="radio" value="non"  {{ $patient->dossier->mutualiste == 'non' ? 'checked' : '' }}>
											non
										</label>
										<select name="organisme" onkeypress="refuserToucheEntree(event);" id="org" class="custom-select">
											<option  {{ $patient->dossier->organisme == 'CNOPS' ? 'seleted' : '' }} >CNOPS</option>
											<option {{ $patient->dossier->organisme == 'CNSS' ? 'seleted' : '' }}>CNSS</option>
											<option {{ $patient->dossier->organisme == 'RAMED' ? 'seleted' : '' }}>RAMED</option>
											<option {{ $patient->dossier->organisme == 'Autres' ? 'seleted' : '' }}>Autres</option>
										</select>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2">Photo de patient :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<input type="file" id="avatar" onkeypress="refuserToucheEntree(event);" value="{{  $patient->dossier->avatar}}" class="custom-file-input" name="avatar"/>
									</div>
								</div>
							</fieldset>
						</div>
						<button id="activate-step-3" class="btn btn-success pull-right">Suivant</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row setup-content" id="step-3">
				<div class="col-xs-12">
					<div class="col-md-12 well text-center">
						<h4 class="text-center"> Données médicales 1/2</h4>
						<div class="text-right">
							<fieldset>
								<label class="col-form-label col-sm-2">Début de diabète :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" name="debut" onkeypress="refuserToucheEntree(event);" value="décompensation cétosique simple" {{ $patient->dossier->debutDiabete == 'décompensation cétosique simple' ? 'checked' : '' }}> Décompensation cétosique simple : </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="debut"  value="DAC" {{ $patient->dossier->debutDiabete == 'DAC' ? 'checked' : '' }}> DAC </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="debut" value="syndrome de PP" {{ $patient->dossier->debutDiabete == 'syndrome de PP' ? 'checked' : '' }}> Syndrome de PP </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="debut"  value="autres" {{ $patient->dossier->debutDiabete == 'autres' ? 'checked' : '' }}> Autres </label>
									</div>
								</div>
								</fieldset>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2">Ancienneté de diabète&nbsp;:</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);"  name="anciennete"  value=">5"   {{ $patient->dossier->anciennete == '>5' ? 'checked' : '' }}>&lt;5 </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="anciennete"  value="5-15 ans" {{ $patient->dossier->anciennete == '5-15 ans' ? 'checked' : '' }}> 5 &minus; 15 ans </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="anciennete"  value="15 ans" {{ $patient->dossier->anciennete == '>5' ? 'checked' : '15 ans' }}>	&gt; 15 ans </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<div class="form-group">
								<label class="col-form-label col-sm-2">Sensibilité au resucrage : </label>
                <div class="col-sm-10 text-left">
                  <label>5g : </label>
                  <select id="b" name="ss5"  >
                    <option >selectionné</option>
                    <option value="0,6 0,7" {{ $patient->dossier->sensibilite5g == '0,6 0,7' ? 'selected' : '' }}>0,6 0,7</option>
                    <option value="0,6 0,5" {{ $patient->dossier->sensibilite5g == '0,6 0,5' ? 'selected' : '' }}>0,6 0,5</option>
                    <option value="-0,5" {{ $patient->dossier->sensibilite5g == '-0,5' ? 'selected' : '' }}>-0,5</option>
                  </select>
                  <label>10g : </label>
                  <select id="sa" name="ss10">
                    <option>selectionné</option>
                    <option value="0,6 0,7" {{ $patient->dossier->sensibilite10g == '0,6 0,7' ? 'selected' : '' }}>0,6 0,7</option>
                    <option value="0,6 0,5" {{ $patient->dossier->sensibilite10g == '0,6 0,5' ? 'selected' : '' }}>0,6 0,5</option>
                    <option value="-0,5" {{ $patient->dossier->sensibilite10g == '-0,5' ? 'selected' : '' }}>-0,5</option>
                  </select>
                  <label>20g : </label>
                  <select id="s" name="ss15">
                    <option >selectionné</option>
                    <option value="0,6 0,7" {{ $patient->dossier->sensibilite15g == '0,6 0,7' ? 'selected' : '' }}>0,6 0,7</option>
                    <option value="0,6 0,5" {{ $patient->dossier->sensibilite15g == '0,6 0,5' ? 'selected' : '' }}>0,6 0,5</option>
                    <option value="-0,5" {{ $patient->dossier->sensibilite15g == '-0,5' ? 'selected' : '' }}>-0,5</option>
                  </select>
                 </div>
							</div>
							<hr/>
              <div class="col-sm-12 text-center">
                <label class="text-center ">Repas test :</label>
              </div>
              <br>
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label red">Objectif* :</label>
								<div class="col-sm-10">
									<input type="number" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="obj" value="{{doubleval($patient->Objectif)}}" class="form-control"
									>
								</div>
							</div>
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label red">Indice de sensibilté* :</label>
								<div class="col-sm-10">
									<input type="number" min="0" step="0.01" onkeypress="refuserToucheEntree(event);"   name="is" class="form-control" value="{{doubleval($patient->IndiceSensibilite)}}"
									>
								</div>
							</div>
              <div class="form-group row">
								<label class="col-form-label col-sm-12 text-center">Hypoglycémies mineures:</label>
								<label  class="col-sm-2 col-form-label">Nombre d'épisode par mois :</label>
								<div class="col-sm-10 text-left">
									<input type="number" min="0" name="episode" onkeypress="refuserToucheEntree(event);" class="form-control" value="{{$patient->dossier->nbrepisode}}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Chiffres le plus bas : </label>
								<div class="col-sm-10 text-left">
							<input type="text" min="0" onkeypress="refuserToucheEntree(event);" name="chifrebas" class="form-control" value="{{$patient->dossier->episodechiffreBas}}">
								</div>
							</div>
							<fieldset>
								<label class="col-form-label col-sm-2">Ressenties : </label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="ressentie"  value="oui"   {{ $patient->dossier->ressenti == 'oui' ? 'checked' : '' }}> Oui </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="ressentie"  value="non" {{ $patient->dossier->ressenti == 'non' ? 'checked' : '' }}> Non </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2">Rsucrage fait :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageF"  value="oui" {{ $patient->dossier->resucrageFait == 'oui' ? 'checked' : '' }}> Oui </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageF"  value="non" {{ $patient->dossier->resucrageFait == 'non' ? 'checked' : '' }}> Non </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<label class="col-form-label col-sm-2">Resucrage correct (sucre, soda, jus d’orange, miel, confiture) :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);"  name="resucrageC" value="oui" {{ $patient->dossier->resucrageC == 'oui' ? 'checked' : '' }} > Oui </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageC"  value="non" {{ $patient->dossier->resucrageC == 'non' ? 'checked' : '' }}> Non </label>
									</div>
								</div>
							</fieldset>
							<hr>
              <fieldset>
                <label class="col-form-label col-sm-2">Resucrage incorrect :</label>
                <div class="form-group">
                  <div class="col-sm-10 text-left">
                    <label class="radio-inline"> <input type="radio"  onkeypress="refuserToucheEntree(event);" name="resucrageI" value="oui" {{ $patient->dossier->resucrageInc == 'oui' ? 'checked' : '' }} > Oui </label>
                    <label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageI"  value="non" {{ $patient->dossier->resucrageInc == 'non' ? 'checked' : '' }} > Non </label>
                  </div>
                  <div class="col-sm-10 text-left">
                     <input type="text" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="pourquoi" class="form-control" placeholder="Pourquoi" value="{{$patient->dossier->pourquoiresenti}}">
                  </div>
                </div>
              </fieldset>
							<hr>
							<div class="col-sm-6">
								<div class="input-group">
									<input type="text" name="poids" onkeypress="refuserToucheEntree(event);" value="{{  $patient->dossier->poids}} " class="form-control" placeholder="Poids*"
									>
									<span class="input-group-addon">kg</span>
								</div><br>
								<div class="input-group">
									<input type="text" min="0" name="taille"  value="{{  $patient->dossier->taille}} " onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Taille*"
									>
									<span class="input-group-addon">cm</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="input-group">
									<input type="text" min="0" class="form-control" value="{{  $patient->dossier->tdt}} " onkeypress="refuserToucheEntree(event);" name="tdt" placeholder="TDT" >
									<span class="input-group-addon">cm</span>
								</div><br>
							</div>
						</div>
						<button id="activate-step-4" class="btn btn-success pull-right">Suivant</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row setup-content" id="step-4">
				<div class="col-xs-12">
					<div class="col-md-12 well text-center">
						<h4 class="text-center"> Données médicales</h4>
						<div class="text-right">
							<div class="form-group row">
								<label class="col-form-label col-sm-2">Durée du diabete (mois) :</label>
								<div class="col-sm-10">
									<input type="number"  min="0" name="duree"  class="form-control" value="{{$patient->dossier->dureeDiabete}}">
								</div>
							</div>
							<fieldset>
								<label class="col-form-label col-sm-2">Présence de lypodystrophie :</label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input onkeypress="refuserToucheEntree(event);" type="radio" name="lypody" value="oui"  {{ $patient->dossier->lypodystrophie == 'oui' ? 'checked' : '' }} >  Oui </label>
										<label class="radio-inline"> <input onkeypress="refuserToucheEntree(event);" type="radio" name="lypody" value="non"  {{ $patient->dossier->lypodystrophie == 'non' ? 'checked' : '' }}> Non </label>
									</div>
								</div>
							</fieldset>
              		<fieldset>
						<div class="form-group">
						  <label class="col-form-label col-sm-2 red">
							  Date change* :
						  </label>
						  <div class="col-sm-5">
							  <input type="date" name="datech" class="form-control" >
						  </div>
						</div>
					</fieldset>
					<fieldset>
						  <label class="col-form-label col-sm-2 red">
							  Heure change* :
						  </label>
						  <div class="col-sm-5">
							  <input type="time" name="timech" class="form-control" >
						  </div>
			  		</fieldset>
			<fieldset class="row">
                <label class="col-form-label col-sm-2 red">Ratio glucide – insuline* : </label>
				  			<div class="col-sm-5">
   								<div class="input-group">
   									<input type="number" min="0" step="0.01" name="petit" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Petit dejeuner" value="{{$patient->ratioPetitDej}}" >
   									<span class="input-group-addon">Ui/10g</span>
   								</div><br>
   								<div class="input-group">
   									<input type="number" min="0" step="0.01" name="dejeuner" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Dejeuner" value="{{$patient->ratioDej}}" >
   									<span class="input-group-addon">Ui/10g</span>
   								</div>
   							</div>
   							<div class="col-sm-5">
   								<div class="input-group">
   									<input type="number" min="0" step="0.01" class="form-control" onkeypress="refuserToucheEntree(event);" name="coll" placeholder="Collation" value="{{$patient->ratioColl}}" >
   									<span class="input-group-addon">Ui/10g</span>
   								</div><br>
   								<div class="input-group">
   									<input type="number"  min="0" step="0.01" class="form-control" onkeypress="refuserToucheEntree(event);" name="diner" placeholder="Diner" value="{{$patient->ratioDinnez}}" >
   									<span class="input-group-addon">Ui/10g</span>
   								</div><br>
   							</div>
              </fieldset>
							<div class="form-group row">
								<label class="col-form-label col-sm-12 text-center">Hypoglycémies majeures :</label>
                  <hr>
                  <div class="form-group">
                    <label class="col-form-label col-sm-2">Coma hypoglycémie : </label>
                      <div class="col-sm-2">
                        <label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="comaH"  value="oui" {{ $patient->dossier->coma == 'oui' ? 'checked' : '' }}> Oui </label>
                        <label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="comaH"  value="non" {{ $patient->dossier->coma == 'non' ? 'checked' : '' }}> Non </label>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <fieldset>
                  <div class="form-group">
                  <label  class="col-sm-2 col-form-label">Nombre d'épisode par mois :</label>
                  <div class="col-sm-10 text-right">
                    <input type="number" min="0"  onkeypress="refuserToucheEntree(event);" name="episode" class="form-control" value="{{$patient->dossier->nbrepisode}}">
                  </div>
                  </div>
                  </fieldset>
                  <hr>
                  <fieldset>
                  <div class="form-group row">

                    <label class="col-form-label col-sm-2">Resucrage : </label>
                      <div class="col-sm-3">
                        <label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageI"  value="Glucagon" {{ $patient->dossier->resucrageGInt == 'Glucagon' ? 'checked' : '' }}> Glucagon </label>
                        <label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageI"  value="Intraveineuse" {{ $patient->dossier->resucrageGInt == 'Intraveineuse' ? 'checked' : '' }}> Intraveineuse </label>
                      </div>
                  </div>
                  </fieldset>
						</div>
						<button id="activate-step-5" class="col-sm-1 col-sm-offset-8 btn btn-success pull-right">Suivant</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row setup-content" id="step-5">
				<div class="col-xs-12">
					<div class="col-md-12 well text-center">
						<h4 class="text-center"> Décompensations </h4>
						<div  class="text-right">
							<div class="form-group">
								<fieldset>
									<label  class="col-form-label col-sm-2">Décompensations</label>
									<div class="form-group">
										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="affichage" id="bouton_texte" onclick="javascript:afficher_cacher('texte');" value="oui" checked> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="affichage"  value="non" id="bouton_texte" onclick="javascript:afficher_cacher('texte');"> Non </label>
										</div>
									</div>
								</fieldset>
								<div id="texte" class="texte" >
								<div class="form-group row">
									<label  class="col-form-label col-sm-2">Episodes la dernière année :</label>
									<div class="col-sm-10 text-left">
										<input type="text" name="epda" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Ep/mois" value=" {{ $patient->dossier->episodeDerbierAnne}}" >
									</div>
								</div>
								<p class="row text-center">Cause :</p>
								<fieldset>
									<label class="col-form-label col-sm-2">Infection :</label>
									<div class="form-group">
										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="infection" value="oui" {{ $patient->dossier->infection == 'oui' ? 'checked' : '' }}> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="infection"  value="non" {{ $patient->dossier->infection == 'non' ? 'checked' : '' }}> Non </label>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<label class="col-form-label col-sm-2">Arrêt de traitement  :</label>
									<div class="form-group">
										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="arretTrai"  value="oui" {{ $patient->dossier->arretTrai == 'oui' ? 'checked' : '' }}> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="arretTrai"  value="non" {{ $patient->dossier->arretTrai == 'non' ? 'checked' : '' }}> Non </label>
										</div>
									</div>
								</fieldset>
								<div class="form-group row">
									<label  class="col-form-label col-sm-2">Autre :</label>
									<div class="col-sm-10 text-left">
										<textarea class="form-control" rows="5" onkeypress="refuserToucheEntree(event);" name="autre" placeholder="Entrer ..." >{{$patient->dossier->autre}}</textarea>
									</div>
								</div>
								</div>
								<div class="form-group row">
									<label  class="col-form-label col-sm-2">Mode de vie :</label>
									<div class="col-sm-10 text-left">
										<textarea class="form-control" rows="5" onkeypress="refuserToucheEntree(event);" name="modeVie" placeholder="Entrer ..."  >{{$patient->dossier->modeVie}} </textarea>
									</div>
								</div>
								<div class="form-group row">
									<label  class="col-form-label col-sm-2">Commantaire (contexte familial et psychologique) :</label>
									<div class="col-sm-10 text-left">
										<textarea class="form-control" rows="5" onkeypress="refuserToucheEntree(event);" name="autreCause" placeholder="Entrer ..." >{{$patient->dossier->comment}}</textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
	<input type="hidden" value="{{ Session::token() }}" name="_token" >
  <div  style="text-align: center; padding: 10px;">
    <button type="submit"  class="btn btn-primary">Enregistrer</button>
    <a  href="{{ URL()->previous()}}"  style="margin-left:10px;" class="btn btn-danger  tn-sm  ">Annuller</a>
  </div>

</div>

</div></div></div></div>

</form>
		<script>
			$(':radio[name=mutuel]').change(function () {
				var prop = this.value == 'non';
				$('select[name=organisme]').prop({ disabled: prop, required: !prop });
			});

		</script>


		<script type="text/javascript">
    $( "#datepicker" ).datepicker({

			format: 'DD-MM-YYYY',
            maxDate: new Date,
            autoclose: true,

    }


    	).attr('readonly', 'readonly');

</script>

<script type="text/javascript">

	function refuserToucheEntree(event)
    {
        // Compatibilité IE / Firefox
        if(!event && window.event) {
            event = window.event;
        }
        // IE
        if(event.keyCode == 13) {
            event.returnValue = false;
            event.cancelBubble = true;
        }
        // DOM
        if(event.which == 13) {
            event.preventDefault();
            event.stopPropagation();
        }
    }
</script>
@stop
