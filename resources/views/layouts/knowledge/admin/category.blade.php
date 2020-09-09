<div class="card">
        <div class="card-header d-flex justify-content-between align-items-baseline flex-wrap">
        <h2>Category</h2>
        <button class="btn btn-success" data-toggle="modal" data-target="#ModalAdd1">Add Category</button>
        </div> 
            <div class="card-body">
                <table class="table table-hover dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $c)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$c->name_categories}}</td>
                                </td>
                                <td>
                                <div class="btn-group-sm dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Option
                                    </button>
                                        <div class="dropdown-menu" style="z-index:1000;">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <form action="{{ route('categories.destroy', $c->id)}}" method="post">
                                                {{ csrf_field() }}
                                                @method('DELETE')
                                                <button class="dropdown-item" href="#" onclick="return confirm('Sure?');">Delete</button>
                                            </form>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>        
                </table>
            </div>
        </div>
    </div>