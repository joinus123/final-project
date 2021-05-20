@extends('admin.master')

@section('content')
    <div class="content">

                <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Bussniess Name</label>
                                                    <input type="text" name="business_name" class="form-control" placeholder="Bussniess" value="{{ isset($data[0]->business_name)?$data[0]->business_name:NULL }}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{ isset($data[0]->username)?$data[0]->username:NULL }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" name="email_address" class="form-control" placeholder="Email" value="{{ isset($data[0]->email_address)?$data[0]->email_address:NULL }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control" placeholder="Home Address" value="{{ isset($data[0]->address)?$data[0]->address:NULL }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                     <div class="form-group">
                                    <label>Profile Picture<br/> (<span class="text-danger">Use Good Quality Images</span>)</label>
                                    <div class="row base-img-sec">
                                        <div class="col-xl-4 col-lg-6">
                                           <div class="d-flex justify-content-between base-{{asset('backend/assets')}}/images-sec">
                                              <label>Profile Image</label>
                                           </div>

                                           <img id="base_image" style="width:30%"class="cursor-pointer base_img  img-rounded " onclick="document.querySelector('#profile_image').click()"
                                              {{-- src="{{asset('storage/media/'.$data[0]->profile_image)}}" alt=""> --}}
                                              src="" alt="">
                                           <input type="file" onchange="getFile(this)" name="profile_image"  class="hidden"  id="profile_image">
                                           <span class="text-danger">{{ $errors->first('footer_image') }}</span>
                                        </div>
                                     </div>
                                  </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php if(isset($data[0]->id)){ echo $data[0]->id;}?>">
                                <button type="submit" class="btn btn-info btn-fill pull-right"><?php if(isset($data[0]->id)){echo "Update Profile";}else{echo "Submit";}?></button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                        </div>
                        <div class="content">
                            <div class="author">
                               <a href="#">
                                <img class="avatar border-gray" src="...">

                                <h4 class="title">john smith<br>
                                </h4>
                            </a>
                        </div>
                        <p class="description text-center">admin@demo.com<br>
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Update Password</h4>
                    </div>
                    <div class="content">
                        <form role="form" action="http://myprojectstaging.com/custom/whocares_dev/admin/dashboard/update_password" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control" placeholder="New Password" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" name="cnf_password" class="form-control" placeholder="Confirm New Password" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Password</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

            </div>
            </div>
        </div>
	</div>
@endsection
