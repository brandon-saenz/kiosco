$( document ).ready(function() {

    var footer=document.getElementById('footer-rancho');
    var arrow_rancho=document.getElementById('arrow_rancho');

    var qr_rancho=document.getElementsByClassName('qr-rancho');
    var img_cobroplan=document.getElementsByClassName('img-cobroplan');
    var img_rancho=document.getElementsByClassName('img-rancho');

    var swiper_button_prev=document.getElementsByClassName('swiper-button-prev');
    var swiper_button_next=document.getElementsByClassName('swiper-button-next');

    function change_cobroplan(){
        footer.style.backgroundColor='var(--blue)';
        arrow_rancho.style.fill='var(--blue)';
        img_cobroplan[0].style.opacity='1'; img_rancho[0].style.opacity='0';
        swiper_button_prev[0].style.color='var(--blue)'; swiper_button_next[0].style.color='var(--blue)';
        // for(var i=0; i<=qr_rancho.length; i++){
        //     qr_rancho[i].style.backgroundImage='url("/pantallas/assets/marco-qr-blue.svg")';
        // }
    }

    function change_rancho(){
        footer.style.backgroundColor='var(--green)';
        arrow_rancho.style.fill='var(--green)';
        img_cobroplan[0].style.opacity='0'; img_rancho[0].style.opacity='1';
        swiper_button_prev[0].style.color='var(--green)'; swiper_button_next[0].style.color='var(--green)';

        // for(var i=0; i<=qr_rancho.length; i++){
        //     qr_rancho[i].style.backgroundImage='url("/pantallas/assets/marco-qr-green.svg")';
        // }
    }

    function events({ swiper, extendParams, on }) {
        extendParams({
          debugger: false,
        });
        console.log('position swiper: '+swiper.activeIndex);

        on('slideChange', () => {
            if (!swiper.params.debugger) return;
            if(swiper.activeIndex==5){
                change_cobroplan();
            }else if(swiper.activeIndex!=5){
                change_rancho();
            }else if(swiper.activeIndex<5){
                change_rancho();
            }else{
                change_rancho();
            }
            console.log(
                'index-swipter = ',
                swiper.activeIndex
            );
        });
    }

    var body_swiper = new Swiper(".body-swiper", {
        modules: [events],
        keyboard: {
            enabled: true,
        },
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        hashNavigation: {
            watchState: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        debugger: true
    });
});

var pages=[
    'https://ranchotecate.mx/',//SITIO WEB PRINCIPAL
    'assets/DIPTICO_RECIDENCIAL.pdf',//VIDEO TUTORIAL DE SOLICITUD DE SERVICIO
    'http://saevalcas.mx/atencion/',//SOLICITUD DE SERVICIO
    'https://residencialrt.mx/haciendocomunidad#divMinutas',//CONSULTA DE MINUTAS
    'https://residencialrt.mx/propietarioInformacion',//CONSULTA DE CLAVE CATASTRAL
    'https://residencialrt.mx/eventosPago',//CONSULTA DE EVENTOS
    'https://wa.me/+526644841922?text=Hola,%20necesito%20ayuda%20con%20temas%20de%20COBROPLAN'
];

function go_page(id_page){
    window.open(pages[id_page], '_blank');
    window.focus();
}