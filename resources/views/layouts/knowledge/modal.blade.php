<!-- Modal Material-->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Form -->
        <form method="post" enctype="multipart/form-data" action="{{ route('knowledges.store') }}">
        @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" required name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Category</label>
                <select class="form-control" required name="category">
                    <option Selected disabled>Choose</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name_categories}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">File PDF</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" required name="file_data">
            </div>

            <!-- modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                {!! CollectiveForm::submit(trans('Save'), ['class' => 'btn btn-primary', 'onclick' => 'this.disabled = true; this.value = "Saving..."; this.form.submit();']) !!}
            </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Modal Category-->
<div class="modal fade" id="ModalAdd1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Form -->
        <form method="post" action="{{ route('categories.store') }}">
        @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Name Category</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name Category" required name="kategori">
            </div>

            <!-- modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                {!! CollectiveForm::submit(trans('Save'), ['class' => 'btn btn-primary', 'onclick' => 'this.disabled = true; this.value = "Saving..."; this.form.submit();']) !!}
            </div>
        </form>

      </div>
    </div>
  </div>
</div>