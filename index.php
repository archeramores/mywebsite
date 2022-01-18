<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/venryn-sans" type="text/css"/>
<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/pepsi-cyr-lat" type="text/css"/>


<title>Archer Amores | Personal Website</title>

<style type="text/css">


body,html{
    height: 100%;
    margin: 0;
    font-size: 18px;
    font-family: "Lato" sans-serif;
    line-height: 1.5em;
    font-weight: 300;
    background-color: black;
    
    
}
/*FIRST SECTION*/
.bg-image{
    background-image: url('Images/TitleImage.jpeg');
    min-height: 700px;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    position: relative;
    background-size: cover; 
    filter: grayscale(60%);
    opacity: 0.9;
}

.message{
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0, 0.4); 
    color: white;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
    
}

#name{
    font-family: 'PepsiCyrLatRegular';
   font-weight: normal;
   font-style: normal;
   word-spacing: 0.5em;
   font-size: 80px;
}

#descrip{
    font-family: 'VenrynSansRegular';
    font-weight: normal;
    font-style: normal;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
  
}

.fa:hover {
    opacity: 0.7;
}

.fa-instagram{
    background: #125688;
    color: white;
}

.fa-facebook{
    background: #3B5998;
    color: white;
}
.fa-github{
    background: #cb2027;
    color: white;
    
} /*END OF FIRST SECTION*/


/*SECOND SECTION*/
.about{
    background-color: black;
    min-height: 600px;
    background-size: cover;
}
.profile{
    height: 80px;
    position: static;
    filter: grayscale(80%);
    
    
}
.abouttxt{
    color: white;
    position: relative;
    letter-spacing: 0.14em;
    font-size: auto;
    text-align: justify;
    font-family: 'VenrynSansRegular';
    font-weight: normal;
    font-style: normal;
    
}
 #title{
     font-size: 300%;
     margin-left: -20%;
     font-weight: 800;
     color: rgba(255, 255, 255, 0.87);
 } /*END OF SECOND SECTION*/


/*THIRD SECTION*/
.educ{
    background-color: black;
    color: whitesmoke;
    min-height: 600px;
    background-size: cover;
    font-family: 'VenrynSansRegular';
    font-weight: normal;
    font-style: normal;
    min-height: 400px;
}
.edtext{
    color: rgba(255, 255, 255, 0.87);
    font-size: 300%;
    margin-left: 1%;
}

#schools{
    font-size: 158%;
    margin-top: 6%;
}
/*END OF THIRD SECTION*/


/*FOURTH SECTION*/
.skills{
    font-family: 'VenrynSansRegular';
    font-weight: normal;
    font-style: normal;
    color: whitesmoke;
    background-color: black;
    
}
#skilltext{
    text-align: right;
    margin-right: 3%;
    color: rgba(255, 255, 255, 0.87);
    font-size: 300%;
}
.icon{
    height: 40px;
    width: 40px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
 
table,th,td{
    border: 2px white;
    background-color: rgba(255, 255, 255, 0.082);
    min-width:100%;
    
}
th,td{
    text-align: center;
    padding: 5px;
    border-bottom: solid;
}
#comp{
    margin-top: 3%;
    background-color: rgb(47, 89, 114);
    border-radius:4% ;
    border-bottom: 1px solid black;
    border-collapse: collapse;
}
#med{
    margin-top: 3%;
    background-color: rgba(151, 78, 65, 0.726);
    border-radius: 4%;
    border-bottom: 1px solid black;
    border-collapse: collapse;
} /*END OF FOURTH SECTION*/


/*JAVASCRIPT*/
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 15px;
  border: none;
  outline: none;
  background-color: rgb(232, 248, 4);
  color: rgb(0, 0, 0);
  cursor: pointer;
  padding: 1px;
  border-radius: 50px;
  font-family: 'VenrynSansRegular';
    font-weight: normal;
    font-style: normal;
    opacity: 0.9;
}

#myBtn:hover {
  background-color: rgb(253, 21, 21);
}

</style>
</head>




<body>
    

    <main>

        <!------FIRST SECTION----->
        <div>
            <div class="bg-image"></div>
                <div class="message">
                    <div class="message-text">
                        <h1 id="name">ARCHER AMORES</h1>
                            
                                <div id="socmed">
                                    <a href="https://www.instagram.com/archeramores/" target="_blank" class="fa fa-instagram"></a>
                                    <a href="https://www.facebook.com/amorescheanarcher/" target="_blank" class="fa fa-facebook"></a>
                                    <a href="https://github.com/archeramores" target="_blank" class="fa fa-github"></a>
                                </div>
                    </div>
                </div>
        </div> <!----END OF FIRST SECTION----->


        <!---SECOND SECTION---->
        <div id="about-me" class="about">
            <div class="profile"><img src="Images/profile.png" style="height: 600px; width: 505px;"></div>
            <div>
            <h2 style="text-align: center;" class="abouttxt" id="title">ABOUT ME</h2>
            <hr style="left: 50%;"> 
            <h4 style="margin-right: 2%; text-align: justify; margin-left: 37%;" class="abouttxt">
                Passionate student who have specific goals to achieve after graduating the current course.
                Information technology serves as a stepping stone for me to reach my goals in life.
                I plan on working in an IT-field after graduating and use acquired skills (specifically business-related)
                to start my own small business and make it grow through experience and process. As a student,
                I excel on analyzing case studies which will become useful in business analytics-related jobs.
            </h4>
            </div>
        </div> <!--END OF SECOND SECTION-->



        <!----THIRD SECTION----->
        <div class="educ">
            
            <p class="edtext">EDUCATIONAL HISTORY</p>
            <hr>
                <ul id="schools">
                    <li><b>Tertiary:</b> Batangas State University (2018-present)</li>
                    <li><b>Secondary:</b> Rizal College of Taal (2012-2018)</li>
                    <li><b>Primary:</b> Our Lady of Caysasay Academy (2005-2012)</li>
                </ul>
        </div> <!---END OF THIRD SECTION-->


        <!--FOURTH SECTION-->
        <section class="skills">
            <div id="skilltext">SKILLSET</div>
            <hr>
            <table class="tabl" id="comp">
                <th colspan="6" style="font-size: 50px; padding-bottom: 25px; padding-top: 25px;"><b>SCRIPT & PROGRAMMING LANGUAGE</b></th>
                <tr>
                    <td></td>
                    <td>Beginner</td>
                    <td>Elementary</td>
                    <td>Average</td>
                    <td>Advanced</td>
                    <td>Expert</td>
                </tr>

                <tr>
                    <td>HTML</td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>CSS</td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Bootstrap</td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Python</td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                

                <tr>
                    <td>C++</td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>PHP</td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td><img src="Images/r2d2.png" class="icon"></td>
                    <td></td>
                    <td></td>
                </tr>
            
            </table>



            <table  class="tabl" id="med">
                <th colspan="6" style="font-size: 50px; padding-bottom: 25px; padding-top: 25px;">GRAPHIC & VIDEO SOFTWARE</th>
                
                <tr>
                    <td></td>
                    <td>Beginner</td>
                    <td>Elementary</td>
                    <td>Average</td>
                    <td>Advanced</td>
                    <td>Expert</td>
                </tr>

                <tr>
                    <td style="font-weight: bolder;">Phtoshop</td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Illustrator</td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Lightroom</td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Vegas Pro</td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td></td>
                </tr>

                <tr>
                    <td>After Effects</td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td><img src="Images/bb8.png" class="icon"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
        </section> <!--END OF FOURTH SECTION-->



    </main>



    <!--SCROLL TO TOP-->
<button onclick="topFunction()" id="myBtn" title="Go to top" ><img src="Images/arrow.gif" style="height: 50px; width: 50px; border-radius: 40px;"></button>
<script>
        
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
</script>





</body>


</html>