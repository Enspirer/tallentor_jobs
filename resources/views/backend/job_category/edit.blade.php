@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>


    <form action="{{route('admin.job_category.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">    
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <div class="form-group">
                            <label>Name <span style="color:red">*</span></label>
                            <input type="text" class="form-control" value="{{$job_category->name}}" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" name="description" rows="4" required>{{$job_category->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Image <span class="text-danger">*</span></label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="image" value="{{ $job_category->image }}" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label>Skill <span style="color:red">*</span></label>
                            <textarea class="form-control" name="skill" rows="4" required>{{$job_category->skill}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Order <span style="color:red">*</span></label>
                            <input type="number" class="form-control" value="{{$job_category->order}}" name="order" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Feature <span style="color:red">*<span></label>
                            <select class="form-control custom-select" name="feature" required>
                                <option value="Enabled" {{$job_category->feature == 'Enabled' ? "selected":"" }}>Enable</option>   
                                <option value="Disabled" {{$job_category->feature == 'Disabled' ? "selected":"" }}>Disable</option>                              
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control custom-select" name="status" required>
                                <option value="Enabled" {{$job_category->status == 'Enabled' ? "selected":"" }}>Enable</option>   
                                <option value="Disabled" {{$job_category->status == 'Disabled' ? "selected":"" }}>Disable</option>                                
                            </select>
                        </div>
                        
                            
                    </div>
                </div>

                <div class="mt-5 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $job_category->id }}"/>
                    <a href="{{route('admin.job_category.index')}}" type="button" class="btn rounded-pill px-4 py-2 me-2 btn-warning">Back</a>    
                    <input type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success" value="Update" />
                </div>

            </div><br> 
    
        </div>

    </form>

    
<br><br>


<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

@endsection
