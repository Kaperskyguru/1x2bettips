<?php require_once 'header.php'?>

	<section>
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a> ></li>
				<li class="active">Games</li>
			</ol>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
						<a href="index.php" class="list-group-item active main-color-bg">
						    <span class="fa fa-cog" aria-hidden="true"></span> Dashboard
						  </a>
						<a href="games.php" class="list-group-item"><span class="fa fa-list-alt" aria-hidden="true"></span> Games<span class="badge">33</span></a>
						<a type="#" class="list-group-item" data-toggle="modal" data-target="#addPost"><span class="fa fa-pencil" aria-hidden="true"></span> Add Games</a>
					</div>
				</div>
				<div class="col-md-9">
					<!-- Website Overview -->
					<div class="panel panel-default">
						<div class="panel-heading main-color-bg">
							<h3 class="panel-title">Games</h3>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table id="postTable" class="table table-striped table-hover">
									<thead>

										<tr>
											<th>TIME</th>
											<th>STATUS</th>
											<th>LEAGUE</th>
											<th>MATCHES</th>
											<th>TIP 1</th>
											<th>TIP%</th>
											<th>TIP 2</th>
											<th>TIP%</th>
											<th></th>
											<th>ACTIONS</th>
										</tr>
									</thead>
									<tbody>
										<?php
		                                    $db = Database::getInstance();
		                                    $query = 'SELECT * FROM games ORDER BY id DESC';
		                                    $db->query($query);
		                                    $stmt = $db->execute();
		                                    if ($stmt->rowCount() > 0) {
		                                        while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {?>
		                                            <tr>
		                                                <td><?php echo $data->matchtime ?></td>
														<td><span class="<?php echo $retVal = ($data->status == 1) ? 'fa fa-check' : 'fa fa-remove' ;?>" aria-hidden="true"></span></td>
		                                                <td><?php echo $data->league ?></td>
		                                                <td><?php echo $data->matches ?></td>
		                                                <td><?php echo $data->tip1 ?></td>
		                                                <td><?php echo $data->firstpercentage ?> </td>
		                                                <td><?php echo $data->tip2 ?></td>
		                                                <td><?php echo $data->secondpercentage ?> </td>
														<td>
															<a href="edit.php?id=<?php echo $data->id ?>" class="btn btn-default">Edit</a>
															<a href="#" id="delete_btn" gid="<?php echo $data->id; ?>" class="btn btn-danger">Delete</a>
														</td>
														<td>
															<div class="dropdown create">
																  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Actions<span class="caret"></span>
																  </button>
																  <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
																	  <li><a type="button" id="won" onclick="changeStatus('won', <?php echo $data->id; ?>)" gid="<?php echo $data->id; ?>">Won</a></li>
																	  <li><a type="button" id="lost" onclick="changeStatus('lost', <?php echo $data->id; ?>)" gid="<?php echo $data->id; ?>">Lost</a></li>
																  </ul>
															</div>
													</td>
		                                            </tr>
		                                        <?php
		                                        }
		                                    }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<script>
	function changeStatus(status, id) {
		$.ajax({
			method: "POST",
			url: 'handler.php',
			cache: false,
			data: {status:status, id:id},
			success: function (data) {
				alert(data);
			},
			onerror: function (err) {
				alert(err);
			}
		});
	}
	</script>
<?php require_once 'footer.php';?>
