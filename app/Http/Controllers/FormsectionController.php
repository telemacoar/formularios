<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormsectionStoreRequest;
use App\Http\Requests\FormsectionUpdateRequest;
use App\Http\Resources\FormsectionCollection;
use App\Http\Resources\FormsectionResource;
use App\Models\Formsection;
use Illuminate\Http\Request;

class FormsectionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\FormsectionCollection
     */
    public function index(Request $request)
    {
        $formsections = Formsection::all();

        return new FormsectionCollection($formsections);
    }

    /**
     * @param \App\Http\Requests\FormsectionStoreRequest $request
     * @return \App\Http\Resources\FormsectionResource
     */
    public function store(FormsectionStoreRequest $request)
    {
        $formsection = Formsection::create($request->validated());

        return new FormsectionResource($formsection);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formsection $formsection
     * @return \App\Http\Resources\FormsectionResource
     */
    public function show(Request $request, Formsection $formsection)
    {
        return new FormsectionResource($formsection);
    }

    /**
     * @param \App\Http\Requests\FormsectionUpdateRequest $request
     * @param \App\Models\Formsection $formsection
     * @return \App\Http\Resources\FormsectionResource
     */
    public function update(FormsectionUpdateRequest $request, Formsection $formsection)
    {
        $formsection->update($request->validated());

        return new FormsectionResource($formsection);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Formsection $formsection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Formsection $formsection)
    {
        $formsection->delete();

        return response()->noContent();
    }
}
