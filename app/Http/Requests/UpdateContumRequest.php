<?php

namespace App\Http\Requests;

use App\Models\Contum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contum_edit');
    }

    public function rules()
    {
        return [
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
