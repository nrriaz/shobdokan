<div id="shop_reviews" class="row">
	<div class="col-sm-3">
		<div class="new-review">
			<div><i class="fas fa-pencil-alt"></i> Write Your Own Review</div>
		</div>
		<div class="review-summary">
			<h6 class="text-center">Average score: 4.67(120)</h6>
			<div class="row">
				<div class="col-sm-5 stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<div class="progress col-sm-5">
	  				<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="col-sm-2">
					100
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<div class="progress col-sm-5">
	  				<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="col-sm-2">
					100
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<div class="progress col-sm-5 ">
	  				<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="col-sm-2">
					100
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<div class="progress col-sm-5">
	  				<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="col-sm-2">
					100
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 stars">
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<div class="progress col-sm-5">
	  				<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="col-sm-2">
					100
				</div>
			</div>
		</div>
	</div>
	<div class=" col-sm-7">
		<user-review
			v-for="i in 6"
			:key="i"
			rating="3" 
			rating_subject="Excellent"
			rating_time="21st February 2018 at 11.11am"
			rating_name="Bokachoda Sohan">
		</user-review>
	</div>				
</div>