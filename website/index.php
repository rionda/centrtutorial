 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <!-- vim: set ts=2 sw=2 tw=79: -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css' />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="author" content="Matteo Riondato" />
	<meta name="description" content="Mini-website for the tutorial on centrality at WWW 2016" />
	<meta name="revised" content="<?php echo date("D M j G:i:s T Y", getlastmod()) ?>" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Centrality Measures on Big Graphs: Exact, Approximated, and Distributed Algorithms </title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46147553-3', 'auto');
  ga('send', 'pageview');
</script>
	<div id="container">
		<h1 id="header"><a href="/">Centrality Measures on Big Graphs:</a></h1>
		<h1 id="subheader">Exact, Approximated, and Distributed Algorithms</h1>
		<h2 id="subsubheader">A Tutorial at <a href="http://www2016.ca">WWW'16</a></h2>
		<img src="network.png" alt="A network" title="Network" width="800" />
		<div id="container_right_col">
			<div id="side">
				<!-- XXX add image? -->
				<div id="navbar">
					<ul>
						<li><strong><a href="#abstract">Abstract</a></strong></li>
						<li><strong><a href="#slides">Slides</a></strong> <!-- (Updated: <?php echo date ("M d Y", filemtime('BonchiDeFrancisciMoralesRiondato-CentralityBigGraphsTTutorial-Slides.pdf')) ?>)--></li>
						<li><strong><a href="#instructors">Instructors</a></strong></li>
						<li><strong><a href="#bibliography">Bibliography</a></strong></li>
					</ul>
				</div>
			</div>  <!-- end of side -->
		</div> <!-- end of container_right_col-->
		<div id="container_left_col">
			<div id="maincontent">
				<p><strong>Welcome</strong> to the mini-website on the tutorial titled
				<em>Centrality Measures on Big Graphs: Exact, Approximated, and
				Distributed Algorithms</em>, which will take place at <a
				href="http://www2016.ca">WWW'16</a> in Montreal, Canada.</p>

				<a name="abstract"></a>
				<h2>Abstract</h2>
				<p>Centrality measures allow to measure the relative importance of a node or an
				edge in a graph w.r.t. other nodes or edges. Many measures of centrality have
				been developed in the literature to capture different aspects of the informal
				concept of importance, and algorithms for different measures have been
				proposed.<p>

				<p>In this tutorial, we survey the different definitions of centrality
				measures and the algorithms to compute them. We start from the most
				common measures (e.g., closeness centrality, betweenness centrality)
				and move to more complex ones, like spanning-edge centrality. In our
				presentation, we begin from exact algorithms and then move to
				approximation algorithms, including sampling-based ones, and to
				highly-scalable MapReduce algorithms for huge graphs, both for exact
				computation and for keeping the measures up-to-date on dynamic graphs
				where edges are inserted or deleted over time.</p>

				<p> Our goal is to show how
				advanced algorithmic techniques and scalable systems can be used to
				obtain efficient algorithms for important graph mining tasks, and to
				encourage research in the area by highlighting open problems and
				possible directions.</p>

				<p>More details on the material we will cover are available in the <a
href="../papers/BonchiDeFrancisciMoralesRiondato-CentralityBigGraphsTutorial-WWW.pdf">proposal</a>.</p>

				<a name="slides"></a>
				<h2>Slides</h2>
				<p>We are preparing the slides, and we will post them here some weeks ahead of the conference.</p>

				<a name="instructors"></a>
				<h2>Instructors</h2>
				<h3><a href="http://www.francescobonchi.com">Francesco Bonchi</a></h3>
				<img src="fra2.jpg" alt="Portrait of Francesco Bonchi"
				title="Francesco Bonchi" style="float:left;height:14ex;margin-right:0.5em;" />

				<p>Francesco is Research Leader at the ISI Foundation, Turin, Italy,
				where he leads the "Algorithmic Data Analytics" group. He is also Scientific
				Director for Data Mining at Eurecat (Technological Center of Catalunya),
				Barcelona. Before he was Director of Research at Yahoo Labs in Barcelona,
				Spain, leading the Web Mining Research group. His recent research
				interests include mining query-logs, social networks, and social media,
				as well as the privacy issues related to mining these kinds of sensible
				data.</p>
				<p>He will be PC Chair of the 16th IEEE International Conference on Data Mining
				(ICDM 2016) to be held in Barcelona in December 2016. He is member of the ECML
				PKDD Steering Committee, Associate Editor of the newly created IEEE
				Transactions on Big Data (TBD), of the IEEE Transactions on Knowledge
				and Data Engineering (TKDE), the ACM Transactions on Intelligent
				Systems and Technology (TIST), Knowledge and Information Systems
				(KAIS), and member of the Editorial Board of Data Mining and Knowledge Discovery (DMKD).
				He earned his Ph.D. in computer science from the University of Pisa in
				December 2003. He presented a tutorial at ACM KDD'14.</p>
				<p><strong>Twitter:</strong> <a href="http://www.twitter.com/FrancescoBonchi">@FrancescoBonchi</a></p>

				<h3><a href="http://www.gdfm.me">Gianmarco De Francisci Morales</a></h3>
				<img src="bw.jpg" alt="Portrait of Gianmarco De Francisci Morales"
				title="Gianmarco De Francisci Morales" style="float:left;height:14ex;margin-right:0.5em;" />
				<p>Gianmarco is a Visiting Scientist at Aalto University. Previously he
				worked as a Research Scientist at Yahoo Labs Barcelona, and as a
				Research Associate at ISTI-CNR in Pisa. His research focuses on scalable data
				mining, with an emphasis on Web mining and data-intensive scalable computing
				systems. He is an active member of the open source community of the Apache
				Software Foundation, working on the Hadoop ecosystem, and a committer for the
				Apache Pig project. He is one of the lead developers of Apache SAMOA, an
				open-source platform for mining big data streams. He presented a tutorial on
				stream mining at IEEE BigData'14.</p>
				<p><strong>Twitter:</strong> <a href="http://www.twitter.com/gdfm7">@gdfm7</a></p>

				<h3><a href="http://matteo.rionda.to">Matteo Riondato</a></h3>
				<img src="../files/matteo_riondato.jpg" alt="Head shot of Matteo Riondato
				by Andrea Podest&agrave;" title="Matteo Riondato"
style="float:left;height:14ex;margin-right:0.5em;" />
				<p>Matteo is a Research Scientist in the Labs group at <a
				href="http://www.twosigma.com">Two Sigma Investments</a>. Previously he was a postdoc at Stanford and at Brown. His
				dissertation on sampling-based randomized algorithms for data and graph mining
				received the Best Student Poster Award at SIAM SDM'14. His research focuses on
				exploiting advanced theory to develop practical algorithms for time series
				analysis, pattern mining, and social network analysis. He presented
				tutorials at ACM KDD'15, ECML PKDD'15, and ACM CIKM'15.</p>
				<p><strong>Twitter:</strong> <a href="http://www.twitter.com/teorionda">@teorionda</a></p>

				<a name="bibliography"></a>
				<h2>Bibliography</h2>
				<p>We are preparing a commented BibTeX bibliography with the most relevant references.</p>
				<a name="acknowledgements"></a>
			</div> <!-- end of maincontent -->
		</div> <!-- end of container_left_col -->
		<div class="clear"></div>
		<div id="footer">
			<p>&copy; <?php echo date("Y")?> Francesco Bonchi, Gianmarco De Francisci Morales, Matteo Riondato &mdash; Last modified: <?php echo date ("F d Y H:i:s T", getlastmod()); ?></p>
		</div> <!-- end of footer -->
	</div> <!-- end of container -->
</body>
</html>
