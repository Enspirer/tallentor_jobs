@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>


    <form action="{{route('admin.job_posts.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">    
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                            
                        <div class="form-group">
                            <label>Name <span style="color:red">*</span></label>
                            <input type="text" class="form-control" value="{{$job_posts->title}}" name="title" required>
                        </div>

                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" id="editor" name="description" rows="4">{!! $job_posts->description !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Image <span class="text-danger">*</span></label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="image" value="{{ $job_posts->image }}" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label>Tags <span style="color:red">*</span></label>
                            <input type="text" class="form-control" value="{{$job_posts->tags}}" name="tags" required>
                        </div>

                        <div class="form-group">
                            <label>Expired Date <span style="color:red">*</span></label>
                            <input type="date" class="form-control" value="{{$job_posts->expire_date}}" name="expire_date" required>
                        </div>

                        <div class="form-group">
                            <label>Featured <span style="color:red">*<span></label>
                            <select class="form-control custom-select" name="featured" required>
                                <option value="Enabled" {{$job_posts->featured == 'Enabled' ? "selected":"" }}>Enable</option>   
                                <option value="Disabled" {{$job_posts->featured == 'Disabled' ? "selected":"" }}>Disable</option>                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control custom-select" name="status" required>
                                <option value="Approved" {{$job_posts->status == 'Approved' ? "selected":"" }}>Approved</option>   
                                <option value="Disapproved" {{$job_posts->status == 'Disapproved' ? "selected":"" }}>Disapproved</option>                                
                                <option value="Pending" {{$job_posts->status == 'Pending' ? "selected":"" }}>Pending</option>                                
                            </select>
                        </div>
                            
                    </div>
                </div>

                <div class="mt-5 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $job_posts->id }}"/>
                    <a href="{{route('admin.job_posts.index')}}" type="button" class="btn rounded-pill px-4 py-2 me-2 btn-warning">Back</a>    
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
