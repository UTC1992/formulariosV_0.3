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
<div class="container well" id="formulario_sha">
    <div class="row">

        <div class="dropdown">
          <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
            Dropdown trigger
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li class="ajax-link">hola</li>
            <li>hola</li>
            <li>hola</li>
            <li>hola</li>
          </ul>
        </div>

        <div id="tabs" class="well">
              <ul id="menuVert1" class="nav nav-pills nav-stacked main-menu" >
              <?php $ambitos = DB::table('ambitos')->get(); $numPag = 1; 
              ?>
              @if($ambitos)
                @foreach($ambitos as $ambito)
                  <li><a href="#tabs-{{$ambito->id}}">{{$ambito->nombre}}</a></li>
                @endforeach
                  <li><a href="#tabs-10"> Finalizar  </a></li>
              </ul>
              @endif

              
              @if($ambitos)
              @foreach($ambitos as $ambito)
              <div id="tabs-{{$ambito->id}}" class="derecha">
                <form class="form-horizontal" action="guardarResp" method="post" id="formulario">
                    <div class="col-xs-12">
                      <center><h3>{{$ambito->nombre}}</h3></center>
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
 
