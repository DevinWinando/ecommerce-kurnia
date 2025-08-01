import ModelService from "@/services/ModelService";

export default class TransactionService extends ModelService {

    constructor() {
        super();
        this.url = '/transactions';
    }

    public getTransactions(params: any = {}) {
        return this.get(this.url, {
            params: {
                ...params,
            },
        });
    }
}
