@extends('shared.master')

@section('content')
    <div ng-controller="loginController">
      
      <section class="section_light">
          <h1>Login</h1> 
          
          <form>
            <div class="row">
              <div class="six columns offset-by-three">
                
                <!--username-->
                <div class="row">
                  <div class="twelve columns">
                      <label>Email</label>
                  </div>
                  <div class="twelve columns">
                      <input id="email" type="text" />
                  </div>
                </div>

                <!--password-->
                <div class="row">
                  <div class="twelve columns">
                      <label>Password</label>
                  </div>
                  <div class="twelve columns">
                      <input id="password" type="password" />
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