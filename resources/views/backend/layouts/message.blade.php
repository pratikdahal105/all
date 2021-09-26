@if(session('success'))

    <div class="alert-success">
        <i class="fa fa-check"></i>{{session('success')}}
    </div>
@endif

@if(session('error'))

    <div class="alert-danger">
        <i class="fa fa-times"></i>{{session('error')}}
    </div>
@endif