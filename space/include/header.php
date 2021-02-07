<header class="clear">
      <div class="topMainLeft">
        <div class="logo">
          <h1><a href="/space/index.php">SPACE</a></h1>
          <hr><p>interior design</p>
        </div>
      </div>
      <div class="topMainRight">
        <div class="logo">
          <h1><a href="/space/index.php">SPACE</a></h1>
          <hr><p>interior design</p>
        </div>
      </div>
      <div class="loginBox">
        <a href="#">ADMIN</a>
        <a href="/space/pages/login/login_form.php">LOGIN</a>
        <a href="/space/pages/login/join_form.php">JOIN</a>
      </div>
      <div class="gnb">
        <ul>
          <li><a href="/space/index.php#about">ABOUT</a></li>
          <li><a href="/space/pages/living/liv.php">LIVING</a></li>
          <li><a href="/space/pages/office/off.php">OFFICE</a></li>
          <li><a href="/space/pages/store/sto.php">STORE</a></li>
          <li><a href="/space/pages/qna/qna.php">Q&A</a></li>
        </ul>
        <div class="mobileMenu">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>

    <script>
      const pathname = window.location.pathname;
      const gnbLi = document.querySelectorAll(".gnb li");

      for(let i=0; i<gnbLi.lenght; i++){
        gnbLi[i].classList.remove("active");
      }
      if(pathname.includes("about")){
        gnbLi[0].classList.add("active");
      } else if(pathname.includes("liv")){
        gnbLi[1].classList.add("active");
      } else if(pathname.includes("off")){
        gnbLi[2].classList.add("active");
      } else if(pathname.includes("sto")){
        gnbLi[3].classList.add("active");
      } else if(pathname.includes("qna")){
        gnbLi[4].classList.add("active");
      }
    </script>