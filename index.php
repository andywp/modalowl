<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OWL LOAd AJAX</title>
		
		<link href="images/site/favicon.ico" rel="icon">
		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome/4/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
	
	<div class="col-sm-4 news-events-page--list-page">
	  <a href="#" data-toggle="modal" data-target="#carouselModal">
		<img src="http://placehold.it/359x159" class="img-responsive">
	  </a>
	  <h6><a href="" data-toggle="modal" data-target="#carouselModal">Title Here</a></h6>
	</div>
	<div class="col-sm-4 news-events-page--list-page">
	  <a href="#" data-toggle="modal" data-target="#carouselModal">
		<img src="http://placehold.it/359x159" class="img-responsive">
	  </a>
	  <h6><a href="" data-toggle="modal" data-target="#carouselModal">Title Here</a></h6>
	</div>
	<div class="col-sm-4 news-events-page--list-page">
	  <a href="#" data-toggle="modal" data-target="#carouselModal">
		<img src="http://placehold.it/359x159" class="img-responsive">
	  </a>
	  <h6><a href="" data-toggle="modal" data-target="#carouselModal">Title Here</a></h6>
	</div>
<div class="modal fade" id="carouselModal" tabindex="-1" role="dialog" aria-labelledby="carouselModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="carouselModalLabel">Title Here</h4>
      </div>
      <div class="modal-body">
		<div class="customNavigation">
		  <a class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		  <a class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		</div>
				<div id="sync1" class="owl-carousel">
				
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/1000x500" class="img-responsive"></div>
				</div>
				<div id="sync2" class="owl-carousel thumbnails-wrap">
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				  <div class="item"><img src="http://placehold.it/148x69" class="img-responsive"></div>
				</div>
			  </div>
			</div>
		  </div>
		</div>

	
	
	
	
		<script src="assets/js/jquery-1.10.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Owl Carousel -->
		<script src="assets/js/owl.carousel.min.js"></script>		
		<script type="text/Javascript">
			$(document).ready(function() {
 
			  var sync1 = $("#sync1");
			  var sync2 = $("#sync2");
			 
			  sync1.owlCarousel({
				singleItem : true,
				slideSpeed : 1000,
				pagination:false,
				afterAction : syncPosition,
				responsiveRefreshRate : 200,
			  });
			  
				$(".next").click(function(){
				sync1.trigger('owl.next');
			  })
			  $(".prev").click(function(){
				sync1.trigger('owl.prev');
			  })
			 
			  sync2.owlCarousel({
				items : 6,
				itemsDesktop      : [1199,6],
				itemsDesktopSmall : [979,6],
				itemsTablet       : [768,4],
				itemsMobile       : [479,3],
				pagination:false,
				responsiveRefreshRate : 100,
				afterInit : function(el){
				  el.find(".owl-item").eq(0).addClass("synced");
				}
			  });
			 
			  function syncPosition(el){
				var current = this.currentItem;
				$("#sync2")
				  .find(".owl-item")
				  .removeClass("synced")
				  .eq(current)
				  .addClass("synced")
				if($("#sync2").data("owlCarousel") !== undefined){
				  center(current)
				}
			  }
			 
			  $("#sync2").on("click", ".owl-item", function(e){
				e.preventDefault();
				var number = $(this).data("owlItem");
				sync1.trigger("owl.goTo",number);
			  });
			 
			  function center(number){
				var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
				var num = number;
				var found = false;
				for(var i in sync2visible){
				  if(num === sync2visible[i]){
					var found = true;
				  }
				}
			 
				if(found===false){
				  if(num>sync2visible[sync2visible.length-1]){
					sync2.trigger("owl.goTo", num - sync2visible.length+2)
				  }else{
					if(num - 1 === -1){
					  num = 0;
					}
					sync2.trigger("owl.goTo", num);
				  }
				} else if(num === sync2visible[sync2visible.length-1]){
				  sync2.trigger("owl.goTo", sync2visible[1])
				} else if(num === sync2visible[0]){
				  sync2.trigger("owl.goTo", num-1)
				}
				
			  }
			 
			});
		</script>
		
	</body>
</html>