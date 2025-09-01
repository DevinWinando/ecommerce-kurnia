import ModelService from "@/services/ModelService";
import Form from "@/views/components/Form.vue";

export default class BannerService extends ModelService {
    constructor() {
        super();
        this.url = "/banners";
    }

    public getBanners(params: any = {}) {
        return this.get(this.url, {
            params: {
                ...params,
            },
        });
    }

    public createBanner(payload: any) {
        const formData = new FormData();
        if (payload.file) {
            formData.append("image", payload.file);
        }

        return this.post(this.url, formData);
    }

    public deleteBanner(id: number) {
        return this.delete(id);
    }
}
