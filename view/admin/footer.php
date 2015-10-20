</div>
<script src="/js/admin/jquery.min.js"></script>
<script src="/js/admin/bootstrap.min.js"></script>
<script src="/js/wysiwyg.js"></script>
<script src="/js/wysiwyg-editor.js"></script>
<script src="/js/admin/admin.js"></script>
<script type="text/javascript">
    leftMenu();
    $(document).ready(function(){

        $('.btModal').on('click', function () {
            var $div = $(this).parents('div[class="card"]');
            var id = "#"+$div.attr('id');
            $("#md-Editplace input[name='title']").val( $(id+" .card-title").text() );
            $("#md-Editplace textarea[name='description']").val( $(id+" .card-text").text() );
            $("#md-Editplace input[name='photo']").val( $(id+" .card-img-top").attr("src") );
        });

        $('form[name="HistoryForm"]').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/admin/history",
                data: convert( {content : $(this).find("textarea[name='content']").val() } ),
                contentType: "application/x-www-form-urlencoded; charset=utf-8",
                dataType: "json",
                success: function(data){
                    if(data['status']) {
                        console.log('SUCCESS');
                    } else {
                        console.log('FAILED');
                    }
                },
                failure: function(errMsg) {
                    console.log('ERROR')
                }
            });
        });

        // Full featured editor
        $('.editor').each( function(index, element)
        {
            $(element).wysiwyg({
                classes: 'some-more-classes',
                position: index == 0 ? 'top-selection' : (index == 1 ? 'bottom' : 'selection'),
                buttons: {
                    // Dummy-HTML-Plugin
                    dummybutton1: index != 1 ? false : {
                        html: $('<input id="submit" type="button" value="bold" />').click(function(){
                            // We simply make 'bold'
                            if( $(element).wysiwyg('selected-html') )
                                $(element).wysiwyg('bold');
                            else
                                alert( 'Please selection some text' );
                        }),
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    // Dummy-Button-Plugin
                    dummybutton2: index != 1 ? false : {
                        title: 'Dummy',
                        image: '\uf1e7',
                        click: function( $button ) {
                            alert('Do something');
                        },
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    insertimage: {
                        title: 'Insert image',
                        image: '\uf030', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    insertlink: {
                        title: 'Insert link',
                        image: '\uf08e' // <img src="path/to/image.png" width="16" height="16" alt="" />
                    },
                    // Fontanme + Fontsize Plugin
                    fontname: index == 1 ? false : {
                        title: 'Font',
                        image: '\uf031', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        popup: function( $popup, $button, $editor ) {
                            var list_fontnames = {
                                // Name : Font
                                'Arial, Helvetica' : 'Arial,Helvetica',
                                'Verdana'          : 'Verdana,Geneva',
                                'Georgia'          : 'Georgia',
                                'Courier New'      : 'Courier New,Courier',
                                'Times New Roman'  : 'Times New Roman,Times'
                            };
                            var $list = $('<div/>').addClass('wysiwyg-toolbar-list')
                                .attr('unselectable','on');
                            $.each( list_fontnames, function( name, font ){
                                var $link = $('<a/>').attr('href','#')
                                    .css( 'font-family', font )
                                    .html( name )
                                    .click(function(event){
                                        $(element).wysiwyg('fontname',font);
                                        $(element).wysiwyg('close-popup');
                                        // prevent link-href-#
                                        event.stopPropagation();
                                        event.preventDefault();
                                        return false;
                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                        },
                        //showstatic: true,    // wanted on the toolbar
                        showselection: index == 0 ? true : false    // wanted on selection
                    },
                    fontsize: index == 1 ? false : {
                        title: 'Size',
                        image: '\uf034', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        popup: function( $popup, $button, $editor ) {
                            var list_fontsizes = {
                                // Name : Size
                                'Huge'    : 7,
                                'Larger'  : 6,
                                'Large'   : 5,
                                'Normal'  : 4,
                                'Small'   : 3,
                                'Smaller' : 2,
                                'Tiny'    : 1
                            };
                            var $list = $('<div/>').addClass('wysiwyg-toolbar-list')
                                .attr('unselectable','on');
                            $.each( list_fontsizes, function( name, size ){
                                var $link = $('<a/>').attr('href','#')
                                    .css( 'font-size', (8 + (size * 3)) + 'px' )
                                    .html( name )
                                    .click(function(event){
                                        $(element).wysiwyg('fontsize',size);
                                        $(element).wysiwyg('close-popup');
                                        // prevent link-href-#
                                        event.stopPropagation();
                                        event.preventDefault();
                                        return false;
                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                        }
                        //showstatic: true,    // wanted on the toolbar
                        //showselection: true    // wanted on selection
                    },
                    bold: {
                        title: 'Bold (Ctrl+B)',
                        image: '\uf032', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        hotkey: 'b'
                    },
                    italic: {
                        title: 'Italic (Ctrl+I)',
                        image: '\uf033', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        hotkey: 'i'
                    },
                    underline: {
                        title: 'Underline (Ctrl+U)',
                        image: '\uf0cd', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        hotkey: 'u'
                    },
                    strikethrough: {
                        title: 'Strikethrough (Ctrl+S)',
                        image: '\uf0cc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        hotkey: 's'
                    },
                    forecolor: {
                        title: 'Text color',
                        image: '\uf1fc' // <img src="path/to/image.png" width="16" height="16" alt="" />
                    },
                    highlight: {
                        title: 'Background color',
                        image: '\uf043' // <img src="path/to/image.png" width="16" height="16" alt="" />
                    },
                    alignleft: index != 0 ? false : {
                        title: 'Left',
                        image: '\uf036', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    aligncenter: index != 0 ? false : {
                        title: 'Center',
                        image: '\uf037', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    alignright: index != 0 ? false : {
                        title: 'Right',
                        image: '\uf038', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    alignjustify: index != 0 ? false : {
                        title: 'Justify',
                        image: '\uf039', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    subscript: index == 1 ? false : {
                        title: 'Subscript',
                        image: '\uf12c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: true    // wanted on selection
                    },
                    superscript: index == 1 ? false : {
                        title: 'Superscript',
                        image: '\uf12b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: true    // wanted on selection
                    },
                    indent: index != 0 ? false : {
                        title: 'Indent',
                        image: '\uf03c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    outdent: index != 0 ? false : {
                        title: 'Outdent',
                        image: '\uf03b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    orderedList: index != 0 ? false : {
                        title: 'Ordered list',
                        image: '\uf0cb', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    unorderedList: index != 0 ? false : {
                        title: 'Unordered list',
                        image: '\uf0ca', // <img src="path/to/image.png" width="16" height="16" alt="" />
                        //showstatic: true,    // wanted on the toolbar
                        showselection: false    // wanted on selection
                    },
                    removeformat: {
                        title: 'Remove format',
                        image: '\uf12d' // <img src="path/to/image.png" width="16" height="16" alt="" />
                    }
                },
                // Submit-Button
                submit: {
                    title: 'Submit',
                    image: '\uf00c' // <img src="path/to/image.png" width="16" height="16" alt="" />
                },
                // Other properties
                dropfileclick: 'Drop image or click',
                placeholderUrl: 'www.example.com',
                maxImageSize: [600,200]
                /*
                 onImageUpload: function( insert_image ) {
                 // Used to insert an image without XMLHttpRequest 2
                 // A bit tricky, because we can't easily upload a file
                 // via '$.ajax()' on a legacy browser.
                 // You have to submit the form into to a '<iframe/>' element.
                 // Call 'insert_image(url)' as soon as the file is online
                 // and the URL is available.
                 // Best way to do: http://malsup.com/jquery/form/
                 // For example:
                 //$(this).parents('form')
                 //       .attr('action','/path/to/file')
                 //       .attr('method','POST')
                 //       .attr('enctype','multipart/form-data')
                 //       .ajaxSubmit({
                 //          success: function(xhrdata,textStatus,jqXHR){
                 //            var image_url = xhrdata;
                 //            console.log( 'URL: ' + image_url );
                 //            insert_image( image_url );
                 //          }
                 //        });
                 },
                 onKeyEnter: function() {
                 return false; // swallow enter
                 }
                 */
            })
                .change(function(){
                    if( typeof console != 'undefined' )
                        console.log( 'change' );
                })
                .focus(function(){
                    if( typeof console != 'undefined' )
                        console.log( 'focus' );
                })
                .blur(function(){
                    if( typeof console != 'undefined' )
                        console.log( 'blur' );
                });
        });

    });
</script>
</body>
</html>