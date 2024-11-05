<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/edmin/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 22:28:28 GMT -->
<head>
    @include('admin.layout.head')
</head>
<body>    <!-- tap to top-->
    <div class="tap-top">
      <svg class="feather">
        <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up"></use>
      </svg>
    </div>
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-12 p-0">    
              <div class="login-card login-dark">
                <div>
                  <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="{{('./admin/assets/images/logo/logo.png')}}" alt="looginpage"><img class="img-fluid for-dark m-auto" src="../assets/images/logo/dark-logo.png" alt="logo"></a></div>
                  <div class="login-main"> 
                    <form class="theme-form" action="{{route('checklogin')}}" method="POST">
                        @csrf
                        {{-- @method('POST') --}}
                      <h2 class="text-center">Đăng nhập</h2>
                      <p class="text-center">Nhập email và mật khẩu để đăng nhập</p>
                      <div class="form-group">
                        <label class="col-form-label">email</label>
                        <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">mật khẩu</label>
                        <div class="form-input position-relative">
                          <input class="form-control" type="password" name="password" required="" placeholder="*********">
                          <div class="show-hide"><span class="show"></span></div>
                        </div>
                      </div>
                      <div class="form-group mb-0 checkbox-checked">
                        <div class="form-check checkbox-solid-info">
                          <input class="form-check-input" id="solid6" type="checkbox">
                          <label class="form-check-label" for="solid6">ghi nhớ mật khẩu</label>
                        </div><a class="link-two" href="forget-password.html">quên mật khẩu</a>
                        <div class="text-end mt-3"><button class="btn btn-primary btn-block w-100 text-white">đăng nhập</button></div>
                      </div>
                      <div class="login-social-title">
                        <h6>hoặc đăng nhập              </h6>
                      </div>
                      <div class="form-group">
                        <ul class="login-social">
                          <li><a href="https://www.linkedin.com/" target="_blank"><i class="icon-linkedin"></i></a></li>
                          <li><a href="https://twitter.com/" target="_blank"><i class="icon-twitter"></i></a></li>
                          <li><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a></li>
                          <li><a href="https://www.instagram.com/" target="_blank"><i class="icon-instagram"></i></a></li>
                        </ul>
                      </div>
                      <p class="mt-4 mb-0 text-center">tôi chưa có tài khoản<a class="ms-2" href="{{route('formRegister')}}">tạo tài khoản</a></p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

  @include('admin.layout.js')
  <script>
      // <![CDATA[  <-- For SVG support
      if ('WebSocket' in window) {
          (function () {
              function refreshCSS() {
                  var sheets = [].slice.call(document.getElementsByTagName("link"));
                  var head = document.getElementsByTagName("head")[0];
                  for (var i = 0; i < sheets.length; ++i) {
                      var elem = sheets[i];
                      var parent = elem.parentElement || head;
                      parent.removeChild(elem);
                      var rel = elem.rel;
                      if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                          var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                          elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                      }
                      parent.appendChild(elem);
                  }
              }
              var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
              var address = protocol + window.location.host + window.location.pathname + '/ws';
              var socket = new WebSocket(address);
              socket.onmessage = function (msg) {
                  if (msg.data == 'reload') window.location.reload();
                  else if (msg.data == 'refreshcss') refreshCSS();
              };
              if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                  console.log('Live reload enabled.');
                  sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
              }
          })();
      }
      else {
          console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
      }
      // ]]>
  </script>
  </body>
  
  <!-- Mirrored from admin.pixelstrap.net/edmin/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 22:29:16 GMT -->
  </html>