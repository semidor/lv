<template>
<div class="container">
    
    <div class="container">
        <p> 
            <router-link :to="{name: 'home'}">Main page</router-link>
        </p>
    </div>
    
    <div>
    <router-view></router-view>
    </div>
</div>
</template>

<script>
export default {

}


</script>