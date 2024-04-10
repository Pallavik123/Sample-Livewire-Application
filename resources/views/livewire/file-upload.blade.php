<div class="offset-3 col-6">
    <h1>File Upload</h1>
    <form>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input wire:model="name" type="text" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">File</label>
            <input wire:model="file" type="file" class="form-control">
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button class="btn btn-primary">Upload</button>
    </form>
</div>
