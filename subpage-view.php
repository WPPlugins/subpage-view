<?php
/*
PLUGIN NAME: Subpage View
Plugin URI: http://wordpress.org/extend/plugins/subpage-view/
DESCRIPTION: A plugin for showing subpages on a given page. Insert into MCE by using <code>[subpage-view <em>attributes</em>]</code> an example <code>[subpage-view depth="1"]</code>. View <a href="http://codex.wordpress.org/Template_Tags/wp_list_pages">WordPress Codex</a> for shortcode help. A CodeWork plugin for WordPress.
AUTHOR: Henrik Urlund
AUTHOR URI: http://codework.dk/referencer/wp-plugins/
VERSION: 1.0.0
*/

/*  Copyright 2007-2009 Henrik Urlund (email: henrik at codework.dk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

class subpage_view
{
        function __construct()
        {
                add_shortcode('subpage-view', array(&$this, 'subpage_view'));
        }
	
	function subpage_view($atts)
	{
		global $wp_query;
		extract(shortcode_atts(array(
			'depth' => 0,
			'show_date' => '',
			'date_format' => get_option('date_format'),
			'child_of' => $wp_query->queried_object->ID,
			'exclude' => 0,
			'title_li' => '',
			'authors' => '',
			'sort_column' => 'menu_order, post_title',
			'link_before' => '',
			'link_after' => '',
			'exclude_tree' => ''
		), $atts));
		
		$children = wp_list_pages('depth='. $depth .'&show_date='. $show_date .'&date_format='. $date_format .'&child_of='. $child_of .'&exclude='. $exclude .'&title_li='. $title_li .'&echo=0&authors='. $authors .'&sort_column='. $sort_column .'&link_before='. $link_before .'&link_after='. $link_after .'&exclude_tree='. $exclude_tree);
		
		if ($children)
			return '<ul>'. $children .'</ul>';
		else
			return '';
	}
}

$subpage_view = new subpage_view();
?>