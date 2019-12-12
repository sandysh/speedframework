@extends('layouts.app')

@section('content')
        <!-- Navbar -->
        <!-- End Navbar -->
                @if($fullfilled)
                    <div class="col-md-8">
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
                                        <td class="text-center">{{$punchCheck->created_at->toDayDateTimeString()}}</td>
                                        <td>{{\Carbon\Carbon::parse($punchCheck->punch_in)->format('g:i:s a')}}</td>
                                        <td>
                                        @if($punchCheck->punch_out != '00:00:00')
                                        {{\Carbon\Carbon::parse($punchCheck->punch_out)->format('g:i:s a')}}
                                        @endif
                                        </td>
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
                                    <input name="date" type="text" class="form-control" placeholder="date" value="{{\Carbon\Carbon::now()->toDateString()}}" disabled="disabled">
                                </div>
                                <div class="col-6">
                                    <input name="@if($punchCheck){{'punch_in'}}@else{{'punch_out'}}@endif" type="text" class="form-control" id="punch-in" placeholder="time" value=
                                    "@if($punchCheck){{\Carbon\Carbon::parse($punchCheck->punch_in)->format('g:i:s a')}}@else {{\Carbon\Carbon::now()->format('g:i:s')}} @endif" 
                                    disabled="disabled">
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

@push('scripts')
    <!-- <script>
        setInterval( function() {
            var now = new Date();
            var hh = now.getHours();
            var min = now.getMinutes();
            var sec = now.getSeconds();                
            var ampm = (hh>=12)?'pm':'am';
            hh = hh%12;
            hh = hh?hh:12;
            hh = hh<10?'0'+hh:hh;
            min = min<10?'0'+min:min;
            sec = sec<10?'0'+sec:sec;
                            
            var time = hh+" : "+min+" : "+sec+" "+ampm;
            $('#punch-in').val(time);
            // console.log(time);
        }, 1000);
    </script> -->
@endpush