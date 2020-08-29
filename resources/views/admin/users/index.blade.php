@extends('admin.layouts.master')
@section('head')
<p>users</p>
@endsection
@section('content')
 <div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users</h4>
                                <p class="category">List of all registered users</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                       
                                        <th>register at</th>
                                         <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ $user->created_at ? $user->created_at->diffForHumans: '-'}}</td>
                                       
                                        <td>
                                        	 {{  link_to_route('users.show','details',$user->id,['class'=>'btn btn-sm btn-success'] ) }}
                                           

                                           
                                        </td>
                                    </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
@endsection