<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestmentPlan extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'investment_plans';

    protected $casts = [
        'income_based' => 'boolean',
        'compounded'   => 'boolean',
    ];

    public const SECOND_PERCENTAGE_START_SELECT = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'maturity_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const CURRENCY_SELECT = [
        'GBP' => '£ - British Sterling',
        'EUR' => '€ - Euros',
        'USD' => '$ - United States Dollars',
    ];

    public $orderable = [
        'id',
        'plan_name',
        'company.company_name',
        'investment_type.type_name',
        'invested',
        'start_date',
        'maturity_date',
    ];

    public $filterable = [
        'id',
        'plan_name',
        'company.company_name',
        'investment_type.type_name',
        'invested',
        'start_date',
        'maturity_date',
    ];

    public const PLAN_LENGTH_SELECT = [
        '1'  => '1',
        '2'  => '2',
        '3'  => '3',
        '4'  => '4',
        '5'  => '5',
        '6'  => '6',
        '7'  => '7',
        '8'  => '8',
        '9'  => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
    ];

    protected $fillable = [
        'plan_name',
        'company_id',
        'investment_type_id',
        'currency',
        'invested',
        'plan_length',
        'percentage',
        'second_percentage',
        'second_percentage_start',
        'income_based',
        'compounded',
        'start_date',
        'end_date',
        'maturity_date',
        'moved_from_plan_id',
        'moved_from_plan_two_id',
        'ftse_100_start',
        'ftse_100_end',
        'snp_500_start',
        'snp_500_end',
        'stoxx_50_start',
        'stoxx_50_end',
        'kick_out_year_one',
        'kick_out_year_two',
        'kick_out_year_three',
        'kick_out_year_four',
        'kick_out_year_five',
        'kick_out_year_six',
        'kick_out_year_seven',
        'notes',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function company()
    {
        return $this->belongsTo(ContactCompany::class);
    }

    public function investmentType()
    {
        return $this->belongsTo(InvestmentType::class);
    }

    public function getCurrencyLabelAttribute($value)
    {
        return static::CURRENCY_SELECT[$this->currency] ?? null;
    }

    public function getPlanLengthLabelAttribute($value)
    {
        return static::PLAN_LENGTH_SELECT[$this->plan_length] ?? null;
    }

    public function getSecondPercentageStartLabelAttribute($value)
    {
        return static::SECOND_PERCENTAGE_START_SELECT[$this->second_percentage_start] ?? null;
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getMaturityDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setMaturityDateAttribute($value)
    {
        $this->attributes['maturity_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function movedFromPlan()
    {
        return $this->belongsTo(self::class);
    }

    public function movedFromPlanTwo()
    {
        return $this->belongsTo(self::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }
}
