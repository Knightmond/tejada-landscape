<?php require "3-protect.php" ?>

<div class="container">
    <div class="row mt-5">
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
                        <label for="uploadPhoto">Upload Image</label>
                        <input wire:model="picture" type="file" class="form-control-file" id="uploadPhoto">
                        @error("picture") <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <button wire:loading.attr="disabled" wire:target="picture" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Upload</button>
                    <a href="{{ route("landscape.index") }}" class="btn btn-secondary btn-sm">Back</a>
                </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
