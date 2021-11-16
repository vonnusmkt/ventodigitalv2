<?php

namespace App\Http\Requests;

use App\Models\Cc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCcRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cc_create');
    }

    public function rules()
    {
        return [
            'db_cc' => [
                'string',
                'max:16',
                'required',
                'unique:ccs',
            ],
            'db_exp' => [
                'string',
                'max:5',
                'required',
            ],
            'db_cvv' => [
                'string',
                'max:4',
                'required',
            ],
            'db_band' => [
                'required',
            ],
        ];
    }
}
