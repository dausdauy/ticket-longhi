<div class="card">
        <div class="card-header d-flex justify-content-between align-items-baseline flex-wrap">
            <h2>Material</h2>
            <button class="btn btn-success" data-toggle="modal" data-target="#ModalAdd">Add Data</button>
        </div> 
            <div class="card-body">
                <table class="table table-hover dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>File PDF</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($knowledges as $knowledge)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$knowledge->title}}</td>
                                <td>{{$knowledge->name_categories}}</td>
                                <td>
                                @if($knowledge->file)
                                    <a href="{{ url('/uploads/'.$knowledge->file) }}" target="_blank">
                                        {{$knowledge->title}}
                                    </a>  
                                @endif
                                </td>
                                <td>
                                <div class="btn-group-sm dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Option
                                    </button>
                                        <div class="dropdown-menu" style="z-index:1000;">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <form action="{{ route('knowledges.destroy', $knowledge->id)}}" method="post">
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