<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register | School System</title>

    <!-- Bootstrap -->
    <link href="/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/assets/build/css/custom.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div id="register" class="animate form login_form">
          <section class="login_content">
            @include('layouts.flash-message')
            <form action="/register" method="POST">
              @csrf
              <h1>Create Account</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Name" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
             <div class="form-group">
                 <select class="form-control" name="role_id" id="role_id" >
                    <option>Select Role</option>
                      <option value="1">Teacher</option>
                      <option value="2">Student</option>
                 </select>
             </div>
             <div class="form-group">
                 <select class="form-control" name="country_id" id="country_id" >
                    <option>Select Country</option>
                    @foreach($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                 </select>
             </div>
             <div class="form-group">
                 <select class="form-control" name="city_id" id="city_id" >
                    <option>Select City</option>
                 </select>
             </div>
              <div>
                <input type="submit" class="btn btn-default submit">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="/login" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
          $('#country_id').on('change', function() {
              var country_id = this.value;
              $("#city_id").html('');
              $.ajax({
                  url: "/get-cities-by-country",
                  type: "POST",
                  data: {
                      country_id: country_id,
                      _token: '{{csrf_token()}}'
                  },
                  dataType: 'json',
                  success: function(result) {
                      city_data = '<option value="">Select City</option>';
                      $.each(result.cities, function(key,value) {
                        city_data += '<option value="'+value.id+'">'+value.name+'</option>';
                      });
                      $('#city_id').html(city_data);
                  }
              });
          });
      });
    </script>
  </body>
</html>
