<?php

include ('connect.php');
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: Login.php");
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UUC WEBSITE</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
    
    <script src ="script.js" defer></script>
    <script src="https://kit.fontawesome.com/25bc89a4e6.js"
      crossorigin="anonymous"
    ></script>
  
</head>
<body>
  
    <div class="Containerbg">
        <div class="tab-content">
          
                <ul class="tabs">
                <li data-tab-target="#Home" class="active tab">Home</li>
    <li data-tab-target="#ProjectTabs" class="tab">Project Tabs</li>
    <li data-tab-target="#SDGs" class="tab">SDGs</li>
    <li data-tab-target="#VM" class="tab">Vision and Mission</li>
    <li data-tab-target="#abtus" class="tab">About Us</li>     
    <li><a class="Logout" href="Logout.php">Logout</a></li>
                </ul>
            
      </br></div>
        <form>
      <fieldset>
      <marquee>Welcome <?php echo ucfirst($row ["username"]).  (" to our Website!");?> </marquee> 
      </fieldset>
     </form>
     
     
     <div class="tab-content">
    <div id="Home" data-tab-content class="active">
    <h3>The Latest Updates</h3>
      
      <fieldset>
      <div class="home-video home-banner">
		<video controls="" preload="none"  muted="true" autoplay="" loop="" width= "1430px" height= "440px" float= "left">
			<source src="SDG.mp4" type="video/mp4"></br>
		</video>
      </fieldset>

    <fieldset>
       
       <iframe style= "width:476px; height:476px; float: left; style:border:none;overflow:hidden; scrolling:no; margin:1% "; src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FUSTUNESCOClub%2Fvideos%2F1001711414073759%2F&show_text=false&width=476&t=0"></iframe></br></br>
        </br></br></br></br></br></br>
        
        <div class="post">
           
               <div class="container">
               <p class="content"> Go Go Goals!: essages from the UN SDG for Youth Network
           Our first community development program for this term, 𝐆𝐨 𝐆𝐨 𝐆𝐨𝐚𝐥𝐬!: 𝐀𝐝𝐯𝐨𝐜𝐚𝐜𝐢𝐞𝐬 𝐑𝐨𝐨𝐭𝐞𝐝 𝐓𝐡𝐫𝐨𝐮𝐠𝐡 𝐒𝐭𝐨𝐫𝐢𝐞𝐬 🎨, was
           visited by a few global leaders from the 𝐔𝐍 𝐒𝐃𝐆 𝐟𝐨𝐫 𝐘𝐨𝐮𝐭𝐡 𝐍𝐞𝐭𝐰𝐨𝐫𝐤 🌎. Watch the video below and get to hear their messages of inspiration they have left for 
          our advocates.
          #GGGArts 🎨
          #BuildPeaceByPiece</br>
          December 5,2022</p>
         <button onclick="readMore(this)">Read More</button>
           
             </div> 

            </fieldset>
       
     
     
       
            
            <fieldset>
            <iframe style= " width:560px; height:314px ; float: right; style:border:none;overflow:hidden; scrolling:no; margin:1% "; src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FUSTUNESCOClub%2Fvideos%2F1062922981241913%2F&show_text=false&width=560&t=0"></iframe></br></br>
              </br></br></br>
              <div class="post">
                 
              <div class="container">
               <p class="content"> 𝐀𝐫𝐞 𝐲𝐨𝐮 𝐞𝐱𝐜𝐢𝐭𝐞𝐝 𝐭𝐨 𝐥𝐢𝐬𝐭𝐞𝐧 𝐭𝐨 𝐨𝐮𝐫 𝐟𝐢𝐧𝐚𝐥𝐞 𝐭𝐨𝐦𝐨𝐫𝐫𝐨𝐰? 🙀🧡
                  While waiting for the big day, here’s just a slice of our bountiful discussion with 𝐅𝐨𝐫𝐜𝐞 𝐨𝐟
              
              𝐍𝐚𝐭𝐮𝐫𝐞’𝐬 𝐕𝐢𝐝𝐚. The full episode will be out for streaming tomorrow, 7:30 PM, on Spotify! 🎙</br>
            #SayPeaceWithUUC ✌🏼
           #BuildPeaceBySayPeace 🎙</br>
           📌 Video by Maddie Saguid & Noelle Isungga
          𝗜𝗻 𝗽𝗮𝗿𝘁𝗻𝗲𝗿𝘀𝗵𝗶𝗽 𝘄𝗶𝘁𝗵:
         Ashoka Philippines
          Interact Club of Zamboanga City West
           Online SDG Youth Action Forum
            The Indiependent Collective 
          Tzu Chi Youth Philippines
         UST Student Organizations Coordinating Council</br>
         May 15,2022</p>
         <button onclick="readMore(this)">Read More</button>
                    
               
        </div> 
            </fieldset> 
            </div>  

            
            
      <fieldset>
    <div id="ProjectTabs" data-tab-content>

      <h1>Past Events</h1>
      <div class="container-2">
        <fieldset>
        <img src="Pro1.jpg" alt = "event pic" class ="pro"><a class ="text" href="https://web.facebook.com/events/645120315921400/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D"> Baybayin Summit 2.0 and Indigenous Language Conference
	 </a><br></fieldset>
   </div>
   <div class="container-2">
   <fieldset>
   <img src="Pro2.jpg" alt = "event pic" class ="pro"><a class ="text" href="https://web.facebook.com/events/352368702038569/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D">UNESCOwentuhan
	 </a><br></fieldset>
            </div>
   <div class="container-2">
   <fieldset>
   <img src="Pro3.jpg" alt = "event pic" class ="pro"><a class ="text" href="https://web.facebook.com/events/216124669265075/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D">Convergence: Transforming Communities Across Diversities
	 </a><br></fieldset>
   </div>
   <div class="container-2">
   <fieldset>
   <img src="Pro4.jpg" alt = "event pic" class ="pro"><a class ="text" href="https://web.facebook.com/events/1995019690520315/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D">UST Unesco Club
	 </a><br></fieldset>
   </div>
   <div class="container-2">
   <fieldset>
   <img src="Pro5.jpg" alt = "event pic" class ="pro"><a class ="text" href="https://web.facebook.com/events/1805725033070065/?acontext=%7B%22event_action_history%22%3A[%7B%22surface%22%3A%22page%22%7D]%7D">KAMALAYAN: A Seminar on Land Rights of the Indigenous People
	 </a><br></fieldset>
   </div>
    </div>
            
        
    <div id="SDGs" data-tab-content>
		<div><a href="https://sdgs.un.org/goals/goal5"><img src="SDG5.jpg" alt="goal logo" class="sdg">
	 </a>
   <a href="https://sdgs.un.org/goals/goal12"><img src="SDG12.jpg" alt="goal logo" class="sdg">
	 </a>
   <a href="https://sdgs.un.org/goals/goal13"><img src="SDG13.jpg" alt="goal logo" class="sdg">
	 </a>
    <a href="https://sdgs.un.org/goals/goal15"><img src="SDG15.jpg" alt="goal logo" class="sdg">
	 </a>
    </div>
            </div>
    </div> 
            </fieldset>
    <div id="VM" data-tab-content>
      
      
      <table margin-left = "100px">
        <fieldset>
        <!-- <img src="https://scontent.fmnl2-2.fna.fbcdn.net/v/t39.30808-6/299077080_5803239489707096_6614850725136915617_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGTNJiBhhrE2twfgOJNfwX1itHtbi9BZ_6K0e1uL0Fn_is1EAa3OWmA4CTPehZ8QZA9dCjYCVbHTZmC_zuuiIPA&_nc_ohc=vjpFOJdEMq8AX8L3NiS&_nc_oc=AQmsb_kMJ3NIvniqxiitelZgeJ0CK2QuibgYzMyBNJTEL816OexCCe9slk5UucT1dg4&tn=-bLBc3yf3GqG-qtX&_nc_ht=scontent.fmnl2-2.fna&oh=00_AfB66nwvDuay0A_MGPmgXnlChi-ziLWfAo-jsev7kAT0Og&oe=63908206"  width ="100%;" > -->
        <div id="about-2">
     <div class="content-box-lg">
         <div class="container1">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="Mission"></i>
                     <h3>MISSION</h3>
                     <hr></br>
                     <p class= "p2"> We are committed to the Vision-Mission of the University of Santo Tomas Through serving as an
                      avenue to improve the general knowledge of the Thomasian community on Filipino culture and heritage 
                      and to strengthen the sense of nationalism among its member by developing a sense of empathy Through
                      diverse activities, projects and community development programs anchored on the pillars (culture, education, human, social and
                      natural sciences, and communication and information) of UNESCO.
                        </p>
                     </div>
                 </div>
            </div>
            </div>
            </div>
            
        </fieldset>
        </div>
        <fieldset>
        <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="Vision"></i>
                     <h3>VISION</h3>
                     <hr></br>
                   <p class= "p2">  The United Nations Educational, Scientific and Cultural Organization(UNESCO) Club of the University Of Santo
                      Tomas, imbued with the values of competence, compassion and commitment, envisions itself to be a community of dynamic
                    members, sufficiently equipped with the fundamental understanding and appreciation of the Filipino culture and heritage,
                  initiating positive contributions starting from the grassroot level towards a better society through advocacy on peace,
                education, culture, natural, human and social sciences and communications and information. </p>
                     </div>
                 </div>
            </fieldset>
            </table>
    </div>
    <div id="abtus" data-tab-content>
    <table margin-left = "100px">
      <fieldset>
      
      
         <div id="about-2">
     <div class="content-box-lg">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="About Us"></i>
                     <div class="post">
                     <h3>About Us</h3>
                     <hr></br>
                     <p class ="content" > Throughout the years, UST UNESCO Club has been dedicated in building advocacies through education, culture, natural, human and social sciences, 
                      and communication and information to create a positive impact in the community.
                      UST UNESCO Club is a University-Wide Organization in the University of Santo Tomas 
                      and an accredited UNESCO Club of the UNESCO National Commission of the Philippines. It has dedicated itself to promote UNESCO's objectives of 
                      attaining quality education for all, 
                      continuous learning policy for sustainable development, addressing emerging social and ethical challenges, fostering cultural diversity, intercultural dialogue, 
                      a culture of peace, 
                      and building inclusive knowledge societies through information and communication.</p>
                  
                      <button onclick="readMore(this)">Read More</button> 
                     </div>
                 </div>
            </div>
            </div>
            </div>
            </div>
            </table>
            </fieldset>
            
            <fieldset> 
              
            
            <div id="about-2">
     <div class="content-box-lg">
         
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item1 text-center">
                     <i class="About Us"></i>
                     
                     <h3>Visit Us Through Our Social Media Accounts Below</h3>
                     <hr>
                     <div class="social-links">
      <a class="social-icon" href="https://www.instagram.com/ust_unescoclub/?fbclid=IwAR3jAAYQMoJstn-TNLYunPRL-V7tYJUbY4Cq4QTZVbf56J8q4GkbNTW13MY" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
      
      <a class="social-icon" href="https://www.facebook.com/USTUNESCOClub" target="_blank">
      <i class="fa fa-facebook"></i>
      </a>
      </fieldset>
                 </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
            
    </div>
              
            
</body>
</html>