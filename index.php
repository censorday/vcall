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
  font-family: 'Gill Sans', 'GillSansCRegular', Arial, sans-serif;
  background:url(https://xvcall.herokuapp.com/b.png);
 backdrop-filter:blur(4px);
  z-index:-5;
}

.navbar {
  font-size: 12px;
  text-transform: uppercase;
    font-weight: 600;
  color: #4a575d;
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
  color: #4a575d;
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
  color: #ff7d42;
 
}

.navbar-toggle {
  position: absolute;
  top: 10px;
  right: 20px;
  cursor: pointer;
  color: #4a575d;
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
/*Card*/
  .card{
  flex: 1;
  min-width: 160px;
  height: calc(11.7 * 160px / 8.3);
  background-color: white;
  align-items: center;
  border: 1px solid #373F48;
  border-radius: 12px;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #393838;
  display: inline-block;
  transition: .3s linear;
  box-shadow: 5px 7px #888888;
}
 .card h4,small {
margin-top: 20px;
font-family: 'Josefin Sans', sans-serif;
font-size: 12px;
font-weight: 50; 
color: #393838;

  }
      
.card h4 span {
  font-size: 22px;
			font-weight: 600;
		}
.card:hover h4  {
    color:white;
		}
      
      
 .card:hover {
    transform: scale(1.05);
    transition: all 0.3s ease-in-out;
    background: linear-gradient(135deg, #F13846, #911f00);
    color:white;
  }
  /*Radio Console*/
.console10 {    
    text-align: center;
  }
.console10 input[type='radio']
{
    display: none;
  
}
.console10 main {
        margin-top: 77px;
  
        }
.console10 input[type='radio'] + label,.console10 input[type='radio']:not(checked) + label

{
    padding: 13px 45.5px;
    border: solid 2px #444444;
    border-radius: 47px;
    text-align: center;
    font-size: 12px;
    margin-right: 15px;
   margin-left: 15px;
    transition: .4s;
}
.console10 input[type='radio']:checked + label
{
    position: relative;
  
    border: solid 2px #444444;
    background: #444444;
    color: #FFF;
    transition: .4s;
}
.console10 input[type='radio']:checked + label::before
{
    content:' ';
    position: absolute;
    left: 16px;
}
 .sec1{
  text-align:center;
  padding:30px 10%;
  height:410px; 
   color:white;
}
   .sec2{
  text-align:center;
  padding:30px 10%;
  height:410px; 
  color:white;
   background-color:white;
}
  .sec2 h1{
     padding-top: 40px;
    color: black;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 32px;
    line-height: 0.65;
    margin-top: 0;
    margin-bottom: 0;
    letter-spacing: 0.05em;
    
  }
  .title{
    text-align:left;
     } 
  
  .title h1,.title span{
    padding-top: 40px;
    color: #ff7d42;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 62px;
    line-height: 0.65;
    margin-top: 0;
    margin-bottom: 0;
    letter-spacing: 0.05em;
}
    .title span{
     color: white;
      
}
   .title small{
     color: grey;
      padding-top: 4%;
      margin-left: 2%;
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
  <section class="sec1">
    <div class="title"><h1>Xvcall</h1><br><span>vash</span><br><small>Project by Aman Vashishth</small></div>
  </section>
  
  
<!-- Cards -->
  <div class="console10">
		<div class="card ">
				<h4><span> A4</span><br> Paper</h4>
      <main><input type="radio" id="ot-1" value="hidden" name="pprtyp" checked>
     <label for="ot-1">
         Apply
     </label></main>
		</div>
    <div class="card ">
			<h4><span>Notebook</span><br> Paper</h4>
      <main><input type="radio" id="ot-2" value="visible" name="pprtyp">
     <label for="ot-2">
         Apply
     </label></main>
		</div>
    <div class="card ">
				<h4><span>Plane</span><br> Paper</h4> 
       <main><input type="radio" id="ot-3" value="inline-block" name="pprtyp">
     <label for="ot-3">
         Apply
     </label></main>
		</div>
    <div class="card ">
				<h4><span>Copy</span><br> Paper</h4> 
      <main><input type="radio" id="ot-4" value="Hi" name="pprtyp">
     <label for="ot-4">
         Apply
     </label></main>
		</div></div>
  
  <div class="sec2"><h1>Tools</h1></div>
  
</body>
<script>
let mainNav = document.getElementById("menu");
let navBarToggle = document.getElementById("toggle");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("active");
});

</script>
</html>
