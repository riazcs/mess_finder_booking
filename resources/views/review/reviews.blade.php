@extends('voyager::master')
@section('page_title', 'Viewing reviews')
@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-categories"></i> {{ __('Review list') }}
    </h1>
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
                <th scope="col">Mess Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Review</th>
                <th scope="col">Rating</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 0)
            @foreach($reviews as $review)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ App\Models\Property::findOrFail($review->mess_id)->title}}</td>
                <td>{{ App\Models\User::findOrFail($review->user_id)->name}}</td>
                <td>{{ $review->comments}}</td>
                <td>{{ $review->star_rating}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop