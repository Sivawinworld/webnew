<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Images</span>
               </h2>
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
                     
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>
                        


                        
                     </div>
                  </div>
               </div>
               @endforeach
               <span style="padding-top:20px">

                 </span>
         </div>
      </section>