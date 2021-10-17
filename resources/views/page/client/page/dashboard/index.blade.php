@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

</section>

     <!-- ======= Car blog Section ======= -->
     <section id="portfolio" class="portfolio">
       <div class="container" style="margin-top:100px;margin-bottom:100px;" data-aos="fade-up">
 
         <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
 
           @component('page.client.components.gridcard')
               
           @endcomponent
 
         </div>
 
       </div>
     </section><!-- End Portfolio Section -->
 
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg ">
       <div class="container" data-aos="fade-up">
 
         <div class="section-title">
           <h2>Services</h2>
           <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
         </div>
 
         <div class="row">
           <div class="col-md-6">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
               <i class="bi bi-briefcase"></i>
               <h4><a href="#">Lorem Ipsum</a></h4>
               <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
             </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
               <i class="bi bi-card-checklist"></i>
               <h4><a href="#">Dolor Sitema</a></h4>
               <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
             </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
               <i class="bi bi-bar-chart"></i>
               <h4><a href="#">Sed ut perspiciatis</a></h4>
               <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
             </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
               <i class="bi bi-binoculars"></i>
               <h4><a href="#">Nemo Enim</a></h4>
               <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
             </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
               <i class="bi bi-brightness-high"></i>
               <h4><a href="#">Magni Dolore</a></h4>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
             </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
             <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
               <i class="bi bi-calendar4-week"></i>
               <h4><a href="#">Eiusmod Tempor</a></h4>
               <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
             </div>
           </div>
         </div>
 
       </div>
     </section><!-- End Services Section -->
 
     
     <!-- ======= Galery Section ======= -->
     <section id="portfolio" class="portfolio">
       <div class="container" data-aos="fade-up">
 
         <div class="section-title">
           <h2>Galery</h2>
           <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
         </div>
       
 
         <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
 
           <div class="container" data-aos="fade-up">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
              @component('page.client.components.gridcard')
                  
              @endcomponent
    
            </div>
          </div>
 
         </div>
 
       </div>
     </section><!-- End Portfolio Section -->
@endsection

@push('script')
  <script>
    let carError = 0 
    let galeryError = 0 

    function getCar(){
      axios.post(`{{url("/url-here")}}`).then(function(response) {
        
            }).catch(function(error){
              carError++
              if carError >2{
                console.log("failed fetching data car")
              }
            })
    }

    function getGalery(){
      axios.post(`{{url("/url-here")}}`).then(function(response) {
              
            }).catch(function(error){
              galeryError++
              if galeryError >2{
                console.log("failed fetching data galery")
              }
            })
    }

    $(document).ready(function() {
      // stuff here...      
    });

  </script>
@endpush