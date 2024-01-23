<?php

namespace App\Http\Livewire\InvestmentPlan;

use App\Models\ContactCompany;
use App\Models\InvestmentPlan;
use App\Models\InvestmentType;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public InvestmentPlan $investmentPlan;

    public function mount(InvestmentPlan $investmentPlan)
    {
        $this->investmentPlan                    = $investmentPlan;
        $this->investmentPlan->currency          = 'GBP';
        $this->investmentPlan->invested          = '0';
        $this->investmentPlan->plan_length       = '5';
        $this->investmentPlan->percentage        = '0';
        $this->investmentPlan->second_percentage = '0';
        $this->investmentPlan->income_based      = false;
        $this->investmentPlan->compounded        = false;
        $this->investmentPlan->ftse_100_start    = '0';
        $this->investmentPlan->ftse_100_end      = '0';
        $this->investmentPlan->snp_500_start     = '0';
        $this->investmentPlan->snp_500_end       = '0';
        $this->investmentPlan->stoxx_50_start    = '0';
        $this->investmentPlan->stoxx_50_end      = '0';
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.investment-plan.create');
    }

    public function submit()
    {
        $this->validate();

        $this->investmentPlan->save();

        return redirect()->route('admin.investment-plans.index');
    }

    protected function rules(): array
    {
        return [
            'investmentPlan.plan_name' => [
                'string',
                'required',
            ],
            'investmentPlan.company_id' => [
                'integer',
                'exists:contact_companies,id',
                'required',
            ],
            'investmentPlan.investment_type_id' => [
                'integer',
                'exists:investment_types,id',
                'required',
            ],
            'investmentPlan.currency' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['currency'])),
            ],
            'investmentPlan.invested' => [
                'numeric',
                'required',
            ],
            'investmentPlan.plan_length' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['plan_length'])),
            ],
            'investmentPlan.percentage' => [
                'numeric',
                'min:0',
                'max:15',
                'required',
            ],
            'investmentPlan.second_percentage' => [
                'numeric',
                'min:0',
                'max:15',
                'nullable',
            ],
            'investmentPlan.second_percentage_start' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['second_percentage_start'])),
            ],
            'investmentPlan.income_based' => [
                'boolean',
            ],
            'investmentPlan.compounded' => [
                'boolean',
            ],
            'investmentPlan.start_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'investmentPlan.end_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'investmentPlan.maturity_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'investmentPlan.moved_from_plan_id' => [
                'integer',
                'exists:investment_plans,id',
                'nullable',
            ],
            'investmentPlan.ftse_100_start' => [
                'numeric',
                'min:0',
                'nullable',
            ],
            'investmentPlan.ftse_100_end' => [
                'numeric',
                'min:0',
                'nullable',
            ],
            'investmentPlan.snp_500_start' => [
                'numeric',
                'min:0',
                'nullable',
            ],
            'investmentPlan.snp_500_end' => [
                'numeric',
                'min:0',
                'nullable',
            ],
            'investmentPlan.stoxx_50_start' => [
                'numeric',
                'min:0',
                'nullable',
            ],
            'investmentPlan.stoxx_50_end' => [
                'numeric',
                'min:0',
                'nullable',
            ],
            'investmentPlan.notes' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['company']                 = ContactCompany::pluck('company_name', 'id')->toArray();
        $this->listsForFields['investment_type']         = InvestmentType::pluck('type_name', 'id')->toArray();
        $this->listsForFields['currency']                = $this->investmentPlan::CURRENCY_SELECT;
        $this->listsForFields['plan_length']             = $this->investmentPlan::PLAN_LENGTH_SELECT;
        $this->listsForFields['second_percentage_start'] = $this->investmentPlan::SECOND_PERCENTAGE_START_SELECT;
        $this->listsForFields['moved_from_plan']         = InvestmentPlan::pluck('plan_name', 'id')->toArray();
    }
}
