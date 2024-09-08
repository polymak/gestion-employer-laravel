<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire Employé</title>
</head>
<body>
    <h1 style="text-align:center;">Ajouter Employé</h1>
        <br>
            <div class="container">
                @if(session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div> 
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>
                <form action="/ajouter/traitement" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        </div><br>
                        <div class="form-group col-md-6">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                        </div><br>
                        <div class="form-group col-md-6">
                            <label for="fonction">Fonction</label>
                            <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction">
                        </div><br>
                    </div>
            
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <br>
                        <br>
                        <a href="/listeemploye" class="btn btn-danger">Revenir à la liste</a>
                </form>
            </div>


<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</script>
</body>
</html>