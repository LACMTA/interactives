<?php if(!defined('KIRBY')) exit ?>

title: iFrame
pages: true
files: true
fields:
  bluprint:
    label: iFrame container page
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
  iframeurl:
    label: iFrame link
    type:  text
    default: ""
  swf:
    label: SWF? ("iFrame link" should end with .swf)
    type: checkbox
    text: Are you linking to a SWF?
    width: 1/2
  mysnippet:
    label: Override the default snippet
    type:  text
    width: 1/2
  bgcolor:
    label: Match a SWFs bgcolor to the host page (use format #000000 )
    type:  text
    default: "#ffffff"
    width: 1/2
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
