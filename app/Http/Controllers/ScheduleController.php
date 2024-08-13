<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Schedule as Model;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public $ent = 'Schedule';

    public function index() {
        return view('Admin.Schedules');
    }

    public function all() {
        $records = Model::all();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'time'=> 'required',
            'status' => 'required',
        ]);

        $record = new Model();
        $keys = ['name', 'email', 'phone', 'date', 'time', 'status'];
        foreach ($keys as $key) {
            $record->$key = $request->$key;
        }
        $record->save();

        return response(['msg' => "Added $this->ent"]);
    }

    public function edit($id) {
        $record = Model::find($id);

        $data = [
            'record' => $record,
        ];

        return response($data);
    }

    public function upd(Request $request) {
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'time'=> 'required',
            'status' => 'required',
        ]);

        $record = Model::find($request->id);
        $keys = ['name', 'email', 'phone', 'date', 'time', 'status'];
        foreach ($keys as $key) {
            $upd[$key] = $request->$key;
        }
        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id) {
        $record = Model::find($id)->delete();
        return response(['msg' => "Deleted $this->ent"]);
    }

    public function change_status($id, $status) {
        $record = Model::find($id);
        $status = ucfirst($status);
        $status == "Accept" ? $status .= "ed" : $status .= "d";
        $record->update(['status' => $status]);
        return response(['msg'=> "$this->ent $status"]);
    }



    public function getSlots(Request $request)
    {
        $date = $request->query('date');

        // Fetch the slot count for the selected date
        $slots = Model::where('date', $date)->count('id');

        return response()->json(['slots' => $slots]);
    }

    // public function submitbook(Request $request)
    // {
    //     // $request->validate([
    //     //     'code' => 'required',
    //     // ]);

    //     $record = new Model();

    //     $keys = [
    //         'name',
    //         'email',
    //         'number',
    //         'date',
    //         'time',
    //     ];

    //     foreach ($keys as $key) {
    //         if ($key == " ") {
    //         } else {
    //             $record->$key = $request->$key;
    //         }
    //     }

    //     $record->save();

    //     return response(['msg' => "Added"]);
    // }
}
