<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('pensionType.type_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="type_name">{{ trans('cruds.pensionType.fields.type_name') }}</label>
        <input class="form-control" type="text" name="type_name" id="type_name" required wire:model.defer="pensionType.type_name">
        <div class="validation-message">
            {{ $errors->first('pensionType.type_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pensionType.fields.type_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pensionType.pension_type_id') ? 'invalid' : '' }}">
        <label class="form-label" for="pension_type">{{ trans('cruds.pensionType.fields.pension_type') }}</label>
        <x-select-list class="form-control" id="pension_type" name="pension_type" :options="$this->listsForFields['pension_type']" wire:model="pensionType.pension_type_id" />
        <div class="validation-message">
            {{ $errors->first('pensionType.pension_type_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pensionType.fields.pension_type_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.pension-types.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>