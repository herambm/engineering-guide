<?php require_once("session.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>SYLLABUS</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" style="color:white" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  #section11 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#c7ad88 ;}
  #section21 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#64706c ;}
  #section22 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#935347;}
  #section23 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#c7ad88;}
  #section24 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#64706c ;}
  #section25 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#935347;}
  #section26 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#c7ad88;}
  #section27 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#64706c;}
  #section31 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#935347 ;}
  #section32 {padding-top:50px;height:300px;color:#f6f1ed ; background-color:#c7ad88 ;}
  #section33 {padding-top:50px;height:500px;color:#f6f1ed ; background-color: #64706c;}
  #section34 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#935347;}
  #section34 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#c7ad88 ;}
  #section35 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#64706c ;}
  #section36 {padding-top:50px;height:500px;color:#f6f1ed ; background-color: #935347;}
  #section37 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#c7ad88;}
   #section41 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#64706c  ;}
  #section42 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#935347;}
  #section43 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#c7ad88 ;}
   #section44 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#64706c  ;}
  #section45 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#935347;}
  #section46 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#c7ad88 ;}
 #section47 {padding-top:50px;height:500px;color:#f6f1ed ; background-color:#64706c  ;}
  
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:white" href="front.php">INFONGINEERING</a>
       
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
 
              <li><a  href="#section11">First Year</a></li>
              
           
          
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color:white" href="#">Second Year <span class="caret"></span></a>
            <ul class="dropdown-menu">
             <li><a  href="#section21">Computer Engineering</a></li>
              <li><a  href="#section22">Electrical Engineering</a></li>
              <li><a  href="#section23">Mechanical Engineering</a></li>
              <li><a  href="#section24">Civil Engineering</a></li>
              <li><a  href="#section25">Information Technology</a></li>
              <li><a  href="#section26">Electronics Engineering</a></li>
              <li><a  href="#section27">EXTC Engineering</a></li>
           
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color:white" href="#">Third Year <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section31">Computer Engineering</a></li>
              <li><a  href="#section32">Electrical Engineering</a></li>
              <li><a href="#section33">Mechanical Engineering</a></li>
              <li><a  href="#section34">Civil Engineering</a></li>
              <li><a href="#section35">Information Technology</a></li>
              
               <li><a  href="#section37">Electronics Engineering</a></li>
              <li><a  href="#section36">EXTC Engineering</a></li>
              
           
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color:white" href="#">Fourth Year<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a  href="#section41">Computer Engineering</a></li>
              <li><a  href="#section42">Electrical Engineering</a></li>
              <li><a  href="#section43">Mechanical Engineering</a></li>
              <li><a  href="#section44">Civil Engineering</a></li>
              <li><a  href="#section45">Information Technology</a></li>
              <li><a  href="#section46">Electronics Engineering</a></li>
              <li><a  href="#section47">EXTC Engineering</a></li>
            </ul>
          </li>
           </ul>
        <ul class="nav navbar-nav navbar-right"><li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li></ul>
      </div>
    </div>
  </div>
</nav>
<style>
 /*#f>a{
	
	text-decoration:underline;

} */

</style>
<div id="f">
<div id="section11" class="container-fluid">

 <h1> </h1>
  <h2 >First Year</h2>
  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Year</th>
            <th>Subject(Sem-1)</th>
            <th>Year</th>
            <th>Subject(Sem-2)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/AM1.pdf">Maths-1</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/AM2.pdf">Maths-2</a></td>

             </tr>
             <tr>
                   
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/AP1.pdf">Physics-1</a></td>
                     <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/AP2.pdf">Physics-2</a></td>
             </tr>
              <tr>
                
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/AC1.pdf">Chemistry-1</a></td>
                     <td>May 2015</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/AC2.pdf">Chemistry-2</a></td>
             </tr>
              <tr>
                   
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/BEEE.pdf">BEE</a></td>
                     <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/ED.pdf">Engineering Drawing</a></td>
             </tr>
              <tr>
                   
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/AM1.pdf">Mechanics</a></td>
                     <td>May 2015</td>
                    <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/SPA.pdf">S.P.A.</a></td>
             </tr>
              <tr>
                   
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/FE/EVS.pdf">EVS</a></td>
                     <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/FE/SEM%202/COMMUNICATION%20SKILLS.pdf">Comm. Skills</a></td>
             </tr>

     </tbody>
     </table>
    </div>
<div id="section21" class="container-fluid">

  <h2>Second Year</h2>
  <table class="table table-condensed">
     <thead>
            <tr>
           
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem3)</th>
            <th>Year</th>
            <th>Subject(Sem4)
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Computer Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/AM3.pdf">Maths3</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/AM4.pdf">Maths4</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/DiS.pdf">Discrete Structures</a></td>
                  <td>May 2015</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/COA.pdf">C.O.A.</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/DS.pdf">Data Structures</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/TCS.pdf">Theoretical C.S.</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/DLDA.pdf">Digital Logic Design & Analysis</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/AOA.pdf">Analysis of Algorithms</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/OOPM.pdf">OOPM</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/DBMS.pdf">DBMS</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/ECCF.pdf">Ele. Circuits & fundamentals</a></td>
                  <td>May 2015</td>
<td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/CG.pdf">Computer Graphics</a></td>
             </tr>

     </tbody>
     </table>
</div>
    <div id="section22" class="container-fluid">

  
  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem-3)</th>
            <th>Year</th>
            <th>Subject(Sem-4)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Electrical Engineering</td>
                  <td>December 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/3/AM3/AM3-D13.pdf">Maths</a></td>
                  <td>May 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/4/EMA/EM4-D13.pdf">Maths</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>December 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/3/CNCPG/CNCPG-D13.pdf">C&NC Power Generation</a></td>
                  <td>December 2013</td>
                     <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/4/EM1/EM1-M14.pdf">Electrical Machines</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/3/EEM/EEM-D13.pdf">Electrical & Electronic Measurements</a></td>
                  <td>May 2013</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/4/ADIC/ADIC-M14.pdf">Analog and Digital Circuits</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/3/EDC/EDC-D13.pdf">Electronics devices and circuits</a></td>
                  <td>May 2013</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/EPS-D13.pdf">Elements Of Power System</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/3/EN/EN-M13.pdf">Electrical Networks</a></td>
                  <td>May 2013</td>
                    <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/4/SP/SP-M14.pdf">Signal Processing</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/3/BE/BE-M13.pdf">Basic Electronics</a></td>
                  <td>May 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/4/NMOT/NMOT-M14.pdf">NMOT</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>May 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/3/EMMI/EMMI-M13.pdf">EMMI</a></td>
                  <td>May 2013</td>
                    <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/ECD-D13.pdf">ECD</a></td>
                  
             </tr>
             <tr>
                   <td></td>
                    <td>December 2013</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/ELEC/4/NMOT/NT-M13.pdf">Numerical Techniques</a></td>
                
             </tr>

     </tbody>
     </table>
</div>
 <div id="section23" class="container-fluid">

 
  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem-3)</th>
            <th>Year</th>
            <th>Subject(Sem-4)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Mechanical Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/Maths3.pdf">Maths</a></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/Maths4.pdf">Maths</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/SOM.pdf">Strength Of Materials</a></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/TOM1.pdf">Theory of Machines</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/Therno.pdf">Thermodynamics</a></td>
                  <td>December 2015</td>
                    <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/MT.pdf">Material Technology</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/PP1.pdf">Production Process - 1</a></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/FM.pdf">Fluid Mechanics</a></td>
             </tr>
<tr><tr>

             
     </tbody>
     </table></tr></div>

<div id="section24" class="container-fluid">

 
  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Civil Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem3/Maths3_M15.pdf">Maths</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem4/Maths4-M15.pdf">Maths</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem3/SOM_M15.pdf">Strength Of Materials</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem4/SA1-M15.pdf">Structural Analysis</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem3/Engineering_Geology-M15.pdf">Engineering Geology</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem4/Concrete_Technology-D14.pdf">Concrete Technology</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Mech/PP1.pdf">Surveying</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem4/Surveying2-M15.pdf">Surveying-2</a></td>

             </tr>
             <tr>
                 <td></td>
                 <td>December 2015</td>
                 <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem3/BMC_M15.pdf">Building Materials</a></td>
                 <td>May 2015</td>
                 <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/Civil%202010%20onwards/sem4/BDD1_D13.pdf">Building Materials</a></td>
             </tr>
             <tr>
                 <td></td>
                 <td>December 2015</td>
                 <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem3/FM_D14.pdf">Fluid Mechanics</a></td>
                 <td>May 2015</td>
                 <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem4/FM2-D14.pdf">Fluid Mechanics-2</a></td>
             </tr>

           
     </tbody>
     </table>
     </div>

<div id="section25" class="container-fluid">

  
  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem-3)</th>
            <th>Year</th>
            <th>Subject(Sem-4)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Information Technology</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/AM3.pdf">Maths-3</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/AM4.pdf">Maths-4</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/OOPM.pdf">Object-Oriented Programming</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/COA.pdf">C.O.A.</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/DBMS.pdf">Database Management System</a></td>
                   <td>May 2015</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/WP.pdf">Web Programming</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/ADC.pdf">Analog & Digital Circuits</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/SE/SEM%204/IT/CN.pdf">Computer Networks</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/DSAA.pdf">Data Stucture</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/AT.pdf">Automata Theory</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/PADC.pdf">Principle Of Analog signals</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/IT/ITC.pdf">IT and coding</a></td>
             </tr>

     </tbody>
     </table>
</div>

<div id="section26" class="container-fluid">


  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem-3)</th>
            <th>Year</th>
            <th>Subject(Sem-4)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Electronics Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/AM3.pdf">Maths-3</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/AM4.pdf">Maths-4</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/DCD.pdf">Digital Circuits and Design</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/MPP.pdf">Microprocessor and Peripheral</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/EIM.pdf">Electronics Instruments</a></td>
                   <td>May 2015</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/FCE.pdf">F.C.E.</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/ED.pdf">Electronic Devices</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/DEC.pdf">D.E.C.</a></td>
             </tr>
             
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/CT.pdf">Circuit Theory</a></td>
                   <td>May 2015</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/ETRX/PCS.pdf">P.C.S.</a></td>
             </tr>

     </tbody>
     </table>
</div>
<div id="section27" class="container-fluid">

 
  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem-3)</th>
            <th>Year</th>
            <th>Subject(Sem-4)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>EXTC Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/AM3.pdf">Maths-3</a></td>
                  <td>May 2015</td>

                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/AM4.pdf">Maths-4</a></td>
             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/AE1.pdf">Analog Electronics</a></td>
                  <td>May 2015</td>
                     <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/MPP.pdf">M.P.P.</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/EIM.pdf">Electronic Instruments</a></td>
                  <td>May 2015</td>
                   <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/SS.pdf">Signal Systems</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/CTL.pdf">Circuits and Transmissions</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/AE2.pdf">Analog Electronics 2</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/Comps/OOPM.pdf">Digital Electronics</a></td>
                  <td>May 2015</td>
                      <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/WTP.pdf">W.T.P.</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/DE.pdf">Ele. Circuits & fundamentals</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/SE/EXTC/CS.pdf">Control Systems</a></td>

             </tr>

     </tbody>
     </table>
</div>


  

<div id="section31" class="container-fluid">
  <h2>Third Year</h2>
  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(sem5)</th>
            <th>year</th>
            <th>subject (sem6)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Computer Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/TE/Comps/MP.pdf">Microprocessor</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/COMP/MCC.pdf">mobile communication &computing</a></td>
             </tr>

             <tr>

                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/TE/Comps/OS.pdf">Operating Systems</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/COMP/DD.pdf">Distributed Databases</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/TE/Comps/SOOAD.pdf">OOAD</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/COMP/SOFTWARE%20ENGG.pdf">software engineering</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/TE/Comps/CN.pdf">Computer Networks</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/TE/Comps/SPCC.pdf">System Programming and compiler construction</a></td>

             </tr>

  
     </tbody>
     </table>
</div>



<div id="section32" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            <th>Branch</th>
            <th>Year</th>
            <th>Subject( Sem 5)</th>
            <th>Year</th>
            <th>Subject (Sem 6)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                  <td>Information Technology</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%205/IT/CG%20&%20VR.pdf">Computer Graphics and Virtual Reality</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/IT/SOFTWARE%20ENGG.pdf">Software Engineering</a></td>

             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%205/IT/OS.pdf"> Operating Systems</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href=" http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/IT/DISTRIBUTED%20SYS.pdf"> Distributed Systems</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%205/IT/MES.pdf">Microcontroller and Embedded Systems</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/IT/SYSTEM%20AND%20WEB%20SECURITY.pdf ">System and Web Security</a></td>

             </tr>
              

  
     </tbody>
     </table>
</div>




<div id="section33" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 5)</th>
            <th>Year</th>
            <th>Subject(Sem 6)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Mechanical</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/5/IC%20Engineering.pdf">I C Engines</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/6/Metrology%20&%20Quality%20Engineering.pdf">Metrology and Quality Engineering</a> </td>

             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/5/Mechanical%20Measurement%20&%20Control.pdf">Mechanical Measurements and Control </a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/6/Machine%20Design%201.pdf ">Machine Design I </a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/5/Production%20Process%20-%201.pdf">Production Process III</a></td>
                   <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/6/Mechanical%20Vibratin.pdf">Mechanical Vibrations</a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/5/Theory%20of%20Machines%202.pdf">Theory of Machines II</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/mech/6/Mechactronics.pdf">Mechatronics</a></td>
             </tr>

  
     </tbody>
     </table>
</div>






<div id="section34" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
           
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 5)</th>
            <th>Year</th>
            <th>Subject(Sem 6)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
           
                  <td>civil</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Structural_Analysis2_M15.pdf">Structural Analysis 2</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem6/GE2_M15.pdf">Geotechnical Engg.II</a> </td>

             </tr>
             <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Geotechnical_Engineering_M15.pdf">Geotechnical Engg.I </a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href=" http://files.stupidsid.com/university_papers/engineering/M15/civil/sem6/DDSS_M15.pdf">Design and Drawing of Steel Structures</a></td>
             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Applied_Hydraulics1_M15.pdf">Applied Hydraulics I </a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem6/AH2_M15.pdf">Applied Hydraulics II </a></td>

             </tr>
              <tr>
                   <td></td>
                    <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Transportation_Engineering_M15.pdf">Transportation Engg.I </a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem6/TE2_M15.pdf"/>Transportation Engg 2</a></td>

             </tr>

  
     </tbody>
     </table>
</div>



<div id="section35" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 5)</th>
            <th>Year</th>
            <th>Subject(Sem 6)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>EXTC</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%205/EXTC/MICROCONTROLLERS.pdf"></a>Microcontrollers and Applications </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/EXTC/DIGITAL%20COMM.pdf"></a> Digital Communication </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%205/EXTC/AC.pdf"></a>Analog Communication </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/EXTC/DTSP.pdf"></a> Discrete Time Signal Processing </td>
             </tr>

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/missing/RSA%20-%20M-15%20-%20MU%20.pdf"></a>Random Signal Analysis </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/EXTC/CCTN.pdf"></a> Computer Communication and Telecom Networks </td>
             </tr>


             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%205/EXTC/IC.pdf"></a>Integrated Circuits</td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/TE/SEM%206/EXTC/TELEVISION%20ENGG.pdf"></a>Television Engineering  </td>
             </tr>
  
     </tbody>
     </table>
</div>


<div id="section36" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 5)</th>
            <th>Year</th>
            <th>Subject(Sem 6)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Electrical</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/Power_Elec-D13.pdf"></a>Power Electronics </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/Signal_progressing-D13.pdf"></a> Signal Processing</td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/Electrical-Machines-D13.pdf"></a>Electrical Machines-II</td>
                  <td>May 2015</td>
                  <td><a style="color:white" href=""></a> Electrical Machines–III </td>
             </tr>

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/missing/EFW.pdf"></a>Electromagnetic Fields and Waves</td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/M&M-D13.pdf"></a> Microprocessor And Microcontroller</td>
             </tr>


             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/CE-D13.pdf"></a>Communication Engineering</td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/electrical_missing/CS1-D13.pdf"></a> Control System–I</td>
             </tr>
  
     </tbody>
     </table>
</div>


<div id="section41" class="container-fluid">

  <table class="table table-condensed">
  <h2>Fourth Year</h2>
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 7)</th>
            <th>Year</th>
            <th>Subject(Sem 8)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Computer Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Comps/DSP.pdf">Digital Signal Processing</a>  </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D14/DWMBI.pdf">Data Warehouse and Mining </a> </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Comps/CSS.pdf">Cryptography and System Security</a></td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D14/HCI.pdf">Human Machine Interaction</a> </td>
             </tr>
             
             

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Comps/AI.pdf">Artificial Intelligence</a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Comps/DC.pdf">Parallel and distributed Systems</a></td>
             </tr>
             
             
       
  
     </tbody>
     </table>
</div>


<div id="section42" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 7)</th>
            <th>Year</th>
            <th>Subject(Sem 8)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Electrical Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Power System Operation and Control  </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">Design, Management and Auditing of Electrical Systems</a> </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  High Voltage DC Transmission </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href=""> Drives and Control  </a> </td>
             </tr>
             
             

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Electrical Machine Design </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">  Power System Planning and Reliability </a> </td>
             </tr>
  
     </tbody>
     </table>
</div>





<div id="section43" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 7)</th>
            <th>Year</th>
            <th>Subject(Sem 8)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Mechanical </td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Mech/MD2.pdf">Machine Design-II</a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">Design of Mechanical Systems</a> </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Mech/CCC.pdf">   CAD/CAM/CAE </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Mech/IEERP.pdf">Industrial Engineering and Management</a> </td>
             </tr>
             
             

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/D15/BE/Mech/MUS.pdf"> Mechanical Utility Systems </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">Refrigeration and Air Conditioning </a> </td>
             </tr>
  
     </tbody>
     </table>
</div>


<div id="section44" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 7)</th>
            <th>Year</th>
            <th>Subject(Sem 8)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Civil Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href= "http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Structural_Analysis2_D14.pdf">  Structural Analysis - 2 </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">Design and Drawing Of Concrete Structures</a> </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Transportation_Engineering_D14.pdf"> Transportation Engineering  </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href=""> Construction Management  </a> </td>
             </tr>
             
             

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/BDD2_D14.pdf">  Building Design </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">  Construction Engineering </a> </td>
             </tr>

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Applied_Hydraulics1_D14.pdf">  Applied Hydraulics </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">   </a> </td>
             </tr>
              <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/university_papers/engineering/M15/civil/sem5/Entrepreneurship_Management_D14.pdf">  Enterpreneureship and Management </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">   </a> </td>
             </tr>
  
     </tbody>
     </table>
</div>
<div id="section45" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 7)</th>
            <th>Year</th>
            <th>Subject(Sem 8)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Information Technology</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Power System Operation and Control  </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">Design, Management and Auditing of Electrical Systems</a> </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  High Voltage DC Transmission </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href=""> Drives and Control  </a> </td>
             </tr>
             
             

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Electrical Machine Design </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">  Power System Planning and Reliability </a> </td>
             </tr>
  
     </tbody>
     </table>
</div>
<div id="section46" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 7)</th>
            <th>Year</th>
            <th>Subject(Sem 8)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>Electronics Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Power System Operation and Control  </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">Design, Management and Auditing of Electrical Systems</a> </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  High Voltage DC Transmission </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href=""> Drives and Control  </a> </td>
             </tr>
             
             

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Electrical Machine Design </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">  Power System Planning and Reliability </a> </td>
             </tr>
  
     </tbody>
     </table>
</div>
<div id="section47" class="container-fluid">

  <table class="table table-condensed">
     <thead>
            <tr>
            
            <th>Branch</th>
            <th>Year</th>
            <th>Subject(Sem 7)</th>
            <th>Year</th>
            <th>Subject(Sem 8)</th>
            </tr>
     </thead>
     <tbody>
             <tr>
                   
                  <td>EXTC Engineering</td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Power System Operation and Control  </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">Design, Management and Auditing of Electrical Systems</a> </td>
             </tr>
             
             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  High Voltage DC Transmission </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href=""> Drives and Control  </a> </td>
             </tr>
             
             

             <tr>
                   
                  <td></td>
                  <td>December 2015</td>
                  <td><a style="color:white" href="http://files.stupidsid.com/">  Electrical Machine Design </a> </td>
                  <td>May 2015</td>
                  <td><a style="color:white" href="">  Power System Planning and Reliability </a> </td>
             </tr>
  
     </tbody>
     </table>
</div>











      

</div>
</body>
</html>