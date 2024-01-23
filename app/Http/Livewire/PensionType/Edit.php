<?php

namespace App\Http\Livewire\PensionType;

use App\Models\PensionType;
use Livewire\Component;

class Edit extends Component
{
    public PensionType $pensionType;

    public array $listsForFields = [];

    public function mount(PensionType $pensionType)
    {
        $this->pensionType = $pensionType;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.pension-type.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->pensionType->save();

        return redirect()->route('admin.pension-types.index');
    }

    protected function rules(): array
    {
        return [
            'pensionType.type_name' => [
                'string',
                'required',
                'unique:pension_types,type_name,' . $this->pensionType->id,
            ],
            'pensionType.pension_type_id' => [
                'integer',
                'exists:pension_types,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['pension_type'] = PensionType::pluck('type_name', 'id')->toArray();
    }
}
