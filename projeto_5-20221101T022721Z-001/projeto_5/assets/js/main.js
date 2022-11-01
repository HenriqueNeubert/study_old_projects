function mascara() {
    var masks = ['(00) 00000-0000', '(00) 0000-00009'];
    $(".masked-phone").mask(masks[1], {
        onKeyPress: function (val, e, field, options) {
            field.mask(val.length > 14 ? masks[0] : masks[1], options);
        }
    });
    $(".masked-cep").mask("99999-999");
    $(".masked-cpf").mask("999.999.999-99");
    $(".masked-cnpj").mask("99.999.999/9999-99");
    $(".masked-validity").mask("99/99");
    $(".masked-date").mask("99/99/9999");
    $('.masked-money').mask('000.000.000.000.000,00', {reverse: true});
}
function menu(el){
    if(el.hasClass('display-1024-none')){
        el.removeClass('display-1024-none');
        $('body').addClass('overflow-h');
        if(el.hasClass('main-menu-category')){
            console.log('dd');
            $("header").addClass('opened');
        }
    }else {
        el.addClass('display-1024-none');
        $('body').removeClass('overflow-h');
        if (el.hasClass('main-menu-category')) {
            $("header").removeClass('opened');
        }
    }
}
function alteraFalseHeader(){

    var altura_do_cabecalho = $(".main-header").innerHeight();
    console.log(altura_do_cabecalho);

    $(".header-false").height(altura_do_cabecalho);
}
function abrirMenu (){
    if($(" header.main-header nav").hasClass("aberto")){
        $(" header.main-header nav").removeClass("aberto");
    }else {
        $(" header.main-header nav").addClass("aberto");
    }

}
$(document).ready(function () {
    mascara();
    $(window).scroll(function () {
    });
    $(window).on('resize load', function () {
        alteraFalseHeader();
    });
    $('.action-menu').click(function(){
        menu($('.main-menu'));
    });
});