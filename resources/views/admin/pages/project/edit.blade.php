@extends(config('constants.adminLayouts').'.default')

@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Edit Project</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Project</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form action="#" class="repeater form-horizontal">
                <div class="portlet-title">
                    <div class="tabbable-custom ">
                        <ul class="nav nav-tabs ">

                            <li class="active">
                                <a href="#tab_5_1" data-toggle="tab"> General Info </a>
                            </li>
                            <li>
                                <a href="#tab_5_2" data-toggle="tab"> Zone Management</a>
                            </li>
                            <li>
                                <a href="#tab_5_3" data-toggle="tab"> Employee Assignment </a>
                            </li>
                            <li>
                                <a href="#tab_5_4" data-toggle="tab"> Asset Management</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_5_1">
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label">Project Name</label>
                                                <input type="text" value="Neelkanth Business Park" placeholder="Project Name" class="form-control">
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Client</label>
                                                <input type="text" disabled="" value="Neelkanth Group" class="form-control">

                                            </div>  
                                            <div class="col-md-4">
                                                <label>Client Coordinator</label>
                                                <select class="selectAllOption2" multiple="multiple">
                                                    <option value="Accord">Jigar Shah</option>
                                                    <option value="Duster">Karan Droh</option>
                                                    <option value="Duster">James Anderson</option>
                                                    <option value="Duster">Jiten Parab</option>
                                                </select> </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label">Schedule Planning Done</label>
                                                <select class="form-control" name="options2">
                                                    <option value="">Select...</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Location</label>
                                                <input type="text" placeholder="Location" value="Mumbai" class="form-control">
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Verticals</label>
                                                <select class='selectAllOption3' multiple="multiple">
                                                    <option value="Option 1">Security</option>
                                                    <option value="Option 2">Housekeeping</option>
                                                </select>	 
                                            </div>  
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane" id="tab_5_2">
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label class="control-label">Zone Name</label>
                                                <input type="text" placeholder="Zone Name" class="form-control">
                                            </div>  
                                            <div class="col-md-3">
                                                <label class="control-label">Parent Zone</label>
                                                <select class='selectAllOption3' multiple="multiple">
                                                    <option value="Accord">Neelkanth Business Park</option>
                                                    <option value="Duster">- Compound</option>
                                                    <option value="Esteem">- Gate 1</option>
                                                    <option value="Fiero">- Gate 2</option>
                                                    <option value="Fiero">- Gate 3</option>
                                                    <option value="Fiero">- Wing A</option>
                                                    <option value="Fiero">-- Reception</option>
                                                    <option value="Fiero">-- Ground Floor</option>
                                                    <option value="Fiero">--- Shop 1</option>
                                                    <option value="Fiero">--- Shop 2</option>
                                                    <option value="Fiero">-- First Floor</option>
                                                    <option value="Fiero">--- Office 101</option>
                                                    <option value="Fiero">---- Conference Room</option>
                                                    <option value="Fiero">---- Toilet</option>
                                                    <option value="Fiero">--- Office 102</option>
                                                    <option value="Fiero">--- Corridor</option>
                                                    <option value="Fiero">--- General Men's Toilet</option>
                                                    <option value="Fiero">--- General Women's Toilet</option>
                                                    <option value="Fiero">-- Second Floor</option>
                                                    <option value="Fiero">-- Third Floor</option>
                                                    <option value="Fiero">-- Fourth Floor</option>
                                                    <option value="Fiero">- Wing B</option>
                                                    <option value="Fiero">- Wing C</option>
                                                    <option value="Fiero">- Wing D</option>

                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Verticals</label>
                                                <select class='selectAllOption3' multiple="multiple">
                                                    <option selected value="Option 1">Security</option>
                                                    <option selected value="Option 2">Housekeeping</option>
                                                </select>
                                            </div>  
                                            <div class="col-md-2">
                                                <label class="control-label" style="margin-top: 40px;"></label>
                                                <label class="mt-checkbox mt-checkbox-outline"> Upload Photo
                                                    <input type="checkbox" value="1" name="test" />
                                                    <span></span>
                                                </label>
                                            </div>                                            
                                            <div class="col-md-2">
                                                <label class="control-label" style="margin: 20px;"></label>
                                                <button type="submit" class="btn blue">Add</button>
                                            </div> 
                                        </div>
                                        <hr>
                                        <div class="portlet-body">
                                            <ul id="tree1">
                                                <li><a href="#">Neelkanth Business Park</a><i class="icon-pencil"></i><i class="icon-trash"></i>
                                                    <ul>
                                                        <li>Compound<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                        <li>Gate 1<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                        <li>Gate 2<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                        <li>Gate 3<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                        <li>Wing A<i class="icon-pencil"></i><i class="icon-trash"></i>
                                                            <ul>
                                                                <li>Reception<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                <li>Ground Floor<i class="icon-pencil"></i><i class="icon-trash"></i>
                                                                    <ul>
                                                                        <li>Shop 001<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                        <li>Shop 002<i class="icon-pencil"></i><i class="icon-trash"></i></li>

                                                                    </ul>

                                                                </li>
                                                                <li>First Floor<i class="icon-pencil"></i><i class="icon-trash"></i>

                                                                    <ul>
                                                                        <li> Office 101 <i class="icon-pencil"></i><i class="icon-trash"></i>
                                                                            <ul>
                                                                                <li>Conference Room<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                                <li>Toilet<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Office 102<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                        <li>Corridor<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                        <li>General Men's Toilet<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                        <li>General Women's Toilet<i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                    </ul>

                                                                </li>
                                                                <li>Second Floor <i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                <li>Third Floor <i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                                <li>Fouth Floor <i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                            </ul>

                                                        </li>
                                                        <li>Wing B <i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                        <li>Wing C <i class="icon-pencil"></i><i class="icon-trash"></i></li>
                                                        <li>Wing D <i class="icon-pencil"></i><i class="icon-trash"></i></li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div> 

                            </div>
                            <div class="tab-pane" id="tab_5_3">
                                <div class="portlet-body">
                                    <div class="portlet-body form">
                                        <div class="panel-group accordion" id="accordion1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1" aria-expanded="false"> Housekeeping </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">

                                                        <div class="portlet-body">
                                                            <ul id="tree2">
                                                                <li><a href="#">Neelkanth Business Park</a><i class="icon-plus addUsers"></i>
                                                                    <ul>
                                                                        <li>Compound<i class="icon-plus addUsers"></i></li>
                                                                        <li>Gate 1<i class="icon-plus addUsers"></i></li>
                                                                        <li>Gate 2<i class="icon-plus addUsers"></i></li>
                                                                        <li>Gate 3<i class="icon-plus addUsers"></i></li>
                                                                        <li>Wing A<i class="icon-plus addUsers"></i><i class="icon-pencil"></i>(Carlos Henry,Kane Williamson,Harley Manson)
                                                                            <ul>
                                                                                <li>Reception<i class="icon-plus addUsers"></i></li>
                                                                                <li>Ground Floor<i class="icon-plus addUsers"></i>
                                                                                    <ul>
                                                                                        <li>Shop 001<i class="icon-plus addUsers"></i></li>
                                                                                        <li>Shop 002<i class="icon-plus addUsers"></i></li>

                                                                                    </ul>

                                                                                </li>
                                                                                <li>First Floor<i class="icon-plus addUsers"></i><i class="icon-pencil"></i>(Andrew Simons,Aron Linch)

                                                                                    <ul>
                                                                                        <li> Office 101<i class="icon-plus addUsers"></i> 
                                                                                            <ul>
                                                                                                <li>Conference Room<i class="icon-plus addUsers"></i></li>
                                                                                                <li>Toilet<i class="icon-plus addUsers"></i></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>Office 102<i class="icon-plus addUsers"></i></li>
                                                                                        <li>Corridor<i class="icon-plus addUsers"></i></li>
                                                                                        <li>General Men's Toilet<i class="icon-plus addUsers"></i></li>
                                                                                        <li>General Women's Toilet<i class="icon-plus addUsers"></i></li>
                                                                                    </ul>

                                                                                </li>
                                                                                <li>Second Floor<i class="icon-plus addUsers"></i></li>
                                                                                <li>Third Floor<i class="icon-plus addUsers"></i><i class="icon-pencil"></i>(Rob Daniel,Ricky Trek,Bray Wayatt)</li>
                                                                                <li>Fouth Floor<i class="icon-plus addUsers"></i></li>
                                                                            </ul>

                                                                        </li>
                                                                        <li>Wing B<i class="icon-plus addUsers"></i></li>
                                                                        <li>Wing C<i class="icon-plus addUsers"></i></li>
                                                                        <li>Wing D<i class="icon-plus addUsers"></i></li>

                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3" aria-expanded="false">Security </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3" class="panel-collapse in" >
                                                    <div class="panel-body">
                                                        <div class="form-body">
                                                            <ul id="tree3">
                                                                <li><a href="#">Neelkanth Business Park</a><i class="icon-plus addUsers"></i>
                                                                    <ul>
                                                                        <li>Compound<i class="icon-plus addUsers"></i><i class="icon-pencil"></i>(Sin Cara,Roman Reign)</li>
                                                                        <li>Gate 1<i class="icon-plus addUsers"></i></li>
                                                                        <li>Gate 2<i class="icon-plus addUsers"></i></li>
                                                                        <li>Gate 3<i class="icon-plus addUsers"></i></li>
                                                                        <li>Wing A<i class="icon-plus addUsers"></i>
                                                                            <ul>
                                                                                <li>Reception<i class="icon-plus addUsers"></i><i class="icon-pencil"></i>(Carlos Henry,Kane Williamson,Harley Manson)</li>
                                                                            </ul>

                                                                        </li>
                                                                        <li>Wing B<i class="icon-plus addUsers"></i></li>
                                                                        <li>Wing C<i class="icon-plus addUsers"></i></li>
                                                                        <li>Wing D<i class="icon-plus addUsers"></i></li>

                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </div> </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_5_4">
                                <div class="portlet-body">
                                    <div class="portlet-body form">
                                        <div class="panel-group accordion" id="accordion1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4" aria-expanded="false"> Housekeeping </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">

                                                        <div class="portlet-body">
                                                            <ul id="tree5">
                                                                <li><a href="#">Neelkanth Business Park</a><i class="icon-plus addAsset"></i>
                                                                    <ul>
                                                                        <li>Compound<i class="icon-plus addAsset"></i></li>
                                                                        <li>Gate 1<i class="icon-plus addAsset"></i></li>
                                                                        <li>Gate 2<i class="icon-plus addAsset"></i></li>
                                                                        <li>Gate 3<i class="icon-plus addAsset"></i></li>
                                                                        <li>Wing A<i class="icon-plus addAsset"></i><i class="icon-pencil"></i>(Carlos Henry,Kane Williamson,Harley Manson)
                                                                            <ul>
                                                                                <li>Reception<i class="icon-plus addAsset"></i></li>
                                                                                <li>Ground Floor<i class="icon-plus addAsset"></i>
                                                                                    <ul>
                                                                                        <li>Shop 001<i class="icon-plus addAsset"></i></li>
                                                                                        <li>Shop 002<i class="icon-plus addAsset"></i></li>

                                                                                    </ul>

                                                                                </li>
                                                                                <li>First Floor<i class="icon-plus addAsset"></i><i class="icon-pencil"></i>(Andrew Simons,Aron Linch)

                                                                                    <ul>
                                                                                        <li> Office 101<i class="icon-plus addUsers"></i> 
                                                                                            <ul>
                                                                                                <li>Conference Room<i class="icon-plus addAsset"></i></li>
                                                                                                <li>Toilet<i class="icon-plus addAsset"></i></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>Office 102<i class="icon-plus addAsset"></i></li>
                                                                                        <li>Corridor<i class="icon-plus addAsset"></i></li>
                                                                                        <li>General Men's Toilet<i class="icon-plus addAsset"></i></li>
                                                                                        <li>General Women's Toilet<i class="icon-plus addAsset"></i></li>
                                                                                    </ul>

                                                                                </li>
                                                                                <li>Second Floor<i class="icon-plus addAsset"></i></li>
                                                                                <li>Third Floor<i class="icon-plus addAsset"></i><i class="icon-pencil"></i>(Rob Daniel,Ricky Trek,Bray Wayatt)</li>
                                                                                <li>Fouth Floor<i class="icon-plus addAsset"></i></li>
                                                                            </ul>

                                                                        </li>
                                                                        <li>Wing B<i class="icon-plus addAsset"></i></li>
                                                                        <li>Wing C<i class="icon-plus addAsset"></i></li>
                                                                        <li>Wing D<i class="icon-plus addAsset"></i></li>

                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_5" aria-expanded="false">Engineering & Machinery </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_5" class="panel-collapse in" >
                                                    <div class="panel-body">
                                                        <div class="form-body">
                                                            <ul id="tree6">
                                                                <li><a href="#">Neelkanth Business Park</a><i class="icon-plus addAsset"></i>
                                                                    <ul>
                                                                        <li>Compound<i class="icon-plus addAsset"></i><i class="icon-pencil"></i>(Sin Cara,Roman Reign)</li>
                                                                        <li>Gate 1<i class="icon-plus addAsset"></i></li>
                                                                        <li>Gate 2<i class="icon-plus addAsset"></i></li>
                                                                        <li>Gate 3<i class="icon-plus addAsset"></i></li>
                                                                        <li>Wing A<i class="icon-plus addAsset"></i>
                                                                            <ul>
                                                                                <li>Reception<i class="icon-plus addAsset"></i><i class="icon-pencil"></i>(Carlos Henry,Kane Williamson,Harley Manson)</li>
                                                                            </ul>

                                                                        </li>
                                                                        <li>Wing B<i class="icon-plus addAsset"></i></li>
                                                                        <li>Wing C<i class="icon-plus addAsset"></i></li>
                                                                        <li>Wing D<i class="icon-plus addAsset"></i></li>

                                                                    </ul>
                                                                </li>

                                                            </ul>
                                                        </div> </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
                </div>	
            </form>	
        </div>
    </div>
</div>
<!-- set up the modal to start hidden and fade in and out -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Employee Assignment </h4>
            </div>
            <!-- dialog body -->
            <div class="modal-body">
                <div class="input-group control-group after-add-more col-md-12"> 
                    <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label">Shift</label>
                        <div class="input-group col-md-12"> 
                            <select class='form-control'>
                                <option value="shift-a">Shift A</option>
                                <option value="shift-b">Shift B</option>
                                <option value="shift-c">Shift C</option>
                                <option value="shift-d">Shift D</option>
                                <option value="shift-e">Shift E</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Select Role</label>
                        <div class="input-group col-md-12"> 
                            <select class='selectAllOption3' multiple="multiple">
                                <option value="Accord">Supervisor</option>
                                <option value="Duster">Administrator</option>
                                <option value="Esteem">Janitor</option>
                                <option value="Fiero">Senior Supervisor</option>
                                <!--                            <option value="Fiero"></option>-->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label">Assign Employee</label>
                        <div class="input-group col-md-12">             
                            <select class="example-optgroup-buttonText" style="width: 100%;" multiple="multiple">
                                <optgroup label="Senior Supervisor">
                                    <option value="1-1">John</option>
                                    <option value="1-2">Smith</option>
                                    <option value="1-3">Bhavana</option>
                                </optgroup>
                                <optgroup label="Supervisor">
                                    <option value="2-1">Leena</option>
                                    <option value="2-2">Sushil</option>
                                    <option value="2-3">Sachin</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>                     
                    <div class="col-md-1">
                    <label></label>
                        <button href="#" class="btn btn-danger pull-right remove" style="margin-top: 25px;">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    </div>
                </div>   
                <div class="copy hide">
                    <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label">Shift</label>
                        <div class="input-group col-md-12"> 
                            <select class='form-control' >
                                <option value="shift-a">Shift A</option>
                                <option value="shift-b">Shift B</option>
                                <option value="shift-c">Shift C</option>
                                <option value="shift-d">Shift D</option>
                                <option value="shift-e">Shift E</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">Select Role</label>
                        <div class="input-group col-md-12"> 
                            <select class='selectAllOption3' multiple="multiple">
                                <option value="Accord">Supervisor</option>
                                <option value="Duster">Administrator</option>
                                <option value="Esteem">Janitor</option>
                                <option value="Fiero">Senior Supervisor</option>
                                <!--                            <option value="Fiero"></option>-->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label">Assign Employee</label>
                        <div class="input-group col-md-12">             
                            <select class="example-optgroup-buttonText" style="width: 100%;" multiple="multiple">
                                <optgroup label="Senior Supervisor">
                                    <option value="1-1">John</option>
                                    <option value="1-2">Smith</option>
                                    <option value="1-3">Bhavana</option>
                                </optgroup>
                                <optgroup label="Supervisor">
                                    <option value="2-1">Leena</option>
                                    <option value="2-2">Sushil</option>
                                    <option value="2-3">Sachin</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>                     
                    <div class="col-md-1">
                    <label></label>
                        <button href="#" class="btn btn-danger pull-right remove" style="margin-top: 25px;">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    </div>
                </div> 
            </div>

                <div class="form-group input-group-btn" style="padding:10px 30px;"> 
                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                </div> 
            
            <!-- dialog buttons -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary ">Assign</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div id="assetModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Assign Asset </h4>
            </div>
            <!-- dialog body -->
            <div class="modal-body col-md-12">
                <div class="input-group control-group  col-md-12"> 
                      <div class="form-group col-md-6">
                        <label class="control-label">Asset Category</label>
                        <div class="input-group col-md-12"> 
                            <select class='selectAllOption3' multiple="multiple">
                                <option value="Accord">Electricals</option>
                                <option value="Duster">Air Conditioners</option>
                                <option value="Esteem">PHE</option>
                                <option value="Fiero">HAVC</option>
                                <!--                            <option value="Fiero"></option>-->
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="control-label"> Asset</label>
                        <div class="input-group col-md-12">           
                            <select class="example-optgroup-buttonText" style="width: 100%;" multiple="multiple">
                                <optgroup label="Electricals">
                                    <option value="1-1">Vacuum Cleaner</option>
                                    <option value="1-2">Polishing Machine</option>
                                    <option value="1-3">Vapor Cleaning Machine</option>
                                </optgroup>
                                <optgroup label="Air Conditioners">
                                    <option value="2-1">AC</option>
                                    <option value="2-2">Equipment1</option>
                                    <option value="2-3">Equipment2</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>   
               
<!--                <div class="input-group-btn col-md-12"> 
                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                </div> -->
            </div>
            <div class="col-md-12"> <hr></div>
            <!-- dialog buttons -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary ">Assign</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

