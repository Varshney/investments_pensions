<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('investmentType.type_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="type_name">{{ trans('cruds.investmentType.fields.type_name') }}</label>
        <input class="form-control" type="text" name="type_name" id="type_name" required wire:model.defer="investmentType.type_name">
        <div class="validation-message">
            {{ $errors->first('investmentType.type_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.investmentType.fields.type_name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.investment-types.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>