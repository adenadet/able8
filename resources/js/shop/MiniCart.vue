<template>
<li class="nav-item dropdown">
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
</li>
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