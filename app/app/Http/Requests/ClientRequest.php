<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:3|max:125|string',
            'last_name' => 'required|min:3|max:125|string',
            'email' => 'required|min:3|max:125|email|unique:clients',
            'phone' => 'nullable|min:10|max:14|unique:clients',
            'cell' => 'required|min:11|max:16|unique:clients',
            'cpf' => 'required|min:11|max:14|string|unique:clients',
            'rg' => 'nullable|min:5|max:14|string|unique:clients',
            'nationality' => 'string',
            'civil_status' => 'string',
            'occupation' => 'nullable|string',
            'segment' => 'required|string',
            'type' => 'required|string',

            'tenant_fantasy_name' => 'nullable|unique:clients',
            'tenant_cnpj' => 'nullable|unique:clients',
            'tenant_corporate_reason' => 'nullable|unique:clients',
            'tenant_email' => 'nullable|unique:clients',
            'tenant_phone' => 'nullable|unique:clients',
            'tenant_cell' => 'nullable|unique:clients'
        ];
    }
}
