@extends('layouts.app')

@section('content')
        <!-- Navbar -->
        <!-- End Navbar -->
                @if($fulfilled)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-header-text card-header-primary">
                                <div class="card-text">
                                    <h4 class="card-title">Today's summary</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Punched In</th>
                                        <th>Punched Out</th>
                                        <th>Note</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">{{$punchCheck->created_at}}</td>
                                        <td>{{$punchCheck->punch_in}}</td>
                                        <td>{{$punchCheck->punch_out}}</td>
                                        <td>{{$punchCheck->note}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
                @else
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-primary mb-5">@if($punchCheck){{'Punch Out'}}@else {{'Punch In'}} @endif</h4>
                    <div class="card-body">

                        <form method="post" action="/store/punch">
                            <div class="row">
                                <div class="col-6">
                                    <input name="date" type="text" class="form-control" placeholder="date" value="{{\Carbon\Carbon::now()->toDateString()}}" readonly>
                                </div>
                                <div class="col-6">
                                    <input name="@if($punchCheck){{'punch_in'}}@else{{'punch_out'}}@endif" type="text" class="form-control" placeholder="time" value="{{\Carbon\Carbon::now()->format('H:i:s')}}" readonly>
                                </div>
                                @if(!$punchCheck)
                                    <div class="col-12 form-group mt-5">
                                        <input name="note" type="text" class="form-control" placeholder="write some notes here...." value="">
                                    </div>
                                @endif
                            </div>
                            <input type="submit" class="btn btn-primary mt-5" value="@if($punchCheck){{'Punch Out'}}@else {{'Punch In'}} @endif">
                        </form>
                    </div>
                </div>
                @endif

@endsection