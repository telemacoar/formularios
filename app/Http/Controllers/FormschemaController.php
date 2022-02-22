<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormschemaStoreRequest;
use App\Http\Requests\FormschemaUpdateRequest;
use App\Http\Resources\FormschemaCollection;
use App\Http\Resources\FormschemaResource;
use App\Models\Formschema;
use Illuminate\Http\Request;

class FormschemaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormschemaCollection
     */
    public function index(Request $request)
    {
        $formschemas = Formschema::all();

        return new FormschemaCollection($formschemas);
    }

    /**
     * @param \App\Http\Requests\FormschemaStoreRequest $request
     * @return \App\Http\Resources\FormschemaResource
     */
    public function store(FormschemaStoreRequest $request)
    {
        $formschema = Formschema::create($request->validated());

        return new FormschemaResource($formschema);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formschema $formschema
     * @return \App\Http\Resources\FormschemaResource
     */
    public function show(Request $request, Formschema $formschema)
    {
        $id = $formschema->id;
        //Cargo los modelos
        $localFormschema = Formschema::with([
            'formsections',
            'formsections.formgroups',
            'formsections.formgroups.formfields',
            'formsections.formgroups.formfields.formfieldtype',
            'formsections.formgroups.formfields.formfieldoptions',
            'formsections.formgroups.formfields.formfieldoptions.formfieldoptionitems',
            'formsections.formgroups.formfields.formfieldevents'
        ])->find($id);

        return new FormschemaResource($localFormschema);
    }

    /**
     * @param \App\Http\Requests\FormschemaUpdateRequest $request
     * @param \App\Models\Formschema $formschema
     * @return \App\Http\Resources\FormschemaResource
     */
    public function update(FormschemaUpdateRequest $request, Formschema $formschema)
    {
        $formschema->update($request->validated());

        return new FormschemaResource($formschema);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formschema $formschema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formschema $formschema)
    {
        $formschema->delete();

        return response()->noContent();
    }
}
