<?php

namespace App\Http\Requests;

use App\Models\Email;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('email_create');
    }

    public function rules()
    {
        return [
            'db_res_email_provider' => [
                'required',
            ],
            'db_res_email' => [
                'required',
                'unique:emails',
            ],
            'db_res_email_pass' => [
                'string',
                'required',
            ],
        ];
    }
}
