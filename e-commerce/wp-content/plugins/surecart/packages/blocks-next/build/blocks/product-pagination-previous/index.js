!function(){"use strict";var e,r={3586:function(e,r,t){var n=window.wp.blocks,o=window.React,a=t.n(o),i=window.wp.primitives,c=(0,o.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,o.createElement)(i.Path,{d:"M16 10.5v3h3v-3h-3zm-5 3h3v-3h-3v3zM7 9l-3 3 3 3 1-1-2-2 2-2-1-1z"})),u=window.wp.blockEditor,l=window.wp.i18n;function s(e){let{name:r,...t}=e;const[n,i]=(0,o.useState)(null),c=window?.scData?.plugin_url+"/dist/icon-assets";if((0,o.useEffect)((()=>{fetch(`${c}/${r}.svg`).then((e=>e.text())).then((e=>{const r=(new DOMParser).parseFromString(e,"image/svg+xml");i(r?.documentElement)})).catch(console.error)}),[r]),!n)return null;const u={...Array.from(n.attributes).reduce(((e,r)=>(e[r.name.replace(/-([a-z])/g,(function(e){return e[1].toUpperCase()}))]=r.value,e)),{}),...t};return a().createElement(n.tagName,{...u,dangerouslySetInnerHTML:{__html:n.innerHTML}})}const f={none:"",arrow:(0,l.isRTL)()?"arrow-right":"arrow-left",chevron:(0,l.isRTL)()?"chevron-right":"chevron-left"};var p=JSON.parse('{"UU":"surecart/product-pagination-previous"}');(0,n.registerBlockType)(p.UU,{icon:c,edit:e=>{let{attributes:{label:r},setAttributes:t,context:{paginationArrow:n,showLabel:o}}=e;const a=f[n],i=(0,u.useBlockProps)({href:"#",onClick:e=>e.preventDefault(),className:"has-arrow-type-"+n});return React.createElement("a",i,!!a&&React.createElement(s,{name:a,className:"wp-block-surecart-product-pagination-next__icon","aria-hidden":!0}),o&&React.createElement(u.PlainText,{__experimentalVersion:2,tagName:"span","aria-label":(0,l.__)("Previous page link"),placeholder:(0,l.__)("Previous"),value:r,onChange:e=>t({label:e})}))}})}},t={};function n(e){var o=t[e];if(void 0!==o)return o.exports;var a=t[e]={exports:{}};return r[e](a,a.exports,n),a.exports}n.m=r,e=[],n.O=function(r,t,o,a){if(!t){var i=1/0;for(s=0;s<e.length;s++){t=e[s][0],o=e[s][1],a=e[s][2];for(var c=!0,u=0;u<t.length;u++)(!1&a||i>=a)&&Object.keys(n.O).every((function(e){return n.O[e](t[u])}))?t.splice(u--,1):(c=!1,a<i&&(i=a));if(c){e.splice(s--,1);var l=o();void 0!==l&&(r=l)}}return r}a=a||0;for(var s=e.length;s>0&&e[s-1][2]>a;s--)e[s]=e[s-1];e[s]=[t,o,a]},n.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(r,{a:r}),r},n.d=function(e,r){for(var t in r)n.o(r,t)&&!n.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:r[t]})},n.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},function(){var e={441:0,7277:0};n.O.j=function(r){return 0===e[r]};var r=function(r,t){var o,a,i=t[0],c=t[1],u=t[2],l=0;if(i.some((function(r){return 0!==e[r]}))){for(o in c)n.o(c,o)&&(n.m[o]=c[o]);if(u)var s=u(n)}for(r&&r(t);l<i.length;l++)a=i[l],n.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return n.O(s)},t=self.webpackChunk_surecart_blocks_next=self.webpackChunk_surecart_blocks_next||[];t.forEach(r.bind(null,0)),t.push=r.bind(null,t.push.bind(t))}();var o=n.O(void 0,[7277],(function(){return n(3586)}));o=n.O(o)}();