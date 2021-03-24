(function( $ , api){

    // Customizer fof page redirect
    api.section( 'applab_fof_section' , function( section ){

        section.expanded.bind( function( isExpanded ){

            if( isExpanded ){
                api.previewer.previewUrl.set( api.settings.url.home+'/maybe404page' );
            }else{
                api.previewer.previewUrl.set( api.settings.url.home );
            }
            
        } )

    } );

    // Customizer blog page redirect
    api.section( 'applab_blog_options_section' , function( section ){

        section.expanded.bind( function( isExpanded ){

            if( isExpanded ){
                api.previewer.previewUrl.set( moahCustomizerdata.blog_page );
            }else{
                api.previewer.previewUrl.set( api.settings.url.home );
            }
            


        } )

    } );

    // General section
    api.section( 'applab_general_options_section' , function( section ){

        section.expanded.bind( function( isExpanded ){


            // Preloader option show/hide

            var $preloader      = $('#applab-preloader-toggle-settings'),
                $preloaderbg    = $( '#customize-control-applab_preloaderbgcolor' ),
                $preloaderbordercolor = $( '#customize-control-applab_loaderbordcolor' ),
                $preloaderactivebordercolor = $( '#customize-control-applab_loaderbordactivecolor' );


            // Default

            if( $preloader.is( ':checked' ) ){
                $preloaderbg.show('slow');
                $preloaderbordercolor.show('slow');
                $preloaderactivebordercolor.show('slow');
            }else{
                $preloaderbg.hide('slow');
                $preloaderbordercolor.hide('slow');
                $preloaderactivebordercolor.hide('slow');
            }


            // on click
            $preloader.on( 'click',  function(){

                var $this =  $( this );

                if( $this.is(':checked') ){
                    $preloaderbg.show('slow');
                    $preloaderbordercolor.show('slow');
                    $preloaderactivebordercolor.show('slow');
                }else{
                    $preloaderbg.hide('slow');
                    $preloaderbordercolor.hide('slow');
                    $preloaderactivebordercolor.hide('slow');
                }


            } ); 

        } );


    } );

    // Footer section
    api.section( 'applab_footer_options_section' , function( section ){

        section.expanded.bind( function( isExpanded ){


            // Footer Widget option show/hide
            var $widget_toggle  = $('#applab-widget-toggle-settings'),
                $widgetbg       = $( '#customize-control-applab_footer_bgColor_settings' ),
                $widgettext     = $('#customize-control-applab_footer_wtcolor_settings'),
                $widgettitle    = $('#customize-control-applab_footer_widgettitlecolor_settings'),
                $widgetanchor   = $('#customize-control-applab_footer_wanchorcolor_settings'),
                $widgetanchorhover  = $('#customize-control-applab_footer_wanchorhovcolor_settings');


            // Default

            if( $widget_toggle.is( ':checked' ) ){
                $widgetbg.show('slow');
                $widgettext.show('slow');
                $widgettitle.show('slow');
                $widgetanchor.show('slow');
                $widgetanchorhover.show('slow');
            }else{
                $widgetbg.hide('slow');
                $widgettext.hide('slow');
                $widgettitle.hide('slow');
                $widgetanchor.hide('slow');
                $widgetanchorhover.hide('slow');
            }

            // on click
            $widget_toggle.on( 'click',  function(){

                var $this =  $( this );

                if( $this.is(':checked') ){

                    $widgetbg.show('slow');
                    $widgettext.show('slow');
                    $widgettitle.show('slow');
                    $widgetanchor.show('slow');
                    $widgetanchorhover.show('slow');
                }else{

                    $widgetbg.hide('slow');
                    $widgettext.hide('slow');
                    $widgettitle.hide('slow');
                    $widgetanchor.hide('slow');
                    $widgetanchorhover.hide('slow');
                }


            } ); 

            /**
             * Footer bottom social media option show/hide
             *
             */ 
             
            var $social_toggle  = $('#applab-footersocial-toggle-settings'),
                $socialcolor    = $( '#customize-control-applab_footer_socialiconcolor_settings' ),
                $socialhovercolor = $('#customize-control-applab_footer_socialiconhovercolor_settings');


            // Default

            if( $social_toggle.is( ':checked' ) ){
                $socialcolor.show('slow');
                $socialhovercolor.show('slow');
            }else{
                $socialcolor.hide('slow');
                $socialhovercolor.hide('slow');
            }

            // on click
            $social_toggle.on( 'click',  function(){

                var $this =  $( this );

                if( $this.is(':checked') ){
                    $socialcolor.show('slow');
                    $socialhovercolor.show('slow');
                }else{
                    $socialcolor.hide('slow');
                    $socialhovercolor.hide('slow');
                }


            } ); 


        } );

    } );


})( jQuery, wp.customize );