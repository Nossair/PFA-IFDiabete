<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <!-- Begin Wrapper -->
    <div id="wrapper">
      <div class="wrapper-top"></div>
      <div class="wrapper-mid">
        <!-- Begin Paper -->
        <div id="paper">
          <div class="paper-top"></div>
          <div id="paper-mid">
            <div class="entry">
              <!-- Begin Image -->
              <img class="portrait" src="{{asset('images/'.$dossier->avatar)}}"/>
              <!-- End Image -->
              <!-- Begin Personal Information -->
              <div class="self">
                <h1 class="name">{{$dossier->nom}} {{$dossier->prenom}}</h1><br/>
                <ul>
                  <li class="ad">{{$dossier->addresse}}</li>
                  <li class="tel">{{$dossier->tel}}</li>
                  <li class="tel">{{$dossier->ip}}</li>
                </ul>
              </div>

              <!-- End Personal Information -->
              <!-- Begin Social -->
              <div class="social">
                <ul>
                  <li><a class='north' href="javascript:window.print()" title="Print"><img src="{{asset('images/icn-print.jpg')}}" alt="" /></a></li>
                </ul>
              </div>
              <!-- End Social -->
            </div>
            <!-- Begin 1st Row -->
            <div>
              <ul>
                <li><label>- Début de diabète : <i>{{$dossier->debutDiabete}}</i></label></li>
                <li><label>- Durée de diabète (en mois) <i>{{$dossier->dureeDiabete}} </i></label></li>
                <li><label>- Ancienneté de diabète : <i>{{$dossier->anciennete}} </i></label></li>
                <li><label>- Poids : <i>{{$dossier->poids}}</i>kg</label></li>
                <li><label>- Taille : <i>{{$dossier->taille}}</i>cm</label></li>
                <li><label>- IMC : <i>{{$dossier->imc}}</i>kg|m²</label></li>
                <li><label>- TDT : <i>{{$dossier->tdt}}</i>cm</label></li>
                <li><label>- Présence de lypodystrophie : </label><i>{{$dossier->lypodystrophie}}</i> </label></li>
                <li><label>- Ratio glucide – insuline : </label>
                </li>
              </ul>
            </div>
            <ul>
              <li><label> Petit déjeuner  : <i>{{$dossier->ratioPetitDej}}</i> <b>Ui- 10g</b> </label></li>
              <li><label> Dejeuner  : <i>{{$dossier->ratioDej}} </i> <b>Ui- 10g </b></label></li>
              <li><label> Collation <i>{{$dossier->ratioColl}} </i> <b>Ui- 10g </b></label></li>
              <li><label> Diner <i>{{$dossier->ratioDinnez}} </i> <b>Ui- 10g</b> </label></li>
            </ul>
            <li><label>- Indice de sensibilite  : <i>{{$dossier->IndiceSensibilite}}</i> <b> g/l </b> </label></li>
            <li><label>- Objectif Glycémie avant repas  : <i>{{$dossier->Objectif}}</i> <b>  </b> </label></li>
          </ul>
          <!-- Begin 5th Row -->
        </div>
      </div>
      <!-- End Paper -->
    </div>
    <div class="wrapper-bottom"></div>
  </div>
  <div id="message"><a href="#top" id="top-link">Go to Top</a></div>
  <!-- End Wrapper -->
</body>
</html> 