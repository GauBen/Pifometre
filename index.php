<!DOCTYPE html><html><head><meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0"><title>Pifomètre</title>
<style>html{height:100%;width:100%;display:table}#c{margin:1em;color:#888;bottom
:0;position:absolute}body{background:#FCF8EF;position:relative;margin:0;display:
table-cell;height:100%;vertical-align:middle;background:#FCF8EF;color:#333;font:
16px Tahoma,sans-serif}#box{cursor:pointer;padding:2em 1em 5em;text-align:center
;max-width:400px;margin:auto}#pif{font-size:2em;line-height:2.2}strong{font-size
:2em;line-height:1;color:#000;vertical-align:top}p+p{text-align:right;font-style
:italic;font-family:serif}a{color:navy}*{transition:all .2s}</style>
<link rel="icon" type="image/png" href="icon.png"></head><body>
<div id="box" tabindex="1"><p id="pif">Chargement du Pifomètre</p><p>Une autre
statistique pifométrique&nbsp;? [<span id="i"></span>]</p></div><p id="c">
<a href="http://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Pastiches/Pifom%C3%A8tre">
Plus d'infos</a> -
<a href="https://twitter.com/OpifOpinion">Institut de sondage</a></p><script>
var a=[<?php readfile('texts.js') ?>],_=document
,b=[],h=_.getElementById('i'),c=_.getElementById('pif'),d=_.getElementById('box'
);function ok(){b[0]||(b=a.slice());for(var e=0,f=b.splice(pif(0,b.length),1)[0]
,g="";e<f.length;e++)g+="string"===typeof f[e]?f[e]:("<strong>"+f[e]()).replace(
/(\d)(\d{3})$/,"$1&nbsp;$2")+"</strong>";c.style.opacity=0;setTimeout(function()
{c.style.opacity=1;c.innerHTML=g;},200);h.innerHTML=b.length}
function pif(a,b){return Math.random()*(b-a)+a|0}
function unpeu(){return pif(2,13)}
function quelqueuh(){return pif(11,29)}
function pasmal(){return pif(36,68)}
function bocoup(){return pif(89,213)}
function tresbocoup(){return pif(468,1277)}
function plusboucoup(){return pif(1431,3978)}
function bocoupbocoup(){return pif(48333,198432)}
(d.onclick=d.onkeydown=ok)();
</script></body><!-- Franchement, pire idée du monde. --></html>
