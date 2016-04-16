<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Attendance extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'attendance';
    protected $fillable =	[
    						'time_in',
    						'time_out',
    						'date'
    						];


    public function retrieveAttendance()
    {
    	$data = DB::table('attendance')
    			->select('attendance.*')
                ->get();
    			//->paginate(5);

    	return $data;
    }
    // public function att_Summation()
    // {
    //     $data = DB::table('attendance')
    //             ->sum('hours')
                
    //     return $data;
    // }

}
