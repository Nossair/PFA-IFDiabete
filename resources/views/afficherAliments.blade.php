@extends('adminlte::page')

@section('title','Aliments')

@section('content_header')
    <style media="screen">
        .container {
            width: 100%;
        }
    </style>
@stop

@section('content')

    <div class="box-header">
        <section class="content-header">
            <h1>
                <i class="fa fa-clipboard"></i> Liste des aliments
            </h1>
        </section>

    </div>
    <div>
        {{ $categories->links('pagination',['cat_names'=>$cat_names]) }}
    </div>
    <form action="" style="display: inline">
        <select class="form-control"  name="page" id="category" style="width: auto;">
            <option  disabled value="0" selected>selectionner une categorie</option>
            @foreach($cats as $category)
            <option value="{{$category ->id}}">{{$category -> name}}</option>
            @endforeach
        </select>
        <input type="text" placeholder="Chercher aliment" name="searchKey" style="width:auto" >
        <input type="submit" class="btn btn-primary   btn-sm glyphicon glyphicon-pencil" value="Valider" id="submit">
    </form>
    @foreach($categories as $category)
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title pull-right">{{$category -> name}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" >

                            <table class="table table-bordered" id="aliments_table">
                                <tr style="background-color: #A4ECFE">
                                    <th style="width: 20px; text-align: center">Modifier</th>
                                    <th style="width: 40px; text-align: center">Glucide (g)</th>
                                    <th style="width: 40px; text-align: center">Quantité (g)</th>
                                    <th style="width: 40px; overflow: auto; text-align: center">Nom</th>
                                    <th style="width: 10px; overflow: auto; text-align: center">N°</th>
                                </tr>
                                @foreach($aliments as $aliment)
                                    <tr>
                                        <td style="width: 40px; overflow: auto; text-align: center">
                                            <a href="destroy.aliment/{{$aliment->id}}" class="btn btn-success btn-xs" style="background-color:#3c8dbc" >Supprimer</a>
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default-{{$aliment->id}}" style="background-color:#5a538a ">Modifier</button>
                                            <div class="modal fade" id="modal-default-{{$aliment->id}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title">{{$aliment->name}}</h4>
                                                        </div>
                                                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action={{ route('update.aliment',$aliment->id) }}>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="inputNom" class="col-sm-4 control-label">Nom :</label>
                                                                    <div class="col-sm-5">
                                                                        <input type="text" class="form-control" id="inputNom" name="name" value="{{$aliment->name}}" style="width: auto">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputQuantite" class="col-sm-4 control-label">Quantité :</label>
                                                                    <div class="col-sm-5">
                                                                        <input type="number" class="form-control" id="inputQuantite" name="quantite" value="{{$aliment->quantite}}" style="width: auto">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputGlucide" class="col-sm-4 control-label">Glucide :</label>
                                                                    <div class="col-sm-5">
                                                                        <input type="number" class="form-control" id="inputGlucide" name="glucide" value="{{$aliment->glucide}}" style="width: auto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                                                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                                                <input type="hidden" value="{{ Session::token() }}" name="_token" >
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </td>
                                        <td style="width: 40px; overflow: auto; text-align: center">{{$aliment -> glucide}}</td>
                                        <td style="width: 40px; overflow: auto; text-align: center" >{{$aliment -> quantite}}</td>
                                        <td style="width: 40px; overflow: auto; text-align: right">
                                            {{$aliment -> name}}
                                        </td>
                                        <td style="width: 40px; overflow: auto; text-align: center"><span class="badge bg-gray">{{$aliment -> id}}</span></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    @endforeach
    <script>
        document.getElementById("submit").addEventListener("click", function(event){
            if(document.getElementById('category').value ==0) {
                 alert("test it ");
                event.preventDefault()

            }

        });
    </script>
@stop
