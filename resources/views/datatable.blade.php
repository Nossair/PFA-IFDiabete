@extends('adminlte::page')

@section('title','Patient')

@section('content_header')
    <style xmlns="http://www.w3.org/1999/html">
        .a:hover {
            background-color: lightgoldenrodyellow;
        }
    </style>
    <link rel="stylesheet" href="{{asset('js/dataTables.bootstrap.css')}}">
    <style>

        .inline {
            display: inline-block;

            margin:10px;
        }

    </style>
@stop

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-clipboard"></i> Liste des patients
        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box box-header with-border">

                <input type="hidden" id="searchKey" value="{{$searchKey}}">
                <div class="inline">

                    <div class="input-group input-group-sm " style="width: 200px;">
                        <input type="text" id="myInput2" onkeyup="patientByName()"  name="table_search" class="form-control pull-right" placeholder="Recherche patient" value="{{$searchKey}}">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" onclick="search()"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>

                <div id="tableDiv">
                <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <tr class="header" >
                        <th>ID</th>
                        <th>IP</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Mot de passe</th>
                    </tr>

                    @foreach($patients as $patient)
                        <tr class="search">
                            <td><a class="a" href="admin.p/{{$patient->id}}" > Détails <b  class="glyphicon glyphicon-option-horizontal"> </b></a></td>
                            <td><b> {{$patient->dossier->ip}} </b></td>
                            <td><b> {{$patient->nom}} </b></td>
                            <td> {{$patient->prenom}} </td>
                            <td> {{$patient->clef}} </td>
                            <td>
                                @if ($archived=="false")
                                    <a href="editDossier/{{$patient->id}}"  class="btn btn-primary   btn-sm glyphicon glyphicon-pencil" style="margin:3px 5px">  Modifier</a>
                                    <a onclick="return confirm('Êtes-vous sûr de vouloir archiver ce patient?')" href="archiverDossier/{{$patient->id}}"  class="btn btn-danger   btn-sm glyphicon glyphicon-list" >  Archiver</a>
                                @else
                                    <a onclick="return confirm('Êtes-vous sûr de vouloir archiver ce patient?')" href="archiverDossier/{{$patient->id}}?archive=false"
                                       class="btn btn-success   btn-sm glyphicon glyphicon-list" >  Désarchiver</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </table>

                </div>

                <p align="center">{{ $patients->links() }}</p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- -------------------------/.content-wrapper------------------- -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    <script>
        var td = document.getElementsByName(td);
        td.onmouseover = function() {
            this.parentNode.style.backgroundColor = "#d3f9bb";
        }
        td.onmouseout = function() {
            this.parentNode.style.backgroundColor = "#fff";
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    <script >
        window.onload = ()=>{

            var searchKey = new URLSearchParams(window.location.search).get("search");
            if (searchKey!=null) {
                var path = window.location.pathname;
                var li = document.getElementsByClassName('active')[1];
                if (li != null) {
                    var spantext = li.getElementsByTagName("span")[0].textContent;

                    li.innerHTML = "<a href=\"" + path + "?page=" + spantext + "search=" + searchKey + "\">" + spantext + "</a>";

                    let links = document.getElementsByClassName('pagination')[0].getElementsByTagName("a");
                    for (var x in links) {


                        links[x].href = path + "?page=" + links[x].text + "&search=" + searchKey;


                    }
                }


            }



           
        };

    </script>

    <script>


        function patientByName() {

            let search = document.getElementById("myInput2").value;
            if(document.getElementById("myTable")==null && search=="")
                document.location.reload(true);

            var path=window.location.pathname;
            axios.get(path+"?page=1&res=true&search="+search)
                .then((resp)=> {
                    console.log(resp)    ;
                    let tab = document.getElementById("myTable");
                    if (resp.data.result.data.length != 0) {
                        let result = resp.data.result.data;

                        let link = resp.data.result.path;
                        let current_page = resp.data.result.current_page;

                       // let inputs = tab.getElementsByTagName("tr")[0];
                        let header = tab.getElementsByTagName("tr")[0];
                        let html_to_replace = "";
                       // html_to_replace += "<tr>" + inputs.innerHTML + "</tr>";
                        html_to_replace += "<tr class=\"header\">" + header.innerHTML + "</tr>";

                        let activePage = document.getElementsByClassName('pagination')[0];
                        if (activePage != null) {

                            let links = activePage.getElementsByTagName("a");

                            for (var x in links) {


                                links[x].href = link + "?page=" + links[x].text + "&search=" + search;


                            }
                        }


                        for (var tr in result) {


                            html_to_replace += "  <tr class=\"search\">\n" +
                                "                            <td><a class=\"a\" href=\"admin.p/" + result[tr].id + "\" style=\" display:block;width:100%; \"> Détails <b  class=\"glyphicon glyphicon-option-horizontal\"> </b></a></td>\n" +
                                "                            <td><b>" + result[tr].ip + "</td>\n" +
                                "                            <td><b> " + result[tr].nom + " </b></td>\n" +
                                "                            <td> " + result[tr].prenom + "</td>\n" +
                                "                            <td> " + result[tr].clef + "</td>\n" +
                                "                            <td><a href=\"editDossier/" + result[tr].id + "\"  class=\"btn btn-success   btn-sm glyphicon glyphicon-pencil\" style=\"background-color: #554269\">Modifier</a></td>\n" +
                                "                        </tr>";

                        }
                        tab.innerHTML = html_to_replace;


                    }
                    else{
                        let tabDiv=document.getElementById("tableDiv");
                        tabDiv.innerHTML = "<div><strong style=\"color:red;\">Aucun patient ne correspond aux termes de recherche spécifiés </strong></div>";

                       let activePage=document.getElementsByClassName('pagination')[0];
                           if(activePage!=null)activePage.style.display = "none";
                    }
                });

          //  tr = tab.getElementsByTagName("tr");
          //  tab.innerHTML = tr1.html;


            // Declare variables

           /* var input, filter, table, tr, td, i
            input = document.getElementById("myInput2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");*/



            // Loop through all table rows, and hide those who don't match the search query
          /*  for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }*/
        }
      /*  function search() {

            if(document.getElementById("myTable")==null)
                document.location.reload(true);
            else patientByName();

        }*/




    </script>



@stop
