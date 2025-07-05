<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-3 mt-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="/admin">Dashboard</a></li>
                <li class="list-group-item"><a href="/admin/blog/create">Blog Create Form</a></li>

            </ul>
        </div>
        <x-card-wrapper class="col-9" style="min-height: 70vh">
            <div>{{ $slot }}</div>
        </x-card-wrapper>
        </div>
    </div>
</x-layout>
