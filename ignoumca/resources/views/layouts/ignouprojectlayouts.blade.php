<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="{{asset('css/desktop/common/common.css')}}">
  <link rel="stylesheet" href="{{asset('css/desktop/common/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/desktop/common/footer.css')}}">
  <link rel="stylesheet" href="{{asset('css/desktop/common/dropdown.css')}}">

  <!-- <only for form page> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/desktop/form/formpart.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

  <title>Home|Pixel</title>
  

  {{-- <script src="{{ asset('scripts/jquery.slim.min.js') }}" defer></script>
  <script src="{{ asset('scripts/popper.min.js') }}" defer></script>
  <script src="{{ asset('scripts/bootstrap.min.js') }}" defer></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

  @stack('style')

  @stack('scripts')
  
  

  <title>@yield('title')</title>
  
</head>
<body >
  
  <div class="bg-white ">
    {{-- <div id="header-order-container" class="bg-red p-10 t-c color-white">
      <span class="">Create Your own survey</span>
      
    </div> --}}
    
    
   <nav class="navbar navbar-expand-sm sticky-top border-b-1 bg-white">
    <div class="container ">
        <a class="navbar-brand p-0 color-red" href="index.php">
          Survey Product
        </a>
        <span class="col-md-6"></span>
        
        <ul class="navbar-nav col-md-2">
          <li class="nav-item">
            <a class="nav-link color-black" href="index.php">Home</a>
            <span class="menu-link-border"></span>
          </li>
          
          
        </ul>
    </div>
  </nav>
    
    @yield('content')
    

    {{-- here footer sections start --}}
   
  </div>
  <footer class="bg-footer p-30">
    <div class="container">
      <div class="footer-info t-c color-white">
        <span class="d-b f-20 f-w-7 tt-u">get connected with us</span>
        <hr class="footer-line">
        <div class="t-c">
          <span class="footer-infobar">+91 88 26 453 326</span>
        </div>
        <div class="t-c">
          <a class="footer-infobar" href="mailto:ahuja538@gmail.com">sales@yourmail.com</a>
        </div>
        <div class="t-c">
          <a class="footer-infobar">Delhi, India</a>
        </div>
        <div class="footer-icon">
          <a class="social-icon" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
              <g>
                <g>
                  <path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306    C474.995,612,612,474.995,612,306z M27.818,306C27.818,152.36,152.36,27.818,306,27.818S584.182,152.36,584.182,306    S459.64,584.182,306,584.182S27.818,459.64,27.818,306z"/>
                  <path d="M317.739,482.617V306h58.279l9.208-58.529h-67.487v-29.348c0-15.272,5.007-29.849,26.928-29.849h43.813v-58.418h-62.201    c-52.298,0-66.569,34.438-66.569,82.175v35.413h-35.885V306h35.885v176.617H317.739L317.739,482.617z"/>
                </g>
              </g>
            </svg>
          </a>
          <a href="#" class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
              <g>
                <g id="Layer_1_106_">
                  <g>
                    <path style="fill:#030104;" d="M7.033,12.3h-1.6V7.101h1.6V12.3z M6.233,6.434c-0.577,0-0.866-0.267-0.866-0.8     c0-0.223,0.082-0.412,0.25-0.567c0.166-0.155,0.371-0.233,0.616-0.233c0.577,0,0.866,0.268,0.866,0.801S6.811,6.434,6.233,6.434z      M12.967,12.3h-1.633V9.4c0-0.755-0.268-1.133-0.801-1.133c-0.422,0-0.699,0.211-0.834,0.633C9.656,8.967,9.633,9.101,9.633,9.3     v3H8V8.767c0-0.8-0.012-1.355-0.033-1.666h1.4l0.1,0.699c0.367-0.556,0.9-0.833,1.633-0.833c0.557,0,1.006,0.194,1.35,0.583     c0.346,0.389,0.518,0.95,0.518,1.684V12.3H12.967z"/>
                  </g>
                  <g>
                    <path style="fill:#030104;" d="M9,18c-4.963,0-9-4.037-9-9s4.037-9,9-9s9,4.037,9,9S13.963,18,9,18z M9,2C5.141,2,2,5.141,2,9     s3.141,7,7,7s7-3.141,7-7.859,2,9,2z"/>
                  </g>
                </g>
              </g>
            </svg>
          </a>
          <a href="#" class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256   C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z   "/>
                <path d="M214.859,128l-10.156,39.5h-1.016L193.031,128h-16.562l21.016,65.5v27.562h12.062v-29.375L231.562,128H214.859z    M267.406,171.047c0-5.578-1.812-11.047-5-14.25c-3.688-3.688-5.531-5.828-11.578-5.828c-6.641,0-8.484,2.516-12.422,5.828   c-3.938,3.375-5.672,8.172-5.672,13.797v30.562c0,6.219,1.938,11.141,5.75,14.844c3.828,3.625,5.672,5.438,12.031,5.438   c6.609,0,7.453-1.781,11.281-5.281c3.75-3.531,5.609-8.438,5.609-14.688L267.406,171.047L267.406,171.047z M313.953,151.031   h-11.672v46.625c-1.375,1.609-7.469,9.859-8.562,9.859c-1.344,0-1.609-0.375-2.234-1.156c-0.608-0.766-0.922-2-0.922-3.734v-51.594   h-11.688v56.609c0,4.391,0.375,10.781,2.719,13.156c1.594,1.609,6.625,1.906,11.203-1.594c3.516-2.672,6.406-6.406,9.484-11.984   v12.406h11.672V151.031z M384,291.906c0-26.406-20.906-47.812-46.75-47.812H174.766c-25.828,0-46.766,21.406-46.766,47.812v44.297   C128,362.562,148.938,384,174.766,384H337.25c25.844,0,46.75-21.438,46.75-47.797V291.906z M319.578,360.578   c-5.344,0-9.5-1.672-12.562-5.078c-3.047-3.281-4.594-7.922-4.594-13.812v-27.5c0-5.266,1.703-15,5.047-18.28   c3.392-3.392,7.656-5.017,12.953-5.017c5.453,0,9.625,1.517,12.484,4.578c2.969,3.156,4.406,12.953,4.406,18.719v11.609h-22.688   v15.484c0,3.25,0.422,5.453,1.203,6.719c0.797,1.234,2.078,1.875,4.031,1.875c1.938,0,3.28-0.531,4.062-1.594   c0.766-1.062,1.203-3.328,1.203-7v-2.766h12.188v3.172c0,6.28-1.438,10.983-4.438,14.155   C329.875,358.969,325.438,360.578,319.578,360.578z M325.125,316.281v-2.156c0-2.594-0.438-9.812-1.25-10.891   c-0.766-1.109-2.141-1.672-3.953-1.672c-1.859,0-3.234,0.562-4.047,1.672c-0.812,1.078-1.25,8.297-1.25,10.891v2.156H325.125z    M279.797,360.734c-2.422,0-4.562-0.5-6.422-1.453c-1.828-0.906-3.578-2.312-5.203-4.312v4.891h-12.297V267.5h11.578v27.922   c1.672-1.938,4.172-3.438,5.922-4.453c1.891-1.016,3.75-1.531,5.672-1.531c3.828,0,6.828,1.422,8.828,4.142   c2.016,2.719,3.031,6.703,3.031,11.922v41.188c0,4.53-0.953,7.969-2.828,10.391C286.141,359.469,283.375,360.734,279.797,360.734z    M279.438,306.188c0-2.141-1.516-3.766-2.328-4.905c-0.938-1.109-2.202-1.609-3.812-1.609c-0.905,0-1.733,0.188-2.608,0.609   c-0.812,0.391-2.375,1.062-3.234,1.922v45.516c0.969,1,2.672,1.798,3.656,2.25c0.922,0.484,1.875,0.72,2.922,0.72   c1.484,0,2.594-0.47,3.297-1.392c0.672-0.858,2.109-2.328,2.109-4.375v-38.735H279.438z M232.109,352.219   c-2.25,2.5-4.578,5.234-7.031,6.562c-2.406,1.406-4.766,2.016-7.078,2.016c-2.812,0-4.938-0.922-6.359-2.828   c-1.438-1.906-2.5-4.703-2.5-8.484v-58.438h11.797v54.125c0,1.484,0.266,2.547,0.766,3.234c0.531,0.641,1.359,1,2.5,1   c0.875,0,2.75-0.438,4.125-1.359c1.375-0.859,3.359-2.016,4.5-3.328v-53.672h11.484v69.562H232.11L232.109,352.219L232.109,352.219   z M197.797,360.547h-11.719v-81.422H174.64V267.5h34.969v11.625h-11.812V360.547L197.797,360.547z M250.125,208.812   c-1.938,0-3.438-0.547-4.438-1.641c-1.062-1.078-1.578-2.625-1.578-4.641v-32.453c0-1.609,0.578-2.891,1.672-3.859   c1.109-1,2.547-1.5,4.344-1.5c1.922,0,2.75,0.5,3.953,1.5c1.172,0.969,1.797,2.25,1.797,3.859v32.453c0,1.984-0.609,3.5-1.75,4.641   C252.906,208.266,252.109,208.812,250.125,208.812z"/>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('scripts/m_sidebar.js') }}" defer></script>
  <script src="{{ asset('scripts/lazyload.js') }}" defer></script>
  
</body>
</html>
