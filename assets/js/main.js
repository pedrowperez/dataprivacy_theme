$( document ).ready( function ()
{
    
    // $( '#form-newslatetr' ).submit( function ( e )
    // {
    //     e.preventDefault();

    //     $.ajax( {
    //         type: 'POST',
    //         url: 'http://blog.bepay.com/?na=s',
    //         data: $( this ).serialize(),
    //         success: function ( response )
    //         {
    //             console.log( response )
    //         }
    //     } );
    // } );

    // $( '' ).hover( function ()
    // {
    // var goto = parseInt( $( this ).attr( 'data-post-view' ) );
    // $( "#carousel-id" ).carousel( goto );
    // } );
    $('.contato').click( function () {
        $('#modal-contato').toggle();
        
    } );
    
   
    $('#about-btn-bruno').click( function () {
        $('#modal-bruno').fadeIn();
        $('#modal-renato').fadeOut();
        
    } );
    $('#modal-bruno').click(function () {
        $(this).fadeOut();
    });
    $('#about-btn-renato').click( function () {
        $('#modal-renato').fadeIn();
        $('#modal-bruno').fadeOut();
        
    } );
    $('#modal-renato').click(function () {
        $(this).fadeOut();
    });

    $( window ).scroll( function ()
    {
        var scroll = $( window ).scrollTop();
        if ( scroll >= 150 )
        {
            $( "nav" ).addClass( "box-shadow-nav" );
        } else
        {
            $( "nav" ).removeClass( "box-shadow-nav" )
        }
    } );

    var t = true;

    function functionT()
    {
        setTimeout( function ()
        {
            t = true;
        }, 100 );
    }

    $( '.btn-link-postview' ).on( 'mouseover', function ()
    {
        if ( t )
        {
            var goto = parseInt( $( this ).attr( 'data-post-view' ) );
            $( "#carousel-id" ).carousel( goto );
            t = false;
            functionT();
        }
    } );

    // $( '#carousel-id' ).on( 'slid', function ()
    // {
    //     alert( "Slide Event" );
    // } );
    // $( ".btn-nav" ).click( function openClose()
    // {
    //     $( '.search-button' ).toggle();
    //     $( this ).toggleClass( "on" );
    //     $( "nav, ul" ).toggleClass( "open" );
    // } );

    // $( ".search-button" ).click( function ()
    // {
    //     $( this ).toggle();
    //     $( ".btn-nav" ).toggleClass( "on" );
    // } );

    // $( '.navbar-blue .navbar-collapse' ).on( 'show.bs.collapse', function ( e )
    // {
    //     $( '.navbar-blue .navbar-collapse' ).not( this ).collapse( 'hide' );
    // } );

    $( '.font-weight' ).prepend( '<a class="arealuno-button-white visible-xs" href= "#" > Área do aluno </a >' );
    $( '.font-weight' ).append( '<div class="menu-social visible-xs pt-xs-30"><a href="https://mobile.twitter.com/dataprivacybr" target="_blank" class="menu-social-yout mr-menu"> </a> <a  href="https://m.facebook.com/DataPrivacy.br/" target="_blank" class="menu-social-linkedin mr-menu"> </a></div><div class="box-terms mt-xs-10"><a class="terms" href="http://dataprivacy.com.br/dev/user_term/" target=""_blank> Termos de uso </a> | <a class="terms" href="http://dataprivacy.com.br/dev/policy_privacy/" target=""_blank> Política de privacidade </a> </div>' );

    $( document ).on( 'click', '.teste .off', function ( e )
    {
        e.preventDefault();
        $( '#bs-example-navbar-collapse-1' ).collapse( 'show' );
        $( '.background-overlay-blue' ).fadeIn();
        $( this ).removeClass( 'off' );
        $( this ).addClass( 'on' );

    } );

    $( document ).on( 'click', '.teste .on', function ( e )
    {
        e.preventDefault();
        $( '.search-button' ).fadeIn();
        $( '.background-overlay-blue' ).fadeOut();
        $( this ).addClass( 'off' );
        $( this ).removeClass( 'on' );
        $( '#bs-example-navbar-collapse-1' ).collapse( 'hide' );
        $( '#bs-example-navbar-collapse-2' ).collapse( 'hide' );
    } );

    $( '.search-button' ).click( function ( e )
    {
        e.preventDefault();
        $( '#bs-example-navbar-collapse-1' ).collapse( 'hide' );
        $( '#bs-example-navbar-collapse-2' ).collapse( 'hide' );
        $( '#bs-example-navbar-collapse-2' ).collapse( 'show' );
        $( '.search-field' ).focus();
        $( '.search-button' ).fadeOut();
        $( '.teste .btn-nav' ).removeClass( 'off' );
        $( '.teste .btn-nav' ).addClass( 'on' );

    } );
    // $( '#search' ).focusout( function ( e )
    // {
    //     setTimeout( function ()
    //     {
    //         e.preventDefault();
    //         $( '#menu-menu-1' ).removeClass( 'd-o' );

    //     }, 50 );
    // } )
    // $( '#search' ).focus( function ( e )
    // {

    //     setTimeout( function ()
    //     {
    //         e.preventDefault();
    //         $( '#menu-menu-1' ).addClass( 'd-o' );

    //     }, 100 );

    // } );
    $( '.button-open' ).click( function ( e )
    {
        e.preventDefault();
        $( '.search_inputs' ).addClass( 'search_inputs-h' );
        $( '.background-overlay' ).fadeIn();
    } );

    $( '.button-closed' ).click( function ( e )
    {
        e.preventDefault();
        $( '.search_inputs' ).removeClass( 'search_inputs-h' );
        $( '.background-overlay' ).fadeOut();
    } );




    // function toggleClassSocialMediaIcons()
    // {
    //     768 > $( window ).width() ? $( '.box-child' ).removeClass( 'social-media-icons' ) : $( '.box-child' ).addClass( 'social-media-icons' );
    // }

    // function moveSideBarSocial()
    // {
    //     var windowMiddlePosition = $( window ).height() / 2 + $( window ).scrollTop();
    //     var fatherTop = $( '.box-father' ).offset().top;
    //     var fatherHeight = $( '.box-father' ).height();
    //     var fatherBottom = fatherTop + fatherHeight;
    //     var childTop = $( '.box-child' ).offset().top;
    //     var childHeight = $( '.box-child' ).height();
    //     var childBottom = childTop + childHeight;

    //     if ( fatherTop <= windowMiddlePosition && fatherBottom - childHeight >= windowMiddlePosition )
    //     {
    //         $( '.box-child' ).css( 'top', windowMiddlePosition - fatherTop );
    //     }
    // }
    // moveSideBarSocial();
    // toggleClassSocialMediaIcons();

    // $( window ).on( { "resize": toggleClassSocialMediaIcons, "scroll": moveSideBarSocial } );



} );

