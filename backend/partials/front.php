<?php include('../config/constants.php'); ?>

<?php include('verify-login.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
   
   <style>
  #chatbot-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
  }

  #chatbot-popup-content {
    position: relative;
    width: 80%;
    height: 80%;
    background: trasparent;
    border-radius: 10px;
    overflow: hidden;
    
  }

  .close-btn {
    position: absolute;
    top: 8px;
    right: 12px;
    background: red;
    color: #fff;
    border: none;
    border-radius: 50%;
    font-weight: bold;
    width: 30px;
    height: 30px;
    cursor: pointer;
    z-index: 10000;
  }
  #chatbot-trigger {
    color: #fff;
    cursor: pointer;
  }
  .chatbot-iframe {
  width: 100%;
  height: 100%;
  border: none;
  overflow: hidden;
  scrollbar-width: none;     /* Firefox */
}
  #chatbot-trigger:hover{
    color:red;
  }
#chatbot-popup-content {
  position: relative;
  width: 90vw;
  height: 90vh;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.chatbot-iframe {
  width: 100%;
  height: 100%;
  border: none;
  overflow: hidden;
  scrollbar-width: none;     /* Firefox */
}

.chatbot-iframe::-webkit-scrollbar {
  display: none;             /* Chrome, Safari, Edge */
}
</style>


  
</head>
<body>
<nav>
    <div class="logo">
        <img src="../images/dsu_logo.png" alt="">
        <h3>DHANALAKSHMI SRINIVASAN <br>UNIVERSITY </h3>
    </div>

    <div class="menu" onclick="menubar()"><svg xmlns="http://www.w3.org/2000/svg" height="30" fill="#fff" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></div>
    <div class="nav-links" id="menu">
        <ul>
            <li class="close" onclick="closebar()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></li>
            <li><a href="<?php echo SITEURL?>backend/index.php">Home</a></li>
            <li><a href="<?php echo SITEURL?>backend/admin.php">Admin</a></li>
            <li><a href="students.php">Students</a></li>
            <li><a href="<?php echo SITEURL?>backend/subject.php">Subjects</a></li>
            <li><a href="<?php echo SITEURL?>backend/faculty.php">Faculties</a></li>
            <li><a href="<?php echo SITEURL;?>backend/time-table.php">Time Table</a></li>
            <li><a href="<?php echo SITEURL;?>backend/attendance.php">Attendnance</a></li>
            <li id="chatbot-trigger" >AI AGENT</li>
            
            <li><a href="log-out.php">logout</a></li>
        </ul>
    </div>
</nav>

<button class="scroll" id="btntop" onclick="Topscroll()">Top</button>

<!-- Popup Iframe Container -->
<div id="chatbot-popup" style="display: none;">
  <div id="chatbot-popup-overlay"></div>
  <div id="chatbot-popup-content" class="popup-content">
    <iframe src="http://localhost:5173/" class="chatbot-iframe" frameborder="0"></iframe>
    <button onclick="closePopup()" class="close-btn">X</button>
  </div>
</div>



      <script>
    function Topscroll(){
        document.body.scrollTop = 0; // For Safari
       document.documentElement.scrollTop = 0;
    }
      </script>
<script>

    var nav = document.getElementById("menu");
    function menubar(){
        nav.style.right="-20px";
    }

    function closebar(){
        nav.style.right="-300px";
    }
  
</script>

<script>
  document.getElementById("chatbot-trigger").addEventListener("click", function () {
    document.getElementById("chatbot-popup").style.display = "flex";
  });

  function closePopup() {
    document.getElementById("chatbot-popup").style.display = "none";
  }
</script>

