@extends('voyager::master')
@section('page_title', 'Viewing Bookings')
@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-categories"></i> {{ __('Bookings') }}
    </h1>

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Mess</th>
                <th scope="col">User</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 0)
            @foreach($bookings as $booking)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $booking->mess_name}}</td>
                <td>{{$booking->user_name}}</td>
                <td>{{ $booking->transaction_id}}</td>
                <td>@if(!$booking->is_confirm)<a class="btn btn-sm btn-success" href="{{ url('confirm-cancel-booking', $booking->id)}}">Confirm</a>@else
                    <a class="btn btn-sm btn-danger" href="{{ url('confirm-cancel-booking', $booking->id)}}">Cancel</a>
                @endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop