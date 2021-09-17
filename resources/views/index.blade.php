@extends('layout')

@section('content')

 <div class="row">

    <!-- <div class="col-md-6">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ route('users.create')}}" class="btn btn-primary btn-sm"">Add</a>
    </div> -->

</div>
<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
        <tr class="table-warning">
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <!-- <th class="text-center">Action</th> -->
        </tr>
    </thead>
    <tbody>
        @if(!empty($user) && $user->count())
        @foreach($user as $key => $users)
        <tr>
            <!-- <td>{{$users->id}}</td> -->
            <td>{{ ++$key }}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->phone}}</td>

            <!-- <td class="text-center">
                <a href="{{ route('users.edit', $users->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Edit</a>
                <form action="{{ route('users.destroy', $users->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i>Delete</button>
                  </form>
            </td>-->
        </tr>
        @endforeach
        @else
                <tr>
                    <td colspan="10">There is no data.</td>
                </tr>
        @endif
    </tbody>

  </table>
</div>
{{ $user->links() }}
@endsection

</div>


