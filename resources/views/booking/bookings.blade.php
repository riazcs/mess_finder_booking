@extends('voyager::master')
@section('page_title', 'Viewing Bookings')
@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-categories"></i> {{ __('Bookings') }}
    </h1>
    <a href="" class="btn btn-success btn-add-new">
        <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
    </a>
    @can('edit')

    <a href="" class="btn btn-primary btn-add-new">
        <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
    </a>

    @endcan
    @can('delete')
    @if($usesSoftDeletes)
    <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle" data-on="{{ __('voyager::bread.soft_deletes_off') }}" data-off="{{ __('voyager::bread.soft_deletes_on') }}">
    @endif
    @endcan

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
                <td><button class="btn btn-sm btn-success">Confirm</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop