<form>
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        <div class="col-md-6">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
     </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        <div class="col-md-6">
        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter Your Email" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
     </div>

     <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        <div class="col-md-6">
        <input type="password" class="form-control" id="exampleFormControlInput3" placeholder="Enter User Password" wire:model="password">
        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
     </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" id="exampleFormControlInput4" placeholder="Enter Users Confirm password" name="password_confirmation" wire:model="password_confirmation">
        </div>
     </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button wire:click.prevent="update2()" class="btn btn-dark">Update</button>
            <button wire:click.prevent="cancel3()" class="btn btn-danger">Cancel</button>
        </button>
        </div>
    </div>
</form>