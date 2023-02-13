

<form>
    <div class="form-group mb-3">
        <label for="postLastName">Last Name:</label>
        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="postLastName" placeholder="Enter Last Name" wire:model="lastname">
        @error('lastname') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postFirstName">First Name:</label>
        <textarea class="form-control @error('firstName') is-invalid @enderror" id="postFirstName" wire:model="firstname" placeholder="Enter First Name"></textarea>
        @error('firstname') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postAddress">Address:</label>
        <textarea class="form-control @error('address') is-invalid @enderror" id="postAddress" wire:model="address" placeholder="Enter Address"></textarea>
        @error('address') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postYear">Year:</label>
        <select name="year" id="" class="form-control" wire:model="year" required>
            <option hidden>Year Level</option>
            <option disabled>Year Level</option>
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Fourth  Year</option>
        </select>
        <textarea class="form-control @error('year') is-invalid @enderror" id="postYear" wire:model="year" placeholder="Enter Year"></textarea>

        @error('year') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postCourse">Course:</label>
        <select name="course" id="" class="form-control" wire:model="course" required>
            <option hidden>Course</option>
            <option disabled>Course</option>
            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
            <option value="Bachelor of Science Nursing">Bachelor of Science Nursing</option>
            <option value="Bachelor of Science Psychology">Bachelor of Science Psychology</option>
            <option value="Bachelor of Science Accountacy">Bachelor of Science Accountacy</option>
        </select>
        <textarea class="form-control @error('course') is-invalid @enderror" id="postCourse" wire:model="course" placeholder="Enter Course"></textarea>

        @error('course') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="d-grid gap-2">
        <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
    </div>
</form>
