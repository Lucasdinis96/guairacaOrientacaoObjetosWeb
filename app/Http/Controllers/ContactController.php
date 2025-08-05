<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        foreach ($contacts as $contact){
            $contact->nome = decrypt($contact->nome);
            $contact->email = decrypt($contact->email);
            $contact->telefone = decrypt($contact->telefone);
            $contact->data_nascimento = $contact->data_nascimento;
        }
        return view ('contact', compact('contacts'));
    }

    public function storeDataEncrypt(){
        $contact = new Contact();

        $contact->nome = encrypt ('Lucas');
        $contact->email = encrypt ('lucasdinis96@gmail.com');
        $contact->telefone = encrypt ('4299998989');
        $contact->data_nascimento = '1996-09-10';

        $contact->save();
    }
}
