<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MBRS</title>

    <!-- Bootstrap Core CSS -->
    <script type="text/javascript" src="jquery.js"></script>
    <link href="dist/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/dist/css/bootstrap.css" rel="stylesheet">

</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<?php include 'marcnav.html'; ?>
<div id="about"class="panel panel-default container-fluid" style="background-color: #c5960c; padding-bottom:30px">
        <div class="panel-heading" >
            <center style="font-size: 45px; color: #daa520"><b>Eligibility</b></center>
        </div>
    </div>
    <section  >
        <div class="about-us" >
            <div class="container">
                <div class="col-lg-5 col-lg-offset-1 " style="color:white; font-size:20px">
                        <h2><center>Requirements</center></h2>
                        <li>Possess Underrepresented Minority Status</li>
                        <li>Beginning Junior Year 
                        <p>(Completed approximately 60-65 credits)</p></li>
                        <li>GPA 3.3 or Higher</li>
                        <li>Must be a U.S. Citizen or Permanent Resident</li>
                        <li>Enrolled Full time at FIU in the Natural Sciences, Physical Sciences or Behavioral Psychology</li>
                        <li>Have a strong desire to pursue a career in biomedical or behavioral sciences research (Ph.D. or M.D. /Ph.D.)</li>
                        
              </div>
              <div class="col-lg-5 " style="color:white; font-size:20px">
                        <h2><center>Program Benefits</center></h2>
                        <li>Monthly Stipend</li> 
                        <li>Tuition Waiver</li>
                        <li>Funded Travel to National Scientific Meetings</li> 
                        <li>Summer Research Opportunities</li> 
                        <li>Work in Research Laboratories</li>
                        <li>Participation in our Annual Mini-Symposium</li>
                        <li>Participation in Special Skills Workshops</li>
              </div>
            </div>
        </div>
    </section>
 <?php include "footer.html"; ?>
    
    <script type="text/javascript">
    $(document).ready(function () {
        $(".link").click(function () {
            $(".hide").hide();
            $("#HomeMS_Section4").css({"height":"120%"});
            var dataType = $(this).attr('data-type');
            $("#" + dataType).show();
        });
    }); 
    </script>

    <script type="text/javascript">
    $('#monitor').html($(window).width());
    $(window).resize(function(){
        var viewportWidth = $(window).width();
        $('#monitor').html(viewportWidth);
    });
    </script>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>