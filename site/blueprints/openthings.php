<?php if(!defined('KIRBY')) exit ?>

title: Openthings
pages: false
files: true
fields:
  heroimage:
    label: Hero image
    type:  selector
    mode:  single
    types:
        - image
  icon:
    label: Icon
    type:  selector
    mode:  single
    types:
        - image
  textcolor:
    label: Textcolor for the homepage
    type:  color
  pagecolor:
    label: Section color for the homepage
    type:  color
  thumb:
    label: Thumb
    type: checkbox
    text: Do you want to display the thumb image?
  api:
    label: Link to the API
    type:  text
  title:
    label: Title
    type:  text
  videolink:
    label: Link to video
    type: text
    icon: file-video-o
  subtitle:
    label: Subtitle
    type:  text
  intro:
    label: Intro
    type:  textarea
    validate:
      min: 4
      max: 180
  text:
    label: Text
    type:  textarea
  layout:
    label: layout
    type: radio
    options:
      one-col: One column
      two-col: two column
      three-col: Three column
      three-col-two: Three column 2x
      four-col: Four column
      four-col-three: Four column 3x
