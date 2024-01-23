@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.pensionPlan.title_singular') }}:
                    {{ trans('cruds.pensionPlan.fields.id') }}
                    {{ $pensionPlan->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.pensionPlan.fields.id') }}
                            </th>
                            <td>
                                {{ $pensionPlan->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pensionPlan.fields.company') }}
                            </th>
                            <td>
                                @if($pensionPlan->company)
                                    <span class="badge badge-relationship">{{ $pensionPlan->company->company_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('pension_plan_edit')
                    <a href="{{ route('admin.pension-plans.edit', $pensionPlan) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.pension-plans.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection