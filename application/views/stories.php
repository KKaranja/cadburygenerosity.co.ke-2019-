<section class="main-section" style="background: url(<?= base_url() ?>assets/imgs/Background_J.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
	<div class="row">
		<div class="col-md-6 stories_progress_bar">
			<img src="<?= base_url() ?>assets/imgs/images/Comp 1_1063.png" alt="Emoji With Glass" class="img-responsive emoji_glass_small">
			<progress id="progress_bar" max="100" value="0">
				<h1><span id="progress_count"></span>%</h1>
				<div pseudo="-webkit-progress-inner-element">
					<div pseudo="-webkit-progress-bar">
						<div pseudo="-webkit-progress-value" style="width: 100%;">
						</div>
					</div>
				</div>
			</progress>
		</div>
	</div>
	<section id="stories_section" class="wrapper style1 special">
		<div class="inner">
			<div class="flex flex-4">
				<?php foreach (array_slice($comments, 0, 12) as $key => $value) { ?>
					<div class="box person">
						<div class="image round">
							<img src="<?= base_url() ?>assets/imgs/Glass_&_a_Half.png" alt="Person 1" align="left" />
							<h5 class="stories">#GlassAndAHalf</h5>
						</div><br>
						<div>
							<p><?php echo $value; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function() {
			setInterval("get_progress_percentage()", 1000);
		});

		function get_progress_percentage() {
			$.ajax({
					method: "GET",
					url: "<?php echo site_url('home/get_percentage'); ?>",
					dataType: 'json',
				})
				.done(function(return_data) {
					$('#progress_bar').attr('value', return_data);
					$('#progress_bar').attr('data-content', return_data);
				});
		}
	</script>

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
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1067.png');
					} else if ((return_data < 10) && (return_data > 5)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1071.png');
					} else if ((return_data < 15) && (return_data > 10)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1080.png');
					} else if ((return_data < 25) && (return_data > 20)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1095.png');
					} else if ((return_data < 30) && (return_data > 25)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1110.png');
					} else if ((return_data < 35) && (return_data > 30)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1118.png');
					} else if ((return_data < 40) && (return_data > 35)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1122.png');
					} else if ((return_data < 45) && (return_data > 40)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1130.png');
					} else if ((return_data < 50) && (return_data > 45)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1136.png');
					} else if ((return_data < 55) && (return_data > 50)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1148.png');
					} else if ((return_data < 60) && (return_data > 55)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1155.png');
					} else if ((return_data < 65) && (return_data > 60)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1158.png');
					} else if ((return_data < 70) && (return_data > 65)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1162.png');
					} else if ((return_data < 75) && (return_data > 70)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1165.png');
					} else if ((return_data < 80) && (return_data > 75)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1168.png');
					} else if ((return_data < 85) && (return_data > 80)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1175.png');
					} else if ((return_data < 90) && (return_data > 85)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1177.png');
					} else if ((return_data < 95) && (return_data > 90)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1179.png');
					} else if ((return_data < 100) && (return_data > 95)) {
						$('.emoji_glass_small').attr('src', '<?= base_url() ?>assets/imgs/images/Comp 1_1182.png');
					}



				});
		}
	</script>
</section>
<section>
	<div class="col-md-7 col-emoji-full text-center">
		<div class="social" id="stories">
			<a href="https://www.facebook.com/CadburyDairyMilkKenya" target="_blank" class="link facebook"><span class="fa fa-facebook"></span></a>
			<!-- <a href="#" class="social" id="stories" target="_parent"><span class="link twitter"></span></a> -->
		</div>
	</div>
</section>
