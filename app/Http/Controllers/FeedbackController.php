<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'name' =>'required|max:30|min:3|regex:/^[a-z A-Z]+$/u',
            'email' => 'required',
            'phone' => 'required|max:15|min:8|',
            'message' => 'required',
          ], [
            'name.required' => 'Name must be required !',
            'name.max' => 'Name must be Maximum 30 charcters !',
            'name.min' => 'Name must be Maximum 3 charcters !',
            'name.regex' => 'Name must be letter !',

            'email.required' => 'Name must be required !',
            'phone.required' => 'Name must be required !',
            'phone.max' => 'Phone number must be Maximum 20 charcters !',
            'phone.min' => 'Phone number must be Maximum 3 charcters !',
            'message.required' => 'Message must be required !',
          ]);

            $model = new Feedback;
            $model->name = $request->name;
            $model->email = $request->email;
            $model->phone = $request->phone;
            $model->message = $request->message;
            $model->save();
            return redirect()->back()->with('status', 'You Successfully Send Message.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
