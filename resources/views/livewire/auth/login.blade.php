<div class="mt-4">
    <h1 class="text-center">Login</h1>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="mx-auto col md-5">
                <form wire:submit.prevent="login">
                    <div class="form-group mb-3">
                        <label for="email-input" class="form-label">Email</label>
                        <input class="form-control" type="email" wire:model="email" id="email-input" placeholder="example@example.com">
                        @error('email')<span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="pass-input" class="form-label">Password</label>
                        <input class="form-control" type="password" wire:model="password" id="pass-input" placeholder="********">
                        @error('password')<span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <button style="color:black; padding-left:60px;padding-right:60px;" type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                        <div class="col">
                            <a style="color:black; padding-left:20px;padding-right:20px;" href="{{route("landscape.index")}}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
