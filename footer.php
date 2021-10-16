<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astronauta
 */

?>
	<div><strong>Current template:</strong><?php global $template; echo basename($template); ?>
 </div>
	<footer id="colophon" class="site-footer footer">
		<div class="footer__nav">
			<div class="container">
				<?php wp_nav_menu( array( 
					'theme_location' => 'menu-footer', 
					'container_class' => 'footer__menu' ) );  
				?>
			</div>
		</div>
		<div class="footer__info">
			<div class="container">
					<div class="footer__info-left">
					<p>© 2020 INSTITUTO HALAL IBEROAMERICANO</p>
					<p>Todos los derechos reservados</p>
					</div>
					<div class="footer__info-middle">
						<svg width="184px" height="184px" viewBox="0 0 184 184" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="1-Home" transform="translate(-868.000000, -6062.000000)" fill="#3E5730">
										<g id="Group-1515" transform="translate(868.693000, 6062.892800)">
											<path d="M101.3275,146.633 C100.8235,146.268 100.2735,145.922 99.6905,145.719 C98.6795,145.365 97.6745,145.937 97.3715,146.994 C99.0845,146.799 100.3835,147.624 101.5815,148.76 L96.4935,148.76 C95.3805,148.76 95.2115,148.621 94.9875,147.519 C94.9665,147.412 94.9575,147.303 94.9415,147.195 C94.6815,145.321 94.4235,143.448 94.1565,141.576 C94.1415,141.472 94.0675,141.376 94.0055,141.242 C93.5205,142.03 93.4775,142.268 93.6045,143.003 C93.6895,143.495 93.7735,143.99 93.8145,144.488 C93.9245,145.826 93.5205,146.974 92.5015,147.883 C91.8065,148.501 90.9965,148.92 90.1425,149.251 C89.3725,149.549 88.5815,149.79 87.7995,150.054 C87.6035,150.119 87.3715,150.134 87.3385,150.463 C87.5305,150.483 87.6975,150.52 87.8625,150.513 C88.5785,150.482 89.2945,150.428 90.0105,150.402 C91.7425,150.338 92.9125,149.492 93.5565,147.893 C93.7005,147.537 93.8675,147.191 94.0235,146.84 C94.1195,147.042 94.1115,147.231 94.1435,147.411 C94.2475,147.987 94.3095,148.576 94.4895,149.128 C94.7305,149.866 95.1495,150.122 95.9145,150.123 C98.5695,150.127 101.2245,150.125 103.8805,150.122 C104.0655,150.121 104.2505,150.086 104.4425,150.067 L104.4425,148.792 C103.8175,148.814 103.4275,148.423 103.0155,148.07 C102.4555,147.588 101.9245,147.065 101.3275,146.633" id="Fill-1461"></path>
											<path d="M86.3832,145.2014 C86.2972,144.3634 86.1502,143.5314 86.0282,142.6784 C86.6212,142.6354 86.5502,142.2024 86.5912,141.8594 C86.6342,141.5104 86.6542,141.1604 86.2172,140.9944 C85.8312,140.8474 85.4432,140.6814 85.3132,140.1834 C84.9222,140.6744 84.8262,141.1974 84.8232,141.7444 C84.8232,141.8464 84.8482,141.9894 84.9162,142.0414 C85.2172,142.2724 85.2082,142.6054 85.2582,142.9254 C85.3632,143.5914 85.4952,144.2534 85.5802,144.9214 C85.7492,146.2574 85.8902,147.5974 86.0512,148.9344 C86.1252,149.5404 85.8492,149.9254 85.3332,150.1934 C84.5482,150.6034 83.7082,150.8144 82.8312,150.8394 C82.3592,150.8514 81.8722,150.8134 81.4112,150.7094 C80.3362,150.4654 79.7942,149.6574 79.9812,148.5784 C80.0652,148.0914 80.2452,147.6174 80.4152,147.1494 C80.5272,146.8464 80.7122,146.5684 80.8372,146.2684 C80.8722,146.1844 80.8132,146.0624 80.7942,145.9454 C80.6942,145.9824 80.6342,145.9844 80.6182,146.0134 C79.9332,147.1384 79.3792,148.3104 79.3332,149.6584 C79.2882,151.0024 79.8932,151.7854 81.2122,152.0764 C82.3582,152.3284 83.5072,152.2764 84.6342,151.9754 C86.0722,151.5934 86.7692,150.7194 86.7202,149.2254 C86.6762,147.8824 86.5212,146.5404 86.3832,145.2014" id="Fill-1463"></path>
											<path d="M88.8778,143.5159 C89.5298,143.9419 89.5808,143.9379 90.2358,143.4439 C91.5188,144.0649 92.1018,145.3369 92.9018,146.5349 C93.0988,145.7679 92.9408,145.1489 92.6148,144.5849 C91.6488,142.9149 90.1898,141.8229 88.4108,141.1449 C87.8148,140.9179 87.5448,141.1859 87.6538,141.8229 C87.7848,142.5859 88.2548,143.1089 88.8778,143.5159" id="Fill-1465"></path>
											<path d="M147.6068,114.2268 L147.3238,114.5088 L147.3238,147.3238 L114.5098,147.3238 L91.3068,170.5268 L68.3868,147.6058 L68.1038,147.3238 L35.2898,147.3238 L35.2898,114.5088 L12.0868,91.3058 L35.0068,68.3858 L35.2898,68.1038 L35.2898,35.2888 L68.1038,35.2888 L91.3068,12.0858 L114.2268,35.0068 L114.5098,35.2888 L147.3238,35.2888 L147.3238,68.1038 L170.5268,91.3058 L147.6068,114.2268 Z M149.2538,67.3038 L149.2538,33.3598 L115.3098,33.3598 L91.3068,9.3568 L67.3038,33.3598 L33.3598,33.3598 L33.3598,67.3038 L9.3568,91.3058 L33.3598,115.3088 L33.3598,149.2538 L67.3038,149.2538 L91.3068,173.2558 L115.3098,149.2538 L149.2538,149.2538 L149.2538,115.3088 L173.2568,91.3058 L149.2538,67.3038 Z" id="Fill-1467"></path>
											<path d="M154.223,116.967 L153.94,117.25 L153.94,153.94 L117.25,153.94 L91.307,179.883 L65.646,154.222 L65.364,153.94 L28.674,153.94 L28.674,117.25 L2.731,91.306 L28.391,65.646 L28.674,65.363 L28.674,28.673 L65.364,28.673 L91.307,2.73 L116.968,28.391 L117.25,28.673 L153.94,28.673 L153.94,65.363 L179.883,91.306 L154.223,116.967 Z M155.87,64.564 L155.87,26.743 L118.05,26.743 L91.307,0 L64.564,26.743 L26.744,26.743 L26.744,64.564 L0,91.306 L26.744,118.049 L26.744,155.87 L64.564,155.87 L91.307,182.613 L118.05,155.87 L155.87,155.87 L155.87,118.049 L182.614,91.306 L155.87,64.564 Z" id="Fill-1469"></path>
											<path d="M129.7621,101.4856 L129.7211,101.4856 C121.6671,101.4856 114.0351,98.0686 107.0221,91.3256 C108.8961,89.6656 114.2881,85.2906 121.5601,82.8736 C133.3401,78.9586 144.3121,81.7896 154.1851,91.2866 C151.5491,93.6416 141.8781,101.4676 129.7621,101.4856 L129.7621,101.4856 Z M99.3501,99.9936 C97.7631,104.7856 97.2841,111.8216 103.3601,118.9706 L79.2541,118.9706 C85.3281,111.8216 84.8511,104.7856 83.2631,99.9936 C82.0731,96.4016 80.1421,93.5926 78.8891,92.0206 C79.5261,91.8756 80.2631,91.6426 81.0011,91.2726 C82.7261,90.4106 84.7531,88.6496 85.0691,85.1146 L85.1141,85.1156 L85.1141,85.0236 C85.8831,84.9116 87.0201,84.6576 88.1641,84.0786 C89.2821,83.5116 90.5281,82.5716 91.3521,81.0256 C92.2191,82.7456 93.9811,84.7556 97.4981,85.0686 L97.4981,85.1126 L97.5791,85.1126 C97.6841,85.8836 97.9261,87.0176 98.4961,88.1576 C99.2751,89.7146 100.7831,91.5196 103.6701,92.0886 C102.4171,93.6736 100.5241,96.4526 99.3501,99.9936 L99.3501,99.9936 Z M61.0541,99.7356 C49.2741,103.6506 38.3021,100.8196 28.4291,91.3226 C31.0651,88.9666 40.7351,81.1406 52.8521,81.1236 L52.8921,81.1236 C60.9461,81.1236 68.5781,84.5406 75.5921,91.2836 C73.7181,92.9436 68.3251,97.3186 61.0541,99.7356 L61.0541,99.7356 Z M49.7971,49.8216 C53.3251,50.0196 65.6981,51.3236 74.2781,59.8796 C79.9921,65.5766 82.9821,73.3986 83.1731,83.1416 C80.6641,82.9896 73.7141,82.2606 66.8581,78.8096 C55.7991,73.2436 50.0621,63.4926 49.7971,49.8216 L49.7971,49.8216 Z M91.2891,28.4276 C93.6441,31.0636 101.4711,40.7336 101.489122,52.8506 C101.4991,60.9196 98.0821,68.5656 91.3281,75.5896 C89.6671,73.7166 85.2931,68.3236 82.8761,61.0526 C78.9611,49.2726 81.7921,38.3006 91.2891,28.4276 L91.2891,28.4276 Z M103.8031,66.8576 C109.3701,55.7976 119.1201,50.0616 132.7911,49.7966 C132.5931,53.3256 131.2901,65.6976 122.7351,74.2776 C117.0361,79.9916 109.2151,82.9816 99.4721,83.1736 C99.6241,80.6636 100.3521,73.7136 103.8031,66.8576 L103.8031,66.8576 Z M156.2641,90.6226 C150.4421,84.7986 144.1111,81.1736 137.4491,79.8426 C132.1051,78.7756 126.5541,79.1786 120.9501,81.0416 C112.5141,83.8456 106.6261,89.0336 105.2461,90.3276 C100.8931,90.1436 99.7981,86.7946 99.5241,85.1016 C109.7831,84.8986 118.0521,81.7146 124.1141,75.6286 C129.6561,70.0646 132.2531,63.0746 133.4571,58.1906 C134.7581,52.9126 134.7581,48.9816 134.7571,48.8176 L134.7531,47.8556 L133.7921,47.8556 C125.5581,47.8556 118.5181,49.7676 112.8661,53.5386 C108.3331,56.5626 104.6931,60.7726 102.0471,66.0516 C98.3991,73.3336 97.6781,80.5206 97.5351,83.1296 C93.0941,82.6346 92.4001,78.6276 92.2921,77.3636 C99.6921,69.8446 103.4371,61.5926 103.4181,52.8306 C103.4031,44.9776 100.2971,38.1976 97.6951,33.8916 C94.8831,29.2406 92.1041,26.4616 91.9871,26.3456 L91.3041,25.6686 L90.6241,26.3486 C84.8021,32.1716 81.1751,38.5016 79.8451,45.1636 C78.7791,50.5066 79.1811,56.0576 81.0441,61.6616 C83.8481,70.0976 89.0361,75.9846 90.3301,77.3656 C90.1441,81.6506 86.8021,82.7806 85.1021,83.0766 C84.8961,72.8226 81.7121,64.5576 75.6291,58.5006 C70.0651,52.9586 63.0751,50.3596 58.1911,49.1556 C52.9111,47.8546 48.9831,47.8576 48.8181,47.8556 L47.8561,47.8596 L47.8561,48.8216 C47.8561,57.0556 49.7681,64.0956 53.5381,69.7476 C56.5631,74.2806 60.7731,77.9206 66.0531,80.5656 C73.3341,84.2146 80.5211,84.9356 83.1301,85.0786 C82.6361,89.5176 78.6291,90.2116 77.3651,90.3186 C69.8631,82.9366 61.6331,79.1926 52.8931,79.1926 L52.8311,79.1926 C44.9791,79.2086 38.1991,82.3136 33.8931,84.9166 C29.2411,87.7286 26.4631,90.5076 26.3471,90.6246 L25.6701,91.3066 L26.3501,91.9866 C32.1721,97.8096 38.5021,101.4356 45.1641,102.7656 C47.1061,103.1536 49.0751,103.3466 51.0641,103.3466 C54.5491,103.3466 58.0951,102.7536 61.6631,101.5666 C69.3921,98.9986 74.9851,94.4246 76.9291,92.6816 C78.0031,93.9526 80.2061,96.8646 81.4511,100.6626 C83.6191,107.2776 82.0011,113.4346 76.6461,118.9706 L41.2031,118.9706 L41.2031,120.9016 L141.4101,120.9016 L141.4101,118.9706 L105.9671,118.9706 C100.6131,113.4346 98.9941,107.2776 101.1621,100.6626 C102.4021,96.8826 104.5891,93.9806 105.6681,92.7016 C113.0571,99.8126 121.1441,103.4166 129.7211,103.4166 L129.7831,103.4166 C137.6351,103.4006 144.4151,100.2956 148.7201,97.6926 C153.3721,94.8806 156.1511,92.1006 156.2671,91.9846 L156.9441,91.3016 L156.2641,90.6226 Z" id="Fill-1471"></path>
											<path d="M66.0785,90.5139 L39.4765,90.5139 C41.1875,89.6159 43.7375,88.4859 46.8275,87.7479 C53.7095,86.1079 60.1735,87.0389 66.0785,90.5139 M58.4885,94.7959 C51.5975,96.4249 45.1465,95.5029 39.2755,92.0579 L65.8445,92.0579 C64.1255,92.9489 61.5735,94.0669 58.4885,94.7959 M36.2155,90.6589 L35.3365,91.2879 L36.2185,91.9149 C41.7805,95.8709 47.3475,97.0979 52.1115,97.0979 C54.6175,97.0979 56.9015,96.7579 58.8445,96.2989 C64.9285,94.8609 68.9635,92.0349 69.1325,91.9159 L70.0195,91.2869 L69.1335,90.6569 C60.5945,84.5809 52.0945,84.9059 46.4685,86.2459 C40.3945,87.6949 36.3835,90.5369 36.2155,90.6589" id="Fill-1473"></path>
											<path d="M144.0043,90.5139 L117.4033,90.5139 C119.1133,89.6159 121.6633,88.4859 124.7533,87.7479 C131.6353,86.1079 138.0993,87.0389 144.0043,90.5139 M136.4143,94.7959 C129.5243,96.4249 123.0723,95.5029 117.2023,92.0579 L143.7713,92.0579 C142.0523,92.9489 139.4993,94.0669 136.4143,94.7959 M124.3953,86.2459 C118.3213,87.6949 114.3093,90.5369 114.1423,90.6589 L113.2633,91.2879 L114.1443,91.9149 C119.7063,95.8709 125.2743,97.0979 130.0373,97.0979 C132.5433,97.0979 134.8273,96.7579 136.7703,96.2989 C142.8553,94.8609 146.8903,92.0349 147.0583,91.9159 L147.9453,91.2869 L147.0603,90.6569 C138.5203,84.5809 130.0213,84.9059 124.3953,86.2459" id="Fill-1475"></path>
											<path d="M90.535,39.093 L90.535,65.695 C89.637,63.985 88.507,61.435 87.77,58.345 C86.129,51.463 87.06,44.999 90.535,39.093 M92.079,65.896 L92.079,39.331 C92.976,41.063 94.103,43.637 94.829,46.738 C96.441,53.609 95.515,60.041 92.079,65.896 M96.32,46.328 C94.881,40.243 92.057,36.208 91.937,36.039 L91.308,35.152 L90.678,36.038 C84.603,44.578 84.927,53.077 86.268,58.703 C87.716,64.777 90.559,68.788 90.68,68.956 L91.309,69.835 L91.936,68.954 C97.974,60.466 97.653,51.965 96.32,46.328" id="Fill-1477"></path>
											<path d="M107.2259,76.4993 L125.9869,57.7233 C125.4009,59.5673 124.3869,62.1613 122.7219,64.8563 C119.0059,70.8743 113.8009,74.7803 107.2259,76.4993 M109.5229,68.0713 C113.2279,62.0723 118.4479,58.1763 125.0629,56.4623 L106.2459,75.2963 C106.8239,73.4363 107.8369,70.8013 109.5229,68.0713 M128.2119,55.2943 L128.3949,54.2223 L127.3229,54.4023 C116.9889,56.1453 111.2069,62.3843 108.1769,67.3113 C104.9069,72.6303 104.0799,77.4773 104.0459,77.6813 L103.8719,78.7473 L104.9369,78.5673 C115.2079,76.8353 120.9929,70.5973 124.0369,65.6683 C127.3219,60.3493 128.1769,55.4983 128.2119,55.2943" id="Fill-1479"></path>
											<path d="M56.7972,57.8889 L75.6072,76.6999 C73.7632,76.1239 71.1602,75.1199 68.4552,73.4559 C62.4282,69.7499 58.5162,64.5219 56.7972,57.8889 L56.7972,57.8889 Z M76.8412,75.7489 L58.0572,56.9649 C59.9152,57.5549 62.5322,58.5779 65.2392,60.2569 C71.2372,63.9769 75.1302,69.1799 76.8412,75.7489 L76.8412,75.7489 Z M78.9022,78.0129 C77.1702,67.7419 70.9322,61.9569 66.0032,58.9129 C60.6842,55.6279 55.8332,54.7729 55.6292,54.7379 L54.5572,54.5549 L54.7372,55.6269 C56.4812,65.9609 62.7192,71.7429 67.6462,74.7729 C72.9642,78.0429 77.8122,78.8689 78.0152,78.9029 L79.0822,79.0779 L78.9022,78.0129 Z" id="Fill-1481"></path>
											<path d="M71.3265,104.5207 C72.3685,103.4507 73.9035,102.8927 75.8945,102.8597 C75.8225,103.7987 75.5155,105.4847 74.2985,106.7267 C73.2555,107.7907 71.7295,108.3437 69.7575,108.3777 C69.8235,107.4427 70.1175,105.7617 71.3265,104.5207 L71.3265,104.5207 Z M68.9415,109.9107 C69.1535,109.9197 69.3615,109.9237 69.5655,109.9237 C72.0685,109.9237 74.0345,109.2087 75.4135,107.7947 C77.6665,105.4847 77.4615,102.1847 77.4515,102.0447 L77.4035,101.3587 L76.7165,101.3277 C73.8885,101.2007 71.6995,101.9167 70.2075,103.4557 C67.9685,105.7677 68.1955,109.0587 68.2055,109.1987 L68.2585,109.8787 L68.9415,109.9107 Z" id="Fill-1483"></path>
											<path d="M111.2875,104.5207 C112.4965,105.7617 112.7915,107.4427 112.8555,108.3777 C110.8845,108.3437 109.3585,107.7907 108.3155,106.7267 C107.0975,105.4837 106.7915,103.7977 106.7195,102.8597 C108.7105,102.8927 110.2455,103.4507 111.2875,104.5207 M105.8975,101.3277 L105.2105,101.3587 L105.1625,102.0447 C105.1525,102.1847 104.9475,105.4847 107.2005,107.7947 C108.5805,109.2087 110.5455,109.9237 113.0485,109.9237 C113.2525,109.9237 113.4615,109.9197 113.6735,109.9107 L114.3555,109.8787 L114.4075,109.1987 C114.4185,109.0587 114.6445,105.7677 112.4055,103.4557 C110.9145,101.9167 108.7245,101.2017 105.8975,101.3277" id="Fill-1485"></path>
											<path d="M70.2528,41.0793 C71.0898,41.4893 72.5238,42.3903 73.2218,43.9833 C73.8228,45.3573 73.7588,46.9933 73.0318,48.8553 C72.1928,48.4373 70.7588,47.5233 70.0648,45.9223 C69.4698,44.5503 69.5338,42.9243 70.2528,41.0793 M73.1958,50.6023 L73.8498,50.8173 L74.1378,50.1933 C75.3288,47.6253 75.4958,45.3283 74.6368,43.3643 C73.3458,40.4163 70.2138,39.3783 70.0818,39.3353 L69.4308,39.1253 L69.1438,39.7453 C67.9638,42.2913 67.7968,44.5753 68.6478,46.5363 C69.9318,49.4963 73.0638,50.5583 73.1958,50.6023" id="Fill-1487"></path>
											<path d="M109.1117,44.7112 C109.5097,43.2742 110.5787,42.0522 112.2897,41.0672 C112.6847,41.9112 113.2387,43.5122 112.7837,45.1912 C112.3907,46.6382 111.3167,47.8722 109.5857,48.8672 C109.1937,48.0102 108.6467,46.3882 109.1117,44.7112 L109.1117,44.7112 Z M108.9907,50.9112 L109.6067,50.6062 C112.1427,49.3502 113.7137,47.6642 114.2737,45.5952 C115.1157,42.4882 113.3257,39.7172 113.2487,39.6012 L112.8737,39.0302 L112.2607,39.3332 C109.7467,40.5782 108.1847,42.2542 107.6197,44.3152 C106.7647,47.4272 108.5407,50.2162 108.6167,50.3332 L108.9907,50.9112 Z" id="Fill-1489"></path>
											<path d="M46.7274,70.633 C48.0624,71.303 49.0584,72.598 49.6914,74.486 C48.7734,74.701 47.0754,74.918 45.5224,74.132 C44.1934,73.459 43.2044,72.173 42.5764,70.303 C43.4874,70.082 45.1784,69.855 46.7274,70.633 M44.8404,75.518 C45.9224,76.062 47.0324,76.234 48.0034,76.234 C49.6224,76.234 50.8574,75.756 50.9384,75.724 L51.5784,75.471 L51.3994,74.806 C50.6674,72.072 49.3234,70.201 47.4054,69.245 C44.5244,67.809 41.4554,69.02 41.3264,69.071 L40.6924,69.327 L40.8694,69.987 C41.5954,72.697 42.9314,74.558 44.8404,75.518" id="Fill-1491"></path>
											<path d="M135.2816,70.9895 C136.5306,70.1755 138.1396,69.9625 140.0746,70.3545 C139.8136,71.2495 139.1716,72.8155 137.7196,73.7755 C136.4706,74.6025 134.8476,74.8195 132.8906,74.4225 C133.1636,73.5195 133.8256,71.9405 135.2816,70.9895 M131.1946,74.8835 L131.0946,75.5625 L131.7596,75.7415 C132.8026,76.0215 133.7826,76.1615 134.6946,76.1615 C136.1696,76.1615 137.4686,75.7955 138.5726,75.0645 C141.2576,73.2885 141.7446,70.0255 141.7626,69.8865 L141.8586,69.2115 L141.1986,69.0335 C138.4886,68.3065 136.2096,68.5335 134.4236,69.7065 C131.7256,71.4765 131.2156,74.7445 131.1946,74.8835" id="Fill-1493"></path>
											<path d="M44.621,133.4641 L46.541,133.4641 L46.541,134.3361 C46.246,134.6091 45.636,134.8931 44.992,134.8931 C43.672,134.8931 42.712,133.8781 42.712,132.5041 C42.712,131.1291 43.672,130.1141 44.992,130.1141 C45.767,130.1141 46.389,130.5511 46.716,131.0641 L48.003,130.3651 C47.457,129.5041 46.508,128.7401 44.992,128.7401 C42.865,128.7401 41.12,130.2021 41.12,132.5041 C41.12,134.7941 42.865,136.2771 44.992,136.2771 C46.312,136.2771 47.348,135.7331 48.09,134.9031 L48.09,132.1101 L44.621,132.1101 L44.621,133.4641 Z" id="Fill-1495"></path>
											<path d="M55.3314,132.1877 L53.7064,132.1877 L53.7064,130.2237 L55.3314,130.2237 C55.9534,130.2237 56.4224,130.5947 56.4224,131.2057 C56.4224,131.8167 55.9534,132.1877 55.3314,132.1877 M58.0044,131.2057 C58.0044,129.8527 57.0774,128.8607 55.5604,128.8607 L52.1574,128.8607 L52.1574,136.1357 L53.7064,136.1357 L53.7064,133.5507 L54.8404,133.5507 L56.2694,136.1357 L58.0474,136.1357 L56.4114,133.3657 C57.1964,133.1797 58.0044,132.4927 58.0044,131.2057" id="Fill-1497"></path>
											<polygon id="Fill-1499" points="62.0062 136.136 67.1552 136.136 67.1552 134.773 63.5552 134.773 63.5552 133.125 67.0782 133.125 67.0782 131.762 63.5552 131.762 63.5552 130.224 67.1552 130.224 67.1552 128.861 62.0062 128.861"></polygon>
											<polygon id="Fill-1501" points="71.2006 136.136 76.3496 136.136 76.3496 134.773 72.7496 134.773 72.7496 133.125 76.2736 133.125 76.2736 131.762 72.7496 131.762 72.7496 130.224 76.3496 130.224 76.3496 128.861 71.2006 128.861"></polygon>
											<polygon id="Fill-1503" points="85.3583 133.4309 81.9873 128.8609 80.3953 128.8609 80.3953 136.1359 81.9443 136.1359 81.9443 131.3909 85.4133 136.1359 86.9073 136.1359 86.9073 128.8609 85.3583 128.8609"></polygon>
											<polygon id="Fill-1505" points="96.8099 128.8606 96.8099 136.1356 98.3589 136.1356 98.3589 133.0826 101.7949 133.0826 101.7949 136.1356 103.3549 136.1356 103.3549 128.8606 101.7949 128.8606 101.7949 131.7176 98.3589 131.7176 98.3589 128.8606"></polygon>
											<path d="M109.4945,133.5403 L110.6295,130.4093 L111.7645,133.5403 L109.4945,133.5403 Z M109.6585,128.8603 L106.8445,136.1363 L108.6115,136.1363 L109.0695,134.9033 L112.1895,134.9033 L112.6365,136.1363 L114.4035,136.1363 L111.5995,128.8603 L109.6585,128.8603 Z" id="Fill-1507"></path>
											<polygon id="Fill-1509" points="119.4642 128.8606 117.9142 128.8606 117.9142 136.1356 122.5402 136.1356 122.5402 134.7726 119.4642 134.7726"></polygon>
											<path d="M128.3314,133.5403 L129.4654,130.4093 L130.6004,133.5403 L128.3314,133.5403 Z M128.4944,128.8603 L125.6804,136.1363 L127.4474,136.1363 L127.9054,134.9033 L131.0254,134.9033 L131.4734,136.1363 L133.2394,136.1363 L130.4364,128.8603 L128.4944,128.8603 Z" id="Fill-1511"></path>
											<polygon id="Fill-1513" points="138.3002 128.8606 136.7512 128.8606 136.7512 136.1356 141.3762 136.1356 141.3762 134.7726 138.3002 134.7726"></polygon>
										</g>
									</g>
								</g>
							</svg>
						</div>
					<div class="footer__info-right">
						<div class="footer__redes">
							<div class="footer__social">
								<div class="footer__icon footer__twitter">
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
											<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
										</svg>
									</a>
								</div>
								<div class="footer__icon footer__linkedin">
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
											<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
										</svg>
									</a>
								</div>
								<div class="footer__icon footer__instagram">
									<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
										<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
									</svg></a>
								</div>
								<div class="footer__icon footer__facebook">
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
											<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
										</svg>
									</a>
								</div>
								<div class="footer__icon footer__whatsapp">
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
											<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="footer__email">
							<div class="footer__email-ico">
								<svg width="20px" height="17px" viewBox="0 0 20 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="1-Home" transform="translate(-1323.000000, -6143.000000)" fill="#FFFFFF">
											<path d="M1333.0205,6151.394 C1333.8755,6150.797 1334.7155,6150.21 1335.5565,6149.623 C1336.3855,6149.043 1337.2165,6148.465 1338.0425,6147.881 C1338.8735,6147.293 1339.7215,6146.728 1340.5385,6146.116 C1340.2895,6145.715 1339.9575,6145.681 1339.5975,6145.681 C1335.2145,6145.686 1330.8325,6145.683 1326.4505,6145.683 C1326.3445,6145.683 1326.2375,6145.675 1326.1325,6145.69 C1325.8685,6145.727 1325.6505,6145.834 1325.5085,6146.136 C1328.0145,6147.89 1330.5085,6149.636 1333.0205,6151.394 L1333.0205,6151.394 Z M1340.6655,6148.189 C1340.5075,6148.29 1340.4185,6148.343 1340.3345,6148.403 C1338.1425,6149.936 1335.9535,6151.471 1333.7615,6153.006 C1333.1525,6153.433 1332.8905,6153.434 1332.2905,6153.012 C1330.1115,6151.486 1327.9325,6149.96 1325.7525,6148.436 C1325.6455,6148.36 1325.5295,6148.298 1325.3915,6148.214 C1325.3855,6148.345 1325.3765,6148.436 1325.3765,6148.524 C1325.3755,6151.186 1325.3755,6153.845 1325.3755,6156.507 C1325.3755,6156.598 1325.3725,6156.69 1325.3855,6156.778 C1325.4485,6157.22 1325.7665,6157.507 1326.2105,6157.532 C1326.3165,6157.538 1326.4235,6157.534 1326.5295,6157.534 L1339.4995,6157.534 C1339.6055,6157.534 1339.7115,6157.537 1339.8185,6157.532 C1340.2855,6157.51 1340.6085,6157.211 1340.6595,6156.745 C1340.6735,6156.625 1340.6655,6156.503 1340.6655,6156.382 L1340.6655,6148.718 L1340.6655,6148.189 Z M1332.9735,6159.288 C1330.7365,6159.288 1328.4995,6159.291 1326.2625,6159.287 C1325.0695,6159.283 1324.0665,6158.541 1323.7555,6157.43 C1323.6765,6157.142 1323.6365,6156.836 1323.6355,6156.537 C1323.6275,6153.228 1323.6245,6149.916 1323.6295,6146.607 C1323.6335,6145.07 1324.7625,6143.933 1326.2915,6143.932 C1330.7795,6143.927 1335.2685,6143.927 1339.7565,6143.932 C1341.2635,6143.934 1342.4035,6145.054 1342.4105,6146.566 C1342.4205,6149.907 1342.4175,6153.248 1342.4075,6156.586 C1342.4015,6158.189 1341.2835,6159.285 1339.6845,6159.287 C1337.4475,6159.29 1335.2095,6159.288 1332.9735,6159.288 L1332.9735,6159.288 Z" id="Fill-1457"></path>
										</g>
									</g>
								</svg>
							</div>
							<a href="mailto:institutohalalcolombia@hotmail.com">institutohalalcolombia@hotmail.com</a>
						</div>
						<div class="footer__phone">
							<div class="footer__phone-ico">
								<svg width="12px" height="25px" viewBox="0 0 12 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="1-Home" transform="translate(-1327.000000, -6176.000000)" fill="#FFFFFF">
											<path d="M1328.169,6196.21 L1337.862,6196.21 L1337.862,6178.919 L1328.169,6178.919 L1328.169,6196.21 Z M1333.007,6199.178 C1332.405,6199.172 1331.919,6198.659 1331.946,6198.062 C1331.974,6197.495 1332.479,6197.016 1333.036,6197.031 C1333.639,6197.044 1334.115,6197.553 1334.092,6198.156 C1334.067,6198.741 1333.596,6199.186 1333.007,6199.178 L1333.007,6199.178 Z M1331.823,6177.266 C1332.629,6177.262 1333.438,6177.265 1334.245,6177.267 C1334.417,6177.267 1334.608,6177.261 1334.618,6177.506 C1334.626,6177.789 1334.412,6177.784 1334.218,6177.785 C1333.834,6177.787 1333.451,6177.785 1333.07,6177.785 C1332.665,6177.785 1332.262,6177.789 1331.857,6177.784 C1331.672,6177.781 1331.443,6177.817 1331.423,6177.538 C1331.404,6177.246 1331.634,6177.268 1331.823,6177.266 L1331.823,6177.266 Z M1339.002,6178.705 C1339.002,6178.492 1339.003,6178.278 1338.985,6178.066 C1338.906,6177.153 1338.395,6176.512 1337.508,6176.278 C1337.184,6176.19 1336.837,6176.156 1336.501,6176.154 C1334.414,6176.142 1332.325,6176.148 1330.239,6176.148 C1329.899,6176.148 1329.559,6176.137 1329.219,6176.153 C1327.848,6176.213 1327.063,6177.024 1327.044,6178.391 C1327.04195,6178.54 1327.044,6178.69 1327.044,6178.838 L1327.044,6188.103 L1327.044,6197.494 C1327.044,6197.748 1327.033,6198.006 1327.062,6198.26 C1327.149,6199.044 1327.547,6199.633 1328.297,6199.898 C1328.688,6200.037 1329.127,6200.093 1329.544,6200.096 C1331.845,6200.116 1334.144,6200.107 1336.444,6200.104 C1336.678,6200.104 1336.914,6200.102 1337.146,6200.072 C1338.262,6199.924 1338.937,6199.189 1338.998,6198.061 C1339.005,6197.914 1339.003,6197.764 1339.003,6197.615 C1339.003,6191.311 1339.003,6185.007 1339.002,6178.705 L1339.002,6178.705 Z" id="Fill-1459"></path>
										</g>
									</g>
								</svg>
							</div>
							<a href="phone:573228094324">3228094324</a>
						</div>
					</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/glide.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slideshows.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/faqs-tabs.js"></script>
</body>
</html>
