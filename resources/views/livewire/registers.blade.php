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
            @foreach($registers as $register)
            <tr>
                <td>{{ $register->id }}</td>
                <td>{{ $register->title }}</td>
                <td>{{ $register->body }}</td>
                <td>
                <button wire:click="edit({{ $register->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $register->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>