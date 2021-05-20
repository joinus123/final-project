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
                  Home
               </h1>
               <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
            </div>
            <div class="col-md-6">
               <form  action="" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                     <div class="row base-img-sec">
                        <div class="col-xl-4 col-lg-6">
                           <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                              <label>Section One Logo Image</label>
                           </div>
                           <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#section_one_logo_img').click()"
                              src="" alt="">
                           <input type="file" onchange="getFile(this)" name="section_one_logo_img"  class="hidden"  id="section_one_logo_img">
                           <span class="text-danger">{{ $errors->first('section_one_logo_img') }}</span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Home Page Section One Text</label>
                        <textarea class="editor form-control" rows="3" id="section_one_text"    name="section_one_text" required>


                        </textarea>
                     </div>
                     <div class="row base-img-sec">
                        <div class="col-xl-4 col-lg-6">
                           <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                              <label>Section One Banner Image</label>
                           </div>
                           <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#section_one_banner_img').click()"
                              src="" alt="">
                           <input type="file" onchange="getFile(this)" name="section_one_banner_img"  class="hidden"  id="section_one_banner_img">
                           <span class="text-danger">{{ $errors->first('section_one_banner_img') }}</span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Section One Box1 Heading</label>
                        <textarea class="editor form-control" rows="3" id="section_one_box_one_heading"  name="section_one_box_one_heading" required>
                        {{ $errors->first('section_one_box_one_heading') }}

                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Section One Box1 Text</label>
                        <textarea class="editor form-control" rows="3" id="section_one_box_two_heading" name="section_one_box_one_text" required>
                        {{ $errors->first('section_one_box_one_text') }}

                        </textarea>
                     </div>

                     <div class="form-group">
                        <label>Section One Box2 Heading</label>
                        <textarea class="editor form-control" rows="3" id="section_one_box_three_heading" name="section_one_box_two_heading" required>
                        {{ $errors->first('section_one_box_two_heading') }}

                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Section One Box2 Text</label>
                        <textarea class="editor form-control" rows="3" id="section_one_box_two_text" name="section_one_box_two_text" required>
                       {{ $errors->first('section_one_box2_text') }}

                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Section One Box3 Heading</label>
                        <textarea class="editor form-control" rows="3" id="section_one_box_four_heading" name="section_one_box_three_heading" required>
                         {{ $errors->first('section_one_box_three_heading') }}

                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Section One Box3 Text</label>
                        <textarea class="editor form-control" rows="3" id="section_one_box_three_text" name="section_one_box_three_text" required>
                        {{ $errors->first('section_one_box_three_text') }}

                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Section Two Heading</label>

                        <input type="name" class="form-control" id="section_two_heading" name="section_two_heading"  required>

                     </div>
                     <div class="form-group">
                        <label>Section Two Text</label>
                        <textarea class="editor form-control" rows="3" id="section_two_text"  name="section_two_text" required>
                        {{ $errors->first('section_two_text') }}
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Section Three Heading</label>
                        <textarea class="editor form-control" rows="3" id="section_three_heading" name="section_three_heading" required>
                            {{ $errors->first('section_one_box_two_heading') }}

                        </textarea>
                     </div>
                     <div class="row base-img-sec">
                        <div class="col-xl-4 col-lg-6">
                           <div class="d-flex justify-content-between base-{{asset('backend/assets')}}/images-sec">
                              <label>Section Three Image</label>
                           </div>
                           <img id="base_image" style="width:50%"class="cursor-pointer base_img  img-rounded " onclick="document.querySelector('#section_three_img').click()"
                              src="" alt="">
                           <input type="file" onchange="getFile(this)" name="section_three_img"  class="hidden"  id="section_three_img">
                           <span class="text-danger">{{ $errors->first('section_three_img') }}</span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Section four Heading</label>
                        <input type="name" class="form-control"  value="" id="section_four_heading" name="section_four_heading" required>
                        {{ $errors->first('section_four_heading') }}

                     </div>

                  <div class="box-footer">
                      <input type="hidden" name="id" value="<?php if(isset($data[0]->home_page_id)){ echo $data[0]->home_page_id;}?>">
                     <button type="submit" class="btn btn-primary"><?php if(isset($data[0]->home_page_id)){echo "UPDATE";}else{echo "Submit";}?></button>
                     <a href="" class="btn btn-danger">Dashboard</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
