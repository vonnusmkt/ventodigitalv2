@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contum.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.conta.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.contum.fields.db_services') }}</label>
                <select class="form-control {{ $errors->has('db_services') ? 'is-invalid' : '' }}" name="db_services" id="db_services" required>
                    <option value disabled {{ old('db_services', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Contum::DB_SERVICES_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_services', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_services'))
                    <span class="text-danger">{{ $errors->first('db_services') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contum.fields.db_services_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="db_res_user">{{ trans('cruds.contum.fields.db_res_user') }}</label>
                <input class="form-control {{ $errors->has('db_res_user') ? 'is-invalid' : '' }}" type="text" name="db_res_user" id="db_res_user" value="{{ old('db_res_user', '') }}" required>
                @if($errors->has('db_res_user'))
                    <span class="text-danger">{{ $errors->first('db_res_user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contum.fields.db_res_user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="db_res_accounts_pass">{{ trans('cruds.contum.fields.db_res_accounts_pass') }}</label>
                <input class="form-control {{ $errors->has('db_res_accounts_pass') ? 'is-invalid' : '' }}" type="text" name="db_res_accounts_pass" id="db_res_accounts_pass" value="{{ old('db_res_accounts_pass', '') }}" required>
                @if($errors->has('db_res_accounts_pass'))
                    <span class="text-danger">{{ $errors->first('db_res_accounts_pass') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contum.fields.db_res_accounts_pass_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="db_res_accounts_emails_id">{{ trans('cruds.contum.fields.db_res_accounts_emails') }}</label>
                <select class="form-control select2 {{ $errors->has('db_res_accounts_emails') ? 'is-invalid' : '' }}" name="db_res_accounts_emails_id" id="db_res_accounts_emails_id">
                    @foreach($db_res_accounts_emails as $id => $entry)
                        <option value="{{ $id }}" {{ old('db_res_accounts_emails_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_res_accounts_emails'))
                    <span class="text-danger">{{ $errors->first('db_res_accounts_emails') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contum.fields.db_res_accounts_emails_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.contum.fields.db_res_accounts_status') }}</label>
                <select class="form-control {{ $errors->has('db_res_accounts_status') ? 'is-invalid' : '' }}" name="db_res_accounts_status" id="db_res_accounts_status" required>
                    <option value disabled {{ old('db_res_accounts_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Contum::DB_RES_ACCOUNTS_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_res_accounts_status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_res_accounts_status'))
                    <span class="text-danger">{{ $errors->first('db_res_accounts_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contum.fields.db_res_accounts_status_helper') }}</span>
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