<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Country;

class CountryController extends Controller
{
    /**
     * Get data countries
     *
     * @return HttpResponse
     */
    public function getDataCountry(Request $request)
    {
        $rules = array(
            // 'role_id' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Parameter not completed !',
            ], 404);
        } else {
            $count = Country::count();
            $getData = Country::orderBy('id', 'asc')->get();
            if ($getData) {
                if (sizeof($getData) == 0) {
                    return response()->json([
                        'error' => 'Data is empty !',
                    ], 404);
                } else {
                    return response()->json([
                        'data' => $getData,
                        'count' => $count], 200);
                }
            } else {
                return response()->json([
                    'error' => 'Data Not Found !',
                ], 404);
            }
        }
    }
}
