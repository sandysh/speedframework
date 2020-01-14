@extends('layouts.app')

@section('content')
    <ul class="nav bg-white nav-pills nav-pills-icons" role="tablist">
        <!--
            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
        -->
        <li class="nav-item">
            <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                <i class="material-icons">dashboard</i>
                Attendance
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">--}}
{{--                <i class="material-icons">schedule</i>--}}
{{--                Schedule--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">--}}
{{--                <i class="material-icons">list</i>--}}
{{--                Tasks--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        new Vue({
            data:{
                msg: 'hello'
            }
        });
    </script>
@endpush