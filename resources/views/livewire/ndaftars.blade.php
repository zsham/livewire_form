<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.ndaftar2')
    @else
        @include('livewire.ndaftar1')
    @endif
  
    <div class="box-body">
        <div class="table-responsive">
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date Created</th>
                <th>Date Update</th>
                <th width="150px">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                <button wire:click="edit4({{ $user->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete5({{ $user->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div></div>
</div>