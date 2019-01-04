$(document).ready(() => {
    $('.pre-loader').css({'display': 'none'});
    
    $('.dropdown-menu a.dropdown-toggle').on( 'click', e => {
        const $el = $(this);
        const $parent = $(this).offsetParent(".dropdown-menu");
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        const $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');       
        $(this).parent("li").toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', e => {
            $('.dropdown-menu .show').removeClass("show");
        });
         if (!$parent.parent().hasClass('navbar-nav')) {
            $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 }) ;
        }
        return false;
    });

    if (document.getElementById('formularioPedido')) {
        const inputPhone = document.querySelector("#telefono");
        window.intlTelInput(inputPhone, {
            initialCountry: "PE",
        });
        $('#formularioPedido').validate({
            rules: {
                nombre: {required: true},
                apellido: {required: true},
                email: {required: true, email: true},
                tipo_producto: {required: true},
                necesidades: {minlength: 25, maxlength: 100}
            },
            messages: {
                nombre: {required: 'campo requerido'},
                apellido: {required: 'campo requerido'},
                email: {required: 'campo requerido', email: 'ingresa un email válido'},
                tipo_producto: {required: 'debe seleccionar al menos una opción'},
                necesidades: {minlength: 'debe llevar al menos 25 caracteres', maxlength: 'no puede superar los 100 caracteres'}
            },
            errorPlacement: (error, element) => {
                if ( element.is(":radio") ) 
                {
                    error.appendTo( element.parents('#tipo_producto') );
                }
                else 
                {
                    error.insertAfter( element );
                }
             },
             submitHandler: form => {
                $('.loader-ajax').css({'display': 'flex'})
             }
        })
    }

    if($('.imgBox')[0]) {
        $('.thumb a').on('mouseover', e => {
            e.preventDefault();
            $('.imgBox img').attr('src', $(this).attr('href'));
        })
    }
});