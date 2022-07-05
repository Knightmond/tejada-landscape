<div class="container">
    <form wire:submit.prevent="edit">
        <div class="card" style="width: 36rem;">
            <img src="{{Storage::disk("public")->url($photo->picture)}}" class="card-img-top img-fluid">
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        @if ($photo->active)
                            <h3>Current state: Active</h3>
                        @else
                            <h3>Current state: Inactive</h3>
                        @endif
                    </div>
                    <div class="col">
                        <label for="active">
                            Activate?
                            <input type="checkbox" name="active" wire:model="active">
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <button style="color: black" class="btn btn-primary" type="submit">Save</button>
                    </div>
                    <div class="col">
                        <a style="color: black" href="{{route("select.images")}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
