@extends('layouts.app1')
<!-- Assuming you have a layout file -->

@section('content')
<section class="contact_section layout_padding">  
<div class="container">

   <h3 class="title"> Air Conditioner And Appliance </h3>
   <h2 class="subtitle"> We specialise in the repair of home appliances such as geysers, microwaves, washing machines, refrigerators more services. Our skilled technicians are skilled at accurately diagnosing and correcting problems.</h2>

   <div class="products-container">

      <div class="product" data-name="p-1">
      <img src="{{ asset('images/airconditioner.png') }}" alt="">
         <h3>Air Conditioner</h3>
      </div>

      <div class="product" data-name="p-2">
      <img src="{{ asset('images/coolersense-product-range.png') }}" alt="">
        
         <h3>water Cooler</h3>
         
      </div>

      <div class="product" data-name="p-3">
      <img src="{{ asset('images/Refrigerator.png') }}" alt="">
         
         <h3>Refrigerator</h3>
         
      </div>

      <div class="product" data-name="p-4">
      <img src="{{ asset('images/washing_machine.png') }}" alt=""style="height: 250px; width: 250px ">
        
         <h3>Washing Machine</h3>
         
      </div>

      <div class="product" data-name="p-5">
      <img src="{{ asset('images/geyser_service.png') }}" alt="">
      
         <h3>Geyser</h3>
         
      </div>

      <div class="product" data-name="p-6">
      <img src="{{ asset('images/microwave.png') }}" alt=""style="height: 250px; width: 250px ">
         
         <h3>Microwave</h3>
        
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="{{ asset('images/airconditioner.png') }}" alt="">
      <h3>Air Conditioner</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
        <!--<span>( 250 )</span> -->
      </div>
      <p>Get your appliances fixed without hassle!</p>
      <!--<div class="price">0.00</div> -->
      <div class="buttons">
      <a href="{{ url('/service1/post') }}" class="buy">Book Service</a>

      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="{{ asset('images/coolersense-product-range.png') }}" alt="">
      <h3>water Cooler</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
        <!--<span>( 250 )</span> -->
      </div>
      <p>Get your appliances fixed without hassle!</p>
      <!--<div class="price">0.00</div> -->
      <div class="buttons">
      <a href="{{ url('/service1/post') }}" class="buy">Book Service</a>

         
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="{{ asset('images/Refrigerator.png') }}" alt="">
      <h3>Refrigerator</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <!--<span>( 250 )</span> -->
      </div>
      <p>Get your appliances fixed without hassle!</p>
      <!--<div class="price">0.00</div> -->
      <div class="buttons">
      <a href="{{ url('/service1/post') }}" class="buy">Book Service</a>

      </div>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="{{ asset('images/washing_machine.png') }}" alt=""style="height: 250px; width: 250px ">
      <h3>Washing Machine</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      
      </div>
      <p>Get your appliances fixed without hassle!</p>
      <!--<div class="price">0.00</div> -->
      <div class="buttons">
      <a href="{{ url('/service1/post') }}" class="buy">Book Service</a>

      </div>
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src="{{ asset('images/geyser_service.png') }}" alt="">
      <h3>Geyser</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      
      </div>
      <p>Get your appliances fixed without hassle!</p>
      <!--<div class="price">0.00</div> -->
      <div class="buttons">
      <a href="{{ url('/service1/post') }}" class="buy">Book Service</a>

      </div>
   </div>

   <div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      <img src="{{ asset('images/microwave.png') }}" alt=""style="height: 250px; width: 250px ">
      <h3>Microwave</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
       
      </div>
      <p>Get your appliances fixed without hassle!</p>
    <!--<div class="price">0.00</div> -->
      <div class="buttons">
      <a href="{{ url('/service1/post') }}" class="buy">Book Service</a>

      </div>
   </div>
   <!-- Footer -->
   <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3 id="app1" data-key="app1">Download Our App</h3>
                    <p id="app2" data-key="app2">Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="{{ asset('images/play-store.png')}}">
                        <img src="{{ asset('images/app-store.png')}}">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ asset('images/footerlogo.png')}}">
                    <p id="Purpose" data-key="Purpose">Our Purpose Is To Sustainably Make the Pleasure and Benefits of
                        Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3 id="Useful" data-key="Useful">Useful Links</h3>
                    <ul>
                        <li id="Coupons" data-key="Coupons">Coupons</li>
                        <li id="Blog_Post" data-key="Blog_Post">Blog Post</li>
                        <li id="Return_Policy" data-key="Return_Policy">Return Policy</li>
                        <li id="Join_Affiliate" data-key="Join_Affiliate">Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3 id="Follow_Us" data-key="Follow_Us">Follow Us</h3>
                    <ul>
                        <li id="Facebook" data-key="Facebook">Facebook</li>
                        <li id="Twitter" data-key="Twitter">Twitter</li>
                        <li id="Instagram" data-key="Instagram">Instagram</li>
                        <li id="Youtube" data-key="Youtube">Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p id="copyright" data-key="copyright">Copyright 2024 - NorthSouth University</p>
        </div>

</div>
</section>


<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');

* {
   font-family: 'Nunito', sans-serif;
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   outline: none;
   border: none;
   text-decoration: none;
   transition: all 0.3s ease;
   text-transform: capitalize;
}

html {
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
}

body {
   background: radial-gradient(circle at center, #fff, #ffe6e6);
}

.container {
   max-width: 1200px;
   margin: 0 auto;
   padding: 3rem 2rem;
}

.container .title {
   font-size: 3.5rem;
   color: #333;
   margin-bottom: 3rem;
   text-transform: uppercase;
   text-align: center;
   letter-spacing: 0.1rem;
}

.container .products-container {
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2.5rem;
}

.container .products-container .product {
   text-align: center;
   padding: 3rem 2rem;
   background: #ffffff;
   border-radius: 12px;
   box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
   outline: 0.1rem solid #ddd;
   outline-offset: -1.5rem;
   cursor: pointer;
   transform: perspective(800px) rotateX(0deg) rotateY(0deg);
   transition: transform 0.3s ease, box-shadow 0.3s ease, outline-offset 0.3s;
}

.container .products-container .product:hover {
   transform: perspective(800px) rotateX(-5deg) rotateY(5deg) scale(1.05);
   box-shadow: 0 1.5rem 2.5rem rgba(0, 0, 0, 0.2);
   outline: 0.2rem solid #555;
   outline-offset: 0;
}

.container .products-container .product img {
   height: 25rem;
   transition: transform 0.5s ease;
}

.container .products-container .product:hover img {
   transform: scale(1.1);
}

.container .products-container .product h3 {
   padding: 0.5rem 0;
   font-size: 2rem;
   color: #444;
   transition: color 0.3s ease;
}

.container .products-container .product:hover h3 {
   color: #27ae60;
}

.container .products-container .product .price {
   font-size: 2rem;
   color: #444;
}

.products-preview {
   position: fixed;
   top: 0;
   left: 0;
   min-height: 100vh;
   width: 100%;
   background: rgba(0, 0, 0, 0.8);
   display: none;
   align-items: center;
   justify-content: center;
}

.products-preview .preview {
   display: none;
   padding: 2rem;
   text-align: center;
   background: #fff;
   position: relative;
   margin: 2rem;
   width: 40rem;
   border-radius: 10px;
   transform: scale(0.9);
   animation: previewAnimation 0.4s forwards;
}

@keyframes previewAnimation {
   0% {
      transform: scale(0.9);
      opacity: 0;
   }
   100% {
      transform: scale(1);
      opacity: 1;
   }
}

.products-preview .preview.active {
   display: inline-block;
}

.products-preview .preview img {
   height: 30rem;
}

.products-preview .preview .fa-times {
   position: absolute;
   top: 1rem;
   right: 1.5rem;
   cursor: pointer;
   color: #444;
   font-size: 4rem;
   transition: color 0.3s, transform 0.3s;
}

.products-preview .preview .fa-times:hover {
   transform: rotate(90deg);
   color: #ff0000;
}

.products-preview .preview h3 {
   color: #444;
   padding: 0.5rem 0;
   font-size: 2.5rem;
}

.products-preview .preview .stars {
   padding: 1rem 0;
   font-size: 1.7rem;
}

.products-preview .preview .stars i {
   color: #27ae60;
}

.products-preview .preview .stars span {
   color: #999;
}

.products-preview .preview p {
   line-height: 1.5;
   padding: 1rem 0;
   font-size: 1.6rem;
   color: #777;
}

.products-preview .preview .price {
   padding: 1rem 0;
   font-size: 2.5rem;
   color: #27ae60;
}

.products-preview .preview .buttons {
   display: flex;
   gap: 1.5rem;
   flex-wrap: wrap;
   margin-top: 1rem;
}

.products-preview .preview .buttons a {
   flex: 1 1 16rem;
   padding: 1rem;
   font-size: 1.8rem;
   color: #444;
   border: 0.1rem solid #444;
   border-radius: 5px;
   transition: background 0.3s ease, color 0.3s;
}

.products-preview .preview .buttons a.cart {
   background: #444;
   color: #fff;
}

.products-preview .preview .buttons a.cart:hover {
   background: #111;
}

.products-preview .preview .buttons a.buy:hover {
   background: #444;
   color: #fff;
}

.subtitle {
   font-size: 24px;
   line-height: 1.5;
   color: blueviolet;
   opacity: 0;
   transform: translateY(20px);
   animation: fadeInSlideUp 1s forwards;
}

@keyframes fadeInSlideUp {
   0% {
      opacity: 0;
      transform: translateY(20px);
   }
   100% {
      opacity: 1;
      transform: translateY(0);
   }
}

@media (max-width: 991px) {
   html {
      font-size: 55%;
   }
}

@media (max-width: 768px) {
   .products-preview .preview img {
      height: 25rem;
   }
}

@media (max-width: 450px) {
   html {
      font-size: 50%;
   }
}

@media (max-width: 600px) {
   .subtitle {
      font-size: 20px;
   }
}
</style>


   <script>let preveiwContainer = document.querySelector('.products-preview');
      let previewBox = preveiwContainer.querySelectorAll('.preview');
      
      document.querySelectorAll('.products-container .product').forEach(product =>{
        product.onclick = () =>{
          preveiwContainer.style.display = 'flex';
          let name = product.getAttribute('data-name');
          previewBox.forEach(preview =>{
            let target = preview.getAttribute('data-target');
            if(name == target){
              preview.classList.add('active');
            }
          });
        };
      });
      
      previewBox.forEach(close =>{
        close.querySelector('.fa-times').onclick = () =>{
          close.classList.remove('active');
          preveiwContainer.style.display = 'none';
        };
      });</script>
@endsection