<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Body</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($register as $registering)
            <tr>
                <td>{{ $registering->id }}</td>
                <td>{{ $registering->title }}</td>
                <td>{{ $registering->body }}</td>
                <td>
                <button wire:click="edit({{ $registering->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $registering->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>