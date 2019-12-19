@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Recent Jobs</h1>
            <table class="table">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td><img src="{{asset('avatar/logo.png')}}" style="width: 50px" alt=""></td>
                        <td>
                            Position: {{$job->position}}<br>
                            Job Type: <i class="fa fa-clock"></i>&nbsp;{{$job->type}}
                        </td>
                        <td>Address: <i class="fa fa-map-marker"></i>&nbsp;{{$job->address}}</td>
                        <td>Date: <i class="fa fa-calendar-check"></i>&nbsp;{{$job->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{route('jobs.show',[$job->id, $job->slug])}}">
                                <button class="btn btn-primary">Apply</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
