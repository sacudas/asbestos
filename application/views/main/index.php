<div class="jumbotron">
	<div class="container">
		<h1>Asbestos Finder</h1>
		<p>The application will show the interior of the house during mouse hover</p>
	</div>
</div>

<div class="container clearfix">
	<div class="house-container">
		<div class="house">
		<a id="enter" href="javascript:void">Enter<br /><small>To select a room and find asbestos.</small></a>
		<img src="<?php echo base_url("assets/imgs/front-of-home.jpg"); ?>">
		</div>
		<div class="house-interior">
			<div class="row">
				<div class="attic-left">
					<div class="window-wrapper">
						<img id="attic"  src="<?php echo base_url("assets/imgs/attic-left.png"); ?>">
						<div class="table-row">
								<label>
									Attic
								</label>
						</div>
					</div>
				</div>
				<div class="attic-right">
					<div class="window-wrapper">
						<img id="attic" src="<?php echo base_url("assets/imgs/attic-right.png"); ?>">
						<div class="table-row">
								<label>
									Attic
								</label>
						</div>
					</div>
				</div>
				<div class="living-room">
					<div class="window-wrapper">
						<img src="<?php echo base_url("assets/imgs/living-room.jpg"); ?>">
						<div class="table-row">
								<label>
									Living Room
								</label>
						</div>
					</div>
				</div>
				<div class="bathroom">
					<div class="window-wrapper">
						<img src="<?php echo base_url("assets/imgs/bathroom.jpg"); ?>">
						<div class="table-row">
							<label>
								Bathroom
							</label>
						</div>
					</div>
				</div>
				<div class="bedroom">
					<div class="window-wrapper">
						<img src="<?php echo base_url("assets/imgs/bedroom.jpg"); ?>">
						<div class="table-row">
							<label>
								Bedroom
							</label>
						</div>
					</div>
				</div>
				<div class="kitchen">
					<div class="window-wrapper">
						<img src="<?php echo base_url("assets/imgs/kitchen.jpg"); ?>">
						<div class="table-row">
							<label>
								Kitchen
							</label>
						</div>
					</div>
				</div>
				<div class="living-room-2">
					<div class="window-wrapper">
					<img src="<?php echo base_url("assets/imgs/living-room-2.jpg"); ?>">
						<div class="table-row">
							<label>
								Living Room
							</label>
						</div>
					</div>
				</div>
				<div class="basement">
					<div class="window-wrapper">
					<img src="<?php echo base_url("assets/imgs/basement.jpg"); ?>">
						<div class="table-row">
							<label>
								Basement
							</label>
						</div>
					</div>
				</div>
			</div>
			<div id="myDiv">
			<a class='back-to-interior' href="javascript: void;">Back</a>
			<div class="interior-image">
			<!--- We put the picture of the selected interior design and show the description of each detail --->
			</div>
			</div>
		</div>
	</div>
</div>
