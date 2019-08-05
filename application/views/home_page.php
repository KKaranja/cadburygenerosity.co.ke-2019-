<section class="main-section" style="background: url(<?= base_url() ?>assets/imgs/Background_J.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
	<div class="emoji-container">
		<div class="row">
			<div class="col-md-4 col-emoji col-emoji-image text-center">
				<!-- <img src="<?= base_url() ?>assets/imgs/Emoji_With_Glasss_&_a_Half_Motif.png" alt="Emoji With Glass" class="img-responsive emoji_glass"> -->
				<img src="<?= base_url() ?>assets/imgs/images/Comp 1_1063.png" alt="Emoji With Glass" class="img-responsive emoji_glass">
			</div>
			<!-- <div class="col-md-1"></div> -->
			<div class="col-md-2 col-emoji col-emoji-text">
				<div class="generosity-meter">
					<h5>Generosity Meter</h5>
					<div class="generosity-box">
						<h1><span id="generosity_count">0</span>%</h1>
						<h4>Generosity Submissions</h4>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-emoji-full">
				<div id="carouselControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php foreach (array_slice($comments, 1, 3) as $key => $value) { ?>
							<div class="carousel-item <?php if ($key == 0) echo 'active' ?>">
								<div class="comment-box">
									<div class="box person" id="comment-box">
										<div class="image round">
											<img src="<?= base_url() ?>assets/imgs/Glass_&_a_Half.png" alt="Person 1" align="left" />
											<h5>#GlassAndAHalf</h5>
										</div><br>
										<div>

											<p><?php echo $value; ?></p>

											<!-- <p>Comments</p> -->
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
		<div class="social">

			<a href="https://www.facebook.com/CadburyDairyMilkKenya" target="_blank" class="link facebook"><span class="fa fa-facebook"></span></a>
			<!-- <a href="#" class="link twitter" target="_blank"><span class="fa fa-twitter" data-text="Donate a Leave Day" data-hashtags="DonateALeaveDay,ItTakesAVillage"></span></a> -->
		</div>
	</div>
</section>
<script>
	$(document).ready(function() {
		setInterval("get_percentage()", 100);
	});

	function get_percentage() {
		$.ajax({
				method: "GET",
				url: "<?php echo site_url('home/get_percentage'); ?>",
				dataType: 'json',
			})
			.done(function(return_data) {
				$('#generosity_count').text(return_data);
				if (return_data < 5) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1067.png');
				} else if ((return_data < 10) && (return_data > 5)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1071.png');
				} else if ((return_data < 15) && (return_data > 10)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1080.png');
				} else if ((return_data < 25) && (return_data > 20)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1095.png');
				} else if ((return_data < 30) && (return_data > 25)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1110.png');
				} else if ((return_data < 35) && (return_data > 30)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1118.png');
				} else if ((return_data < 40) && (return_data > 35)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1122.png');
				} else if ((return_data < 45) && (return_data > 40)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1130.png');
				} else if ((return_data < 50) && (return_data > 45)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1136.png');
				} else if ((return_data < 55) && (return_data > 50)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1148.png');
				} else if ((return_data < 60) && (return_data > 55)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1155.png');
				} else if ((return_data < 65) && (return_data > 60)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1158.png');
				} else if ((return_data < 70) && (return_data > 65)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1162.png');
				} else if ((return_data < 75) && (return_data > 70)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1165.png');
				} else if ((return_data < 80) && (return_data > 75)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1168.png');
				} else if ((return_data < 85) && (return_data > 80)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1175.png');
				} else if ((return_data < 90) && (return_data > 85)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1177.png');
				} else if ((return_data < 95) && (return_data > 90)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1179.png');
				} else if ((return_data < 100) && (return_data > 95)) {
					$('.emoji_glass').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1182.png');
				}



			});
	}
</script>
