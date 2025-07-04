@props(['name'=>''])

@session($name)
        <h3 class="alert alert-success text-center">
            {{ session($name) }}
        </h3>
    @endsession
