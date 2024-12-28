<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCalendar;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CalendarController extends Controller
{
    //
    public function index()
    {
        $data = CourseCalendar::latest()->get();
        return view('admin.calendar.index', compact('data'));
    }

    public function create()
    {
        return view('admin.calendar.create');
    }


    public function edit($id)
    {
        $calendar = CourseCalendar::findOrFail($id);
        return view('admin.calendar.edit', compact('calendar'));
    }

    // Destroy method
    public function destroy($id)
    {
        $contact = CourseCalendar::findOrFail($id);
        $contact->delete();

        return redirect()->route('calendar')->with('success', 'Courses deleted successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'day' => 'required',
            'time' => 'required',
            'instructor' => 'required',
            'description' => 'required',
            'course_duration' => 'required',
            'course_link' => 'required',
        ]);

        CourseCalendar::create($request->all());
        return redirect()->route('calendar')->with('success', 'Courses created successfully.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required',
            'day' => 'required',
            'time' => 'required',
            'instructor' => 'required',
            'description' => 'required',
            'course_duration' => 'required',
            'course_link' => 'required',

        ]);

        $contact = CourseCalendar::findOrFail($id);
        $contact->course_name = $request->course_name;
        $contact->day = $request->day;
        $contact->time = $request->time;
        $contact->instructor = $request->instructor;
        $contact->description = $request->description;
        $contact->course_duration = $request->course_duration;
        $contact->course_link = $request->course_link;
        $contact->save();
        return redirect()->route('calendar')->with('success', 'Contact updated successfully.');
    }

    public function getCalendarData(): \Illuminate\Http\JsonResponse
    {
        $data = CourseCalendar::latest()->get();
        return response()->json($data);
    }
}
