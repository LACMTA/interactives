<?php if(!defined('KIRBY')) exit ?>

title: Link
pages: false
files:
  sortable: true
preview: parent
fields:
  bluprint:
    label: Link page
    type: headline
  title:
    label: Title
    type:  text
  subtitle:
    label: Subtitle
    type:  text
  mysnippet:
    label: Override the default snippet
    type:  text
    width: 1/2
  link:
    label: Link
    type:  url
