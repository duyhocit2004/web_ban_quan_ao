<aside class="page-sidebar" data-sidebar-layout="stroke-svg">
    <div class="left-arrow" id="left-arrow">
      <svg class="feather">
        <use href="https://admin.pixelstrap.net/admin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-left"></use>
      </svg>
    </div>
    <div id="sidebar-menu">
      <ul class="sidebar-menu" id="simple-bar">
        <li class="pin-title sidebar-list p-0">
          <h5 class="sidebar-main-title">Pinned</h5>
        </li>
        <li class="line pin-line"></li>
        <li  class="sidebar-main-title"><a href="{{route('/')}}">Trang chủ</a> </li>
        <li class="sidebar-main-title">Quản Lý</li>
        <li class="sidebar-list"> 
          <svg class="pinned-icon">
            <use href="https://admin.pixelstrap.net/admin/assets/svg/iconly-sprite.svg#Pin"></use>
          </svg><a class="sidebar-link" href="javascript:void(0)">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#as"></use>
            </svg><span> Quản lý sản phẩm</span>
            {{-- <div class="badge badge-primary rounded-pill">3</div> --}}
            <svg class="feather">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right"></use>
            </svg></a>
          <ul class="sidebar-submenu"> 
            <li><a href="{{route('product')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>danh sách sản phẩm</a></li>
            <li><a href="{{route('FromProduct')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>thêm sản phẩm</a></li>
          </ul>
        </li>
        <li class="sidebar-list"> 
          <svg class="pinned-icon">
            <use href="https://admin.pixelstrap.net/admin/assets/svg/iconly-sprite.svg#Pin"></use>
          </svg><a class="sidebar-link" href="javascript:void(0)">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Home"></use>
            </svg><span> Quản lý kích cỡ</span>
            {{-- <div class="badge badge-primary rounded-pill">3</div> --}}
            <svg class="feather">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right"></use>
            </svg></a>
          <ul class="sidebar-submenu"> 
            <li><a href="{{route('size')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>danh sách kích cỡ</a></li>
            <li><a href="{{route('Fromsize')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>thêmm kích cỡ</a></li>
          </ul>
        </li>

        <li class="sidebar-list"> 
          <svg class="pinned-icon">
            <use href="https://admin.pixelstrap.net/admin/assets/svg/iconly-sprite.svg#Pin"></use>
          </svg><a class="sidebar-link" href="javascript:void(0)">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Home"></use>
            </svg><span> Quản lý liên hệ</span>
            {{-- <div class="badge badge-primary rounded-pill">3</div> --}}
            <svg class="feather">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right"></use>
            </svg></a>
          <ul class="sidebar-submenu"> 
            <li>
              <a href="{{route('contact')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>liên hệ có tài khoản</a>
            </li>
            <li>
              <a href="{{route('contactUser')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>liên hệ không tài khoản</a>
            </li>
          </ul>
        </li>

        <li class="sidebar-list"> 
          <svg class="pinned-icon">
            <use href="https://admin.pixelstrap.net/admin/assets/svg/iconly-sprite.svg#Pin1"></use>
          </svg><a class="sidebar-link" href="javascript:void(0)">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Contact"></use>
            </svg><span> Quản lý tài khoản</span>
            {{-- <div class="badge badge-primary rounded-pill">3</div> --}}
            <svg class="feather">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right"></use>
            </svg></a>
          <ul class="sidebar-submenu"> 
            <li>
              <a href="{{route('account')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>Tài khoản Admin</a>
            </li>
            <li>
              <a href="{{route('accountUser')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>Tài khoản User</a>
            </li>
              <li>
                <a href="{{route('Fromaccount')}}"> 
                  <svg class="svg-menu">
                    <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                  </svg>thêm tài khoản</a>
              </li>
          </ul>
        </li>

        <li class="sidebar-list"> 
          <svg class="pinned-icon">
            <use href="https://admin.pixelstrap.net/admin/assets/svg/iconly-sprite.svg#Pin1"></use>
          </svg><a class="sidebar-link" href="javascript:void(0)">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#order"></use>
            </svg><span> Quản lý đơn hàng</span>
            {{-- <div class="badge badge-primary rounded-pill">3</div> --}}
            <svg class="feather">
              <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right"></use>
            </svg></a>
          <ul class="sidebar-submenu"> 
            <li>
              <a href="{{route('Order')}}"> 
                <svg class="svg-menu">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#right-3"></use>
                </svg>danh sách order</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
    <div class="right-arrow" id="right-arrow">
      <svg class="feather">
        <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right"></use>
      </svg>
    </div>
  </aside>