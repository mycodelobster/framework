<h2 class="thumbnail-header">
	<?php state_() ?>
</h2>
<?php for ($i=1; $i < 10; $i++) { ?>
<div class="col-xs-12 col-md-6 col-lg-4">
	<div class="thumbnail">
		<?php thumb_($i) ?>
		<div class="caption">
			<h3><?php lipsum_(80) ?></h3>
			<!-- FOR AUTHOR -->
			<div class="media">
				<a class="pull-left" href="#">
					<?php avatar_($i) ?>
				</a>
				<div class="media-body">
					<h4 class="media-heading"><?php name_() ?></h4>
					<p><?php state_() ?></p>
				</div>
			</div>
			<!-- // FOR AUTHOR -->

			<!-- For Rating -->
			<ul class="list-inline">
				<li><?php icon_("heart") ?><span><?php echo rand(1,100) ?> View</span></li>
				<li><?php icon_("heart") ?><span><?php echo rand(1,100) ?> View</span></li>
				<li><?php icon_("heart") ?><span><?php echo rand(1,100) ?> View</span></li>
			</ul>

		</div>
	</div>
</div>
<?php } ?>
<div class="clearfix"></div>
<?php include 'pagination.php' ?>
