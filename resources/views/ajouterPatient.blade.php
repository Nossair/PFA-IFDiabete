@extends('adminlte::page')
@section('title','Nouveau Patient')
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
  .btn_valid {
	  text-align:left;
  }
</style>
@stop
@section('content')
<div class="box-header with-border">

<section class="content-header">
	<h1>
		<i class="fa fa-folder-open"></i> Ajout de Patient
	</h1>

</section>
</div>

<div class="container">
	<div class="row form-group">
		<div class="col-xs-12">
			<ul class="nav nav-pills nav-justified thumbnail setup-panel">
				<li class="active"><a href="#step-1">
					<h4 class="list-group-item-heading">Etape 1</h4>
					<p class="list-group-item-text">Données sociodémographiques 1/2</p>
				</a></li>
				<li class="disabled"><a href="#step-2">
					<h4 class="list-group-item-heading">Etape 2</h4>
					<p class="list-group-item-text">Données sociodémographiques 2/2</p>
				</a></li>
				<li class="disabled"><a href="#step-3">
					<h4 class="list-group-item-heading">Etape 3</h4>
					<p class="list-group-item-text">Données médicales 1/2</p>
				</a></li>
				<li class="disabled"><a href="#step-4">
					<h4 class="list-group-item-heading">Etape 4</h4>
					<p class="list-group-item-text">Données médicales 2/2</p>
				</a>
			</li>
			<li class="disabled"><a href="#step-5">
				<h4 class="list-group-item-heading">Etape 5</h4>
				<p class="list-group-item-text">Décompensations:</p>
			</a>
		</li>
	</ul>
</div>
</div>
</div>
<form method="POST" enctype="multipart/form-data" id="myForm" name="myForm" action="{{ route('postPatient') }}">

	@if ( $errors !=null and $errors->any())
		<div class="alert alert-danger" style="margin: 0px 15px 15px;">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{{ csrf_field()}}
	<div class="container">
		<div class="row setup-content" id="step-1">
			<div class="col-xs-12 ">
				<div class="col-md-12 well text-center">
					<h3> Données sociodémographiques 1/2</h3>
					<hr>
					<!-- <form> -->

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Date :</label>
						<div class="col-sm-10 text-left">
							<input type="text"  onkeypress="refuserToucheEntree(event);" id="datepicker" value="@isset($dossier){{ $dossier->dateC}}@endisset "  name="dateC" class="form-control ">
						</div>
					</div>
						<div class="form-group row">
							<label  class="col-sm-2  col-form-label">Heure :</label>
							<div class="col-sm-10 text-left">

								<input type="text" onkeypress="refuserToucheEntree(event);" value="@isset($dossier){{$dossier->timeC}}@endisset " name="timeC" class="form-control">
							</div>
						</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label red" >Nom* :</label>
						<div class="col-sm-10 text-left">
							<input type="text" name="name" onkeypress="refuserToucheEntree(event);" value="@isset($patient){{$patient->nom}}@endisset" class="form-control"
							>

						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label red">Prémon* :</label>
						<div class="col-sm-10 text-left">
							<input type="text" name="prenom" onkeypress="refuserToucheEntree(event);" value="@isset($patient){{$patient->prenom}}@endisset " class="form-control">

						</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label red">Age* :</label>
						<div class="col-sm-10 text-left">
							<input type="number"  onkeypress="refuserToucheEntree(event);" value="@isset($dossier){{intval($dossier->age)}}@endisset"
								   class="form-control" name="age" >

						</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Adresse :</label>
						<div class="col-sm-10 text-left">
							<input type="text" onkeypress="refuserToucheEntree(event);" value="@isset($dossier){{$dossier->addresse}}@endisset "  name="addresse" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Fratrie :</label>
						<div class="col-sm-10 text-left">
							<input type="number" min="0" onkeypress="refuserToucheEntree(event);" value="@isset($dossier){{intval($dossier->fraterie)}}@endisset"  name="fraterie" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Telephone :</label>
						<div class="col-sm-10 text-left">
							<input type="text" onkeypress="refuserToucheEntree(event);" value="@isset($dossier){{$dossier->tel}} @endisset" name="tel" class="form-control">
						</div>
					</div>
					<fieldset>
						<label class="col-form-label col-sm-2 red">Genre* :</label>
						<div class="form-group col-sm-10 text-left">
							<div class="">
								<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);"  name="sexe" value="homme" @isset($dossier){{ $dossier->sexe == 'homme' ? 'checked' : '' }}@endisset > Homme </label>
								<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sexe" value="femme"  @isset($dossier){{ $dossier->sexe == 'femme' ? 'checked' : '' }}@endisset> Femme </label>
								<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sexe" value="autre"  @isset($dossier){{ $dossier->sexe == 'autre' ? 'checked' : '' }}@endisset> Autre </label>
							</div>
						</div>
					</fieldset>
					<hr>
					<fieldset>
						<label class="col-form-label col-sm-2">Situation Matrimoniale :</label>
						<div class="form-group col-sm-10 text-left">
							<div class="">
								<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="celibataire" @isset($dossier){{ $dossier->sitMar == 'celibataire' ? 'checked' : '' }}@endisset> Celibataire </label>
								<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="marié" @isset($dossier){{ $dossier->sitMar == 'marié' ? 'checked' : '' }}@endisset> Marié </label>
								<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="divorcé" @isset($dossier){{ $dossier->sitMar == 'divorcé' ? 'checked' : '' }}@endisset> Divorcé </label>
								<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="sm"  value="veuf" @isset($dossier){{ $dossier->sitMar == 'veuf' ? 'checked' : '' }}@endisset> Veuf </label>
							</div>
						</div>
					</fieldset>

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
						<hr>

						<div class="form-group row">
							<label  class="col-sm-2 col-form-label red">IP* :</label>
							<div class="col-sm-10 text-left">
								<input type="text" onkeypress="refuserToucheEntree(event);" value="@isset($dossier){{ $dossier->ip}} @endisset"  name="ip" class="form-control"
								>
							</div>
						</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label text-left">ED :</label>
								<div class="col-sm-10">
									<input type="text" onkeypress="refuserToucheEntree(event);"  class="form-control" name="ed" >
								</div>
							</div>
							<fieldset>

								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Milieu de vie :</label>

									<div class="col-sm-10 btn_valid">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="milieu"  value="rurale"> Rurale </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="milieu"  value="urbain"> Urbain </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Résource Financière :</label>
								<div class="col-sm-10 btn_valid">
									<div class="">
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);" value="personnelle"> Personnelle : </label>
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);" value="paternelle"> Paternelle :</label>
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);"  value="continue"> Continue :</label>
										<label class="radio-inline"> <input type="radio" name="rf" onkeypress="refuserToucheEntree(event);"  value="occasionnelle"> Occasionnelle : </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2  text-left">Niveau d'etude :</label>
								<div class="col-sm-10 btn_valid">
									<div class="">
										<label class="radio-inline"> <input type="radio"  name="nc"  onkeypress="refuserToucheEntree(event);" value="primaire" > Primaire </label>
										<label class="radio-inline"> <input type="radio" name="nc" onkeypress="refuserToucheEntree(event);"  value="secondaire"> Secondaire </label>
										<label class="radio-inline"> <input type="radio" name="nc" onkeypress="refuserToucheEntree(event);"  value="lycée"> Lycée </label>
										<label class="radio-inline"> <input type="radio" name="nc" onkeypress="refuserToucheEntree(event);"  value="superieur"> Superieur </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<div class="form-group row">
								<label  class="col-form-label col-sm-2 text-left">Etablisement :</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="etab"  onkeypress="refuserToucheEntree(event);" placeholder="Preciser l'Etablisement">
								</div>
							</div>
							<hr>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Mutualisation :</label>
								<div class=" col-sm-10 btn_valid">
									<div c>
										<label class="radio-inline">
											<input type="radio" name="mutuel" onkeypress="refuserToucheEntree(event);"  value="oui"> oui
										</label>
										<label class="radio-inline">
											<input type="radio" name="mutuel" onkeypress="refuserToucheEntree(event);"  value="non"> non
										</label>

										<select name="organisme" onkeypress="refuserToucheEntree(event);" id="org" class="custom-select">
											<option>CNOPS</option>
											<option>CNSS</option>
											<option>RAMED</option>
											<option>Autres</option>
										</select>
									</div>
								</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Photo de patient :</label>

									<div class="col-sm-10">
										<input type="file" id="avatar" onkeypress="refuserToucheEntree(event);" class="custom-file-input" name="avatar" >
									</div>
								</div>
							</fieldset>
						<button id="activate-step-3" class="btn btn-success pull-right">Suivant</button>
					</div>
				</div>
			</div>
		</div>



		<div class="container">
			<div class="row setup-content" id="step-3">
				<div class="col-xs-12">
					<div class="col-md-12 well text-center">
						<h3 class="text-center"> Données médicales 1/2</h3>
						<div class="text-right">
							<hr>

							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Début de diabète :</label>

									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" name="debut" onkeypress="refuserToucheEntree(event);" value="décompensation cétosique simple"> Décompensation cétosique simple : </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="debut"  value="DAC"> DAC </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="debut" value="syndrome de PP"> Syndrome de PP </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="debut"  value="autres"> Autres </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>

								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Ancienneté de diabète&nbsp;:</label>

									<div class="col-sm-10 text-left ">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);"  name="anciennete"  value=">5" checked>&lt;5 </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="anciennete"  value="5-15 ans"> 5 &minus; 15 ans :</label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="anciennete"  value="15 ans">	&gt; 15 ans </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>

								<div class="form-group row">
									<label class="col-form-label col-sm-2 text-left">Sensibilité au resucrage : </label>
										<div class="col-sm-10 text-left">
  										<label> &ensp;5g  : </label>
  										<select id="b" name="ss5"  >
  											<option selected>selectionné</option>
  											<option value="0,6 0,7">0,6 0,7</option>
  											<option value="0,6 0,5">0,6 0,5</option>
  											<option value="-0,5">-0,5</option>
  										</select>
                                            <br/>
                    					<label>10g : </label>
  										<select id="sa" name="ss10">
  											<option selected>selectionné</option>
  											<option value="0,6 0,7">0,6 0,7</option>
  											<option value="0,6 0,5">0,6 0,5</option>
  											<option value="-0,5">-0,5</option>
  										</select>
                                            <br/>
                   						 <label>20g : </label>
  										<select id="s" name="ss15">
  											<option selected>selectionné</option>
  											<option value="0,6 0,7">0,6 0,7</option>
  											<option value="0,6 0,5">0,6 0,5</option>
  											<option value="-0,5">-0,5</option>
										</select>
								   </div>
                				</div>
							</fieldset>
							<hr>


							<label class="col-form-label col-sm-12 text-center"><h4>Repas test</h4></label>

							<div class="form-group row">
								<label  class="col-sm-2 col-form-label red text-left">Objectif* :</label>
								<div class="col-sm-10 text-left">
									<input type="number" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="obj"
										   value="1" class="form-control"
									>
								</div>
							</div>
							<div class="form-group row">
								<label  class="col-sm-2 col-form-label red text-left">Indice de sensibilté* :</label>
								<div class="col-sm-10 text-left">
									<input type="number" min="0" step="0.01" onkeypress="refuserToucheEntree(event);"
										   name="is" class="form-control" value="@isset($patient){{doubleval($patient->IndiceSensibilite)}}@endisset"
									>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-form-label col-sm-12 text-center"> <h4> Hypoglycémies mineures: </h4></label>
								<label  class="col-sm-2 col-form-label text-left">Nombre d'épisode par mois :</label>
								<div class="col-sm-10 text-left">
									<input type="number" min="0" name="episode" onkeypress="refuserToucheEntree(event);" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label text-left"> Chiffres le plus bas : </label>
								<div class="col-sm-10 text-left">
							<input type="text" min="0" onkeypress="refuserToucheEntree(event);" name="chifrebas" class="form-control">
								</div>
							</div>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Ressenties : </label>
								<div class="form-group">
									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="ressentie"  value="oui"> Oui </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="ressentie"  value="non"> Non </label>
									</div>
								</div>
							</fieldset>
							<hr>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Resucrage fait :</label>

									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageF"  value="oui" > Oui </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageF"  value="oui"> Non </label>
									</div>
								</div>

							</fieldset>
							<hr>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Resucrage correct (sucre, soda, jus d’orange, miel, confiture) :</label>

									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);"  name="resucrageC" value="oui" > Oui </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageC"  value="non"> Non </label>
									</div>
								</div>

							</fieldset>

                            <hr>

                            <fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Resucrage incorrect :</label>

									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input type="radio"  onkeypress="refuserToucheEntree(event);" name="resucrageI" value="oui" > Oui </label>
										<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageI"  value="non"> Non </label>
									</div>

                                    <div class="col-sm-10 text-left">
										 <input type="text" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="pourquoi" class="form-control" placeholder="Pourquoi">
									</div>
								</div>

							</fieldset>
							<hr>

                            <fieldset>


							<div class="form-group row">
                            <div >
								<label class="col-form-label col-sm-2 red text-left">Poids :</label>

                                <div class="text-left col-sm-7">
                                    <div class=" input-group ">
                                        <input type="number" min="0" name="poids" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Poids*"
										>
									    <span class="input-group-addon" >kg</span>
                                    </div>
                                </div>
                            </div>
                                <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="number" min="0"  class="form-control" onkeypress="refuserToucheEntree(event);" name="tdt" placeholder="TDT" >
                                    <span class="input-group-addon">cm</span>
                                </div>
                                </div>

                            </div>
                            </fieldset>
            					<br>
                            <div class="form-group row">

                				<label class="col-form-label col-sm-2 red text-left">Tailles :</label>
								<div class=" col-sm-7">
                                    <div class="input-group">
									<input type="number" name="taille"  min="0" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Taille*" >
									<span class="input-group-addon">cm</span>
                                    </div>
								</div>
                            </div>


                            </div>
						</div>
						<button id="activate-step-4" class="btn btn-success pull-right">Suivant</button>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="row setup-content" id="step-4">
				<div class="col-xs-12">
					<div class="col-md-12 well text-center">
						<h3 class="text-center"> Données médicales</h3>
						<div class="text-right">
							<hr>

							<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Durée du diabete (mois) :</label>
								<div class="col-sm-10 text-left">
									<input type="number"  name="duree" class="form-control">
								</div>
							</div>
							<hr>
							<fieldset>
								<div class="form-group row">
								<label class="col-form-label col-sm-2 text-left">Présence de lypodystrophie :</label>

									<div class="col-sm-10 text-left">
										<label class="radio-inline"> <input onkeypress="refuserToucheEntree(event);" type="radio" name="lypody" value="oui" >  Oui </label>
										<label class="radio-inline"> <input onkeypress="refuserToucheEntree(event);" type="radio" name="lypody" value="non"> Non </label>
									</div>
								</div>
							</fieldset>



						<hr>

							<div class="form-group row">
								<div class="form-group row">

									<label class="col-form-label col-sm-2 red text-left">Ratio glucide – insuline* : </label>
									<div class="col-sm-5">
										<div class="input-group">
											<input type="number" min="0" step="0.01" name="petit" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Petit dejeuner" value="@isset($patient){{$patient->ratioPetitDej}}@endisset" >
											<span class="input-group-addon">Ui/10g</span>
										</div><br>
										<div class="input-group">
											<input type="number" min="0" step="0.01" name="dejeuner" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Dejeuner" value="@isset($patient){{$patient->ratioDej}}@endisset" >
											<span class="input-group-addon">Ui/10g</span>
										</div>
									</div>


								<div class="col-sm-5">
                					<label class="col-form-label col-sm-2 text-right"></label>
										<div class="input-group">

											<input type="number" min="0" step="0.01" class="form-control" onkeypress="refuserToucheEntree(event);" name="coll" placeholder="Collation"  >
											<span class="input-group-addon">Ui/10g</span>
										</div><br>
                					<label class="col-form-label col-sm-2 text-right"></label>
										<div class="input-group">
											<input type="number" min="0" step="0.01" class="form-control" onkeypress="refuserToucheEntree(event);" name="diner" placeholder="Diner"  >
											<span class="input-group-addon">Ui/10g</span>
										</div>
									<br>
								</div>
							</div>

							<hr>
							<div class="form-group row">
								<label class="col-form-label col-sm-12 text-center"><h4>Hypoglycémies majeures : </h4></label>
								<hr>
								<hr>
								<div class="form-group">
									<label class="col-form-label col-sm-2 text-left">Coma hypoglycémie : </label>
										<div class="col-sm-2 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="comaH"  value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="comaH"  value="non"> Non </label>
										</div>
									</div>
								</div>

								<hr>
								<fieldset>
								<div class="form-group row">
								<label  class="col-sm-2 col-form-label text-left">Nombre d'épisode par mois :</label>
								<div class="col-sm-10 text-right">
									<input type="number" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="nbrepisode" class="form-control">
								</div>
								</div>
								</fieldset>
								<hr>
								<fieldset>
								<div class="form-group row">

									<label class="col-form-label col-sm-2 text-left">Resucrage : </label>
										<div class="col-sm-3 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageGInt"  value="Glucagon"> Glucagon </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="resucrageGInt"  value="Intraveineuse"> Intraveineuse </label>
										</div>
								</div>
								</fieldset>
						</div>
						<button id="activate-step-5" class="btn btn-success pull-right">Suivant</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row setup-content" id="step-5">
				<div class="col-xs-12">
					<div class="col-md-12 well text-center">
						<h3 class="text-center"> Décompensations </h3>
						<div class="text-right">
							<hr>
							<div class="form-group row">
								<fieldset>
									<label  class="col-form-label col-sm-2 text-left">Décompensations :</label>

										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="affichage" id="bouton_texte" onclick="javascript:afficher_cacher('texte');" value="oui" checked> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="affichage"  value="non" id="bouton_texte" onclick="javascript:afficher_cacher('texte');"> Non </label>
										</div>
								</fieldset>
							</div>



								<hr>


								<div class="form-group row">
									<label  class="col-form-label col-sm-2 text-left">Episodes la dernière année :</label>
									<div class="col-sm-10 text-left">
										<input type="text" name="epda" onkeypress="refuserToucheEntree(event);" class="form-control" placeholder="Episode dernière année" >
									</div>
								</div>
							<hr>



                            <div class="row text-center">
                                <p class="col-sm-12 "> <h4>Cause : </h4></p>
                            </div>
								<fieldset class="row">
									<label class="col-form-label col-sm-2 text-left">Infection :</label>
									<div class="form-group">
										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="infection" value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="infection"  value="non"> Non </label>
										</div>
									</div>
								</fieldset>
								<fieldset>
									<div class="form-group row">

									<label class="col-form-label col-sm-2 text-left">Arrêt de traitement :</label>
										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="arretTrai"  value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="arretTrai"  value="non"> Non </label>
										</div>
									</div>
								</fieldset>
								<div class="form-group row">
									<label  class="col-form-label col-sm-2 text-left">Autre :</label>
									<div class="col-sm-10 text-left">
										<textarea class="form-control" rows="3" onkeypress="refuserToucheEntree(event);" name="autre" placeholder="Entrer ..." ></textarea>
									</div>
								</div>
							</div>

						<hr>
								<div class="row">
									<p class="col-sm-12 text-center"> <h4>Complication Chronique : </h4></p>
								</div>
						<div class="form-group row">
								<fieldset >
									<label class="col-form-label col-sm-2 text-left">Rétionophie :</label>
									<div class="form-group">
										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="retionophie" value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="retionophie"  value="non"> Non </label>
											</div><br>
											<div class="col-sm-6 text-left">
												<input type="text" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="stadeRe" class="form-control" placeholder="Stade">
											</div><br>
									</div>
								</fieldset>
						</div>
							<div class="form-group row">
								<fieldset>
									<label class="col-form-label col-sm-2 text-left">Néphropathie :</label>
									<div class="form-group">
										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="nephropathie" value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="nephropathie"  value="non"> Non </label>
											</div><br>
											<div class="col-sm-6 text-left">
												<input type="text" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="stadeneph" class="form-control" placeholder="Stade">
											</div><br>
									</div>
								</fieldset>
							</div>
						<br/>
								<div class="form-group row">
									<fieldset >
									<label class="col-form-label col-sm-2 text-left">Neuropathie :</label>

										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="neuropathie" value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="neuropathie"  value="non"> Non </label>
										</div>
										<br/>
									</fieldset>
								</div>
										<div class="form-group row">
											<fieldset>
											<label class="col-form-label col-sm-2 text-left">Stabilisée :</label>
											<div class="col-sm-2 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="stabilise" value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="stabilise"  value="non"> Non </label>
											</div>


										</fieldset>
										</div>
                                    <br/>
						<div class="form-group row">
								<fieldset>
									<label class="col-form-label col-sm-2 text-left">HTA :</label>

										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="HTA" value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="HTA"  value="non"> Non </label>
											</div><br>
											<div class="col-sm-6 text-left">
												<input type="text" min="0" step="0.01" onkeypress="refuserToucheEntree(event);" name="" class="form-control" placeholder="ttt">
											</div>
									<br>

								</fieldset>
						</div>
						<div class="form-group row">
								<fieldset>
									<label class="col-form-label col-sm-2 text-left">Coronaropathie :</label>

										<div class="col-sm-10 text-left">
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="coronaropathie" value="oui"> Oui </label>
											<label class="radio-inline"> <input type="radio" onkeypress="refuserToucheEntree(event);" name="coronaropathie"  value="non"> Non </label>
											</div>

								</fieldset>
						</div>
							<hr>
								<div class="row">
									<p class="col-sm-12 text-center"><h4>Sur le plan métabolique:</h4></p>
								</div>

						<div class="form-group row">
								 <label class="col-form-label col-sm-2 text-left">HbA1c initiale : </label>
							<div class="col-sm-5">
								<div class="input-group">
									<input type="number" min="0" step="0.01" name="LDL" onkeypress="refuserToucheEntree(event);" class="form-control" >
									<span class="input-group-addon">LDL</span>
								</div><br>
								<div class="input-group">
									<input type="number" min="0" step="0.01" name="HDL" onkeypress="refuserToucheEntree(event);" class="form-control"  >
									<span class="input-group-addon">HDL</span>
								</div><br>
								<div class="input-group">
									<input type="number" min="0" step="0.01" name="TG" onkeypress="refuserToucheEntree(event);" class="form-control" >
									<span class="input-group-addon">TG</span>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="input-group">
									<input type="number" min="0" step="0.01" class="form-control" onkeypress="refuserToucheEntree(event);" name="CholT" >
									<span class="input-group-addon">CholT</span>
								</div><br>
								<div class="input-group">
									<input type="number" min="0" step="0.01" class="form-control" onkeypress="refuserToucheEntree(event);" name="ACurique"  >
									<span class="input-group-addon">AC urique</span>
								</div><br>
								<div class="input-group">
									<input type="number" min="0" step="0.01" class="form-control" onkeypress="refuserToucheEntree(event);" name="vitD" >
									<span class="input-group-addon">Vit D</span>
								</div><br>
							</div>
						</div>
								<div class="form-group row">
									<label  class="col-form-label col-sm-2 text-left">Mode de vie :</label>
									<div class="col-sm-10 text-left">
										<textarea class="form-control" rows="3" onkeypress="refuserToucheEntree(event);" name="modeVie" placeholder="Entrer ..." ></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label  class="col-form-label col-sm-2 text-left">Commentaire (contexte familial et psychologique) :</label>
									<div class="col-sm-10 text-left">
										<textarea class="form-control" rows="3" onkeypress="refuserToucheEntree(event);" name="comment" placeholder="Entrer ..." ></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



	</fieldset>

	<input type="hidden" value="{{ Session::token() }}" name="_token" >
	<div  style="text-align: center;">
        <button type="submit"  class="btn btn-primary" style="background-color: #554269">Enregister</button>
        <a  href="{{ URL()->previous()}}"  style="margin-left: 10px;" class="btn btn-danger  tn-sm ">Annuller</a>
    </div>



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
