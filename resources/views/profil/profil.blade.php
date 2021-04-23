<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Responsive Sidebar Menu | CodingLab</title>
  <link rel="stylesheet" href="{{asset ('dalistyle/css/style.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


</head>

<body>
  <div class="sidebar active">
    <div class="logo_content">
      <div class="logo">
        
        <div class="logo_name"><img src="{{asset('dalistyle/img/logo.png')}}" alt="" srcset="" class="logo2"> Find It</div>
      </div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <div class="profile_content">
      <div class="profile">
        <div class="profile_details">
          <img src="{{asset('dalistyle/img/download.png')}}" alt="" />
          <div class="name_job">
            <div class="name">aurax</div>
            <div class="job">Entreprise Devlepement</div>
          </div>
        </div>
        <i class="bx bx-log-out" id="log_out"></i>
      </div>
    </div>
    <ul class="nav_list">
      <li>
        <a href="#">
          <i class="bx bx-message-square-add"></i>

          <span class="links_name">Ajuter un stage</span>
        </a>
        <span class="tooltip">Ajouter un stage</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Liste de stages</span>
        </a>
        <span class="tooltip">Liste de stages</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-paste"></i>
          <span class="links_name">Demande de stages</span>
        </a>
        <span class="tooltip">Demande de stages</span>
      </li>

      <li>
        <a href="#">
          <i class="bx bx-cog"></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
    </ul>
  </div>
  <div class="home_content">
    <div class="container">
      <div class="text">
        <h2>Profil</h2>
      </div>

      <div class="block" style="margin:auto;display:block;">
        <div style="margin:auto;display:block;">
          <img src="{{asset('dalistyle/img/download.png')}}" class="img">
          <h1 style="text-align:center;margin:15px">aurax</h1>
          <div class="zone">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              <div class="col">
                <h6>Description</h6>
                <p>
                  What is Lorem Ipsum?
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
              </div>
              <div class="col">
                <h6>Localisation</h6>
                <p>Ariana,Technopole Al ghazala <span> <i class="fa fa-map-marker" style="color: blue;"></i></span></p>
              </div>
              <div class="col">
                <h6>Catégorie<span><i class="fa fa-bars" style="color: blue;"></i></span> </h6>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

    btn.onclick = function() {
      sidebar.classList.toggle("active");
      if (btn.classList.contains("bx-menu")) {
        btn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        btn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    };
    searchBtn.onclick = function() {
      sidebar.classList.toggle("active");
    };
  </script>
</body>

</html>