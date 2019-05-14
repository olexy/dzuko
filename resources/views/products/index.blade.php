@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><h4>Product List</h4></div>

            <div class="card-body">
                <div align="right">
                    <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Product</button>
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

        // {{ asset('uploads') }}
    });

</script>
@endsection

