

                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update
                                <a href="{{url('developer')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form enctype="multipart/form-data" method="post" action="{{url('developer/'.$data->id)}}">
                                    @csrf
                                    @method('put')
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Name</th>
                                            <td><input value="{{$data->name}}" name="name" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><input value="{{$data->email}}" name="email" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td><input value="{{$data->phone}}" name="phone" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Designation</th>
                                            <td><textarea name="designation" class="form-control">{{$data->designation}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" class="btn btn-primary" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

