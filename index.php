<html>
<head><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 
</head>
<style>
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: "Josefin Sans", sans-serif;
}

.navbar {
  font-size: 18px;
  background-image: linear-gradient(135deg, #F13846, #F98D1B);
  color:white;
  border: 1px solid rgba(0, 0, 0, 0.2);
  padding-bottom: 10px;
}

.main-nav {
  list-style-type: none;
  display: none;
}

.nav-links,
.logo {
  text-decoration: none;
  color: rgba(255, 255, 255, 0.7);
}

.main-nav li {
  text-align: center;
  margin: 15px auto;
}

.logo {
  display: inline-block;
  font-size: 22px;
  margin-top: 10px;
  margin-left: 20px;
}
.logo span{
  display: inline-block;
  font-size: 28px;
  font-weight: 600;
 
}

.navbar-toggle {
  position: absolute;
  top: 10px;
  right: 20px;
  cursor: pointer;
  color: rgba(255, 255, 255, 0.8);
  font-size: 24px;
  transition: all 0.3s ease-in-out;
}

.active {
  display: block;
}
  .nav-links:hover{
     color:white;
  }

  .logo:hover {
     transform: scale(1.09);
  transition: all 0.3s ease-in-out;
    color: rgba(255, 255, 255, 1);
  }


@media screen and (min-width: 768px) {
  .navbar {
    display: flex;
    justify-content: space-between;
    padding-bottom: 0;
    height: 70px;
    align-items: center;
    
  }

  .main-nav {
    display: flex;
    margin-right: 30px;
    flex-direction: row;
    justify-content: flex-end;
  }

  .main-nav li {
    margin: 0;
  }

  .nav-links {
    margin-left: 40px;
  }

  .logo {
    margin-top: 0;
  }

  .navbar-toggle {
    display: none;
  }
  .nav-links:hover{
     color:white;
  }

  .logo:hover {
     transform: scale(1.09);
  transition: all 0.3s ease-in-out;
    color: rgba(255, 255, 255, 1);
  }
}

</style>
<body>
  <nav class="navbar">
    <span class="navbar-toggle" id="toggle">
            <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo"><span>X</span>vcall</a>
    <ul class="main-nav" id="menu">
      <li>
        <a href="#" class="nav-links">Home</a>
      </li>
      <li>
        <a href="#" class="nav-links">Call</a>
      </li>
      <li>
        <a href="#" class="nav-links">More</a>
      </li>
      
      
    </ul>
  </nav>
</body>
<script>
let mainNav = document.getElementById("menu");
let navBarToggle = document.getElementById("toggle");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("active");
});

</script>
</html>
