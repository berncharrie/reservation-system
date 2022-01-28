<?php header("Content-type: text/css"); ?>

*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: 'Montserrat';
}

body {
    
    border-bottom: 10px solid #eb7620;
  
  }

  .profile .grid-header {
    background: url("https://bootdey.com/img/Content/bg1.jpg")   center;
    background-size: cover;
    color: #f5f5f5;
  }
  
  .profile img {
    max-width: 100%;
  }
  
  .profile .grid-header img {
    margin: 2em 1em;
  }
  
  .profile .grid-header h3 {
    color: #f5f5f5 !important;
    font-weight: 400;
    margin: 30px 0 20px 0;
  }
  
  .profile .grid-header p {
    margin-bottom: 5px;
  }
  
  .profile .grid-header p a {
    color: #f5f5f5;
  }
  
  .profile .grid-body {
    font-size: 1em;
  }
  
  .profile .tab-content {
    padding-bottom: 0px;
  }
  
  .profile .stats {
    margin-top: 20px;
    padding: 0px 0px 20px;
    background: #eee;
    text-align: center;
    border-top: 1px solid #ccc;
  }
  
  .profile .stats h1 {
    font-weight: 400;
    margin-bottom: 0px;
  }
  
  .profile .stats span {
    margin: 5px 0 10px 0;
    display: block;
  }
  
  .profile .stats .btn {
    padding-right: 4em;
    padding-left: 4em;
  }
  
  .profile .timeline-centered {
    font-size: 1.15em;
  }
  
  .profile .timeline-centered:before {
    background: #eee;
  }
  
  .profile .bg-default {
    border: 1px solid #bbb;
  }
  
  .grid {
    position: relative;
    width: 100%;
    background: #fff;
    color: #666666;
    border-radius: 2px;
    margin-bottom: 25px;
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
  }
  
  .grid .grid-header {
    position: relative;
    border-bottom: 1px solid #ddd;
    padding: 15px 10px 10px 20px;

  }
  
  .grid .grid-header:before,
  .grid .grid-header:after {
    display: table;
    content: " ";
  }
  
  .grid .grid-header:after {
    clear: both;
  }
  
  .grid .grid-header span,
  .grid .grid-header > .fa {
    display: inline-block;
    margin: 0;
    font-weight: 300;
    font-size: 1.5em;
    float: left;
  }
  
  .grid .grid-header span {
    padding: 0 5px;
  }
  
  .grid .grid-header > .fa {
    padding: 5px 10px 0 0;
  }
  
  .grid .grid-header > .grid-tools {
    padding: 4px 10px;
  }
  
  .grid .grid-header > .grid-tools a {
    color: #999999;
    padding-left: 10px;
    cursor: pointer;
  }
  
  .grid .grid-header > .grid-tools a:hover {
    color: #666666;
  }
  
  .grid .grid-body {
    padding: 15px 20px 15px 20px;
    font-size: 0.9em;
    line-height: 1.9em;
  }
  
  .grid .full {
    padding: 0 !important;
  }
  
  .grid .transparent {
    box-shadow: none !important;
    margin: 0px !important;
    border-radius: 0px !important;
  }
  
  .grid.top.black > .grid-header {
    border-top-color: #000000 !important;
  }
  
  .grid.bottom.black > .grid-body {
    border-bottom-color: #000000 !important;
  }
  
  .grid.top.blue > .grid-header {
    border-top-color: #007be9 !important;
  }
  
  .grid.bottom.blue > .grid-body {
    border-bottom-color: #007be9 !important;
  }
  
  .grid.top.green > .grid-header {
    border-top-color: #00c273 !important;
  }
  
  .grid.bottom.green > .grid-body {
    border-bottom-color: #00c273 !important;
  }
  
  .grid.top.purple > .grid-header {
    border-top-color: #a700d3 !important;
  }
  
  .grid.bottom.purple > .grid-body {
    border-bottom-color: #a700d3 !important;
  }
  
  .grid.top.red > .grid-header {
    border-top-color: #dc1200 !important;
  }
  
  .grid.bottom.red > .grid-body {
    border-bottom-color: #dc1200 !important;
  }
  
  .grid.top.orange > .grid-header {
    border-top-color: #f46100 !important;
  }
  
  .grid.bottom.orange > .grid-body {
    border-bottom-color: #f46100 !important;
  }
  
  .grid.no-border > .grid-header {
    border-bottom: 0px !important;
  }
  
  .grid.top > .grid-header {
    border-top-width: 4px !important;
    border-top-style: solid !important;
  }
  
  .grid.bottom > .grid-body {
    border-bottom-width: 4px !important;
    border-bottom-style: solid !important;
  }
  
  .timeline-centered {
    position: relative;
    margin-bottom: 30px;
  }
  
  .timeline-centered:before, .timeline-centered:after,
  .timeline-centered .timeline-entry:before, .timeline-centered .timeline-entry:after,
  .timeline-centered .timeline-entry .timeline-entry-inner:before, .timeline-centered .timeline-entry .timeline-entry-inner:after {
    content: " ";
    display: table;
  }
  
  .timeline-centered:after,
  .timeline-centered .timeline-entry:after,
  .timeline-centered .timeline-entry .timeline-entry-inner:after {
    clear: both;
  }
  
  .timeline-centered:before {
    content: "";
    position: absolute;
    display: block;
    width: 4px;
    background: #fff;
    left: 50%;
    top: 20px;
    bottom: 20px;
    margin-left: -4px;
  }
  
  .timeline-centered .timeline-entry {
    position: relative;
    width: 50%;
    float: right;
    margin-bottom: 70px;
    clear: both;
  }
  
  .timeline-centered .timeline-entry.begin {
    margin-bottom: 0;
  }
  
  .timeline-centered .timeline-entry.left-aligned {
    float: left;
  }
  
  .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
    margin-left: 0;
    margin-right: -18px;
  }
  
  .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
    left: auto;
    right: -100px;
    text-align: left;
  }
  
  .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
    float: right;
  }
  
  .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
    margin-left: 0;
    margin-right: 70px;
  }
  
  .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
    left: auto;
    right: 0;
    margin-left: 0;
    margin-right: -9px;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner {
    position: relative;
    margin-left: -22px;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
    position: absolute;
    margin-top: -12px;
    left: -100px;
    text-align: right;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span {
    display: block;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:first-child {
    font-size: 1.2em;
    font-weight: 400;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:last-child {
    font-size: 0.9em;
    font-weight: 300;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
    background: #fff;
    color: #737881;
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 1.3em;
    text-align: center;
    float: left;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    -webkit-box-shadow: 0 0 0 4px #fff;
    -moz-box-shadow: 0 0 0 4px #fff;
    box-shadow: 0 0 0 4px #fff;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
    content: "";
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 9px 9px 9px 0;
    border-color: transparent #eee transparent transparent;
    left: 0;
    top: 10px;
    margin-left: -9px;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
    position: relative;
    background: #fff;
    padding: 1.7em;
    margin-left: 70px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #ddd;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2, .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
    color: #666666;
    font-size: 0.9em;
    line-height: 1.9em;
    margin: 0;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p + p {
    margin-top: 15px;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
    font-size: 1.2em;
    line-height: 1.2em;
    margin-bottom: 10px;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
    color: #999;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner blockquote {
    font-size: 0.9em;
    line-height: 1.9em;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-default {
    background-color: #fff;
    color: #999;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
    background-color: #428bca;
    color: #fff;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
    background-color: #5cb85c;
    color: #fff;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
    background-color: #5bc0de;
    color: #fff;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
    background-color: #f0ad4e;
    color: #fff;
  }
  
  .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
    background-color: #d9534f;
    color: #fff;
  }
  
  .popup-gallery a img {
    margin: 2px 0;
  }
  
  .popup-gallery a img:hover {
    opacity: 0.6;
    filter: alpha(opacity=60);
    /* For IE8 and earlier */
  }

  /*footer*/

.footer{
  
  height: auto;
  width: 100%;
  margin: auto;
  background-color: #111;
  padding-top: 10px;
  color: #ffff;

}

.footer-bottom{

  text-align: center;
  justify-items: center;
  display: flex;
  align-items: center;
  flex-direction: column;

}

.footer-bottom p, h3{
  color: #fff;
  margin: 5px;
}


/*navigation bar*/


header .navbar .navbar_right {
  right: 20px;
  
  position: absolute;
}
header .navbar .navbar_left{
  position: absolute;
  margin-left: 20px;
  
}

.navbar .navbar_right .home-icon{
  cursor: pointer;
  
  position: absolute;
  right: 40px;
  font-size: 28px;

}

.navbar .navbar_right .home-icon i:hover{
 
  color: #3b80f9;

}

.footer-profile{
  
  height: auto;
  width: 100%;
  margin: auto;
  background-color: #111;
  padding-top: 10px;
  color: #ffff;

}

.footer-bottom{

  text-align: center;
  justify-items: center;
  display: flex;
  align-items: center;
  flex-direction: column;

}

.footer-bottom p, h3{
  color: #fff;
  margin: 5px;
}

.submit{

  position: relative;
  margin-left: 10px;
}