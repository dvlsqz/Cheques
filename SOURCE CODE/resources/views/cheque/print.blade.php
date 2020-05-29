@if($cheque->banco == 'Banco Industrial')
<html>
<head>
<title>Cheque</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (Sin título-2) -->
<img src="images/Willy-cheque-BI.jpg" width="600" height="400" alt="">
<SPAN style="position: absolute; top: 100 px; left:   350 px;"><b>{{$cheque->cuenta}}</b> </span>
<SPAN style="position: absolute; top: 100 px; left:   525 px;"><b>{{$cheque->no_cheque}}</b> </span>
<SPAN style="position: absolute; top: 150 px; left:   135 px;"><b>{{$cheque->lugar.', '.$cheque->fecha}}</b> </span>
<SPAN style="position: absolute; top: 150 px; left:   450 px;"><b>{{$cheque->monto}}</b> </span>
<SPAN style="position: absolute; top: 180 px; left:   175 px;"><b>{{$cheque->proveedor}}</b> </span>
<SPAN style="position: absolute; top: 205 px; left:   115 px;"><b>{{$cheque->monto_letras}} quetzales</b> </span>
<!-- End Save for Web Slices -->
</body>
</html>
@else

<html>
<head>
<title>Cheque</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (Sin título-2) -->
<img src="images/Willy-cheque-BANRURAL.jpg" width="600" height="400" alt="">
<SPAN style="position: absolute; top: 90 px; left:   475 px;"><b>{{$cheque->no_cheque}}</b> </span>
<SPAN style="position: absolute; top: 125 px; left:   225 px;"><b>{{$cheque->cuenta}}</b> </span>
<SPAN style="position: absolute; top: 165 px; left:   135 px;"><b>{{$cheque->lugar.', '.$cheque->fecha}}</b> </span>
<SPAN style="position: absolute; top: 165 px; left:   485 px;"><b>{{$cheque->monto}}</b> </span>
<SPAN style="position: absolute; top: 185 px; left:   175 px;"><b>{{$cheque->proveedor}}</b> </span>
<SPAN style="position: absolute; top: 210 px; left:   115 px;"><b>{{$cheque->monto_letras}} quetzales</b> </span>
<!-- End Save for Web Slices -->
</body>
</html>
@endif