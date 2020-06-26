/*! @license ServerWoW 0.0.4a | https://serverwow.gratis | Copyright (c) 2019-2020, ServerWoW */

tinymce.init({
    selector: '.serverwow-fulleditor',
    skin: 'serverwow',
    content_css : '/assets/tinymce/skins/content/serverwow/content.min.css',
    element_format : 'html',
    schema: 'html5-strict',
    branding: false,
    menubar: false,
    plugins: ['preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media code codesample table charmap hr insertdatetime advlist lists imagetools textpattern emoticons'],
    toolbar: 'bold italic strikethrough | fontsizeselect formatselect | forecolor backcolor | emoticons | image link media | alignleft aligncenter alignright alignjustify | numlist bullist | code |removeformat',
    paste_as_text: true,
    color_map: [
        '#BFEDD2', 'Light Green',
        '#FBEEB8', 'Light Yellow',
        '#F8CAC6', 'Light Red',
        '#ECCAFA', 'Light Purple',
        '#C2E0F4', 'Light Blue',

        '#2DC26B', 'Green',
        '#F1C40F', 'Yellow',
        '#E03E2D', 'Red',
        '#B96AD9', 'Purple',
        '#3598DB', 'Blue',

        '#169179', 'Dark Turquoise',
        '#E67E23', 'Orange',
        '#BA372A', 'Dark Red',
        '#843FA1', 'Dark Purple',
        '#236FA1', 'Dark Blue',

        '#ECF0F1', 'Light Gray',
        '#CED4D9', 'Medium Gray',
        '#95A5A6', 'Gray',
        '#7E8C8D', 'Dark Gray',
        '#34495E', 'Navy Blue',

        '#ffffff', 'White'
    ],
    mobile: {
        theme: 'mobile',
        plugins: ['autosave', 'lists', 'autolink'],
        toolbar: ['undo', 'redo', 'bold', 'link', 'bullist', 'numlist']
    }
});
