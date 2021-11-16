@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.cc.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ccs.update", [$cc->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>{{ trans('cruds.cc.fields.db_tipo') }}</label>
                <select class="form-control {{ $errors->has('db_tipo') ? 'is-invalid' : '' }}" name="db_tipo" id="db_tipo">
                    <option value disabled {{ old('db_tipo', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Cc::DB_TIPO_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('db_tipo', $cc->db_tipo) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
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
                        <option value="{{ $key }}" {{ old('db_bank', $cc->db_bank) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
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
                        <option value="{{ $key }}" {{ old('db_tested', $cc->db_tested) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
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