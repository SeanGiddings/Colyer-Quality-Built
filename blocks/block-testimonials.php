
<div class="testimonials__container">
  <div class="testimonials__title">
	Testimonials <br>
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	<div class="carousel-item active">
		  <div class="testimonials__quote-1">
		  <blockquote cite="http://">
			<?php block_field( 'quote1' ); ?>			
            <small><?php block_field( 'speaker1' ); ?></small>
		  </blockquote>
		  </div>
	</div>

<?php
$testimonials = [
	[block_value( 'quote2' ), block_value( 'speaker2' )],
	[block_value( 'quote3' ), block_value( 'speaker3' )],
	[block_value( 'quote4' ), block_value( 'speaker4' )],
	[block_value( 'quote5' ), block_value( 'speaker5' )],
	[block_value( 'quote6' ), block_value( 'speaker6' )],
	[block_value( 'quote7' ), block_value( 'speaker7' )],
	[block_value( 'quote8' ), block_value( 'speaker8' )],
	[block_value( 'quote9' ), block_value( 'speaker9' )],
	[block_value( 'quote10' ), block_value( 'speaker10' )],
];
foreach ($testimonials as list($quote, $speaker)) :
	if ($quote) : ?>
		<div class="carousel-item">
		  <div class="testimonials__quote-1">
			<blockquote cite="http://">
			  <?php echo $quote ?>		
			  <small> <?php echo $speaker ?></small>
			</blockquote>
		  </div>
		</div>
	<?php endif; ?>
<?php endforeach; ?>

	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</div>
	</div>
