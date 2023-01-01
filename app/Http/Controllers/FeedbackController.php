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
    public function index(Request $request)
    {
        return view('mytemp.pages.feedbacks', ['data' => $this->getAllFeedbacks($request)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('components.forms.feedback-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->message = $request->message;
        $feedback->save();

        return redirect('feedback.create')->with('info', 'Отзыв добавлен');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    private function getAllFeedbacks($request)
    {
        $feedbacks = Feedback::all();
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'old':
                    $feedbacks = Feedback::orderBy('id', 'asc');
                    break;
                case 'new':
                    $feedbacks = Feedback::orderBy('id', 'desc');
                    break;
                case 'nameBca':
                    $feedbacks = Feedback::orderBy('name', 'desc');
                    break;
                case 'nameAbc':
                    $feedbacks = Feedback::orderBy('name', 'asc');
                    break;
                default:
                    $feedbacks = Feedback::all();
                    break;
            }
            $feedbacks = $feedbacks->get();
        }
        return $feedbacks;
    }
}
