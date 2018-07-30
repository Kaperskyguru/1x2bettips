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
			              <a href="games.php" class="list-group-item">Game <span class="badge">29</span></a>
						  <a type="button" class="list-group-item" data-toggle="modal" data-target="#addPost"><span class="fa fa-pencil" aria-hidden="true"></span> Add Games</a>
			         </div>
				</div>
				<div class="col-md-9">
          <div class="panel panel-default">
						  <div class="panel-heading main-color-bg">
						    <h3 class="panel-title">Edit Game</h3>
						  </div>
              <div class="panel-body">
				  <?php
					  $db = Database::getInstance();
;				  		$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
					  $query = 'SELECT * FROM games WHERE id = :id';
					  $db->query($query);
					  $db->bind(':id', $_GET['id']);
					  $row = $db->single();?>
				  <form>
  					<div class="modal-header">
  						<h4 class="modal-title" id="myModalLabel">Update Game</h4>
  					</div>
  					<div class="modal-body">
  						<div class="form-group">
  							<label>Game Time</label>
  							<input type="time" value="<?php echo $row->matchtime ?>" id="time" class="form-control" placeholder="Game time">
  						</div>
  						<div class="form-group">
  							<label>Game Date</label>
  							<input type="date" value="<?php echo $row->matchdate ?>" id="matchdate" class="form-control" placeholder="Enter Game date">
  						</div>
  						<div class="form-group">
  							<label for="">Game League</label>
  							<input type="text" value="<?php echo $row->league ?>" id="League" class="form-control" placeholder="Game League" />
  						</div>
  						<div class="form-group">
  							<label for="">Game Matches</label>
  							<input type="text" value="<?php echo $row->matches ?>" id="match" class="form-control" placeholder="Game Matches" />
  						</div>
  						<div class="form-group">
  							<label for="">Game Tip 1</label>
  							<select id="tip1" class="form-control">
								<option><?php echo $row->tip1 ?></option>
								<option>Over 1.5</option>
  								<option>Over 3.5</option>
  								<option>Over 4.5</option>
  								<option>Under 3.5</option>
  								<option>Under 4.5</option>
  								<option>1DNB</option>
  								<option>2DNB</option>
  								<option>1X and over 1.5</option>
  								<option>X2 and over 1.5</option>
  								<option>1X and under 4.5</option>
  								<option>X2 and under 2.5</option>
  								<option>1 and over 1.5</option>
  								<option>1 and over 2.5</option>
  								<option>2 and over 1.5</option>
  								<option>2 and over 2.5</option>
  								<option>1X</option>
  								<option>X2</option>
  								<option>AWEH</option>
  								<option>HWEH</option>
  								<option>1HT</option>
  								<option>2HT</option>
  								<option>XHT</option>
  								<option>1WBH</option>
  								<option>2WBH</option>
  								<option>1</option>
  								<option>2</option>
  								<option>12</option>
  								<option>X</option>
  							</select>
  						</div>
  						<div class="form-group">
  							<label for="">Game Tip %</label>
  							<select id="firstpercent" class="form-control">
								<option><?php echo $row->firstpercentage ?></option>
  								<option>5%</option>
  								<option>10%</option>
  								<option>15%</option>
  								<option>20%</option>
  								<option>25%</option>
  								<option>30%</option>
  								<option>35%</option>
  								<option>40%</option>
  								<option>45%</option>
  								<option>50%</option>
  								<option>55%</option>
  								<option>60%</option>
  								<option>65%</option>
  								<option>70%</option>
  								<option>75%</option>
  								<option>80%</option>
  								<option>85%</option>
  								<option>90%</option>
  								<option>95%</option>
  								<option>100%</option>
  							</select>
  						</div>
  						<div class="form-group">
  							<label for="">Game Tip 2</label>
  							<select id="tip2" class="form-control">
								<option><?php echo $row->tip2 ?></option>
  								<option>Over 1.5</option>
  								<option>Over 3.5</option>
  								<option>Over 4.5</option>
  								<option>Under 3.5</option>
  								<option>Under 4.5</option>
  								<option>1DNB</option>
  								<option>2DNB</option>
  								<option>1X and over 1.5</option>
  								<option>X2 and over 1.5</option>
  								<option>1X and under 4.5</option>
  								<option>X2 and under 2.5</option>
  								<option>1 and over 1.5</option>
  								<option>1 and over 2.5</option>
  								<option>2 and over 1.5</option>
  								<option>2 and over 2.5</option>
  								<option>1X</option>
  								<option>X2</option>
  								<option>AWEH</option>
  								<option>HWEH</option>
  								<option>1HT</option>
  								<option>2HT</option>
  								<option>XHT</option>
  								<option>1WBH</option>
  								<option>2WBH</option>
  								<option>1</option>
  								<option>2</option>
  								<option>12</option>
  								<option>X</option>
  							</select>
  						</div>
  						<div class="form-group">
  							<label for="">Game Tip %</label>
  							<select id="secondpercent" class="form-control">
								<option><?php echo $row->secondpercentage ?></option>
  								<option>5%</option>
  								<option>10%</option>
  								<option>15%</option>
  								<option>20%</option>
  								<option>25%</option>
  								<option>30%</option>
  								<option>35%</option>
  								<option>40%</option>
  								<option>45%</option>
  								<option>50%</option>
  								<option>55%</option>
  								<option>60%</option>
  								<option>65%</option>
  								<option>70%</option>
  								<option>75%</option>
  								<option>80%</option>
  								<option>85%</option>
  								<option>90%</option>
  								<option>95%</option>
  								<option>100%</option>
  							</select>
  						</div>
  						<div class="modal-footer">
  							<a href="#" id="updateGame" gid = "<?php echo $row->id ?>" class="btn btn-primary">Update changes</a>
  						</div>
  				</form>
              </div>
          </div>
				</div>
			</div>
		</div>
	</section>
<?php require_once 'footer.php';?>
