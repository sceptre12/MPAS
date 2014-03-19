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

<?php include 'mbrsnav.html'; ?>
<div id="about"class="panel panel-default container-fluid" style="background-color: #c5960c; padding-bottom:30px">
        <div class="panel-heading" >
            <center style="font-size: 45px; color: #daa520"><b>Eligibility</b></center>
        </div>
    </div>
    <section >
        <div class="eligibilty" >
            <div class="container">
                <div class="row">
                The MBRS RISE program at FIU is sponsored by a National Institutes of Health
                 (NIH) grant. To receive salary support from the RISE program, students must 
                 be U.S. citizens or non-citizen nationals or permanent residents, must be 
                 enrolled full-time in academic degree programs in biomedical or behavioral 
                 science fields at FIU, and must have a cumulative GPA of 3.0 or higher. A 
                 non-citizen national is a person who, although not a citizen of the United 
                 States, owes permanent allegiance to the U.S. This is generally a person 
                 born in a land that is not a state, but that is under U.S. sovereignty, 
                 jurisdiction, or administration – for example, American Samoa. An 
                 individual lawfully admitted for permanent residence must possess a 
                 currently valid Permanent Resident Card (USCIS Form I-551) or other legal 
                 verification of such status prior to appointment in the RISE program. 
                 Individuals on temporary visas, those seeking asylum, or refugees are not 
                 eligible for support from the RISE program. Underrepresented students and 
                 students with disabilities are encouraged to apply.
            </div>
                <div class="row"><br><br>
                    <div class="col-md-5 col-lg-offset-4">
                    <ol>
                    <li>Completed on-line application</li> 
                    <li>Updated CV or Resume</li>
                    <li>Most up-to-date transcripts 
                            <br>(unofficial transcripts acceptable for current FIU students)</li>
                    <li>Three letters of recommendation addressed to Dr. Robert Lickliter, 
                        MBRS Program Director, sent to OE 165 or via email to licklite@fiu.edu.</li>
                    </ol>
                    </div>    
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