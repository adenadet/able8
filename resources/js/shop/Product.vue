<template>
<div>
<section class="middle">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <lin-gallery class="img-fluid" :items="items" ></lin-gallery>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="prd_details">
                    <div class="prt_01 mb-2"><span class="text-success bg-light-success rounded px-2 py-1">{{product.category.title}}</span></div>
                    <div class="prt_02 mb-3">
                        <h2 class="ft-bold mb-1">{{product.title}}</h2>
                        <div class="text-left">
                            <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="small">(412 Reviews)</span>
                            </div>
                            <div class="elis_rty"><span class="ft-medium text-muted line-through fs-md mr-2">$199</span><span class="ft-bold theme-cl fs-lg">$110</span></div>
                        </div>
                    </div>
                    
                    <div class="prt_03 mb-4">
                        <p>{{product.description}}</p>
                    </div>
                    
                    <div class="prt_04 mb-4">
                        <p class="d-flex align-items-center mb-1">Category:<strong class="fs-sm text-dark ft-medium ml-1">Salwar Suit, Women's</strong></p>
                        <p class="d-flex align-items-center mb-0">SKU:<strong class="fs-sm text-dark ft-medium ml-1">KUMO42568</strong></p>
                    </div>
                    
                    <div class="prt_05 mb-4">
                        <div class="form-row mb-7">
                            <div class="col-12 col-lg-auto">
                                <!-- Quantity -->
                                <select class="mb-2 custom-select">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg">
                                <!-- Submit -->
                                <button type="button" class="btn btn-block custom-height bg-dark mb-2" @click="addToCart(product)">
                                    <i class="lni lni-shopping-basket mr-2"></i>Add to Cart 
                                </button>
                            </div>
                            <div class="col-12 col-lg-auto">
                                <!-- Wishlist -->
                                <button class="btn custom-height btn-default btn-block mb-2 text-dark" data-toggle="button">
                                    <i class="lni lni-heart mr-2"></i>Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="prt_06">
                        <p class="mb-0 d-flex align-items-center">
                            <span class="mr-4">Share:</span>
                            <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                            <i class="fab fa-twitter position-absolute"></i>
                            </a>
                            <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                            <i class="fab fa-facebook-f position-absolute"></i>
                            </a>
                            <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
                            <i class="fab fa-pinterest-p position-absolute"></i>
                            </a>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Product Detail End ======================== -->

<!-- ======================= Product Description ======================= -->
<section class="middle">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
                <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="description-tab" href="#description" data-toggle="tab" role="tab" aria-controls="description" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#information" id="information-tab" data-toggle="tab" role="tab" aria-controls="information" aria-selected="false">Additional information</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#reviews" id="reviews-tab" data-toggle="tab" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                    </li>
                </ul>
                
                <div class="tab-content" id="myTabContent">
                    
                    <!-- Description Content -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="description_info">
                            <p class="p-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p class="p-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        </div>
                    </div>
                    
                    <!-- Additional Content -->
                    <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                        <div class="additionals">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="ft-medium text-dark">ID</th>
                                        <td>#1253458</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">SKU</th>
                                        <td>KUM125896</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">Color</th>
                                        <td>Sky Blue</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">Size</th>
                                        <td>Xl, 42</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">Weight</th>
                                        <td>450 Gr</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Reviews Content -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="reviews_info">
                            <div class="single_rev d-flex align-items-start br-bottom py-3">
                                <div class="single_rev_thumb"><img src="assets/img/team-1.jpg" class="img-fluid circle" width="90" alt="" /></div>
                                <div class="single_rev_caption d-flex align-items-start pl-3">
                                    <div class="single_capt_left">
                                        <h5 class="mb-0 fs-md ft-medium lh-1">Daniel Rajdesh</h5>
                                        <span class="small">30 jul 2021</span>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum</p>
                                    </div>
                                    <div class="single_capt_right">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single Review -->
                            <div class="single_rev d-flex align-items-start br-bottom py-3">
                                <div class="single_rev_thumb"><img src="assets/img/team-2.jpg" class="img-fluid circle" width="90" alt="" /></div>
                                <div class="single_rev_caption d-flex align-items-start pl-3">
                                    <div class="single_capt_left">
                                        <h5 class="mb-0 fs-md ft-medium lh-1">Seema Gupta</h5>
                                        <span class="small">30 Aug 2021</span>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum</p>
                                    </div>
                                    <div class="single_capt_right">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single Review -->
                            <div class="single_rev d-flex align-items-start br-bottom py-3">
                                <div class="single_rev_thumb"><img src="assets/img/team-3.jpg" class="img-fluid circle" width="90" alt="" /></div>
                                <div class="single_rev_caption d-flex align-items-start pl-3">
                                    <div class="single_capt_left">
                                        <h5 class="mb-0 fs-md ft-medium lh-1">Mark Jugermi</h5>
                                        <span class="small">10 Oct 2021</span>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum</p>
                                    </div>
                                    <div class="single_capt_right">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single Review -->
                            <div class="single_rev d-flex align-items-start py-3">
                                <div class="single_rev_thumb"><img src="assets/img/team-4.jpg" class="img-fluid circle" width="90" alt="" /></div>
                                <div class="single_rev_caption d-flex align-items-start pl-3">
                                    <div class="single_capt_left">
                                        <h5 class="mb-0 fs-md ft-medium lh-1">Meena Rajpoot</h5>
                                        <span class="small">17 Dec 2021</span>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum</p>
                                    </div>
                                    <div class="single_capt_right">
                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="reviews_rate">
                            <form class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h4>Submit Rating</h4>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="revie_stars d-flex align-items-center justify-content-between px-2 py-2 gray rounded mb-2 mt-1">
                                        <div class="srt_013">
                                            <div class="submit-rating">
                                                <input id="star-5" type="radio" name="rating" value="star-5" />
                                                <label for="star-5" title="5 stars">
                                                <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-4" type="radio" name="rating" value="star-4" />
                                                <label for="star-4" title="4 stars">
                                                <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-3" type="radio" name="rating" value="star-3" />
                                                <label for="star-3" title="3 stars">
                                                <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-2" type="radio" name="rating" value="star-2" />
                                                <label for="star-2" title="2 stars">
                                                <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-1" type="radio" name="rating" value="star-1" />
                                                <label for="star-1" title="1 star">
                                                <i class="active fa fa-star" aria-hidden="true"></i>
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="srt_014">
                                            <h6 class="mb-0">4 Star</h6>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="medium text-dark ft-medium">Full Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="medium text-dark ft-medium">Email Address</label>
                                        <input type="email" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="medium text-dark ft-medium">Description</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group m-0">
                                        <a class="btn btn-white stretched-link hover-black">Submit Review <i class="lni lni-arrow-right"></i></a>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</template>
<script>
//import store from '@/store';
import Form from 'vform';
export default {
    data(){
        return {
            productForm: new Form({
                item_quantity: 1,
                product: {},
            }),
            product: {},
            items: [],
        }
    },
    methods:{
        addToCart(product){
            this.$Progress.start();
            this.productForm.put('/api/shop/cart/addToCart/'+this.product.id)
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
        addItem(){
            if(this.productForm.item_quantity < this.product.stock){
                this.productForm.item_quantity++;
            }
        },
        getAllInitials(){
            axios.get('/api/shop/products/'+this.$route.params.id).then(response =>{
                this.product     = response.data.product;
                this.productForm.product = this.product;
                var i = 0
                for(i=0; i<this.product.images.length; i++){
                    this.items.push({
                        id: this.product.images[i].id, 
                        src: '/'+this.product.images[i].source, 
                        thumbnail: '/'+this.product.images[i].source, 
                        alt: this.product.title, 
                        caption: this.product.title
                    });
                }
                this.$Progress.finish();
            })
            .catch(()=>{
                this.$Progress.fail();
                this.$toast.fire({ icon: 'error', title: 'Product not loaded successfully'});
            });
        },
        removeItem(){
            if (this.productForm.item_quantity > 0){
            this.productForm.item_quantity--;
            }
            console.log(this.productForm.item_quantity);   
        },
    },
    mounted() {
        this.getAllInitials();
    },
}
</script>