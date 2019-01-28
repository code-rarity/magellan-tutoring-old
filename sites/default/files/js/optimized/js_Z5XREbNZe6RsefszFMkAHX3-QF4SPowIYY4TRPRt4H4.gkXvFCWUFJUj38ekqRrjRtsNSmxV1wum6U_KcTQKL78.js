/* Source and licensing information for the line(s) below can be found at http://magellantutoring.com/themes/magellantutoring/js/spectragram.min.js. */
/*!
 * jQuery - Spectragram by Adrian Quevedo
 * http://adrianquevedo.com/  - http://lab.adrianquevedo.com/ - http://elnucleo.com.co/
 *
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * You are free to use this plugin in commercial projects as long as the copyright header is left intact.
 *
 * This plugin uses the Instagram(tm) API and is not endorsed or certified by Instagram or Burbn, inc. 
 * All Instagram(tm) logos and trademarks displayed on this plugin are property of Burbn, Inc.
 *
 * Date: Thu Jul 15 14:05:02 2012 -0500
 */
;if(typeof Object.create!=="function"){Object.create=function(e){function t(){};t.prototype=e;return new t()}}(function(e,t,n,s){var a={init:function(t,n){var a=this;a.elem=n;a.$elem=e(n);a.api="https://api.instagram.com/v1",a.accessData=e.fn.spectragram.accessData,a.options=e.extend({},e.fn.spectragram.options,t)},getRecentMedia:function(e){var t=this,a="/users/"+e+"/media/recent/?"+t.accessData.clientID+"&access_token="+t.accessData.accessToken+"";t.fetch(a).done(function(e){t.display(e)})},getUserFeed:function(){var t=this,a="/users/search?q="+t.options.query+"&count="+t.options.max+"&access_token="+t.accessData.accessToken+"";t.fetch(a).done(function(a){if(a.data.length){t.getRecentMedia(a.data[0].id)}
else{e.error("Spectagram.js - Error: the username "+t.options.query+" does not exist.")}})},getPopular:function(){var e=this,t="/media/popular?client_id="+e.accessData.clientID+"&access_token="+e.accessData.accessToken+"";e.fetch(t).done(function(t){e.display(t)})},getRecentTagged:function(){var t=this,a="/tags/"+t.options.query+"/media/recent?client_id="+t.accessData.clientID+"&access_token="+t.accessData.accessToken+"";t.fetch(a).done(function(a){if(a.data.length){t.display(a)}
else{e.error("Spectagram.js - Error: the tag "+t.options.query+" does not have results.")}})},fetch:function(t){var a=this,n=a.api+t;return e.ajax({type:"GET",dataType:"jsonp",cache:!1,url:n})},display:function(t){var a=this,i=a.options.size,s,o=(a.options.max>=t.data.length)?t.data.length:a.options.max;if(t.data.length===0){a.$elem.append(e(a.options.wrapEachWith).append(a.options.notFoundMsg))}
else{for(var n=0;n<o;n++){if(i=="small"){s=t.data[n].images.thumbnail.url}
else if(i=="medium"){s=t.data[n].images.low_resolution.url}
else{s=t.data[n].images.standard_resolution.url};var c;if(t.data[n].caption!=null){c="title=\""+e("<span/>").text(t.data[n].caption.text).html()+"\""};a.$elem.append(e(a.options.wrapEachWith).append("<a "+c+" target='_blank' href='"+t.data[n].link+"'><img src='"+s+"'></img></a>"))}};if(typeof a.options.complete==="function"){a.options.complete.call(a)}}};jQuery.fn.spectragram=function(t,n){if(jQuery.fn.spectragram.accessData.clientID){this.each(function(){var s=Object.create(a);s.init(n,this);if(s[t]){return s[t](this)}
else{e.error("Method "+t+" does not exist on jQuery.spectragram")}})}
else{e.error("You must define an accessToken and a clientID on jQuery.spectragram")}};jQuery.fn.spectragram.options={max:10,query:"coffee",size:"medium",wrapEachWith:"<li></li>",complete:null};jQuery.fn.spectragram.accessData={accessToken:null,clientID:null}})(jQuery,window,document);
/* Source and licensing information for the above line(s) can be found at http://magellantutoring.com/themes/magellantutoring/js/spectragram.min.js. */