<?php if(!defined('KIRBY')) exit ?>

title: Story
pages: false
files:
  sortable: true
fields:
  bluprint:
    label: Story page
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
  link:
    label: Link (use this when a story has no content)
    type:  url
  tags:
    label: Tags
    type:  tags
  category:
    label: Category
    type: radio
    options:
      riders: From Riders
      partners: From Partners
      metro: From Metro
      library: From the Library
