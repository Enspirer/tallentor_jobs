@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')


    <form action="{{route('admin.skills.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">    
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <div class="form-group">
                            <label>Name <span style="color:red">*</span></label>
                            <input type="text" class="form-control" value="{{$skills->name}}" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="4">{{$skills->description}}</textarea>
                        </div>
                      
                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control custom-select" name="status" required>
                                <option value="Enabled" {{$skills->status == 'Enabled' ? "selected":"" }}>Enable</option>   
                                <option value="Disabled" {{$skills->status == 'Disabled' ? "selected":"" }}>Disable</option>                                
                            </select>
                        </div>
                        
                            
                    </div>
                </div>

                <div class="mt-5 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $skills->id }}"/>
                    <a href="{{route('admin.skills.index')}}" type="button" class="btn rounded-pill px-4 py-2 me-2 btn-warning">Back</a>    
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
