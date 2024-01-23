@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.investmentType.title_singular') }}:
                    {{ trans('cruds.investmentType.fields.id') }}
                    {{ $investmentType->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('investment-type.edit', [$investmentType])
        </div>
    </div>
</div>
@endsection