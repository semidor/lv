<template>
<div class="container">
    <div class="overflow-auto">
   
        <b-table
      id="my-books"
      :items="books"
      :per-page="perPage"
      :current-page="currentPage"
      small 
    ></b-table>
    
 <b-pagination
     v-model="currentPage"
      :total-rows="rows"
      :per-page="perPage"
      first-text="First"
      prev-text="Prev"
      next-text="Next"
      last-text="Last"
      aria-controls="my-books"
    ></b-pagination>

<!--     <p class="mt-3">Current Page: {{ currentPage }}</p> -->

    </div>
</div>
</template>

<script>

export default {

    data(){
        return {
        perPage: 10,
        currentPage: 1,
        books: [] 
        }
    },
    mounted(){
        axios.get('/api/books?page=1')
        .then(response=> {
            this.books = response.data.data
            console.log(response)
        })
    },
    computed: {
      rows() {
        return this.books.length
      }
    }
}
</script>