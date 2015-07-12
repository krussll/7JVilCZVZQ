@extends('shared.master')

@section('content')
    <div ng-controller="registerController">
      
      <section class="section_light">
          <h1>Register</h1> 
          
          <form ng-submit="register.submit()">
            <div class="row">
              <div class="six columns offset-by-three">

                <!--firstname-->
                <div class="row">
                  <div class="twelve columns">
                      <label>Firstname</label>
                  </div>
                  <div class="twelve columns">
                      <input id="firstname" ng-model="register.inputs.firstname" type="text" />
                  </div>
                </div>

                <!--surname-->
                <div class="row">
                  <div class="twelve columns">
                      <label>Surname</label>
                  </div>
                  <div class="twelve columns">
                      <input id="surname" ng-model="register.inputs.surname" type="text" />
                  </div>
                </div>

                <!--username-->
                <div class="row">
                  <div class="twelve columns">
                      <label>Email</label>
                  </div>
                  <div class="twelve columns">
                      <input id="email" ng-model="register.inputs.email" type="text" />
                  </div>
                </div>
                
                <!--password-->
                <div class="row">
                  <div class="twelve columns">
                      <label>Password</label>
                  </div>
                  <div class="twelve columns">
                      <input id="password" ng-model="register.inputs.password" type="password" />
                  </div>
                </div>

                <!--submit-->
                <div class="row">
                  <div class="twelve columns">
                      <input type="submit" value="Login" class="button success" />
                  </div>
                  
                </div>

            </div>
          </div>
        </form>
          
      </section>

  </div> 
@stop