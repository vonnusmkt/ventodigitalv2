<?php

namespace App\Http\Requests;

use App\Models\Contum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contum_create');
    }

    public function rules()
    {
        return [
            'db_services' => [
                'required',
            ],
            'db_res_user' => [
                'string',
                'required',
            ],
            'db_res_accounts_pass' => [
                'string',
                'required',
            ],
            'db_res_accounts_status' => [
                'required',
            ],
        ];
    }
}
