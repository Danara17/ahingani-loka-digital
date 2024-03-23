<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ahingani Loka Digital | Sign In</title>
    <link
      rel="stylesheet"
      href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    <link rel="stylesheet" href="{{asset('css/component.css')}}" />
  </head>

  <body>
    <div
      class="container p-0 h-100 d-flex justify-content-center align-items-center">
      <div class="card rounded-0 border-0 shadow-lg login-form">
        <div class="container h-100">
          <div class="row">
            <div class="col-5 p-0">
              <img
                src="assets/corporate-business-handshake-business-partners.jpg"
                alt=""
                width="100%"
                height="100%"
                class="object-fit-cover" />
            </div>
            <div class="col-7 p-0">
              <form action="{{route('auth-user')}}" method="post" class="px-5">
                @csrf
                <div class="text-center sign-label">Sign In</div>
                <div style="margin-top: 30px">
                  <input type="text" placeholder="Username" />
                </div>
                <div class="mt-4 position-relative">
                  <input type="password" id="password" placeholder="Password" />
                  <span toggle="#password" class="toggle-password"></span>
                </div>

                <div class="d-flex justify-content-end mt-4">
                  <button type="submit" class="button button-primary">Sign In</button>
                </div>
                <!-- <hr class="hr" /> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{url('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
    <script>
      document.querySelectorAll(".toggle-password").forEach(function (icon) {
        icon.addEventListener("click", function () {
          const input = document.querySelector(this.getAttribute("toggle"));
          this.classList.toggle("active");
          input.type = input.type === "password" ? "text" : "password";
        });
      });
    </script>
  </body>
</html>
