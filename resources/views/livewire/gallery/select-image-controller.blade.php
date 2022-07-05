@if (Auth::check("web"))
    @include('livewire.components.admin-navbar')
    <div class="container">
        <div style="display:flex; flex-wrap: wrap; justify-content:space-evenly;">
            @if (count($this->photos)>0)
                @foreach ($this->photos as $photo)
                    <div class="card mt-4 mb-4">
                        <img src="{{Storage::disk("public")->url($photo->picture)}}"
                            style="object-fit: cover; width:250px; height:300px;" class="card-img-top">
                        <div class="card-body text-center">
                            <a href="{{ route("edit.images", $photo) }}" title="Show/Hide Image"><i style="font-size: 23px" class="fa fa-edit"></i></a>
                            @if ($photo->active)
                                <h6>Active</h6>
                            @else
                                <h6>Inactive</h6>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <h1>No Images, try to add some</h1>
            @endif
        </div>
    </div>
@else
    {{route("landscape.index")}}
@endif
