'use strict';

Object.defineProperty(exports, '__esModule', { value: true });

const index = require('./index-8acc3c89.js');
const index$1 = require('./index-3ad2d5f0.js');
const store = require('./store-c4cf8771.js');
const mutations = require('./mutations-ddd639e5.js');
const util = require('./util-b877b2bd.js');
require('./fetch-f25a0cb0.js');
require('./add-query-args-49dcb630.js');
require('./remove-query-args-b57e8cd3.js');
require('./index-bcdafe6e.js');
require('./utils-2e91d46c.js');
require('./index-fb76df07.js');
require('./google-59d23803.js');
require('./currency-71fce0f0.js');
require('./store-4a539aea.js');
require('./price-653ec1cb.js');

const scCustomerNameCss = ":host{display:block}";
const ScCustomerNameStyle0 = scCustomerNameCss;

const ScCustomerName = class {
    constructor(hostRef) {
        index.registerInstance(this, hostRef);
        this.scInput = index.createEvent(this, "scInput", 7);
        this.scFocus = index.createEvent(this, "scFocus", 7);
        this.scBlur = index.createEvent(this, "scBlur", 7);
        this.size = 'medium';
        this.value = null;
        this.pill = false;
        this.label = undefined;
        this.showLabel = true;
        this.help = '';
        this.placeholder = undefined;
        this.disabled = false;
        this.readonly = false;
        this.required = false;
        this.invalid = false;
        this.autofocus = undefined;
        this.hasFocus = undefined;
    }
    /** Don't allow a blank space as an input here. */
    async reportValidity() {
        return this.input.reportValidity();
    }
    /** Silently update the checkout when the input changes. */
    async handleChange() {
        this.value = this.input.value;
        try {
            mutations.state.checkout = (await index$1.createOrUpdateCheckout({ id: mutations.state.checkout.id, data: { name: this.input.value } }));
        }
        catch (error) {
            console.error(error);
        }
    }
    /** Sync customer email with session if it's updated by other means */
    handleSessionChange() {
        var _a, _b, _c, _d, _e, _f;
        // we already have a value.
        if (this.value)
            return;
        const fromUrl = util.getValueFromUrl('full_name');
        if (!store.state.loggedIn && !!fromUrl) {
            this.value = fromUrl;
            return;
        }
        // we want the customer name to be forced if the user is logged in.
        if (store.state.loggedIn) {
            this.value = ((_b = (_a = mutations.state === null || mutations.state === void 0 ? void 0 : mutations.state.checkout) === null || _a === void 0 ? void 0 : _a.customer) === null || _b === void 0 ? void 0 : _b.name) || ((_c = mutations.state === null || mutations.state === void 0 ? void 0 : mutations.state.checkout) === null || _c === void 0 ? void 0 : _c.name);
            // otherwise we use the checkout name first.
        }
        else {
            this.value = ((_d = mutations.state === null || mutations.state === void 0 ? void 0 : mutations.state.checkout) === null || _d === void 0 ? void 0 : _d.name) || ((_f = (_e = mutations.state === null || mutations.state === void 0 ? void 0 : mutations.state.checkout) === null || _e === void 0 ? void 0 : _e.customer) === null || _f === void 0 ? void 0 : _f.name);
        }
    }
    /** Listen to checkout. */
    componentWillLoad() {
        this.handleSessionChange();
        this.removeCheckoutListener = mutations.onChange('checkout', () => this.handleSessionChange());
    }
    /** Remove listener. */
    disconnectedCallback() {
        this.removeCheckoutListener();
    }
    render() {
        return (index.h("sc-input", { key: '405c3f6ce8a692f29b4e85ac29bfdb9dba7d0f2e', type: "text", name: "name", ref: el => (this.input = el), value: this.value, label: this.label, help: this.help, autocomplete: "name", placeholder: this.placeholder, readonly: this.readonly, required: this.required, invalid: this.invalid, autofocus: this.autofocus, hasFocus: this.hasFocus, onScChange: () => this.handleChange(), onScInput: () => this.scInput.emit(), onScFocus: () => this.scFocus.emit(), onScBlur: () => this.scBlur.emit(), ...(this.disabled && { disabled: true }) }));
    }
};
ScCustomerName.style = ScCustomerNameStyle0;

exports.sc_customer_name = ScCustomerName;

//# sourceMappingURL=sc-customer-name.cjs.entry.js.map