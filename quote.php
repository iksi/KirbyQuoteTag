<?php

/**
 * Inline quote tag for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @link   https://github.com/iksi/KirbyQuoteTag
 */

kirbytext::$tags['quote'] = array(
    'attr' => array(
        'cite',
        'class',
        'lang'
    ),
    'html' => function($tag) {
        $element = new Brick('q');
        $element->addClass($tag->attr('class'));
        $element->attr('cite', $tag->attr('cite'));
        $element->attr('lang', $tag->attr('lang'));
        $element->append($tag->attr('quote'));

        return $element;
    }
);
