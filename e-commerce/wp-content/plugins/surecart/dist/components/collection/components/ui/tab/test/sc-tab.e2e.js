import{newE2EPage}from"@stencil/core/testing";describe("sc-tab",(()=>{it("renders",(async()=>{const t=await newE2EPage();await t.setContent("<sc-tab></sc-tab>");const e=await t.find("sc-tab");expect(e).toHaveClass("hydrated")}))}));