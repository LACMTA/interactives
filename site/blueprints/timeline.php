<?php if(!defined('KIRBY')) exit ?>

title: TimelineJS
pages: false
fields:
  bluprint:
    label: TimelineJS page
    type: headline
  title:
    label: Title
    type:  text
    width: 1/2
  subtitle:
    label: Subtitle (this is what we put in the H2)
    type:  text
    width: 1/2
  text:
    label: Text
    type:  textarea
    size:  large
  mysnippet:
    label: Override the default snippet
    type:  text
    width: 1/2
  googledoc:
    label: Public link to published Google Doc
    type:  text
  font:
    label: Font (see http://timeline.knightlab.com/ for options)
    type:  text
    default: Bevan-PotanoSans
  maptype:
    label: Map Type (see http://timeline.knightlab.com/ for options)
    type:  text
    default: toner
