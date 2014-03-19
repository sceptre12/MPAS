<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Responsive Image Gallery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />

		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

			<div class="content">
				<h1>MARC U* MEMBERS</h1>
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul >
									<li>
										<a href="#"><img src="images/thumbs/s1.jpg" data-large="images/b1.jpg" alt="image01" data-description="DANIEL GONZALEZ | Senior | MAJOR: BIOLOGY | MINOR Psychology and Chemistry | RESEARCH: I am working in Dr. Landrum's lab and we are investigating the different properties of carotenoids and their role in protecting individuals from macular degeneration. The carotenoids lutein, zeaxanthin, and meso-zeaxanthin accumulate in the human retina via unknown processes. Evidence supports their protective role towards photoreceptor outer segments and the retinal pigment epithelium. They do this by both acting as a barrier to the harmful effects of blue wavelengths of light and by acting as antioxidants to reduce photooxidative stress.   | Email: dgonz099@fiu.edu"/></a>
									</li>
									<li>
										<a href="#"><img src="images/thumbs/s2.jpg" data-large="images/b2.jpg" alt="image02" data-description="Chavely Valdes Sanchez | Junior | MAJOR: BIOLOGY | MINOR: Chemistry | RESEARCH: I am currently in Dr. Irina Agoulnik´s lab and our main focus is on potential hormone therapies to treat prostate cancer. In addition, my research project is focused on the effect that DAX-1 (nuclear receptor protein)  has on migration, invasion and proliferation of prostate and ovarian cancers. | Email: cvald024@fiu.edu" /></a></li>
									<li>
										<a href="#"><img src="images/thumbs/s3.jpg" data-large="images/b3.jpg" alt="image03" data-description="Ruslan Garcia | Senior | MAJOR: BIOLOGY | MINOR: Religious Studies | RESEARCH: With the use of transgenic mice that model human skin accurately, our laboratory is trying to uncover the mechanism by which primary melanocytic lesions metastasize. | Email: rgarc100@fiu.edu" /></a>
									</li>
									<li>
										<a href="#"><img src="images/thumbs/s4.jpg" data-large="images/b4.jpg" alt="image04" data-description="Liana Apolis | Junior | MAJOR: Biology | MINOR: Chemistry | RESEARCH: My research involves the inhibition of the signaling process called quorum sensing (QS) which may be a novel way to attenuate infectious diseases as interrupting the QS pathway has the potential to downregulate bacterial pathogenicity without selecting for antibiotic resistance | Email: lapol003@fiu.edu" /></a>
									</li>
									<li>
										<a href="#"><img src="images/thumbs/s5.jpg" data-large="images/b5.jpg" alt="image05" data-description="Ivana Lamboglia | Senior | MAJOR: Biology | RESEARCH: Examining the changes in the enzymatic activities of JH in the corpora allata of female Aedes aegypti during different developmental stages | Email:  ilamb001@fiu.edu" /></a>
									</li>	
									<li>
										<a href="#"><img src="images/thumbs/s6.jpg" data-large="images/b6.jpg" alt="image06" data-description="Aneysis Gonzalez | Junior | MAJOR: Biology | MINOR: Psychology and Chemistry | RESEARCH: I study the relationship between mitochondrial c-Jun N-terminal Kinase (JNK) and scaffold-binding protein Sab. Also, we look at the effect of a complex 1 inhibitor (Rotenone) on the metabolism of the mitochondria and the overall impact on a cell's viability. | Email: agonz227@fiu.edu" /></a>
									</li>
									<li>
										<a href="#"><img src="images/thumbs/s7.jpg" data-large="images/b7.jpg" alt="image07" data-description="Heysell Ortiz | Senior | MAJOR: Biology and Chemistry | RESEARCH: Organic Synthesis | Email: horti004@fiu.edu" /></a>
									</li>
									<li>
										<a href="#"><img src="images/thumbs/s8.jpg" data-large="images/b8.jpg" alt="image08" data-description="Daniel J. Tapanes | Senior | Biology and Anthropology | MINOR: Chemistry | RESEARCH: I work in the lab of Charles H. Bigger, Ph.D., studying the comparative immunology of soft coral. Our current model system is Swiftia exserta, a cnidarian indigenous to the Caribbean basin and found throughout the Florida Keys. I am currently researching the transfer of adoptive memory using tissue grafts as well as the interrupted immune response. | Email: DTapa001@fiu.edu" /></a></li>
									<li>
										<a href="#"><img src="images/thumbs/s9.jpg" data-large="images/b9.jpg" alt="image09" data-description="Ivonne Lollett | Senior | MAJOR: Biology | MINOR: Chemistry | RESEARCH:  My research focuses on the identification and characterization of proteases involved in the regulated intramembrane proteolysis (RIP) cascade responsible for alginate regulation in Pseudomonas aeruginosa. | email: cpere087@fiu.edu" /></a></li>
									<li>
										<a href="#"><img src="images/thumbs/s10.jpg" data-large="images/b10.jpg" alt="image10" data-description="Patricia Theard | Junior | MAJOR: Biology and Chemistry | RESEARCH:  Organic chemistry of nucleosides and nucleotides with applications in biochemistry and in anticancer and antiviral medicine. Primary research is centered on intuitive a priori design and synthesis of nucleoside analogues constructed with features that are chemically activated in the initial steps of an enzyme mechanism where spontaneous subsequent reactions cause enzyme inactivation. | Email: patritheard@hotmail.com" /></a></li>
									<li>
										<a href="#"><img src="images/thumbs/s11.jpg" data-large="images/b11.jpg" alt="image11" data-description="Richard Barrios | Junior | MAJOR: Biology and Chemistry | RESEARCH: I perform cancer research in Dr. Jeremy Chamber's laboratory that will help further explain the role of the mitochondria in cancer cells. Currently I am helping to piece together a signaling pathway between the mitochondria and monocarboxylase transporter 1 (MCT1). | email: rbarr024@fiu.edu" /></a></li>
									<li>
										<a href="#"><img src="images/thumbs/s12.jpg" data-large="images/b12.jpg" alt="image12" data-description="Kymberlee Osborne | Senior | MAJOR: Chemistry | MINOR: Biology | RESEARCH: Characterizing pigments of  coral black band disease (BBD) cyanobacterial associates and reactive oxygen species (ROS) assay development. | Email: kymberleea.osborne@gmail.com" /></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>


    </body>
</html>