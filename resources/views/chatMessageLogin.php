<!DOCTYPE html>
<html>
<title>Pet Adoption</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./CSS/W3S/w3.css">
<link rel="stylesheet" href="./CSS/W3S/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./CSS/Bootstrap/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/CustomCss.css">

<!--Add on-->



<style class="cp-pen-styles">
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block
}

body {
    line-height: 1
}

ol, ul {
    list-style: none
}

blockquote, q {
    quotes: none
}

blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none
}

table {
    border-collapse: collapse;
    border-spacing: 0
}


body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  font-size: 1em;
  letter-spacing: 0.1px;
  color: #32465a;
  text-rendering: optimizeLegibility;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
  -webkit-font-smoothing: antialiased;
}

#frame {
  
  width: 95%;
  min-width: 360px;
  max-width: 1000px;
  height: 92vh;
  min-height: 300px;
  max-height: 720px;
  background: #E6EAEA;
}
@media screen and (max-width: 360px) {
  #frame {
    align-items: center;
    width: 100%;
    height: 100vh;
  }
}
#frame #sidepanel {
  float: left;
  min-width: 280px;
  max-width: 340px;
  width: 40%;
  height: 100%;
  background: #2c3e50;
  color: #f5f5f5;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel {
    width: 58px;
    min-width: 58px;
  }
}
#frame #sidepanel #profile {
  width: 80%;
  margin: 25px auto;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile {
    width: 100%;
    margin: 0 auto;
    padding: 5px 0 0 0;
    background: #32465a;
  }
}
#frame #sidepanel #profile.expanded .wrap {
  height: 210px;
  line-height: initial;
}
#frame #sidepanel #profile.expanded .wrap p {
  margin-top: 20px;
}
#frame #sidepanel #profile.expanded .wrap i.expand-button {
  -moz-transform: scaleY(-1);
  -o-transform: scaleY(-1);
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}
#frame #sidepanel #profile .wrap {
  height: 60px;
  line-height: 60px;
  overflow: hidden;
  -moz-transition: 0.3s height ease;
  -o-transition: 0.3s height ease;
  -webkit-transition: 0.3s height ease;
  transition: 0.3s height ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap {
    height: 55px;
  }
}
#frame #sidepanel #profile .wrap img {
  width: 50px;
  border-radius: 50%;
  padding: 3px;
  border: 2px solid #e74c3c;
  height: auto;
  float: left;
  cursor: pointer;
  -moz-transition: 0.3s border ease;
  -o-transition: 0.3s border ease;
  -webkit-transition: 0.3s border ease;
  transition: 0.3s border ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap img {
    width: 40px;
    margin-left: 4px;
  }
}
#frame #sidepanel #profile .wrap img.online {
  border: 2px solid #2ecc71;
}
#frame #sidepanel #profile .wrap img.away {
  border: 2px solid #f1c40f;
}
#frame #sidepanel #profile .wrap img.busy {
  border: 2px solid #e74c3c;
}
#frame #sidepanel #profile .wrap img.offline {
  border: 2px solid #95a5a6;
}
#frame #sidepanel #profile .wrap p {
  float: left;
  margin-left: 15px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap i.expand-button {
  float: right;
  margin-top: 23px;
  font-size: 0.8em;
  cursor: pointer;
  color: #435f7a;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap i.expand-button {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 150px;
  margin: 70px 0 0 0;
  border-radius: 6px;
  z-index: 99;
  line-height: initial;
  background: #435f7a;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options {
    width: 58px;
    margin-top: 57px;
  }
}
#frame #sidepanel #profile .wrap #status-options.active {
  opacity: 1;
  visibility: visible;
  margin: 75px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options.active {
    margin-top: 62px;
  }
}
#frame #sidepanel #profile .wrap #status-options:before {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 8px solid #435f7a;
  margin: -8px 0 0 24px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options:before {
    margin-left: 23px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul {
  overflow: hidden;
  border-radius: 6px;
}
#frame #sidepanel #profile .wrap #status-options ul li {
  padding: 15px 0 30px 18px;
  display: block;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li {
    padding: 15px 0 35px 22px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li:hover {
  background: #496886;
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
    width: 14px;
    height: 14px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
  content: '';
  position: absolute;
  width: 14px;
  height: 14px;
  margin: -3px 0 0 -3px;
  background: transparent;
  border-radius: 50%;
  z-index: 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
    height: 18px;
    width: 18px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li p {
  padding-left: 12px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
  background: #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
  border: 1px solid #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
  background: #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
  border: 1px solid #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
  background: #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
  border: 1px solid #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
  background: #95a5a6;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
  border: 1px solid #95a5a6;
}
#frame #sidepanel #profile .wrap #expanded {
  padding: 100px 0 0 0;
  display: block;
  line-height: initial !important;
}
#frame #sidepanel #profile .wrap #expanded label {
  float: left;
  clear: both;
  margin: 0 8px 5px 0;
  padding: 5px 0;
}
#frame #sidepanel #profile .wrap #expanded input {
  border: none;
  margin-bottom: 6px;
  background: #32465a;
  border-radius: 3px;
  color: #f5f5f5;
  padding: 7px;
  width: calc(100% - 43px);
}
#frame #sidepanel #profile .wrap #expanded input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search {
  border-top: 1px solid #32465a;
  border-bottom: 1px solid #32465a;
  font-weight: 300;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #search {
    display: none;
  }
}
#frame #sidepanel #search label {
  position: absolute;
  margin: 10px 0 0 20px;
}
#frame #sidepanel #search input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  padding: 10px 0 10px 46px;
  width: calc(100% - 25px);
  border: none;
  background: #32465a;
  color: #f5f5f5;
}
#frame #sidepanel #search input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search input::-webkit-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input::-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-ms-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #contacts {
  height: calc(100% - 177px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts {
    height: calc(100% - 149px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  #frame #sidepanel #contacts::-webkit-scrollbar {
    display: none;
  }
}
#frame #sidepanel #contacts.expanded {
  height: calc(100% - 334px);
}
#frame #sidepanel #contacts::-webkit-scrollbar {
  width: 8px;
  background: #2c3e50;
}
#frame #sidepanel #contacts::-webkit-scrollbar-thumb {
  background-color: #243140;
}
#frame #sidepanel #contacts ul li.contact {
  position: relative;
  padding: 10px 0 15px 0;
  font-size: 0.9em;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact {
    padding: 6px 0 46px 8px;
  }
}
#frame #sidepanel #contacts ul li.contact:hover {
  background: #32465a;
}
#frame #sidepanel #contacts ul li.contact.active {
  background: #32465a;
  border-right: 5px solid #435f7a;
}
#frame #sidepanel #contacts ul li.contact.active span.contact-status {
  border: 2px solid #32465a !important;
}
#frame #sidepanel #contacts ul li.contact .wrap {
  width: 88%;
  margin: 0 auto;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap {
    width: 100%;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap span {
  position: absolute;
  left: 0;
  margin: -2px 0 0 -2px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 2px solid #2c3e50;
  background: #95a5a6;
}
#frame #sidepanel #contacts ul li.contact .wrap span.online {
  background: #2ecc71;
}
#frame #sidepanel #contacts ul li.contact .wrap span.away {
  background: #f1c40f;
}
#frame #sidepanel #contacts ul li.contact .wrap span.busy {
  background: #e74c3c;
}
#frame #sidepanel #contacts ul li.contact .wrap img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin-right: 10px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap img {
    margin-right: 0px;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta {
  padding: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap .meta {
    display: none;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .name {
  font-weight: 600;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
  margin: 5px 0 0 0;
  padding: 0 0 1px;
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -moz-transition: 1s all ease;
  -o-transition: 1s all ease;
  -webkit-transition: 1s all ease;
  transition: 1s all ease;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
  position: initial;
  border-radius: initial;
  background: none;
  border: none;
  padding: 0 2px 0 0;
  margin: 0 0 0 1px;
  opacity: .5;
}
#frame #sidepanel #bottom-bar {
  position: absolute;
  width: 100%;
  bottom: 0;
}
#frame #sidepanel #bottom-bar button {
  float: left;
  border: none;
  width: 50%;
  padding: 10px 0;
  background: #32465a;
  color: #f5f5f5;
  cursor: pointer;
  font-size: 0.85em;
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button {
    float: none;
    width: 100%;
    padding: 15px 0;
  }
}
#frame #sidepanel #bottom-bar button:focus {
  outline: none;
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
  border-right: 1px solid #2c3e50;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: none;
    border-bottom: 1px solid #2c3e50;
  }
}
#frame #sidepanel #bottom-bar button:hover {
  background: #435f7a;
}
#frame #sidepanel #bottom-bar button i {
  margin-right: 3px;
  font-size: 1em;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button i {
    font-size: 1.3em;
  }
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button span {
    display: none;
  }
}
#frame .content {
  
  float: right;
  width: 60%;
  height: 100%;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame .content {
    
    width: calc(100% - 58px);
    min-width: 300px !important;
    
  }
}
@media screen and (min-width: 900px) {
  #frame .content {
    width: calc(100% - 340px);
  }
}
#frame .content .contact-profile {
  width: 100%;
  height: 60px;
  line-height: 60px;
  background: #f5f5f5;
}
#frame .content .contact-profile img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin: 9px 12px 0 9px;
}
#frame .content .contact-profile p {
  float: left;
}
#frame .content .contact-profile .social-media {
  float: right;
}
#frame .content .contact-profile .social-media i {
  margin-left: 14px;
  cursor: pointer;
}
#frame .content .contact-profile .social-media i:nth-last-child(1) {
  margin-right: 20px;
}
#frame .content .contact-profile .social-media i:hover {
  color: #435f7a;
}
#frame .content .messages {
  height: auto;
  min-height: calc(100% - 93px);
  max-height: calc(100% - 93px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame .content .messages {
    max-height: calc(100% - 105px);
  }
}
#frame .content .messages::-webkit-scrollbar {
  width: 8px;
  background: transparent;
}
#frame .content .messages::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
}
#frame .content .messages ul li {
  display: inline-block;
  clear: both;
  float: left;
  margin: 15px 15px 5px 15px;
  width: calc(100% - 25px);
  font-size: 0.9em;
}
#frame .content .messages ul li:nth-last-child(1) {
  margin-bottom: 20px;
}
#frame .content .messages ul li.sent img {
  margin: 6px 8px 0 0;
}
#frame .content .messages ul li.sent p {
  background: #435f7a;
  color: #f5f5f5;
}
#frame .content .messages ul li.replies img {
  float: right;
  margin: 6px 0 0 8px;
}
#frame .content .messages ul li.replies p {
  background: #f5f5f5;
  float: right;
}
#frame .content .messages ul li img {
  width: 22px;
  border-radius: 50%;
  float: left;
}
#frame .content .messages ul li p {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 20px;
  max-width: 205px;
  line-height: 130%;
}
@media screen and (min-width: 735px) {
  #frame .content .messages ul li p {
    max-width: 300px;
  }
}
#frame .content .message-input {
  position: absolute;
  bottom: 0;
  width: 100%;
  z-index: 99;
}
#frame .content .message-input .wrap {
  position: relative;
}
#frame .content .message-input .wrap input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  float: left;
  border: none;
  width: calc(100% - 55px);
  padding: 11px 32px 10px 8px;
  font-size: 0.8em;
  color: #32465a;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap input {
    padding: 15px 32px 16px 8px;
  }
}
#frame .content .message-input .wrap input:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment {
  position: absolute;
  right: 60px;
  z-index: 4;
  margin-top: 10px;
  font-size: 1.1em;
  color: #435f7a;
  opacity: .5;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap .attachment {
    margin-top: 17px;
    right: 65px;
  }
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 50px;
  padding: 12px 0;
  cursor: pointer;
  background: #32465a;
  color: #f5f5f5;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
  background: #435f7a;
}
#frame .content .message-input .wrap button:focus {
  outline: none;
}
</style>
<body id="myPage">

<?php
    include('NavbarMember.html');
    ?>
<!--Content-->

<div  id="frame" style="padding-top: 30px;">
  <div id="sidepanel">
      <div id="profile">
          <div class="wrap">
              <img id="profile-img" src="./Images/userPic.png" class="online" alt="" />
              <p style="font-size: 18px; font-weight: bold;">Logan</p>
              
              <div id="status-options">
                  <ul>
                      <li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
                      <li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
                      <li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
                      <li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
                  </ul>
              </div>
              <div id="expanded">
                  <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                  <input name="twitter" type="text" value="mikeross" />
                  <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                  <input name="twitter" type="text" value="ross81" />
                  <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                  <input name="twitter" type="text" value="mike.ross" />
              </div>
          </div>
      </div>
      <div id="search">
          <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
          <input type="text" placeholder="ค้นหาผู้ติดต่อ..." />
      </div>
      <div id="contacts">
          <ul>
              <li id="contact1" class="contact"  onclick="showChat(1)">
                  <div class="wrap">
                      <span class="contact-status online"></span>
                      <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                      <div class="meta">
                          <p class="name">Louis Litt</p>
                          <p class="preview">You just got LITT up, Mike.</p>
                      </div>
                  </div>
              </li>
              <li id = "contact2" class="contact active" onclick="showChat(2)">
                  <div class="wrap">
                      <span class="contact-status busy"></span>
                      <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                      <div class="meta">
                          <p class="name">แม่ซื้อ</p>
                          <p class="preview"><span>คุณ:</span> คริคริคริ</p>
                      </div>
                  </div>
              </li>
              <li id = "contact3" class="contact"  onclick="showChat(3)">
                  <div class="wrap">
                      <span class="contact-status away""></span>
                      <img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
                      <div class="meta">
                          <p class="name">Rachel Zane</p>
                          <p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
                      </div>
                  </div>
              </li>
             
              <li id = "contact4" class="contact"  onclick="showChat(4)">
                  <div class="wrap">
                      <span class="contact-status"></span>
                      <img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" />
                      <div class="meta">
                          <p class="name">Jonathan Sidwell</p>
                          <p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
      <div id="bottom-bar">
          <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
          <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
      </div>
  </div>
  <!--Content Chat1-->
  <div id="Chat1" class="content"  style="display: none;">
    <div class="contact-profile">
        <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
        <p style="font-size: 18px; font-weight: bold;">Louis Litt</p>
        <div class="social-media">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
             <i class="fa fa-instagram" aria-hidden="true"></i>
        </div>
    </div>
    <div class="messages" id="message1">
        <ul>
            <li class="sent">
                <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                <p>ทักๆ คราฟ นายมีหมาใช่ไหม</p>
            </li>
            <li class="replies">
                <img src="./Images/userPic.png" alt="" />
                <p>ใช่แน้ววว</p>
            </li>
            <li class="replies">
                <img src="./Images/userPic.png" alt="" />
                <p> รู้วได้งาย</p>
            </li>
            <li class="sent">
                <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                <p>ก้อเทอปุกาดงาย</p>
            </li>
            <li class="replies">
                <img src="./Images/userPic.png" alt="" />
                <p>ประกาดขำๆ จ้าา</p>
            </li>
           
            <li class="sent">
                <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                <p>แงงๆ เส้าจาง</p>
            </li>
           
        </ul>
    </div>
    <div class="message-input">
        <div class="wrap">
        <input type="text" placeholder="พิมพ์ข้อความ..." />
        
        <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
    </div>
</div>




  <!--Content Chat2-->
  <div id="Chat2" class="content"  style="display: block;">
      <div class="contact-profile">
          <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
          <p style="font-size: 18px; font-weight: bold;">แม่ซื้อ</p>
          <div class="social-media">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-twitter" aria-hidden="true"></i>
               <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>
      </div>
      <div class="messages" id="message2">
          <ul>
              <li class="sent">
                  <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                  <p>ทักๆ คราฟ นายมีหมาใช่ไหม</p>
              </li>
              <li class="replies">
                  <img src="./Images/userPic.png" alt="" />
                  <p>ใช่แน้ววว</p>
              </li>
              <li class="replies">
                  <img src="./Images/userPic.png" alt="" />
                  <p> รู้วได้งาย</p>
              </li>
              <li class="sent">
                  <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                  <p>ก้อเทอปุกาดงาย</p>
              </li>
              <li class="replies">
                  <img src="./Images/userPic.png" alt="" />
                  <p>ประกาดขำๆ จ้าา</p>
              </li>
              <li class="replies">
                  <img src="./Images/userPic.png" alt="" />
                  <p>งงเลยดิ55555+</p>
              </li>
              <li class="sent">
                  <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                  <p>แงงๆ เส้าจาง</p>
              </li>
              <li class="replies">
                  <img src="./Images/userPic.png" alt="" />
                  <p>คริคริคริ</p>
              </li>
          </ul>
      </div>
      <div class="message-input" id="inputMessage2">
          <div class="wrap">
          <input type="text" placeholder="พิมพ์ข้อความ..." />
          
          <button class="submit" id="submit2"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </div>
      </div>
  </div>

  </div>




   
  

</body>



</html>

<script>
  // Script for side navigation
  function w3_open() {
      var x = document.getElementById("mySidebar ");
      x.style.width = "300px ";
      x.style.paddingTop = "10% ";
      x.style.display = "block ";
  }

  // Close side navigation
  function w3_close() {
      document.getElementById("mySidebar ").style.display = "none ";
  }

  // Used to toggle the menu on smaller screens when clicking on the menu button
  function openNav() {
      var x = document.getElementById("navDemo");

      if (x.className.indexOf("w3-show ") == -1) {
          x.className += " w3-show ";

      } else {
          x.className = x.className.replace(" w3-show ", " ");

      }


  }

  function openNav2() {

      var y = document.getElementById("navDemo2");
      if (y.className.indexOf("w3-show ") == -1) {
          y.className += " w3-show ";

      } else {
          y.className = y.className.replace(" w3-show ", " ");

      }




  }
</script>

<script>
  function hideNav() {
      document.getElementById("menu").style.display = "none";
      document.getElementById("searchMenu").style.display = "block";

  }


  function showNav() {
      document.getElementById("menu").style.display = "block";
      document.getElementById("searchMenu").style.display = "none";


  }

  function openForm() {
document.getElementById("myForm").style.display = "block";
document.getElementById("btnChat").style.display = "none";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
document.getElementById("btnChat").style.display = "block"
}
</script>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script >$(".messages").animate({ scrollTop: $(document).height() }, "fast");




function newMessage() {
	message = $("#inputMessage2 input").val();
	if($.trim(message) == '') {
		return false;
  }
  console.log(message);
	$('<li class="replies"><img src="./Images/userPic.png" alt="" /><p>' + message + '</p></li>').appendTo($('#message2 ul'));
  $('#inputMessage2 input').val(null);
	$('.contact.active .preview').html('<span>คุณ: </span>' + message);
	$("#message2").animate({ scrollTop: $(document).height() }, "fast");
};

$('#submit2').click(function() {
  newMessage();
  
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
//# sourceURL=pen.js


function showChat(id){
  switch(id) {
  case 1:
    document.getElementById('contact1').classList.add('active');
    document.getElementById('contact2').classList.remove('active');
    //document.getElementById('contact3').classList.remove('active');
    //document.getElementById('contact4').classList.remove('active');
    //Chat Box
    document.getElementById('Chat1').style.display = "block";
    document.getElementById('Chat2').style.display = "none";
    //document.getElementById('Chat3').style.display = "none";
    //document.getElementById('Chat4').style.display = "none";
    break;
  case 2:
    document.getElementById('contact1').classList.remove('active');
    document.getElementById('contact2').classList.add('active');
    //document.getElementById('contact3').classList.remove('active');
    //document.getElementById('contact4').classList.remove('active');
    //Chat Box
    document.getElementById('Chat1').style.display = "none";
    document.getElementById('Chat2').style.display = "block";
    //document.getElementById('Chat3').style.display = "none";
    //document.getElementById('Chat4').style.display = "none";
    break;
  case 3:
    document.getElementById('contact1').classList.remove('active');
    document.getElementById('contact2').classList.remove('active');
    //document.getElementById('contact3').classList.add('active');
    //document.getElementById('contact4').classList.remove('active');
    //Chat Box
    document.getElementById('Chat1').style.display = "none";
    document.getElementById('Chat2').style.display = "none";
    //document.getElementById('Chat3').style.display = "block";
    //document.getElementById('Chat4').style.display = "none";
    break;
  case 4 :
    document.getElementById('contact1').classList.remove('active');
    document.getElementById('contact2').classList.remove('active');
    //document.getElementById('contact3').classList.remove('active');
    //document.getElementById('contact4').classList.add('active');
    //Chat Box
    document.getElementById('Chat1').style.display = "none";
    document.getElementById('Chat2').style.display = "none";
    //document.getElementById('Chat3').style.display = "none";
    //document.getElementById('Chat4').style.display = "block";
  default:
    // code block
}
  
  
}
</script>