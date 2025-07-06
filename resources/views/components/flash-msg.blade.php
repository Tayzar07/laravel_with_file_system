@props(['name'=>''])

@session($name)
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session($name) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endsession
