
body {
    font-family: 'Open Sans';
    margin: 0;
    padding:0;
}

h1, h2, h3, h4, h5, .menu a, h1 a, h2 a {
    font-family: 'Open Sans';/*'Playfair Display';*/
    color: black;
    font-weight:bold !important;
}
h1 {
    font-weight: normal;
}
.wrap {
    width:80vw;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    word-wrap: break-word;
}

.section-image {
    height:100vh;
    background-size: cover;
   /* background-attachment: fixed; */
    background-position-x: center;
}

.header {
    position: absolute;
    z-index: 20;
    width:100%;
    bottom: 0;
    height:70px;
    background-color:white;
}

    .fixed {
        position: fixed;
    }
    .top {        
        top:0;
    }

    .introtext {
        position: absolute;
        top: -50vh;
        color: white;
        font-size: 1.2em;
        text-shadow: 1px 1px 4px black;
    }

    .menu {
        width: 800px;
    }
    .menu li {
        display: inline-flex;
    }
    .menu a {
        color: black;
        text-decoration: none;
        padding: 20px;
        display: table-cell;
        font-size: 20px;
    }


        .langs img.active {
            border: 1px white solid;
            border-radius: 50px;
        }

        .langs img {
            height: 50px;
        }


.section {
    padding: 25px 0;
    background-color: white;
}

h1 {
    margin-top: 50px;
    padding-top: 0;
}



.center {
    text-align: center;
}

.video {
    border: 10px black solid;
}

hr {
    border: 0.5px black solid;
    margin: 50px 0;
    margin-top: 70px;
}

.section ul {
    list-style: none;
}
.section li {

    margin:50px 0;
    margin-left: 100px;
}

.section li:before {
    width: 60px;
    height: 60px;
    background-color: #76C142;
    color: white;
    border: 4px solid white;
    font-size: 2em !important;
    text-align: center;
    vertical-align: middle;
    line-height: 56px;
    border-radius: 100%;
    margin-right: 10px;
    font-family: FontAwesome;
    margin-top: 11px;
    content: "\f00c";
    position: absolute;
    margin-left: -100px;
}


.footer .copy {
    height: 50px;
    font-size: 12px;
    line-height:30px;
    color: #444;
}

.red {
    color: #bb0000;
}

.half {
    display: table-cell;
    width: 50%;
    padding: 20px;
}

table select, 
table input, 
table textarea {
    width: 300px !important;
    padding: 8px;
    border-radius: 3px;
    box-sizing: border-box;
    border: 1px black solid;
    color: #727272;
    font-family: 'Open Sans';
}

td.lbl {
    width: 100px;
}
table textarea {
    height: 100px;
    min-width: 440px !important;
}

input[type=radio] {
    width: 22px !important;
}

.btn {
font-family: 'Open Sans';
}

.section .btn {
    font-size: 15px;
    padding: 10px 50px;
    margin: 5px 0px;
    color: white;
    display: inline-block;
    cursor: pointer;
    border-radius: 5px;
}

.section .btn.big {
    font-size: 25px;
    padding: 20px;
    width: 250px;
    background-color: #bb0000;
    text-align: center;
}


.right {
    float: right;
}

.table {
    display: table;
    width: 100%;
}

.gal .slick-prev:hover, .gal .slick-prev:focus, 
.gal .slick-prev {
    background: url(<?php echo BASE_URL;?>front/img/larr.png);
    background-size: cover;
    width: 60px;
    height: 196px;
    margin-left: -40px;
}

.gal .slick-next:hover, .gal .slick-next:focus,
.gal .slick-next {
    background: url(<?php echo BASE_URL;?>front/img/rarr.png);
    background-size: cover;
    width: 60px;
    height: 196px;
    margin-right: -40px;
}


.gal li:before {
    all: initial;
    cursor: pointer;
}

.slick-dots li:before {
    color: black;
    content: "\25CF";
    font-size: 30px;
}
.slick-dots li.slick-active:before {
    color: #e00000;
    content: "\25CF";
}
.gal tr,
.pic img {
    margin: 0 100px;
}

.gal .slick-dots {
    bottom: -50px;
}


.gal .pic {
    width: 1000px;
    height: 400px;
    background-position: center;
    background-repeat: no-repeat;
}

.company .gal .pic {
    height: 666px;
}

.header {
    box-shadow: 0 0.5px 1px #444;
}

.footer {
  /* box-shadow: 0 -0.5px 1px #444;*/
   border-top: 1px #444 solid;
}

.section.first {
    box-shadow: -1px -1px 1px #444;
}

.gal.slick-dotted.slick-slider {
    margin-bottom: 100px;
}

.instruction {
    color: #444;
    line-height: 30px;
}

.instruction hr {
    margin: 25px;
}

.header, .header a, .footer, .footer .wrap, .footer a {
    background-color: white;
}

body.admin {
    padding-top: 0;
}
.adminpanel {
    z-index: 999;
}

.introtext * {
    color: white;
}

td {
    max-width: 300px;
    overflow: hidden;
}

.table .info {
    width: 50%
}


textarea.html {
    width: 1200px !important;
    height: 700px !important; 
}

.section.first h1 {
    text-align: center
}


.countdown div {
    display: inline-block;
}

.instruction * {
    color: #a00;
    border-color: #a00;
    line-height: 30px;
    /* font-family: 'Playfair Display'; */
    font-size: 20px;
}

.countdown div p {
    font-size: 50px;
    margin: 20px;
}

form table {
width: auto;
}

form td {
max-width: 1200px;
}




@media(max-width:1200px) {
    .section .half {
        display: block;
        width: auto;
        padding: 50px 20px;
        margin: 0 auto;
        text-align: center;
    }

    .half strong {
        display: block;
    }

    form {
        display: inline-block;
        text-align: left;
    }

    table {
        width: auto;
    }

    p { font-size: 16px; }

    form *,
    strong {
        font-size: 1.05em;
    }

    .menu a {
    font-size:1.4em;
    }





    table select, table input {
    width: 500px !important;
    }

table textarea {
        width: 100% !important;
    }

.section .radiolist li {
font-size: 0.8em;
}

}

@media(max-device-width:600px) {
.menu a,
.footer p {
font-size:2em !important;
}
form td, .footer .copy, .introtext {
font-size: 1.5em;
}

.section .radiolist li {
font-size: .9em;
}

.instruction strong  {
font-size: 1.4em;
}
}

@media(max-device-width:400px) {
    .menu a,
    .footer p{
        font-size:3em !important;
    }

    .header {
        height: 8em !important;
        line-height: 8em !important;
    }

    .instruction strong  {
        font-size: 1.4em;
    }

    form *,  .section .btn  {
        font-size: 1.1em;
    }
    form td, .footer .copy, .introtext {
        font-size: 2em;
    }

    .section .radiolist li {
        font-size: 0.9em;
    }
}
