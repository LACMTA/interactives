<?php if(!defined('KIRBY')) exit ?>

title: Links
pages: true
files: false
fields:
  bluprint:
    label: Quick links page
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
