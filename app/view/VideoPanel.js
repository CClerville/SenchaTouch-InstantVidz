/*
 * File: app/view/VideoPanel.js
 *
 * This file was generated by Sencha Architect version 2.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Sencha Touch 2.1.x library, under independent license.
 * License of Sencha Architect does not include license for Sencha Touch 2.1.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('SenchaTouch_InstantVidz.view.VideoPanel', {
    extend: 'Ext.Panel',
    alias: 'widget.videopanel',

    config: {
        itemId: 'videoPanel',
        layout: {
            type: 'vbox'
        },
        cls: [
            'video-panel'
        ],
        tpl: [
            '<tpl for=".">  ',
            '   <iframe ',
            '       class="video-player"',
            '       type="text/html" ',
            '       src="http://www.youtube.com/embed/{videoId}" ',
            '       frameborder="0">',
            '   </iframe>',
            '</tpl>'
        ]
    }

});