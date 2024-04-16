<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" />
<h1><span style="color:antiquewhite ;">Escort</span><span style="color:peru;">Library</span></h1>
<style>


* {
    margin: 0;
    padding: 0;
    font-family: "Roboto", sans-serif;
  }
  
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-image: url('logo_EL.png');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center;
  }
  
  .cards {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }
  
  .card {
    margin: 40px;
    position: relative;
    max-width: 250px;
    max-height: 350px;
    box-shadow: 0 40px 60px -6px black;
  }
  
  .card-title {
    display: block;
    text-align: center;
    color: #fff;
    background-color:peru;
    padding: 2%;
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
  }
  
  .card img {
    width: 100%;
    height: 98%;
    object-fit: cover;
    display: block;
    position: relative;
  }
  
  .card-desc {
    display: block;
    font-size: 1.2rem;
    position: absolute;
    height: 0;
    top: 0;
    opacity: 0;
    padding: 18px 8%;
    background-color: white;
       transition: 0.8s ease;
  }
  
  .card:hover .card-desc {
    opacity: 1;
    height: 100%;
  }
  
  h1 {
    font-size: 2.8rem;
    color: #fff;
    margin: 40px 0 20px 0;
    text-align: center;
  }
  button {
  margin: 50px;
  font-family: inherit;
}
.slide {
  font-size: 20px;
  font-weight: 200;
  letter-spacing: 1px;
  padding: 13px 30px 13px;
  outline: 0;
  border: 1px solid black;
  cursor: pointer;
  position: relative;
  background-color: rgba(0, 0, 0, 0);
}

.slide i {
  opacity: 0;
  font-size: 13px;
  transition: 0.2s;
  position: absolute;
  right: 10px;
  top: 21px;
  transition: transform 1;
}

.slide div {
  transition: transform 0.8s;
}

.slide:hover div {
  transform: translateX(-6px);
}

.slide::after {
  content: "";
  background-color:peru;
  width: 100%;
  z-index: -1;
  position: absolute;
  height: 100%;
  top: 7px;
  left: 7px;
}

.slide:hover i {
  opacity: 1;
  transform: translateX(-6px);
}
  
</style>
<img class="logo-img" src="logo_EL.png" width="130" height="80" ALT="align box" ALIGN=CENTER>
<div class="cards">
  <div class="card">
    <h2 class="card-title">Bouchentouf Othman</h2>
    <img src="Bouchi_Pic.jpeg" alt="">
    <p class="card-desc">The best project in our database system class !</p>
  </div>
  <div class="card">
    <h2 class="card-title">Fatima Zahra Habzane</h2>
    <img src="fati_pic.jpg" alt="">
    <p class="card-desc">This project is synonym of perfection !</p>
  </div>
  <div class="card">
    <h2 class="card-title">Ahmed Katane</h2>
    <img src="katane_pic.jpg" alt="">
    <p class="card-desc">I really enjoyed working on this project !</p>
  </div>
  <div class="card">
    <h2 class="card-title">Bouchentouf Omar</h2>
    <img src="BouchentoufOmar_pic.jpg" alt="">
    <p class="card-desc">Hope we get the best grade !</p>
  </div>
  <div class="card">
    <h2 class="card-title">Salah El Graini</h2>
    <img src="Graini.jpeg" alt="">
    <p class="card-desc">Hope we get the best grade !</p>
  </div>
</div>

<br>
<br>

<br>
<h3>📜  This web application was done by `Escort<span style="color: brown;">Library</span>` members with lots of ♡, 
for the sake of the database system final project  📜</h3>
<br>

<button type="button" class="slide"><a href="user_page.php"><div style="color:lightyellow ;">Main page</div></a>
      <i class="icon-arrow-right"></i>
</button>