$(document).ready(function () {
  $(".header-burger").click(function (event) {
    $(".header-burger, .header-menu").toggleClass("active");
    $("body").toggleClass("lock");
  });
});

const box1 = document.getElementById("freeJs");
const bo2 = document.getElementById("freeHTML");
const box3 = document.getElementById("freeSQL");
const box4 = document.getElementById("freeJava");
const p1 = document.getElementById("box1P");
const p2 = document.getElementById("box2P");
const p3 = document.getElementById("box3P");
const p4 = document.getElementById("box4P");
const box1h4 = document.getElementById("box1h4");
const box2h4 = document.getElementById("box2h4");
const box3h4 = document.getElementById("box3h4");
const box4h4 = document.getElementById("box4h4");

// const lessons2 = document.getElementById("lessons2");
// const lessons3 = document.getElementById("lessons3");
function free() {
  box1.textContent = "Learn JavaScript";
  bo2.textContent = "Learn HTML";
  box3.textContent = "Learn SQL";
  box4.textContent = "Learn Java";
  p1.textContent = "Beginner friendly, 11 Lessons";
  p2.textContent = "Beginner friendly, 6 Lessons";
  p3.textContent = "Beginner friendly, 4 Lessons";
  p4.textContent = "Beginner friendly, 16 Lessons";
  box1h4.textContent = "Language Fluency";
  box2h4.textContent = "Language Fluency";
  box3h4.textContent = "Language Fluency";
  box4h4.textContent = "Language Fluency";
}
function newToCoding() {
  box1.textContent = "Learn How To Code";
  bo2.textContent = "Choose a Programming Language";
  box3.textContent = " Choosing a Career in Tech";
  box4.textContent = " Welcome To Codecademy";
  box1h4.textContent = " Welcome Series";
  box2h4.textContent = "";
  box3h4.textContent = "";
  box4h4.textContent = " Welcome Series";
  p1.textContent = "Beginner friendly, 7 Lessons";
  p2.textContent = "Beginner friendly";
  p3.textContent = "Beginner friendly";
  p4.textContent = "Beginner friendly, 1 Lessons";
}
function mostPopular() {
  box1.textContent = "Learn Python 3";
  bo2.textContent = "Learn JavaScript";
  box3.textContent = "Learn HTML";
  box4.textContent = "Learn C++";
  p1.textContent = "Beginner friendly, 14 Lessons";
  p2.textContent = "Beginner friendly, 11 Lessons";
  p3.textContent = "Beginner friendly, 6 Lessons";
  p4.textContent = "Beginner friendly, 13 Lessons";
  box1h4.textContent = "Language Fluency";
  box2h4.textContent = "Language Fluency";
  box3h4.textContent = "Language Fluency";
  box4h4.textContent = "Language Fluency";
}

function skillPaths() {
  box1.textContent = "Build a Website with HTML, CSS and Github Pages";
  bo2.textContent = "Analyze Data with SQL";
  box3.textContent = "Data Science Foundations";
  box4.textContent = "Create a Front-End App with React";
  p1.textContent = "Beginner friendly, 18 Lessons";
  p2.textContent = "Beginner friendly, 15 Lessons";
  p3.textContent = "Beginner friendly, 49 Lessons";
  p4.textContent = "Intermediate, 25 Lessons";
  box1h4.textContent = "With Final Project";
  box2h4.textContent = "With Final Project";
  box3h4.textContent = "Job Essentials";
  box4h4.textContent = "With Final Project";
}

function careerPaths() {
  box1.textContent = "Front-End Engineer";
  bo2.textContent = "Full-Stack Engineer";
  box3.textContent = "Computer Science";
  box4.textContent = "Data Scientist: Machine Learning Specialist";
  p1.textContent = "Beginner friendly, 131 Lessons";
  p2.textContent = "Beginner friendly, 170 Lessons";
  p3.textContent = "Beginner friendly, 82 Lessons";
  p4.textContent = "Beginner friendly, 81 Lessons";
  box1h4.textContent = "Job Essentials";
  box2h4.textContent = "Job Essentials";
  box3h4.textContent = "Foundations";
  box4h4.textContent = "Job Essentials";
}
const currentScroll = window.pageYOffset;
if (currentScroll > 0) {
  document.getElementsByClassName("header").style.backgroundColor = "white";
}
