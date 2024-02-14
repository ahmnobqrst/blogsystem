@extends('dashboard.layouts.layout')

@section('content')


<div class="container mt-5 px-2">

  <div class="card-header">
            
     <i class="fa fa-align-justify"></i>striped table

  </div>

  <div class="card-block">
     <table class="table table-striped table-dark" id="table_id">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserName</th>
      <th scope="col">Rule</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
</table>


  </div>
  

</div>



@endsection

<!--<div class="modal" tabindex="-1" role="dialog" id="deletemodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>-->





@push('javascripts')

 <script type="text/javascript">
    $(function(){
     
    var table = $('#table_id').DataTable( {

        processing: true,
        serverside: true,
        order:[
            [0,"desc"]
            ],
    ajax:"{{route('dashboard.users.all')}}",
    columns: [ {
        
        data:'id',
        name:'id',
    },
    {
        data:'name',
        name:'name',
    },
    {
        data:'email',
        name:'email',

    },
    {
        data:'status',
        name:'status',
    },

    {
        data:'action',
        name:'action',
    },
    /*
    {
        data:'action',
        name:'action',
        orderable:false,
        searcable:false,
    },*/ ]

  } );

});

 </script>

@endpush

 
  