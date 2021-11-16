<?php

namespace App\Http\Requests;

use App\Models\Cc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCcRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cc_edit');
    }

    public function rules()
    {
        return [];
    }
}
