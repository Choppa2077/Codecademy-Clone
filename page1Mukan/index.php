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
                                <a href="" class="header-link">Business Solution</a>
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
                    <div class="">
                        <h1>Home</h1>
                        <p>Hello <?= htmlspecialchars($user["name"]) ?> </p>
                    </div>
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
                            <div class="mainLeftSideHome">
                                <svg aria-hidden="true" class="gamut-lb90wd-HillsIllustration e1bwb7ub0" viewBox="0 0 101 138" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Hills Illustration</title><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="1" width="100" height="136"><path d="M2.18262 135.524C2.18262 134.12 2.24105 48.562 2.35466 47.184C3.3909 34.8717 8.96465 23.406 17.9667 15.0689C26.9687 6.73168 38.739 2.13423 50.9352 2.19145C63.1313 2.24866 74.8591 6.95634 83.7845 15.3776C92.71 23.7989 98.1787 35.3163 99.1024 47.6378C99.1932 48.8678 99.2387 134.275 99.2387 135.524H2.18262Z" fill="white" stroke="#10162F" stroke-width="2" stroke-miterlimit="10"></path></mask><g mask="url(#mask0)"><path d="M121.861 288.57C182.183 288.57 231.084 239.385 231.084 178.713C231.084 118.042 182.183 68.8572 121.861 68.8572C89.5017 68.8572 60.4288 83.0113 40.4287 105.5" stroke="#10162F"></path><path d="M75.2861 64.2294C90.7932 64.2294 103.364 51.4928 103.364 35.7813C103.364 20.0699 90.7932 7.33325 75.2861 7.33325C59.779 7.33325 47.208 20.0699 47.208 35.7813C47.208 51.4928 59.779 64.2294 75.2861 64.2294Z" stroke="#10162F" stroke-miterlimit="10"></path><path d="M15.9787 206.634C45.2898 206.634 69.0512 182.56 69.0512 152.862C69.0512 123.165 45.2898 99.0907 15.9787 99.0907C-13.3324 99.0907 -37.0938 123.165 -37.0938 152.862C-37.0938 182.56 -13.3324 206.634 15.9787 206.634Z" stroke="#10162F" stroke-miterlimit="10"></path></g><path d="M1 136.714C1 135.285 1.05985 48.1991 1.17624 46.7965C2.23775 34.2643 7.94745 22.594 17.169 14.1079C26.3906 5.62185 38.448 0.942302 50.9416 1.00054C63.4352 1.05877 75.449 5.85052 84.5922 14.4222C93.7353 22.9938 99.3374 34.7169 100.284 47.2584C100.377 48.5104 100.423 135.442 100.423 136.714H1Z" stroke="#10162F" stroke-miterlimit="10"></path></svg>
                            </div>
                            <div class="mainLeftSideHome">
                                <div>
                                    <h4>You haven't enrolled in a course yet</h4>
                                    <p>Explore our course catalog to enroll in a course.</p>
                                    <button>Find a Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contentWorkspace">
                       <h1>My Workspaces</h1>
                        <div class="twoSides">
                            <div class="mainLeftSideHome">
                                <svg aria-hidden="true" class="gamut-1rafjzs-BlocksIllustration e5vr3i60" viewBox="0 0 174 121" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Binary Blocks Icon</title><path d="M3.5332 119.239L174 119.239" stroke="#10162F"></path><path d="M0.5 79.9924H40.1294V119.622H0.5V79.9924Z" fill="#FFF0E5" stroke="#10162F"></path><path d="M39.3628 79.9924H78.9922V119.622H39.3628V79.9924Z" fill="#FFF0E5" stroke="#10162F"></path><path d="M39.3628 40.2462H78.9922V79.8756H39.3628V40.2462Z" fill="#FFF0E5" stroke="#10162F"></path><path d="M39.3628 0.5H78.9922V40.1294H39.3628V0.5Z" fill="#FFF0E5" stroke="#10162F"></path><path d="M79.1091 79.9924H118.739V119.622H79.1091V79.9924Z" fill="#FFF0E5" stroke="#10162F"></path><path d="M79.1091 40.2462H118.739V79.8756H79.1091V40.2462Z" fill="#FFF0E5" stroke="#10162F"></path><path d="M119.038 84.9749L153.358 65.1601L173.173 99.4802L138.853 119.295L119.038 84.9749Z" fill="#FFF0E5" stroke="#10162F"></path><path d="M41.0171 0.976593H78.1279V39.064H41.0171V0.976593Z" fill="url(#pattern0)"></path><path d="M40.6296 81.2589H77.7261V119.239H40.6296V81.2589Z" fill="url(#pattern1)"></path><path d="M120.178 85.1283L152.863 66.2572L172.233 99.8071L139.548 118.678L120.178 85.1283Z" fill="url(#pattern2)"></path><rect x="52.1115" y="90.0914" width="14.132" height="21.198" fill="#FFF0E5"></rect><rect x="52.1115" y="9.71582" width="14.132" height="21.198" fill="#FFF0E5"></rect><path d="M99.2002 53.3768C98.4602 54.9568 97.2802 55.2168 94.8602 55.2768V56.5368H98.5602V66.2968H94.8602V67.8768H103.44V66.2968H100.4V53.3768H99.2002Z" fill="#10162F"></path><rect x="134.771" y="87.1473" width="14.132" height="21.198" transform="rotate(-30 134.771 87.1473)" fill="#FFF0E5"></rect><path d="M143.937 87.2624C144.086 89.0007 143.194 89.8158 141.128 91.0778L141.758 92.169L144.963 90.319L149.843 98.7714L146.638 100.621L147.428 101.99L154.859 97.6997L154.069 96.3314L151.436 97.8514L144.976 86.6624L143.937 87.2624Z" fill="#10162F"></path><path d="M99.1002 108.177C102.76 108.177 104.18 105.097 104.18 100.597C104.18 96.0974 102.76 93.1574 99.1002 93.1574C95.4402 93.1574 94.0402 96.0974 94.0402 100.597C94.0402 105.097 95.4402 108.177 99.1002 108.177ZM95.9002 100.597C95.9002 96.6374 96.9202 94.7174 99.1002 94.7174C100.84 94.7174 101.86 95.9574 102.18 98.4774L95.9202 101.337C95.9002 101.097 95.9002 100.857 95.9002 100.597ZM99.1002 106.597C97.3802 106.597 96.3802 105.337 96.0402 102.857L102.3 99.9574C102.32 100.177 102.32 100.377 102.32 100.597C102.32 104.557 101.28 106.597 99.1002 106.597Z" fill="#10162F"></path><path d="M59.0594 68.1368C62.7194 68.1368 64.1394 65.0568 64.1394 60.5568C64.1394 56.0568 62.7194 53.1168 59.0594 53.1168C55.3994 53.1168 53.9994 56.0568 53.9994 60.5568C53.9994 65.0568 55.3994 68.1368 59.0594 68.1368ZM55.8594 60.5568C55.8594 56.5968 56.8794 54.6768 59.0594 54.6768C60.7994 54.6768 61.8194 55.9168 62.1394 58.4368L55.8794 61.2968C55.8594 61.0568 55.8594 60.8168 55.8594 60.5568ZM59.0594 66.5568C57.3394 66.5568 56.3394 65.2968 55.9994 62.8168L62.2594 59.9168C62.2794 60.1368 62.2794 60.3368 62.2794 60.5568C62.2794 64.5168 61.2394 66.5568 59.0594 66.5568Z" fill="#10162F"></path><path d="M19.9954 108.177C23.6554 108.177 25.0754 105.097 25.0754 100.597C25.0754 96.0974 23.6554 93.1574 19.9954 93.1574C16.3354 93.1574 14.9354 96.0974 14.9354 100.597C14.9354 105.097 16.3354 108.177 19.9954 108.177ZM16.7954 100.597C16.7954 96.6374 17.8154 94.7174 19.9954 94.7174C21.7354 94.7174 22.7554 95.9574 23.0754 98.4774L16.8154 101.337C16.7954 101.097 16.7954 100.857 16.7954 100.597ZM19.9954 106.597C18.2754 106.597 17.2754 105.337 16.9354 102.857L23.1954 99.9574C23.2154 100.177 23.2154 100.377 23.2154 100.597C23.2154 104.557 22.1754 106.597 19.9954 106.597Z" fill="#10162F"></path><path d="M59.1594 93.4174C58.4194 94.9974 57.2394 95.2574 54.8194 95.3174V96.5774H58.5194V106.337H54.8194V107.917H63.3994V106.337H60.3594V93.4174H59.1594Z" fill="#10162F"></path><path d="M59.1594 13.3362C58.4194 14.9162 57.2394 15.1762 54.8194 15.2362V16.4962H58.5194V26.2562H54.8194V27.8362H63.3994V26.2562H60.3594V13.3362H59.1594Z" fill="#10162F"></path><defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="0.215571" height="0.210043"><use xlink:href="#image0" transform="scale(0.0269463 0.0262554)"></use></pattern><pattern id="pattern1" patternContentUnits="objectBoundingBox" width="0.215654" height="0.210639"><use xlink:href="#image0" transform="scale(0.0269568 0.0263299)"></use></pattern><pattern id="pattern2" patternContentUnits="objectBoundingBox" width="0.211965" height="0.206505"><use xlink:href="#image0" transform="scale(0.0264956 0.0258131)"></use></pattern><image id="image0" width="8" height="8" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAeSURBVHgBzc4xAQAAAAEwEVxq6J+OGCzBQDk4MzgV8D0CqU26KA8AAAAASUVORK5CYII="></image></defs></svg>
                            </div>
                            <div class="mainLeftSideHome">
                                <div>
                                    <h4>Code on your own</h4>
                                    <p>Create your first workspace to experiment with what you're learning or build your own projects from scratch.</p>
                                    <button>Workspaces home</button>
                                </div>
                            </div>
                        </div>
                    </div>
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