/*! Rappid v2.2.0 - HTML5 Diagramming Framework - TRIAL VERSION

Copyright (c) 2015 client IO

 2018-05-06 


This Source Code Form is subject to the terms of the Rappid Trial License
, v. 2.0. If a copy of the Rappid License was not distributed with this
file, You can obtain one at http://jointjs.com/license/rappid_v2.txt
 or from the Rappid archive as was distributed by client IO. See the LICENSE file.*/


import * as joint from '../../build/rappid.min';
import {MainView} from './views/main';
import {ThemePicker} from './views/theme-picker';

joint.setTheme('modern');

let app = new MainView({ el: '#app' });

const themePicker = new ThemePicker({ mainView: app });
themePicker.render().$el.appendTo(document.body);

// for easier debugging in the browser's console
declare var window: any;
window['joint'] = joint
window['app'] = app
