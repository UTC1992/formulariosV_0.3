@include('includes.styles')

<style type="text/css">
  /*** Sticky Menu ***/
  ul {
    background-color: #1ba1e2;
    height: 35px;
    position: fixed;
    top: 40px;
    left: 0;
    width: 100%;

}

ul li {
    width: 250px;
    line-height: 35px;
    display: flex;
    padding-right: 50px;
}
ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 10pt;
    text-align: justify;
    width: 250px;

}
ul li a:hover {
    text-decoration: underline;
}
</style>


<script>$(function(){$( "#tabs" ).tabs();});</script>

<script type="text/javascript" src="js/js_testUsabilidad/ajax_test.js"></script>
<div class="container well" id="formulario_sha">
    <div class="row">
        <div id="tabs" class="well" >
              <ul id="menuVert1" class="nav nav-pills nav-stacked main-menu" >
              <?php $ambitos = DB::table('ambitos')->get(); $numPag = 1; 
              ?>
              @if($ambitos)
                @foreach($ambitos as $ambito)
                  <li><a id="ambito_id{{$ambito->id}}" href="#tabs-{{$ambito->id}}" onclick="registrar{{$ambito->id}}();">{{$ambito->nombre}}</a></li>
                @endforeach
                  <li><a href="#tabs-10" onclick="contarRespuestas();"> Respuestas  </a></li>
              </ul>
              @endif

              
              @if($ambitos)
              @foreach($ambitos as $ambito)
              <div id="tabs-{{$ambito->id}}" class="derecha">
                <form class="form-horizontal" name="form-{{$ambito->id}}" action="guardarResp" method="post" id="formulario">
                    <div class="col-xs-10">
                      <center><h3>{{$ambito->nombre}}</h3></center>
                    </div>
                    <?php $tareas = DB::table('tareas')->where("ambitos_id", $ambito->id)->get(); ?>

                    @if($tareas)
                      @foreach($tareas as $tarea)
                        <div class="form-group">
                            <label class="col-sm-8" for="formGroup">
                              {{$tarea->enunciado}}
                            </label>
                            <!---->
                            <input type="hidden" name="tarea_id{{$tarea->id}}" id="tarea_id{{$tarea->id}}" class="input-block-level" value="{{$tarea->id}}" >
                            
                            <div class="col-sm-4" id="tarea-{{$tarea->id}}" name="tarea">
                              <label class="radio-inline" >
                                <input type="radio" name="tarea{{$tarea->id}}" value="Si">
                                Si
                              </label>
                              <!--
                              <label class="radio-inline">
                                <input type="radio" name="tarea{{$tarea->id}}" >
                                Parte
                              </label>
                              -->
                              <label class="radio-inline">
                                <input type="radio" name="tarea{{$tarea->id}}" value="No">
                                No
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="tarea{{$tarea->id}}" value="N/A" checked>
                                N/A
                              </label>
                            </div>
                        </div>

                      @endforeach
                    @endif
                </form>
 
              </div>
              @endforeach
              <div id="tabs-10" class="derecha">
                <form class="form-horizontal" action="guardarResp" method="post" id="formularioRes">    
                    <h2>Respuestas </h2>
                    <table border="3" class="col-sm-12">
                      <tr>
                        <th></th>
                        <th>Calificación Neta</th>
                        <th>N° Preguntas</th>
                        <th>N° Respuestas</th>
                        <th>Calificación</th>
                      </tr>
                      <?php $totalPre = 0; ?>
                      @foreach($ambitos as $ambito)
                      <tr>
                        <td>{{$ambito->nombre}}</td>
                        <?php $numTareas = DB::table('tareas')->where('ambitos_id',$ambito->id)->count(); ?>
                        <td id="resAmbito-{{$ambito->id}}">0</td>
                        <td id="ambito-{{$ambito->id}}">{{$numTareas}}</td>
                        <td>0</td>
                        <td>0.0%</td>
                        <?php $totalPre = $totalPre + $numTareas ?>
                      </tr>
                      @endforeach
                      <tr>
                        <th>Calificación Total</th>
                        <th></th>
                        <th>{{$totalPre}}</th>
                        <th>Total</th>
                        <th> Total</th>
                      </tr>
                    </table>
                </form>
              </div> 
              @endif
              
              <!---->
              <input id="cedula" type="hidden" name="cedula" class="input-block-level" value="{{$cedula}}" >

        </div>
    </div>
</div>
  
</head>
<body>
 
