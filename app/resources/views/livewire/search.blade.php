<div>
    <input type="text" wire:keyup="search" wire:model.debounce.100ms="data" placeholder="Search....">

    @if($results)
      @foreach($results as $result)

       <p>{{$result->name}}</p>

      @endforeach
    @endif
</div>
