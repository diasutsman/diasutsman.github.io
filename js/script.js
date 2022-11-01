function getMyGithubData() {
    return fetch('https://api.github.com/users/diasutsman', {
        headers: {
            'Accept': 'application/vnd.github+json',
            'Authorization': `Bearer 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`
        }
    })
        .then(res => res.json())
        .then(data => data['public_repos'])
}

async function updateUI() {
    const projectDone = document.getElementById('projectDone')

    projectDone.innerText = await getMyGithubData()

    removeLoading()
}

function removeLoading() {
    const loading = document.querySelector('.loading-container')
    loading.classList.add('fade-out')

    loading.addEventListener('animationend', () => loading.remove())
}

updateUI()