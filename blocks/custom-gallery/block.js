(function (blocks, editor, components, i18n, element) {
    var el = element.createElement;
    var registerBlockType = blocks.registerBlockType;
    var MediaUpload = editor.MediaUpload;
    var Button = components.Button;

    registerBlockType('custom/gallery-block', {
        title: 'Custom Gallery',
        icon: 'images-alt2',
        category: 'media',
        attributes: {
            images: {
                type: 'array',
                default: [],
            },
        },

        edit: function (props) {
            var images = props.attributes.images;

            function onSelectImages(newImages) {
                if (newImages.length > 5) {
                    newImages = newImages.slice(0, 5); // Restrict to max 5 images
                }
                props.setAttributes({ images: newImages });
            }

            return el(
                'div',
                { className: 'custom-gallery-editor' },
                el(MediaUpload, {
                    onSelect: onSelectImages,
                    multiple: true,
                    allowedTypes: ['image'],
                    value: images.map(function (img) {
                        return img.id;
                    }),
                    render: function (obj) {
                        return el(
                            Button,
                            { isPrimary: true, onClick: obj.open },
                            images.length > 0 ? 'Change Images' : 'Select Images'
                        );
                    },
                }),
                el(
                    'div',
                    { className: 'custom-gallery-preview' },
                    images.map(function (img) {
                        return el('img', {
                            key: img.id,
                            src: img.url,
                            style: { width: '18%', margin: '1%' },
                        });
                    })
                )
            );
        },

        save: function () {
            return null; // Handled via PHP render callback
        },
    });
})(
    window.wp.blocks,
    window.wp.blockEditor,
    window.wp.components,
    window.wp.i18n,
    window.wp.element
);