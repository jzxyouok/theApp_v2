@extends('layouts.master')

		@section('h')

		<style>

		    body > .grid {
		      height: 100%;
		    }
		    .image {
		      margin-top: -100px;
		    }
		    .column {
		      max-width: 450px;
		    }
        	.bg {
	            background-position: center center;
	            background-image: -moz-radial-gradient(center center, circle, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
	            background-image: -o-radial-gradient(center center, 1000px 1000px, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
	            background-image: -webkit-radial-gradient(center center, 1000px 1000px, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
	            background-image: radial-gradient(center center, 1000px 1000px, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
	        }

		</style>

		<script type="text/javascript">
		// Automatically shows on init if cookie isnt set
			$(document).ready(function() {
		        $('.cookie.nag')
		          .nag({
				    key      : 'accepts-cookies',
				    value    : true
			});
    	</script>
		<script type="text/javascript">
		$(document)
			.ready(function(){
				$('ui.form')
					.form({
						fields: {
		            email: {
		              identifier  : 'email',
		              rules: [
		                {
		                  type   : 'empty',
		                  prompt : 'Please enter your e-mail'
		                },
		                {
		                  type   : 'email',
		                  prompt : 'Please enter a valid e-mail'
		                }
		              ]
		            },
		            password: {
		              identifier  : 'password',
		              rules: [
		                {
		                  type   : 'empty',
		                  prompt : 'Please enter your password'
		                },
		                {
		                  type   : 'length[6]',
		                  prompt : 'Your password must be at least 6 characters'
		                }
		              ]
		            }
		          }
		        });
		    });
		</script>
@endsection

@section('bc', 'bg');

@section('c')

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui image header">
      <div class="content">
        <img src="img/logo.png" width=150 height=150/>
      </div>
    </h2>
    <form action="#" method="get" class="ui large form">
    <div class="ui secondary green segment">Sign Up for 14 day FREE trail. No Credit Card required.</div>
      <div class="ui stacked secondary segment">
      	<div class="field">
          <div class="ui left icon input">
            <i class="shop icon"></i>
            <input type="text" name="store" placeholder="Store Name">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="name" placeholder="Your Name">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="mail outline icon"></i>
            <input type="email" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Repeat Password">
          </div>
        </div>
        <button type="submit" class="ui fluid large icon black submit button"><i class="icon sign in
"></i> Create my Account</button>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
    	<p>By clicking Create your account you agree to the <a href="https://www.shoptreeapp.com/legal/terms" class="button">terms</a> &amp; <a href="http://www.shoptreeapp.com/legal/privacy" class="button">privacy</a></p>
		<a href="https://www.shoptreeapp.com" class="center button">Back to Home</a>
    </div>
  </div>
</div>
        <div class="ui center aligned container">
            <p style="margin-top:20px; margin-bottom:20px; color:grey;"> &copy; ShopTree 2016</p>
        </div>

@stop