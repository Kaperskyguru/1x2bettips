<?php require_once 'header.php'?>
	<section>
		<div class="container">
			<ol class="breadcrumb">
				<li class="active">Dashboard</li>
			</ol>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
						<a href="#" class="list-group-item active main-color-bg">
						    <span class="fa fa-cog" aria-hidden="true"></span> Dashboard
						  </a>
						<a href="games.php" class="list-group-item"><span class="fa fa-list-alt" aria-hidden="true"></span> Games<span class="badge">33</span></a>
						<a type="#" class="list-group-item" data-toggle="modal" data-target="#addPost">Add Games</a>
					</div>
				</div>
				<div class="col-md-9">
					<!-- Website Overview -->
					<div class="panel panel-default">
						<div class="panel-heading main-color-bg">
							<h3 class="panel-title">Website Overview</h3>
						</div>
						<div class="panel-body">
							<div class="col-md-3">
								<div class="well dash-box">
									<h2><span class="fa fa-user" aria-hidden="true"></span> <?php echo $db->getTotalGames(); ?></h2>
									<h4>Games</h4>
								</div>
							</div>

							<div class="col-md-3">
								<div class="well dash-box">
									<h2><span class="fa fa-list-alt" aria-hidden="true"></span>  <?php echo $db->getTotalWinGames(); ?></h2>
									<h4>Won Games</h4>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well dash-box">
									<h2><span class="fa fa-pencil" aria-hidden="true"></span>  <?php echo $db->getTotalLossGames(); ?></h2>
									<h4>Loss Games</h4>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well dash-box">
									<h2><span class="fa fa-bar-charts" aria-hidden="true"></span> 12,678</h2>
									<h4>Visitors</h4>
								</div>
							</div>
						</div>
					</div>
					<!-- Latest Users -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Latest Games</h3>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table id="hometable" class="table table-striped table-hover">
									<thead>
										<tr>
											<th>TIME</th>
											<th>STATUS</th>
											<th>LEAGUE</th>
											<th>MATCHES</th>
											<th>TIP 1</th>
											<th>TIP %</th>
											<th>TIP 2</th>
											<th>TIP %</th>
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
<?php require_once 'footer.php';
