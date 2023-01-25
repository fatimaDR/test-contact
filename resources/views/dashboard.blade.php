<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des contacts') }}
        </h2>
    </x-slot>
    <a class="btn btn-primary" href="{{ route('exportcsv') }}">Exporter fichier CSV</a> &nbsp;&nbsp;
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-bordered">
                        <thead>
                          <tr class="table-active">
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Destinataire</th>
                            <th scope="col">Date</th>
                            <th scope="col">IP</th>
                          </tr>
                        </thead>
                        @foreach ($contacts as $contact)
                        <tbody>
                          <tr>
                                <td>{{ $contact->prenom }}</td>
                                <td>{{ $contact->nom }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->telephone }}</td>
                                <td>{{ $contact->ville }}</td>
                                <td>{{ $contact->destinataire }}</td>
                                <th scope="row">{{ $contact->created_at }}</th>
                                <td colspan="2">{{ $contact->adresseip }}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
