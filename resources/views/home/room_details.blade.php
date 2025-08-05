<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
     @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8">
                  <div id="serv_hover"  class="room">
                     <div style="padding: 20px;" class="room_img">
                        <figure><img style="height: 300px; width:800px;" src="/room/{{$room->image}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>{{$room->room_title}}</h3>
                        <p style="padding: 12px;">{{$room->description}}</p>
                        <h4 style="padding: 12px;">Free Wifi: {{$room->wifi}}</h4>
                        <h4 style="padding: 12px;">Room Type: {{$room->room_type}}</h4>
                        <h3 style="padding: 12px;">Price: {{$room->price}}</h3>

                     </div>
                  </div>
               </div>
               
               
            </div>
         </div>
      </div>















   
      <!--  footer -->
     @include('home.footer')
   </body>
</html>