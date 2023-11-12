<div>
    <input type="text" wire:keyup="search" wire:model.debounce.100ms="data" placeholder="Search....">

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @if(empty($results))
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
            @else
            @foreach($results as $result)
            <tr>
                <td>{{$result->name}}</td>
                <td>{{$result->email}}</td>
            </tr>
            @endforeach
            @endif

        </tbody>
    </table>
    @if(empty($results))
        <div class="d-flex justify-content-center">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div class="d-flex justify-content-center">
            {{ $results->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>