<div class="alert alert-danger alert-dismissible fade show" role="alert">
												
    <strong>Error!</strong> <br/> 
    @foreach ($errors->all() as $error)
        <p class="text-danger"> {{ $error }} </p>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    
</div>