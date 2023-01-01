<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackNewController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function Index(Request $request)
    {
        return view('mytemp.pages.feedbacks', ['data' => $this->getAllFeedbacks($request)]);
    }
    public function feedbackForm()
    {
        return view('mytemp.pages.feedback-form');
    }
    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->message = $request->message;
        $feedback->save();
        var_dump($feedback);

        return redirect('feedbackform')->with('info', 'Отзыв добавлен');
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
