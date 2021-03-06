@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><h4>Product List</h4></div>

            <div class="card-body">
                <div align="right">
                    <button type="button" name="create_product" id="create_product" class="btn btn-success btn-sm">Create Product</button>
                </div>
                <br />
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="product_table">
                        <thead>
                        <tr>
                            <th width="10%">Image</th>
                            <th width="25%">Product Name</th>
                            <th width="10">Price</th>
                            <th width="35%">Description</th>
                            <th width="30%">Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Product</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="product_submit_form" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-4" >Product Name : </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" />
                        </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Price : </label>
                                <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" />
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Description : </label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Category : </label>
                            <select multiple class="form-control" id="category" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Select Image : </label>
                            <input type="file" name="image" id="image" />
                            <span id="store_image"></span>
                    </div>
                    <br />
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="Add"/>
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this product?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){

        $('#product_table').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
            url: "{{ route('products.index') }}",
            },
            columns:[
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta){
                    return "<img src={{ URL::to('/') }}/" + data + " width='70' class='img-thumbnail' />";
                    },
                    orderable: false
                },
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {data: 'description', name: 'description'},
                {data: 'action', name: 'action', orderable: false}
            ]
        });

        $('#create_product').click(function(){

        $('.modal-title').text("Add New Record");
            //  $('#action_button').val("Add");
            //  $('#action').val("Add");
            $('#formModal').modal('show');
        });

        $('#product_submit_form').on('submit', function(event){
            event.preventDefault();
            if($('#action').val() == 'Add')
            {
                $.ajax({
                    url:"{{ route('products.store') }}",
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    success:function(data)
                        {
                        var html = '';
                        if(data.errors)
                        {
                                html = '<div class="alert alert-danger">';
                                for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#product_submit_form')[0].reset();
                            $('#product_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }

            if($('#action').val() == "Edit")
            {
                $.ajax({
                    url:"{{ route('product.updater', '') }}",
                    method:"POST",
                    data:new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#product_submit_form')[0].reset();
                            $('#store_image').html('');
                            $('#product_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }

        });

        $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $('#form_result').html('');
            $.ajax({
                url:"/products/"+id+"/edit",
                success:function(html){
                    $('#name').val(html.data.name);
                    $('#price').val(html.data.price);
                    $('#description').val(html.data.description);
                    $('#category').val(html.data.category_id);
                    $('#store_image').html("<img src={{ URL::to('/') }}/" + html.data.image + " width='70' class='img-thumbnail' />");
                    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
                    $('#hidden_id').val(html.data.id);
                    $('.modal-title').text("Update Record");
                    $('#action_button').val("Update");
                    $('#action').val("Edit");
                    $('#formModal').modal('show');
                }
            })
        });

        // var user_id;

        // $(document).on('click', '.delete', function(){
        // user_id = $(this).attr('id');
        // $('#confirmModal').modal('show');
        // });

        // $('#ok_button').click(function(){
        //     $.ajax({
        //         url:"/product/delete/"+user_id,
        //         beforeSend:function(){
        //             $('#ok_button').text('Deleting...');
        //         },
        //         success:function(data)
        //         {
        //             setTimeout(function(){
        //                 $('#confirmModal').modal('hide');
        //                 $('#product_table').DataTable().ajax.reload();
        //             }, 2000);
        //         }
        //     })
        // });

    });

        //delete ajax request are here
        function deleteData(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                  url : "{{ url('products') }}" + '/' + id,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' : csrf_token},
                  success : function(data) {
                    $('#product_table').DataTable().ajax.reload();
                      swal({
                        title: "Delete Done!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Done",
                      });
                  },
                  error : function () {
                      swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
            } else {
              swal("Your imaginary file is safe!");
            }
          });

        }



</script>

@endsection

