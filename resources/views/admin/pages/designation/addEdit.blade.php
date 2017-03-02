@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Designation</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Designation</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">
            {{ Form::model($design, ['route' => 'admin.designation.save/update', 'class'=>'repeater form-horizontal','method'=>'post']) }}
            {{ Form::hidden("id",null) }}


            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-info"></i>General Information </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-3">
                                {{ Form::label('Designation', 'Designation') }}
                                {{Form::text('name',  null, ['class'=>'form-control','required'=>'true','placeholder'=>'Designation']) }}
                            </div>	
                            <div class="col-md-3">
                                {{ Form::label('Reporting Designation', 'Reporting Designation') }}
                                {{Form::select('parent_id',$getRepoting , @$design->parent_id or null , ['class'=>'form-control']) }}
                            </div>	
                            <div class="col-md-3">
                                {{ Form::label('Designation Level', 'Designation Level') }}
                                {{Form::select('designation_level_id',$desLevel ,  @$design->designation_level_id or null , ['class'=>'form-control']) }}
                            </div>
                            <div class="col-md-3">
                                {{ Form::label('Verticle', 'Verticle') }}
                                {{Form::select('verticle_id',$verticlesSel ,  @$design->vertical_id or null , ['class'=>'form-control']) }}

                            </div>
                        </div>

                    </div>	
                    <!-- END FORM-->
                </div>
            </div>	

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>Permissions</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="mt-checkbox">   GRANT SYSTEM ACCESS  
                                    <input type="checkbox" name="access_system">
                                    <span></span>
                                </label>
                            </div>
                            <div class="col-md-6 permDiv">
                                <label class="mt-checkbox pull-right">   GRANT COMPLETE ACCESS
                                    <input type="checkbox" name="chkAll">
                                    <span></span>
                                </label>
                            </div>

                        </div>

                    </div>	   




                    <!-- BEGIN FORM-->
                    <div class="form-body permDiv">
                            @foreach($permissions  as $permk => $permv)
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #f9f9f9;">
                                    <h4 class="panel-title uppercase">
                                        {{$permk}}
                                       <div class="pull-right">
                                            <label class="mt-checkbox"> Select All  
                                                <input type="checkbox" name="chk_group[]" data-group='{{$permk}}'>
                                                <span></span>
                                            </label>
                                        </div>
                                    </h4>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-checkbox-inline" style="padding:10px 20px;">
                                        @foreach($permv as $per)
                                        <label class="mt-checkbox"> 
                                            {{strtoupper($per['perms']) }}

                                            <input type="checkbox" name="chk[]" data-per='{{$permk}}' value="{{@$per['id']}}" id="perm{{ $per['id'] }}"  <?php echo in_array($per['id'], array_flatten($design->perms()->get(['id'])->toArray())) ? "checked" : "" ?>>
                                            <span></span>
                                        </label> 
                                        @endforeach
                                    </div>
                               </div> 
                               </div>
                            </div>
                            @endforeach
                        </div>	
                    <!-- END FORM-->
                </div>
            </div>	

            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-5 col-md-6">
                        <button type="submit" class="btn green">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
            </div>
            {{ Form::close() }}	
        </div>
    </div>
</div>
@endsection

@section('myscripts')
<script>

    $(".permDiv").hide();
    $("[name='chkAll']").on("click", function () {

        var checkbox = $(this);
        var isChecked = checkbox.is(':checked');
        if (isChecked) {
            $("[name='chk[]']").attr('Checked', 'Checked');
            $("[name='chk_group[]']").attr('Checked', 'Checked');
        } else {
            $("[name='chk[]']").removeAttr('Checked');
            $("[name='chk_group[]']").removeAttr('Checked');
        }
    });

    $("[name='access_system'").click(function () {
        var checkbox = $(this);
        var isChecked = checkbox.is(':checked');

        if (isChecked) {
            $(".permDiv").show();
        } else {
            $(".permDiv").hide();
        }


    });

    $("[name='chk_group[]'").click(function () {
        var getattr = $(this).data('group');
        var checkbox = $(this);
        var isChecked = checkbox.is(':checked');

        if (isChecked) {
            $("[data-per='" + getattr + "']").attr('Checked', 'Checked');
        } else {
            $("[data-per='" + getattr + "']").removeAttr('Checked');
        }

    });

</script>
@endsection
