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
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 0)
            @foreach($properties as $property)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $property->title}}</td>
                <td>{{$property->details}}
                    {{$property->floar}}
                    {{$property->seat}}{{$property->room}}
                </td>
                <td>{{ $property->price}}</td>
                <td> <img style="max-height: 200px;object-position: center;
                    object-fit: cover;" class="card-img-top" src="{{ Voyager::image($property->image) }}"></td>
                <td>
                    <a class="btn btn-sm btn-success editProperty" data-id="{{ $property->id }}" data-toggle="modal"
                        data-target="#editPropertyModal{{ $property->id }}">Edit</a>

                    <a class="btn btn-sm btn-danger" href="{{ url('admin/delete-property', $property->id)}}">Delete</a>

                </td>
            </tr>
            <div class="modal fade" id="editPropertyModal{{ $property->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mess Edit</h5>
                        </div>
                        <form method="post" action="{{ url('admin/edit-property', $property->id)}}"
                            enctype="multipart/form-data">
                            <div class="modal-body">

                                <div class="my-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $property->title}}" name="title">
                                </div><br>
                                <div class="my-3">
                                    <textarea type="number" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $property->details}}"
                                        name="details">{{ $property->details}}</textarea>
                                </div>
                                <br>
                                <div class="my-3">
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $property->seat}}" name="seat">
                                </div>
                                <br>
                                <div class="my-3">
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $property->floar}}" name="floar">
                                </div>
                                <br>
                                <div class="my-3">
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $property->room}}" name="room">
                                </div>
                                <br>
                                <img style="max-height: 200px;object-position: center;
                        object-fit: cover;" class="card-img-top" src="{{ Voyager::image($property->image) }}">
                                <div class="my-3">
                                    <input type="file" class="form-control" id="exampleFormControlInput1" name="image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>
@stop