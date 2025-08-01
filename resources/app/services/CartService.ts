import ModelService from "@/services/ModelService";

export default class CartService extends ModelService {
    constructor() {
        super();
        this.url = "/cart";
    }

    public getCartItems(params: any = {}) {
        return this.get(this.url, {
            params: {
                ...params,
            },
        });
    }

    public syncCartItems(payload: any) {
        return this.post(this.url + "/sync", { items: payload });
    }

    public checkout(payload: any) {
        return this.post(this.url + "/checkout", payload);
    }
}
