<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="shortcut icon"  href="{{asset('images/033.png')}}" type="image/png" />

        <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : ''}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>incidente</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
        <link href="{{asset('/css/styles.css')}}" rel="stylesheet" />


        <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body class="nav-fixed">

            @yield('content')


        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/js/scripts.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/js/chart-area-demo.js')}}"></script>
        <script src="{{asset('/js/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
        <script src="{{asset('/js/litepicker.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
		<script src="{{asset('/js/datatable.js')}}"></script>

        <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"70c6d5733dff56b8","token":"6e2c2575ac8f44ed824cef7899ba8463","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
        @stack('scripts')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            let html = document.getElementById("current_date");

            setInterval(function(){
                date = new Date();

                year = date.getFullYear();
                month = date.getMonth() + 1;
                day = date.getDate();
                horas = date.getHours();
                minutos = date.getMinutes();
                segundos = date.getSeconds();

                //evitar los 0 o numeros individuales
    			day=(day<10)?"0"+day:day
                month=(month<10)?"0"+month:month

                if(horas<10)
                    horas = "0"+horas;
                if(minutos<10)
                    minutos = "0"+minutos;
                if(segundos<10)
                    segundos = "0"+segundos;

                html.innerHTML = day+"/"+month+"/"+year +"&nbsp; &nbsp;"+horas+" : "+minutos+" : "+segundos;
        });
    </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            (function () {
            'use strict'
        //debemos crear la clase formEliminar dentro del form del boton borrar
        //recordar que cada registro a eliminar esta contenido en un form
        var forms = document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault()
                event.stopPropagation()
                Swal.fire({
                        title: '¿Estás seguro de eliminar el registro?',
                        text:  '!No podrás revertir esto!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '!Sí, eliminar!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                        }
                    })
            }, false)
            })
        })()
        </script>
    <script>
        //INTEGRACION DE APPI RENIEC
        var Conruc;
        consultarDni = function () {
            Conruc = document.getElementById("dni").value;
            consulta = {
                "Conruc": String(Conruc)
            };
            if (Conruc.length == 8) {
                fetch("https://dniruc.apisperu.com/api/v1/dni/" + Conruc + "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImpvbmVsLnNhY3JhbWVudG9Ab3V0bG9vay5jb20ifQ.aMnk3frNo8ai1cSsBuQzHQjZfFP2B0BPHGXQ26zMEHA",
                    {
                        method: "GET",
                        data: JSON.stringify(consulta),
                        headers: { "Content-type": "application/json;charset=UTF-8" }
                    }).then(response => response.json())
                    .then(json => {
                        document.getElementById("dni_ciudadano").value = json.dni;
                        document.getElementById("nombres").value = json.nombres;
                        document.getElementById("apellido_paterno").value = json.apellidoPaterno;
                        document.getElementById("apellido_materno").value =json.apellidoMaterno;
                    })

                    .catch(err => console.log(err));
//ruc falta implementacion
            } else if (Conruc.length == 11) {
                fetch("https://dniruc.apisperu.com/api/v1/ruc/" + Conruc + "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImpvbmVsLnNhY3JhbWVudG9Ab3V0bG9vay5jb20ifQ.aMnk3frNo8ai1cSsBuQzHQjZfFP2B0BPHGXQ26zMEHA",
                    {
                        method: "GET",
                        data: JSON.stringify(consulta),
                        headers: { "Content-type": "application/json;charset=UTF-8" }
                    }).then(response => response.json())
                    .then(json => {
                        document.getElementById("dni_ciudadano").value = json.ruc;
                        document.getElementById("nombres").value = json.razonSocial;
                        document.getElementById("apellidos").value = json.direccion;
                    })

                    .catch(err => console.log(err));

            }
            else {
                alert("Erros");
            }


        }

        $("#dni").keypress(function (event) {
            if (event.keyCode === 13) {
                $("#buscardni").click();
            }
        });
    </script>


    <script type="text/javascript">
//ruc
        $(document).ready(function(){
            $('#btnbuscar').click(function(){
                var numruc=$('#ruc').val();
                if (numruc!='') {
                    $.ajax({
                        url:"{{ route('buscarsunat') }}",
                        method:'GET',
                        data:{ruc:numruc},
                        dataType:'json',
                        success:function(data){
                            var resultados=data.entidad['success'];
                            if (resultados==true) {
								var razon=data.entidad['entity']['nombre_o_razon_social'];
								var direccion=data.entidad['entity']['direccion'];
								var distrito=data.entidad['entity']['distrito'];
								var provincia=data.entidad['entity']['provincia'];
								var departamento=data.entidad['entity']['departamento'];
								var estado=data.entidad['entity']['estado_del_contribuyente'];

                                $('#txtruc').val(numruc);
                                $('#txtrazon').val(razon);
                                $('#txtgrupo').val(estado);
                                $('#txtdireccion').val(direccion);
                                $('#txtdistrito').val(distrito);
                                $('#txtprovincia').val(provincia);
                                $('#txtdepartamento').val(departamento);
                            }else{
                                $('#txtruc').val('');
                                $('#txtrazon').val('');
                                $('#txtgrupo').val('');
                                $('#txtdireccion').val('');
                                $('#txtdistrito').val('');
                                $('#txtprovincia').val('');
                                $('#txtdepartamento').val('');
                                $('#mensaje').show();
                                $('#mensaje').delay(1000).hide(2500);
                            }
                        }
                    });
                }else{
                    alert('Escriba el RUC.!');
                    $('#ruc').focus();
                }
            });
        });
    </script>

     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script>

       //CARGAMOS LOS DEPARTAMENTOS
       $(document).ready(function(){
         $.ajax({
           type: 'POST',
           url: '/data.php',
           data: {action:'get-states'},
           dataType: 'JSON',
           success: function(response){
             var options = '<option value="">Seleccione</option>';
             $.each(response, function(index, value){
               options += '<option value="'+value.id+'">'+value.nombre+'</option>';
             });
             $('.state').html(options);
             $('.city').html('<option value="">Seleccione</option>');
             $('.district').html('<option value="">Seleccione</option>');
             $('.ubigeo').val(null);
           }
         }).fail(function(jqXHR, textStatus, errorThrown){
           console.log(jqXHR);
         });
       });

       //OBTENEMOS LAS CIUDADES POR DEPARTAMENTO
       $('.state').on('change', function(){
         var id = $(this).val();
         $.ajax({
           type: 'POST',
           url: '/data.php',
           data: {action:'get-cities', id:id},
           dataType: 'JSON',
           success: function(response){
             var options = '<option value="">Seleccione</option>';
             $.each(response, function(index, value){
               options += '<option value="'+value.id+'">'+value.nombre+'</option>';
             });
             $('.city').html(options);
             $('.district').html('<option value="">Seleccione</option>');
             $('.ubigeo').val(null);
           }
         }).fail(function(jqXHR, textStatus, errorThrown){
           console.log(jqXHR);
         });
       });

       //OBTENEMOS LOS DISTRITOS POR CIUDAD
       $('.city').on('change', function(){
         var id = $(this).val();
         $.ajax({
           type: 'POST',
           url: '/data.php',
           data: {action:'get-districts', id:id},
           dataType: 'JSON',
           success: function(response){
             var options = '<option value="">Seleccione</option>';
             $.each(response, function(index, value){
               options += '<option value="'+value.id+'" ubigeo="'+value.ubigeo+'">'+value.nombre+'</option>';
             });
             $('.district').html(options);
             $('.ubigeo').val(null);
           }
         }).fail(function(jqXHR, textStatus, errorThrown){
           console.log(jqXHR);
         });
       });

       $('.district').on('change', function(){
         var ubigeo = $(this).find('option:selected').attr('ubigeo');
         $('.ubigeo').val(ubigeo);
       });
     </script>


<!--ruta destino-->


<script>

    //CARGAMOS LOS DEPARTAMENTOS
    $(document).ready(function(){
      $.ajax({
        type: 'POST',
        url: '/data.php',
        data: {action:'get-states'},
        dataType: 'JSON',
        success: function(response){
          var options = '<option value="">Seleccione</option>';
          $.each(response, function(index, value){
            options += '<option value="'+value.id+'">'+value.nombre+'</option>';
          });
          $('.state_destino').html(options);
          $('.city_destino').html('<option value="">Seleccione</option>');
          $('.district_destino').html('<option value="">Seleccione</option>');
          $('.ubigeo_destino').val(null);
        }
      }).fail(function(jqXHR, textStatus, errorThrown){
        console.log(jqXHR);
      });
    });

    //OBTENEMOS LAS CIUDADES POR DEPARTAMENTO
    $('.state_destino').on('change', function(){
      var id = $(this).val();
      $.ajax({
        type: 'POST',
        url: '/data.php',
        data: {action:'get-cities', id:id},
        dataType: 'JSON',
        success: function(response){
          var options = '<option value="">Seleccione</option>';
          $.each(response, function(index, value){
            options += '<option value="'+value.id+'">'+value.nombre+'</option>';
          });
          $('.city_destino').html(options);
          $('.district_destino').html('<option value="">Seleccione</option>');
          $('.ubigeo_destino').val(null);
        }
      }).fail(function(jqXHR, textStatus, errorThrown){
        console.log(jqXHR);
      });
    });

    //OBTENEMOS LOS DISTRITOS POR CIUDAD
    $('.city_destino').on('change', function(){
      var id = $(this).val();
      $.ajax({
        type: 'POST',
        url: '/data.php',
        data: {action:'get-districts', id:id},
        dataType: 'JSON',
        success: function(response){
          var options = '<option value="">Seleccione</option>';
          $.each(response, function(index, value){
            options += '<option value="'+value.id+'" ubigeo="'+value.ubigeo+'">'+value.nombre+'</option>';
          });
          $('.district_destino').html(options);
          $('.ubigeo_destino').val(null);
        }
      }).fail(function(jqXHR, textStatus, errorThrown){
        console.log(jqXHR);
      });
    });

    $('.district_destino').on('change', function(){
      var ubigeo = $(this).find('option:selected').attr('ubigeo_destino');
      $('.ubigeo_destino').val(ubigeo);
    });
  </script>

    </body>
</html>
