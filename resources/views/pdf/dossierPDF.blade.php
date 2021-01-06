@extends('adminlte::page')
@section('title','Resume')
@section('content_header')
	<link type="text/css" rel="stylesheet" href="{{asset('css/a4css.css')}}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery.min.js"></script>
@stop
@section('content')
<body>
 <page class="A4">
		 <div class="row">
			 <div class="col-xs-6 col-md-4">
				<img class="img-thumbnail" width="180" height="230" src="{{asset('images/'.$dossier->avatar)}}" alt="{{$patient->nom}} {{$patient->prenom}}" />
			</div>
			<div class="col-xs-6 col-md-4">
				<h1>{{$patient->nom}} {{$patient->prenom}}<br/></h1>
				<ul class="nav nav-tabs nav-justified">
					<li class="glyphicon glyphicon-home ">&nbsp;{{$patient->dossier->addresse}}</li><br>
					<li class="glyphicon glyphicon-info-sign">&nbsp;{{$patient->dossier->ip}}</li><br>
					<li class="glyphicon glyphicon-phone-alt">&nbsp;{{$patient->dossier->tel}}</li><br>
					<li class="glyphicon glyphicon-envelope">&nbsp;{{ $patient->dossier->age}}</li><br>
					<li class="glyphicon glyphicon-user">&nbsp;{{$patient->dossier->sexe}}</li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-4 btn_print">
				<ul>
					<li class="glyphicon glyphicon-print" alt="Imprimer"><a href="javascript:window.print()" title="Print">&nbsp;Imprimer</a></li>
				</ul>
			</div>
		</div>
	<h2>Données Sociologiques</h2>

	<table  class="table table-bordered">
		<thead>
			<td>IP</td>
			<td>EP</td>
			<td>Niveau de vie</td>
			<td>Niveau social</td>
			<td>Situation Matrimoniale</td>
			<td>Fratrie</td>
			<td>Ressources financieres</td>
			<td>Mutualiste</td>
			<td>Organisme</td>
		</thead>
		<tbody>
			<td>{{$patient->dossier->ip}}</td>
			<td>{{$patient->dossier->ed}}</td>
			<td>{{$patient->dossier->milieuVie}} </td>
			<td>{{$patient->dossier->niveauSc}} </td>
			<td>{{$patient->dossier->sitMar}}</td>
			<td>{{$patient->dossier->fraterie}} </td>
			<td> {{$patient->dossier->ressourcesFinancieres}} </td>
			<td>{{$patient->dossier->mutualiste}} </td>
			<td>{{$patient->dossier->organisme}}</td>
		</tbody>
	</table>
<h2>Données Medicales</h2>
<table class="table table-bordered">
	<thead>
		<td>Debut</td>
		<td>Durée</td>
		<td>ancienneté</td>
		<td>Poids</td>
		<td> Taille </td>
		<td>DTD</td>
		<td>IMC</td>
		<td>Lypodystrophie</td>
		<td>Organisme</td>
	</thead>
	<tbody>
		<td>{{$patient->dossier->debutDiabete}}</td>
		<td>{{$patient->dossier->dureeDiabete}} </td>
		<td>{{$patient->dossier->anciennete}}</td>
		<td>{{$patient->dossier->poids}} </td>
		<td>{{$patient->dossier->taille}}</td>
		<td> {{$patient->dossier->tdt}}</td>
		<td>{{$patient->dossier->imc}} </td>
		<td>{{$patient->dossier->lypodystrophie}} </td>
		<td>{{$patient->dossier->organisme}}</td>
	</tbody>
</table>
<h2>Taux de la Glicemie</h2>

<h3>Ratios</h3>
<ul>
	<li>Petit déjeuner  : {{$patient->ratioPetitDej}} Ui- 10g</li>
	<li> Dejeuner  : {{$patient->ratioDej}} Ui- 10g </li>
	<li> Collation :{{$patient->ratioColl}} Ui- 10g </li>
	<li> Diner {{$patient->ratioDinnez}} Ui- 10g</li>
</ul>
<h3>Objectif</h3>
<ul>
	<li>Indisce de sensibilité : {{$patient->IndiceSensibilite}} Ui- 10g</li>
	<li> Objectif :{{$patient->Objectif}} Ui- 10g </li>
</ul>
</page>
</body>
</html>
@stop
