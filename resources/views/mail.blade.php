<h2>De : noreplay@domaine.com</h2> 
<strong>Titre : Formulaire de contact > </strong>{{ $contact->nom }}<br>
<strong>Message : </strong><br>
<strong> Un visiteur du site Cosmed, vous a envoyé le message suivant via le formulaire de contact :</strong><br>
<strong>Civilité : </strong>{{ $contact->civilite }} <br>
<strong>Prénom : </strong>{{ $contact->prenom }}<br>
<strong>Nom : </strong>{{ $contact->nom }}<br>
<strong>Email : </strong>{{ $contact->email }}<br>
<strong>Date de naissance : </strong>{{ $contact->dnaissance }}<br>
<strong>Adresse : </strong>{{ $contact->adresse }}<br>
<strong>Code postal : </strong>{{ $contact->cp }}<br>
<strong>Ville : </strong>{{ $contact->ville }}<br>
<strong>Pays : </strong>{{ $contact->pays }}<br>
<strong>Société : </strong>{{ $contact->societe }}<br>
<strong>Destinataire : </strong>{{ $contact->destinataire }}<br>
<strong>Message : </strong>{{ $contact->message }}<br>
<?php   $newslette = $contact->newsletter == 1 ? 'oui': 'non';  ?>
<strong>Inscription newsletter : <strong>{{ $newslette }}<br>
{{-- Date :  --}}
<strong>Adresse IP : </strong>{{ $contact->adresseip }} »




  