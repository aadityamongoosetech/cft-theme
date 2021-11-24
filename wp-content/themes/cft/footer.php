	<!-- Footer Start -->

	<footer class="footer">
		<div class="container">
			<div class="row">						
				<div class="col-sm-12">
					<div class="footer-wrap">
						<div class="footer-left">
							<ul class="footer-social-block">
								<li><a href="https://www.linkedin.com/company/codes-for-tomorrow" target="_blank"><i class="icon-linkedin"></i></a></li>
								<li><a href="https://www.facebook.com/codemongoose/" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/life_at_cft/" target="_blank"><i class="icon-instagram"></i></a></li>
							</ul>
							<ul class="footer-links">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="<?php echo site_url('/contact-us')?>">Let's Connect</a></li>
							</ul>
						</div>
						<ul class="footer-right mobile-view">
							<li><a href="#">Join our Team of talented coders</a></li>
							<li><a href="http://codesfortomorrow.com/career/">Check out Careers <i class="fa fa-long-arrow-right"></i></a></li>
						</ul>
						<div class="copyrights">© Copyright 2020 CodeMongoose Technologies (P) Ltd. All Rights Reserved</div>
						<ul class="footer-right web-view">
							<li><a href="#">Join our Team of talented coders</a></li>
							<li><a href="http://codesfortomorrow.com/career/">Check out Careers <i class="fa fa-long-arrow-right"></i></a></li>
						</ul>
            
					</div>
				</div>
        	</div>
	</footer>
	<!-- Footer Start -->

	<!-- JS -->
  <?php wp_footer(); ?>
  <script src="<?=get_stylesheet_directory_uri();?>/js/jquery.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/jquery.scrolla.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/gsap.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/slick.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/slick-animation.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/script.js"></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkBkCCJ-ml6uMEiEXcPYJlVKEYjW2wTPs&callback=initMap">
</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-196042173-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-196042173-1');
</script>-->
<?php 

/**
 * Fetching Testimonail from DB
 */
$pointers = [];
$args = array(
  'post_type'=>'Testimonial',
   'post_per_page'=>-1
);
$query=  new WP_Query($args);
while ($query->have_posts()) : $query->the_post();
   $point = [];
   $id = get_the_ID();
   $point['lat'] = $latitude = get_post_meta($id,'latitude',true);     
   $point['lng'] = $longitude = get_post_meta($id,'longitude',true);
   $point['title'] = $longitude = get_the_title();
   $point['id'] = $id;
   array_push($pointers,$point);
endwhile;
?>
<script>
        function initMap() {
            var dumbo = {lat:22.7196, lng:75.8577};
            var mapOptions = {
				mapTypeControlOptions: {
					mapTypeIds: ['mystyle', google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.TERRAIN]
				},
                center: dumbo,
                zoom: 1,
				mapTypeId: 'mystyle'
			};
			var myStyle = [
       {
         featureType: "administrative",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "poi",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
         featureType: "water",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       },{
          featureType: "road",
         elementType: "labels",
         stylers: [
           { visibility: "off" }
         ]
       }
     ];
			var mapStyledElement = [ {
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#f5f5f5"
            }
          ]
        },
        {
          "elementType": "labels",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#616161"
            }
          ]
        },
        {
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#616161 "
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#bdbdbd"
            }
          ]
        },
        {
          "featureType": "administrative.neighborhood",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#757575"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          "featureType": "road",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#ffffff"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#757575"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dadada"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#616161"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          "featureType": "transit",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          "featureType": "transit.station",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#c9c9c9"
            }
          ]
        },
        {
            "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        }
      ];

var googlemap = new google.maps.Map(document.getElementById("map"), mapOptions);
var ajax_url = '<?=admin_url('admin-ajax.php')?>';
<?php foreach($pointers as $point){?>
  var marker =  new google.maps.Marker({
    position: {lat:<?=$point['lat']?>, lng:<?=$point['lng']?>},
    map: googlemap,
  });
  marker.addListener("click", () => {
      jQuery.ajax(
        {
          type: "post",
          dataType: "json",
          url: ajax_url,
          data: {
            'action': 'get_post_information',
            'post_id': <?=$point['id']?>,
          },
          success: function (msg) {
            $('.testimonial-desc').html(msg.content);
            $('.testimonial-name').find('div').eq(0).html(msg.title);
            $('.testimonial-name').find('div').eq(1).html(msg.company_name);
          }
        });
  });
<?php } ?>
googlemap.mapTypes.set('mystyle', new google.maps.StyledMapType(myStyle, { name: 'CFT Clients' }));
}
        
        
        
     //  marker.setMap(googlemap);
      
    </script>


</body>

</html>




?>