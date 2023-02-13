<div>
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-body">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif

                @if($updatePost)
                    @include('livewire.update')
                @else
                    @include('livewire.create')
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-15">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Last name</th>
                                <th>First Name</th>
                                <th>Address</th>
                                <th>Year</th>
                                <th>Course</th>
                                <th>...</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (count($posts) > 0)
                                @foreach ($posts as $rs)
                                    <tr>
                                        <td>
                                            {{$rs->lastname}}
                                        </td>
                                        <td>
                                            {{$rs->firstname}}
                                        </td>
                                        <td>
                                            {{$rs->address}}
                                        </td>
                                        <td>
                                            {{$rs->year}}
                                        </td>
                                        <td>
                                            {{$rs->course}}
                                        </td>
                                        <td>
                                            <button wire:click="edit({{$rs->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button onclick="deletePost({{$rs->id}})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center">
                                        No Student List Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deletePost(id){
            if(confirm("Are you sure to delete this record?"))
                window.livewire.emit('deletePost',id);
        }
    </script>
</div>
