@extends('layouts.master', ['currentPage' => 'bakery-list'])
@section('page-title', 'List Bakery - Admin Page')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                New Home
            </h3>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            @if(count($apartments_in_view)>0)
                    @foreach($apartments_in_view as $item)
                        <div class="col-sm-4">
                            <div class="single-home">
                                <div class="text-center">
                                    <img src="{{$item->thumbnail}}" style="width: 100px; height: 100px">
                                    <h2 style="color: #005cbf">{{$item->price}} VND/m2</h2>
                                    <h3 style="color: #721c24">{{$item->name}} - {{$item->address}}</h3>
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                <div class="row">

                    <div class="col-md-4">
                        <div class="float-right">
                            {{ $apartments_in_view -> appends($_GET) -> links() }}
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-info" role="alert">
                    {!! __('message.tip_create_bakery') !!}
                </div>
            @endif
        </div>
    </div>
    <script src="{{asset('js/myscript.js')}}"></script>
@endsection
