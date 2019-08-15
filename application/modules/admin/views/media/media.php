<main class="app-content">
  <div class="app-title">
	<div>
		<h1><i class="fa fa-edit"></i> Manage Media
		<a href="<?php echo base_url('admin/addmedia'); ?>">
			<button class="btn btn-primary" type="button">Add Media</button>
		</a>
		</h1>
		<p>Add, Edit and Delete Pages</p>
	</div>

	<ul class="app-breadcrumb breadcrumb side">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item">Media</li>
		<li class="breadcrumb-item active"><a href="#">Media List</a></li>
	</ul>
  </div>
  <div class="row">
	<div class="col-md-12">
	  <div class="tile">
	  	<?php if($this->session->flashdata('mediaerror')){ ?>
			<div class="alert alert-danger alert-dismissible">
				<strong>Error! </strong><?php echo $this->session->flashdata('mediaerror'); ?>
			</div>
		<?php } ?>
		<?php if($this->session->flashdata('mediasuccess')){ ?>
			<div class="alert alert-success alert-dismissible">
				<strong>Success! </strong><?php echo $this->session->flashdata('mediasuccess'); ?>
			</div>
		<?php } ?>
		<div class="tile-body">
		  <table class="table table-hover table-bordered" id="resultsTable">
			<thead>
			  <tr>
				<th>Media Type</th>
				<th>Media</th>
				<th>Created On</th>
				<th>Actions</th>
			  </tr>
			</thead>
			<tbody>
				<?php foreach($media as $item){ ?>
				<tr>
					<td><?php echo $item['media_type']; ?></td>
					<td><?php echo $item['media_path']; ?></td>
					<td><?php echo $item['created_at']; ?></td>
					<td>
						<p class="bs-component">
							<a onclick="return confirm('Are you sure?');" style="text-decoration: none;" href="<?php echo base_url('admin/deletemedia/').$item['media_id']; ?>">
								<button class="btn btn-danger" type="button">Delete</button>
							</a>
						</p>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		  </table>
		</div>
	  </div>
	</div>
  </div>
</main>
