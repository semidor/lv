<template>

<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Author</th>
      <th scope="col">Title</th>
      <th scope="col">User ID</th>
    </tr>
  </thead>
  <template v-for="book in books">
  <tbody>
    <tr>
      <th scope="row">{{book.id}}</th>
      <td>{{book.author}}</td>
      <td>{{book.title}}</td>
      <td>{{book.user_id}}</td>
    </tr>
    </tbody>
    </template>
</table>

</template>
<script>
export default {
    data(){
        return {
            books: []
        }
    },
    mounted(){
        axios.get('/api/books')
        .then(response=> {
            this.books = response.data.data
          
        })
    }
}


</script>