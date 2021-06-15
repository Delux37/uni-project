const navSlide = ()=>{
    const burger=document.querySelector('.burger')
    const nav=document.querySelector('.links')
    const navLinks=document.querySelectorAll('.links li')

    burger.addEventListener('click', ()=>{
        nav.classList.toggle('nav-active')

        navLinks.forEach((link,index)=>{
                if(link.style.animation){
                    link.style.animation=''
                }else
                    link.style.animation=`navLinksFade 0.5s ease forwards ${index/7+0.3}s`
            }
            )
        burger.classList.toggle('transform')
    })


}

navSlide();

$(".carousel").owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 1,
            nav:false
        },
        600:{
            items: 2,
            nav:false
        },
        1000:{
            items: 3,
            nav:false
        }
    }
})

