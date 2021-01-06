@extends('adminlte::page')

@section('title','Nouveau Aliment ')

@section('content_header')
    <style type="text/css">
        input[type=text],
        input[type=email],
        input[type=number],
        input[type=tel],
        input[type=date],
        textarea,
        select,
        fieldset {
            /* required to properly style form
               elements on WebKit based browsers */
            -webkit-appearance: none;

            width : 100%;
            border: 1px solid #333;
            margin: 0;

            font-family: inherit;
            font-size: 90%;

            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        input:invalid {
            box-shadow: 0 0 5px 1px red;
        }

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
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" >Ajout d'un Aliment</h3>
                </div>
                <form enctype="multipart/form-data" action={{ route('afficherAliments') }} method="POST" >
                    <div class="centered">
                        @if (count($errors) > 0 )
                            <div>
                                <ul>
                                    @foreach( $errors->all() as $error )
                                        <li  class="col-xs-6 col-sm-4 alert-danger">{{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="box-body">
                        <div class="col-sm-5">
                            <div class="form-group" >
                                <label for="name"> Nom de l'aliment :</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Categorie" style="width: 185px" required>
                            </div>
                            <div class="form-group">
                                <label  for="list">Selectionner une catégorie :</label>
                                <select class="form-control" name="list" id="list" style="width: auto">
                                  <option>selectionné</option>
                                    @foreach($categories as $category)
                                          <option value="{{ $category -> name}}">{{ $category -> name  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label  for="image">Image(format jpg**) :</label>
                                <input id="image" type="file" class="form-control-file"  name="image" >
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="quantite">Quantité :</label>
                                <input class="form-control" id='quantite' name="quantite"  type="number" step='0.01' placeholder='0.00' style="width: auto" required>
                            </div>
                            <div class="form-group">
                                <label for="glucide">Glucide :</label>
                                <input class="form-control" name="glucide" id="glucide" type="number" step='0.01'  placeholder='0.00' style="width: auto" required>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" onclick="send(event)" class="btn btn-primary "style="background-color: #554269" >Ajouter</button>
                        <input type="hidden" value="{{ Session::token() }}" name="_token" >
                    </div>
                </form>
            </div>
        </div>
    </section>

@stop
