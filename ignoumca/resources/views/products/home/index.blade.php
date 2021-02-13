@push('style')
{{-- <link rel="stylesheet" href="{{ asset('css/') }}"> --}}
 <link rel="stylesheet" type="text/css" href="{{ asset('css/desktop/homepage/carousel.css')}}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('css/libraries/slick/slick.css')}}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('css/libraries/slick/slick-theme.css')}}"/>
 <style>.recentwork-item img {
   height: 200px;
   width: 100%;
 }</style>
@endpush
 
 
<script type="text/javascript" src="{{ asset('js/libraries/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/desktop/homepage/carousel.js')}}"></script>
 
 
 <div class="carousel-container ">
   <div class="carousel-slide p-r">
     <img src="{{ asset('images/homepage/banner.jpg') }}" alt="portfolio 9" class="img-responsive" width="100%" height="100%">
 
     <div class="overlay"></div>
     <div class="slide-body t-c p-a z-1000">
       <p class="color-white f-20 f-w-5 slide-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       {{-- <a class="btn-effect p-r mb-5" href="/milksurvey"><span class="btn-know">Know More</span></a> --}}
     </div>
   </div>
   <div class="carousel-slide p-r">
    
     <img src="{{ asset('images/homepage/banner2.png') }}" alt="portfolio 9" class="img-responsive" width="100%" height="100%">
     <div class="overlay"></div>
     <div class="slide-body t-c p-a z-1000">
         <p class="color-white f-20 f-w-5 slide-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         {{-- <a class="btn-effect p-r mb-5" href="/milksurvey"><span class="btn-know">Know More</span></a> --}}
       </div>
   </div>
 </div>
{{-- <div class="container-fluid">
 <div class="row">
   <img src="{{ asset('images/homepage/banner.jpg') }}" alt="portfolio 9" class="img-responsive" width="100%" height="100%">
 </div>
</div> --}}
 <div class="service-contianer">
   <div class="container py-5">
     <h2 class="t-c tt-u f-w-7 ">our services</h2>
     <hr class="hr-title">
     <div class="title-brief">
       <p class="color-grey f-w-6">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
       </p>
     </div>
     <div class="d-f m-t-30 row">
      
       <div class="grid-4 col">
         <div class="grid-icon-header  w-25 m-auto">
           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
               <circle style="fill:#445EA0;" cx="256" cy="267" r="245"/>
               <path style="fill:#FFAF10;" d="M100.718,421.644c-2.75,0-5-2.25-5-5V71.247H62.635c-2.75,0-5,2.25-5,5v334.546  c13.366,18.407,29.218,34.891,47.084,48.935h276.398c2.75,0,5-2.25,5-5v-33.083L100.718,421.644L100.718,421.644z"/>
               <path style="fill:#EF9614;" d="M76.635,76.247c0-2.75,2.25-5,5-5h-19c-2.75,0-5,2.25-5,5v334.546  c5.867,8.08,12.215,15.789,19,23.085V76.247z"/>
               <path style="fill:#FF9518;" d="M133.718,385.646c-2.75,0-5-2.25-5-5V35.998H97.883c-2.75,0-5,2.25-5,5v378.48c0,2.751,2.25,5,5,5  h318.484c2.75,0,5-2.249,5-5v-33.832L133.718,385.646L133.718,385.646z"/>
               <path style="fill:#EF8318;" d="M110.883,419.478V40.998c0-2.75,2.25-5,5-5h-18c-2.75,0-5,2.25-5,5v378.48c0,2.751,2.25,5,5,5h18  C113.133,424.478,110.883,422.229,110.883,419.478z"/>
               <path style="fill:#D9EAFC;" d="M454.365,383.48c0,2.75-2.25,5-5,5H130.883c-2.75,0-5-2.25-5-5V5c0-2.75,2.25-5,5-5h318.482  c2.75,0,5,2.25,5,5V383.48z"/>
               <path style="fill:#C3DDF4;" d="M145.727,383.48V5c0-2.75,2.25-5,5-5h-19.845c-2.75,0-5,2.25-5,5v378.48c0,2.75,2.25,5,5,5h19.845  C147.977,388.48,145.727,386.23,145.727,383.48z"/>
               <g>
                 <path style="fill:#DB722C;" d="M415.09,50.794h-69.561c-4.143,0-7.5-3.357-7.5-7.5c0-4.142,3.357-7.5,7.5-7.5h69.561   c4.143,0,7.5,3.358,7.5,7.5C422.59,47.437,419.232,50.794,415.09,50.794z"/>
                 <path style="fill:#DB722C;" d="M415.09,76.293h-69.561c-4.143,0-7.5-3.358-7.5-7.5c0-4.143,3.357-7.5,7.5-7.5h69.561   c4.143,0,7.5,3.357,7.5,7.5C422.59,72.935,419.232,76.293,415.09,76.293z"/>
                 <path style="fill:#DB722C;" d="M415.09,101.791h-69.561c-4.143,0-7.5-3.358-7.5-7.5s3.357-7.5,7.5-7.5h69.561   c4.143,0,7.5,3.358,7.5,7.5C422.59,98.434,419.232,101.791,415.09,101.791z"/>
                 <path style="fill:#DB722C;" d="M415.09,127.29h-69.561c-4.143,0-7.5-3.358-7.5-7.5c0-4.143,3.357-7.5,7.5-7.5h69.561   c4.143,0,7.5,3.357,7.5,7.5C422.59,123.932,419.232,127.29,415.09,127.29z"/>
               </g>
               <g>
                 <path style="fill:#52BBEF;" d="M285.397,305.281H168.238c-4.143,0-7.5-3.358-7.5-7.5s3.357-7.5,7.5-7.5h117.158   c4.143,0,7.5,3.358,7.5,7.5C292.897,301.923,289.539,305.281,285.397,305.281z"/>
                 <path style="fill:#52BBEF;" d="M285.397,330.779H168.238c-4.143,0-7.5-3.357-7.5-7.5c0-4.142,3.357-7.5,7.5-7.5h117.158   c4.143,0,7.5,3.358,7.5,7.5C292.897,327.422,289.539,330.779,285.397,330.779z"/>
                 <path style="fill:#52BBEF;" d="M285.397,356.278H168.238c-4.143,0-7.5-3.357-7.5-7.5c0-4.142,3.357-7.5,7.5-7.5h117.158   c4.143,0,7.5,3.358,7.5,7.5C292.897,352.92,289.539,356.278,285.397,356.278z"/>
               </g>
               <g>
                 <path style="fill:#FE3745;" d="M415.09,171.788H308.358c-4.143,0-7.5-3.358-7.5-7.5s3.357-7.5,7.5-7.5H415.09   c4.143,0,7.5,3.358,7.5,7.5S419.232,171.788,415.09,171.788z"/>
                 <path style="fill:#FE3745;" d="M415.09,197.287H308.358c-4.143,0-7.5-3.358-7.5-7.5s3.357-7.5,7.5-7.5H415.09   c4.143,0,7.5,3.358,7.5,7.5S419.232,197.287,415.09,197.287z"/>
                 <path style="fill:#FE3745;" d="M415.09,222.785H308.358c-4.143,0-7.5-3.359-7.5-7.5c0-4.143,3.357-7.5,7.5-7.5H415.09   c4.143,0,7.5,3.357,7.5,7.5C422.59,219.426,419.232,222.785,415.09,222.785z"/>
                 <path style="fill:#FE3745;" d="M415.09,248.283H308.358c-4.143,0-7.5-3.358-7.5-7.5s3.357-7.5,7.5-7.5H415.09   c4.143,0,7.5,3.358,7.5,7.5S419.232,248.283,415.09,248.283z"/>
                 <path style="fill:#FE3745;" d="M154.77,215.755h29.242c0-16.15,13.091-29.243,29.241-29.243v-29.24   C180.956,157.272,154.77,183.455,154.77,215.755z"/>
               </g>
               <path style="fill:#91E0E8;" d="M228.084,142.442v29.241c16.15,0,29.241,13.091,29.241,29.241h29.243  C286.568,168.624,260.383,142.442,228.084,142.442z"/>
               <g>
                 <path style="fill:#FFAF10;" d="M242.494,215.755c0,16.148-13.09,29.241-29.24,29.241s-29.241-13.093-29.241-29.241H154.77   c0,32.298,26.186,58.483,58.483,58.483c32.299,0,58.484-26.185,58.484-58.483H242.494z"/>
                 <path style="fill:#FFAF10;" d="M188.359,115.124V45.29c0-1.65-1.35-3-3-3h-18.182c-1.65,0-3,1.35-3,3v69.834H188.359z"/>
               </g>
               <path style="fill:#FE3745;" d="M227.476,115.124V64.29c0-1.65-1.35-3-3-3h-18.181c-1.65,0-3,1.35-3,3v50.834H227.476z"/>
               <path style="fill:#37C47A;" d="M266.592,115.124V87.29c0-1.65-1.35-3-3-3h-18.181c-1.65,0-3,1.35-3,3v27.834H266.592z"/>
               <path style="fill:#91E0E8;" d="M305.709,115.124V45.29c0-1.65-1.35-3-3-3h-18.182c-1.65,0-3,1.35-3,3v69.834H305.709z"/>
               <path style="fill:#FE3745;" d="M379.592,319.708c0-1.654,1.346-3,3-3h13.561v-33.56c0-2.75-2.25-5-5-5h-45.121c-2.75,0-5,2.25-5,5  v45.121c0,2.75,2.25,5,5,5h33.56V319.708z"/>
               <path style="fill:#37C47A;" d="M415.09,347.206c0,2.75-2.25,5-5,5h-27.498c-2.75,0-5-2.25-5-5v-27.498c0-2.75,2.25-5,5-5h27.498  c2.75,0,5,2.25,5,5V347.206z"/>
               <path style="fill:#52BBEF;" d="M310.879,127.29H159.008c-4.143,0-7.5-3.358-7.5-7.5c0-4.143,3.357-7.5,7.5-7.5h151.871  c4.143,0,7.5,3.357,7.5,7.5C318.379,123.932,315.022,127.29,310.879,127.29z"/>
           </svg>
         </div>
         <h5 class="t-c tt-c my-2">banner designing</h5>
         <div class="t-c grid-brief color-grey f-w-l mb-5">
           <span>
             Our customized logo designing service comes with immaculate designs. For us, designing a logo means we create novel identities for your brands globally that speak louder than words.
           </span>
         </div>
       </div>
 
       <div class="grid-4 col">
         <div class="grid-icon-header  w-25 m-auto">
           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 511.992 511.992;" xml:space="preserve">
             <path style="fill:#90D1F3;" d="M114.776,35.376h335.396l0,0v450.137c0,14.625-11.854,26.479-26.479,26.479l0,0H114.776l0,0  L114.776,35.376L114.776,35.376z"/>
             <path style="opacity:0.25;fill:#269BD8;enable-background:new    ;" d="M114.776,511.992V35.376h42.692  c0,263.224-17.961,476.616,245.263,476.616H114.776z"/>
             <path style="fill:#0D529E;" d="M423.694,511.992L423.694,511.992c-14.625,0-26.479-11.854-26.479-26.479l0,0v-26.479H61.819v26.479  c0,14.625,11.854,26.479,26.479,26.479l0,0H423.694z"/>
             <path style="fill:#FCBF29;" d="M317.779,158.943v-27.176c33.769-19.497,45.34-62.684,25.843-96.453  c-19.497-33.769-62.684-45.34-96.453-25.843s-45.34,62.684-25.843,96.453c6.196,10.733,15.11,19.647,25.843,25.843v27.176H317.779z"/>
             <rect x="247.134" y="158.952" style="fill:#591E00;" width="70.61" height="35.305"/>
             <rect x="247.134" y="194.257" style="fill:#0D529E;" width="35.305" height="61.784"/>
             <path style="opacity:0.5;fill:#F28D01;enable-background:new    ;" d="M308.953,114.812c-38.959,0.035-70.574-31.527-70.61-70.486  c-0.009-12.268,3.177-24.334,9.259-34.996c-33.875,19.206-45.773,62.234-26.567,96.118c6.205,10.953,15.234,20.036,26.134,26.32  v27.176h70.61v-27.176c10.812-6.284,19.78-15.313,25.993-26.179C333.163,111.634,321.169,114.812,308.953,114.812z"/>
             <rect x="282.439" y="194.257" style="fill:#269BD8;" width="35.305" height="61.784"/>
             <g>
               <polygon style="fill:#FFFFFF;" points="247.17,256.031 317.779,256.031 282.474,300.162  "/>
               <rect x="273.613" y="97.168" style="fill:#FFFFFF;" width="17.652" height="61.784"/>
               <path style="fill:#FFFFFF;" d="M282.474,105.986c-2.339,0-4.59-0.927-6.24-2.586l-26.479-26.479l12.48-12.48l20.239,20.239   l20.239-20.239l12.48,12.48L288.715,103.4C287.064,105.05,284.813,105.977,282.474,105.986z"/>
             </g>
             <g>
               <rect x="185.351" y="335.476" style="fill:#591E00;" width="17.652" height="17.652"/>
               <rect x="220.656" y="335.476" style="fill:#591E00;" width="194.177" height="17.652"/>
               <rect x="150.046" y="370.781" style="fill:#591E00;" width="264.786" height="17.652"/>
               <rect x="150.046" y="406.086" style="fill:#591E00;" width="229.482" height="17.652"/>
               <rect x="141.22" y="61.863" style="fill:#591E00;" width="26.479" height="17.652"/>
               <rect x="141.22" y="97.168" style="fill:#591E00;" width="44.131" height="17.652"/>
             </g>
            
           </svg>
         </div>
         <h5 class="t-c tt-c my-2">flyer designing</h5>
         <div class="t-c grid-brief color-grey f-w-l mb-5">
           <span>
             Our customized logo designing service comes with immaculate designs. For us, designing a logo means we create novel identities for your brands globally that speak louder than words.
           </span>
         </div>
       </div>
 
       <div class="grid-4 col">
         <div class="grid-icon-header  w-25 m-auto">
           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 464 464" style="enable-background:new 0 0 464 464;" xml:space="preserve">
             <path style="fill:#78B9EB;" d="M462.56,184c-0.802-1.757-1.913-3.356-3.28-4.72l-62.72-62.64c-3.038-2.966-7.114-4.631-11.36-4.64  H296v320H192V112h-48v320H64V112H16c-8.826,0.026-15.974,7.174-16,16v320c0.026,8.826,7.174,15.974,16,16h432  c8.826-0.026,15.974-7.174,16-16V190.64C464.009,188.348,463.518,186.082,462.56,184L462.56,184z"/>
             <path style="fill:#FF7956;" d="M104,48H64v64v320h80V112V48H104z"/>
             <path style="fill:#FFE477;" d="M192,0v48v48v16v32v48v48v48v48v48v48h104V112V0H192z"/>
             <path style="fill:#1E81CE;" d="M464,192h-64c-13.255,0-24-10.745-24-24v-56h15.672L464,184V192z"/>
             <path style="fill:#FF5023;" d="M96,48h16v360H96V48z"/>
             <g>
               <path style="fill:#E0E0E2;" d="M192,40h24v16h-24V40z"/>
               <path style="fill:#E0E0E2;" d="M192,88h24v16h-24V88z"/>
               <path style="fill:#E0E0E2;" d="M192,136h24v16h-24V136z"/>
               <path style="fill:#E0E0E2;" d="M192,184h24v16h-24V184z"/>
               <path style="fill:#E0E0E2;" d="M192,232h24v16h-24V232z"/>
               <path style="fill:#E0E0E2;" d="M192,280h24v16h-24V280z"/>
               <path style="fill:#E0E0E2;" d="M192,328h24v16h-24V328z"/>
               <path style="fill:#E0E0E2;" d="M192,376h24v16h-24V376z"/>
             </g>
             <path style="fill:#3E3D42;" d="M144,48L104,0L64,48h40H144z"/>
            
           </svg>
         </div>
         <h5 class="t-c tt-c my-2">stationary designing</h5>
         <div class="t-c grid-brief color-grey f-w-l mb-5">
           <span>
             Our customized logo designing service comes with immaculate designs. For us, designing a logo means we create novel identities for your brands globally that speak louder than words.
           </span>
         </div>
       </div>
     </div>
   </div>
 </div>
 {{-- recent work container --}}
  <div class="recent-work-container pb-5 bg-grey">
   <div class="container p-30 p-l-0 p-r-0">
     <h2 class="t-c tt-u f-w-7 m-t-20">Survey Products</h2>
     <hr class="hr-title">
 
     <div class="title-brief">
       <p class="color-grey f-w-6">
         Title brief
       </p>
     </div>
   
   
     <div class="row recentwork-grid-3 mb-5">
       <div class="recentwork-item col-lg-4">
         <img src="{{ asset('images/homepage/products/milk.jpg') }}" alt="portfolio 9" class="img-responsive">
         <div class="text-center my-2"><a href="/milksurvey" class="text-dark font-weight-bold h5 text-center">Milk Survey</a></div>
       </div>
       <div class="recentwork-item col-lg-4">
         <img src="{{ asset('images/homepage/products/cheese.jpg') }}" alt="portfolio 9" class="img-responsive">
         <div class="text-center my-2"><a href="/milksurvey" class="text-dark font-weight-bold h5 text-center">Cheese Survey</a></div>
       </div>
       <div class="recentwork-item col-lg-4">
         <img src="{{ asset('images/homepage/products/yogurt.jpg') }}" alt="portfolio 9" class="img-responsive">
         <div class="text-center my-2"><a href="/milksurvey" class="text-dark font-weight-bold h5 text-center">Curd Survey</a></div>
       </div>
     </div>
     <div class="row recentwork-grid-3 mb-5">
       <div class="recentwork-item col-lg-4">
         <img src="{{ asset('images/homepage/products/milk.jpg') }}" alt="portfolio 9" class="img-responsive">
         <div class="text-center my-2"><a href="/milksurvey" class="text-dark font-weight-bold h5 text-center">Milk Survey</a></div>
       </div>
       <div class="recentwork-item col-lg-4">
         <img src="{{ asset('images/homepage/products/cheese.jpg') }}" alt="portfolio 9" class="img-responsive">
         <div class="text-center my-2"><a href="/milksurvey" class="text-dark font-weight-bold h5 text-center">Cheese Survey</a></div>
       </div>
       <div class="recentwork-item col-lg-4">
         <img src="{{ asset('images/homepage/products/yogurt.jpg') }}" alt="portfolio 9" class="img-responsive">
         <div class="text-center my-2"><a href="/milksurvey" class="text-dark font-weight-bold h5 text-center">Curd Survey</a></div>
       </div>
     </div>
    
   </div>
  
 </div>
 


