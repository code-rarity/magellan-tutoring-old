/* Source and licensing information for the line(s) below can be found at http://www.magellantutoring.com/themes/bootstrap/js/modules/filter/filter.js. */
(function(e){'use strict';function t(){var t=e(this).parents('.filter-wrapper').find('.filter-help > a'),i=t.data('originalLink');if(!i){i=t.attr('href');t.data('originalLink',i)};t.attr('href',i+'/'+e(this).find(':selected').val())};e(document).on('change','.filter-wrapper select.filter-list',t);Drupal.behaviors.filterGuidelines={attach:function(i){e(i).find('.filter-wrapper select.filter-list').once('filter-list').each(t)}}})(jQuery);
/* Source and licensing information for the above line(s) can be found at http://www.magellantutoring.com/themes/bootstrap/js/modules/filter/filter.js. */