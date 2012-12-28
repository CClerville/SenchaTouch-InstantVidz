/*
 * File: app.js
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

Ext.Loader.setConfig({
    enabled: true,
    paths: {
        'Ext.ux': 'ux'
    }
});

Ext.application({

    requires: [
        'Ext.field.Select'
    ],
    views: [
        'VideoContainer',
        'VidSearchField',
        'Main',
        'VideoPanel'
    ],
    name: 'SenchaTouch_InstantVidz',
    controllers: [
        'MainController'
    ],

    launch: function() {

        Ext.create('SenchaTouch_InstantVidz.view.Main', {fullscreen: true});
    }

});
