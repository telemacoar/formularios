<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormfieldoptionStoreRequest;
use App\Http\Requests\FormfieldoptionUpdateRequest;
use App\Http\Resources\FormfieldoptionCollection;
use App\Http\Resources\FormfieldoptionResource;
use App\Models\Formfieldoption;
use Illuminate\Http\Request;

class FormfieldoptionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormfieldoptionCollection
     */
    public function index(Request $request)
    {
        $formfieldoptions = Formfieldoption::all();

        return new FormfieldoptionCollection($formfieldoptions);
    }

    /**
     * @param \App\Http\Requests\FormfieldoptionStoreRequest $request
     * @return \App\Http\Resources\FormfieldoptionResource
     */
    public function store(FormfieldoptionStoreRequest $request)
    {
        $formfieldoption = Formfieldoption::create($request->validated());

        return new FormfieldoptionResource($formfieldoption);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldoption $formfieldoption
     * @return \App\Http\Resources\FormfieldoptionResource
     */
    public function show(Request $request, Formfieldoption $formfieldoption)
    {
        return new FormfieldoptionResource($formfieldoption);
    }

    /**
     * @param \App\Http\Requests\FormfieldoptionUpdateRequest $request
     * @param \App\Models\Formfieldoption $formfieldoption
     * @return \App\Http\Resources\FormfieldoptionResource
     */
    public function update(FormfieldoptionUpdateRequest $request, Formfieldoption $formfieldoption)
    {
        $formfieldoption->update($request->validated());

        return new FormfieldoptionResource($formfieldoption);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldoption $formfieldoption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formfieldoption $formfieldoption)
    {
        $formfieldoption->delete();

        return response()->noContent();
    }
}
