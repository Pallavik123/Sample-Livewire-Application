<div class="offset-3 col-6">
    <h1 class="h5">Dynamic Dependent  Dropdown</h1>
    <div class="mb-3">
        <select wire:model.live="selectedcountry" class="form-select">
            <option value="">Select Country</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>
    @if(!is_null($selectedcountry))
    <div class="mb-3">
        <select  class="form-select" wire:model="selectedsubcountry">
            <option value ="">Select Suncountry</option>
            @foreach($subcountries as $subcountry)
            <option value="{{ $subcountry->id }}">{{ $subcountry->name }}</option>
            @endforeach

        </select>

</div>
@endif

    {{-- <div class="mb-3">

    </div> --}}
   
</div>
