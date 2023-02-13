
<form>
    <input type="hidden" wire:model="post_id">
    <div class="form-group mb-3">
        <label for="postLastName">Last Name:</label>
        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="postLastName" placeholder="Enter LastName" wire:model="lastname">
        @error('lastname') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postFirstName">First Name:</label>
        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="FirstName" placeholder="Enter FirstName" wire:model="firstname">
        @error('firstname') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postAddress">Address:</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="postAddress" placeholder="Enter Address" wire:model="address">
        @error('address') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postYear">Year:</label>
        <input type="text" class="form-control @error('year') is-invalid @enderror" id="postYear" placeholder="Enter Year" wire:model="year">
        @error('year') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postCourse">Course:</label>
        <input type="text" class="form-control @error('course') is-invalid @enderror" id="postCourse" placeholder="Enter Course" wire:model="course">
        @error('course') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</form>
