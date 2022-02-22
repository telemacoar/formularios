<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formschema;
use App\Models\Formsection;
use App\Models\Formgroup;
use App\Models\Formfield;
use App\Models\Formfieldoption;
use App\Models\Formfieldoptionitem;
use App\Models\Formfieldevent;
use Illuminate\Http\Response;



class FormGeneralController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Formschema $formschema)
    {        
        $sections = Formsection::where('formschema_id', $formschema->id)->get();
        echo "<hr>";
        foreach ($sections as $section) {
            
            $groups =  Formgroup::where('formsection_id', $section->id)->get();
            
            foreach ($groups as $group) {
                $fields =  Formfield::where('formgroup_id', $group->id)->get();
                foreach ($fields as $field) {
                    
                    $options =  Formfieldoption::where('formfield_id', $field->id)->get();
                    foreach ($options as $option) {
                        $optionitems = Formfieldoptionitem::where('formfieldoption_id', $option->id)->get();

                    }
                    $events =  Formfieldevent::where('formfield_id', $field->id)->get();
                }    
            }

        }
        $data = [
            
            "id" => $formschema->id,
            "code" => $formschema->code,
            "name" => $formschema->name,
            "label" => $formschema->label,
            "version" => $formschema->version,
            "sections" => [
                
            ]
        ];
        header("Content-Type: application/json");
        echo  json_encode(['data'=>$data]);
        exit();
    }
}
