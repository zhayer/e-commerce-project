import{h}from"@stencil/core";export class ScEmpty{constructor(){this.icon=void 0}render(){return h("div",{key:"1de7d37f9b92fdddaa89052b103feaa81f3008ee",part:"base",class:"empty"},!!this.icon&&h("sc-icon",{key:"1325c620fee40fc5134bf3d9d97cd0360d8158fc",exportparts:"base:icon",name:this.icon}),h("slot",{key:"505ffdebf9389abf10e3becd91c61b172af2755a"}))}static get is(){return"sc-empty"}static get encapsulation(){return"shadow"}static get originalStyleUrls(){return{$:["sc-empty.scss"]}}static get styleUrls(){return{$:["sc-empty.css"]}}static get properties(){return{icon:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"icon",reflect:!1}}}}