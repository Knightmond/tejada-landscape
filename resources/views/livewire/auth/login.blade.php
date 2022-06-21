<div>
    <div class="row">
        <div class="mx-auto col md-5">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label for="email-input" class="form-label">Email</label>
                    <input type="email" wire:model="email" id="email-input" placeholder="example@example.com">
                    @error('email')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="pass-input" class="form-label">Password</label>
                    <input type="password" wire:model="password" id="pass-input" placeholder="********">
                    @error('password')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>
</div>
