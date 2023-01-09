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
        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter email" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
     </div>

     <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        <div class="col-md-6">
        <input type="password" class="form-control" id="exampleFormControlInput3" placeholder="Enter Users password" wire:model="password">
        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
     </div>

    <!--div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        @error('password-confirm')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
     </div-->

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button wire:click.prevent="store1()" class="btn btn-success">Daftar Pengguna</button>
        </div>
    </div>
</form>