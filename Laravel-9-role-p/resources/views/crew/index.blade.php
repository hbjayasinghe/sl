@extends('layouts.admin')

@section('content')
<div class="card">
            <div class="card-header">
                <div class="card-title">
                <h2> Bus Crews Details  </h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.crews.create') }}"> Create New Crew</a>
            </div>
        </div>
    </div> </div> 

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact No</th>
            <th>Nic No</th>
            <th>SLTB ID</th>
            <th>Address</th>
            <th>Email</th>
            <th>Job Role</th>
            <th>Policy No</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($crews as $crew)
        <tr>
            <td>{{ $crew->id }}</td>
            <td>{{ $crew->first_name }}</td>
            <td>{{ $crew->last_name }}</td>
            <td>{{ $crew->contact_no }}</td>
            <td>{{ $crew->nic_no }}</td>
            <td>{{ $crew->sltb_id }}</td>
            <td>{{ $crew->address }}</td>
            <td>{{ $crew->email }}</td>
            <td>{{ $crew->job_role }}</td>
            <td>{{ $crew->policy_no }}</td>
            <td>
                <form action="{{ route('admin.crews.destroy',$crew->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.crews.show',$crew->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.crews.edit',$crew->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $crews->links() !!}

@endsection
