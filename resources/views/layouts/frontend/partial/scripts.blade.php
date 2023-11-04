<script src="{{ asset('frontend/js/modernizr-3.5.0.min.js') }}"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<!-- Jquery Mobile Menu -->
	<script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
	<!-- Jquery Slick , Owl-Carousel Plugins -->
	<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
	<!-- One Page, Animated-HeadLin -->
	<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
	<script src="{{ asset('frontend/js/animated.headline.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('frontend/js/gijgo.min.js') }}"></script>
	<!-- Nice-select, sticky -->
	<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
	<!-- Progress -->
	<script src="{{ asset('frontend/js/jquery.barfiller.js') }}"></script>
	<!-- counter , waypoint,Hover Direction -->
	<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('frontend/js/hover-direction-snake.min.js') }}"></script>
	<!-- contact js -->
	<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
	<!-- <script src="{ { asset('frontend/js/contact.js') }}"></script> -->
	<script src="{{ asset('frontend/js/mail-script.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
	<!-- Jquery Plugins, main Jquery -->
	<script src="{{ asset('frontend/js/plugins.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	<script src="https://kit.fontawesome.com/11e3e6af90.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ asset('frontend/js/tilt.jquery.min.js') }}"></script>

	<script>
			$(".js-tilt").tilt({
					scale: 1.1,
			});
	</script>
	<script>
			[].forEach.call(
					document.querySelectorAll(".mdc-text-field"),
					function(el) {
							mdc.textField.MDCTextField.attachTo(el);
					}
			);
	</script>
	<script type="text/javascript">
			var accordion = (function() {
					var $accordion = $(".js-accordion");
					var $accordion_header = $accordion.find(".js-accordion-header");
					var $accordion_item = $(".js-accordion-item");

					// default settings
					var settings = {
							// animation speed
							speed: 400,

							// close all other accordion items if true
							oneOpen: false,
					};

					return {
							// pass configurable object literal
							init: function($settings) {
									$accordion_header.on("click", function() {
											accordion.toggle($(this));
									});

									$.extend(settings, $settings);

									// ensure only one accordion is active if oneOpen is true
									if (settings.oneOpen && $(".js-accordion-item.active").length > 1) {
											$(".js-accordion-item.active:not(:first)").removeClass("active");
									}

									// reveal the active accordion bodies
									$(".js-accordion-item.active").find("> .js-accordion-body").show();
							},
							toggle: function($this) {
									if (
											settings.oneOpen &&
											$this[0] !=
											$this
											.closest(".js-accordion")
											.find("> .js-accordion-item.active > .js-accordion-header")[0]
									) {
											$this
													.closest(".js-accordion")
													.find("> .js-accordion-item")
													.removeClass("active")
													.find(".js-accordion-body")
													.slideUp();
									}

									// show/hide the clicked accordion item
									$this.closest(".js-accordion-item").toggleClass("active");
									$this.next().stop().slideToggle(settings.speed);
							},
					};
			})();

			$(document).ready(function() {
					accordion.init({
							speed: 300,
							oneOpen: true
					});
			});
	</script>