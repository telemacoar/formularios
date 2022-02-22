<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormfieldtypeStoreRequest;
use App\Http\Requests\FormfieldtypeUpdateRequest;
use App\Http\Resources\FormfieldtypeCollection;
use App\Http\Resources\FormfieldtypeResource;
use App\Models\Formfieldtype;
use Illuminate\Http\Request;

class FormfieldtypeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormfieldtypeCollection
     */
    public function index(Request $request)
    {
        $formfieldtypes = Formfieldtype::all();

        return new FormfieldtypeCollection($formfieldtypes);
    }

    /**
     * @param \App\Http\Requests\FormfieldtypeStoreRequest $request
     * @return \App\Http\Resources\FormfieldtypeResource
     */
    public function store(FormfieldtypeStoreRequest $request)
    {
        $formfieldtype = Formfieldtype::create($request->validated());

        return new FormfieldtypeResource($formfieldtype);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldtype $formfieldtype
     * @return \App\Http\Resources\FormfieldtypeResource
     */
    public function show(Request $request, Formfieldtype $formfieldtype)
    {
        return new FormfieldtypeResource($formfieldtype);
    }

    /**
     * @param \App\Http\Requests\FormfieldtypeUpdateRequest $request
     * @param \App\Models\Formfieldtype $formfieldtype
     * @return \App\Http\Resources\FormfieldtypeResource
     */
    public function update(FormfieldtypeUpdateRequest $request, Formfieldtype $formfieldtype)
    {
        $formfieldtype->update($request->validated());

        return new FormfieldtypeResource($formfieldtype);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formfieldtype $formfieldtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formfieldtype $formfieldtype)
    {
        $formfieldtype->delete();

        return response()->noContent();
    }
}
