<?php

namespace App\Http\Livewire\PensionPlan;

use App\Models\ContactCompany;
use App\Models\PensionPlan;
use Livewire\Component;

class Create extends Component
{
    public PensionPlan $pensionPlan;

    public array $listsForFields = [];

    public function mount(PensionPlan $pensionPlan)
    {
        $this->pensionPlan = $pensionPlan;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.pension-plan.create');
    }

    public function submit()
    {
        $this->validate();

        $this->pensionPlan->save();

        return redirect()->route('admin.pension-plans.index');
    }

    protected function rules(): array
    {
        return [
            'pensionPlan.company_id' => [
                'integer',
                'exists:contact_companies,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['company'] = ContactCompany::pluck('company_name', 'id')->toArray();
    }
}
