@extends('admin.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
                    </div>
                    <br>
                    @endif
                  <div>
                    <h1 style="display:inline-block;">
                      General Settings      </h1>
                    <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
                  </div>
                  <div class="col-md-6">
                    <form role="form" action="{{ route('submit-sitesetting') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="box-body">
                          {{-- @dd($data); --}}

                        <div class="form-group">
                          <label>Site Title</label>
                          <input type="name" class="form-control" value="{{$data[0]->site_title}} " id="site_title" name="site_title" value="Who Cares Today" required>
                                    </div>

                        <div class="form-group">
                          <label>Email Address</label>
                          <input type="name" class="form-control"  value="{{$data[0]->email}}" id="email" name="email" value="info@rhstayfresh.com" required>
                                    </div>


                        <div class="form-group">
                          <label>Phone Number</label>
                          <input type="name" class="form-control"  value="{{$data[0]->phone}}" id="phone_number" name="phone_number" value="800-979-4326 " required>
                         </div>

              <!--           <div class="form-group">
                          <label>Direct Line Number</label>
                          <input type="name" class="form-control" id="phone_no" name="phone_no" value="858-674-7591" required>
                                    </div> -->

                        <div class="form-group">
                          <label>Address</label>
                          <input type="name" class="form-control" id="address" name="address"  required>
                         </div>



                        <div class="form-group">
                          <label>Footer Copyright Text</label>
                          <input type="text" class="form-control" value="{{$data[0]->copyrighttext}}" id="copyrightext" name="copyrightext" required>
                                    </div>

                        <div class="form-group">
                          <label>Footer text</label>
                          <textarea class="editor form-control" rows="3" id="footertext" name="footertext" >
                            {{$data[0]->footertext}}
                         </textarea>
                                    </div>

              <!--           <div class="form-group">
                          <label>Footer Heading</label>
                          <input type="name" class="form-control" id="footer_text" name="footer_text" value="Maryjane Supply Company And Its Brands Are Proud Sponsor Of The Following Quality Organizations And Associations" required>
                                    </div> -->


              <!--           <div class="form-group">
                          <label>Footer Brand Bar Image</label>
                          <div class="input-group-btn">
                            <div class="image-upload">
                              <img class="imgpath" src="http://myprojectstaging.com/custom/whocares_dev/uploads/settings/card-icon.png">
                              <div class="file-btn">
                                <input type="text" class="imageselect btn" value="card-icon.png" id="footer_brand_image" data-toggle="modal" data-target="#exampleModal" name="footer_brand_image" value="card-icon.png" readonly>
                                <label for="footer_brand_image" class="btn btn-info">Upload</label>
                              </div>
                            </div>
                          </div>
                                    </div> -->

                                    <div class="row base-img-sec">
                                        <div class="col-xl-4 col-lg-6">
                                           <div class="d-flex justify-content-between base-{{asset('backend/assets')}}/images-sec">
                                              <label>Header Logo</label>
                                           </div>
                                           <img id="base_image" style="width:50%"class="cursor-pointer base_img  img-rounded " onclick="document.querySelector('#header_logo').click()"
                                              src="{{asset('storage/media/'.$data[0]->header_logo)}}" alt="">
                                           <input type="file" onchange="getFile(this)" name="header_logo"  class="hidden"  id="header_logo">
                                           <span class="text-danger">{{ $errors->first('header_logo') }}</span>
                                        </div>
                                     </div>



                                    <div class="row base-img-sec">
                                        <div class="col-xl-4 col-lg-6">
                                           <div class="d-flex justify-content-between base-{{asset('backend/assets')}}/images-sec">
                                              <label>Fav Icon</label>
                                           </div>
                                           <img id="base_image" style="width:50%"class="cursor-pointer base_img  img-rounded " onclick="document.querySelector('#fav_icon').click()"
                                              src="{{asset('storage/media/'.$data[0]->fav_icon)}}" alt="">
                                           <input type="file" onchange="getFile(this)" name="fav_icon"  class="hidden"  id="fav_icon">
                                           <span class="text-danger">{{ $errors->first('fav_icon') }}</span>
                                        </div>
                                     </div>

                                    <div class="row base-img-sec">
                                        <div class="col-xl-4 col-lg-6">
                                           <div class="d-flex justify-content-between base-{{asset('backend/assets')}}/images-sec">
                                              <label>Footer Logo</label>
                                           </div>
                                           <img id="base_image" style="width:50%"class="cursor-pointer base_img  img-rounded " onclick="document.querySelector('#footer_logo').click()"
                                              src="{{asset('storage/media/'.$data[0]->footer_logo)}}" alt="">
                                           <input type="file" onchange="getFile(this)" name="footer_logo"  class="hidden"  id="footer_logo">
                                           <span class="text-danger">{{ $errors->first('footer_logo') }}</span>
                                        </div>
                                     </div>


                      </div>
                      <div class="box-footer">
                        <input type="hidden" name="id" value="<?php if(isset($data[0]->id)){ echo $data[0]->id;}?>">
                        <button type="submit" class="btn btn-primary"><?php if(isset($data[0]->id)){echo "UPDATE";}else{echo "Submit";}?></button>
                        <a href="http://myprojectstaging.com/custom/whocares_dev/admin" class="btn btn-danger">Dashboard</a>
                      </div>
                    </form>
                  </div>
                </div>
        </div>
	</div>
@endsection
