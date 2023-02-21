let $navPop = document.querySelector("#js-nav-pop")
let $navIco = document.querySelector("#js-nav-ico")
let closeMenu = null

if ($navPop && $navIco) {
    $navPop.addEventListener('mouseover', function () {
        $navPop.classList.add('!left-0')
        clearTimeout(closeMenu)
    })
    $navIco.addEventListener('mouseover', function () {

        $navPop.classList.add('!left-0')
        clearTimeout(closeMenu)
    })
    $navPop.addEventListener('mouseout', function () {
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
