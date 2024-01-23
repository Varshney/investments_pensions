@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.investmentPlan.title_singular') }}:
                    {{ trans('cruds.investmentPlan.fields.id') }}
                    {{ $investmentPlan->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.id') }}
                            </th>
                            <td>
                                {{ $investmentPlan->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.plan_name') }}
                            </th>
                            <td>
                                {{ $investmentPlan->plan_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.company') }}
                            </th>
                            <td>
                                @if($investmentPlan->company)
                                    <span class="badge badge-relationship">{{ $investmentPlan->company->company_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.investment_type') }}
                            </th>
                            <td>
                                @if($investmentPlan->investmentType)
                                    <span class="badge badge-relationship">{{ $investmentPlan->investmentType->type_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.currency') }}
                            </th>
                            <td>
                                {{ $investmentPlan->currency_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.invested') }}
                            </th>
                            <td>
                                {{ $investmentPlan->invested }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.plan_length') }}
                            </th>
                            <td>
                                {{ $investmentPlan->plan_length_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.percentage') }}
                            </th>
                            <td>
                                {{ $investmentPlan->percentage }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.second_percentage') }}
                            </th>
                            <td>
                                {{ $investmentPlan->second_percentage }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.second_percentage_start') }}
                            </th>
                            <td>
                                {{ $investmentPlan->second_percentage_start_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.income_based') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $investmentPlan->income_based ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.compounded') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $investmentPlan->compounded ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.start_date') }}
                            </th>
                            <td>
                                {{ $investmentPlan->start_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.end_date') }}
                            </th>
                            <td>
                                {{ $investmentPlan->end_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.maturity_date') }}
                            </th>
                            <td>
                                {{ $investmentPlan->maturity_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.moved_from_plan') }}
                            </th>
                            <td>
                                @if($investmentPlan->movedFromPlan)
                                    <span class="badge badge-relationship">{{ $investmentPlan->movedFromPlan->plan_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.moved_from_plan_two') }}
                            </th>
                            <td>
                                @if($investmentPlan->movedFromPlanTwo)
                                    <span class="badge badge-relationship">{{ $investmentPlan->movedFromPlanTwo->plan_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.ftse_100_start') }}
                            </th>
                            <td>
                                {{ $investmentPlan->ftse_100_start }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.ftse_100_end') }}
                            </th>
                            <td>
                                {{ $investmentPlan->ftse_100_end }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.snp_500_start') }}
                            </th>
                            <td>
                                {{ $investmentPlan->snp_500_start }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.snp_500_end') }}
                            </th>
                            <td>
                                {{ $investmentPlan->snp_500_end }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.stoxx_50_start') }}
                            </th>
                            <td>
                                {{ $investmentPlan->stoxx_50_start }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.stoxx_50_end') }}
                            </th>
                            <td>
                                {{ $investmentPlan->stoxx_50_end }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.kick_out_year_one') }}
                            </th>
                            <td>
                                {{ $investmentPlan->kick_out_year_one }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.kick_out_year_two') }}
                            </th>
                            <td>
                                {{ $investmentPlan->kick_out_year_two }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.kick_out_year_three') }}
                            </th>
                            <td>
                                {{ $investmentPlan->kick_out_year_three }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.kick_out_year_four') }}
                            </th>
                            <td>
                                {{ $investmentPlan->kick_out_year_four }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.kick_out_year_five') }}
                            </th>
                            <td>
                                {{ $investmentPlan->kick_out_year_five }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.kick_out_year_six') }}
                            </th>
                            <td>
                                {{ $investmentPlan->kick_out_year_six }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.kick_out_year_seven') }}
                            </th>
                            <td>
                                {{ $investmentPlan->kick_out_year_seven }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.investmentPlan.fields.notes') }}
                            </th>
                            <td>
                                {{ $investmentPlan->notes }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('investment_plan_edit')
                    <a href="{{ route('admin.investment-plans.edit', $investmentPlan) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.investment-plans.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection