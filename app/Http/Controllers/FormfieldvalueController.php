<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormfieldvalueStoreRequest;
use App\Http\Requests\FormfieldvalueUpdateRequest;
use App\Http\Resources\FormfieldvalueCollection;
use App\Http\Resources\FormfieldvalueResource;
use App\Models\Formfieldvalue;
use Illuminate\Http\Request;

class FormfieldvalueController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormfieldvalueCollection
     */
    public function index(Request $request)
    {
        $formfieldvalues = Formfieldvalue::all();

        return new FormfieldvalueCollection($formfieldvalues);
    }

    /**
     * @param \App\Http\Requests\FormfieldvalueStoreRequest $request
     * @return \App\Http\Resources\FormfieldvalueResource
     */
    public function store(FormfieldvalueStoreRequest $request)
    {
        $formfieldvalue = Formfieldvalue::create($request->validated());

        return new FormfieldvalueResource($formfieldvalue);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldvalue $formfieldvalue
     * @return \App\Http\Resources\FormfieldvalueResource
     */
    public function show(Request $request, Formfieldvalue $formfieldvalue)
    {
        return new FormfieldvalueResource($formfieldvalue);
    }

    /**
     * @param \App\Http\Requests\FormfieldvalueUpdateRequest $request
     * @param \App\Models\Formfieldvalue $formfieldvalue
     * @return \App\Http\Resources\FormfieldvalueResource
     */
    public function update(FormfieldvalueUpdateRequest $request, Formfieldvalue $formfieldvalue)
    {
        $formfieldvalue->update($request->validated());

        return new FormfieldvalueResource($formfieldvalue);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldvalue $formfieldvalue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formfieldvalue $formfieldvalue)
    {
        $formfieldvalue->delete();

        return response()->noContent();
    }
}
