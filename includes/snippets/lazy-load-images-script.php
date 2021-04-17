<script>

		setInterval(function() {
			lazyloadimages(0);
		}, 200);
		window.addEventListener("scroll", function(event) {
			var top = this.scrollY;
			lazyloadimages(top);

		});

function lazyloadimages(top) {

			var imgs = document.getElementsByTagName("img");

			var ads = document.getElementsByClassName("lazyload-ads");

			// var sources = document.getElementsByTagName("video");

			var bodyRect = document.body.getBoundingClientRect();

			var window_height = window.innerHeight;

			var win_width = screen.availWidth;

			lazyload_img(imgs, bodyRect, window_height, win_width);

			// lazyload_video(sources, top, window_height, win_width);

		}

		function lazyload_img(imgs, bodyRect, window_height, win_width) {

			for (i = 0; i < imgs.length; i++) {



				if (imgs[i].getAttribute("data-class") == "LazyLoad") {

					var elemRect = imgs[i].getBoundingClientRect(),

						offset = elemRect.top - bodyRect.top;

					if (elemRect.top != 0 && elemRect.top - window_height < 100) {

						/*console.log(imgs[i].getAttribute("data-src")+" -- "+elemRect.top+" -- "+window_height);*/

						var src = imgs[i].getAttribute("data-src") ? imgs[i].getAttribute("data-src") : imgs[i].src;

						var srcset = imgs[i].getAttribute("data-srcset") ? imgs[i].getAttribute("data-srcset") : "";



						imgs[i].src = src;

						if (imgs[i].srcset != null & imgs[i].srcset != "") {

							imgs[i].srcset = srcset;

						}

						delete imgs[i].dataset.class;

						imgs[i].setAttribute("data-done", "Loaded");

					}

				}

			}

		}


      
	</script>

