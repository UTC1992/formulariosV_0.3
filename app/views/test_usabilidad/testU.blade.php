@include('includes.styles')
<style type="text/css">
      ul.menuVert1 {
        width: 100px; 
        list-style: none;
        text-align: center;  
        padding:0;
      }
</style>
<script>$(function(){$( "#tabs" ).tabs();});$(function(){$( "#tabs2" ).tabs();});</script>
<div class="container well" id="formulario_sha">
    <div class="row">
        <div id="tabs">
              <ul class="menuVert1">
              <?php $ambitos = DB::table('ambitos')->get(); $numPag = 1; 
              ?>
              @if($ambitos)
                @foreach($ambitos as $ambito)
                  <li><a href="#tabs-{{$ambito->id}}">{{'Pag '.$numPag++}}</a></li>
                @endforeach
              </ul>
              @endif
              
              @if($ambitos)
              @foreach($ambitos as $ambito)
              <div id="tabs-{{$ambito->id}}">
                <form class="form-horizontal well" action="guardarResp" method="post" id="formulario">
                    <div class="col-xs-12">
                      <center><h3>Página de inicio</h3></center>
                    </div>
                    <?php $tareas = DB::table('tareas')->where("ambitos_id", $ambito->id)->get(); ?>

                    @if($tareas)
                      @foreach($tareas as $tarea)
                        <div class="form-group">
                            <label class="col-sm-6" for="formGroup">
                              {{$tarea->enunciado}}
                            </label>
                            <div class="col-sm-5">
                              <label class="radio-inline">
                                <input type="radio" name="tarea{{$tarea->id}}" >
                                Si
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="tarea{{$tarea->id}}" >
                                Parte
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="tarea{{$tarea->id}}" >
                                No
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="tarea{{$tarea->id}}" checked>
                                N/A
                              </label>
                            </div>
                        </div>

                      @endforeach

                    @endif
                    @if($ambito->id == 9)
                    <a href="#">
                    <input class="siguiente" type="submit" value="Enviar"></a>
                    @endif
                    </form>
 
              </div>
              @endforeach
              @endif
              
              
        </div>
    </div>
</div>
  
</head>
<body>
 
