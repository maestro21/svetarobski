(function(){function a(b){return b.id.replace(/\[/,"_").replace(/\]/,"_");}tinymce.PluginManager.add("alphamanager",function(c,b){c.settings.file_browser_callback=function(l,m,i,g){var j=function(q,r){var e=c.getParam("alphamanager",null);if(e!=null&&typeof(e[q])!="undefined"){return e[q];}else{return r;}};var p=j("skin","flat");var f=j("skinMod","");window.alphamanager_skin=p;window.alphamanager_skinMod=f;var o=tinymce.baseURL+"/plugins/alphamanager/index.html?integration=tinymce&skin="+p;if(f!=null&&f.length>0){o+="&skinMod="+f;}if(i=="image"){o+="&type=image";}window.alphamanager_onload=function(w){var u=document.getElementById("alphamanager_dlg_"+a(c));var t=u.offsetWidth;u.style.width=w+14+"px";var s=u.style.left.substr(0,u.style.left.length-2);u.style.left=(parseInt(s)+(t-parseInt(w))/2)+"px";var r=u.getElementsByClassName("mce-container-body");for(var q=0;q<r.length;q++){r[q].style.width="100%";}r=u.getElementsByClassName("mce-container");for(var q=0;q<r.length;q++){r[q].style.width="100%";}var v=u.getElementsByClassName("mce-btn");for(var q=0;q<v.length;q++){var e=v[q].style.left.substr(0,v[q].style.left.length-2);v[q].style.left=parseInt(e)+(parseInt(w)-parseInt(t))+14+"px";}};var h=window,k="inner";if(!("innerWidth" in window)){k="client";h=document.documentElement||document.body;}var d=h[k+"Height"];var n=c.getParam("alphamanager_height",700);if(n+90>d){n=d-90;}window.alphamanager_input=window.document.getElementById(l);window.alphamanager_btn="alphamanager_btn_ok_"+a(c);c.windowManager.open({id:"alphamanager_dlg_"+a(c),title:"Alpha Manager file browser",url:o,width:c.getParam("alphamanager_width",900),height:n,onsubmit:function(){close();},buttons:[{text:"Ok",id:"alphamanager_btn_ok_"+a(c),onclick:function(e){var q=g.document.getElementById("alphamanager_dlg_"+a(c));var r=q.getElementsByTagName("iframe")[0];r.contentWindow.setFile();},classes:"widget btn primary disabled"},{text:"Cancel",onclick:"close"}]});};});})();