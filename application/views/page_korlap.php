

    

		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
          			<div class="card-body">
						<h3 class="card-title text-center">Welcome to your page!</h3>
						<ul>
							<li>Name : <?php echo $this->session->userdata('name') ?></li>
							<li>Username : <?php echo $this->session->userdata('username') ?></li>
							<li>Level : <?php echo $this->session->userdata('level') ?></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

