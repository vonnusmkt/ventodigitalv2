@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.email.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.emails.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.email.fields.db_res_email_provider') }}</label>
                <select class="form-control {{ $errors->has('db_res_email_provider') ? 'is-invalid' : '' }}" name="db_res_email_provider" id="db_res_email_provider" required>
                    <option value disabled {{ old('db_res_email_provider', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Email::DB_RES_EMAIL_PROVIDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_res_email_provider', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_res_email_provider'))
                    <span class="text-danger">{{ $errors->first('db_res_email_provider') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.email.fields.db_res_email_provider_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="db_res_email">{{ trans('cruds.email.fields.db_res_email') }}</label>
                <input class="form-control {{ $errors->has('db_res_email') ? 'is-invalid' : '' }}" type="email" name="db_res_email" id="db_res_email" value="{{ old('db_res_email') }}" required>
                @if($errors->has('db_res_email'))
                    <span class="text-danger">{{ $errors->first('db_res_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.email.fields.db_res_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="db_res_email_pass">{{ trans('cruds.email.fields.db_res_email_pass') }}</label>
                <input class="form-control {{ $errors->has('db_res_email_pass') ? 'is-invalid' : '' }}" type="text" name="db_res_email_pass" id="db_res_email_pass" value="{{ old('db_res_email_pass', '') }}" required>
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