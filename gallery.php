
                    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Gallery</title>
    <link rel="stylesheet" href="lightbox.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="home.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f2a4b9346f.js" crossorigin="anonymous"></script>
    <style>
     .full-screen {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            object-fit: contain; 
            background-color: rgba(0, 0, 0, 0.8); 
            cursor: zoom-out;
        }
      
      @media(max-width: 700px){
        .intro h3{
          font-size: 20px;
        }
        .text h3{
          font-size: 25vw;
        }
        .card h2{
          font-size: 20px
        }
        .card p{
          font-size: 2vw;
          line-height: 1;
        }
       
        .card--display i{
          font-size: 20px;
        }
        }
body {
            font-family: Arial, sans-serif;
        }
        #buttonContainer {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        @media(max-width: 700px){
        .intro h3{
          font-size: 20px;
        }
        .text h3{
          font-size: 25vw;
        }
        .card h2{
          font-size: 20px
        }
        .card p{
          font-size: 2vw;
          line-height: 1;
        }
       
        .card--display i{
          font-size: 20px;
        }
        .gallery {
  margin-top: 40vw;}
        }
      @media (max-width:480px){
        .gallery {
  margin-top: 33vw;}
      }
        .x,
.y,
.z{
  width: 500px;
  height: 300px;
  padding: 20px;
  background-color: wheat;
  overflow: auto;
  border-radius: 10px;
  box-shadow: 0 9px 8px rgba(0,0,0,0.1);
}
body {
  background: #eee;
}

.gallery {
  margin-top: 15vw;
  --size: min(60vmin, 400px);
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0 0 10px #0002, 0 20px 40px -20px #0004;
  width: var(--size);
  height: var(--size);
  background: #fff;
  border: 6px solid #fff;
  display: grid;
  grid-template-rows: 50% 50%;
  grid-template-columns: 1fr 1fr;
  overflow: hidden;
  gap: 6px;
  margin-bottom: 0;
  padding-bottom: 0;
}

.gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@keyframes moveHorizontal {
  to {
    object-position: 100% 0;
  }
}

@keyframes moveVertical {
  to {
    object-position: 0 100%;
  }
}

@keyframes shrinkVertical {
  to {
    height: 0;
  }
}

@keyframes shrinkHorizontal {
  to {
    width: 0;
  }
}

@keyframes growHorizontal {
  to {
    width: 100%;
  }
}
@keyframes growHorizontal2 {
  to {
    width: 70%;
  }
}

@keyframes growVertical {
  to {
    height: 100%;
  }
}

@keyframes growAll {
  to {
    width: 100%;
    height: 100%;
  }
}

.gallery img:nth-child(1) {
  grid-column: 1;
  grid-row: 1;
  justify-self: end;
  animation: moveHorizontal 8.5s 0.5s 1, shrinkHorizontal 2s 9s ease-in 1;
  animation-fill-mode: forwards;
}

.gallery img:nth-child(2) {
  grid-column: 2;
  grid-row: 1;
  justify-self: end;
  animation: shrinkHorizontal 2s 11s 1;
  animation-fill-mode: forwards;
}

.gallery img:nth-child(3) {
  grid-row: 2;
  grid-column: 1 / 3;
  align-self: end;
  object-position: 0 0;
  animation: moveVertical 5s 1s 1, shrinkVertical 3s 5s 1;
  animation-fill-mode: forwards;
}

.gallery img:nth-child(4) {
  grid-column: 1 / 3;
  grid-row: 1;
  width: 0;
  justify-self: center;
  align-self: start;
  animation: growHorizontal 2.25s 11s 1, moveHorizontal 4s 14s 1,
    shrinkVertical 2s 18s 1;
  animation-fill-mode: forwards;
}

.gallery img:nth-child(5) {
  grid-column: 1;
  grid-row: 2;
  width: 0;
  justify-self: start;
  align-self: end;
  animation: growHorizontal 2.5s 7.5s 1, moveVertical 4s 12.5s 1,
    shrinkHorizontal 2s 17s 1;
  animation-fill-mode: forwards;
}

.gallery img:nth-child(6) {
  grid-column: 2;
  grid-row: 2;
  width: 0;
  justify-self: end;
  align-self: end;
  animation: growHorizontal 2s 8s 1, shrinkHorizontal 2s 17s 1;
  animation-fill-mode: forwards;
}

.gallery img:nth-child(7) {
  grid-column: 1/3;
  grid-row: 1/3;
  width: 0;
  justify-self: end;
  align-self: end;
  object-position: 0 0;
  animation: growHorizontal 2s 20s 1, moveHorizontal 16s 21.5s 1;
  animation-fill-mode: forwards;
}
.imgdata{
  font-size: 2vw;
}
.galleryy {
  display: grid;
  gap: 20px;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  margin-top: 20px;
  margin-bottom: 20px;
  justify-content: center;
  
}
@media (max-width: 480px) {
  .galleryy {
    grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
    gap: 20px;
  padding: 20px;
  margin-top: 20px;
  margin-bottom: 20px;
    justify-content: center;
  }
}
    </style>
     <script>
        function handleClick(url) {
            window.location.href = url;
        }
    </script>
</head>
<body>
  <!-------------header image-------------->
  <div class="header">
    <img src="gallerybg.png" height="150px" width="1400px" alt="nature" class="responsive">
  </div>
    
    <!------------------Navbar----------->
    <section id="nav-bar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars" style="color: #f7f9fc;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="auto">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formshow.php">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.html">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactUs.php">Contact Us</a>
              </li>
              <button class="button" onclick="window.location.href = 'admlogin.php';">Admin</button>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </section>


<!--------------------Gallery-------------------->
<div class="heading">
    <h1>Photo Gallery</h1>
</div>
<br><br><br>
<br>
<div class="gallery">
 
  
  <img src="i1.jpg" alt="" />
  <img src="i2.jpg" alt="" />
  <img src="i3.jpg" alt="" />
  <img src="i4.jpg" alt="" />
  <img src="i5.jpg" alt="" />
  <img src="i6.jpg" alt="" />
  <img src="i6.jpg" alt="" />
</div>
<div class="gallcontainer">
    <div class="galleryy">
    <?php
                $servername = "localhost";
                $username = "root";
                $password = "KARTHIK@2004";
                $database = "om";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($conn));
                }

                while ($row = $result->fetch_assoc()) {
                    echo "<td><img src='img.php?id={$row['id']}' width='350' height='250' border='3px gray solid' onclick='toggleFullScreen(this)'></td>";
                }
                ?>
    </div>
</div>
<div id="buttonContainer">
        <?php
        $conn = new mysqli('localhost', 'root', 'KARTHIK@2004', 'om');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT label, url FROM buttons");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<button onclick=\"handleClick('{$row['url']}')\">{$row['label']}</button>";
            }
        } else {
            echo "No buttons available.";
        }
        $conn->close();
        ?>
    </div>
<script src="lightbox-plus-jquery.js"></script>
<br><br>

<!---------------Footer-------------------->
<footer>
    <div class="row">
      <div class="col">
        <a href="https://mrce.in/"><img src="footer_logo.png" class="logo"></a>
        <p>For any college related queries please refer our Official website. Stay tuned to this website regularly for information regarding compettions being held.</p>
      </div>
      <div class="col">
        <h3>Techie-hub@MRCE</h3>
        <p>Mysammaguda</p>
        <p>Medchal, PIN 500034, India</p>
        <a href="contactUs.html"><p class="email-id">tpavani04@email.com</p></a>
        <h4>+91 - 0123456789</h4>
      </div>
      <div class="col">
        <h3>Links <div class="underline"><span></span></div></h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="formshow.php">Events</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col">
        <h3>Blog<div class="underline"><span></span></div></h3>
        <a href="https://techiehublog.wordpress.com/2024/01/19/exploring-the-thriving-world-of-computer-science-events-and-cutting-edge-technologies-in-college/"><button class="button">Visit the blog</button><br><br><br><br></a>
        <div class="social-icons">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-whatsapp"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
      </div>
    </div>
    <hr>
    <p class="copyright"><i class="fa-regular fa-copyright"></i> Techie hub  2024 - All Rights Reserved </p>
  </footer>

  <script>
    function toggleFullScreen(image) {
        image.classList.toggle('full-screen');
    }
</script>

  </body>
  </html>