@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.pensionType.title_singular') }}:
                    {{ trans('cruds.pensionType.fields.id') }}
                    {{ $pensionType->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.pensionType.fields.id') }}
                            </th>
                            <td>
                                {{ $pensionType->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pensionType.fields.type_name') }}
                            </th>
                            <td>
                                {{ $pensionType->type_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pensionType.fields.pension_type') }}
                            </th>
                            <td>
                                @if($pensionType->pensionType)
                                    <span class="badge badge-relationship">{{ $pensionType->pensionType->type_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('pension_type_edit')
                    <a href="{{ route('admin.pension-types.edit', $pensionType) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.pension-types.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection