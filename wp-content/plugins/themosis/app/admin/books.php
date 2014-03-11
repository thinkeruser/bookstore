<?php

/*-----------------------------------------------------------------------*/
// BOOK CUSTOM POST TYPE
/*-----------------------------------------------------------------------*/
$books = PostType::make('bks-books', 'Books')->set(array(

	'rewrite'	=> array(
		'slug'	=> 'books'
		),
	'supports'	=> array('title', 'editor', 'excerpt')

));

/*-----------------------------------------------------------------------*/
// CUSTOM DATAS
/*-----------------------------------------------------------------------*/
Metabox::make('Details', $books->getSlug())->set(array(

	Field::text('author'),
	Field::media('promo-image', array('title' => 'Promo Image', 'info' => 'Image used to promote the book on home page or when viewing book details.')),
	Field::media('book-feature', array('title' => 'Featured image', 'info' => 'Book featured image.')),
	Field::text('color', array('info' => 'Used to customize the book display. Please insert an hexadecimal color value: <b>#CDCDCD</b>'))

));