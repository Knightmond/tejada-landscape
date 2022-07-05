<div>
    @include('livewire.components.admin-navbar')
    <div class="row mt-3">
        <div class="col-4"></div>
        <div class="col-4 pl-5">
            <div>
                <form wire:submit.prevent="save">
                    @if ($picture != null)
                        <img style="width:400px;height:400px;" src="{{ $picture->temporaryUrl() }}" alt="">
                    @else
                        <h1 class="text-center">No image</h1>
                    @endif
                    <div class="form-group">
                        <label for="uploadPhoto" class="form-label">Upload Image</label>
                        <input style="padding-bottom: 2.25rem;" class="form-control" id="uploadPhoto" wire:model="picture" type="file" class="form-control" id="uploadPhoto">
                        @error("picture") <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <button wire:loading.attr="disabled" wire:target="picture" style="color:black;" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Upload</button>
                </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

