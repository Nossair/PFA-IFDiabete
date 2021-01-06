@php
$r1 = $request->get("r1");
$r2 = $request->get("r2");
$r3 = $request->get("r3");
$r4 = $request->get("r4");

$r5 = $request->get("r5");
$r6 = $request->get("r6");
$r7 = $request->get("r7");
$r8 = $request->get("r8");

$r9 = $request->get("r9");
$r10 =$request->get("r10");
$r11 =$request->get("r11");
$r12 =$request->get("r12");

$r13 =$request->get("r13");
$r14 =$request->get("r14");
$r15 =$request->get("r15");
$r16 =$request->get("r16");

$fName = $request->get("fName");
$lName = $request->get("lName");

// encode64 decode64

$alimentsPDej = urldecode ($request->get('alimentsPDej'));
$alimentsDej = urldecode($request->get('alimentsDej'));
$alimentsCol = urldecode($request->get('alimentsCol'));
$alimentsDin = urldecode($request->get('alimentsDin'));
// $alimentsPDej = base64_decode($request->get('alimentsPDej')));
// $alimentsDej = base64_decode($request->get('alimentsDej'));
// $alimentsCol = base64_decode($request->get('alimentsCol'));
// $alimentsDin = base64_decode($request->get('alimentsDin'));

$gluco0 = $request->get("gluco0");
$gluco1 = $request->get("gluco1");
$gluco2 = $request->get("gluco2");
$gluco3 = $request->get("gluco3");

$ratioPDej = $request->get('rp');
$ratioDej = $request->get('rd');
$ratioColl = $request->get('rc');
$ratioDin = $request->get('rdi');
$indiceDeSensibilite = $request->get('is');
$objective = $request->get('obj');
@endphp

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <style media="screen">
      body{
        background-color: #fa;
        font-family: roboto;
      }
      .logo{
        background-color: rgba(40, 165, 255, 1);
        padding: 10px 15px;
        width: 150px;
        height: 50px;
        border-radius: 5px;
        box-shadow: 0 10px 5px -7.5px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
      }
      .logo img{
        display: block;
        width: 100%;
        height: 100%;
      }
      .container{
        max-width: 900px;
        margin: 0 auto;
        padding: 15px 25px;
      }
      .reportTitle{
        margin-left: 15px;
        text-transform: capitalize;
      }
      .reportDate{
        font-size: 1em;
        text-align: center;
        top: 20px;
        font-weight: 500;
      }
      .ratios{
        padding: 10px 25px;
        max-width: 75%;
        background-color: rgba(221, 221, 221, 0.85);
        margin: 0 auto;
        border-radius: 5px;
        box-shadow: 0 10px 5px -7.5px rgba(0, 0, 0, 0.1);
      }
      ul{
        padding: 0;
      }
      .ratios ul{
        list-style: none;
        margin: 0 auto;
        text-align: center;
      }
      .ratios h1{
        margin: 5px auto;
        text-align: center;
      }
      .ratios ul li{
        margin: 0;
        padding: 2px 0;
        font-size: 1.2em;
      }
      .ratios ul li .label{
        display: inline-block;
        width: 200px;
        text-align: left;
        margin-right: 25px;
      }
      .ratios ul li .value{
        display: inline-block;
        margin-left: 25px;
        font-weight: bold;
      }
      .reportTable{
        /*border: 1px solid black;*/
        margin: 0 auto;
        width: 100%;
        border-collapse: collapse;
        border-radius: 5px;
        color: #323232;
      }
      .reportTable thead{
        font-weight: bold;
        background-color: rgba(138, 138, 138, 1);
        color: #ededed;
      }
      .reportTable tbody tr:nth-child(even){
        background-color: rgba(159, 159, 159, 0.85);
      }
      .reportTable tbody tr:nth-child(odd){
        background-color: rgba(200, 200, 200, 0.85);
      }
      .reportTable td,
      .reportTable th{
        padding: 3px 7.5px;
        margin: 0;

      }
      .aliments{
        /*font-family: "Geeza Pro", "Nadeem", "Al Bayan", "DecoType Naskh", "DejaVu Serif", "STFangsong", "STHeiti", "STKaiti", "STSong", "AB AlBayan", "AB Geeza", "AB Kufi", "DecoType Naskh", "Aldhabi", "Andalus", "Sakkal Majalla", "Simplified Arabic", "Traditional Arabic", "Arabic Typesetting", "Urdu Typesetting", "Droid Naskh", "Droid Kufi", "Roboto", "Tahoma", "Times New Roman", "Arial", serif;*/
        /*direction: rtl;*/
        padding: 0 10px;
      }
      .aliments ul{
        list-style: none;
        text-align: center;
      }
      .aliments li{
        direction: rtl;
        text-align: right;
        white-space: nowrap;
      }
      hr{
        border-top: none;
        border-bottom: 2px solid #ddd;
        box-shadow: 0 10px 5px -7.5px rgba(0, 0, 0, 0.15);
        margin: 25px 50px;
      }
      @media (print) {
        .reportTable{
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
      <div class="container">
        <div class="logo">
          <img src="data:image/png;base64,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" >
          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.35 82">
            <defs>
              <style>
                .a{fill:#fff;}
              </style>
            </defs>
            <path d="M281 38.5v-3a4.57 4.57 0 0 0-4.15-4h-24.5c-.37 0-.35.58-.35.68V14c0-1.38-1.82-2.5-3.21-2.5H71V5a5 5 0 0 0-10 0v22.5H8V14a4 4 0 0 0-8 0v54a4 4 0 0 0 8 0V54.5h53V77a5 5 0 0 0 10 0v-6.5h177.79c1.38 0 3.21-1.12 3.21-2.5V49.82a.36.36 0 0 1 .35-.32h24.5c1.93 0 4.15-1.06 4.15-3v-4h30.85l4.5-4H281zm-34 27H72v-49h175v49z" class="a"/>
            <path d="M86.87 28.2h8.35v25.24h-8.35V28.2zm11.95 0h20.3v6.34h-12v4.36h11.2v6.34h-11.2v8.21h-8.3V28.2zm36.83 15.34a3.8 3.8 0 0 1-3.46 1.76 4.65 4.65 0 0 1-1.73-.29 10.61 10.61 0 0 1-1.55-.79 2.83 2.83 0 0 0-1.19-.5q-.94 0-.94 1.48h-5.36a10.34 10.34 0 0 1 1.13-5.47A3.84 3.84 0 0 1 126 38a4.67 4.67 0 0 1 1.73.29 10.75 10.75 0 0 1 1.55.79 2.81 2.81 0 0 0 1.19.5q.94 0 .94-1.48h5.33a10.48 10.48 0 0 1-1.09 5.44zm23.11-13.79a11.29 11.29 0 0 1 4.79 4.41 12.81 12.81 0 0 1 1.69 6.64 12.57 12.57 0 0 1-1.73 6.66 11.56 11.56 0 0 1-4.91 4.41 16.57 16.57 0 0 1-7.4 1.57h-10.94V28.2h11.27a16 16 0 0 1 7.23 1.55zm-3.4 15.55a6.8 6.8 0 0 0 1.35-4.43 6.66 6.66 0 0 0-1.46-4.5 4.9 4.9 0 0 0-3.91-1.69h-2.74V47h3.13a4.43 4.43 0 0 0 3.63-1.7zm27.95-10.6a9.11 9.11 0 0 1 3.89 3.53 10.21 10.21 0 0 1 1.37 5.35 10.21 10.21 0 0 1-1.37 5.35 9.21 9.21 0 0 1-3.89 3.55 14.3 14.3 0 0 1-11.74 0 9.21 9.21 0 0 1-3.89-3.55 10.21 10.21 0 0 1-1.37-5.35 10.21 10.21 0 0 1 1.37-5.35 9.1 9.1 0 0 1 3.89-3.53 14.48 14.48 0 0 1 11.74 0zm-8 6.21a4.4 4.4 0 0 0-.81 2.77 4.4 4.4 0 0 0 .81 2.77 2.72 2.72 0 0 0 4.28 0 4.4 4.4 0 0 0 .81-2.77 4.4 4.4 0 0 0-.81-2.77 2.72 2.72 0 0 0-4.29 0zm23.69-2.2a1.59 1.59 0 0 0-.81.18.53.53 0 0 0-.31.47.86.86 0 0 0 .65.72 15.55 15.55 0 0 0 2.16.68A32.66 32.66 0 0 1 204.3 42a7.14 7.14 0 0 1 2.65 1.87 4.71 4.71 0 0 1 1.13 3.28 5.85 5.85 0 0 1-1.1 3.53 7 7 0 0 1-3.11 2.32 12.36 12.36 0 0 1-4.72.83 16.61 16.61 0 0 1-9.61-2.83l2.45-5a14.07 14.07 0 0 0 7.27 2.45 2 2 0 0 0 .9-.16.48.48 0 0 0 .32-.41.82.82 0 0 0-.63-.67 15.42 15.42 0 0 0-2-.63 26.56 26.56 0 0 1-3.6-1.15 7.18 7.18 0 0 1-2.61-1.87 4.76 4.76 0 0 1-1.13-3.31 6 6 0 0 1 1.08-3.58 7 7 0 0 1 3-2.38 11.43 11.43 0 0 1 4.55-.85 18.47 18.47 0 0 1 9.14 2.48l-2.66 5q-4.38-2.21-6.62-2.21zm26.65-3.92a8.9 8.9 0 0 1 3.64 3.8 12.54 12.54 0 0 1 1.26 5.78v1h-12.86a3.4 3.4 0 0 0 1.24 1.75 3.45 3.45 0 0 0 2 .59A5.76 5.76 0 0 0 225 46l4.21 4.14a10.33 10.33 0 0 1-3.83 2.68 13.38 13.38 0 0 1-5.09.92 12.46 12.46 0 0 1-5.74-1.24 8.67 8.67 0 0 1-3.75-3.5 10.59 10.59 0 0 1-1.28-5.29 10.83 10.83 0 0 1 1.3-5.4 8.88 8.88 0 0 1 3.69-3.56 11.69 11.69 0 0 1 5.49-1.29 11.32 11.32 0 0 1 5.65 1.33zm-3.83 4.86a2.24 2.24 0 0 0-3.38 0 4.27 4.27 0 0 0-.92 2.05h4.9a2.76 2.76 0 0 0-.6-2.05z" class="a"/>
          </svg> --}}
        </div>
        <h3 class="reportDate">{{date('Y-m-d H:i:s')}}</h3>
        <h1 class="reportTitle">{{$fName}} {{$lName}}</h1>
        <hr/>
        <div class="ratios">
          <h1>Informatios du jour</h1>
          <ul>
            <li>
              <span class="label">Petit dejeuner </span>:
              <span class="value">{{$ratioPDej}}</span>
            </li>
            <li>
              <span class="label">Dejeuner </span>:
              <span class="value">{{$ratioDej}}</span>
            </li>
            <li>
              <span class="label">Collation </span>:
              <span class="value">{{$ratioColl}}</span>
            </li>
            <li>
              <span class="label">Dinner </span>:
              <span class="value">{{$ratioDin}}</span>
            </li>
            <li>
              <span class="label">Indice de sensibilité </span>:
              <span class="value">{{$indiceDeSensibilite}}</span>
            </li>
            <li>
              <span class="label">Objective </span>:
              <span class="value">{{$objective}}</span>
            </li>
          </ul>
        </div>
        <hr/>
        <table class="reportTable">
          <thead>
            <tr>
              <th>Repas</th>
              <th>Ratio</th>
              <th class="aliments">Aliments</th>
              <th>Glyco</th>
              <th>Glycemie avant repas</th>
              <th>Unitée a injecter</th>
              <th>Glycemie apres 4 heures</th>
              <th>Dose confirmé</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Petit dejeuner</td>
              <td>{{$ratioPDej}}</td>
              <td>
                <div class="aliments">
                  <ul>
                    @foreach (explode(";",$alimentsPDej) as $value)
                      @if ($value!="")
                        <li>{{$value}}</li>
                      @endif
                    @endforeach
                    {{-- <li>Aliment 1 : 50g</li>
                    <li>Aliment 2 : 200g</li>
                    <li>Aliment 3 : 0.25l</li>
                     --}}
                  </ul>
                </div>
              </td>
              <td>{{$gluco0}}</td>
              <td>{{$r1}}</td>
              <td>{{$r2}}</td>
              <td>{{$r3}}</td>
              <td>{{$r4}}</td>
            </tr>
            <tr>
              <td>Dejeuner</td>
              <td>{{$ratioDej}}</td>
              <td>
                <div class="aliments">
                  <ul>
                    @foreach (explode(";",$alimentsDej) as $value)
                      @if ($value!="")
                        <li>{{$value}}</li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </td>
              <td>{{$gluco1}}</td>
              <td>{{$r5}}</td>
              <td>{{$r6}}</td>
              <td>{{$r7}}</td>
              <td>{{$r8}}</td>
            </tr>
            <tr>
              <td>Collation</td>
              <td>{{$ratioColl}}</td>
              <td>
                <div class="aliments">
                  <ul>
                    @foreach (explode(";",$alimentsCol) as $value)
                      @if ($value!="")
                        <li>{{$value}}</li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </td>
              <td>{{$gluco2}}</td>
              <td>{{$r9}}</td>
              <td>{{$r10}}</td>
              <td>{{$r11}}</td>
              <td>{{$r12}}</td>
            </tr>
            <tr>
              <td>Dinner</td>
              <td>{{$ratioDin}}</td>
              <td>
                <div class="aliments">
                  <ul>
                    @foreach (explode(";",$alimentsDin) as $value)
                      @if ($value!="")
                        <li>{{$value}}</li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </td>
              <td>{{$gluco3}}</td>
              <td>{{$r13}}</td>
              <td>{{$r14}}</td>
              <td>{{$r15}}</td>
              <td>{{$r16}}</td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>
  </body>
</html>
