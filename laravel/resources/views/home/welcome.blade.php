@extends('shared.master')

@section('content')
    <header>
        <div class="header-content">
          <h1 class="heading_supersize">GUIDE.ME</h1>
          <h2 class="welcome_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>  
        </div>  
    </header>
        
    <div ng-controller="homeController" ng-init="home.init()">
      <section class="search-row">
        <form  id ="guideSearch" ng-submit="home.submit()">
        <div class="row ">
            <div class="twelve columns">
                <label>Where do you want to go?</label>
            </div>
         </div>
         <div class="row">
            <div class="eleven columns">
              <input ng-model="home.search.location" type="text"  placeholder="e.g. London" googleplace />
            </div>
            <div class="one columns">
              <input type="submit" text="Go" class="button success" />
            </div>
         </div>
       </form>
      </section>
      <section class="section_light">

          <div class="row">
          
           <div class="four columns">
              <h3><span class="dropcap_red lsf-icon-dropcap" title="camera"></span> Community</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra, lacus id interdum ultrices, elit metus semper tellus, vel lacinia libero purus vitae risus.</p>
           </div>
           
        
            <div class="four columns">
              <h3><span class="dropcap_black lsf-icon-dropcap" title="map"></span> Agree routes</h3>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
            </div>
            
            
            <div class="four columns">
              <h3><span class="dropcap_black lsf-icon-dropcap" title="notify"></span> Get to know your host</h3>
              <p>Sed vitae nisi leo. Nulla tincidunt, turpis non gravida pharetra, diam sapien posuere massa, non luctus leo mauris at sapien. Donec ut fermentum eros.</p>
            </div>
          
          </div>
          
      </section>

  </div> 
@stop