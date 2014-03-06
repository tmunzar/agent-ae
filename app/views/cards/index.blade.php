@extends('layouts.master')

@section('pre-container')
<div id="pre-container">
	<div class="wrapper">
		<div class="search"> 
      <input class="search-input" id="search_terms" name="search_terms" placeholder="Search" type="text" />
      <button class='search-button'><i class="icon-search"></i></button>
		</div>
	</div>
</div>
@stop

@section('content')
<h1>All Cards</h1>
<div class="movie-list">
	<?php foreach ($cards as $card) { ?>
	<div class="card">
		<div class="inner">
			<div class="poster">
				<img src="uploads/cards/thumbs/medium/<?php echo $card->image ?>" alt="Gravity" />
			</div>
			<div class="detail">
				<div class="title">
					<h5><i class="icon-commerical-building"></i> <?php echo $card->title ?></h5>
					<h6><i class="icon-location"></i> <?php echo $card->location ?></h6>
				</div>
				<div class="description">
					<h6 class="date"><?php echo date('d M Y',strtotime($card->created_at)) ?></h6>
					<p>
						<?php echo $card->description ?>
					</p>
					<div class="contributor">
						<div class="thumb">
							<img src="img/me-thumb.jpg" />
						</div>
						<h4>Talal Munzar</h4>
						<h4>Jellyfish Dubai Realty Company</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
@stop