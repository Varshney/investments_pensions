<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('pensionPlan.company_id') ? 'invalid' : '' }}">
        <label class="form-label" for="company">{{ trans('cruds.pensionPlan.fields.company') }}</label>
        <x-select-list class="form-control" id="company" name="company" :options="$this->listsForFields['company']" wire:model="pensionPlan.company_id" />
        <div class="validation-message">
            {{ $errors->first('pensionPlan.company_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pensionPlan.fields.company_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.pension-plans.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>