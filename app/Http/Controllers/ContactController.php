<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        /*
|--------------------------------------------------------------------------
| Honeypot
|--------------------------------------------------------------------------
|
| Fältet "website" ska vara tomt för vanliga besökare.
| Om en bot har fyllt i fältet låter vi det se ut som att
| formuläret skickades utan att faktiskt skicka något mail.
|
*/
        if ($request->filled('website')) {
            return redirect()
                ->to(url()->previous() . '#kontakt')
                ->with('check', 'Tack! Ditt meddelande har skickats.');
        }

        /*
|--------------------------------------------------------------------------
| Validerad data
|--------------------------------------------------------------------------
*/
        $data = $request->validated();

        /*
|--------------------------------------------------------------------------
| Skicka mail via ContactMail Mailable
|--------------------------------------------------------------------------
*/
        Mail::to(config('mail.contact_to', 'info@blasbotransport.se'))
            ->send(new ContactMail($data));

        /*
|--------------------------------------------------------------------------
| Tillbaka till kontaktsektionen med bekräftelse
|--------------------------------------------------------------------------
*/
        return redirect()
            ->to(url()->previous() . '#kontakt')
            ->with('check', 'Tack! Ditt meddelande har skickats.');
    }
}
