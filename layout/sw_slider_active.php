<!-- Demo styles -->
<style>
	.slider_section {
		background: black;
		margin: 0;
		padding: 0;
	}

	.swiper {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;

	}

	.swiper {
		width: 100%;
		height: 300px;
		margin: 20px auto;
	}

	.append-buttons {
		text-align: center;
		margin-top: 20px;
	}

	.append-buttons button {
		display: inline-block;
		cursor: pointer;
		border: 1px solid #007aff;
		color: #007aff;
		text-decoration: none;
		padding: 4px 10px;
		border-radius: 4px;
		margin: 0 10px;
		font-size: 13px;
	}
</style>
</head>

<body>
	<!-- Swiper -->
	<section class="slider_section">
		<div #swiperRef="" class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="../public/images/active01.JPG" alt="..." />
				</div>
				<div class="swiper-slide">
					<img src="../public/images/active02.JPG" alt="..." />
				</div>
				<div class="swiper-slide">
					<img src="../public/images/active03.JPG" alt="..." />
				</div>
				<div class="swiper-slide">
					<img src="../public/images/active04.JPG" alt="..." />
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper('.mySwiper', {
			slidesPerView: 3,
			centeredSlides: false,
			spaceBetween: 30,
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction',
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		})
	</script>