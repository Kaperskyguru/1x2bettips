
	<footer>
		<p>Copyright | 1X2BetTips.com.ng (c) 2018 Copyright Holder All Rights Reserved.</p>
	</footer>

	<!-- modal -->

	<!-- Add Post Modal -->
	<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add New Game</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Game Time</label>
							<input type="time" id="time" class="form-control" placeholder="Game time">
						</div>
						<div class="form-group">
							<label>Game Date</label>
							<input type="date" id="matchdate" class="form-control" placeholder="Enter Game date">
						</div>
						<div class="form-group">
							<label for="">Game League</label>
							<input type="text" id="League" class="form-control" placeholder="Game League" />
						</div>
						<div class="form-group">
							<label for="">Game Matches</label>
							<input type="text" id="match" class="form-control" placeholder="Game Matches" />
						</div>
						<div class="form-group">
							<label for="">Game Tip 1</label>
							<select id="tip1" class="form-control">
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
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" id="addGame" class="btn btn-primary">Save changes</button>
						</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" > </script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
