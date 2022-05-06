<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TestLaravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>TIC-TAC-TOE</h2>
        @if (isset($Ultimo))
        <div style="margin-top:5%;">
            <h4>El id de esta partida es: {{$Ultimo}}</h4>
        </div>
        <div  style="width: 27%;height: 22em;border: solid black 2.4px;border-radius: 4px;margin-left: 32%;margin-top: 9%;">
            <table style="width:100%;height:100%;">
                <head>
                </head>
                <body>
                    <tr style="border-bottom:1px solid black;">
                        <td style="border-right:1px solid black;"><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac1({{$Ultimo}});"></div></td>
                        <td style="border-right:1px solid black;"><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac2({{$Ultimo}});"></div></td>
                        <td><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac3({{$Ultimo}});"></div></td>
                    </tr>
                    <tr style="border-bottom:1px solid black;">
                        <td style="border-right:1px solid black;"><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac4({{$Ultimo}});"></div></td>
                        <td style="border-right:1px solid black;"><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac5({{$Ultimo}});"></div></td>
                        <td><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac6({{$Ultimo}});"></div></td>
                    </tr>
                    <tr>
                        <td style="border-right:1px solid black;"><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac7({{$Ultimo}});"></div></td>
                        <td style="border-right:1px solid black;"><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac8({{$Ultimo}});"></div></td>
                        <td><div style="width: 100%;height: 100%;cursor:pointer;" onclick="Actualizac9({{$Ultimo}});"></div></td>
                    </tr>
                </body>
            </table>
        </div>
        <form action="">
            <input type="hidden" name="c1" id="c1">
            <input type="hidden" name="c2" id="c2">
            <input type="hidden" name="c3">
            <input type="hidden" name="c4">
            <input type="hidden" name="c5">
            <input type="hidden" name="c6">
            <input type="hidden" name="c7">
            <input type="hidden" name="c8">
            <input type="hidden" name="c9">
        </form>
        @endif
    </div>
</body>
<script>
    function Actualizac1(Id){
        $("#c1").val(Id);
        var c1=$("#c1").val();
        console.log(c1);
    }
</script>
</html>