<?php if(!defined('KIRBY')) exit ?>

title: Machine
pages: false
files: true
fields:
  heroimage:
    label: Hero image
    type:  selector
    mode:  single
    types:
        - image
  machineimage:
    label: Machine image
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