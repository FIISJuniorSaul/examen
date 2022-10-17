
<!DOCTYPE html>

<style>

        .page-break {
            page-break-after: always;
        }
        body {
            width: 16cm;
            font-family: Arial, Helvetica, sans-serif
            }
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
          }

          a {
            color: #5D6975;
            text-decoration: underline;
          }

          body {
            position: relative;
            width: 16cm;

            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
          }

          header {
            padding: 10px 0;
            margin-bottom: 30px;
          }



          h1 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
          }

          h2 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;

            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
          }







          table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
          }

          table tr:nth-child(2n-1) td {
            background: #F5F5F5;
          }

          table th,
          table td {
            text-align: center;
          }

          table th {
            padding: 5px 10px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
            text-align:left;
          }

          table .service,
          table .desc {
            text-align: left;
          }

          table td {
            padding: 10px;
            text-align: left;
          }

          table td.service,
          table td.desc {
            vertical-align: top;
          }

          table td.unit,
          table td.qty,
          table td.total {
            font-size: 1.2em;
          }

          table td.grand {
            border-top: 1px solid #5D6975;;
          }

          #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
          }

          footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
          }

          .gris{
            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);
          }

</style>

<html lang="es">
<head>
<meta charset="utf-8">
<title> Reporte de Ausencias - {{$empleado->apellido_nombre}}</title>
<link rel="stylesheet" href="style.css" media="all" />
</head>
<body>
<header class="clearfix">
<div id="logo" style="text-align: center">

<td rowspan="4"><img src=resources/images/log.png style="width:20%"></td>

</div>

<h1>Reporte de Empleado {{$empleado->apellido_nombre}}</h1>
<div id="company" class="clearfix">
<div><p>
<?php  $__currentLoopData = $empleado; $__env->addLoop($__currentLoopData); ?>
<div class ="card">
<div class="header bg-cyan">
    <h5>CUIL: <?php echo e($empleado->cuil); ?></h5>
    <h5> TELEFONO CELULAR: <?php echo e($empleado->telefono); ?></h5>
    <h5> DOMICILIO: <?php echo e($empleado->domicilio); ?></h5>
    <h5>AREA: <?php echo e($empleado->area); ?></h5>
    <h5>CARGO: <?php echo e($empleado->cargo); ?></h5>
    <h5>HORARIO: <?php echo e($empleado->horario); ?></h5>
    <h5 >ESTADO: <?php echo e($empleado->situacion_revista); ?></h5>

</div>
</div>
<?php ?>
    Antiguedad del empleado:
   {{$empleado->antiguedad()}} años </p>

      </div>

      <div><p>
          Días de vacaciones por ley:
          {{$empleado->diasDisponibles()}} días </p>

            </div>


      <div><p>
          Días tomados:
          {{$diasHabiles}} días </p>

            </div>

            <div><p>
                Días disponibles de vacaciones:
                {{$diasDisponibles}} días </p>

                  </div>

        <br>
</header>
<main>

    @foreach ($ausencias as $ausencia_titulo => $ausencias)
<div style="border-style: solid; border-width:thin; border-color: black; padding:2%">
<div class="">
        <h3>{{$ausencia_titulo}}</h3>
        @if ($ausencias[0]->tipo->remunerada === 1)

        <h5>AUSENCIAS REMUNERADAS: SI  </h5>
        @else
        <h5>AUSENCIAS REMUNERADAS: NO  </h5>
        @endif
        <small>Cantidad de Inasistencias: {{$ausencias->count()}}</small>

    </div>

    <br>
<table>
<thead>
                                    <th>Fecha de Inasistencia</th>
                                    <th>Justificada</th>
                                    <th>Observaciones</th>

                                </thead>
<tbody>
<?php $__currentLoopData = $ausencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ausencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td>
<h5>INICIO: <?php echo e($ausencia->inicio_ausencia); ?></h5>
<h5>FIN   :<?php echo e($ausencia->finalizacion_ausencia); ?></h5>

<td><?php echo e($ausencia->observaciones); ?>
<td><?php if($ausencia->justificado == 1): ?>
    SI
    <?php else: ?>
    NO
    <?php endif; ?></td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>


</div>
<br>
@endforeach

<div id="notices">
<div>AVISO:</div>
<div class="notice">Mas campos.</div>
</div>
</main>
<footer>
Defensoría de los Niños, Niñas y Adolescentes de la Provincia de LEONCIO PRADO.
</footer>
</body>
</html>
