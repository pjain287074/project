 
 <div class="project-info border border-left-0 border-right-0 container-fluid">
   <!-- here the project name will be present and your choose package is displayed -->
   <div class="row">
     <div class="col-md-12 my-5">
         <h1 class="project-title f-30 color-blue mx-5">
           Let’s get your review started for this product
         </h1>
         <p class="description color-red my-0 mx-5">
           We’ll start by learning a bit more about you and to enhance the quality of product.
         </p>
 
     </div>
   </div>
 </div>
 
 <div class="step-progress container-fluid border-bottom shadow-lg "  >
   <div class="row">
     <div class="col-md-2 d-none d-md-block"></div>
     <div class="col-md-8 ">
 
       <!-- progressbar -->
       <ul id="progressbar" class="js-progress-bar progressbar t-c">
         <li class="active choose-package">Your Information</li> 
         <li class="order-info">Product Reviews</li>
         <li class="payment-checkout">Suggestion</li>
       </ul>
     </div>
 
     <div class="col-md-2 d-none d-md-block"></div>
   </div>
 </div>

<div class="formdata container-fluid overflow-hidden d-none" id="thankyou-page">
 <div class="row">
   <div class="col-md-12">
     <h1 class="text-center color-red my-5">
         Thank You For Filling Response
         </h1>
         </div>
     </div>
    </div>




 <div class="formdata container-fluid overflow-hidden">
   <div class="row">
     <div class=" col-md-12">
      
       <div class="row">
         <div class="col-sm-1"></div>
           <form class="col col-md-10 mt-5 card p-40 shadow  mb-5 js-form" data-url="http://3.7.125.151/api/insert" data-progress-class="js-progress-bar" data-progress-active-class="active-2" action="post" data-next-form-id="{{$nextFormId}}" >
               <div class="row">
                 <div class="form-group col-md-4 ">
                   <label for="name">Full Name</label>
                   <input id="name" type="text"  required name="name" class="js-character-counter form-control" aria-describedby="projectnameHelp" placeholder="Your Name" maxlength="50">
                   <small id="projectnameHelp" class="form-text text-muted">It will be your identity. Max Length 50</small>
                 </div>
                 <div class="form-group col-md-4 ">
                   <label for="mobile">Mobile No.</label>
                   <input id="mobile" type="number"  required name="mobile" class="js-character-counter form-control"  placeholder="Your Mobile No" maxlength="50">
                   {{-- <small id="projectnameHelp" class="form-text text-muted">It will be your identity. Max Length 50</small> --}}
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-4 ">
                   <label for="emailid">Email Id</label>
                   <input id="emailid" type="email"  required name="emailid" class="js-character-counter form-control"  placeholder="ex@ex.com" maxlength="50">
                   {{-- <small id="projectnameHelp" class="form-text text-muted">It will be your identity. Max Length 50</small> --}}
                 </div>
                
               </div>
               <div class="form-group">
                 <label for="customer_usage">Gender</label>
 
                 <div class="row">
                   <div class="col-md-2 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="gender" value="a"/>
                         <div class="state p-danger">
                           <label>Male</label>
                         </div>
                     </div>
                   </div>
                   <div class="col-md-2 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="gender" value="b"/>
                         <div class="state p-danger">
                             <label>Female</label>
                         </div>
                     </div>
                   </div>
                 </div>
                
               </div>
               <div class="form-group">
                 <label for="age">Your age group</label>
 
                 <div class="row">
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="age" value="a"/>
                         <div class="state p-danger">
                           <label>21 to 25 (in Yrs)</label>
                         </div>
                     </div>
                   </div>
 
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="age" value="b"/>
                         <div class="state p-danger">
                             <label>26 to 30 (in Yrs)</label>
                         </div>
                     </div>
                   </div>
 
 
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="age" value="c"/>
                         <div class="state p-danger">
                             <label>31 to 35 (in Yrs)</label>
                         </div>
                     </div>
                   </div>
 
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="age" value="d"/>
                         <div class="state p-danger">
                             <label>36 to 40 (in Yrs)</label>
                         </div>
                     </div>
                   </div>
 
 
 
                 </div>
                
               </div>
               <div class="row">
                  
                
                
                 <div class="form-group col-md-4">
                     <label for="city">Choose Your city</label>
                     <select name="city" id="city" class="form-control form-control-sm">
                       <option value="" disabled selected>Choose your option</option>
                       <option value="1">North Delhi</option>
                       <option value="2">South Delhi</option>
                       <option value="3">East Delhi</option>
                       <option value="3">West Delhi</option>
                     </select>
                     <small id="cityHelp" class="form-text text-muted">We only cover Delhi for now</small>
                 </div>
 
                
                 <div class="form-group col-md-4">
                   <label for="familymember">Total no. of family members</label>
                   <input id="familymember" type="number"  name="familymember" class="js-character-counter form-control" min="1">
                 </div>
               </div>
               <div class="form-group">
                 <label >Annual  Income of your Family</label>
 
                 <div class="row">
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="income" value="a"/>
                         <div class="state p-danger">
                           <label>3L - 6L </label>
                         </div>
                     </div>
                   </div>
 
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="income" value="b"/>
                         <div class="state p-danger">
                           <label>6L - 9L </label>
                         </div>
                     </div>
                   </div>
 
 
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="income" value="c"/>
                         <div class="state p-danger">
                           <label>9L - 12L </label>
                         </div>
                     </div>
                   </div>
 
                   <div class="col-md-3 mb-3">
                     <div class="pretty p-default p-thick p-pulse">
                         <input type="radio" name="income" value="d"/>
                         <div class="state p-danger">
                           <label>12L above </label>
                         </div>
                     </div>
                   </div>
 
 
 
                 </div>
                
               </div>
               <div class="form-group">
                 <label for="business_info">Tell us about your experience with delivery and product?</label>
                 <textarea id="business_info" class="form-control" maxlength="1500" name="business_info" aria-describedby="businessinfoHelp"></textarea>
                 <small id="businessinfoHelp" class="form-text text-muted">By this we are able to know about your business. Max Length 1500</small>
               </div>
 
 
              
               <div class="form-group">
                 <input type="submit" value="Next" class="btn btn-outline-dark">
               </div>
           </form>
         <div class="col-sm-1"></div>
       </div>
     </div>
   </div>
 </div>
 
@push('scripts')
 <script>
   $(document).ready(function () {
     console.log($('.js-form'));
     $(".js-form").on('submit',function(e){
       e.preventDefault();
       let form = $(this);
       let nextFormId = form.data('nextFormId');
       let nextForm = nextFormId !='' ? $(`#${nextFormId}`) : '';
 
       // progress bar
       let progressClass = form.data('progressClass');
       let progressActiveClass = form.data('progressActiveClass');
       let progressBar = $(`.${progressClass}`);
 
       // url of the api end point
       let url = form.data('url');
 
       let data = form.serialize();
 
       $.ajax({
         url: url,
         type: 'POST',
         data: data,
         success: function(result){
           console.log(result);
           hideForm(form);
           if(nextForm) showForm(nextForm);
           console.log(progressBar);
           progressBar.addClass(progressActiveClass);
         }
       });
     });
     function hideForm(form) {
       form.addClass('d-none');
     }
     function showForm(form){
       form.removeClass('d-none');
     }
   })
 </script>
 
@endpush
 


