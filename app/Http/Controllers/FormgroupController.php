<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormgroupStoreRequest;
use App\Http\Requests\FormgroupUpdateRequest;
use App\Http\Resources\FormgroupCollection;
use App\Http\Resources\FormgroupResource;
use App\Models\Formgroup;
use Illuminate\Http\Request;

class FormgroupController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormgroupCollection
     */
    public function index(Request $request)
    {
        $formgroups = Formgroup::all();

        return new FormgroupCollection($formgroups);
    }

    /**
     * @param \App\Http\Requests\FormgroupStoreRequest $request
     * @return \App\Http\Resources\FormgroupResource
     */
    public function store(FormgroupStoreRequest $request)
    {
        $formgroup = Formgroup::create($request->validated());

        return new FormgroupResource($formgroup);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formgroup $formgroup
     * @return \App\Http\Resources\FormgroupResource
     */
    public function show(Request $request, Formgroup $formgroup)
    {
        return new FormgroupResource($formgroup);
    }

    /**
     * @param \App\Http\Requests\FormgroupUpdateRequest $request
     * @param \App\Models\Formgroup $formgroup
     * @return \App\Http\Resources\FormgroupResource
     */
    public function update(FormgroupUpdateRequest $request, Formgroup $formgroup)
    {
        $formgroup->update($request->validated());

        return new FormgroupResource($formgroup);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formgroup $formgroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formgroup $formgroup)
    {
        $formgroup->delete();

        return response()->noContent();
    }
}
