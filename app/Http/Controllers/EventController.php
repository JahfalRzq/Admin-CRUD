<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DataTables;


class EventController extends Controller
{

    public function event(Request $request)
    {

        // $events = Event::all(); \
        $search = $request->search;
        $events = Event::where('event', 'like', '%' . $search . '%')
            ->latest()->paginate(3)->withQueryString()->onEachSide(1);
        $total = Event::count();

        return view('admin.event-admin', compact('events','search','total'));
    }
    public function getEvent(Request $request)
    {
        if ($request->ajax()) {
            $data = Event::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div class="flex gap-3 justify-center">
                    <a  (0)" class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"><i
                    class="bx bx-edit text-xl px-3"></i></a>
                     <a  (0)" class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"> <i
                     class="bx bx-trash text-xl px-3"></i></a>
                     </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create_event()
    {

        return view('admin.event-admin');
    }

    public function store_event(Request $request)
    {

        $user = Auth::user();
        $validator = Validator::make($request->all(), [

            'event'         => 'required',
            'icon'          => 'required',
            'detail_event'  => 'required',
            'date'          => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required'

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $event = new Event();
        $event->event        = $request->event;
        // $event->icon         = $icon;
        $event->icon         = $request->icon;
        $event->detail_event = $request->detail_event;
        $event->date         = $request->date;
        $event->start_time   = $request->start_time;
        $event->end_time     = $request->end_time;

        $event->save();
        // dd($event);
        return redirect('/event')->with('succes', 'event created');
    }

    public function edit_event($id)
    {
        $event = Event::find($id);
        return redirect('/event')->with('success', 'event edited');
    }

    public function update_event(Request $request,$id)
    {
        // dd($request->all());
        // $request->validate([

        //     'event'         => 'required',
        //     'icon'          => 'required',
        //     'detail_event'  => 'required',
        //     'date'          => 'required',
        //     'start_time'    => 'required',
        //     'end_time'      => 'required'
        // ]);

        // $event = Event::find($request->id);
        // $event->event = $request->event;
        // $event->save();

        $event = Event::findOrFail($id);

        $event->event          = $request->input('event');
        $event->icon           = $request->input('icon');
        $event->detail_event   = $request->input('detail_event');
        $event->date           = $request->input('date');
        $event->start_time     = $request->input('start_time');
        $event->end_time       = $request->input('end_time');
       return $event;
        // $event->update();


        return redirect('/event')->with('event', 'succes edited');
    }
    public function delete_event($id)
    {
        // $event = Event::find($id);
        // $event = Event::where('id')->first();
        // $event->delete();
        $event = Event::where('id', $id)->first();

        if ($event != null) {
            $event->delete();
            return redirect()->route('event')->with('Event', 'Successfully Deleted!!');
        }
        return redirect()->route('event')->with('Event', 'Wrong Id');
        // return redirect('/event');

    }
}
