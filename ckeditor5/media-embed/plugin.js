import MediaEmbed from '@ckeditor/ckeditor5-media-embed/src/mediaembed';

ClassicEditor
    .create(document.querySelector('#editor'), {
        extraPlugins: [ MediaEmbed ],
        toolbar: {
            shouldNotGroupWhenFull: true
        }
    })
    .then(editor => {
        console.log('Editor foi inicializado', editor);
    })
    .catch(error => {
        console.error(error.stack);
    });
