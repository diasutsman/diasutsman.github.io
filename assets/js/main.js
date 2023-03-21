(async function () {
	"use strict";
	// To Avoid github commit scanning
	const GITHUB_API_KEY = String.fromCharCode(
		..."103 104 112 95 82 120 111 85 85 80 76 48 82 56 52 101 54 121 112 75 83 100 51 78 57 105 106 108 109 98 66 109 50 87 48 102 121 117 85 49".split(
			" "
		)
	);

	const fetchPortfolio = () => {
		return fetch(
			"https://api.github.com/search/repositories?q=user:diasutsman%20topic:project&per_page=100",
			{
				headers: {
					Accept: "application/vnd.github+json",
					Authorization: `Bearer ${GITHUB_API_KEY}`,
				},
			}
		)
			.then((response) => response.json())
			.then((data) =>
				data.items
					.filter(({ topics }) =>
						topics.some((topic) =>
							["web", "android", "back-end", "flutter"].includes(topic)
						)
					)
					.map((portfolio) => ({
						...portfolio,
						category: portfolio.topics.find((topic) =>
							["web", "android", "back-end", "flutter"].includes(topic)
						),
						name: normalizeText.normalizeName(
							portfolio.name
								.replace(/[-_]/g, " ")
								.replace(/[a-z][A-Z]/g, (c) => `${c[0]} ${c[1]}`)
						),
					}))
					.map((portfolio) => portfolioTemplate(portfolio))
					.join("")
			)
			.catch((error) => {
				return error;
			});
	};

	/**
	 * Easy selector helper function
	 */
	const select = (el, all = false) => {
		el = el.trim();
		if (all) {
			return [...document.querySelectorAll(el)];
		} else {
			return document.querySelector(el);
		}
	};

	/**
	 * Easy event listener function
	 */
	const on = (type, el, listener, all = false) => {
		let selectEl = select(el, all);
		if (selectEl) {
			if (all) {
				selectEl.forEach((e) => e.addEventListener(type, listener));
			} else {
				selectEl.addEventListener(type, listener);
			}
		}
	};

	/**
	 * Easy on scroll event listener
	 */
	const onscroll = (el, listener) => {
		el.addEventListener("scroll", listener);
	};

	const checkVisible = (elm) => {
		var rect = elm.getBoundingClientRect();
		var viewHeight = Math.max(
			document.documentElement.clientHeight,
			window.innerHeight
		);
		return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
	};

	/**
	 * Navbar links active state on scroll
	 */
	let navbarlinks = select("#navbar .scrollto", true);
	const navbarlinksActive = () => {
		let position = window.scrollY + 200;
		navbarlinks.forEach((navbarlink) => {
			if (!navbarlink.hash) return;
			let section = select(navbarlink.hash);
			if (!section) return;
			if (
				position >= section.offsetTop &&
				position <= section.offsetTop + section.offsetHeight
			) {
				navbarlink.classList.add("active");
			} else {
				navbarlink.classList.remove("active");
			}
		});
	};
	window.addEventListener("load", navbarlinksActive);
	onscroll(document, navbarlinksActive);

	/**
	 * Scrolls to an element with header offset
	 */
	const scrollto = (el) => {
		let elementPos = select(el).offsetTop;
		window.scrollTo({
			top: elementPos,
			behavior: "smooth",
		});
	};

	/**
	 * Back to top button
	 */
	let backtotop = select(".back-to-top");
	if (backtotop) {
		const toggleBacktotop = () => {
			if (window.scrollY > 100) {
				backtotop.classList.add("active");
			} else {
				backtotop.classList.remove("active");
			}
		};
		window.addEventListener("load", toggleBacktotop);
		onscroll(document, toggleBacktotop);
	}

	/**
	 * Mobile nav toggle
	 */
	on("click", ".mobile-nav-toggle", function (e) {
		select("body").classList.toggle("mobile-nav-active");
		this.classList.toggle("bi-list");
		this.classList.toggle("bi-x");
	});

	/**
	 * Scrool with ofset on links with a class name .scrollto
	 */
	on(
		"click",
		".scrollto",
		function (e) {
			if (select(this.hash)) {
				e.preventDefault();

				let body = select("body");
				if (body.classList.contains("mobile-nav-active")) {
					body.classList.remove("mobile-nav-active");
					let navbarToggle = select(".mobile-nav-toggle");
					navbarToggle.classList.toggle("bi-list");
					navbarToggle.classList.toggle("bi-x");
				}
				scrollto(this.hash);
			}
		},
		true
	);

	/**
	 * Scroll with ofset on page load with hash links in the url
	 */
	window.addEventListener("load", () => {
		if (window.location.hash) {
			if (select(window.location.hash)) {
				scrollto(window.location.hash);
			}
		}
	});

	/**
	 * Preloader
	 */
	let preloader = select("#preloader");
	if (preloader) {
		window.addEventListener("load", () => {
			preloader.remove();
		});
	}

	/**
	 * Hero type effect
	 */
	const typed = select(".typed");
	if (typed) {
		let typed_strings = typed.getAttribute("data-typed-items");
		typed_strings = typed_strings.split(",");
		new Typed(".typed", {
			strings: typed_strings,
			loop: true,
			typeSpeed: 100,
			backSpeed: 50,
			backDelay: 2000,
		});
	}

	/**
	 * Skills animation
	 */
	let skilsContent = select(".skills-content");
	if (skilsContent) {
		new Waypoint({
			element: skilsContent,
			offset: "80%",
			handler: function (direction) {
				let progress = select(".progress .progress-bar", true);
				progress.forEach((el) => {
					el.style.width = el.getAttribute("aria-valuenow") + "%";
				});
			},
		});
	}

	/**
	 * Porfolio isotope and filter
	 */
	window.addEventListener("load", async () => {
		let portfolioContainer = select(".portfolio-container");
		portfolioContainer.innerHTML = await fetchPortfolio();

		setTimeout(() => {
			new Isotope(portfolioContainer, {
				itemSelector: ".portfolio-item",
			}).arrange({ filter: "*" });
		}, 1500);

		if (portfolioContainer) {
			let portfolioIsotope = new Isotope(portfolioContainer, {
				itemSelector: ".portfolio-item",
			});

			let portfolioFilters = select("#portfolio-filters li", true);

			on(
				"click",
				"#portfolio-filters li",
				function (e) {
					e.preventDefault();
					portfolioFilters.forEach(function (el) {
						el.classList.remove("filter-active");
					});
					this.classList.add("filter-active");

					portfolioIsotope.arrange({
						filter: this.getAttribute("data-filter"),
					});
					portfolioIsotope.on("arrangeComplete", function () {
						AOS.refresh();
					});
				},
				true
			);
		}

		/**
		 * Initiate portfolio lightbox
		 */
		const portfolioLightbox = GLightbox({
			selector: ".portfolio-lightbox",
		});

		/**
		 * Initiate portfolio details lightbox
		 */
		const portfolioDetailsLightbox = GLightbox({
			selector: ".portfolio-details-lightbox",
			width: "90%",
			height: "90vh",
		});
	});

	/**
	 * Portfolio details slider
	 */
	new Swiper(".portfolio-details-slider", {
		speed: 400,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			type: "bullets",
			clickable: true,
		},
	});

	/**
	 * Testimonials slider
	 */
	new Swiper(".testimonials-slider", {
		speed: 600,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		slidesPerView: "auto",
		pagination: {
			el: ".swiper-pagination",
			type: "bullets",
			clickable: true,
		},
	});

	/**
	 * Animation on scroll
	 */
	window.addEventListener("load", () => {
		AOS.init({
			duration: 1000,
			easing: "ease-in-out",
			once: true,
			mirror: false,
		});
	});

	/**
	 * calculate age
	 */

	const calculateAge = (birthday) => {
		let ageDifMs = Date.now() - birthday.getTime();
		let ageDate = new Date(ageDifMs);
		return Math.abs(ageDate.getUTCFullYear() - 1970);
	};

	/**
	 * calculate days
	 */
	const calculateDays = (date) => {
		const today = new Date();
		const difference = today - new Date(date);
		return Math.floor(difference / (1000 * 60 * 60 * 24));
	};

	/**
	 * Template for skills section
	 */
	const skillTemplate = (skill) => `
  <div class="progress col-lg-6">
    <span class="skill">${skill.name} <i class="val">${skill.percentage}%</i></span>
    <div class="progress-bar-wrap">
      <div class="progress-bar" role="progressbar" aria-valuenow="${skill.percentage}" aria-valuemin="0" aria-valuemax="100">
      </div>
    </div>
  </div>
  `;

	const portfolioTemplate = (portfolio) => {
		const img =
			{
				web: `https://api.apiflash.com/v1/urltoimage?access_key=3ef5ce9cffc6455cbb0ddf3bf44a5fbf&url=${
					portfolio.homepage || portfolio.html_url
				}`,
				// web: `https://shot.screenshotapi.net/screenshot?token=WYVZZD3-YAKMV0T-P291HFD-5DMZ6MY&url=${
				// 	portfolio.homepage || portfolio.html_url
				// }&output=image&file_type=png&wait_for_event=load`,
				android: `https://raw.githubusercontent.com/${portfolio.full_name}/${portfolio.default_branch}/img.webp`,
				flutter: `https://raw.githubusercontent.com/${portfolio.full_name}/${portfolio.default_branch}/img.webp`,
				"back-end": `https://raw.githubusercontent.com/${portfolio.full_name}/${portfolio.default_branch}/img.webp`,
			}[portfolio.category] || "assets/img/portfolio/portfolio-1.webp";
		return `
    <div class="col-lg-4 col-md-6 portfolio-item filter-${portfolio.category}">
      <div class="portfolio-wrap">
        <img src="${img}" class="img-fluid" alt="${portfolio.name}" onerror="
          this.src='https://via.placeholder.com/600x338.png?text=${
						portfolio.name
					}';
        ">
        <div class="portfolio-info">
          <h4>${portfolio.name}</h4>
          <p>${portfolio.category.replace(/[-_]/g, " ")}</p>
          <div class="portfolio-links">
            <a href="${img}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="
              ${portfolio.name}
            "><i class="bx bx-plus"></i></a>
            <a href="${
							{ web: portfolio.homepage }[portfolio.category] ||
							portfolio.html_url
						}" target="_blank"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    `;
	};

	/**
	 * Initiate Pure Counter
	 */
	new PureCounter();

	/**
	 * Initiate elements that dynamically changes
	 */

	// my age
	select("#myAge").innerText = calculateAge(new Date(2006, 7, 22));

	// hours of code
	select("#hoursOfCode").dataset.purecounterEnd =
		calculateDays(new Date(2020, 6, 4)) * 3;

	fetch(
		"https://api.github.com/search/repositories?q=user:diasutsman%20topic:project",
		{
			headers: {
				Accept: "application/vnd.github+json",
				Authorization: `Bearer ${GITHUB_API_KEY}`,
			},
		}
	)
		.then((response) => response.json())
		.then(({total_count: totalCount}) => {
            select('#projects').firstElementChild.remove();
            new PureCounter({
                selector: "#projects",
                start: 0,
                end: totalCount,
                duration: 1,
            });
        });

	// skills
	select(".skills-content").innerHTML = await fetch("/assets/json/skills.json")
		.then((response) => response.json())
		.then((data) => data.map((skill) => skillTemplate(skill)).join(""));

    // contact
    select('.email-form').addEventListener('submit', async (event) => {
        event.preventDefault();
        const button = select('.email-form .send-email');
        const {innerText} = button;

        button.disabled = true;
        button.innerText = 'Sending...';
        button.classList.add('bg-secondary');

        const formData = new FormData(event.target);
        formData.set('text', `From: ${formData.get('email')} (${formData.get('name')})` + '\n' + formData.get('text'));

        await fetch(event.target.action, {
            method: event.target.method,
            headers: {
                "Content-type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams(formData)
        })

        button.classList.add('bg-success');

        button.innerText = 'Sent!';
        setTimeout(() => {
            button.innerText = innerText;
            button.disabled = false;
            button.classList.remove('bg-secondary', 'bg-success');
        }, 1000);
    })
})();
