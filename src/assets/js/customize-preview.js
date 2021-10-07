import $ from 'jquery';
import strip_tags from './helpers/strip-tags';

wp.customize('_themename_site_info', (value) => {
  value.bind((to) => {
    $('.site-info__text').html(strip_tags(to, '<a>'));
  })
});

wp.customize('blogname', (value) => {
  value.bind((to) => {
    $('.blogname').html(to);
  })
});

wp.customize('_themename_accent_color', (value) => {
  value.bind((to) => {
    let inline_styles = ``;
    let inline_styles_obj = _themename['inline_styles'];
    for (let selector in inline_styles_obj) {
      inline_styles += `${selector} {`;
      for (let prop in inline_styles_obj[selector]) {
        let val = inline_styles_obj[selector][prop];
        inline_styles += `${prop}: ${wp.customize(val).get()}`;
      }
      inline_styles += `}`;
    }
    $('#_themename-stylesheet-inline-css').html(inline_styles);
  })
});
