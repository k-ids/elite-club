<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArtisanCommand;
use Artisan;

class DeveloperConsoleController extends Controller
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
        $this->model_name = trans('app.model.artisan');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commands = ArtisanCommand::all();
        return view('admin.developer-console.index', compact('commands'));
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

        return view( 'admin.developer-console.create');
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

         $template = ArtisanCommand::create($request->all());

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
    public function show(ArtisanCommand $developer_console)
    {
        Artisan::call($developer_console->command);
        $status =  Artisan::output();
        if( ! $status)
            return back()->with('error', trans('messages.failed'));

        return back()->with('success', $status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtisanCommand $developer_console)
    {
        return view('admin.developer-console.edit', compact('developer_console'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtisanCommand $developer_console)
    {
        if(config('app.dev_mode') == false) 
            return back()->with('warning', trans('messages.dev_restriction'));
       
        if( $developer_console->update($request->all()) )
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
