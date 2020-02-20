
/*************************************
Change the icon in the tab.
title image/x-icon .ico to light at night dark in day.
*************************************/
const head = document.getElementsByTagName('head');
const link = document.createElement('link');
link.setAttribute('type', 'image/x-icon');
link.setAttribute('rel', 'shortcut icon');

if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
  link.setAttribute('href', 'img/logos/MrChef.ico');
} else {
  link.setAttribute('href', 'img/logos/MrChef_day.ico');
}
head[0].appendChild(link);
/************* END ******************
Change the icon in the tab.
title image/x-icon .ico to light at night dark in day.
const head = document.getElementsByTagName('head');
*************************************/
