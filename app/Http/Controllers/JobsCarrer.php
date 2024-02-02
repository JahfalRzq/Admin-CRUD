<?php

namespace App\Http\Controllers;

use App\Models\JobCareer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class JobsCarrer extends Controller
{


    //admin job tables
    public function jobs(Request $request){
        // $pagination = 5;
        $search = $request->search;
        $job_carrers = JobCareer::where('job_tittle', 'like', '%' . $search . '%')
            ->orWhere('job_type', 'like', '%' . $search . '%')
            ->latest()->paginate(3)->withQueryString()->onEachSide(1);
        $formOption['action'] = '/store-jobpost';
        $formOption['method'] = null;

        return view('admin.job-superadmin',compact('job_carrers','formOption','search'));
    }
    // public function search(Request $request){

    //     $get_name = $request->search_name ;

    // }


    public function jobpost_edit(Request $request,$id){
        $job_carrers = JobCareer::findOrFail($id);
        $formOption['action'] =" /jobpost/$id/update";
        $formOption['method'] = 'PUT';

        return view('admin.jobpost-superadmin',compact('job_carrers','formOption'));



    }

    public function jobpost_update(Request $request,$id){
        $job_update = JobCareer::findOrFail($id);
        $job_update->job_tittle          = request('job_tittle');
        $job_update->division            = request('division');
        $job_update->location            = request('location');
        $job_update->start_date          = request('start_date');
        $job_update->end_date            = request('end_date');
        $job_update->job_type            = request('job_type');
        $job_update->job_system          = request('job_system');
        $job_update->role_description    = request('role_description');
        $job_update->jobdesk_description = request('jobdesk_description');
        $job_update->role_environment    = request('role_environment');
        $job_update->team_description    = request('team_description');
        $job_update->save();

        return redirect('/jobs')->with('Jobs Carrer','succes edited');
        ;

    }



    //edit modal for update data on jobs
    // public function update_jobs(Request $request,$id){

    //     $jobs_carrer = JobCareer::findOrFail($id);
    //     // dd($jobs_carrer);
    //     $jobs_carrer->job_tittle = $request->input('job_tittle');
    //     $jobs_carrer->division              = $request->input('division');
    //     $jobs_carrer->location              = $request->input('location');
    //     $jobs_carrer->job_type              = $request->input('job_type');
    //     $jobs_carrer->job_system            = $request->input('job_system');
    //     $jobs_carrer->role_description      = $request->input('role_description');
    //     $jobs_carrer->jobdesk_description   = $request->input('jobdesk_description');
    //     $jobs_carrer->role_environment      = $request->input('role_environment');
    //     $jobs_carrer->team_description      = $request->input('team_description');

    //     $jobs_carrer->update();

    //     return redirect('/job')->with('Jobs Carrer','succes edited');



    // }

    // delete action jobs
    public function delete_jobs($id){
        // dd($id);
        // $jobs_carrer = JobCareer::findOrFail($id);
        $jobs_carrer = JobCareer::where('id',$id)->first();

        if($jobs_carrer != null){
            $jobs_carrer->delete();
            return redirect()->route('jobs')->with('Job', 'Success Deleted!!');
        }
        return redirect()->route('jobs')->with('Job', 'Wrong ID!!');
    }


    //view for job post in admin
    public function jobpost(){
        $job_carrers = null;
        // dd($job_carrers);
        $formOption['action'] = '/store-jobpost';
        $formOption['method'] = null;

        return view('admin.jobpost-superadmin',compact('job_carrers','formOption'));
    }

    //Form store on job post view
    public function store_jobpost(Request $request){

            // dd($request->all());
        $Validator = Validator::make($request->all(),[

            'job_tittle'            => 'required',
            'division'              => 'required',
            'location'              => 'required',
            'start_date'            => 'required',
            'end_date'              => 'required',
            'job_type'              => 'required',
            'job_system'            => 'required',
            'role_description'      => 'required',
            'jobdesk_description'   => 'required',
            'role_environment'      => 'required',
            'team_description'      => 'required'


        ]);

        $jobpost_carrer = new JobCareer();
        $jobpost_carrer->job_tittle          = $request->job_tittle;
        $jobpost_carrer->division            = $request->division;
        $jobpost_carrer->location            = $request->location;
        $jobpost_carrer->start_date          = $request->start_date;
        $jobpost_carrer->end_date            = $request->end_date;
        $jobpost_carrer->job_type            = $request->job_type;
        $jobpost_carrer->job_system          = $request->job_system;
        $jobpost_carrer->role_description    = $request->role_description;
        $jobpost_carrer->jobdesk_description = $request->jobdesk_description;
        $jobpost_carrer->role_environment    = $request->role_environment;
        $jobpost_carrer->team_description    = $request->team_description;


        $jobpost_carrer->save();
        // dd($jobpost_carrer);
        return redirect('/jobs')->with('succes','Job Added');

    }

    //view job onlanding page
    public function view_job(){

        $jobs_view = JobCareer::all();
        return view('pages.view-job',compact('jobs_view'));

    }

    public function detail_job($id){

        $jobs = JobCareer::findOrFail($id);
        // $jobs = JobCareer::first()->get();
        return view('pages.job-detail', compact('jobs')
    );
    }

}
