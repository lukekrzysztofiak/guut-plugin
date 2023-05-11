import { registerBlockType } from '@wordpress/blocks';
import edit from './block/edit';
import save from './block/save';

registerBlockType( '/text', {
    apiVersion: 2,
    title: 'Custom Font Styles',
    icon: 'admin-comments',
    category: 'common',
    attributes: {
        content: {
            type: 'string',
            source: 'text',
            selector: 'p',
        },
    },
    edit,
    save,
} );
