<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestmentPlan;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InvestmentPlanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('investment_plan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.investment-plan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('investment_plan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.investment-plan.create');
    }

    public function edit(InvestmentPlan $investmentPlan)
    {
        abort_if(Gate::denies('investment_plan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.investment-plan.edit', compact('investmentPlan'));
    }

    public function show(InvestmentPlan $investmentPlan)
    {
        abort_if(Gate::denies('investment_plan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $investmentPlan->load('company', 'investmentType', 'movedFromPlan', 'movedFromPlanTwo');

        return view('admin.investment-plan.show', compact('investmentPlan'));
    }
}
