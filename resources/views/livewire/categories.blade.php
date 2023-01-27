<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.categories2')
    @else
        @include('livewire.categories1')
    @endif
  
    <div class="box-body">
        <div class="table-responsive">
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th width="150px">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                <button wire:click="edit4({{ $category->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete5({{ $category->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div></div>
</div>