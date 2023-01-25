<html>
<head>
    <title>Contact</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    <h1>Contact</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('store_contact') }}" method_field('POST') method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="civilite" class="col-sm-2 col-form-label">Civilité: *</label>
                            <div class="col-sm-8">
                                <select class="custom-select @error('civilite') is-invalid @enderror" id="civilite" name="civilite" >
                                    <option value="" selected>Choisir...</option>
                                    <option value="Monsieur">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                    <option value="Mademoiselle">Mademoiselle</option>
                                  </select>
                                @error('civilite')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-sm-2 col-form-label ">Prénom: *</label>
                            <div class="col-sm-8">
                                <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Veuillez saisir votre prénom" >
                                @error('prenom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-2 col-form-label">Nom: *</label>
                            <div class="col-sm-8">
                                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Veuillez saisir votre nom" >
                                @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email: *</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Veuillez saisir votre email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dnaissance" class="col-sm-2 col-form-label">Date de naissance:</label>
                            <div class="col-sm-8">
                                <input type="date" name="dnaissance" id="dnaissance" class="form-control" placeholder="Veuillez saisir votre date de naissance">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-sm-2 col-form-label">Téléphone:</label>
                            <div class="col-sm-8">
                                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Veuillez saisir votre téléphone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresse" class="col-sm-2 col-form-label">Adresse:</label>
                            <div class="col-sm-8">
                                <textarea type="text" name="adresse" id="adresse" class="form-control" placeholder="Veuillez saisir votre adresse" ></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="cp" class="col-sm-2 col-form-label">Code postal:</label>
                            <div class="col-sm-8">
                                <input type="text" name="cp" id="cp" class="form-control" placeholder="Veuillez saisir votre code postal ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ville" class="col-sm-2 col-form-label">Ville:</label>
                            <div class="col-sm-8">
                                <input type="text" name="ville" id="ville" class="form-control" placeholder="Veuillez saisir votre ville ">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="pays" class="col-sm-2 col-form-label">Pays:</label>
                            <div class="col-sm-8">
                                <select class="custom-select" name="pays" id="inputGroupSelect01">
                                    <option selected>Choisir...</option>
                                        @foreach ($pays as $pay)
                                            <option value="{{ $pay->pay_nom }}">{{ $pay->pay_nom }}</option>
                                        @endforeach
                                  </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="societe" class="col-sm-2 col-form-label">Société:</label>
                            <div class="col-sm-8">
                                <input type="text" name="societe" id="societe" class="form-control" placeholder="Veuillez saisir votre société">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="destinataire" class="col-sm-2 col-form-label">Destinataire: *</label>
                            <div class="col-sm-8">
                                <select name="destinataire" class="custom-select @error('destinataire') is-invalid @enderror"  id="destinataire" >
                                    <option selected value="">Choisir...</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->email }}">{{ $service->service }}, {{ $service->email }}</option>
                                    @endforeach
                                </select>
                                @error('destinataire')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label">Message:</label>
                            <div class="col-sm-8">
                                <textarea name="message" id="message" class="form-control" placeholder="Veuillez saisir votre message" ></textarea>
                            </div>
                        </div>

                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                        <label class="form-check-label" for="newsletter">Je souhaite recevoir la newsletter</label>
                        </div>
                        <input type="hidden" class="form-check-input" id="adresseip" name="adresseip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
                        <button type="submit" class="btn btn-primary">Envoyer</button>

                    </form>
                </div>
            </div>
        </div>             
    </body>
</html>