<?php 
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user WHERE email = '%s' ",
            $mysqli->real_escape_string($_POST["email"]));
    $result = $mysqli->query($sql);
    $user  = $result->fetch_assoc(); 

    if($user){
       if(password_verify($_POST["password"], $user["password_hash"])){
            session_start();

            session_regenerate_id(); 
            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
       }
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="\header/header.css">
    <link rel="stylesheet" href="footer.css">
   
</head>
<body>
<header class="header">
        <div class="container">
            <div class="header-body">
                <a href="" class="header-logo">
                    <img src="mainPagePhotos/codecademy-logo-vector.png" alt="">
                </a>
                <div class="header-burger">
                    <span></span>
                </div>
                <nav class="header-menu">
                    <ul class="header-list">
                        <li>
                            <a href="" class="header-link">Catalog</a>
                        </li>
                        <li>
                            <a href="" class="header-link">Resources</a>
                        </li>
                        <li>
                            <a href="" class="header-link">Community</a>
                        </li>
                        <li>
                            <a href="" class="header-link">Pricing</a>
                        </li>
                        <li>
                            <a href="" class="header-link">Business Solution</a>
                        </li>
                        <div class="log-sign">
                            <li>
                                <button class="log-li header-link">Sign Up</button>
                            </li>
                            <li class="sign-up-header">
                                <button class="header-link">Log in</button>
                            </li>
                        </div>
                    
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="contentLogin">
        <?php if($is_invalid): ?>
            <em>Invalid login</em>
            <?php endif;?>
            <form method="post">
                <h1>Log in</h1>
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                    value="<?= htmlspecialchars($_POST["email"] ?? "" )?> ">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <button class="loginButton">Log in</button>
            </form>
    </div>
    <section>

        <footer>
          <section class="container1Foot">
            
            <div>
              <h4 class="title">CodeCademy</h4>
              <ul class="section-1">
                <li>About Us</li>
                <li>Careers</li>
                <li>Affiliates</li>
              </ul>
            </div>
      
            <div>
              <h4 class="resources">Resources</h4>
              <ul class="section-2">
                <li> Projects</l>
                <li> Interview Challenges</li>
                <li> Docs </li>
                <li> Cheatsheets </li>
                <li> Articles</li>
                <li> Videos</li>
                <li> Blog</li> 
                <li> Career Center</li>
              </ul>
            </div>
      
            <div>
              <h4 class="support">Support</h4>
              <ul>
                <li>Help Center</li>
              </ul>
            </div>
            
            <div>
              <h4 class="community">Community</h4>
              <ul>
                <li>Forums</li>
                <li>Discord</li>
                <li>Chapters</li>
                <li>Events</li>
                <li>Learner Stories</li>
              </ul>
            </div>
      
            <div>
              <h4 class="iplans">Individual Plans</h4>
              <ul>
                <li>Pro Membership</li>
                <li>For Students</li>
              </ul>
            </div>
      
            <div >
              <h4 class="eplans">Enterprise Plans</h4>
              <ul>
                <li>Bussiness Solutions</li>
              </ul>
      
            </div>
            <div class="download">
             
            </div>
            
          </section>
          
          <hr>
         
          <section class="container2Foot">
            <div class="course-div">
              <h3 class="course" style="padding-bottom:1rem ;">Course Catalog</h3></div>
            <div class="lang">
              <h4>Languages</h4>
              <ul >
                <li>HTML&CSS</li>
                <li>Python</li>
                <li>JS</li>
                <li>Java</li>
                <li>SQL</li>
                <li>PHP</li>
                <li>Kotlin</li>
                <li>C++</li>
              </ul>
            </div>
            
            <div class="subjects">
              <h4>Subjects</h4>
              <ul>
                <li>Web Dev</li>
                <li>Data Science</li>
                <li>Computer Science</li>
                <li>Web Design</li>
                <li>Full Catalog</li>
                <li>Road Map</li>
                
              </ul>
      
              <div class="br">
              <br><br><br><br><br><br>
                  <hr>
              </div>
            </div>
      
          </section>
        
        </footer>
        <div>
          SDU 2022 
        </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="header.js"></script>
</body>
</html>