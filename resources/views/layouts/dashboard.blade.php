<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <html lang="en" data-bs-theme="dark">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Kemenkumham | Konsultasi Admin Dashboard</title>
</head>
<body>
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
         <span class="links_name">Anggota</span>
       </a>
       <span class="tooltip">Anggota</span>
     </li>
     <li>
       <a class="nav-link " href='pertanyaan'>
         <i class='bx bx-chat' ></i>
         <span class="links_name">Pertanyaan</span>
       </a>
       <span class="tooltip">Pertanyaan</span>
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
  
  <section class="home-section">
    <div class="container-fluid">
      <div class="h2 mt-5 w-100 ">@yield('currentpage')</div>
      <br>
      @yield('container')
	  
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</html>