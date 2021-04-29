@extends('layouts.public_app')

@section('main_con')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white text-center">
                        <h2><b></b></h2>
                    </div>
                    <div class="card-body">
                        @php $users = DB::table('users')->get(); @endphp
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Last Seen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (Cache::has('is_online' . $user->id))
                                                    <span class="text-success">Online</span>
                                                @else
                                                    <span class="text-secondary">Offline</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (Cache::has('is_online' . $user->id))
                                                    <span class="text-success">Online</span>
                                                @else
                                                    {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- rating btn start --}}
    {{-- <form action="{{url('user/rating')}}" method="post">
        @csrf
    <fieldset class="rating pb-10">
        <input type="radio" id="star5" name="rating" value="5" checked/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>   
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form> --}}
    {{-- rating btn end --}}
@endsection
