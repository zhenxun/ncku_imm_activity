<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">最新消息</h3>
    </div>
    <!-- /.box-header -->

    <!-- form start -->
    {{ Form::open(['url' => $route, 'role' => 'form']) }}
        <div class="box-body">
        <div class="form-group">
            <label for="title"">標題 :</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="文章標題">
        </div>

        <div class="form-group">
            <label for="title"">內容 :</label>
            <textarea name="content" id="editor">文章內容</textarea>
        </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">儲存</button>
        </div>
    {{ Form::close() }}
</div>

@push('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
