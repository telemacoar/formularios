<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormfieldStoreRequest;
use App\Http\Requests\FormfieldUpdateRequest;
use App\Http\Resources\FormfieldCollection;
use App\Http\Resources\FormfieldResource;
use App\Models\Formfield;
use Illuminate\Http\Request;

class FormfieldController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormfieldCollection
     */
    public function index(Request $request)
    {
        $formfields = Formfield::all();

        return new FormfieldCollection($formfields);
    }

    /**
     * @param \App\Http\Requests\FormfieldStoreRequest $request
     * @return \App\Http\Resources\FormfieldResource
     */
    public function store(FormfieldStoreRequest $request)
    {
        $formfield = Formfield::create($request->validated());

        return new FormfieldResource($formfield);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfield $formfield
     * @return \App\Http\Resources\FormfieldResource
     */
    public function show(Request $request, Formfield $formfield)
    {
        return new FormfieldResource($formfield);
    }

    /**
     * @param \App\Http\Requests\FormfieldUpdateRequest $request
     * @param \App\Models\Formfield $formfield
     * @return \App\Http\Resources\FormfieldResource
     */
    public function update(FormfieldUpdateRequest $request, Formfield $formfield)
    {
        $formfield->update($request->validated());

        return new FormfieldResource($formfield);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfield $formfield
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formfield $formfield)
    {
        $formfield->delete();

        return response()->noContent();
    }
}
