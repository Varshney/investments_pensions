<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('investmentPlan.plan_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="plan_name">{{ trans('cruds.investmentPlan.fields.plan_name') }}</label>
        <input class="form-control" type="text" name="plan_name" id="plan_name" required wire:model.defer="investmentPlan.plan_name">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.plan_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.plan_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.company_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="company">{{ trans('cruds.investmentPlan.fields.company') }}</label>
        <x-select-list class="form-control" required id="company" name="company" :options="$this->listsForFields['company']" wire:model="investmentPlan.company_id" />
        <div class="validation-message">
            {{ $errors->first('investmentPlan.company_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.company_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.investment_type_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="investment_type">{{ trans('cruds.investmentPlan.fields.investment_type') }}</label>
        <x-select-list class="form-control" required id="investment_type" name="investment_type" :options="$this->listsForFields['investment_type']" wire:model="investmentPlan.investment_type_id" />
        <div class="validation-message">
            {{ $errors->first('investmentPlan.investment_type_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.investment_type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.currency') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.investmentPlan.fields.currency') }}</label>
        <select class="form-control" wire:model="investmentPlan.currency">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['currency'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('investmentPlan.currency') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.currency_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.invested') ? 'invalid' : '' }}">
        <label class="form-label required" for="invested">{{ trans('cruds.investmentPlan.fields.invested') }}</label>
        <input class="form-control" type="number" name="invested" id="invested" required wire:model.defer="investmentPlan.invested" step="0.01">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.invested') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.invested_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.plan_length') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.investmentPlan.fields.plan_length') }}</label>
        <select class="form-control" wire:model="investmentPlan.plan_length">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['plan_length'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('investmentPlan.plan_length') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.plan_length_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.percentage') ? 'invalid' : '' }}">
        <label class="form-label required" for="percentage">{{ trans('cruds.investmentPlan.fields.percentage') }}</label>
        <input class="form-control" type="number" name="percentage" id="percentage" required wire:model.defer="investmentPlan.percentage" step="0.01" max="15">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.percentage') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.percentage_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.second_percentage') ? 'invalid' : '' }}">
        <label class="form-label" for="second_percentage">{{ trans('cruds.investmentPlan.fields.second_percentage') }}</label>
        <input class="form-control" type="number" name="second_percentage" id="second_percentage" wire:model.defer="investmentPlan.second_percentage" step="0.01" max="15">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.second_percentage') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.second_percentage_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.second_percentage_start') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.investmentPlan.fields.second_percentage_start') }}</label>
        <select class="form-control" wire:model="investmentPlan.second_percentage_start">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['second_percentage_start'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('investmentPlan.second_percentage_start') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.second_percentage_start_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.income_based') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="income_based" id="income_based" wire:model.defer="investmentPlan.income_based">
        <label class="form-label inline ml-1" for="income_based">{{ trans('cruds.investmentPlan.fields.income_based') }}</label>
        <div class="validation-message">
            {{ $errors->first('investmentPlan.income_based') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.income_based_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.compounded') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="compounded" id="compounded" wire:model.defer="investmentPlan.compounded">
        <label class="form-label inline ml-1" for="compounded">{{ trans('cruds.investmentPlan.fields.compounded') }}</label>
        <div class="validation-message">
            {{ $errors->first('investmentPlan.compounded') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.compounded_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.start_date') ? 'invalid' : '' }}">
        <label class="form-label" for="start_date">{{ trans('cruds.investmentPlan.fields.start_date') }}</label>
        <x-date-picker class="form-control" wire:model="investmentPlan.start_date" id="start_date" name="start_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('investmentPlan.start_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.start_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.end_date') ? 'invalid' : '' }}">
        <label class="form-label" for="end_date">{{ trans('cruds.investmentPlan.fields.end_date') }}</label>
        <x-date-picker class="form-control" wire:model="investmentPlan.end_date" id="end_date" name="end_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('investmentPlan.end_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.end_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.maturity_date') ? 'invalid' : '' }}">
        <label class="form-label" for="maturity_date">{{ trans('cruds.investmentPlan.fields.maturity_date') }}</label>
        <x-date-picker class="form-control" wire:model="investmentPlan.maturity_date" id="maturity_date" name="maturity_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('investmentPlan.maturity_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.maturity_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.moved_from_plan_id') ? 'invalid' : '' }}">
        <label class="form-label" for="moved_from_plan">{{ trans('cruds.investmentPlan.fields.moved_from_plan') }}</label>
        <x-select-list class="form-control" id="moved_from_plan" name="moved_from_plan" :options="$this->listsForFields['moved_from_plan']" wire:model="investmentPlan.moved_from_plan_id" />
        <div class="validation-message">
            {{ $errors->first('investmentPlan.moved_from_plan_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.moved_from_plan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.ftse_100_start') ? 'invalid' : '' }}">
        <label class="form-label" for="ftse_100_start">{{ trans('cruds.investmentPlan.fields.ftse_100_start') }}</label>
        <input class="form-control" type="number" name="ftse_100_start" id="ftse_100_start" wire:model.defer="investmentPlan.ftse_100_start" step="0.01">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.ftse_100_start') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.ftse_100_start_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.ftse_100_end') ? 'invalid' : '' }}">
        <label class="form-label" for="ftse_100_end">{{ trans('cruds.investmentPlan.fields.ftse_100_end') }}</label>
        <input class="form-control" type="number" name="ftse_100_end" id="ftse_100_end" wire:model.defer="investmentPlan.ftse_100_end" step="0.01">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.ftse_100_end') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.ftse_100_end_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.snp_500_start') ? 'invalid' : '' }}">
        <label class="form-label" for="snp_500_start">{{ trans('cruds.investmentPlan.fields.snp_500_start') }}</label>
        <input class="form-control" type="number" name="snp_500_start" id="snp_500_start" wire:model.defer="investmentPlan.snp_500_start" step="0.01">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.snp_500_start') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.snp_500_start_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.snp_500_end') ? 'invalid' : '' }}">
        <label class="form-label" for="snp_500_end">{{ trans('cruds.investmentPlan.fields.snp_500_end') }}</label>
        <input class="form-control" type="number" name="snp_500_end" id="snp_500_end" wire:model.defer="investmentPlan.snp_500_end" step="0.01">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.snp_500_end') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.snp_500_end_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.stoxx_50_start') ? 'invalid' : '' }}">
        <label class="form-label" for="stoxx_50_start">{{ trans('cruds.investmentPlan.fields.stoxx_50_start') }}</label>
        <input class="form-control" type="number" name="stoxx_50_start" id="stoxx_50_start" wire:model.defer="investmentPlan.stoxx_50_start" step="0.01">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.stoxx_50_start') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.stoxx_50_start_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.stoxx_50_end') ? 'invalid' : '' }}">
        <label class="form-label" for="stoxx_50_end">{{ trans('cruds.investmentPlan.fields.stoxx_50_end') }}</label>
        <input class="form-control" type="number" name="stoxx_50_end" id="stoxx_50_end" wire:model.defer="investmentPlan.stoxx_50_end" step="0.01">
        <div class="validation-message">
            {{ $errors->first('investmentPlan.stoxx_50_end') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.stoxx_50_end_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('investmentPlan.notes') ? 'invalid' : '' }}">
        <label class="form-label" for="notes">{{ trans('cruds.investmentPlan.fields.notes') }}</label>
        <textarea class="form-control" name="notes" id="notes" wire:model.defer="investmentPlan.notes" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('investmentPlan.notes') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentPlan.fields.notes_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.investment-plans.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>