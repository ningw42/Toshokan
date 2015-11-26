<!--main-->
<div class="container" id="main">

	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Wish List</div>
	  <div class="panel-body">
	    <p>Write down the link of your recommended book, share the joy with others~</p>
	  </div>

	  <!-- Table -->
	  <table class="table">
	    <thead>
		    <tr>
		      <th>#</th>
		      <th>user_name</th>
		      <th>link</th>
		      <th>action</th>
		    </tr>
		 </thead>
		 <tbody>
			  <?php 
			  		$i = 1;
			  		foreach ($wishlists as $wishlist) {
			  	?>
			  			<tr>
						  	<th><?php echo $i++ ?></th>
						  	<td><?php echo $wishlist->user_name ?></td>
						  	<td><a href = '<?php echo $wishlist->link ?>' target="_blank"><?php echo $wishlist->link ?></a></td>
						  	<td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#stock-in-modal" onclick="stock_in('<?php echo $wishlist->link ?>')">stock in</button></td>
					  	</tr>
			  		<?php
			  		} 
			  		?>
			  		<tr>
					  	<th><?php echo $i++ ?></th>
					  	<td><?php echo $wishlist->user_name ?></td>
					  	<td><input type="text" id = 'new_wish'></td>
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

		function stock_in(link){
			var host = 'http://zhangteng.yifangyun.com/index.php/';
		    // var xmlHttp = new XMLHttpRequest();
		    console.log(link);
		    $.post( host + 'crawler/add', {urls:link},function( data ) {
			  // $( ".result" ).html( data );
			  // location.reload();
			});

		}
	</script>

</div>
<!--/main-->
