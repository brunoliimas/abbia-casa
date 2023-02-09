; (function () {
    'use strict'
    // var $accountDelete = $('#delete-account'),
    //     $accountDeleteDialog = $('#confirm-delete'),
    //     transition
    // $accountDelete.on('click', function () {
    //     $accountDeleteDialog[0].showModal()
    //     transition = window.setTimeout(function () {
    //         $accountDeleteDialog.addClass('dialog-scale')
    //     }, 0.5)
    // })
    // $('#cancel').on('click', function () {
    //     $accountDeleteDialog[0].close()
    //     $accountDeleteDialog.removeClass('dialog-scale')
    //     clearTimeout(transition)
    // })
})()

;(function(){
    let $navPop = document.querySelector("#js-nav-pop")
    let $navIco = document.querySelector("#js-nav-ico")
    let closeMenu = null
    if($navPop && $navIco ) {
        $navPop.addEventListener( 'mouseover', function() {      
            $navPop.classList.add('left-0')
            clearTimeout(closeMenu)
        } ) 
        $navIco.addEventListener( 'mouseover', function() {      
            $navPop.classList.add('left-0')
            clearTimeout(closeMenu)
        } )
        $navPop.addEventListener('mouseout', function() {
            closeMenu = setTimeout(() => {
                $navPop.classList.remove('left-0')
            }, 100)
        })
    }

    
})()