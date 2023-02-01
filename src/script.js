const home = document.getElementById('home');
const details = document.getElementById('details');
const links = document.querySelectorAll('#links a');

links.forEach((link) => {
    let isDone = false;
    link.addEventListener('click', (event) => {
        if (isDone) {
            isDone = false
            return;
        }

        event.preventDefault();
        toDetails()
        const fun = () => {
            isDone = true;
            link.click();
            console.log('test')
            home.removeEventListener('transitionend', fun)
        }
        home.addEventListener('transitionend', fun)
    })
})

function clearTranslatesClasses(...elements) {
    elements.forEach((element) => [
        '-translate-y-full',
        'translate-y-0',
        'translate-y-full'
    ].forEach((className) => element.classList.remove(className)))

}

function toDetails() {
    clearTranslatesClasses(home, details);
    home.classList.add('-translate-y-full')
    details.classList.add('-translate-y-full')
}

function toHome() {
    clearTranslatesClasses(home, details);
    home.classList.add('translate-y-0')
    details.classList.add('translate-y-full')
}

document.addEventListener('keydown', (event) => {
    console.log(event.key)
    const enterKeys = ['ArrowDown', 'Enter', ' '];
    const backKeys = ['ArrowUp', 'Escape'];
    if (enterKeys.includes(event.key)) {
        toDetails();
    } else if (backKeys.includes(event.key)) {
        toHome()
    }
})