<?php if(!defined('KIRBY')) exit ?>

title: Hero
pages: false
fields:
  bluprint:
    label: Hero page
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
    size:  large
  herovideo_url:
    label: Hero video URL
    type: text
  image_url:
    label: Hero image URL
    type: text
  downlink_title:
    label: Downlink section title
    type: text
    default: "About"
  downlink:
    label: Downlink section UID (link)
    type: text
    default: about
