<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PensionPlan;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PensionPlanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pension_plan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pension-plan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pension_plan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pension-plan.create');
    }

    public function edit(PensionPlan $pensionPlan)
    {
        abort_if(Gate::denies('pension_plan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pension-plan.edit', compact('pensionPlan'));
    }

    public function show(PensionPlan $pensionPlan)
    {
        abort_if(Gate::denies('pension_plan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pensionPlan->load('company');

        return view('admin.pension-plan.show', compact('pensionPlan'));
    }
}
