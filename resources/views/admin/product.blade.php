<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
    .div_center
    {
        text-align:center;
        padding-top:40px;
    }
    .font_size
    {
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color
    {
        color:black;
        padding-bottom:20px;
    }
    label
    {
        display:inline-block;
        width: 200px;
    }
    .div_design
    {
        padding-bottom:15px;
    }
    

  </style>
     </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}

            </div>
            @endif

            <div class="div_center">
                <h1 class="font_size">Add Image</h1>
                <form action="{{url('/add_product')}}"method="POST"enctype="multipart/form-data">
                @csrf
                <div class="div_design">

                <label>Image name</label>
                <input class="text_color" type="text" name="title"placeholder="write a title" required="">
                </div>
                <div class="div_design">
                <label>Select Image: </label>
                <input type="file" name="image"required="">
                </div>
                <div class="div_design">
                <input type="submit" value="Add Image"class="btn btn-primary">
                </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Made By <a href="https://www.linkedin.com/in/siva-shankar-474080241/" target="_blank">SIVAWINWORLD</a> </span>
            </div>
          </footer>
            </div>      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
      <!-- End custom js for this page -->
  </body>
</html>