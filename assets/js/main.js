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

    $( '.font-weight' ).prepend( '<a class="account-button-white hidden-sm hidden-md hidden-lg" href= "http://portal.bepay.com/#/register" > CRIE SUA CONTA </a > <hr class="hidden-sm hidden-md hidden-lg hr-menu">' );
    $( '.font-weight' ).append( '<div class="menu-social hidden-md hidden-sm hidden-lg pt-xs-20"><a href="https://www.youtube.com/channel/UCDBomv5XGNncUrYYyYU4LSw" target="_blank" class="menu-social-yout mr-menu"> </a> <a  href="https://www.linkedin.com/company/bepay_oficial" target="_blank" class="menu-social-linkedin mr-menu"> </a><a  href="https://www.facebook.com/bepayapp/" target="_blank" class="menu-social-fb mr-menu"> </a> <a  href="https://www.instagram.com/paguecombepay/" target="_blank" class="menu-social-instagram mr-menu"> </a></div>' );

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

