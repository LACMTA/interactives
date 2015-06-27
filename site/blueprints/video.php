<?php if(!defined('KIRBY')) exit ?>

title: Video
pages: false
files:
  sortable: true
fields:
  bluprint:
    label: Video page
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
  tags:
    label: Tags
    type:  tags
  hero:
    label: Hero
    type: checkbox
    text: Do you want to display the Hero image?
  videotype:
    label: Pick a video provider
    type: headline
  vimeoID:
    label: Vimeo ID
    type:  text
  youtubeID:
    label: YouTube ID
    type:  text
