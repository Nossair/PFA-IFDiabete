<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="{{asset('css/a4css.css')}}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
</head>
<body>
<page class="A4">
	<div class="tab-pane" id="timeline">
		<!-- The timeline -->
		<ul class="timeline timeline-inverse">
			<!-- timeline time label -->
			<li class="time-label">
				<span class="bg-green">
				{{ dd($evolution)}};
					{{$evolution->dateConsult}}
				</span>
			</li>
			<!-- /.timeline-label -->
			<!-- timeline item -->
			<li>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i>  {{$evolution->timeConsult}}</span>
					<div class="timeline-body">
						<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<tr>
								<th style="background-color: #0d1c21; color: white">Poids</th>
								<td style="padding-left:30px"> {{$evolution->poids}}  <b>(Kg)</b></td>
							</tr>
							<tr>
								<th style="background-color: #314247; color: white">Hymoglobine</th>
								<td style="padding-left:30px"> {{$evolution->HbA1c}}  <b>(g)</b></td>
							</tr>
							<tr>
								<th style="background-color: #0d1c21; color: white">Nombre HypoGlycémie / HyperGlycémie</th>
								<td style="padding-left:30px"> {{$evolution->nbEpHmi}}  <b>(Ep/an)</b>  /   {{$evolution->nbreHMaj}}  <b>(g)</b></td>
							</tr>
							<tr>
								<th style="background-color: #314247; color: white; padding-top: 50px; font-size: 20px" rowspan="4">Ratio  <em style="font-size: 16px">(Ui/10g)</em></th>
								<td style="padding-left:30px"> 
									Petit dejeuner : {{$evolution->ratioPetitDej}}
								</td>
							</tr>
							<tr>
								<td style="padding-left:30px">
									Dejeuner : {{$evolution->ratioDej}}
								</td>
							</tr>
							<tr>
								<td style="padding-left:30px">
									Collation : {{$evolution->ratioColl}}
								</td>
							</tr>
							<tr>
								<td style="padding-left:30px">         

									Dinner : {{$evolution->ratioDinnez}}
								</td>
							</tr>    
							<tr>    
								<th style="background-color: #0d1c21; color: white">Indice de sensibilite</th>
								<td style="padding-left:30px"> {{$evolution->IndiceSensibilite}}  <b>(g/l)</b></td>

							</tr>
						</table>
					</div>
				</div>
			</li>
			<!-- END timeline item -->
		</ul>
	</div>
</page>
</body>
</html>