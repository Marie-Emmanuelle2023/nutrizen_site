<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usercontact;

class UsercontactController extends Controller
{
    public function create()
    {
        // Afficher le formulaire de création de contact
        return view('usercontacts.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Usercontact::create($validated);

        return redirect()->back()->with('success', 'Merci pour votre message ! Nous vous répondrons bientôt.');
    }

}
