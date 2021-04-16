@extends('Backoffice.layout')
@section('content')

<div class="text-center" style="margin-left:32em; margin-top:10em ">
    <div class="alert alert-success">
        
        <p class="text-lg text-center" style="font-size:24px">Cliquer sur le QR pour l'imprimer</p>
    </div>
    <a href="javascript:window.print()">
{{$QrCode}}
</a>
<div style="height:80px"></div>
</div>


@endsection