<?php if(!defined('KIRBY')) exit ?>

title: Map
pages: true
files: true
fields:
  bluprint:
    label: HTML5 Blooming Map page
    type: headline
  title:
    label: Title
    type:  text
    width: 1/2
  subtitle:
    label: Subtitle (this is what we put in the H2)
    type:  text
    width: 1/2
  mysnippet:
    label: Override the default snippet
    type:  text
    width: 1/2
  text:
    label: Text
    type:  textarea
  height:
    label: iFrame or SWF's height
    type:  text
    default: "800px"
    width: 1/2
  width:
    label: iFrame or SWF's width
    type:  text
    default: "100%"
    width: 1/2
