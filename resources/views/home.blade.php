<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TestLaravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h4>TIC-TAC-TOE</h4>
        <div class="row" style='margin-top:10%;'>
            <div class="col" style="border-right:solid 1px black;">
                <h2>Crear Partida</h2>
                <form action="NuevaPartida" method='POST'>
                    @csrf
                    <div class="form-group">
                        <label for="Nombre">Nombre Jugador 1</label>
                        <input type="text" class="form-control" name="Nombre" require maxlength="50">
                    </div>
                    <div class="form-group">                        
                        <input type="submit" class="btn btn-primary" value="Crear">                        
                    </div>
                </form>
            </div>
            <div class="col" style="border-left:solid 1px black;">
                <h2>Unirse a Partida</h2>
                <form action="UnirsePartida" method='POST'>
                    @csrf
                    <div class="form-group">
                        <label for="IdPartida">Id partida</label>
                        <input type="text" class="form-control" name="IdPartida" require maxlength="50">
                    </div>
                    <div class="form-group">                        
                        <input type="submit" class="btn btn-primary" value="Unirse">                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>