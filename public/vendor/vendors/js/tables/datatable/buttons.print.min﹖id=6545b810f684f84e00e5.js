!function(t){"function"==typeof define&&define.amd?define(["jquery","datatables.net","datatables.net-buttons"],(function(e){return t(e,window,document)})):"object"==typeof exports?module.exports=function(e,n){return e||(e=window),n&&n.fn.dataTable||(n=require("datatables.net")(e,n).$),n.fn.dataTable.Buttons||require("datatables.net-buttons")(e,n),t(n,e,e.document)}:t(jQuery,window,document)}((function(t,e,n,o){var a=t.fn.dataTable,r=n.createElement("a"),i=function(t){return r.href=t,-1===(t=r.host).indexOf("/")&&0!==r.pathname.indexOf("/")&&(t+="/"),r.protocol+"//"+t+r.pathname+r.search};return a.ext.buttons.print={className:"buttons-print",text:function(t){return t.i18n("buttons.print","Print")},action:function(n,a,r,s){n=a.buttons.exportData(t.extend({decodeEntities:!1},s.exportOptions)),r=a.buttons.exportInfo(s);var u=a.columns(s.exportOptions.columns).flatten().map((function(t){return a.settings()[0].aoColumns[a.column(t).index()].sClass})).toArray(),d=function(t,e){for(var n="<tr>",a=0,r=t.length;a<r;a++)n+="<"+e+" "+(u[a]?'class="'+u[a]+'"':"")+">"+(null===t[a]||t[a]===o?"":t[a])+"</"+e+">";return n+"</tr>"},c='<table class="'+a.table().node().className+'">';s.header&&(c+="<thead>"+d(n.header,"th")+"</thead>"),c+="<tbody>";for(var l=0,f=n.body.length;l<f;l++)c+=d(n.body[l],"td");c+="</tbody>",s.footer&&n.footer&&(c+="<tfoot>"+d(n.footer,"th")+"</tfoot>"),c+="</table>";var m=e.open("","");m.document.close();var b="<title>"+r.title+"</title>";t("style, link").each((function(){var e=b,n=t(this).clone()[0];"link"===n.nodeName.toLowerCase()&&(n.href=i(n.href)),b=e+n.outerHTML}));try{m.document.head.innerHTML=b}catch(e){t(m.document.head).html(b)}m.document.body.innerHTML="<h1>"+r.title+"</h1><div>"+(r.messageTop||"")+"</div>"+c+"<div>"+(r.messageBottom||"")+"</div>",t(m.document.body).addClass("dt-print-view"),t("img",m.document.body).each((function(t,e){e.setAttribute("src",i(e.getAttribute("src")))})),s.customize&&s.customize(m,s,a),n=function(){s.autoPrint&&(m.print(),m.close())},navigator.userAgent.match(/Trident\/\d.\d/)?n():m.setTimeout(n,1e3)},title:"*",messageTop:"*",messageBottom:"*",exportOptions:{},header:!0,footer:!1,autoPrint:!0,customize:null},a.Buttons}));
