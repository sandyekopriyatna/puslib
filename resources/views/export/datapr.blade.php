<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="BTP-01" />
      <meta name="company" content="Microsoft Corporation" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style1 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style1 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style2 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style2 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      td.style4 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      th.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      td.style8 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style8 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style9 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style9 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style10 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style10 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style11 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style11 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style12 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style12 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style14 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style14 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style15 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style15 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style16 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style16 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style18 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style18 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style19 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style19 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style21 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style21 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:10pt; background-color:white }
      th.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:10pt; background-color:white }
      td.style23 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:10pt; background-color:white }
      th.style23 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:10pt; background-color:white }
      td.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:10pt; background-color:white }
      th.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:10pt; background-color:white }
      td.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      th.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      td.style26 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      th.style26 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      td.style27 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      th.style27 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      td.style28 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      th.style28 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style30 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      th.style30 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      td.style31 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      th.style31 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-style:italic; color:#000000; font-family:'Tahoma'; font-size:9pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style33 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style33 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style34 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style34 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style35 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style35 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style36 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style36 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style38 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style38 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style39 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style39 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style40 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style40 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style41 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style41 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style43 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style43 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style45 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style45 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style46 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      th.style46 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Tahoma'; font-size:8pt; background-color:white }
      td.style47 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style47 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style48 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style48 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style49 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style49 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style50 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style50 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style51 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style51 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style52 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style52 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style56 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style57 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style57 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style58 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style58 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style59 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style60 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style62 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style62 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style63 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style63 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style64 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style64 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style65 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style65 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style66 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style66 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style67 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style67 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style68 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style68 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style69 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style69 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style70 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style70 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style71 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style71 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style73 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style73 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style74 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style74 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style75 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style75 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style76 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style76 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style77 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style77 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style78 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style78 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style79 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style79 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style80 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style80 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style81 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style81 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style82 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style82 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style83 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style83 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style84 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style84 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style85 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style85 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style86 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style86 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style87 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style87 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style88 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style88 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style89 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style89 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style90 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style90 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style91 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style91 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style92 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style92 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style93 { vertical-align:middle; text-align:left; padding-left:45px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style93 { vertical-align:middle; text-align:left; padding-left:45px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style94 { vertical-align:middle; text-align:left; padding-left:45px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style94 { vertical-align:middle; text-align:left; padding-left:45px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style95 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style95 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style96 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style96 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style97 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style97 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style98 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style98 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style99 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style99 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style100 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style100 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style101 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style101 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style102 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style102 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style103 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style103 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style104 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style104 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style105 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style105 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style106 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style106 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style107 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style107 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style108 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style108 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style109 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style109 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style110 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style110 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style111 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style111 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      table.sheet0 col.col0 { width:23.72222195pt }
      table.sheet0 col.col1 { width:59.64444376pt }
      table.sheet0 col.col2 { width:20.3333331pt }
      table.sheet0 col.col3 { width:17.62222202pt }
      table.sheet0 col.col4 { width:50.83333275pt }
      table.sheet0 col.col5 { width:20.3333331pt }
      table.sheet0 col.col6 { width:5.42222216pt }
      table.sheet0 col.col7 { width:15.58888871pt }
      table.sheet0 col.col8 { width:82.01111017pt }
      table.sheet0 col.col9 { width:22.36666641pt }
      table.sheet0 col.col10 { width:79.29999909pt }
      table.sheet0 col.col11 { width:13.5555554pt }
      table.sheet0 col.col12 { width:22.36666641pt }
      table.sheet0 col.col13 { width:88.1111101pt }
      table.sheet0 col.col14 { width:121.9999986pt }
      table.sheet0 col.col15 { width:54.89999937pt }
      table.sheet0 col.col16 { width:23.72222195pt }
      table.sheet0 col.col17 { width:34.56666627pt }
      table.sheet0 col.col18 { width:89.46666564pt }
      table.sheet0 col.col19 { width:22.36666641pt }
      table.sheet0 col.col20 { width:90.14444341pt }
      table.sheet0 col.col21 { width:22.36666641pt }
      table.sheet0 col.col22 { width:79.29999909pt }
      table.sheet0 col.col23 { width:13.5555554pt }
      table.sheet0 col.col24 { width:22.36666641pt }
      table.sheet0 col.col25 { width:90.14444341pt }
      table.sheet0 col.col26 { width:131.48888738pt }
      table.sheet0 col.col27 { width:54.89999937pt }
      table.sheet0 tr { height:31.35pt }
      table.sheet0 tr.row0 { height:58.9pt }
      table.sheet0 tr.row1 { height:14.1pt }
      table.sheet0 tr.row2 { height:39.95pt }
      table.sheet0 tr.row3 { height:12pt }
      table.sheet0 tr.row4 { height:31.5pt }
      table.sheet0 tr.row5 { height:14.1pt }
      table.sheet0 tr.row6 { height:14.1pt }
      table.sheet0 tr.row7 { height:14.1pt }
      table.sheet0 tr.row8 { height:14.1pt }
      table.sheet0 tr.row9 { height:14.1pt }
      table.sheet0 tr.row10 { height:14.1pt }
      table.sheet0 tr.row11 { height:14.1pt }
      table.sheet0 tr.row12 { height:14.1pt }
      table.sheet0 tr.row13 { height:14.1pt }
      table.sheet0 tr.row14 { height:14.1pt }
      table.sheet0 tr.row15 { height:14.1pt }
      table.sheet0 tr.row16 { height:14.1pt }
      table.sheet0 tr.row17 { height:14.1pt }
      table.sheet0 tr.row18 { height:14.1pt }
      table.sheet0 tr.row19 { height:14.1pt }
      table.sheet0 tr.row20 { height:14.1pt }
      table.sheet0 tr.row21 { height:14.1pt }
      table.sheet0 tr.row22 { height:14.1pt }
      table.sheet0 tr.row23 { height:14.1pt }
      table.sheet0 tr.row24 { height:14.1pt }
      table.sheet0 tr.row25 { height:14.1pt }
      table.sheet0 tr.row26 { height:46.5pt }
      table.sheet0 tr.row27 { height:58.9pt }
      table.sheet0 tr.row28 { height:14.1pt }
      table.sheet0 tr.row29 { height:39.95pt }
      table.sheet0 tr.row30 { height:15pt }
      table.sheet0 tr.row31 { height:36.75pt }
      table.sheet0 tr.row32 { height:14.1pt }
      table.sheet0 tr.row33 { height:14.1pt }
      table.sheet0 tr.row34 { height:14.1pt }
      table.sheet0 tr.row35 { height:14.1pt }
      table.sheet0 tr.row36 { height:14.1pt }
      table.sheet0 tr.row37 { height:14.1pt }
      table.sheet0 tr.row38 { height:14.1pt }
      table.sheet0 tr.row39 { height:14.1pt }
      table.sheet0 tr.row40 { height:14.1pt }
      table.sheet0 tr.row41 { height:14.1pt }
      table.sheet0 tr.row42 { height:14.1pt }
      table.sheet0 tr.row43 { height:14.1pt }
      table.sheet0 tr.row44 { height:14.1pt }
      table.sheet0 tr.row45 { height:14.1pt }
      table.sheet0 tr.row46 { height:14.1pt }
      table.sheet0 tr.row47 { height:14.1pt }
      table.sheet0 tr.row48 { height:14.1pt }
      table.sheet0 tr.row49 { height:14.1pt }
      table.sheet0 tr.row50 { height:13.5pt }
      table.sheet0 tr.row51 { height:13.5pt }
      table.sheet0 tr.row52 { height:14.1pt }
      table.sheet0 tr.row53 { height:10.5pt }
      table.sheet0 tr.row65505 { height:12.75pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.14in; margin-right: 0.14in; margin-top: 0.14in; margin-bottom: 0.14in; }
body { margin-left: 0.14in; margin-right: 0.14in; margin-top: 0.14in; margin-bottom: 0.14in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <col class="col15">
        <col class="col16">
        <col class="col17">
        <col class="col18">
        <col class="col19">
        <col class="col20">
        <col class="col21">
        <col class="col22">
        <col class="col23">
        <col class="col24">
        <col class="col25">
        <col class="col26">
        <col class="col27">
        <tbody>
          <tr class="row0">
            <td class="column0 style1 null">
<div style="position: relative;"><img style="position: absolute; z-index: 1; left: 0px; top: 2px; width: 144px; height: 72px;" src="https://siap.btp.ac.id/admin/assets/img/btp1.png" border="0" /></div></td>
            <td class="column1 style2 null"></td>
            <td class="column2 style93 s style94" colspan="8"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt">BATAM TOURISM POLYTECHNIC</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt"><br />
</span><span style="color:#000000; font-family:'Calibri'; font-size:8pt">The Vitka City Complex, Jl. Gajah Mada, Tiban Lama, Sekupang, Batam, Kepulauan Riau INDONESIA <br />
E: info@btp.ac.id | P: 0778 3540889<br />
W: https://btp.ac.id</span></td>
            <td class="column10 style71 s style73" colspan="5">PURCHASE / EXPENSES REQUEST</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row1">
            <td class="column0 style74 s style76" colspan="10"><a class="comment-indicator"></a><div class="comment">Tujuan / alasan pembelian barang</div>
ALASAN TUJUAN PEMBELIAN BARANG / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">REASON</span></td>
            <td class="column10 style77 s style79" colspan="4">DIAJUKAN OLEH / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">REQUESTED BY</span></td>
            <td class="column14 style43 s">TANGGAL / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">DATE</span></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row2">
            <td class="column0 style80 s style86" colspan="10" rowspan="3">Pencairan Publikasi</td>
            <td class="column10 style87 s style88" colspan="4">{{$publikasi->user->name}}</td>
            <td class="column14 style29 s">{{$publikasi->diketahui}}</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row3">
            <td class="column10 style89 s style90" colspan="4">DEPARTEMEN / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">DEPARTMENT
</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt"><br />
</span></td>
            <td class="column14 style32 s">NO. ANGGARAN / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">BUDGET NO.<br />
</span></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row4">
            <td class="column10 style86 s style92" colspan="4">{{$publikasi->prodi}}</td>
            <td class="column14 style42 s">{{$publikasi->harga->kode}}</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row5">
            <td class="column0 style44 s">NO.</td>
            <td class="column1 style53 s style54" colspan="9">BARANG / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">ITEM</span></td>
            <td class="column10 style55 s style56" colspan="2">HARGA / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">PRICE</span></td>
            <td class="column12 style4 s">QTY</td>
            <td class="column13 style5 s">TOTAL / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">TOTAL</span></td>
            <td class="column14 style6 s">CATATAN / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">REMARK</span></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row6">
            <td class="column0 style8 null"></td>
            <td class="column1 style103 null style105" colspan="9"></td>
            <td class="column10 style57 null style58" colspan="2"></td>
            <td class="column12 style40 null"></td>
            <td class="column13 style38 null"></td>
            <td class="column14 style59 s style61" rowspan="10"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row7">
            <td class="column0 style9 null"></td>
            <td class="column1 style106 null style108" colspan="9"></td>
            <td class="column10 style62 null style63" colspan="2"></td>
            <td class="column12 style41 null"></td>
            <td class="column13 style39 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row8">
            <td class="column0 style9 null"></td>
            <td class="column1 style64 null style66" colspan="9"></td>
            <td class="column10 style62 null style63" colspan="2"></td>
            <td class="column12 style41 null"></td>
            <td class="column13 style39 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row9">
            <td class="column0 style9 null"></td>
            <td class="column1 style64 null style66" colspan="9"></td>
            <td class="column10 style69 null style70" colspan="2"></td>
            <td class="column12 style35 null"></td>
            <td class="column13 style36 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column0 style9 n">1</td>
            <td class="column1 style67 s style68" colspan="9">{{$publikasi ->harga->nama}}</td>
            <td class="column10 style69 s style70" colspan="2">{{$publikasi->harga->harga}}</td>
            <td class="column12 style35 s">1</td>
            <td class="column13 style10 s">{{$publikasi->harga->harga}}</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row11">
            <td class="column0 style9 null"></td>
            <td class="column1 style67 null style68" colspan="9"></td>
            <td class="column10 style69 null style70" colspan="2"></td>
            <td class="column12 style35 null"></td>
            <td class="column13 style10 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row12">
            <td class="column0 style9 null"></td>
            <td class="column1 style67 null style68" colspan="9"></td>
            <td class="column10 style69 null style70" colspan="2"></td>
            <td class="column12 style35 null"></td>
            <td class="column13 style10 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row13">
            <td class="column0 style9 null"></td>
            <td class="column1 style67 null style68" colspan="9"></td>
            <td class="column10 style109 null style110" colspan="2"></td>
            <td class="column12 style35 null"></td>
            <td class="column13 style10 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row14">
            <td class="column0 style11 null"></td>
            <td class="column1 style67 null style68" colspan="9"></td>
            <td class="column10 style97 null style98" colspan="2"></td>
            <td class="column12 style37 null"></td>
            <td class="column13 style33 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row15">
            <td class="column0 style99 s style102" colspan="13">TOTAL KESELURUHAN / <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:9pt">GRAND TOTAL</span></td>
            <td class="column13 style34 f">0</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row16">
            <td class="column0 style50 null"></td>
            <td class="column1 style12 null"></td>
            <td class="column2 style12 null"></td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style12 null"></td>
            <td class="column6 style12 null"></td>
            <td class="column7 style12 null"></td>
            <td class="column8 style12 null"></td>
            <td class="column9 style12 null"></td>
            <td class="column10 style12 null"></td>
            <td class="column11 style12 null"></td>
            <td class="column12 style12 null"></td>
            <td class="column13 style12 null"></td>
            <td class="column14 style13 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row17">
            <td class="column0 style51 s">DIAJUKAN OLEH</td>
            <td class="column1 style14 null"></td>
            <td class="column2 style46 null"></td>
            <td class="column3 style46 null"></td>
            <td class="column4 style14 s">DISETUJUI OLEH</td>
            <td class="column5 style14 null"></td>
            <td class="column6 style14 null"></td>
            <td class="column7 style14 null"></td>
            <td class="column8 style14 s">DIPERIKSA OLEH</td>
            <td class="column9 style46 null"></td>
            <td class="column10 style14 s">DIKETAHUI OLEH</td>
            <td class="column11 style12 null"></td>
            <td class="column12 style13 null"></td>
            <td class="column13 style12 null"></td>
            <td class="column14 style15 s">DIPERIKSA DAN DISETUJUI</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row18">
            <td class="column0 style52 s">REQUESTED BY</td>
            <td class="column1 style16 null"></td>
            <td class="column2 style46 null"></td>
            <td class="column3 style46 null"></td>
            <td class="column4 style17 s">APPROVED BY</td>
            <td class="column5 style17 null"></td>
            <td class="column6 style17 null"></td>
            <td class="column7 style17 null"></td>
            <td class="column8 style16 s">ACKNOWLEDGED BY </td>
            <td class="column9 style46 null"></td>
            <td class="column10 style16 s">ACKNOWLEDGED BY </td>
            <td class="column11 style12 null"></td>
            <td class="column12 style18 null"></td>
            <td class="column13 style19 null"></td>
            <td class="column14 style20 s">CHECKED/APPROVED BY</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row19">
            <td class="column0 style51 null"></td>
            <td class="column1 style45 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4 style45 null"></td>
            <td class="column5 style45 null"></td>
            <td class="column6 style45 null"></td>
            <td class="column7 style45 null"></td>
            <td class="column8 style45 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10 style45 null"></td>
            <td class="column11 style12 null"></td>
            <td class="column12 style13 null"></td>
            <td class="column13 style12 null"></td>
            <td class="column14 style13 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row20">
            <td class="column0 style51 null">{{$publikasi ->created_at}}</td>
            <td class="column1 style45 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4 style45 null">{{$publikasi ->puslitabmas}}</td>
            <td class="column5 style45 null"></td>
            <td class="column6 style45 null"></td>
            <td class="column7 style45 null"></td>
            <td class="column8 style45 null">{{$publikasi ->wadir2}}</td>
            <td class="column9">&nbsp;</td>
            <td class="column10 style45 null">{{$publikasi ->direktur}}</td>
            <td class="column11 style12 null"></td>
            <td class="column12 style13 null"></td>
            <td class="column13 style12 null"></td>
            <td class="column14 style13 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row21">
            <td class="column0 style51 null"></td>
            <td class="column1 style45 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4 style45 null"></td>
            <td class="column5 style45 null"></td>
            <td class="column6 style45 null"></td>
            <td class="column7 style45 null"></td>
            <td class="column8 style45 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10 style45 null"></td>
            <td class="column11 style12 null"></td>
            <td class="column12 style13 null"></td>
            <td class="column13 style12 null"></td>
            <td class="column14 style13 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row22">
            <td class="column0 style95 s style96" colspan="2">&nbsp;{{$publikasi->user->name}}</td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style111 s style111" colspan="3">puslitabmas</td>
            <td class="column6 style48 null"></td>
            <td class="column7 style49 null"></td>
            <td class="column8 style47 s">Syafruddin Rais</td>
            <td class="column9">&nbsp;</td>
            <td class="column10 style47 s">M. Nur A Nasution</td>
            <td class="column11 style12 null"></td>
            <td class="column12 style18 null"></td>
            <td class="column13 style19 null"></td>
            <td class="column14 style21 s"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row23">
            <td class="column0 style22 null"></td>
            <td class="column1 style23 null"></td>
            <td class="column2 style23 null"></td>
            <td class="column3 style23 null"></td>
            <td class="column4 style23 null"></td>
            <td class="column5 style23 null"></td>
            <td class="column6 style23 null"></td>
            <td class="column7 style23 null"></td>
            <td class="column8 style23 null"></td>
            <td class="column9 style23 null"></td>
            <td class="column10 style30 null"></td>
            <td class="column11 style23 null"></td>
            <td class="column12 style24 null"></td>
            <td class="column13 style23 null"></td>
            <td class="column14 style31 s">Yayasan Vitka</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row24">
            <td class="column0 style25 s">Catatan : Permintaan untuk pembelian di atas 3 juta harus melampirkan penawaran dan perbandingan</td>
            <td class="column1 style23 null"></td>
            <td class="column2 style23 null"></td>
            <td class="column3 style23 null"></td>
            <td class="column4 style23 null"></td>
            <td class="column5 style23 null"></td>
            <td class="column6 style23 null"></td>
            <td class="column7 style23 null"></td>
            <td class="column8 style23 null"></td>
            <td class="column9 style23 null"></td>
            <td class="column10 style23 null"></td>
            <td class="column11 style23 null"></td>
            <td class="column12 style23 null"></td>
            <td class="column13 style23 null"></td>
            <td class="column14 style24 null"></td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          <tr class="row25">
            <td class="column0 style26 s">Note: a requests for purchases above 3 million must attach a comparison offer</td>
            <td class="column1 style27 null"></td>
            <td class="column2 style27 null"></td>
            <td class="column3 style27 null"></td>
            <td class="column4 style27 null"></td>
            <td class="column5 style27 null"></td>
            <td class="column6 style27 null"></td>
            <td class="column7 style27 null"></td>
            <td class="column8 style27 null"></td>
            <td class="column9 style27 null"></td>
            <td class="column10 style27 null"></td>
            <td class="column11 style27 null"></td>
            <td class="column12 style27 null"></td>
            <td class="column13 style27 null"></td>
            <td class="column14 style28 s">Designed by IT Department A2:K27A1:K27A3A7:K27+A1:K26</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
          </tr>
          
        </tbody>
    </table>
  </body>
</html>
