var cuerpo=document.getElementById("body"),strong=document.getElementById("strong"),b=document.getElementById("b"),a=document.getElementById("a"),i=document.getElementById("i"),abbr=document.getElementById("abbr");strong.addEventListener("click",()=>{var e=cuerpo.selectionEnd,u=cuerpo.value.substring(e,cuerpo.value.length);cuerpo.value=cuerpo.value.replace(u,""),cuerpo.value+="<strong>";var c=cuerpo.value.length;cuerpo.value+="</strong>",cuerpo.value+=u,cuerpo.focus(),cuerpo.setSelectionRange(c,c)}),b.addEventListener("click",()=>{var e=cuerpo.selectionEnd,u=cuerpo.value.substring(e,cuerpo.value.length);cuerpo.value=cuerpo.value.replace(u,""),cuerpo.value+="<b>";var c=cuerpo.value.length;cuerpo.value+="</b>",cuerpo.value+=u,cuerpo.focus(),cuerpo.setSelectionRange(c,c)}),a.addEventListener("click",()=>{var e=cuerpo.selectionEnd,u=cuerpo.value.substring(e,cuerpo.value.length);cuerpo.value=cuerpo.value.replace(u,""),cuerpo.value+="<a href='' target='_blank' class='blue-text'>";var c=cuerpo.value.length;cuerpo.value+="</a>",cuerpo.value+=u,cuerpo.focus(),cuerpo.setSelectionRange(c,c)}),i.addEventListener("click",()=>{var e=cuerpo.selectionEnd,u=cuerpo.value.substring(e,cuerpo.value.length);cuerpo.value=cuerpo.value.replace(u,""),cuerpo.value+="<i>";var c=cuerpo.value.length;cuerpo.value+="</i>",cuerpo.value+=u,cuerpo.focus(),cuerpo.setSelectionRange(c,c)}),abbr.addEventListener("click",()=>{var e=cuerpo.selectionEnd,u=cuerpo.value.substring(e,cuerpo.value.length);cuerpo.value=cuerpo.value.replace(u,""),cuerpo.value+="<abbr title=''>";var c=cuerpo.value.length;cuerpo.value+="</abbr>",cuerpo.value+=u,cuerpo.focus(),cuerpo.setSelectionRange(c,c)});