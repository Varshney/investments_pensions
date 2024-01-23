<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('investment_plan_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="InvestmentPlan" format="csv" />
                <livewire:excel-export model="InvestmentPlan" format="xlsx" />
                <livewire:excel-export model="InvestmentPlan" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.investmentPlan.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.plan_name') }}
                            @include('components.table.sort', ['field' => 'plan_name'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.company') }}
                            @include('components.table.sort', ['field' => 'company.company_name'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.investment_type') }}
                            @include('components.table.sort', ['field' => 'investment_type.type_name'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.currency') }}
                            @include('components.table.sort', ['field' => 'currency'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.invested') }}
                            @include('components.table.sort', ['field' => 'invested'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.plan_length') }}
                            @include('components.table.sort', ['field' => 'plan_length'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.percentage') }}
                            @include('components.table.sort', ['field' => 'percentage'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.second_percentage') }}
                            @include('components.table.sort', ['field' => 'second_percentage'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.second_percentage_start') }}
                            @include('components.table.sort', ['field' => 'second_percentage_start'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.income_based') }}
                            @include('components.table.sort', ['field' => 'income_based'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.compounded') }}
                            @include('components.table.sort', ['field' => 'compounded'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.start_date') }}
                            @include('components.table.sort', ['field' => 'start_date'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.end_date') }}
                            @include('components.table.sort', ['field' => 'end_date'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.maturity_date') }}
                            @include('components.table.sort', ['field' => 'maturity_date'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.moved_from_plan') }}
                            @include('components.table.sort', ['field' => 'moved_from_plan.plan_name'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.ftse_100_start') }}
                            @include('components.table.sort', ['field' => 'ftse_100_start'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.ftse_100_end') }}
                            @include('components.table.sort', ['field' => 'ftse_100_end'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.snp_500_start') }}
                            @include('components.table.sort', ['field' => 'snp_500_start'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.snp_500_end') }}
                            @include('components.table.sort', ['field' => 'snp_500_end'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.stoxx_50_start') }}
                            @include('components.table.sort', ['field' => 'stoxx_50_start'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.stoxx_50_end') }}
                            @include('components.table.sort', ['field' => 'stoxx_50_end'])
                        </th>
                        <th>
                            {{ trans('cruds.investmentPlan.fields.notes') }}
                            @include('components.table.sort', ['field' => 'notes'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($investmentPlans as $investmentPlan)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $investmentPlan->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $investmentPlan->id }}
                            </td>
                            <td>
                                {{ $investmentPlan->plan_name }}
                            </td>
                            <td>
                                @if($investmentPlan->company)
                                    <span class="badge badge-relationship">{{ $investmentPlan->company->company_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($investmentPlan->investmentType)
                                    <span class="badge badge-relationship">{{ $investmentPlan->investmentType->type_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $investmentPlan->currency_label }}
                            </td>
                            <td>
                                {{ $investmentPlan->invested }}
                            </td>
                            <td>
                                {{ $investmentPlan->plan_length_label }}
                            </td>
                            <td>
                                {{ $investmentPlan->percentage }}
                            </td>
                            <td>
                                {{ $investmentPlan->second_percentage }}
                            </td>
                            <td>
                                {{ $investmentPlan->second_percentage_start_label }}
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $investmentPlan->income_based ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $investmentPlan->compounded ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $investmentPlan->start_date }}
                            </td>
                            <td>
                                {{ $investmentPlan->end_date }}
                            </td>
                            <td>
                                {{ $investmentPlan->maturity_date }}
                            </td>
                            <td>
                                @if($investmentPlan->movedFromPlan)
                                    <span class="badge badge-relationship">{{ $investmentPlan->movedFromPlan->plan_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $investmentPlan->ftse_100_start }}
                            </td>
                            <td>
                                {{ $investmentPlan->ftse_100_end }}
                            </td>
                            <td>
                                {{ $investmentPlan->snp_500_start }}
                            </td>
                            <td>
                                {{ $investmentPlan->snp_500_end }}
                            </td>
                            <td>
                                {{ $investmentPlan->stoxx_50_start }}
                            </td>
                            <td>
                                {{ $investmentPlan->stoxx_50_end }}
                            </td>
                            <td>
                                {{ $investmentPlan->notes }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('investment_plan_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.investment-plans.show', $investmentPlan) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('investment_plan_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.investment-plans.edit', $investmentPlan) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('investment_plan_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $investmentPlan->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $investmentPlans->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush