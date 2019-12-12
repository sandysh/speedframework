@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Attendance</p>
                    <h3 class="card-title">{{$summaries->count()}}/{{\Carbon\Carbon::now()->daysInMonth}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Leaves</p>
                    <h3 class="card-title">$34</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Tasks</p>
                    <h3 class="card-title">75</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Bugs</p>
                    <h3 class="card-title">+245</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
      <div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">Summary</h4>
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
                                    @foreach($summaries as $summary)
                                    <tr>
                                        <td>{{$summary->created_at->toDayDateTimeString()}}</td>
                                        <td>{{\Carbon\Carbon::parse($summary->punch_in)->format('g:i:s a')}}</td>
                                        <td>
                                        @if($summary->punch_out != '00:00:00')
                                        {{\Carbon\Carbon::parse($summary->punch_out)->format('g:i:s a')}}
                                        @else
                                        {{'---'}}
                                        @endif
                                        </td>
                                        <td>{{$summary->note}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
          </div>
      </div>
  </div>
</div>

@endsection