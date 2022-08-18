<template>
<div class="col-xl-3 col-lg-4 col-md-6 col-6">
    <div class="product_grid card b-0">
        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
        <div class="card-body p-0">
            <div class="shop_thumb position-relative">
                <router-link class="card-img-top d-block overflow-hidden" :to="'/shop/product/'+product.id"><img class="card-img-top" :src="product.images[0].source" :alt="'LaAble Fashions '+product.title"></router-link>
                <div class="product-left-hover-overlay">
                    <ul class="left-over-buttons">
                        <li><button type="button" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></button></li>
                        <li><button type="button" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist" @click="addToWishlist(product)"><i class="far fa-heart position-absolute"></i></button></li>
                        <li><button type="button" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart" @click="addToCart(product)"><i class="fas fa-shopping-basket position-absolute"></i></button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
            <div class="text-left">
                <div class="text-left">
                    <div class="elso_titl"><span class="small">Mobiles</span></div>
                    <h5 class="fs-md mb-0 lh-1 mb-1"><router-link :to="'/shop/product/'+product.id">{{product.title}}</router-link></h5>
                    <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">{{product.price}}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    data(){
        return  {
            editMode: true, 
            productForm: new Form({
                item_quantity: 1,
                product: {},
            }),
        }
    },
    mounted() {
        Fire.$on('BioDataFill', user =>{
            this.BioData.fill(user);
        });
        Fire.$on('AfterCreation', ()=>{
            //axios.get("api/profile").then(({ data }) => (this.BioData.fill(data)));
        });
    },
    methods:{
        addToCart(product){
            this.$Progress.start();
            this.productForm.put('/api/shop/cart/addToCart/'+product.id)
            .then(response =>{
                this.$Progress.finish();
                    Fire.$emit('cartReload', response.data.cart);
                    Swal.fire({
                        icon: 'success',
                        title: 'The Items has been added to your cart',
                        showConfirmButton: false,
                        timer: 1500
                    });
                })
            .catch(()=>{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: 'Please try again later!'
                    });
                this.$Progress.fail();
            }); 
            console.log(product);
        },
        addToWishlist(product){
            this.$Progress.start();
            this.productForm.put('/api/shop/cart/addToWishlist/'+product.id)
            .then(response =>{
                this.$Progress.finish();
                    Fire.$emit('cartReload');
                    Swal.fire({
                        icon: 'success',
                        title: 'The Items has been added to your wishlist',
                        showConfirmButton: false,
                        timer: 1500
                        });
                    })
                .catch(()=>{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: 'Please try again later!'
                        });
                    this.$Progress.fail();
                    }); 
            console.log(product);
        },
    },
    props:{product: Object,}
}
</script>
