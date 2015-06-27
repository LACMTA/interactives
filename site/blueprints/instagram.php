<?php if(!defined('KIRBY')) exit ?>

title: Instagram
pages: false
files:
  sortable: true
fields:
  bluprint:
    label: Instagram page
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
  link:
    label: Instagram Tag
    type:  text
    defult: 'MetroPresents'
