@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Notifications</h3>
                        <a class="btn btn-primary float-right" href={{route('notifys.mark')}}>
                            MarK All as Read
                        </a>


                        <div class="card-body">

                            <div class="card-deck">
                                <div class="d-flex flex-column">

                                    <h4>Unread</h4> <br/><br/>


                               @forelse(auth()->user()->unreadNotifications as $notification)
                                        <div class="card mb-3" style="width: 28rem;">
                                            <li class="ml-4" style="background-color: yellow"><a href={{route('notoans.show')}}> {{$notification->data['data']}}</a><br/>{{ $notification->created_at->diffForHumans() }}
                                            </li>
                                        </div>
                                   @empty

                                        <div class="card mb-3" style="width: 28rem;">
                                            <li class="ml-4"> No Notifications
                                            </li>
                                        </div>

                                @endforelse
                                    <h4>Read</h4>
                                   @forelse(auth()->user()->readNotifications as $notification)
                                       <div class="card mb-3" style="width: 28rem;">
                                           <li class="ml-4" style="background-color: #c6c8ca"><a href={{route('notoans.show')}}> {{$notification->data['data']}}</a><br/>{{ $notification->created_at->diffForHumans() }}
                                           </li>


                                       </div>
                                   @empty
                                        <div class="card mb-3" style="width: 28rem;">
                                            <li class="ml-4"> No Notifications
                                            </li>
                                        </div>

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

