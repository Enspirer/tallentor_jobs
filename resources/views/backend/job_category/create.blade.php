@extends('backend.layouts.app')

@section('title', __('Create'))

@section('content')

    <form action="{{route('admin.job_category.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">    
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                            
                        <div class="form-group">
                            <label>Name <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" name="description" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Image <span class="text-danger">*</span></label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="image" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label>Skill <span style="color:red">*</span></label>
                            <textarea class="form-control" name="skill" rows="4" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Order <span style="color:red">*</span></label>
                            <input type="number" class="form-control" name="order" required>
                        </div>

                        <div class="form-group">
                            <label>Feature <span style="color:red">*<span></label>
                            <select class="form-control custom-select" name="feature" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled" selected>Disable</option>                              
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control custom-select" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                              
                            </select>
                        </div>
                            
                    </div>
                </div>

                <div class="mt-5 text-right">   
                    <input type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success" value="Submit" />
                </div>

            </div><br> 
    
        </div>

    </form>

    
<br><br>



@endsection
