function getProjectsCount() {
    return fetch('https://api.github.com/users/diasutsman', {
        headers: {
            'Accept': 'application/vnd.github+json',
            'Authorization': `Bearer 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`
        }
    })
        .then(res => res.json())
        .then(data => data['public_repos'])
}

function getRepoCountByLang(lang) {
    return fetch(`https://api.github.com/search/repositories?q=user:diasutsman%20language:${lang}`, {
        headers: {
            'Accept': 'application/vnd.github+json',
            'Authorization': `Bearer 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`
        }
    })
        .then(res => res.json())
        .then(data => {
            return data['total_count']
        })
}


function getWebsCount() {
    return getRepoCountByLang('css')
}

function getMobileAppsCount() {
    return getRepoCountByLang('kotlin')
}

function getFlutterAppsCount() {
    return getRepoCountByLang('dart')
}

async function updateUI() {
    //    document.body.innerHTML += `
    //    <div class="loading-container">
    //    <!-- Put the loading html here -->
    //    <div class="lds-grid">
    //      <div></div>
    //      <div></div>
    //      <div></div>
    //      <div></div>
    //      <div></div>
    //      <div></div>
    //      <div></div>
    //      <div></div>
    //      <div></div>
    //    </div>

    //    <!-- and then go to loading.scss and paste the css code there -->

    //  </div>`

    try {

        typeTheData('#projectDone', await getProjectsCount())
        typeTheData('#webCount', await getWebsCount())
        typeTheData('#appCount', await getMobileAppsCount())
        typeTheData('#flutterCount', await getFlutterAppsCount())
    } catch (error) {
        console.log(error)
    } finally {
        //removeLoading()
    }
}

function removeLoading() {
    const loading = document.querySelector('.loading-container')
    loading.classList.add('fade-out')

    loading.addEventListener('animationend', () => loading.remove())
}

function typeTheData(el, ...text) {
    new TypeIt(el, {
        speed: 100,
        afterComplete: (instance) => {
            instance.destroy()
        }
    })
        .delete()
        .type('' + text)
        .go()
}

function typeIt() {
    // Type it
    new TypeIt('#typeIt', {
        strings: 'Hi! I Am Dias Utsman',
        speed: 100,
        afterComplete: (instance) => {
            instance.destroy()
            new TypeIt('#typeIt1', {
                strings: "Developing Apps and Websites for over <span>2 years</span> as a software developer.",
                speed: 30,
            }).go()
        }
    }).go()
}

function applyAnimations() {
    typeIt()
    // AOS
    AOS.init()

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        spaceBetween: 16,
        slidesPerView: '1',

        breakpoints: {
            // when window width is >= 320px
            700: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            850: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            1000: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
}

updateUI()

VanillaTilt.init(document.querySelector('.hero-img'), {
    reverse: true,
    max: 15,
    speed: 400,
    scale: 1.12,
    glare: true,
    reset: true,
    perspective: 500,
    transition: true,
    "max-glare": 0.75,
    "glare-prerender": false,
    gyroscope: true,
    gyroscopeMinAngleX: -45,
    gyroscopeMaxAngleX: 45,
    gyroscopeMinAngleY: -45,
    gyroscopeMaxAngleY: 45
});

applyAnimations()