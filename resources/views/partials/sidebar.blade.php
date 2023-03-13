<div class="sidebar">
  <div class="logo-details">
      <i> <img src="../asset/img/undip.png" style="width:40px ; padding-bottom:5px" alt=""></i>
        <div class="logo_name" style="padding-top: 5px;"> <div style="font-size:10px ;">@yield('institute_div')
    </div>@yield('institute')</div>
    </div>
    <ul class="nav-list" id="nav-list">
      @auth
      <li>
        <a class="nav-link active" href="{{ url('admin') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a class="nav-link " href="{{ url('anggota') }}">
         <i class='bx bx-user' ></i>
         <span class="links_name">@yield('item2')</span>
       </a>
       <span class="tooltip">@yield('item2')</span>
     </li>
     <li>
       <a class="nav-link " href="{{ url('pertanyaan') }}">
         <i class='bx bx-chat' ></i>
         <span class="links_name">@yield('item3')</span>
       </a>
       <span class="tooltip">@yield('item3')</span>
     </li>
     <li>
       <a class="nav-link" href="{{ url('laporan') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Laporan</span>
       </a>
       <span class="tooltip">Laporan</span>
     </li>
	 
     <li class="ms-2">
      <form action="/sign-out" method="post">
        @csrf
        <button type="submit" class="btn btn-danger" "rules" style="background-color: Transparent; border: none;">
        <i class="bi bi-box-arrow-right"></i>
         <span class="links_name">Logout</span>
        </button>
      </form>
       <span class="tooltip">Logout</span>
     </li>
     <li class="profile">
        <div class="profile-details">
           <div class="name_job">
              <div class="name">{{ auth()->User()->nama }}</div>
              <div class="email">{{ auth()->User()->jabatan }}</div>
           </div>
         </div>
         <i class="fa fa-bars" id="bars"></i>>
     </li>
     @endauth
    </ul>
  </div>