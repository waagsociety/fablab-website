<?php if(!defined('KIRBY')) exit ?>

title: Machines
pages:
  template: machine
files: true
fields:
  heroimage:
    label: Hero image
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

  videolink:
    label: Link to video
    type: text
    icon: file-video-o
  title:
    label: Title
    type:  text
  subtitle:
    label: Subtitle
    type:  text
  intro:
    label: Intro
    type:  textarea
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
