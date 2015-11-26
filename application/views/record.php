<div class="container" id="main">
	<ul class="nav nav-pills">
	  <li role="presentation" class="active"><a data-toggle="tab" href="#returned">Returned</a></li>
	  <li role="presentation"><a data-toggle="tab" href="#not-returned">Not returned</a></li>
	</ul>

	<div class="tab-content">
		<div id="returned" class="tab-pane fade in active">
		  <table class="table">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>book_id</th>
			      <th>book_name</th>
			      <th>borrow_time</th>
			      <th>due</th>

			    </tr>
			  </thead>
			  <tbody>
			  <?php 
			  		$i = 1;
			  		foreach ($records as $record) {
			  			if($record->is_returned){
			  	?>
			  			<tr>
						  	<th><?php echo $i++ ?></th>
						  	<td><?php echo $record->book_id ?></td>
						  	<td><?php echo $record->book_name ?></td>
						  	<td><?php echo $record->borrow_time ?></td>
						  	<td><?php echo $record->due ?></td>
					  	</tr>
			  		<?php
			  			}
			  		} 
			  		?>
			  </tbody>
		  </table>
		</div>
		<div id="not-returned" class="tab-pane fade">
		  <table class="table">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>book_id</th>
			      <th>book_name</th>
			      <th>borrow_time</th>
			      <th>due</th>
			      <th>action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		$i = 1;
			  		foreach ($records as $record) {
			  			if(!$record->is_returned){
			  	?>
			  			<tr>
						  	<th><?php echo $i++ ?></th>
						  	<td><?php echo $record->book_id ?></td>
						  	<td><?php echo $record->book_name ?></td>
						  	<td><?php echo $record->borrow_time ?></td>
						  	<td><?php echo $record->due ?></td>
						  	<td><button id="return-button" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#return-modal" onclick="return_book(<?php echo $record->book_id ?>, <?php echo $record->id ?>)">return</button></td>
					  	</tr>
			  		<?php
			  			}
			  		} 
			  		?>
			  </tbody>
			</table>
		</div>
  </div>
  <script type="text/javascript">
  	function return_book(book_id, record_id)
	{
		var host = 'http://zhangteng.yifangyun.com/index.php/';
	    var xmlHttp = new XMLHttpRequest();
	    xmlHttp.open( "GET", host + 'book/ret/'+book_id + '/' + record_id, false ); // false for synchronous request
	    xmlHttp.send( null );
	    return xmlHttp.responseText;

	}
  </script>

</div>