<?php
session_start();
 
if (isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeAcademy</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.cdnfonts.com/css/apercu" rel="stylesheet">
</head>
<body">
    <?php if (isset($user)): ?>
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
                                <a href="" class="header-link">Resources</a>
                            </li>
                            <li>
                                <a href="" class="header-link">Community</a>
                            </li>
                            <li>
                                <a href="" class="header-link">Pricing</a>
                            </li>
                            <li>
                                <a href="logout.php" class="header-link">Log out</a>
                            </li>
                            <div class="log-sign">
                                <li>
                                    <button class="log-li header-link"><?= htmlspecialchars($user["name"]) ?> </button>
                                </li>
                            </div>
                        
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="ifHome">
            <div class="container">
                <h1>Home</h1>
                <p>Hello <?= htmlspecialchars($user["name"]) ?> </p>
                <p><a href="logout.php">Log out</a></p>
                <h1>Recommended for you</h1>
                <div class="free-courses">
                    <div class="learn">
                        <div class="learn-top">
                            <p>Course</p>
                            <h3 id="freeJs">Learn JavaScript</h3>
                            <p id="box1P">Beginner Friendly, 11 Lessons</p>
                        </div>
                        <div class="learn-bottom">
                            <h4 id="box1h4">Language Fluency</h4>
                        </div>
                        </div>
                    <div class="learn">
                        <div class="learn-top">
                            <p>Course</p>
                            <h3 id="freeHTML">Learn HTML</h3>
                            <p id="box2P">Beginner Friendly, 6 Lessons</p>
                        </div>
                        <div class="learn-bottom">
                            <h4 id="box2h4">Language Fluency</h4>
                        </div>
                    </div>
                </div>
                <div class="contentEnroll">
                <h1>My courses</h1>
                    <div class="twoSides">
                        <div class="mainLeftSide">
                            <svg aria-hidden="true" class="gamut-lb90wd-HillsIllustration e1bwb7ub0" viewBox="0 0 101 138" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Hills Illustration</title><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="1" width="100" height="136"><path d="M2.18262 135.524C2.18262 134.12 2.24105 48.562 2.35466 47.184C3.3909 34.8717 8.96465 23.406 17.9667 15.0689C26.9687 6.73168 38.739 2.13423 50.9352 2.19145C63.1313 2.24866 74.8591 6.95634 83.7845 15.3776C92.71 23.7989 98.1787 35.3163 99.1024 47.6378C99.1932 48.8678 99.2387 134.275 99.2387 135.524H2.18262Z" fill="white" stroke="#10162F" stroke-width="2" stroke-miterlimit="10"></path></mask><g mask="url(#mask0)"><path d="M121.861 288.57C182.183 288.57 231.084 239.385 231.084 178.713C231.084 118.042 182.183 68.8572 121.861 68.8572C89.5017 68.8572 60.4288 83.0113 40.4287 105.5" stroke="#10162F"></path><path d="M75.2861 64.2294C90.7932 64.2294 103.364 51.4928 103.364 35.7813C103.364 20.0699 90.7932 7.33325 75.2861 7.33325C59.779 7.33325 47.208 20.0699 47.208 35.7813C47.208 51.4928 59.779 64.2294 75.2861 64.2294Z" stroke="#10162F" stroke-miterlimit="10"></path><path d="M15.9787 206.634C45.2898 206.634 69.0512 182.56 69.0512 152.862C69.0512 123.165 45.2898 99.0907 15.9787 99.0907C-13.3324 99.0907 -37.0938 123.165 -37.0938 152.862C-37.0938 182.56 -13.3324 206.634 15.9787 206.634Z" stroke="#10162F" stroke-miterlimit="10"></path></g><path d="M1 136.714C1 135.285 1.05985 48.1991 1.17624 46.7965C2.23775 34.2643 7.94745 22.594 17.169 14.1079C26.3906 5.62185 38.448 0.942302 50.9416 1.00054C63.4352 1.05877 75.449 5.85052 84.5922 14.4222C93.7353 22.9938 99.3374 34.7169 100.284 47.2584C100.377 48.5104 100.423 135.442 100.423 136.714H1Z" stroke="#10162F" stroke-miterlimit="10"></path></svg>
                        </div>
                        <div class="mainRightSide">
                            <div>
                                <h4>You haven't enrolled in a course yet</h4>
                                <p>Explore our course catalog to enroll in a course.</p>
                                <button class="header-link">Find a Course</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
        </div>
        <?php else: ?>
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
                                <a href="login.php">
                                    <button class="log-li header-link">Log In</button>
                                </a>
                            </li>
                            <li class="sign-up-header">
                                <button class="header-link">Sign Up</button>
                            </li>
                        </div>
                    
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <div class="content">
        <div class="container">
            <div class="twoSides">
                
                    <div class="mainLeftSide">
                        <div class="insideLeftSide">
                            <img src="mainPagePhotos/mainPageMainPhoto.webp" alt="">
                        </div>
                    </div>
                
                <div class="mainRightSide">
                    <div class="insideRightSide">
                        <div>
                            <h1>Join the millions learning to code with Codecademy for free</h1>
                        </div>
                        <form action="process-signup.php" method="post" novalidate>
                                Name
                                <br>
                                <input type="text" id="name" name="name">
                                <br>
                                Email
                                <br>
                                <input type="email" id="email" name="email">
                                <br>
                                Password
                                <br>
                                <input type="password" id="password" name="password">
                                <br>
                                <button>Sign up</button>
                            </form>
                        <p class="privacy-policy">
                            By signing up for Codecademy, you agree to Codecademy's Terms of Service & Privacy Policy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="rightSide">
                <div class="container">
                    <div class="insideRightSide">
                        <div>
                            <h1>Join the millions learning to code with Codecademy for free</h1>
                        </div>
                        <form action="">
                            Email
                            <br>
                            <input type="text">
                            <br>
                            Password
                            <br>
                            <input type="text">
                            <br>
                            <button>Sign up</button>
                        </form>
                        <p class="privacy-policy">
                            By signing up for Codecademy, you agree to Codecademy's Terms of Service & Privacy Policy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content2">
        <div class="up">
            <div class="container2">
                <div class="p-and-h2">
                    <p>Start Learning</p>
                    <h1 style="font-size: 44px;">Popular Courses</h1>
                </div>
                <div class="centering-row">
                    <div class="categories-buttons">
                        <button onclick="free()">Free</button>
                        <button onclick="newToCoding()">New to coding</button>
                        <button onclick="mostPopular()">Most popular</button>
                        <button onclick="skillPaths()">Skill paths</button>
                        <button onclick="careerPaths()">Career paths</button>
                    </div>
                </div>
                <div class="flex-courses">
                    <div class="free-courses">
                        <div class="learn">
                            <div class="learn-top">
                                <p>Course</p>
                                <h3 id="freeJs">Learn JavaScript</h3>
                                <p id="box1P">Beginner Friendly, 11 Lessons</p>
                            </div>
                            <div class="learn-bottom">
                                <h4 id="box1h4">Language Fluency</h4>
                            </div>
                        </div>
                        <div class="learn">
                            <div class="learn-top">
                                <p>Course</p>
                                <h3 id="freeHTML">Learn HTML</h3>
                                <p id="box2P">Beginner Friendly, 6 Lessons</p>
                            </div>
                            <div class="learn-bottom">
                                <h4 id="box2h4">Language Fluency</h4>
                            </div>
                        </div>
                        <div class="learn">
                            <div class="learn-top">
                                <p>Course</p>
                                <h3 id="freeSQL">Learn SQL</h3>
                                <p id="box3P">Beginner Friendly, 4 Lessons</p>
                            </div>
                            <div class="learn-bottom">
                                <h4 id="box3h4">Language Fluency</h4>
                            </div>
                        </div>
                        <div class="learn">
                            <div class="learn-top">
                                <p>Course</p>
                                <h3 id="freeJava">Learn Java</h3>
                                <p id="box4P">Beginner Friendly 16 Lessons</p>
                            </div>
                            <div class="learn-bottom">
                                <h4 id="box4h4">Language Fluency</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">

        </div>
    </div>
    <div class="content3">
        <div class="container">
            <div class="twoSides">
                <div class="mainLeftSide2">
                    <div class="left-column">
                        <h1>Not sure where to start?</h1>
                        <p>This short quiz will sort you out. Answer a few simple questions to get personal career advice and course recommendations.</p>
                        <button>Take the quiz</button>
                    </div>
                </div>
                <div class="mainRightSide2">
                    <div class="right-cloumn">
                        <img src="mainPagePhotos/7f8fd6dd32aa8afc918a5cf6a9fe2933.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content4">
        <div class="container">
            <div class="content4Text">
                <h1>Stories from real people</h1>
                <p>Watch and read stories from the Codecademy community.</p>
            </div>
            <div class="peopleFLex">
                <div class="peopleGrid">
                    <div class="people">
                        <img src="mainPagePhotos/GiacomoSorbi (1).jpeg" alt="">
                        <h2>Taking different path: One Team Lead's story</h2>
                        <p>Giacomo S., Tram Lead, London</p>
                    </div>
                    <div class="people">
                        <img src="mainPagePhotos/AlisonVoghel (1).jpg" alt="">
                        <h2>See how this architect switched to UX Design</h2>
                        <p>Alison V., Senior UX Designer @ Acquia, Columbus</p>
                    </div>
                    <div class="people">
                        <img src="mainPagePhotos/ManuelSousa (1).jpg" alt="">
                        <h2>Lesson from a Chef turned Depty CTO</h2>
                        <p>Manuel S., Deputy CTO @ PaxFamilla, Brussels</p>
                    </div>
                    <div class="people">
                        <img src="mainPagePhotos/Rosita (1).jpg" alt="">
                        <h2>How one Developer learned to code with her disability</h2>
                        <p>Rosita R., Front-End Developer, Brummen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content5">
        <div class="container">
            <div class="statsFlex">
                <div class="statsGrid">
                    <div>
                        <h1>Join in on something big</h1>
                    </div>
                    <div class="inside-statsGrid">
                        <div>
                            <h1>50M Learners</h1>
                        </div>
                        <div>
                            <h1>190+ Countries</h1>
                        </div>
                        <div>
                            <h1>3.7B Code submits</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content6">
        <div class="container">
            <div class="twoSides">
                <div class="mainLeftSide3">
                    <div class="insideLeftSide3">
                        <img src="mainPagePhotos/logo4.png" alt="">
                        <h1>Level up your team's skills</h1>
                        <p>Give your team the knowledge, experience, and confidence they need to tackle any problem.</p>
                        <button>Explore business plan</button>
                    </div>
                </div>
                <div class="mainRightSide3">
                    <div>
                        <img src="mainPagePhotos/content6Photo.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="mobile-rightSide">
                <div>
                    <img src="mainPagePhotos/content6Photo.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="content7">
        <div class="container">
            <div class="twoSides">
                <div class="mainLeftSide4">
                    <div class="left-column2">
                        <img src="mainPagePhotos/content7.webp" alt="">
                    </div>
                </div>
                <div class="mainRightSide4">
                    <div class="right-column2">
                        <h1>Start for free</h1>
                        <p>If you’ve made it this far, you must be at least a little curious. Sign up and take the first step toward your goals.</p>
                        <div class="flex-forbutton">
                            <button>Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainRightSide4Copy">
                <div class="right-column2">
                    <h1>Start for free</h1>
                    <p>If you’ve made it this far, you must be at least a little curious. Sign up and take the first step toward your goals.</p>
                    <div class="flex-forbutton">
                        <button>Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>
</html>