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
				<div class="more more-tmp" id="asbestos-cement">
					<a href="#" class='show-more'></a>
					<span>Asbestos Ceiling</span>
				</div>
				<div class="more more-tmp" id="asbestos-cement-drainage-pipe">
					<a href="#" class='show-more'></a>
					<span>Asbestos Cement Drainage Pipe</span>
				</div>
				<div class="more more-tmp" id="asbestos-cement-external-building-pannel">
					<a href="#" class='show-more'></a>
					<span>Asbestos Cement External Building Pannel</span>
				</div>
				<div class="more more-tmp" id="sidewalk-cement">
					<a href="#" class='show-more'></a>
					<span>Sidewalk Cement</span>
				</div>
				<div class="more more-tmp" id="old-toys">
					<a href="#" class='show-more'></a>
					<span>Old Toys</span>
				</div>
				<div class="more more-tmp" id="christmas-decoration">
					<a href="#" class='show-more'></a>
					<span>Christmas Decorations</span>
				</div>

				<!-- Info Boxes -->
				<div class="infobox-tmp">
					<span class="close"><a href="#"><img src="<?php echo base_url("assets/imgs/close.png"); ?>"/></a></span>
					<br/>

					<div id="asbestos-cement_info">
						<img src="<?php echo base_url("assets/imgs/Asbestos-cement-roof.jpg"); ?>"/><br/>
						<p>cement roofing and siding shingles contain asbestos cement. They are usually covered in mosses as they've been there for many years.</p>
					</div>

					<div id="asbestos-cement-drainage-pipe_info">
						<img src="<?php echo base_url("assets/imgs/Asbestos-cement-drainage-pipe.jpg"); ?>"/><br/>
						<p>old cement pipes and gutters were made with a mixture of cement and asbestos.</p>
					</div>

					<div id="asbestos-cement-external-building-pannel_info">
						<img src="<?php echo base_url("assets/imgs/Asbestos-cement-external-building-panel.jpg"); ?>"/><br/>
						<p>Asbestos cement means a material which is a  mixture of cement and a type of asbestos. If visual identification is inconclusive, analysis will be needed to establish the asbestos type.</p>
					</div>

					<div id="sidewalk-cement_info">
						<img width="270" src="<?php echo base_url("assets/imgs/sidewalk-cement.jpg"); ?>"/><br/>
						<p>Asbestos cement means a material which is a mixture of cement and a type of asbestos. If visual identification is inconclusive, analysis will be needed to establish the asbestos type.</p>
					</div>

					<div id="old-toys_info">
						<img width="270" src="<?php echo base_url("assets/imgs/old-toys.png"); ?>"/><br/>
						<p>Old toys might contain asbestos fibers.</p>
					</div>

					<div id="christmas-decoration_info">
						<img width="270" src="<?php echo base_url("assets/imgs/small-evergreen-in-snow.jpg"); ?>"/><br/>
						<p>Fake snow is known to contain asbestos fibers.</p>
					</div>

				</div>
				<div class="attic-left">
					<div class="window-wrapper-attic">
						<img id="attic"  src="<?php echo base_url("assets/imgs/attic-left.png"); ?>">
						<div class="table-row">
								<label>
									Attic
								</label>
						</div>
					</div>
				</div>
				<div class="attic-right">
					<div class="window-wrapper-attic">
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
