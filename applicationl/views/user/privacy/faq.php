<?php
$query = $this->db->query("select * from system_settings WHERE status = 1");
$result = $query->result_array();
?>
<div class="breadcrumb-bar">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumb-title">
					<h2><?php echo (!empty($user_language[$user_selected]['lg_FAQ'])) ? $user_language[$user_selected]['lg_FAQ'] : $default_language['en']['lg_FAQ']; ?></h2>
				</div>
			</div>
			<div class="col-auto float-right ml-auto breadcrumb-menu">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>"><?php echo (!empty($user_language[$user_selected]['lg_home'])) ? $user_language[$user_selected]['lg_home'] : $default_language['en']['lg_home']; ?></a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo (!empty($user_language[$user_selected]['lg_FAQ'])) ? $user_language[$user_selected]['lg_FAQ'] : $default_language['en']['lg_FAQ']; ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<section class="faq-section">
			<div class="content" style="min-height: 77px;">
				<div class="container">
				
						<div class="faq-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">
										<a class="collapsed" data-toggle="collapse" href="#collapseOne"> What services do you provide?</a>
									</h4>
									<div id="collapseOne" class="card-collapse collapse">
										
										<p>We at Tazzer Clean covers all aspects of the cleaning industry i.e, from domestics, commercial, industrial, biohazard and fogging, deep clean as well as specialized cleaning services. Our home cleaning professionals are always ready to help you with any of the cleaning aspects with proper care.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">
										<a class="collapsed" data-toggle="collapse" href="#collapseTwo"> What Areas in the United Kingdom do you cover? </a>
									</h4>
									<div id="collapseTwo" class="card-collapse collapse">
										<p>Currently, we cover only United Kingdom and other neighboring areas but very soon w will open our other branches throughout London.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">
										<a class="collapsed" data-toggle="collapse" href="#collapseThree"> What if I am not satisfied with your cleaning? </a>
									</h4>
									<div id="collapseThree" class="card-collapse collapse">
										<p>  We are a team of professionals where we make every effort to provide reliable services. However, in any case, you are not satisfied with our cleaning services, please let us know & we will re-do the complete job for free of charge. And if still, you are not satisfied with the work, then we will replace and send other professional cleaners to do the job and make sure the mistake never repeats. </p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">
										<a class="collapsed" data-toggle="collapse" href="#collapseFour"> What are your working hours? </a>
									</h4>
									<div id="collapseFour" class="card-collapse collapse">
										<p>
										We at Tazzer Clean available from Monday to Saturday i.e, 6 days a week and we provide two slots per day starting from 9 am to 2 pm and 3 pm to 7 pm. Our professional commercial cleaning team is available 24/7 so please give us a call for unusual hours. 
										</p>	</div>
								</div>
							</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">
									<a class="collapsed" data-toggle="collapse" href="#collapseFive"> Why choose Tazzer Clean? </a>
								</h4>
								<div id="collapseFive" class="card-collapse collapse">
									<p>Tazzer Clean provides a wide variety of professional and d Kingdom. We are offering proven experienced and quality services from a vast range of organizations across all the sectors in UK.</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
