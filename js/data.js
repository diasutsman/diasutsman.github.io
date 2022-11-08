function getProjectsCount() {
    return fetch('https://api.github.com/users/diasutsman', {
        headers: {
            'Accept': 'application/vnd.github+json',
            //'Authorization': `Bearer ${githubApiKey}`
        }
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            return data['public_repos']
        })
}

function getRepoCountByLang(lang) {
    return fetch(`https://api.github.com/search/repositories?q=user:diasutsman%20language:${lang}`, {
        headers: {
            'Accept': 'application/vnd.github+json',
            //'Authorization': `Bearer ${githubApiKey}`
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

function removeLoading() {
    const loading = document.querySelector('.loading-container')
    loading.classList.add('fade-out')

    loading.addEventListener('animationend', () => loading.remove())
}

async function typeAfterResolve(el, promise) {
    new TypeIt(el, {
        speed: 100,
        afterComplete: async (ins) => {
            ins.destroy()
            let instance, data
            try {
                data = await promise
                instance = new TypeIt(el, {
                    speed: 100,
                    afterComplete: ins => ins.destroy(),
                })
                instance.type(data)
            } catch (error) {
                instance.type('Cannot count')
            }
            instance.go()
        }
    })
        .type('counting...')
        .delete()
        .go()
}

function typeIt() {
    // Type it
    new TypeIt('#typeIt', {
        speed: 100,
        afterComplete: (instance) => {
            instance.destroy()
            new TypeIt('#typeIt1', {
                speed: 30,
            }).go()
        }
    }).go()
}