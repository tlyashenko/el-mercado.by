<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function submit(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:64',
            'phone' => 'required|max:64',
            'comment' => 'string|nullable|max:2000',
        ]);

        $validator->validated();

        if ($validator->passes())
            return response()->json(['success'=>'Added new records.']);

        return response()->json(['error'=> $validator->errors()->all()]);
    }
}
