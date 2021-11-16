@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.email.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.emails.update", [$email->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="db_res_email_pass">{{ trans('cruds.email.fields.db_res_email_pass') }}</label>
                <input class="form-control {{ $errors->has('db_res_email_pass') ? 'is-invalid' : '' }}" type="text" name="db_res_email_pass" id="db_res_email_pass" value="{{ old('db_res_email_pass', $email->db_res_email_pass) }}" required>
                @if($errors->has('db_res_email_pass'))
                    <span class="text-danger">{{ $errors->first('db_res_email_pass') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.email.fields.db_res_email_pass_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection