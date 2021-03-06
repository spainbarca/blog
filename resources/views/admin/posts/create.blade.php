<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form class="js-validation" action="{{ route('admin.posts.store', '#create') }}" method="POST" enctype="multipart/form-data"
        novalidate="novalidate">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add new post title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : 'border-0' }}" id="post-title" name="title"
                            placeholder="Enter a title.." value="{{ old('title') }}" autofocus required>
                        <label class="form-label" for="example-text-input-floating">Title</label>
                        @if($errors->has('title'))
			                <span class="invalid-feedback" role="alert">
			                    <strong>{!! $errors->first('title', ':message') !!}</strong>
			                </span>
		            	@endif
<br>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Create post</button>
                </div>
            </div>
        </div>
    </form>
</div>
