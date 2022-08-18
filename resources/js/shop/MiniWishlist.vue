<template>
<div class="right-ch-sideBar">    
    <div class="cart_select_items py-2">
        <!-- Single Item -->
        <div v-for="(item,index) in cart_details.items" :key="index" class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
            <div class="cart_single d-flex align-items-center">
                <div class="cart_selected_single_thumb">
                    <a href="#"><img :src="product.images[0].source" width="60" class="img-fluid" alt="" /></a>
                </div>
                <div class="cart_single_caption pl-2">
                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                    <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
                    <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                </div>
            </div>
            <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
        </div>
    </div>
    
    <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
        <h6 class="mb-0">Subtotal</h6>
        <h3 class="mb-0 ft-medium">$417</h3>
    </div>
    
    <div class="cart_action px-3 py-3">
        <div class="form-group">
            <button type="button" class="btn d-block full-width btn-dark">Move To Cart</button>
        </div>
        <div class="form-group">
            <button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
        </div>
    </div>
    
</div>
<!--<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-shopping-cart"></i><span class="badge badge-success navbar-badge"> {{cart_details != null && cart_details.items != null  ? cart_details.totalQty : 0}}</span>
    </a>
    <div v-if="cart_details != null && cart_details.items != null" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">{{cart_details != null ? cart_details.totalQty+' items costing '+cart_details.totalPrice : ''}}</span>
        <div v-for="(item,index) in cart_details.items" :key="index">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                {{item.qty +' '+item.item.title+' costs '+item.price}}
            </a>
        </div>
        <a href="/shop/cart" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
</li>-->
</template>
<script>
export default {
    data(){
        return  {
            editMode: true, 
            cart_details: {},
        }
    },
    mounted() {
        this.getCart();
        Fire.$on('cartReload', ()=>{
            this.getCart();    
        });
        Fire.$on('BioDataFill', user =>{
            this.BioData.fill(user);
        });
        Fire.$on('AfterCreation', ()=>{
            //axios.get("api/profile").then(({ data }) => (this.BioData.fill(data)));
        });
    },
    methods:{
        getCart(){          
            axios.get('/api/shop/cart/getCart').then(response =>{
                this.cart_details= response.data.cart;
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({ icon: 'error', title: 'Something went wrong'});
            });
        }
    },
    props:{}
}
</script>