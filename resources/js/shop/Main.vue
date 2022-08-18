<template>
<div>
    <ShopSliders />
    <section class="middle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Trendy Products</h2>
                        <h3 class="ft-bold pt-3">Our Trending Products</h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center rows-products">
                <ShopMiniProduct v-for="product in products.data" :key="product.id" :product="product" />
            </div>
        </div>
    </section>
</div>
</template>
<script>

export default {
    data() {
        return {
            category: {},
            products: [],
        };
    },
    methods: {
        getAllInitials() {
            this.$Progress.start();
            //const axios = require("axios").default;
            axios.get("/api/shop/categories/1").then(response => {
                this.category = response.data.category;
                this.products = response.data.products;
                this.$Progress.finish();
            })
                .catch(() => {
                this.$Progress.fail();
                this.$toast.fire({ icon: "error", title: "Profile not loaded successfully" });
            });
        },
    },
    mounted() {
        this.getAllInitials();
    },
}
</script>