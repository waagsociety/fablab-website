<?php if(!defined('KIRBY')) exit ?>

title: Machines
pages:
  template: machine
files: true
fields:
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
