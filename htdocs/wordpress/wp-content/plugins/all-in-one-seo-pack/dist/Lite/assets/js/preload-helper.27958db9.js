const h="modulepreload",m=function(o,s){return o[0]==="."?new URL(o,s).href:o},u={},y=function(s,i,c){if(!i||i.length===0)return s();const a=document.getElementsByTagName("link");return Promise.all(i.map(n=>{if(n=m(n,c),n in u)return;u[n]=!0;const e=n.endsWith(".css"),f=e?'[rel="stylesheet"]':"";if(!!c)for(let r=a.length-1;r>=0;r--){const l=a[r];if(l.href===n&&(!e||l.rel==="stylesheet"))return}else if(document.querySelector(`link[href="${n}"]${f}`))return;const t=document.createElement("link");if(t.rel=e?"stylesheet":h,e||(t.as="script",t.crossOrigin=""),t.href=n,document.head.appendChild(t),e)return new Promise((r,l)=>{t.addEventListener("load",r),t.addEventListener("error",()=>l(new Error(`Unable to preload CSS for ${n}`)))})})).then(()=>s()).catch(n=>{const e=new Event("vite:preloadError",{cancelable:!0});if(e.payload=n,window.dispatchEvent(e),!e.defaultPrevented)throw n})};export{y as _};