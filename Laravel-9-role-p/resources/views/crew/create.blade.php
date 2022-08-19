 @extends('layouts.admin')

@section('content')
    
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                   <h1> New Crew <h1>
 
                <div class="pull-right">
                     <a class="btn btn-success" href="{{ route('admin.crews.index') }}"> Crew list</a>
                </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.crews.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label  ">First Name</label>
                        <div class="col-md-8">

                             <div>
                               <input id="first_name" input type="text" name="first_name" placeholder="First Name">
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Last Name</label>
                        <div class="col-md-8">

                             <div>
                               <input id="Last_name" input type="text" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Contact Number</label>
                        <div class="col-md-8">

                             <div>
                               <input id="contact_no" input type="text" name="contact_no" placeholder="contact_no">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Nic No</label>
                        <div class="col-md-8">

                             <div>
                               <input id="nic_no" input type="text" name="nic_no" placeholder="nic_no">
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Sltb id</label>
                        <div class="col-md-8">

                             <div>
                               <input id="sltb_id" input type="text" name="sltb_id" placeholder="sltb_id">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Address</label>
                        <div class="col-md-8">

                             <div>
                               <input id="address" input type="text" name="address" placeholder="address">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Email</label>
                        <div class="col-md-8">

                             <div>
                               <input id="email" input type="text" name="email" placeholder="email">
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Job role</label>
                        <div class="col-md-8">

                             <div>
                               <select class="form-control" name="job_role">
                                    <option value="driver">Driver</option>
                                    <option value="conductor">Conductor</option>
                                  </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Policy no</label>
                        <div class="col-md-8">

                             <div>
                               <input id="policy_no" input type="text" name="policy_no" placeholder="policy no">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label">Your Pin no</label>
   
                        <div class="col-md-8">
                        <?php
    $fourRandomDigit = rand(1000,9999);
    echo $fourRandomDigit;
?>
                             <div>
                               <input id="pin_no" input type="text" name="pin_no" placeholder="pin no">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-4">
                            <button type="submit" class="btn btn-success ">Save Crew</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
@endsection
