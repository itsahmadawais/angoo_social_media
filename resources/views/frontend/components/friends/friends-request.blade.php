<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h4>Friends Request</h4>
                </div>
                @foreach($friends_request as $p)
                    <div class="col-md-2">
                        <div class="add-friend-card card mt-1 mb-1">
                            <div class="card-body">
                                <a href="javscript:void(0)">
                                    <img src="{{asset('storage/users-avatar/avatar.png')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="javascript:void(0)" class="name">
                                    <p class="m-0">{{$p->name}}</p>
                                </a>
                                <p class="text-muted m-0">2 mutual friends</p>
                                <div class="d-grid gap-2 mt-3 mb-3">
                                    <form action="{{url('friends/request/accept')}}" method="POST" class="w-100">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$p->friend_request_id}}">
                                        <button type="submit" class="btn btn-primary w-100">Accept Request</button>
                                    </form>
                                    <form action="{{url('friends/request/delete')}}" method="POST" class="w-100">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$p->friend_request_id}}">
                                        <button type="submit" class="btn btn-dark w-100">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@section('script')
    
@endsection