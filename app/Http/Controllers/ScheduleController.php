<?php

namespace App\Http\Controllers;

use App\Models\scheddule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function getSlots(Request $request)
    {
        $date = $request->query('date');

        // Fetch the slot count for the selected date
        $slots = scheddule::where('date', $date)->count('id');

        return response()->json(['slots' => $slots]);
    }

    public function submitbook(Request $request)
    {
        // $request->validate([
        //     'code' => 'required',
        // ]);

        $record = new scheddule();

        $keys = [
            'name',
            'email',
            'number',
            'date',
            'time',
        ];

        foreach ($keys as $key) {
            if ($key == " ") {
            } else {
                $record->$key = $request->$key;
            }
        }

        $record->save();

        return response(['msg' => "Added"]);
    }
}
