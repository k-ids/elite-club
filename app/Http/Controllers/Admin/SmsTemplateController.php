<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SmsTemplate;
use App\Http\Requests\SmsTemplate\SmsTemplateCreateRequest;
use App\Http\Requests\SmsTemplate\SmsTemplateUpdateRequest;

class SmsTemplateController extends Controller
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
        $this->model_name = trans('app.model.sms_template');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates =  SmsTemplate::all();
        return view( 'admin.sms-templates.index' , compact('templates'));
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

        return view('admin.sms-templates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SmsTemplateCreateRequest $request)
    {
        if(config('app.dev_mode') == false) 
            return back()->with('warning', trans('messages.dev_restriction'));

         $template = SmsTemplate::create($request->all());

         if( ! $template)
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
     * @param  int  $smsTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(SmsTemplate $smsTemplate)
    {
        if(config('app.dev_mode') == false) 
            return back()->with('warning', trans('messages.dev_restriction'));
  
        return view( 'admin.sms-templates.edit', compact('smsTemplate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SmsTemplateUpdateRequest $request, SmsTemplate $smsTemplate)
    {
        if(config('app.dev_mode') == false) 
            return back()->with('warning', trans('messages.dev_restriction'));
       
        if( $smsTemplate->update($request->all()) )
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
