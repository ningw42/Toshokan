<!--main-->
<div class="container" id="main">

	<div class="row">

		<div class="col-md-4 col-sm-6">
			<?php foreach ($one as $key => $value) {
			?>
			<div class="panel panel-default">
				<div class="panel-heading"><a href="<?php echo $value->link; ?>" class="pull-right">View on Douban</a>
					<h4><span><?php echo $value->name; ?></span></h4>
				</div>
				<div class="panel-body">
					<div>
            <div class="col-md-6">
						  <img src="<?php echo $value->cover; ?>" class="img-thumbnail" align="middle">
            </div>
            <div class="col-md-6">
              <table class="table table-hover" style="width: auto; margin:0px auto;">
  							<tr>
  								<td><?php echo $value->author; ?></td>
  							</tr>
  							<tr>
  								<td><?php echo $value->publisher; ?></td>
  							</tr>
  							<tr>
  								<td><?php echo $value->tag; ?></td>
  							</tr>
								<tr>
  								<td><?php echo $value->borrow_times; ?></td>
  							</tr>
  						</table>
            </div>
						<div class="col-md-12">
							<?php if ($value->inventory > 0) {
								echo "<button id=\"borrow\" onclick=\"borrowBook(". $value->id . ")\" class=\"btn btn-success col-md-12\">来一本</button>";
							} else {
								echo "<button class=\"btn btn-success col-md-12\" disabled=\"disabled\">借完了</button>";
							}?>
						</div>
					</div>
					<div class="clearfix"></div>
					<hr>
					<p> <?php echo $value->description; ?>
					</p>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-4 col-sm-6">
			<?php foreach ($two as $key => $value) {
			?>
			<div class="panel panel-default">
				<div class="panel-heading"><a href="<?php echo $value->link; ?>" class="pull-right">View on Douban</a>
					<h4><span onclick="clickToDetails(<?php echo $value->id; ?>);"><?php echo $value->name; ?></span></h4>
				</div>
				<div class="panel-body">
					<div>
            <div class="col-md-6">
						  <img src="<?php echo $value->cover; ?>" class="img-thumbnail" align="middle">
            </div>
            <div class="col-md-6">
              <table class="table table-hover" style="width: auto; margin:0px auto;">
  							<tr>
  								<td><?php echo $value->author; ?></td>
  							</tr>
  							<tr>
  								<td><?php echo $value->publisher; ?></td>
  							</tr>
  							<tr>
  								<td><?php echo $value->tag; ?></td>
  							</tr>
								<tr>
  								<td><?php echo $value->borrow_times; ?></td>
  							</tr>
  						</table>
            </div>
						<div class="col-md-12">
							<?php if ($value->inventory > 0) {
								echo "<button id=\"borrow\" onclick=\"borrowBook(". $value->id . ")\" class=\"btn btn-success col-md-12\">来一本</button>";
							} else {
								echo "<button class=\"btn btn-success col-md-12\" disabled=\"disabled\">借完了</button>";
							}?>
						</div>
					</div>
					<div class="clearfix"></div>
					<hr>
					<p> <?php echo $value->description; ?>
					</p>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-4 col-sm-6">
			<?php foreach ($three as $key => $value) {
			?>
			<div class="panel panel-default">
				<div class="panel-heading"><a href="<?php echo $value->link; ?>" class="pull-right">View on Douban</a>
					<h4><span onclick="clickToDetails(<?php echo $value->id; ?>);"><?php echo $value->name; ?></span></h4>
				</div>
				<div class="panel-body">
					<div>
            <div class="col-md-6">
						  <img src="<?php echo $value->cover; ?>" class="img-thumbnail" align="middle">
            </div>
            <div class="col-md-6">
              <table class="table table-hover" style="width: auto; margin:0px auto;">
  							<tr>
  								<td><?php echo $value->author; ?></td>
  							</tr>
  							<tr>
  								<td><?php echo $value->publisher; ?></td>
  							</tr>
  							<tr>
  								<td><?php echo $value->tag; ?></td>
  							</tr>
								<tr>
  								<td><?php echo $value->borrow_times; ?></td>
  							</tr>
  						</table>
            </div>
						<div class="col-md-12">
							<?php if ($value->inventory > 0) {
								echo "<button id=\"borrow\" onclick=\"borrowBook(". $value->id . ")\" class=\"btn btn-success col-md-12\">来一本</button>";
							} else {
								echo "<button class=\"btn btn-success col-md-12\" disabled=\"disabled\">借完了</button>";
							}?>
						</div>
					</div>
					<div class="clearfix"></div>
					<hr>
					<p> <?php echo $value->description; ?>
					</p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<!--/row-->

</div>
<!--/main-->
