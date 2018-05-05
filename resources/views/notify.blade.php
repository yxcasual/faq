@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Notifications
                        <a class="btn btn-primary float-right" href={{route('notifys.mark')}}>
                            MarK All as Read
                        </a>


                        <div class="card-body">

                            <div class="card-deck">
                                <div class="d-flex flex-column">

                                    Unread <br/><br/>


                               @forelse(auth()->user()->unreadNotifications as $notification)
                                        <div class="card mb-3" style="width: 18rem;">
                                            <li class="ml-3" style="background-color: gold"><a href="#"> {{$notification->data['data']}}</a>
                                            </li>
                                        </div>
                                   @empty

                                        <div class="card mb-3" style="width: 18rem;">
                                            <li class="ml-3"> No Notifications
                                            </li>
                                        </div>

                                @endforelse
                                    Read
                                   @forelse(auth()->user()->readNotifications as $notification)
                                       <div class="card mb-3" style="width: 18rem;">
                                           <li class="ml-3" style="background-color: #c6c8ca"><a href="#"> {{$notification->data['data']}}</a>
                                           </li>
                                       </div>
                                   @empty

                                   @endforelse


                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

