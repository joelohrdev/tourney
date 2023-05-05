<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournamentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'address' => ['nullable'],
            'city' => ['nullable'],
            'state' => ['nullable'],
            'zip_code' => ['nullable'],
            'logo' => ['nullable'],
        ];
    }
}
