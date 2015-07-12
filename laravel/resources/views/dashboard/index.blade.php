@extends('shared.master')

@section('content')
        
  <div ng-controller="searchController" ng-init="search.init('')" ng-cloak>
      <!-- page wrap -->
      <section class="section_light">
        <div  class="row">
          <div class="twelve columns">
            <h1>Here's your dashboard Bra!</h1> 
        </div>
      </div>
      </section>
  </div>
@stop