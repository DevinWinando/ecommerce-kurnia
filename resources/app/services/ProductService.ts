import ModelService from "@/services/ModelService";

export default class ProductService extends ModelService {

    constructor() {
        super();
        this.url = '/products';
    }

    public getProducts(params: any = {}) {
        return this.get(this.url, {
            params: {
                ...params,
            },
        });
    }

    public getCategories() {
        return this.get(`${this.url}/categories`);
    }

    public getByCategoryId(id: number) {
        return this.get(`${this.url}/categories/${id}`);
    }

    public searchProducts(query: string) {
        return this.get(`${this.url}/search`, {
            params: {
                q: query,
            },
        });
    }
}
