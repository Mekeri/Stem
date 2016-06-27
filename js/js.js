// Bootstrap styles
jQuery('table').addClass('table table-striped table-hover table-bordered');
jQuery('iframe').wrap('<div class="embed-responsive embed-responsive-16by9">').addClass('embed-responsive-item');
jQuery('input[type="submit"], button').addClass('btn btn-primary');
var jQuerywindow = jQuery(window);
// Adding the needed html to WordPress navigation menus //
jQuery("ul.dropdown-menu").parent().addClass("dropdown");
jQuery("ul.nav li.dropdown a").addClass("dropdown-toggle");
jQuery("ul.dropdown-menu li a").removeClass("dropdown-toggle");
jQuery('a.dropdown-toggle').attr('data-toggle', 'dropdown');

// Adding dropdown caret for dropdown menus, if it does not already exist
jQuery('.menu li:has(ul.dropdown-menu) > a:not(:has(b.caret))').append(' <b class="caret"></b>');
