<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jckyrvn</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>

    <div class="bar">
        <svg id="exit-bar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
        <nav class="nav-bar">
            <a href="#">Home</a>
            <a href="#link-about">About</a>
            <a href="#link-project">Project</a>
            <a href="https://wa.me/6289615578090" target="_blank">Contact</a>
        </nav>
    </div>

    <header>
        <div class="nav-wrap">
            <a href="#" class="logo">Jckyrvn</a>
            <div class="detach-navbar">
                <div class="detach-1"></div>
                <div class="detach-1"></div>
                <div class="detach-1"></div>
            </div>
            <nav class="navbar">
                <a href="#">Home</a>
                <a href="#link-about">About</a>
                <a href="#link-project">Project</a>
                <a href="https://wa.me/6289615578090" target="_blank">Contact</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <div class="wrap-img">
                <div class="detach"></div>
                <img class="prev-img" src="./images/jckyrvn.jpg" alt="">
            </div>
            <div class="wrap-text">
                <h1 id="showed">Hola, I'm <span style="color: #E2B686">Jacky </span>Rovinda</h1>

                <h2 id="called">Also Known as <span id="text">Jek</span></h2>

                <p>|  A passionate Quality Assurance Engineer</p>
                <div class="cv">
                    <a href="./images/CV-Jckyrvn.pdf">Hire Me</a>
                    <a id="diff-a" href="./images/CV-Jckyrvn.pdf">Download My CV</a>
                    
                </div>
            </div>
        </div>

        <div class="skill" id="skill">
            <label>Tech Stack</label>
            <img src="./images/selenium-logo.png" alt="">
            <img src="./images/c-logo.png" alt="">
            <img src="./images/cypress-logo.png" alt="">
            <img src="./images/postman-logo.png" alt="">
            <img id="link-about" src="./images/vscode-logo.png" alt="">
        </div>
        
        
        <div class="about">
            <div class="wrap-about">
                <div class="wrap-about-image">
                    <div class="detach-circle" style="margin-top: -40px; margin-left: -40px; width: 250px; height: 250px;"></div>
                    <div class="detach-circle" style="margin-top: -20px; margin-left: -20px;"></div>
                    <img src="./images/jckyrvn-child.jpg" alt="">
                </div>
                <div class="wrap-text-content">
                    <div class="wrap-about-text">
                        <label id="about">#ABOUT ME</label>
                        <p id="link-skill">I am a engineer with critical analystic from the state of Indonesia and i am excited about Testing websites. My expertise lies in Manual testing into 
                            Automation testing Websites. My goal is to make the website better in terms of UI, and make website better with no bugs.
                            <br>
                            <br id="link-project">
                            In my leisure time, I enjoy eating Indomie and spending quality time with my girlfriend <a href="https://www.instagram.com/marchia_berlian?igsh=OW42YnBoMGUzY2Q1" target="_blank">Grace Marchia Berlian</a>.
                        </p>
                    </div>
                    <div class="wrap-about-detail">
                        <div class="wrap-about-info">
                            <label>NAME</label>
                            <p>Jacky Rovinda</p>
                        </div>
                        <div class="wrap-about-info">
                            <label>COLLEGE</label>
                            <p>STMIK Pontianak - Teknik Informatika(S1) <br> (in-progress)</p>
                        </div>
                        <div class="wrap-about-info">
                            <label>EMAIL</label>
                            <p>jckyrvn@gmail.com</p>
                        </div>
                        <div class="wrap-about-info">
                            <label>EMPLOYMENT</label>
                            <p>Open</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="project">
            <label>My Project</label>
            <a class="wrap-project" target="_blank" href="http://surl.li/sprep">
                <img src="./images/excel-logo.png" alt="">
                <div class="wrap-project-text">
                    <label>Test Cases Murzfeed</label>
                    <p>This is a test case that i created to implement an automation testing and also manual testing</p>
                </div>
            </a>
            <span style="color: white; margin-top: 10px; font-weight: bold;">~Coming soon~</span>
        </div>
        
    
        <form action="" method="">
             <label>Feedback</label>
             <div class="wrap-feedback">
                 <input type="text" name="email" id="email" autocomplete="off" placeholder="Your Email...">
                 <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Your Name...">
             </div>
             <textarea name="feedback" id="feedback" autocomplete="off" placeholder="Your Feedback..."></textarea>
             <button class="" onClick="">Send Feedback!</button>
         </form>
 
        <footer>
            <div class="wrap-a">
                <a href="https://www.linkedin.com/in/jacky-r-7b90a4296/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/jckyrvn/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
            </div>
            <p>Created and designed by Jacky Rovinda</p>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script>

    document.onkeydown = function (e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
            return false;
        }
    }
</script>
    <script>
        
       $(document).bind("contextmenu",function(e) {
            e.preventDefault();
        });
        //    var options = {
        //         strings: ["Jack", "Jek", "Jak"],
        //         typeSpeed: 150,
        //         backSpeed: 150,
        //         loop: true;
        //     }
        //     var typed = new Typed(".auto-type", options);

        $(document).ready(function(){

            $('.bar').hide();
            $('.detach-navbar').click(function(){
                $('.bar').show(200);
            })
            $('#exit-bar').click(function(){
                $('.bar').hide(200);
            })

            $('#called').hide();
            $("#showed").click(function(){
                $("#called").toggle(200);
                $("#text").css("type")    
            });
        });




        $(window).scroll(function(){
            if ($(window).scrollTop()){
                $("header").addClass("white");
                $(".logo").addClass("white");
                $("a").addClass("white");    
                $(".navbar").addClass("white");  
                $(".detach-1").addClass("white");       
            }else{
                $("header").removeClass("white");
                $(".logo").removeClass("white");
                $("a").removeClass("white"); 
                $(".navbar").removeClass("white");
                $(".detach-1").removeClass("white"); 
            }
        });
        
        
    </script>
</body>
</html>