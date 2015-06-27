<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  bluprint:
    label: Default page
    type: headline
  title:
    label: Title
    type:  text
  subtitle:
    label: Subtitle (this is what we put in the H2)
    type:  text
  mysnippet:
    label: Override the default snippet
    type:  text
    width: 1/2
  text:
    label: Text
    type:  wysiwyg
