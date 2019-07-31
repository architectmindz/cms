<main class="app-content">
  <div class="app-title">
	<div>
		<h1><i class="fa fa-edit"></i> Manage Pages
		<a href="<?php echo base_url('pages/index/add'); ?>">
			<button class="btn btn-primary" type="button">New Page</button>
		</a>
		</h1>
		<p>Add, Edit and Delete Pages</p>
	</div>

	<ul class="app-breadcrumb breadcrumb side">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item">Pages</li>
		<li class="breadcrumb-item active"><a href="#">Available Pages</a></li>
	</ul>
  </div>
  <div class="row">
	<div class="col-md-12">
	  <div class="tile">
		<div class="tile-body">
		  <table class="table table-hover table-bordered" id="resultsTable">
			<thead>
			  <tr>
				<th>Title</th>
				<th>Slug</th>
				<th>Status</th>
				<th>Created On</th>
				<th>Actions</th>
			  </tr>
			</thead>
			<tbody>
				<?php foreach($pages as $page){ ?>
				<tr>
					<td><?php echo $page['page_title']; ?></td>
					<td><?php echo $page['page_slug']; ?></td>
					<td><?php echo $page['page_status']; ?></td>
					<td><?php echo $page['created_at']; ?></td>
					<td>
						<p class="bs-component">
							<a href="<?php echo base_url('pages/view/').$page['page_id']; ?>">
								<button class="btn btn-info" type="button">View</button>
							</a>
							<a href="<?php echo base_url('pages/edit/').$page['page_id']; ?>">
								<button class="btn btn-primary" type="button">Edit</button>
							</a>
							<a onclick="return confirm('Are you sure?');" href="<?php echo base_url('pages/delete/').$page['page_id']; ?>">
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
