


// <script>
function PeeriusWrap(w,e){
	this.w=w;
	this.e=e;
}
var Peerius={
	rId:-1
	,scriptId:3473689
	,ign:{} 
	,pp:{} 
	,excTxt:false
	,start:0
	,serverUrl:"http://superdrug.peerius.com/tracker"
	,fixXml: function(s){
		s = s.replace(/&/g, "&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;");
		return s;
	}
	,browser:function(){
		var agt=navigator.userAgent.toLowerCase()
		if (agt.indexOf("opera") != -1) return 'Opera'
		if (agt.indexOf("firefox") != -1) return 'Firefox'
		if (agt.indexOf("safari") != -1) return 'Safari'
		if (agt.indexOf("msie") != -1) return 'msie'
	}
	,isIE8:function(){return window.XDomainRequest?true:false;}
	// LOGGING
	,log:function(s) {
	
	}
	,shallIgnore:function(el,attr)
	{
		if (attr)
		{
			// check attribute ignore
			var a=this.getAttr(el,attr);
			if(typeof a!='string') a=''
			return !(!this.ign['@'+attr] && !this.ign['@'+attr+'='+a]);
		}
		// check element ignore
		var tag=el.tagName.toLowerCase();
		if (this.ign[tag]) return 'ign';
		if (this.ign['-'+tag]) return 'deepign';
		for(var i=0;i<this.attrs.length;i++)
		{
			var attr=this.attrs[i];
			var a=this.getAttr(el,attr);
			if(typeof a!='string') a=''
			var ex=tag+'[@'+attr+'='+a+']';
			if(this.ign['-'+ex]) return 'deepign';
			if(this.ign[ex]) return 'ign';
		}
		var ep=el.parentNode
		if(ep){
			var c=0;
			for(var i=0;i<ep.childNodes.length;i++)
			{
				var epc=ep.childNodes[i];
				if (epc==el)
				{
					if (this.ign[tag+'['+c+']']) return 'ign';
					if (this.ign['-'+tag+'['+c+']']) return 'deepign';
				}
				if (epc.nodeType==1) c++;
			}
			var tn=ep.tagName.toLowerCase();
			if(tn=='tbody' || tn=='table')
			{
				if(tag!='tr' && tag!='thead' && tag!='tbody' && tag!='tfoot') return 'deepign';//invalid table nodes
			}
		}
		return 'inc';
	}
	,getAttr:function(e,attr)
	{
		var a=e.getAttribute(attr);
		if(this.browser()=='msie')
		{
			if (attr=='class')
			{
				a=e.getAttribute('className');
				if(!a) a=e.getAttribute('class'); //ie8
			} else if(attr=='selected')
			{
				a=e.selected;
				return a?"selected":null;
			}
		}
		if(attr=='value' && e.tagName=='INPUT') if(e.value) a=e.value
		if(attr=='selected' && a!=null) a='selected'
		return a;
	}
	,attrs:new Array('id','class','value','name','href','src','content','selected','title')
	,toXml:function(el){
		if(el.constructor==PeeriusWrap)
		{
			return "<"+el.w+">"+this.toXml(el.e)+"</"+el.w+">";
		} else if(el.constructor==Array){
			var m="";
			for(var i=0;i<el.length;i++)
			{
				m+=this.toXml(el[i]);
			}
			return m;
		} else if(el.constructor==String){
			return el;
		} else {
			switch (el.nodeType) {
			case 1:
				var xml = "";
				var ign=this.shallIgnore(el);
				var tn=el.tagName;
				var ine=(ign=='inc' && tn!="");
				if (ine)
				{
					if(tn.charAt(0)=='/') tn=tn.substring(1);
					xml+="<" + tn;
					for(var i=0;i<this.attrs.length;i++)
					{
						var attr=this.attrs[i];
						var a=this.getAttr(el,attr);
						if (a && !this.shallIgnore(el,attr)) xml+=' '+attr+'="'+this.fixXml(a)+'"';
					}
					xml += ">";
				}
				if(ign!='deepign')
				{
					var nodes = el.childNodes;
					for (var i = 0; i < nodes.length; i++) xml += this.toXml(nodes[i]);
				}
				if(ine) xml += "</" + tn + ">";
				return xml;
			case 3:
				if (this.excTxt) return "";
				return this.fixXml(el.nodeValue);
			}
		}
		return "";
	}
	,getNth:function(tagName, n) {
		var items = document.getElementsByTagName(tagName);
		return items[n];
	}
	,isArray:function (obj) {return obj.constructor == Array;}
	,exists:function(e)
	{
		try {
			var r=this.expr(e)
			if(r!=null)
			{
				if(this.isArray(r)) return r.length>0
			}
			return r!=null; 
		} catch(ex){return false};
	}
	,expr:function(expr,start)
	{
		try {
			var a=expr.split('/');
			var cel=start?start:document.body;
			var d=document;
			for(var i=0;i<a.length;i++)
			{
				var s=a[i];
				if(cel.tagName=='IFRAME')
				{
					if (cel.contentDocument) cel = cel.contentDocument; else cel = cel.contentWindow.document;
					d=cel;
					cel=cel.body;
				}
				if(s=='html')
				{
					cel=d.getElementsByTagName("html")[0];
				} else if(s.charAt(0)=='$' || s.charAt(0)=='#')
				{
					cel=d.getElementById(s.substring(1));
					if (cel==null) return null;
				} else if(s.charAt(0)=='.'){
					var els=new Array();
					var className=s.substring(1);
					var re;
					if(className.charAt(0)=='[')
					{
						re=new RegExp(className.substring(1,className.length-1),"i");
					}
					for(var k=0;k<cel.childNodes.length;k++)
					{
						var z=cel.childNodes[k];
						if(z.className!=undefined)
						{
							var zsp=z.className.split(" ");
							var fc=false;
							for(var j=0;j<zsp.length;j++)
							{
								var cn=zsp[j];
								if((re && re.test(cn)) || (!re && cn==className))
								{
									fc=true;
									if(i==a.length-1) 
										els[els.length]=z;
									else
									{
										var xr=this.expr(a.slice(i+1).join('/'),z);
										if (xr && this.isArray(xr)) 
										{
											for(var l=0;l<xr.length;l++) els[els.length]=xr[l];
										} else if(xr) els[els.length]=xr;
									}
								}
							}
							if(!fc)
							{
								var xr=this.expr(a.slice(i).join('/'),z);
								if (this.isArray(xr)) 
								{
									for(var l=0;l<xr.length;l++) els[els.length]=xr[l];
								} else els[els.length]=xr;
							}
						}
					}
					return els;
				} else if(s.charAt(0)=='@') {
					var a=s.substring(1,s.length);
					return "<attr>"+this.getAttr(cel,a)+"</attr>";
				} else if(s.charAt(0)=='|') {
					var sp=expr.substring(1,expr.length-1).split("#");
					var els=new Array();
					for(var j=0;j<sp.length;j++)
					{
						var r=this.expr(sp[j],cel);
						if(this.isArray(r))
						{
							for(var l=0;l<r.length;l++) els[els.length]=r[l];
						} else els[els.length]=r;
					}
					return new PeeriusWrap('_',els);
				} else
				{
					var sp=s.split('[');
					var tagName=sp[0].toUpperCase();
					var byName=(sp.length==2);
					var pos=byName?parseInt(sp[1].substring(0,sp[1].length-1)):null;
					if(tagName.length==0)
					{
						cel=cel.childNodes[pos];
					} else
					{
						if (typeof pos == 'number')
						{
							var els=cel.childNodes;
							cel=null;
							var k=0;
							for (var j=0;j<els.length;j++)
							{
								if (els[j].tagName==tagName)
								{
									if (pos==k) cel=els[j];
									k++;
								}
							}
						} else 
						{
							var els=new Array();
							for(var k=0;k<cel.childNodes.length;k++)
							{
								var z=cel.childNodes[k];
								if (z.tagName==tagName) els[els.length]=z;
							}
							if (i==a.length-1) return els;
							var r=new Array();
							for(var k=0;k<els.length;k++)
							{
								var z=els[k];
								var xr=this.expr(a.slice(i+1).join('/'),z);
								if (this.isArray(xr)) 
								{
									for(var l=0;l<xr.length;l++) r[r.length]=xr[l];
								}
								else r[r.length]=xr;
							}
							return r;
						}
					}
				}
			}
			return cel;
		} catch(e) {
			throw "error evaluating "+expr+" : "+e
		}
	}
	,eToMsg:function(xpath,e)
	{
		var m=""
		if (typeof e.tagName == 'undefined')
		{
			
			for (var j=0;j<e.length;j++)
			{
				if(e[j].constructor==String) m+=e[j]; else m+=Peerius.toXml(e[j])
			}
		} else {
			var s=this.toXml(e)
			if (s=='') throw xpath+" returned empty string"
			m+=s
		}
		return m
	}
	,esc:function(s)
	{
		return encodeURIComponent(s);
	}
	,encode64:function(input) {
		var keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#=";
		var o=[];
		var chr1, chr2, chr3;
		var enc1, enc2, enc3, enc4;
		var i = 0;
		while (i < input.length) {
			chr1 = input.charCodeAt(i++);
			chr2 = input.charCodeAt(i++);
			chr3 = input.charCodeAt(i++);
			enc1 = chr1 >> 2;
			enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
			enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
			enc4 = chr3 & 63;
			if (isNaN(chr2)) {
				enc3 = enc4 = 64;
			} else if (isNaN(chr3)) {
				enc4 = 64;
			}
			o.push(keyStr.charAt(enc1) + keyStr.charAt(enc2) + keyStr.charAt(enc3) + keyStr.charAt(enc4));
	   }
	   return o.join('');
	}
	,paramForNextReq:function(name,value)
	{
		this.cCookie("peerius_pass_"+name,value,30);
	}
	,send:function(method,msg,serverUrl){
		var sessionId=Peerius.sessionId,user=this.rCookie("peerius_user")
		,mm="method="+method+"&pageReferrer="+this.esc(document.referrer)
		mm+=(sessionId?"&sessionId="+sessionId:"")+(user?"&user="+this.esc(user):"")+"&msg="+this.esc(msg).replace(/(%20)+/g,'%20').replace(/(%09)+/g,'%09')+"&rid="+this.rId
		mm+="&ref="+this.esc(document.location)
		var loc=this.location()
		if(loc) mm+="&loc="+loc
		for(var n in this.pp) mm+="&params['"+n+"']="+this.esc(this.pp[n])
		this.allCookies(function(n,v){
			if(n.indexOf("peerius_pass_")==0) {
				mm+="&params['"+n.substring(13,n.length)+"']="+Peerius.esc(v)
				Peerius.cCookie(n,-1,-1)
			} else if(n.indexOf("peerius_stat_")==0) {
				mm+="&params['"+n.substring(13,n.length)+"']="+Peerius.esc(v)
			} 
		})
		var D=Peerius.browser()=="msie"?1900:5000
		try{D=peeriusMaxGETSize}catch(e){}
		mm=this.encode64(mm)
		var t=new Date().getTime(),i=0,c=1,l=mm.length,p=Math.floor(l/D)+1
		while(i<l)
		{
			var m=mm.slice(i,i+D),u=serverUrl+"?p="+p+"&c="+c+"&i="+t+"_"+this.scriptId+"&m="+m
			this.runScript(u,null,true)
			i+=D
			c++
		}
	}
	,msgHandlers:new Array()
	,sendMsg:function(method,msg,callback) {
		var l=this.msgHandlers.length
		this.msgHandlers[l]=callback
		this.pp["handlerId"]=l
		this.send(method,msg,this.serverUrl+"/trackerform.page")
	}
	,location:function(){
		var lang = document.getElementsByTagName("html")[0].getAttribute('lang')
		if (lang != undefined) return lang.replace(/[^a-zA-Z0-9\-_ ]/g, "")
		return lang
	}
	,runScript:function(url,id,ref){
		var script=document.createElement("script")
		script.charset="UTF-8"
		if (id) script.id=id
		script.type="text/javascript"
		if(!ref) url+="&ref="+this.esc(document.location)
		script.src=url
		document.getElementsByTagName("head")[0].appendChild(script)
	}
	,onload:function(func) 
	{
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				try {func()} catch(e){}
				if (oldonload) {
					try {oldonload()} catch(e){}
				}
			}
		}
	}
	,cCookie:function(name,value,secs) {
		if (secs) {
			var date = new Date();
			date.setTime(date.getTime()+(secs*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}
	,rCookie:function(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}
	,allCookies:function(f){
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			var ix=c.indexOf('=');
			var n=c.substring(0,ix);
			var v=c.substring(ix+1,c.length);
			f(n,v);
		}
	}
	,recsMap:null
	,fixUrls:function(e,serverUrl,widgetId)
	{
		for(var i=0;i<e.childNodes.length;i++)
		{
			var n=e.childNodes[i];
			if(n.nodeName=='A' && n.href)
			{
				var href=decodeURIComponent(n.href)
				var igidx=href.indexOf('ignore:')
				if(igidx!=0)
				{
					if(href.indexOf('prevpage:')==0)
					{
						n.href="javascript:Peerius.prevPage("+href.substring(9)+","+widgetId+")";
					} else if(href.indexOf('nextpage:')==0)
					{
						n.href="javascript:Peerius.nextPage("+href.substring(9)+","+widgetId+")";
					} else if(href.indexOf('markclick:')==0) {
						n.href=href.substring(10)
						n.onclick=function() {
							Peerius.markClick(href)
							return true
						}
					} else {
						var rid=this.findRid(href);
						var rUrl=n.href;
						n.onmouseup=function(e){
							if(e.which!=3)
							{
								Peerius.cCookie("peerius_rid",rid,1200)
								return true
							}
						}
					}
				} else n.href=n.href.substring(7);
			}
			this.fixUrls(n,serverUrl,widgetId);
		}
	}
	,clickErr:function(href)
	{
		var err="";
		for(var x in this.recsMap) err+=x+" - "+this.recsMap[x] +"\n";
		throw 'fixUrls: rid not found for '+href+"\nrecsMap="+err;
	}
	,findRid:function(href)
	{
		var idx=href.indexOf('//');
		if (idx==-1) throw 'findRid: cant find //';
		idx=href.indexOf('/',idx+2);
		href=href.substring(idx);
		var rid=this.recsMap[href];
		if(!rid) this.clickErr(href);
		return rid;
	}
	,extractRid:function(idOrHref) {
		if(typeof idOrHref=="number") 
			return idOrHref; 
		return this.findRid(idOrHref);
	}
	,markClick:function(idOrHref)
	{
		if(this.isOptIn())
		{
			var rid=this.extractRid(idOrHref)
			Peerius.cCookie("peerius_rid",rid,1200);
			return rid;
		}
	}
	,sendClick:function(idOrHref)
	{
		if(this.isOptIn())
		{
			var rid=this.extractRid(idOrHref)
			this.runScript(this.serverUrl+"/sendClick.page?rId="+rid+"&sessionId="+this.getSessionId())
			Peerius.cCookie("peerius_rid",-1)
		}
	}
	,recExprs:function(xpath)
	{
		var xps=xpath.split(',');
		for(var i=0;i<xps.length;i++)
		{
			try
			{
				if(xps[i]=='ignore') return 'ign';
				var e=this.expr(xps[i]);
				if (e) return e;
			} catch(e) {};
		}
		throw 'Invalid recs xpaths: '+xpath;
	}
	,getParam:function(name) {
		name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]")
		var regexS = "[\\?&]"+name+"=([^&#]*)"
		var regex = new RegExp(regexS)
		var results = regex.exec(window.location.href)
		return results==null?null:results[1]
	}
	,getSessionId:function() {
		var pgSid=this.getParam("peeriusPGSid")
		if(pgSid) return pgSid
		return Peerius.rCookie("peerius_sess")
	}
	,dynamic:function(){
		var sessionId=this.getSessionId();
		var userId=Peerius.rCookie("peerius_user")
		var rId=Peerius.rCookie("peerius_rid")
		Peerius.cCookie("peerius_rid",-1,1)
		var s=this.serverUrl+"/tracker.page?r="+new Date().getTime()
		if (sessionId)
		{
			Peerius.cCookie("peerius_sess",sessionId,14400)
			s+='&sessionId='+this.esc(sessionId)
		}
		if(userId) s+="&userId="+this.esc(userId)
		if(rId) s+="&rId="+rId
		var optOut=Peerius.rCookie("peerius_stat_optout")
		if(optOut) s+="&optout=1"
		Peerius.cCookie("peerius_ct","t",2)
		if(!Peerius.rCookie("peerius_ct")) s+="&ct=0"
		
		if(typeof(peeriusTrackerParams) != "undefined")
		{
			for(var n in peeriusTrackerParams) s+="&params['"+n+"']="+this.esc(peeriusTrackerParams[n]);
		}
		this.runScript(s,"peeriusScript");
	}
	,carousel:function(start,widgetId){
		var url=this.serverUrl+'/carousel.page?wId='+widgetId+'&sessionId='+this.sessionId+'&start='+start
		Peerius.runScript(url)
	}
	,nextPage:function(add,wId){
		this.start+=add
		this.carousel(this.start,wId)
	}
	,prevPage:function(add,wId){
		this.start-=add
		this.carousel(this.start,wId)
	}
	,recommend:function(widgets)
	{
		var url=this.serverUrl+'/extrarecs.page?sessionId='+this.sessionId
		for(var i=0;i<widgets.length;i++)
		{
			url+="&w="+widgets[i]
		}
		Peerius.runScript(url);
	}
	,inject:function(e,method,html)
	{
		if(method=='REPLACE')
		{
			e.innerHTML=html
			return e
		} else if(method=='APPEND')
		{
			var d=document.createElement('div')
			d.innerHTML=html
			e.appendChild(d)
			return d
		} else if(method=='INSERT_BEFORE')
		{
			var d=document.createElement('div')
			d.innerHTML=html
			e.parentNode.insertBefore(d, e)
			return d
		} else if(method=='INSERT_AFTER')
		{
			var d=document.createElement('div')
			d.innerHTML=html
			var x=e.nextSibling
			while ( x && x.nodeType!=1) 
			{
				x=x.nextSibling
			}
			if(x) 
				x.parentNode.insertBefore(d, x) 
			else 
				e.parentNode.appendChild(d)
			return d
		}
	},
	injectCss:function(css)
	{
		var s=document.createElement("style")
		s.setAttribute("type", "text/css")
		if (s.styleSheet) s.styleSheet.cssText = css; else s.appendChild(document.createTextNode(css))
		document.getElementsByTagName("head")[0].appendChild(s)
	}
	
	,recommendCallbackBefore:function(widgetName){}
	,recommendCallbackAfter:function(widgetName){},
	
	optout:function()
	{
		this.sendMsg("optout","")
		this.cCookie("peerius_stat_optout",1,630720000)
		this.cCookie("peerius_sess",-1,-1);
		this.cCookie("peerius_user",-1,-1);
	},
	optin:function()
	{
		this.cCookie("peerius_stat_optout",0,-1)
	},
	isOptIn:function() {
		return this.rCookie("peerius_stat_optout")==undefined
	},
	error:function(msg,e) {
		var m=msg+" : "+e+"\n"
		if (e.lineNumber) m+="line:"+e.lineNumber+"\n"
		if (e.description) m+="description: "+e.description+"\n"
		m+="url: "+window.location.href+"\n"
		Peerius.send("error",m,this.serverUrl+"/trackerform.page")
	}
}

Peerius.dynamic()