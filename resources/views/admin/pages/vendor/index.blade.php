@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Vendor</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="active">Vendor</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="transform-buttons" class="btn-group btn-default">

                <a href="{{route('admin.vendor.add/edit')}}" class="btn btn-default" id="destroy">
                    <span data-zh="">Add New Vendor</span>
                </a>
            </div>
            <div class="table-scrollable">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Vertical</th>
                            <th scope="col">Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Madhuri</td>
                            <td>Y</td>
                            <td>madhuri@infiniteit.biz</td>
                            <td>Kalyan</td>
                            <td>House Keeping,Security</td>
                            <td><label class='label label-danger'>Suspended</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.vendor.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Vendor">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Vendor">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Smith</td>
                            <td>john@gmail.biz</td>
                            <td>Kalyan</td>
                            <td>Security</td>
                            <td><label class='label label-success'>Active</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.vendor.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Vendor">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Vendor">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>


                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>
@endsection