<template>
<section class="content">
    <div class="container-fluid">
        <div class="home-slider margin-bottom-0">
            <ssr-carousel :autoplay-delay='3' loop show-arrows show-dots paginate-by-slide :gutter='20' class="col-md-12">
            <slide v-for="index in 10" :key="index" :index="index"><img  class="img-fluid col-12" :src="'https://via.placeholder.com/1920x540?text=Slide+'+index"></slide>
            </ssr-carousel>  
        </div>
    </div>
</section>
</template>
<script>
export default{
    data(){
        return{
            sliders: '',
        }
    }
}
</script>
<style>

</style>