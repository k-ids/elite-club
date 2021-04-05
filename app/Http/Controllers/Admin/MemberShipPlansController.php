<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberShipPlan;
use App\Http\Requests\MembershipPlan\MembershipPlanStoreRequest;
use App\Http\Requests\MembershipPlan\MembershipPlanUpdateRequest;

class MemberShipPlansController extends Controller
{   
    private $model_name;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->model_name = trans('app.model.memebershipPlan');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $plans = MemberShipPlan::all();
       
        return view('admin.packages.index', compact('plans') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(config('app.dev_mode') == false) 
            return back()->with('warning', trans('messages.dev_restriction'));

        return view( 'admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(config('app.dev_mode') == false) 
            return back()->with('warning', trans('messages.dev_restriction'));

         $plan = MemberShipPlan::create($request->all());

         if( ! $plan)
            return back()->with('error', trans('messages.failed'));

        return back()->with('success', trans('messages.created', ['model' => $this->model_name]));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberShipPlan $membeship_plan)
    {   
        return view( 'admin.packages.edit', compact('membeship_plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberShipPlan $membeship_plan)
    {
        if(config('app.dev_mode') == false) 
            return back()->with('warning', trans('messages.dev_restriction'));
       
        if( $membeship_plan->update($request->all()) )
            return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));

        return back()->with('error', trans('messages.failed'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
