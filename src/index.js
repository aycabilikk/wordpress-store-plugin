import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import EditMode from './edit/EditMode';
import PublishMode from './publish/PublishMode';
import { jotformIcon } from './assets/Icons';

registerBlockType('create-block/wordpress-store-plugin', {
	title: 'Jotform Store Embed',
	icon: jotformIcon,
	category: 'embed',
	description: 'Create stores and embed to your website with Jotform Store Embed plugin.',
	attributes: {
		storeId: {
			type: 'string'
		},
		storeTitle: {
			type: 'string'
		},
		storeIcon: {
			type: 'string'
		},
		preview: {
			type: 'boolean'
		}
	},
	example: {
		attributes: {
			preview: true
		}
	},
	edit: EditMode,
	save: PublishMode,
});
