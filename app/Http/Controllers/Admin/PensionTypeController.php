<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PensionType;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PensionTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pension_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pension-type.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pension_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pension-type.create');
    }

    public function edit(PensionType $pensionType)
    {
        abort_if(Gate::denies('pension_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pension-type.edit', compact('pensionType'));
    }

    public function show(PensionType $pensionType)
    {
        abort_if(Gate::denies('pension_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pensionType->load('pensionType');

        return view('admin.pension-type.show', compact('pensionType'));
    }
}
