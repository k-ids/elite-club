<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaptchaSetting;

class GoogleCaptchaController extends Controller
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
        $this->model_name = trans('app.model.g_captcha');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $captchaSetting = CaptchaSetting::findorfail(1);
        return view('admin.third-party.index', compact('captchaSetting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = CaptchaSetting::create($request->all());

        if( ! $setting)
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
    public function edit(CaptchaSetting $captchaSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $captchaSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $_array = array(
            'site_key'      => $request->site_key,
            'secret_key'    => $request->secret_key,
            'show_on_front' => $request->show_on_front
        );

        if( CaptchaSetting::where('id', $request->id)->update($_array) )
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
