
		<div class="row mt-5">
			<div class="col-12 mx-auto">

<div class="card text-center">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h5 class="card-title">Welcome to your page!</h5>
    <p class="card-text">
      <ul class="list-group list-group-flush">
    <li class="list-group-item list-group-item-primary">Name : <strong><?php echo $this->session->userdata('name') ?></strong></li>
    <!-- <li class="list-group-item list-group-item-primary">Username : <strong><?php echo $this->session->userdata('username') ?></strong></li> -->
    <li class="list-group-item list-group-item-primary">Level : <strong><?php echo $this->session->userdata('level') ?></strong></li>
  </ul>
    </p>
    <a href="" class="btn btn-primary">Go</a>
  </div>
  <div class="card-footer text-muted">
   
  </div>
</div>

			</div>
		</div>