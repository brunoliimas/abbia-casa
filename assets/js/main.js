let $navPop = document.querySelector("#js-nav-pop")
let $navIco = document.querySelector("#js-nav-ico")
let closeMenu = null

if ($navPop && $navIco) {
    // $navPop.addEventListener('click', function () {
    //     $navPop.classList.add('!left-0')
    //     clearTimeout(closeMenu)
    // })
    $navIco.addEventListener('click', function () {
        $navPop.classList.add('!left-0')
        clearTimeout(closeMenu)
    })
    // $navPop.addEventListener('click', function () {
    //     closeMenu = setTimeout(() => {
    //         $navPop.classList.remove('!left-0')
    //     }, 100)
    // })
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

const listLinks = document.querySelectorAll(`[data-link]`)
const listActives = document.querySelectorAll(`[data-linkActive]`)
var _IS_ACTIVE_LINK = null

listLinks.forEach(el => {
    el.addEventListener('click', function (ev) {
        let valor = this.getAttribute('data-link')
        let status = this.getAttribute('data-active')
        this.setAttribute('data-active', status == "0" ? "1" : "0")
        _IS_ACTIVE_LINK = valor
        listLinks.forEach(e => {
            let status = this.getAttribute('data-active')
            let url = e.src.split('/').reverse()
            url[0] = 'plus.png'
            e.src = url.reverse().join('/')
            if (status == "1") {
                // e.classList.toggle('-rotate-90')
                let url = e.src.split('/').reverse()
                url[0] = 'minus.png'
                e.src = url.reverse().join('/')
            }
        })
        listActives.forEach(element => {
            let id = element.getAttribute('data-linkActive')
            if (id == _IS_ACTIVE_LINK) {
                element.classList.toggle('hidden')
            } else {
                element.classList.add('hidden')
            }
        });
    })
});