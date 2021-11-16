@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.cc.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ccs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="db_cc">{{ trans('cruds.cc.fields.db_cc') }}</label>
                <input class="form-control {{ $errors->has('db_cc') ? 'is-invalid' : '' }}" type="text" name="db_cc" id="db_cc" value="{{ old('db_cc', '') }}" required>
                @if($errors->has('db_cc'))
                    <span class="text-danger">{{ $errors->first('db_cc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cc.fields.db_cc_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="db_exp">{{ trans('cruds.cc.fields.db_exp') }}</label>
                <input class="form-control {{ $errors->has('db_exp') ? 'is-invalid' : '' }}" type="text" name="db_exp" id="db_exp" value="{{ old('db_exp', '/') }}" required>
                @if($errors->has('db_exp'))
                    <span class="text-danger">{{ $errors->first('db_exp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cc.fields.db_exp_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="db_cvv">{{ trans('cruds.cc.fields.db_cvv') }}</label>
                <input class="form-control {{ $errors->has('db_cvv') ? 'is-invalid' : '' }}" type="text" name="db_cvv" id="db_cvv" value="{{ old('db_cvv', '') }}" required>
                @if($errors->has('db_cvv'))
                    <span class="text-danger">{{ $errors->first('db_cvv') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cc.fields.db_cvv_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.cc.fields.db_band') }}</label>
                <select class="form-control {{ $errors->has('db_band') ? 'is-invalid' : '' }}" name="db_band" id="db_band" required>
                    <option value disabled {{ old('db_band', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Cc::DB_BAND_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_band', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_band'))
                    <span class="text-danger">{{ $errors->first('db_band') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cc.fields.db_band_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.cc.fields.db_tipo') }}</label>
                <select class="form-control {{ $errors->has('db_tipo') ? 'is-invalid' : '' }}" name="db_tipo" id="db_tipo">
                    <option value disabled {{ old('db_tipo', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Cc::DB_TIPO_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_tipo', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_tipo'))
                    <span class="text-danger">{{ $errors->first('db_tipo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cc.fields.db_tipo_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.cc.fields.db_bank') }}</label>
                <select class="form-control {{ $errors->has('db_bank') ? 'is-invalid' : '' }}" name="db_bank" id="db_bank">
                    <option value disabled {{ old('db_bank', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Cc::DB_BANK_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_bank', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_bank'))
                    <span class="text-danger">{{ $errors->first('db_bank') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cc.fields.db_bank_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.cc.fields.db_tested') }}</label>
                <select class="form-control {{ $errors->has('db_tested') ? 'is-invalid' : '' }}" name="db_tested" id="db_tested">
                    <option value disabled {{ old('db_tested', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Cc::DB_TESTED_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_tested', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('db_tested'))
                    <span class="text-danger">{{ $errors->first('db_tested') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.cc.fields.db_tested_helper') }}</span>
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