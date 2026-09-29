<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'    => 'required|string|min:3|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:50|regex:/^[0-9\s\-\+\(\)]*$/',
            'message' => 'required|string|min:10|max:2000',

            // Validering för Cloudflare Turnstile
            'cf-turnstile-response' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Gör ett anrop till Cloudflares API för att verifiera token
                    $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                        'secret'   => config('services.turnstile.secret_key'),
                        'response' => $value,
                        'remoteip' => request()->ip(),
                    ]);

                    // Om verifieringen misslyckas eller om Cloudflare svarar med error
                    if (!$response->successful() || !$response->json('success')) {
                        $fail('Spamskyddet kunde inte verifieras. Vänligen försök igen.');
                    }
                },
            ],
        ];
    }

    /**
     * Anpassa felmeddelandet om fältet saknas helt
     */
    public function messages(): array
    {
        return [
            'name.required'                  => 'Namn är obligatoriskt.',
            'name.min'                       => 'Namnet måste vara minst 3 tecken långt.', 
            'name.max'                       => 'Namnet får inte vara längre än 255 tecken.',

            'email.required'                 => 'E-postadress är obligatoriskt.',
            'email.email'                    => 'Ange en giltig e-postadress.',
            'email.max'                      => 'E-postadressen får inte vara längre än 255 tecken.',

            'phone.max'                      => 'Telefonnumret får inte vara längre än 50 tecken.',
            'phone.regex'                    => 'Telefonnumret innehåller ogiltiga tecken. Använd endast siffror, mellanslag, plus eller bindestreck.',

            'message.required'               => 'Meddelande är obligatoriskt.',
            'message.min'                    => 'Meddelandet måste vara minst 10 tecken långt.',
            'message.max'                    => 'Meddelandet får inte vara längre än 2000 tecken.',
            'cf-turnstile-response.required' => 'Vänligen verifiera att du inte är en robot.',
        ];
    }
}
