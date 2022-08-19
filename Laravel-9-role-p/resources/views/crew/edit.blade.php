 @extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.crews.index') }}"> Back</a>
            </div>
        </div>
    
<div class="card-body">
    <form action="{{ route('admin.crews.update',$crew->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                
                    <strong>First Name:</strong>   <input type="text" name="first_name" value="{{ $crew->first_name }}" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <input type="text" name="last_name" value="{{ $crew->last_name }}" class="form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact Number</strong>
                    <input type="text" name="contact_no" value="{{ $crew->contact_no }}" class="form-control" placeholder="Contact Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nic No</strong>
                    <input type="text" name="nic_no" value="{{ $crew->nic_no }}" class="form-control" placeholder="Nic No">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sltb id</strong>
                    <input type="text" name="sltb_id" value="{{ $crew->sltb_id }}" class="form-control" placeholder="sltb id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong>
                    <input type="text" name="address" value="{{ $crew->address }}" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email</strong>
                    <input type="text" name="email" value="{{ $crew->email }}" class="form-control" placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>job role</strong>
                    <input type="text" name="job_role" value="{{ $crew->job_role }}" class="form-control" placeholder="job role">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>policy no</strong>
                    <input type="text" name="policy_no" value="{{ $crew->policy_no }}" class="form-control" placeholder="policy no">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pin no</strong>
                    <input type="text" name="pin_no" value="{{ $crew->pin_no }}" class="form-control" placeholder="pin no">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Edit Crew</button>
            </div>
        </div>

    </form>
  </div>
</div>
@endsection
