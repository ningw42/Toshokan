<!--main-->
<div class="container" id="main">

	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Wish List</div>
	  <div class="panel-body">
	    <p>Write down the Douban link of your recommended book, share the joy with others~</p>
	    <p>We only display most 20 popular books!</p>
	  </div>

	  <!-- Table -->
	  <table class="table">
	    <thead>
		    <tr>
		      <th>#</th>
		      <th>User</th>
		      <th>Title</th>
					<th>Author</th>
					<th>Press</th>
					<th>Price</th>
		      <th>Favs</th>
		      <th>Action</th>
		    </tr>
		 </thead>
		 <tbody>
			  <?php
			  		$i = 1;
			  		foreach ($wishlists as $wishlist) {
			  			if(!$wishlist->is_stocked_in){
			  	?>
			  			<tr>
						  	<th><?php echo $i++ ?></th>
						  	<td><?php echo $wishlist->user_name ?></td>
						  	<td><a href = '<?php echo $wishlist->link ?>' target="_blank"><?php echo $wishlist->name ?></a></td>
								<td><?php echo $wishlist->author ?></td>
								<td><?php echo $wishlist->publisher ?></td>
								<td><?php echo $wishlist->price ?></td>
								<td><?php echo $wishlist->count ?></td>
						  	<td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#stock-in-modal" onclick="stock_in('<?php echo $wishlist->link ?>', '<?php echo $wishlist->id ?>')">stock in</button></td>
					  	</tr>
			  		<?php
			  			}
			  		}
			  		?>
			  		<tr>
					  	<th><?php echo $i++ ?></th>
					  	<td><?php echo $wishlist->user_name ?></td>
					  	<td><input class="col-md-10" type="text" id = 'new_wish'></td>
					  	<td></td>
							<td></td>
							<td></td>
							<td></td>
					  	<td><button id="add-button" type="button" class="btn btn-primary btn-sm" onclick="add_to_wish_list()">add to list</button></td>
					 </tr>
			  </tbody>
	  </table>
	</div>

	<script type="text/javascript">
		function add_to_wish_list(){
			var host = 'http://zhangteng.yifangyun.com/index.php/';
		    // var xmlHttp = new XMLHttpRequest();
		    var link = $('#new_wish').val();
		    $.post( host + 'wishlist/add', {link:link},function( data ) {
			  // $( ".result" ).html( data );
			  location.reload();
			});

		}

		function stock_in(link, w_id){
			var host = 'http://zhangteng.yifangyun.com/index.php/';
		    // var xmlHttp = new XMLHttpRequest();
		    console.log(link);
		    $.post( host + 'crawler/add', {urls:link,w_id:w_id},function( data ) {
			  // $( ".result" ).html( data );
			  // location.reload();
			});

		}
	</script>

</div>
<!--/main-->
