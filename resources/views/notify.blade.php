@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Notifications


                        <div class="card-body">

                            <div class="card-deck">
                                <div class="d-flex flex-column">




                               @forelse(auth()->user()->notifications as $notification)
                                        <div class="card mb-2" style="width: 18rem;">
                                            <li class="ml-4"><a href="#"> {{$notification->data['data']}}</a>

                                    </li>
                                        </div>
                                   @empty
                                   none
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

