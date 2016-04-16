<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addAttendanceRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attendance;
use Input;
use DB;
use PDF;
class attendanceController extends Controller
{

    public function __construct() 
    {
        $countAttendance = new Attendance;
        $this->data['count'] = DB::table('attendance')->sum('hrs_rendered');
        //$this->data['count'] = $countAttendance->att_Summation();
    }
	public function index()
	{
		return view('indexpage');
	}
    public function storeattendance(addAttendanceRequest $request)
    {
    	// $new_attendance = new Attendance;
    	// $new_attendance->time_in = $request['time_in'];
    	// $new_attendane->time_out = $request['time_out'];
    	// $new_attendane->date = $request['date'];
    	// $new_attendance->hours = 1;
    	// $new_attendance->save();
            // $table->increments('id');
            // $table->string('emp_id');
            // $table->string('status_id');
            // $table->time('time_in');
            // $table->time('time_out');
            // $table->integer('mins_late');
            // $table->integer('hrs_rendered');
            // $table->text('under_time');
            // $table->string('date');
            // $table->timestamps();

            $new = new Attendance;
            // $new->emp_id = 0;
            // $new->status_id = 1;
            $new->time_in = $request['time_in'];
            // if(1 == 1)
            // {
            //    //save mins late
            // }
            $new->time_out = $request['time_out'];
            // if(1 == 1)
            // {
            //     //save hours rendered
            // }
            //undertimr = rtimeout - timed out;
            
            $new->date = $request['date'];
            $new->hrs_rendered = (((strtotime($request['time_out']) - strtotime($request['time_in']))/60)/60) - 1;
            $new->save();   


    	return redirect('/');

    }
    public function view()
    {
        $attendance = new Attendance;
        $this->data['attendance'] = $attendance->retrieveAttendance();
        return view('record',$this->data);
    }
    public function downloadPDF()
    {
        $report_att = new Attendance;
        $this->data['attendance'] = $report_att->retrieveAttendance();
        $pdf = PDF::loadView('reports',$this->data);
        return $pdf->download('attendance.pdf');
    }
}
