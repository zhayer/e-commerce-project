var r={};function e(r){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(r)}Object.defineProperty(r,"__esModule",{value:!0});var d,n="https://js.stripe.com/v3",t=/^https:\/\/js\.stripe\.com\/v3\/?(\?.*)?$/,o="loadStripe.setLoadParameters was called but an existing Stripe.js script already exists in the document; existing script parameters will be used",a=function(){for(var e=document.querySelectorAll('script[src^="'.concat(n,'"]')),r=0;r<e.length;r++){var o=e[r];if(t.test(o.src))return o}return null},i=function(e){var r=e&&!e.advancedFraudSignals?"?advancedFraudSignals=false":"",t=document.createElement("script");t.src="".concat(n).concat(r);var o=document.head||document.body;if(!o)throw new Error("Expected document.body not to be null. Stripe.js requires a <body> element.");return o.appendChild(t),t},u=function(e,r){e&&e._registerWrapper&&e._registerWrapper({name:"stripe-js",version:"1.54.2",startTime:r})},l=null,f=function(e){return null!==l||(l=new Promise((function(r,n){if("undefined"!=typeof window&&"undefined"!=typeof document)if(window.Stripe&&e&&console.warn(o),window.Stripe)r(window.Stripe);else try{var t=a();t&&e?console.warn(o):t||(t=i(e)),t.addEventListener("load",(function(){window.Stripe?r(window.Stripe):n(new Error("Stripe.js not available"))})),t.addEventListener("error",(function(){n(new Error("Failed to load Stripe.js"))}))}catch(r){return void n(r)}else r(null)}))),l},c=function(e,r,n){if(null===e)return null;var t=e.apply(void 0,r);return u(t,n),t},s=function(r){var n="invalid load parameters; expected object of shape\n\n    {advancedFraudSignals: boolean}\n\nbut received\n\n    ".concat(JSON.stringify(r),"\n");if(null===r||"object"!==e(r))throw new Error(n);if(1===Object.keys(r).length&&"boolean"==typeof r.advancedFraudSignals)return r;throw new Error(n)},v=!1,p=function(){for(var e=arguments.length,r=new Array(e),n=0;n<e;n++)r[n]=arguments[n];v=!0;var t=Date.now();return f(d).then((function(e){return c(e,r,t)}))};p.setLoadParameters=function(e){if(v&&d){var r=s(e),n=Object.keys(r).reduce((function(r,n){var t;return r&&e[n]===(null===(t=d)||void 0===t?void 0:t[n])}),!0);if(n)return}if(v)throw new Error("You cannot change load parameters after calling loadStripe");d=s(e)},r.loadStripe=p;var w=r;export{w as p};