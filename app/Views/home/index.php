<!-- about -->

<div class="profile">


<div class="row profile-container">
	<div class="col-lg-6 d-flex profile-pic-container ">

		<img class="profile-pic" src="<?php echo base_url('assets/images/hansohee.jpg') ?>">
				

			
			<!-- <div class="profile-pic">
				<img src="">

			</div> -->
	</div>
	<div class="col-lg-6 d-flex basic-profile ">
		<div class="basic-profile">
			<h1><?php echo $firstName; ?></h1>
			<h1><span><?php echo $lastName; ?></span></h1>
			<h3><?php echo $career; ?></h3>
			<div class="button-about col-md-12">
				<button type="button" class="btn btn-primary">About Me</button>
			</div>
	</div>

	</div>
</div>




</div>
<div class="about">
<div class="about-me">
	<h1> About</h1>
	<div class="row d-flex justify-content-center">
		<div class="col-md-9">
			<h3><?php echo $description; ?></h3>
		</div>
	</div>

</div>
</div>

<div class="skills-row row d-flex justify-content-center">
		
<div class=" skills-container row">
	<h1>skills</h1>
<div class="col-md-6">
	<div class="skills">
		<div class="skills-name">
		<h5>HTML</h5></div>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" style="width: <?php echo $html; ?>%;" aria-valuenow="<?php echo $html; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $html ?>%</div>
  </div>

</div>
		<div class="skills">
			<div class="skills-name">
		<h5>CSS</h5></div>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" style="width: <?php echo $css; ?>%;" aria-valuenow="<?php echo $css; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $css ?>%</div>
  </div>

</div>
<div class="skills">
			<div class="skills-name">
		<h5>Javascript</h5></div>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" style="width: <?php echo $javascript; ?>%;" aria-valuenow="<?php echo $javascript; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $javascript ?>%</div>
  		</div>

</div>
<div class="skills">
			<div class="skills-name">
		<h5>PHP</h5></div>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" style="width: <?php echo $php; ?>%;" aria-valuenow="<?php echo $php; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $php ?>%</div>
  		</div>

</div>
</div>
<div class="col-md-6">
	<div class="skills">
			<div class="skills-name">
		<h5>Github</h5></div>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" style="width: <?php echo $github; ?>%;" aria-valuenow="<?php echo $github; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $github ?>%</div>
  		</div>

</div>
<div class="skills">
			<div class="skills-name">
		<h5>Wordpress</h5></div>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" style="width: <?php echo $wordpress; ?>%;" aria-valuenow="<?php echo $wordpress; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $wordpress ?>%</div>
  		</div>

</div>
<div class="skills">
			<div class="skills-name">
		<h5>Python</h5></div>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" style="width: <?php echo $python; ?>%;" aria-valuenow="<?php echo $python; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $python ?>%</div>
  		</div>

</div>

</div>
</div>
	</div>

	<!--  -->

<!-- project experience -->
<!-- carousel -->
<div class="project-experience">
<h1>Project Experience</h1>
<div id="carouselExampleDark" class="carousel carousel-dark slide ms-auto me-auto" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="..." class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?php echo base_url("assets/images/project-card.png") ?>" class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Online Card</h5>
        <p>HTML, CSS</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- </div> -->

<br>
<br>
<br>
<br>