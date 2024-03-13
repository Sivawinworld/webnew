<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
    .center{
        margin:auto;
        width:50%;
        border:2px solid white;
        text-align:center;
        margin-top:40px;
    }
    .font_size
    {
        text-align:center;5rfce34
        font-size:40px;
        padding-top:20px;
    }
    .image_size
    {
        width:150px;
        height: 150px;
    }888888888
    .th_color
    {
        background:skyblue;
    }
    .th_deg
    {
        padding: 30px;
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





            <h2 class="font_size">All Product</h2>
            <div style="padding-left:400px;padding-bottom:30px;">
            <form action="{{url('search_product')}}"method="get">
                @csrf
                <input type="text"style="color:black;"name="search2">
                <input type="submit"value="search" class="btn btn-primary">
            </form>
            </div>


            <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               
               <br><br>
               <div>
                  <form action="{{url('product_search')}}"method="GET">
                     @csrf
                     <input style="width:500px;" type="text"name="search" placeholder="search for the product">
                     <input type="submit" value="search">
                  </form>
               </div>
            </div>
            <div class="row">
               @foreach($product as $products)


   
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           Product Details
                           </a>
                           <form action="{{url('add_cart',$products->id)}}"method="POST">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                              
                              <input type="number" name="quantity" value="1"min="1" style="width:100px">
                              
                                 </div>
                                 <div class="col-md-4">
                                    <input type="submit" value="Add to Cart">
                                 </div>
                              </div>

                           </form>


                           
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount_price!=null)

                        <h6 style="color:blue">
                        Discount price<br>
                           Rs {{$products->discount_price}}
                        </h6>
                        <h6 style="text-decoration:line-through;color:red">
                        price<br>
                           Rs {{$products->price}}
                        </h6>
                        @else

                        <h6 style="color:blue">
                        price<br>
                           Rs {{$products->price}}
                        </h6>
                        @endif


                        
                     </div>
                  </div>
               </div>
               @endforeach
               <span style="padding-top:20px">

                 </span>
         </div>
      </section>




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