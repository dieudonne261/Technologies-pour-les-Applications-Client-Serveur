<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" ref="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                Ajouter une nouvelle entrée
                </h5>
                <button type="button" class="btn-close" ></button>
            </div>
            <div class="modal-body d-grid gap-2">
                <input v-model="form.name" class="form-control" type="text" placeholder="Nom" />
                <input v-model="form.email" class="form-control" type="text" placeholder="Email" />
                <input v-model="form.devise" class="form-control" type="text" placeholder="Devise" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn " >Fermer</button>
                <button type="button" class="btn " >Enregistrer</button>
            </div>
            </div>
        </div>
        </div>
        <div class="container mt-2">
        <h1 class="mb-3">CRUD API</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Nouveau
        </button>
        <div class="mb-3">
            <input class="form-control" type="text" placeholder="Rechercher" />
        </div>
        <div class="row">
            <div   class="col-md-3 my-3">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <p class="card-text"></p>
                        <button class="btn" >Mettre à jour</button>
                        <button class="btn" >Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="{{ asset('css/bootstrap.min.css') }}"></script>
</body>
</html>