<?php

namespace App\Http\Livewire\InvestmentType;

use App\Models\InvestmentType;
use Livewire\Component;

class Edit extends Component
{
    public InvestmentType $investmentType;

    public function mount(InvestmentType $investmentType)
    {
        $this->investmentType = $investmentType;
    }

    public function render()
    {
        return view('livewire.investment-type.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->investmentType->save();

        return redirect()->route('admin.investment-types.index');
    }

    protected function rules(): array
    {
        return [
            'investmentType.type_name' => [
                'string',
                'required',
                'unique:investment_types,type_name,' . $this->investmentType->id,
            ],
        ];
    }
}
