<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormvalueStoreRequest;
use App\Http\Requests\FormvalueUpdateRequest;
use App\Http\Resources\FormvalueCollection;
use App\Http\Resources\FormvalueResource;
use App\Http\Resources\FormschemaResource;
use App\Models\Formvalue;
use App\Models\Formschema;
use Illuminate\Http\Request;

class FormvalueController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormvalueCollection
     */
    public function index(Request $request)
    {
        $formvalues = Formvalue::with('formschema')->get();

        return new FormvalueCollection($formvalues);
    }

    /**
     * @param \App\Http\Requests\FormvalueStoreRequest $request
     * @return \App\Http\Resources\FormvalueResource
     */
    public function store(FormvalueStoreRequest $request)
    {
        $formvalue = Formvalue::create($request->validated());

        // acepto los datos head and child
        $formvalue->formfieldvalues()->createMany($request->formfieldvalues);

        return new FormvalueResource($formvalue);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formvalue $formvalue
     * @return \App\Http\Resources\FormvalueResource
     */
    public function show(Request $request, Formvalue $formvalue)
    {
        $id = $formvalue->id;
        //Cargo los modelos
        $localFormvalue = Formvalue::with(['formfieldvalues', 'formschema'])->find($id);

        $id = $formvalue->formschema_id;
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




        return new FormvalueResource($localFormvalue);
    }

    /**
     * @param \App\Http\Requests\FormvalueUpdateRequest $request
     * @param \App\Models\Formvalue $formvalue
     * @return \App\Http\Resources\FormvalueResource
     */
    public function update(FormvalueUpdateRequest $request, Formvalue $formvalue)
    {
        $formvalue->update($request->validated());

        return new FormvalueResource($formvalue);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formvalue $formvalue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formvalue $formvalue)
    {
        $formvalue->delete();

        return response()->noContent();
    }
}
