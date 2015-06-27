<?php if(!defined('KIRBY')) exit ?>

title: Juxtapose
pages: false
files:
  sortable: false
fields:
  bluprint:
    label: Juxtapose page
    type: headline
  title:
    label: Title
    type:  text
    width: 1/2
  subtitle:
    label: Subtitle (this is what we put in the H2)
    type:  text
    width: 1/2
  credit:
    label: Image credit
    type:  text
    width: 1/2
    default: "Metro"
  mysnippet:
    label: Override the default snippet
    type:  text
    width: 1/2
  width:
    label: Set the width of this widget
    type:  text
    width: 1/2
    default: "90%"
  height:
    label: Set the height of this widget
    type:  text
    width: 1/2
    default: "640px"
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
  leftimage_url:
    label: Left Image URL
    type: url
  leftimage_label:
    label: Left Image Label
    type:  text
  rightimage_url:
    label: Right Image URL
    type: url
  rightimage_label:
    label: Right Image Label
    type:  text
