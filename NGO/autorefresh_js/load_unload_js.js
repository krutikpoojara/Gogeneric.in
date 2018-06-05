// JavaScript Document
function loadjscssfile(filename, filetype){
 if (filetype=="js"){ //if filename is a external JavaScript file
  var fileref=document.createElement('script')
  fileref.setAttribute("type","text/javascript")
  fileref.setAttribute("id","timer")
  fileref.setAttribute("src", filename)
 }
 else if (filetype=="css"){ //if filename is an external CSS file
  var fileref=document.createElement("link")
  fileref.setAttribute("rel", "stylesheet")
  fileref.setAttribute("type", "text/css")
  fileref.setAttribute("href", filename)
 }
 if (typeof fileref!="undefined")
  document.getElementsByTagName("head")[0].appendChild(fileref)

function unloadJS(file,path,path1){
                path=path?path:'';
                var script = document.getElementsByTagName("script");
                var i,j;
                for(i=0,j=script.length;i<j;i++){  
                        if (script[i].getAttribute("src") == (path1)){  
                                var t=Ext.get(script[i]);
                                t.remove();
                                for(i=0,j=this.JS.length;i<j;i++){
                                        if(this.JS[i].file==file && this.JS[i].path==path){
                                                this.setJSStatus(file,false,path);
                                        }
                                }
                                return;
                        }  

				}
		}

}
    