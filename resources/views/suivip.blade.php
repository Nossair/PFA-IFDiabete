@extends('adminlte::page')

@section('title','Evolution du patient')

@section('content_header')
    <style type="text/css">


        input:focus:invalid {
            outline: none;
        }
    </style>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- form start -->
            <form method="POST" id="mainForm" action={{ route('postEvolution') }} >
                {{ csrf_field()}}
                <div class="box box-solid">
                    <div class="box-header with-border">

                        <h3 class="box-title fa fa-folder-open"><b> IP Patient : </b><i>{{$patient ->dossier->ip}}</i> </h3>
                        <h3 class="box-title" style="padding-left: 100px"><b style="padding-right: 10px"> Nom:</b>{{$patient -> nom}} </h3>
                        <h3 class="box-title" style="padding-left: 100px"><b style="padding-right: 10px"> Prénom: </b>{{$patient -> prenom}} </h3>
                    </div>
                </div>
                <div class="box box-warning">
                    <!-- medicale -->
                    <div class="box-body">
                        <div class="col-sm-5">
                            <div class="form-group" style="padding-left: 20px">
                                <label>Date de consultation:</label>

                                <div class="input-group date" style="padding-top: 6px">
                                    <div class="input-group-addon" style="width: auto">
                                        <i class="fa fa-calendar" ></i>
                                    </div>
                                    <input type="date" name="dateConsult" class="form-control pull-right" id="datepicker"  style="width: 138px" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group" style="padding-left: 20px">
                                <label>Heure de consultation:</label>

                                <div class="input-group date" style="padding-top: 6px">
                                    <div class="input-group-addon" style="width: auto">
                                        <i class="fa fa-clock-o" ></i>
                                    </div>
                                    <input type="time" name="timeConsult" class="form-control pull-right" id="reservedtimer" style="width: 138px" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group" style="padding-top: 20px; padding-left: 20px">
                                <label for="inputPD">Confirmez l'IP :</label>
                                <input type="text" class="form-control" id="nomPatient" name="nomPatient"  value="{{$patient ->dossier->ip}}" style="width: auto" readonly>
                            </div>

                            <div class="form-group" style="padding-top: 12px">
                                <label>Hypoglycémies majeurs :</label>
                                <ul style="padding-top: 12px">
                                    <li>
                                        <div class="form-group">
                                            <label>Coma hypoglycémie :</label>
                                            <div class="radio">
                                                                <label>
                                                                    <input value=" oui " name="Coma" type="radio" required>
                                                                    oui
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" value="non" name="Coma">
                                                                    non
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                    <div class="form-group">
                                                    <label>Nombre d’hypoglycémie Majeurans </label> <label> (la dernières année):</label>
                                                    <input type="number" step='0.01' class="form-control" id="Duree" name="nbreHMaj" placeholder="g" style="width: auto" required>
                                                    </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-group">
                                                            <label>Resucrage : </label>
                                                            <div class="radio">
                                                                <label>
                                                                    <input value=" oui " name="Resucrage" type="radio" required>
                                                                    glucagon
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" value="non" name="Resucrage">
                                                                    Intraveineuse
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                            <div class="form-group">
                                <label>Autres  :</label>
                                <textarea class="form-control" rows="3" name="Autres" placeholder="Entrer ..." required></textarea>
                            </div>

                                        </div>
                                        <div class="col-sm-5">
                                            <div class="col-sm-6">
                                                <div class="input-group" style="padding-top: 12px">
                                                    <input type="text" name="poids" class="form-control" placeholder="Poids" >
                                                    <span class="input-group-addon" required>kg</span>
                                                </div><br>
                                                <div class="input-group">
                                                    <input type="text" name="HbA1c" class="form-control" placeholder="HbA1c">
                                                    <span class="input-group-addon" required>g</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group" style="padding-top: 12px">
                                                    <input type="text" class="form-control" name="imc" placeholder="IMC" >
                                                    <span class="input-group-addon" required>kg/m²</span>
                                                </div><br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="tdt" placeholder="TDT">
                                                    <span class="input-group-addon" required>cm</span>
                                                </div><br>
                                            </div>
                                            <div class="form-group" style="padding-top: 12px; padding-left: 20px">
                                                <label for="inputPD">Indice de la sensibilite :</label>
                                                <input type="number" step='0.01' class="form-control" id="indice" name="is" placeholder=". . . . . . g/l" style="width: auto" required>
                                            </div>
                                            <div><label>Ratio glucide-insuline</label></div>
                                            <div class="col-sm-6">
                                                <div class="input-group" style="padding-top: 12px">
                                                    <input type="text" name="petit" class="form-control" placeholder="Petit Dejeuner" required>
                                                    <span class="input-group-addon"> Ui/10g </span>
                                                </div><br>
                                                <div class="input-group">
                                                    <input type="text" name="dejeuner" class="form-control" placeholder="Dejeuner" required>
                                                    <span class="input-group-addon"> Ui/10g </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group" style="padding-top: 12px">
                                                    <input type="text" class="form-control" name="coll" placeholder="Collation" required>
                                                    <span class="input-group-addon"> Ui/10g </span>
                                                </div><br>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="diner" placeholder="Diner" required>
                                                    <span class="input-group-addon"> Ui/10g </span>
                                                </div><br>
                                            </div>
                                            <div class="form-group" style="padding-top: 12px">
                                                <label>Hypoglycémies mineurs :</label><br>
                                                <ul style="padding-top: 12px">
                                                    <li><label for="Duree">Nombre d'épisode par mois :</label>
                                                        <input type="number" class="form-control" id="Duree" name="nbEpHmi" placeholder="Ep/mois" required></li>
                                                    <br>
                                                    <li><label for="Duree">Chiffres le plus bas :</label>
                                                        <input type="number" class="form-control" id="Duree" name="chPBHmi" placeholder="g/l" required></li>
                                                    <br>
                                                    <li>
                                                        <div class="form-group">
                                                            <label>Ressenties :</label>
                                                            <div class="radio">
                                                                <label>
                                                                    <input value=" oui " name="ressentie" type="radio" required>
                                                                    oui
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" value="non" name="ressentie">
                                                                    non
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </li><li>
                                                        <div class="form-group">
                                                            <label>Rsucrage fait :</label>
                                                            <div class="radio">
                                                                <label>
                                                                    <input value=" oui " name="resucrf" type="radio" required>
                                                                    oui
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" value="non" name="resucrf">
                                                                    non
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-group">
                                                            <label>Resucrage correct </label> <label> (sucre, soda, jus d’orange, miel, confiture) : </label>
                                                            <div class="radio">
                                                                <label>
                                                                    <input value=" oui " name="resucrC" type="radio" required>
                                                                    oui
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" value="non" name="resucrC">
                                                                    non
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-group">
                                                            <label>Resucrage incorrect : </label>
                                                            <div class="radio">
                                                                <label>
                                                                    <input value=" oui " name="resucrI" type="radio" required>
                                                                    oui
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" value="non" name="resucrI">
                                                                    non
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                              <div class="form-group">
                                <label>Conduite a tenir  :</label>
                                <textarea class="form-control" rows="3" name="conduite" placeholder="Entrer ..." required></textarea>
                            </div>
                                            <input type="hidden" value="{{ Session::token() }}" name="_token" >

                                        </div>
                                    </div>
                                    <!-- /.box-body -->


                            <div class="box-footer">
                                <label class="col-form-label col-sm-2 red" style="color:red;">NB: Tous les champs sont obligatoires :</label> <br>
                                <button type="submit"  class="btn btn-primary">Ajouter</button>
                            </div>
                <!-- /.box -->
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
    <!-- -------------------------/.content-wrapper------------------- -->

@stop
