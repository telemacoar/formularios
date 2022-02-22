<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormfieldeventStoreRequest;
use App\Http\Requests\FormfieldeventUpdateRequest;
use App\Http\Resources\FormfieldeventCollection;
use App\Http\Resources\FormfieldeventResource;
use App\Models\Formfieldevent;
use Illuminate\Http\Request;

class FormfieldeventController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormfieldeventCollection
     */
    public function index(Request $request)
    {
        $formfieldevents = Formfieldevent::all();

        return new FormfieldeventCollection($formfieldevents);
    }

    /**
     * @param \App\Http\Requests\FormfieldeventStoreRequest $request
     * @return \App\Http\Resources\FormfieldeventResource
     */
    public function store(FormfieldeventStoreRequest $request)
    {
        $formfieldevent = Formfieldevent::create($request->validated());

        return new FormfieldeventResource($formfieldevent);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldevent $formfieldevent
     * @return \App\Http\Resources\FormfieldeventResource
     */
    public function show(Request $request, Formfieldevent $formfieldevent)
    {
        return new FormfieldeventResource($formfieldevent);
    }

    /**
     * @param \App\Http\Requests\FormfieldeventUpdateRequest $request
     * @param \App\Models\Formfieldevent $formfieldevent
     * @return \App\Http\Resources\FormfieldeventResource
     */
    public function update(FormfieldeventUpdateRequest $request, Formfieldevent $formfieldevent)
    {
        $formfieldevent->update($request->validated());

        return new FormfieldeventResource($formfieldevent);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldevent $formfieldevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formfieldevent $formfieldevent)
    {
        $formfieldevent->delete();

        return response()->noContent();
    }
}
