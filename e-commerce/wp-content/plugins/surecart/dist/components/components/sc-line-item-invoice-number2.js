import{proxyCustomElement,HTMLElement,h}from"@stencil/core/internal/client";import{f as formBusy}from"./getters3.js";import{s as state}from"./mutations2.js";import{d as defineCustomElement$2}from"./sc-line-item2.js";import{d as defineCustomElement$1}from"./sc-skeleton2.js";const scLineItemInvoiceNumberCss=":host{display:block}sc-line-item{text-align:left;line-height:var(--sc-line-height-dense);color:var(--sc-input-label-color)}",ScLineItemInvoiceNumberStyle0=scLineItemInvoiceNumberCss,ScLineItemInvoiceNumber=proxyCustomElement(class extends HTMLElement{constructor(){super(),this.__registerHost(),this.__attachShadow()}render(){var e;const t=null==state?void 0:state.checkout,n=(null===(e=null==t?void 0:t.invoice)||void 0===e?void 0:e.order_number)||null;return n?formBusy()&&!(null==t?void 0:t.invoice)?h("sc-line-item",null,h("sc-skeleton",{slot:"title",style:{width:"120px",display:"inline-block"}}),h("sc-skeleton",{slot:"price",style:{width:"50px",display:"inline-block","--border-radius":"6px"}})):h("sc-line-item",null,h("span",{slot:"description"},h("slot",{name:"title"},wp.i18n.__("Invoice Number","surecart"))),h("span",{slot:"price-description"},"#",n)):null}static get style(){return ScLineItemInvoiceNumberStyle0}},[1,"sc-line-item-invoice-number"]);function defineCustomElement(){"undefined"!=typeof customElements&&["sc-line-item-invoice-number","sc-line-item","sc-skeleton"].forEach((e=>{switch(e){case"sc-line-item-invoice-number":customElements.get(e)||customElements.define(e,ScLineItemInvoiceNumber);break;case"sc-line-item":customElements.get(e)||defineCustomElement$2();break;case"sc-skeleton":customElements.get(e)||defineCustomElement$1()}}))}export{ScLineItemInvoiceNumber as S,defineCustomElement as d};