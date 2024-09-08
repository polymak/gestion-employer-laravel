<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion des Employes</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center;">Liste des employés</h1>
        <a href="/ajouter-employe" class="btn btn-primary">Ajouter Employer</a>
        <br>
        <br>
        @if(session('status'))
        <div class="alert alert-success">
            {{(session('status'))}}
        </div> 
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Fonction</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $ide = 1;
                @endphp
               @foreach($employerss as $employer)
                <tr>
                    <th scope="row">{{$ide}}</th>
                    <td>{{$employer->nom}}</td>
                    <td>{{$employer->prenom}}</td>
                    <td>{{$employer->fonction}}</td>
                    <td>
                        <a href="/modifier-employe/{{$employer->id}}" class="btn btn-info">Modifier</a>
                        <a href="/supprimer-employe/{{$employer->id}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @php
                $ide += 1;
                @endphp
                @endforeach
            </tbody>
        </table>
        {{$employerss->links() }}
    </div>


<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</script>
</body>
</html>