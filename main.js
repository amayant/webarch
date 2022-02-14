const svgLogo='';
const el=(i)=>{return document.getElementById(i)||document.querySelector(i)};
const cr=(n,o=null)=>{return o?document.createElementNS(o,n):document.createElement(n)};
/*** YOUR HTML CODE CONSTRUCT WITH JAVASCRIPT ***/
el("link").href=svgLogo;
let htmlImg=cr("img");
htmlImg.width="20";
htmlImg.height="20";
htmlImg.style.verticalAlign="middle";
htmlImg.src=svgLogo;
let htmlDiv=cr("div");
htmlDiv.appendChild(htmlImg);
htmlDiv.innerHTML+="Hello World !";
el("body").insertBefore(htmlDiv,el("body").querySelector("script"));
el("body").removeChild(el("body").querySelector("script"));
/*** END ***/
