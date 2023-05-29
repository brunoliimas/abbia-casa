let $navPop = document.querySelector("#js-nav-pop")
let $navIco = document.querySelector("#js-nav-ico")
let closeMenu = null

if ($navPop && $navIco) {
    $navPop.addEventListener('click', function () {
        $navPop.classList.add('!left-0')
        clearTimeout(closeMenu)
    })
    $navIco.addEventListener('click', function () {

        $navPop.classList.add('!left-0')
        clearTimeout(closeMenu)
    })
    $navPop.addEventListener('click', function () {
        closeMenu = setTimeout(() => {
            $navPop.classList.remove('!left-0')
        }, 100)
    })
}

globalThis.offMenu = () => {

    let $navPop = document.querySelector("#js-nav-pop")
    if ($navPop) {
        $navPop.classList.remove('!left-0')
    }
}

function addPlusCardCount() {
    let list = document.querySelectorAll('.js-count-cart')
    list.forEach($e => {
        $e.innerHTML = +$e.innerHTML + 1
    });
}

function popupAddToCard() {
    let links = document.querySelectorAll('[href*="?add-to-cart"]')
    links.forEach($link => {
        $link.addEventListener('click', async function (ev) {
            ev.preventDefault()
            if (this.getAttribute('disabled') !== null) return null
            console.log(this.getAttribute('disabled'))
            this.innerHTML = '<i class="animate-spin text-[#666] py-2 px-8 fa-solid fa-circle-notch"></i>'
            await fetch(this.href)
            this.innerHTML = "Adicionado!"
            addPlusCardCount()
            this.setAttribute('disabled', '')
        })

    })
}

popupAddToCard()

function toggleInfo() {
    $menu = document.querySelector('.js-info')
    $menu.classList.toggle('hidden')
}