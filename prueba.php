<html>
<head>
<STYLE type="text/css">
  #capa{
    position:absolute;
    top:10px;
    left:10px;
    font-family:     Verdena;
    color:           #669999;
    font-size:        18pt;
  }
  </STYLE>
  <SCRIPT language="JavaScript" type="text/javascript"><!--    
    var izquierda=10;
    var para=200;
    var tiempo=6;
    function Asigna(id,propi,valor){
      if(document.layers)
        eval('document.'+id+'.'+propi+'='+valor);
      if(document.all)
        eval(id+'.style.'+propi+'='+valor);
      if(!document.all&&document.getElementById)
        eval('document.getElementById("'+id+'").style.'+propi+'='+valor);
    }
    function mueve(){
      izquierda+=5;
      Asigna('capa','left',izquierda);
      if(izquierda<para) setTimeout("mueve();",tiempo)
    }
  </SCRIPT>
  </head>
  <body>
  <BODY onload=mueve();>
  <DIV id="capa">Mi texto</DIV>
  </body>









</html>

