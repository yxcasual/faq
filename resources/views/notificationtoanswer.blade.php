@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Notifications


                        <div class="card-body">

                            <div class="card-deck">


                                @forelse($questions as $question)

                                    @forelse($question->answers as $answer)
                                        <div class="d-flex  flex-column align-items-stretch">
                                            <div class="card mb-3 ">
                                                <div class="card-header">
                                                    <small class="text-muted">
                                                        {{ $question->created_at->diffForHumans() }}<br/><a class="btn btn-primary float-right"
                                                                                                            href="{{ route('questions.show', ['id' => $question->id]) }}">
                                                            <i class="fa fa-wrench" aria-hidden="true"></i>
                                                        </a>
                                                    </small>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text ">{{$question->body}}</p>
                                                </div>
                                                <div class="card-body" style="color: #1c7430">
                                                    <p class="ml-4 mb-2" style="color: #005cbf">Answer</p>
                                                    <div class="card">
                                                        <p class="ml-2 mr-2"> {{$answer->body}}</p>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    @empty
                                        none
                                    @endforelse
                                @empty

                                    There are no questions to view,you can create a question.

                                @endforelse
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

