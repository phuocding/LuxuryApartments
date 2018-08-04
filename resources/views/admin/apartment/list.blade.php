@extends('layouts.master', ['currentPage' => 'bakery-list'])
@section('page-title', 'List Bakery - Admin Page')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                List Bakery
                <small class="text-muted"></small>
            </h3>
            <a href="/admin/apartment/create" class="btn float-right"><i class="fas fa-plus-circle"></i> Create new</a>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            @if(count($apartments_in_view)>0)
            <table class="table table-striped">
                <thead>
                    <tr class="row">
                        <th class="col-md-1"></th>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-2">Name</th>
                        <th class="col-md-2">Name</th>
                        <th class="col-md-2">Description</th>
                        <th class="col-md-1">Price</th>
                        <th class="col-md-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bakeries_in_view as $item)
                    <tr class="row" id="row-item-{{$item->id}}">
                        <td class="col-md-1 text-center">
                            <input type="checkbox" class="check-item">
                        </td>
                        <td class="col-md-1">{{$item->id}}</td>
                        <td class="col-md-2">
                            <div class="card"
                                 style="background-image: url('{{$item->images}}'); background-size: cover; width: 60px; height: 60px;">
                            </div>
                        </td>
                        <td class="col-md-2">{{$item->name}}</td>
                        <td class="col-md-2">{{$item->description}}</td>
                        <td class="col-md-1">{{$item->price}}</td>
                        <td class="col-md-3">
                            <a href="/admin/bakery/edit/{{$item -> id}}" class="btn btn-link btn-quick-edit">Edit</a>&nbsp;&nbsp;
                            <a href="/admin/bakery/delete/{{$item -> id}}" class="btn btn-link btn-delete" data-toggle="modal" data-target="#exampleModalCenter">Delete</a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="btn-delete" id="{{$item-> id}}" class="btn btn-link btn-delete">Delete With Ajax</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-8 form-inline">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="check-all">
                        <label class="form-check-label" for="defaultCheck1">
                            Check all
                        </label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <select id="select-action" class="form-control">
                            <option selected value="0">--Select action--</option>
                            <option value="1">Delete all checked</option>
                            <option value="2">Another action</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" id="btn-apply">Apply</button>
                </div>
                <div class="col-md-4">
                    <div class="float-right">
                        {{--{{ $bakeries_in_view ->links() }}--}}
                    </div>
                </div>
            </div>
            @else
                <div class="alert alert-info" role="alert">
                    Have no bakery, click <a href="/admin/bakery/create">here</a> to create new.
                </div>
            @endif
        </div>
    </div>

    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if(confirm('Are you sure ?')){
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "/admin/bakery/destroy/" + currentId, true);
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
    <script src="{{asset('js/myscript.js')}}"></script>
@endsection
