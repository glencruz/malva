
function Registrar(){

    //$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';

      var nombre = $("#nombre").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var telefono = $("#telefono").val();
      var cp = $("#cp").val();
      var estado = $("#estado").val();
      var colonia = $("#colonia").val();
      var ciudad = $("#ciudad").val();
      var calle = $("#calle").val();
      var nint = $("#nint").val();
      var next = $("#next").val();
      var password2=$("#password2").val();
      var opcion=1;
      var cerrarc=document.getElementById('Csesion');
      var ini=document.getElementById('IRsesion');
      var emaili=$("#emaili").val();
      var passwordi=$("#passwordi").val();
      // var fecfinop=$("#fecfinop").val();
      // var data=

    //
      var data= 'nombre='+nombre+'&email='+email+'&password='+password+'&telefono='+telefono+'&cp='+cp+'&estado='+estado+'&colonia='+colonia+'&ciudad='+ciudad+'&calle'+calle+'&nint='+nint+'&next='+next+'&opcion='+opcion;
  event.preventDefault();
  if(nombre!="" || email!="" || password!="" || password2!="" || telefono!="" || cp!="" || estado!="" || colonia!="" || ciudad!="" || calle!="" || next!=""){
    if(password==password2 && password2.length>6 && password.length>6){
        //Registrar el usuario
        
        jQuery.ajax({
            type: "POST",
            url: "Consultlogin.php",
            data : data,
            success:function(result){
              var res=JSON.parse(result);
              
              if(res[0].contador!=0){
                alert("El usuario ya existe, favor de ingresar con una cuenta diferente.")
              }else{
                var opcion=2;
              var data= 'nombre='+nombre+'&email='+email+'&password='+password+'&telefono='+telefono+'&cp='+cp+'&estado='+estado+'&colonia='+colonia+'&ciudad='+ciudad+'&calle'+calle+'&nint='+nint+'&next='+next+'&opcion='+opcion;
               jQuery.ajax({
            type: "POST",
            url: "Consultlogin.php",
            data : data,
            success:function(result){
              //var res=JSON.parse(result);
              
              
               alert("Datos agregados con exito!");
               // $('#IRsesion').ready();
               // $('#Csesion').ready();
               // cerrarc.style.display = 'inline-block';
               //  ini.style.display = 'none';
               location.href ="index.php";
               
             

             },error:function(){
             alert("no entro");
          
             }
        });
               
               //location.href ="index.php";
             }

             },error:function(){
             alert("no entro");
          
             }
        });

    }else{
      if(password2.length<6 && password.length<6){
        alert("La contraseña debe tener al menos 7 caracteres.")
      }else{
        alert("Las contraseñs no coindicen.")
      }
      
    }
  }else{
    alert("No se aceptan campos vacios, favor de verificar su información.")
  }

  

  
}

function iniciosesion(){


      var nombre = $("#nombre").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var telefono = $("#telefono").val();
      var cp = $("#cp").val();
      var estado = $("#estado").val();
      var colonia = $("#colonia").val();
      var ciudad = $("#ciudad").val();
      var calle = $("#calle").val();
      var nint = $("#nint").val();
      var next = $("#next").val();
      var password2=$("#password2").val();
      var opcion=3;
      var cerrarc=document.getElementById('Csesion');
      var ini=document.getElementById('IRsesion');
      var emaili=$("#emaili").val();
      var passwordi=$("#passwordi").val();
      // var fecfinop=$("#fecfinop").val();
      // var data=

    //
      var data= 'nombre='+nombre+'&email='+email+'&password='+password+'&telefono='+telefono+'&cp='+cp+'&estado='+estado+'&colonia='+colonia+'&ciudad='+ciudad+'&calle'+calle+'&nint='+nint+'&next='+next+'&opcion='+opcion+'&emaili='+emaili+'&passwordi='+passwordi;
      if(emaili=="admin@malva.com.mx" && passwordi=="admin@malva.com.mx"){
               // $('#IRsesion').ready();
               // $('#Csesion').ready();
               // cerrarc.style.display = 'inline-block';
               //  ini.style.display = 'none';
                     var opcion=5;

                    var data= 'nombre='+nombre+'&email='+email+'&password='+password+'&telefono='+telefono+'&cp='+cp+'&estado='+estado+'&colonia='+colonia+'&ciudad='+ciudad+'&calle'+calle+'&nint='+nint+'&next='+next+'&opcion='+opcion+'&emaili='+emaili+'&passwordi='+passwordi;

              jQuery.ajax({
            type: "POST",
            url: "Consultlogin.php",
            data : data,
            success:function(result){
              //var res=JSON.parse(result);
              
              
               alert("Bienvenido!");
               // $('#IRsesion').ready();
               // $('#Csesion').ready();
               // cerrarc.style.display = 'inline-block';
               //  ini.style.display = 'none';
               location.href ="views/administrador/menu.view.php";
               
             

             },error:function(){
             alert("no entro");
          
             }
        });
      }
      else if(passwordi!=""|| emaili!=""){

         jQuery.ajax({
            type: "POST",
            url: "Consultlogin.php",
            data : data,
            success:function(result){
              var res=JSON.parse(result);
              
              if(res[0].contador>0){

                  var opcion=4;
      var data= 'nombre='+nombre+'&email='+email+'&password='+password+'&telefono='+telefono+'&cp='+cp+'&estado='+estado+'&colonia='+colonia+'&ciudad='+ciudad+'&calle'+calle+'&nint='+nint+'&next='+next+'&opcion='+opcion+'&emaili='+emaili+'&passwordi='+passwordi;
               jQuery.ajax({
            type: "POST",
            url: "Consultlogin.php",
            data : data,
            success:function(result){
              //var res=JSON.parse(result);
              
              
               alert("Bienvenido!");
               // $('#IRsesion').ready();
               // $('#Csesion').ready();
               // cerrarc.style.display = 'inline-block';
               //  ini.style.display = 'none';
               location.href ="index.php";
               
             

             },error:function(){
             alert("no entro");
          
             }
        });
                
              }else{
              
               alert("El email o la contraseña son erroneos, intentelo nuevamente.")
               //location.href ="index.php";
             }

             },error:function(){
             alert("no entro");
          
             }
        });
        
      }else{
        alert("No se aceptan campos vacios");
      }

}











