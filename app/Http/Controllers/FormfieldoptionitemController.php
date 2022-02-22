<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormfieldoptionitemStoreRequest;
use App\Http\Requests\FormfieldoptionitemUpdateRequest;
use App\Http\Resources\FormfieldoptionitemCollection;
use App\Http\Resources\FormfieldoptionitemResource;
use App\Models\Formfieldoptionitem;
use Illuminate\Http\Request;

class FormfieldoptionitemController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormfieldoptionitemCollection
     */
    public function index(Request $request)
    {
        $formfieldoptionitems = Formfieldoptionitem::all();

        return new FormfieldoptionitemCollection($formfieldoptionitems);
    }

    /**
     * @param \App\Http\Requests\FormfieldoptionitemStoreRequest $request
     * @return \App\Http\Resources\FormfieldoptionitemResource
     */
    public function store(FormfieldoptionitemStoreRequest $request)
    {
        $formfieldoptionitem = Formfieldoptionitem::create($request->validated());

        return new FormfieldoptionitemResource($formfieldoptionitem);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldoptionitem $formfieldoptionitem
     * @return \App\Http\Resources\FormfieldoptionitemResource
     */
    public function show(Request $request, Formfieldoptionitem $formfieldoptionitem)
    {
        return new FormfieldoptionitemResource($formfieldoptionitem);
    }

    /**
     * @param \App\Http\Requests\FormfieldoptionitemUpdateRequest $request
     * @param \App\Models\Formfieldoptionitem $formfieldoptionitem
     * @return \App\Http\Resources\FormfieldoptionitemResource
     */
    public function update(FormfieldoptionitemUpdateRequest $request, Formfieldoptionitem $formfieldoptionitem)
    {
        $formfieldoptionitem->update($request->validated());

        return new FormfieldoptionitemResource($formfieldoptionitem);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldoptionitem $formfieldoptionitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formfieldoptionitem $formfieldoptionitem)
    {
        $formfieldoptionitem->delete();

        return response()->noContent();
    }
}
