<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Notifications\QuestionAnswered;
use App\Question;
use App\Answer;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $questions = $user->questions()->paginate(6);
        $answers = $user->answers()->paginate(6);
        return view('notificationtoanswer')->with(['answers' => $answers, 'questions' => $questions]);
        //$answer = Answer::find($answer);
        //return view('notificationtoanswer')->with(['answer' => $answer, 'question' => $question]);
    }


    public function notifyshow()
    {
        $user = Auth::user();

        //$questions = $user->questions()->paginate(6);
        //$answers = $user->answers()->paginate(6);
        //return view('notification')->with('questions', $questions);
        //return view('notification');
        return view('notify');
    }
    public function mark()
    {

        $user = Auth::user();
        $user->unreadNotifications->markAsRead();
        //return view('home');
        return redirect()->route('notifys.show')->with('message', 'Marked as Read');
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
}
