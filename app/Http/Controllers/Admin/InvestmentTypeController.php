<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestmentType;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InvestmentTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('investment_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.investment-type.index');
    }

    public function create()
    {
        abort_if(Gate::denies('investment_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.investment-type.create');
    }

    public function edit(InvestmentType $investmentType)
    {
        abort_if(Gate::denies('investment_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.investment-type.edit', compact('investmentType'));
    }

    public function show(InvestmentType $investmentType)
    {
        abort_if(Gate::denies('investment_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.investment-type.show', compact('investmentType'));
    }
}
