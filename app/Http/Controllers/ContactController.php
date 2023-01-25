<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Pays;
use App\Models\Contact;
use App\Models\Destinataire;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Exports\ContactsExport;
use Excel;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Destinataire::all();
        $pays = Pays::all();
        // dd($service_list);
        return view('contact', ['services' => $services, 'pays' => $pays]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        $validated = $request->validated();
        $contact = new Contact();
        $contact->civilite = $request->civilite;
        $contact->prenom = $request->prenom;
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->dnaissance = $request->dnaissance;
        $contact->telephone = $request->telephone;
        $contact->adresse = $request->adresse;
        $contact->cp = $request->cp;
        $contact->ville = $request->ville;
        $contact->pays = $request->pays;
        $contact->societe = $request->societe;
        $contact->destinataire = $request->destinataire;
        $contact->message = $request->message;
        $contact->newsletter = $request->newsletter == 'on' ? 1 : 0;
        $contact->adresseip = $request->adresseip;
        //send mail
        \Mail::to($request->destinataire)->send(new ContactMail($contact));
        $contact->save();
        return redirect(route('contact-confirm'));
    }

    // CSV Export
    public function exportCSV(){
        $file_name = 'Cosmed_site_contacts_'.date('d_m_Y:H_i_s').'.xls';  
        return Excel::download(new ContactsExport, $file_name);
    }
}
