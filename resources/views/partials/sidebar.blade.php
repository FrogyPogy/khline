<div class="sidebar">
  <div class="logo-details">
      <i> <img src="../asset/img/undip.png" style="width:40px ; padding-bottom:5px" alt=""></i>
        <div class="logo_name" style="padding-top: 5px;"> <div style="font-size:10px ;">@yield('institute_div')
    </div>@yield('institute')</div>
    </div>
    <ul class="nav-list" id="nav-list">
      <li>
        <a class="nav-link active" href='admin'>
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a class="nav-link " href='anggota'>
         <i class='bx bx-user' ></i>
         <span class="links_name">@yield('item2')</span>
       </a>
       <span class="tooltip">@yield('item2')</span>
     </li>
     <li>
       <a class="nav-link " href='pertanyaan'>
         <i class='bx bx-chat' ></i>
         <span class="links_name">@yield('item3')</span>
       </a>
       <span class="tooltip">@yield('item3')</span>
     </li>
     <li>
       <a class="nav-link" href='laporan'>
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Laporan</span>
       </a>
       <span class="tooltip">Laporan</span>
     </li>
	 
     <li>
       <a class="nav-link" href='/home'>
         <i class="bi bi-box-arrow-right"></i>
         <span class="links_name">Keluar</span>
       </a>
       <span class="tooltip">Keluar</span>
     </li>
     <li class="profile">
        <div class="profile-details">
           <div class="name_job">
              <div class="name">@yield('user_page')</div>
              <div class="email">@yield('email_user')</div>
           </div>
         </div>
         <i class="fa fa-bars" id="bars"></i>>
     </li>
    </ul>
  </div>