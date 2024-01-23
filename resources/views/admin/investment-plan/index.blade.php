@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.investmentPlan.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('investment_plan_create')
                    <a class="btn btn-indigo" href="{{ route('admin.investment-plans.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.investmentPlan.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('investment-plan.index')

    </div>
</div>
@endsection