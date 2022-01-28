<?php header("Content-type: text/css"); ?>

:root {
--dark-body: #4d4c5a;
--dark-main: #141529;
--dark-second: #79788c;
--dark-hover: #323048;
--dark-text: #f8fbff;
--light-body: #f3f8fe;
--light-main: #fdfdfd;
--light-second: #c3c2c8;
--light-hover: #edf0f5;
--light-text: #151426;
--blue: #0000ff;
--white: #fff;
--shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
--font-family: cursive;
}
.dark {
--bg-body: var(--dark-body);
--bg-main: var(--dark-main);
--bg-second: var(--dark-second);
--color-hover: var(--dark-hover);
--color-txt: var(--dark-text);
}
.light {
--bg-body: var(--light-body);
--bg-main: var(--light-main);
--bg-second: var(--light-second);
--color-hover: var(--light-hover);
--color-txt: var(--light-text);
}
* {
padding: 0;
margin: 0;
box-sizing: border-box;
}
html,
body {
height: 100vh;
display: grid;
place-items: center;
font-family: var(--font-family);
background-color: var(--bg-body);
}
.calendar {
height: max-content;
width: max-content;
background-color: var(--bg-main);
border-radius: 30px;
padding: 20px;
position: relative;
overflow: hidden;
/* transform: scale(1.25); */
}
.light .calendar {
box-shadow: var(--shadow);
}
.calendar-header {
display: flex;
justify-content: space-between;
align-items: center;
font-size: 25px;
font-weight: 600;
color: var(--color-txt);
padding: 10px;
}
.calendar-body {
padding: 10px;
}
.calendar-week-day {
height: 50px;
display: grid;
grid-template-columns: repeat(7, 1fr);
font-weight: 600;
}
.calendar-week-day div {
display: grid;
place-items: center;
color: var(--bg-second);
}
.calendar-days {
display: grid;
grid-template-columns: repeat(7, 1fr);
gap: 2px;
color: var(--color-txt);
}
.calendar-days div {
width: 50px;
height: 50px;
display: flex;
align-items: center;
justify-content: center;
padding: 5px;
position: relative;
cursor: pointer;
animation: to-top 1s forwards;
/* border-radius: 50%; */
}
.calendar-days div span {
position: absolute;
}
.calendar-days div:hover span {
transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
}
.calendar-days div span:nth-child(1),
.calendar-days div span:nth-child(3) {
width: 2px;
height: 0;
background-color: var(--color-txt);
}
.calendar-days div:hover span:nth-child(1),
.calendar-days div:hover span:nth-child(3) {
height: 100%;
}
.calendar-days div span:nth-child(1) {
bottom: 0;
left: 0;
}
.calendar-days div span:nth-child(3) {
top: 0;
right: 0;
}
.calendar-days div span:nth-child(2),
.calendar-days div span:nth-child(4) {
width: 0;
height: 2px;
background-color: var(--color-txt);
}
.calendar-days div:hover span:nth-child(2),
.calendar-days div:hover span:nth-child(4) {
width: 100%;
}
.calendar-days div span:nth-child(2) {
top: 0;
left: 0;
}
.calendar-days div span:nth-child(4) {
bottom: 0;
right: 0;
}
.calendar-days div:hover span:nth-child(2) {
transition-delay: 0.2s;
}
.calendar-days div:hover span:nth-child(3) {
transition-delay: 0.4s;
}
.calendar-days div:hover span:nth-child(4) {
transition-delay: 0.6s;
}
.calendar-days div.curr-date,
.calendar-days div.curr-date:hover {
background-color: var(--blue);
color: var(--white);
border-radius: 50%;
}
.calendar-days div.curr-date span {
display: none;
}
.month-picker {
padding: 5px 10px;
border-radius: 10px;
cursor: pointer;
}
.month-picker:hover {
background-color: var(--color-hover);
}
.year-picker {
display: flex;
align-items: center;
}
.year-change {
height: 40px;
width: 40px;
border-radius: 50%;
display: grid;
place-items: center;
margin: 0 10px;
cursor: pointer;
}
.year-change:hover {
background-color: var(--color-hover);
}
.calendar-footer {
padding: 10px;
display: flex;
justify-content: flex-end;
align-items: center;
}
.toggle {
display: flex;
}
.toggle span {
margin-right: 10px;
color: var(--color-txt);
}
.dark-mode-switch {
position: relative;
width: 48px;
height: 25px;
border-radius: 14px;
background-color: var(--bg-second);
cursor: pointer;
}
.dark-mode-switch-ident {
width: 21px;
height: 21px;
border-radius: 50%;
background-color: var(--bg-main);
position: absolute;
top: 2px;
left: 2px;
transition: left 0.2s ease-in-out;
}
.dark .dark-mode-switch .dark-mode-switch-ident {
top: 2px;
left: calc(2px + 50%);
}
.month-list {
position: absolute;
width: 100%;
height: 100%;
top: 0;
left: 0;
background-color: var(--bg-main);
padding: 20px;
grid-template-columns: repeat(3, auto);
gap: 5px;

display: grid;
transform: scale(1.5);
visibility: hidden;
pointer-events: none;
}

.month-list.show {
transform: scale(1);
visibility: visible;
pointer-events: visible;
transition: all 0.2s ease-in-out;
}
.month-list > div {
display: grid;
place-items: center;

}
.month-list > div > div {
width: 100%;
padding: 5px 20px;
border-radius: 10px;

text-align: center;

cursor: pointer;

color: var(--color-txt);
}

.month-list > div > div:hover {

background-color: var(--color-hover);

}
@keyframes to-top {
   0% {
   transform: translateY(100%);
   opacity: 0;
   }
   100% {
   transform: translateY(0);
   opacity: 1;

}

}
